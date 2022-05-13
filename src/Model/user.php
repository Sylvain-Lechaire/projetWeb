<?php
/**
 * @file      Model/user.php
 * @brief     This file contains the functions to manage the user.
 * @author    Created by Ethann.SCHNEIDER AND Amos.LeCoq
 * @version   13-MAY-2022
 */

/**
 * @brief Check if username correspond to password
 * @param $user string username/email of user
 * @param $password string password already hash
 * @return bool true if user already in database else false
 */
function passwordCheck($user , $password){
    if(!file_exists("Model/stockage.json")){
        $fb=fopen("Model/stockage.json", "w+");
        fwrite($fb, '[]');
        fclose($fb);
    }
    $file = file_get_contents("Model/stockage.json");
    $jsonLoad = json_decode($file, true);

    foreach ($jsonLoad as $i){
        if($password == $i['password'] && $user == $i['username']){
            return true;
        }
    }
    return false;
}

/**
 * @brief get user real name and family name
 * @param $user string username/email of user
 * @return string Full name of users
 */
function fullName($user){
    if(!file_exists("Model/stockage.json")){
        $fb=fopen("Model/stockage.json", "w+");
        fwrite($fb, '[]');
        fclose($fb);
    }
    $file = file_get_contents("Model/stockage.json");
    $jsonLoad = json_decode($file, true);

    foreach ($jsonLoad as $i) {
        if ($i['username'] == $user) {
            return $i['realName'] . " " . $i['familyName'];
        }
    }
}

/**
 * @brief get is login already exist
 * @param $login string username/email of user
 * @return bool if it exist return true if not return false
 */
function isLoginExist($login){
    if(!file_exists("Model/stockage.json")){
        $fb=fopen("Model/stockage.json", "w+");
        fwrite($fb, '[]');
        fclose($fb);
    }
    $file = file_get_contents("Model/stockage.json");
    $jsonLoad = json_decode($file, true);

    foreach ($jsonLoad as $i) {
        if ($i['username'] == $login) {
            return true;
        }
    }
    return false;
}

/**
 * @brief Create a new account in dba
 * @param $username string Username/mail of user
 * @param $hashPassword string Hash password already Hashed
 * @param $realName string Firstname of user
 * @param $familyName string Family of user
 * @return bool
 */
function newAccount($username, $hashPassword, $realName, $familyName){
    if(!file_exists("Model/stockage.json")){
        $fb=fopen("Model/stockage.json", "w+");
        fwrite($fb, '[]');
        fclose($fb);
    }
    $file = file_get_contents("Model/stockage.json");
    $jsonLoad = json_decode($file, true);

    $user = array(
        "username" => $username,
        "password" => $hashPassword,
        "realName" => $realName,
        "familyName" => $familyName
    );

    array_push($jsonLoad, $user);

    $jsonUnLoad = json_encode($jsonLoad);
    file_put_contents("Model/stockage.json", $jsonUnLoad);
    return true;
}

?>