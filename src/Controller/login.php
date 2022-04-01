<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider Amos Le Coq
Version: 1.0.0
date: 03.03.22
*/

/**
 * @param $username
 * @param $password
 * @return void
 */
function login($username, $password){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['Fullname'] = fullName($username);

    header("Location: ../View/");
}
