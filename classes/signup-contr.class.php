<?php
class SignupContr extends Signup{
    private $username;
    private $password;
    private $pwdrepeat;
    private $email;
    private $isAdmin;

    public function __construct($username, $password, $pwdrepeat, $email, $isAdmin){
        $this->username = $username;
        $this->password = $password;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
        $this->isAdmin = $isAdmin;
    }

    public function signupUser(){
        if($this->emptyInput() == false){
            header("Location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidusername() == false){
            header("Location: ../index.php?error=invalid-username");
            exit();
        }
        if($this->invalidEmail() == false){
            header("Location: ../index.php?error=invalid-email");
            exit();
        }
        if($this->pwdMatch() == false){
            header("Location: ../index.php?error=password-confirm");
            exit();
        }
        if($this->usernameTaken() == false){
            header("Location: ../index.php?error=usernameOremail-taken");
            exit();
        }

        $this->setUser($this->username, $this->password, $this->email, $this->isAdmin);

    }
    

    private function emptyInput(){
        $result = null;
        if(empty($this->username) || empty($this->password)
        || empty($this->pwdrepeat) || empty($this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidusername(){
        $result = null;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->username)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){
        $result = null;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function pwdMatch(){
        $result = null;
        if($this->password !== $this->pwdrepeat){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function usernameTaken(){
        $result = null;
        if(!$this->checkUser($this->username, $this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }



}

?>