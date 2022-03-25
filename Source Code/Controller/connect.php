<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider Amos Le coq
Version: 1.0.1
date: 04.02.22
*/

require '../Model/GetLogin.php';
require '../Controller/login.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = hash("sha256", $_POST['password']);

    if (passwordCheck($username, $password)) {
        login($username, $password);
    } else {
        header("Location: ../View/Login.php?action=erreur&erreur=Username or password are incorrect");

    }
}else{
    header("Location: ../View/Login.php&erreur=Username or password are not posted");
}
?>