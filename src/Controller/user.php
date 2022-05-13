<?php
/**
 * @file      Controller/user.php
 * @brief     This file is to control user setting
 * @author    Created by Ethann.SCHNEIDER AND Amos.LeCoq
 * @version   13-MAY-2022
 */

/**
 * @brief Check user information (password) and set the session variables
 * @param $username string username/email of user
 * @param $passwordUnHashed string password of user not hashed
 * @return null
 */
function login($username, $passwordUnHashed){
    require 'Model/user.php';
    require 'Model/cart.php';

    if (isset($username) && isset($passwordUnHashed)) {
        $password = hash("sha256", $passwordUnHashed);

        if (passwordCheck($username, $password)) {
            $_SESSION['username'] = $username;
            $_SESSION['Fullname'] = fullName($username);
            $_SESSION['cart'] = getCart($username);

            header('Location: ?');
        } else {
            require 'View/login.php';
        }
    }else{
        require 'View/login.php';
    }

}

/**
 * @brief Log the user out
 * @return null
 */
function logout(){
    session_destroy();
    header('Location: ?');
}

/**
 * @brief Enter user information to enter the database and create a new user
 * @param $username string username/email of user
 * @param $realName string real name of user
 * @param $surname string surname of user
 * @param $passwordUnHashed string password of user not hashed
 * @return null
 */
function register($username, $realName, $surname, $passwordUnHashed){
    require "Model/user.php";
    require "Model/cart.php";

    if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
        if (!isLoginExist($username)) {
            $password = hash("sha256", $passwordUnHashed);
            newAccount($username, $password, $realName, $surname);

            $_SESSION['username'] = $username;
            $_SESSION['Fullname'] = fullName($username);
            $_SESSION['cart'] = getCart($username);

            header('Location: ?');
        } else {
            require 'View/register.php';
        }
    } else {
        require 'View/register.php';
    }

}
