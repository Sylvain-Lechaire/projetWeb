<?php
/**
 * @file      Controller/user.php
 * @brief     This file is to control user setting
 * @author    Created by Ethann.SCHNEIDER AND Amos.LeCoq
 * @version   06-MAI-2022
 */

function login($username, $passwordUnHashed){
    require 'Model/GetLogin.php';

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $password = hash("sha256", $passwordUnHashed);

        if (passwordCheck($username, $password)) {
            $_SESSION['username'] = $username;
            $_SESSION['Fullname'] = fullName($username);

            require 'View/home.php';
        } else {
            require 'View/login.php';
        }
    }else{
        require 'View/login.php';
    }
}

function logout(){
    session_destroy();
    require 'View/home.php';
}

function register($username, $realName, $familyName, $passwordUnHashed){
    require "Model/insertNewAccount.php";
    require "Model/GetLogin.php";

    if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
        if (!isLoginExist($username)) {
            $password = hash("sha256", $passwordUnHashed);
            newAccount($username, $password, $realName, $familyName);

            $_SESSION['username'] = $username;
            $_SESSION['Fullname'] = fullName($username);

            require 'View/home.php';
        } else {
            require 'View/register.php';
        }
    } else {
        require 'View/register.php';
    }

}
