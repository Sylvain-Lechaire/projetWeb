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
function login($post){
    require 'Model/user.php';

    if(isset($post['username']) && isset($post['password'])){
        $username = $post['username'];
        $password = hash("sha256", $post['password']);

        if (passwordCheck($username, $password)) {
            $_SESSION['username'] = $username;
            $_SESSION['Fullname'] = fullName($username);
            $_SESSION['cart'] = [];
            $_SESSION['isAdmin'] = isAdmin($username);

            header('Location: ?');
        } else {
            $error = "Wrong username or password";
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
 * @param $post array The post array
 * @return null
 */
function register($post){
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

                $_SESSION['username'] = $username;
                $_SESSION['Fullname'] = fullName($username);
                $_SESSION['cart'] = [];
                $_SESSION['isAdmin'] = isAdmin($username);

                header('Location: ?');
            } else {
                $error = "This email is already used";
                require 'View/register.php';
            }
        } else {
            $error = "Please enter a valid email";
            require 'View/register.php';
        }
    } else {
        require 'View/register.php';
    }

}