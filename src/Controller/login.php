<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider Amos Le Coq
Version: 1.0.1
date: 01.04.22
*/

/**
 * @brief init session
 * @param $username string username/email of user
 * @param $password string password hashed of user
 * @return void
 */
function login($username, $password){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['Fullname'] = fullName($username);

    header("Location: ../View/");
}
