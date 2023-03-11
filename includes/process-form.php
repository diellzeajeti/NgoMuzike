<?php
session_start();

if (isset($_POST['signup'])) {
    // Grabbing the data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pwdrepeat = $_POST['pwdrepeat'];
    $email = $_POST['email'];
    $isAdmin =$_POST['isAdmin']; 

    // Instantiating signup-controller class
    include '../classes/dbConfig.class.php';
    include '../classes/signup.class.php';
    include '../classes/signup-contr.class.php';
    $signup = new SignupContr($username, $password, $pwdrepeat, $email, $isAdmin);

    // Checking for errors first then submiting the data
    $signup->signupUser();
    // Changing location to index.php
    header("Location: ../index.php?signup=success");
}elseif (isset($_POST['login'])) {
    $username = $_POST['usernameL'];
    $password = $_POST['passwordL'];

    include '../classes/dbConfig.class.php';
    include '../classes/login.class.php';
    include '../classes/login-contr.class.php';

    $login = new LoginContr($username, $password);

    $login->loginUser();
  
} elseif (isset($_GET['logout'])) {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
} 
?>