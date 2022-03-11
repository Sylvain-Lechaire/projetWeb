<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.0
date: 04.02.22
*/

require '../Model/GetLogin.php';
require '../Controller/login.php';

if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password =  hash("sha256", $_POST['password']);

    if (passwordCheck($username, $password)){
        login($username, $password);
    }else{
        header("Location: ../View/login.php?action=erreur");
    }
}else{
    header("Location: ../View/login.php");
}
?>