<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.0
date: 04.02.22
*/

/**
 * @brief logMessage
 * @param $message string message to log
 * @return void
 */
function logMessage($message){
    $file = fopen("../log.txt", "a");
    fwrite($file, $message);
}

/**
 * @brief Check if username correspond to password
 * @param $user string username/email of user
 * @param $password string password already hash
 * @return bool true if user already in database else false
 */
function passwordCheck($user , $password){
    if(!file_exists("../Model/stockage.json")){
        $fb=fopen("../Model/stockage.json", "w+");
        fwrite($fb, '[]');
        fclose($fb);
    }
    $file = file_get_contents("../Model/stockage.json");
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
    if(!file_exists("../Model/stockage.json")){
        $fb=fopen("../Model/stockage.json", "w+");
        fwrite($fb, '[]');
        fclose($fb);
    }
    $file = file_get_contents("../Model/stockage.json");
    $jsonLoad = json_decode($file, true);

    foreach ($jsonLoad as $i) {
        if ($i['username'] == $user) {
            return $i['realName'] . " " . $i['familyName'];
        }
    }
}

/**
 * @brief if login already exist
 * @param $login string username/email of user
 * @return bool if it exist return true if not return false
 */
function isLoginExist($login){
    if(!file_exists("../Model/stockage.json")){
        $fb=fopen("../Model/stockage.json", "w+");
        fwrite($fb, '[]');
        fclose($fb);
    }
    $file = file_get_contents("../Model/stockage.json");
    $jsonLoad = json_decode($file, true);

    foreach ($jsonLoad as $i) {
        if ($i['username'] == $login) {
            return true;
        }
    }
    return false;
}
?>