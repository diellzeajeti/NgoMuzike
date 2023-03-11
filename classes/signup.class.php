<?php
class Signup extends DbConfig{
    protected function setUser($username, $password, $email, $isAdmin){
        $stmt = $this->connect()->prepare('INSERT INTO perdoruesi(username, password, email, isAdmin) VALUES (?, ?, ?, ?);');
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        if(!$stmt->execute(array($username, $hashedPwd, $email, $isAdmin))){
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }
    }

    protected function checkUser($username, $email){
        $stmt = $this->connect()->prepare('SELECT username FROM perdoruesi WHERE username=? OR email=? ');
        if(!$stmt->execute(array($username, $email))){
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }
        $resultCheck = null;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }
}

?>