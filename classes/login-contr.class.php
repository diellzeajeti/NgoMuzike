<?php
class LoginContr extends Login{
    private $username;
    private $password;

    public function __construct($username,$password){
        $this->username = $username;
        $this->password = $password;
    }

    public function loginUser(){
        if($this->emptyInput() === false){
            header("Location: ../index.php?error=emptyInput");
            exit();
        }
        $this->getUser($this->username, $this->password);
    }
    private function emptyInput(){
        $result = null;
        if(empty($this->username) || empty($this->password)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
}
?>