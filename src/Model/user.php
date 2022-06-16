<?php

/**
 * @file      Model/user.php
 * @brief     This file contains the functions to manage the user.
 * @author    Created by Ethann.SCHNEIDER, Amos.LeCoq, Sylvain.Léchaire
 * @version   10-JUNE-2022
 */

/**
 * @brief Check if username correspond to password
 * @param $user string username/email of user
 * @param $password string password already hash
 * @return bool true if user already in database else false
 */
function passwordCheck($user , $password){
    $result = false;
    $strSeparator ='\'';
    //$loginQuery='SELECT userEmailAddress,userPsw FROM users WHERE userEmailAddress = '.$strSeparator.$userEmailAddress.'AND userPsw ='.$strSeparator.$userPsw.$strSeparator;

    //select to check the user's input
    $loginQuery='SELECT userMail, password FROM users ';
    $loginQuery.='WHERE userMail='.$strSeparator.$user.$strSeparator;
    $loginQuery.=' AND password ='.$strSeparator.$password.$strSeparator;
    //execute query
    require_once "Model/dbConnector.php";
    $queryResult = querySelect($loginQuery);
    if (count($queryResult)==1){
        $result = true;
    }
    return $result;
}

/**
 * @brief get user real name and family name
 * @param $user string username/email of user
 * @return string Full name of users
 */
function fullName($user){
    $strSeparator ='\'';
    $usrNameQuery = 'SELECT firstName, lastName FROM Users WHERE userMail = '.$strSeparator.$user.$strSeparator;
    $queryResult=querySelect($usrNameQuery)[0];
    return $queryResult[0]." ".$queryResult[1];
}

function isAdmin($login){
    $strSeparator ='\'';

    //select to check the user's input
    $loginQuery='SELECT isAdmin FROM users ';
    $loginQuery.='WHERE userMail='.$strSeparator.$login.$strSeparator;
    //execute query
    require_once "Model/dbConnector.php";
    $queryResult = querySelect($loginQuery);

    return $queryResult[0][0];
}

/**
 * @brief get is login already exist
 * @param $login string username/email of user
 * @return bool if it exist return true if not return false
 */
function isLoginExist($login){
    $result = false;
    $strSeparator ='\'';
    //$loginQuery='SELECT userEmailAddress,userPsw FROM users WHERE userEmailAddress = '.$strSeparator.$userEmailAddress.'AND userPsw ='.$strSeparator.$userPsw.$strSeparator;

    //select to check the user's input
    $loginQuery='SELECT userMail FROM users ';
    $loginQuery.='WHERE userMail='.$strSeparator.$login.$strSeparator;
    //execute query
    require_once "Model/dbConnector.php";
    $queryResult = querySelect($loginQuery);
    if (count($queryResult)==1){
        $result = true;
    }
    return $result;
}

/**
 * @brief Create a new account in dba
 * @param $userMail string Username/mail of user
 * @param $hashPassword string Hash password already Hashed
 * @param $realName string Firstname of user
 * @param $familyName string Family of user
 * @return bool
 */
function newAccount($userMail, $hashPassword, $realName, $familyName){
    //move
    require_once "Model/dbConnector.php";
    $registerQuery = "INSERT INTO users(firstName,lastName, password,userMail) VALUES ('".$realName."', '".$familyName."','".$hashPassword."','".$userMail."')";
    queryInsert($registerQuery);
}

?>