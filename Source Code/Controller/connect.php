<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.0
date: 04.02.22
*/

require '../Model/GetLogin.php';

if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password =  hash("sha256", $_POST['password']);

    if (passwordCheck($username, $password)){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['Fullname'] = fullName($username);
        header("Location: ../View/");
    }else{
        header("Location: ../View/login.php");
    }
}else{
    header("Location: ../View/login.php");
}
?>