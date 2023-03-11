<?php
class Login extends DbConfig{
    protected function getUser($username,$password){
        $stmt = $this->connect()->prepare("SELECT password FROM perdoruesi WHERE username = ? OR email = ?;");
        if(!$stmt->execute(array($username, $password))){
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() === 0){
            $stmt = null;
            header("Location: ../index.php?error=usernotfound");
            exit();
        }

        $hashedPassword = $stmt->fetchAll();
        $checkPassword = password_verify($password, $hashedPassword[0]['password']);

        if($checkPassword === false){
            $stmt = null;
            header("Location: ../index.php?error=wrongpassword");
            exit();
        }elseif($checkPassword === true){
            $stmt = $this->connect()->prepare("SELECT * FROM perdoruesi WHERE username = ? OR email = ? AND password = ?;");
            
            if(!$stmt->execute(array($username, $username, $password))){
                $stmt = null;
                header("Location: ../index.php?error=stmtfailed");
                exit();
            }
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount() === 0){
                $stmt = null;
                header("Location: ../index.php?error=usernotfound");
                exit();
            }
            if($stmt->rowCount() > 0){
                if($row['isAdmin'] == 1){

                    $_SESSION['admin_id'] = $row['id'];
                    header('Location: ../admin/admin.php');
           
                 }elseif($row['isAdmin'] == 0){
           
                    $_SESSION['user_id'] = $row['id'];
                    header('Location: ../ngomuzike.php');
            }

        }

            $stmt = null;

        }
            $stmt = null;
    }
}

?>