<?php
/**
 * @file      Controller/user.php
 * @brief     This file is to control user setting
 * @author    Created by Ethann.SCHNEIDER AND Amos.LeCoq
 * @version   17-JUNE-2022
 */

/**
 * @brief Check user information (password) and set the session variables
 * @param $post array The post array
 * @return null
 */
function login($username, $password){
    require 'Model/user.php';

    if(isset($username) && isset($password)){
        $passwordHash = hash("sha256", $password);

        if (passwordCheck($username, $password)) {
            //TODO NGY DRY principle - duplicate with register
            $_SESSION['username'] = $username;
            $_SESSION['fullname'] = fullName($username);//TODO NGY we do not need this attribute (duplicate of username)
            $_SESSION['cart'] = [];
            //TODO NGY Make sense to offer the cart function to the admin ?
            $_SESSION['isAdmin'] = isAdmin($username);

            header('Location: ?');
        } else {
            $error = "Wrong username or password";
        }
    }
    require 'View/login.php';
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
 * @param $post array The post array
 * @return null
 */
function register($username, $realName, $surname, $password){
    require "Model/user.php";

    if(isset($post['username']) && isset($post['realName']) && isset($post['surname']) && isset($post['password'])){
        $username = $post['username'];
        $realName = $post['realName'];
        $surname = $post['surname'];
        $passwordUnHashed = $post['password'];
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            if (!isLoginExist($username)) {
                $password = hash("sha256", $passwordUnHashed);
                newAccount($username, $password, $realName, $surname);

                //TODO NGY DRY principle - duplicate with login
                $_SESSION['username'] = $username;
                $_SESSION['Fullname'] = fullName($username);
                $_SESSION['cart'] = [];
                $_SESSION['isAdmin'] = isAdmin($username);

                header('Location: ?');
            } else {
                $error = "This email is already used";
            }
        } else {
            $error = "Please enter a valid email";
        }
    }
    require 'View/register.php';
}