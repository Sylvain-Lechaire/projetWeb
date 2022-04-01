<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.0.1
date: 01.04.22
*/

/**
 * @brief recreate user Stockage file if no exist
 * @return void
 */
function reCreateStockageFile(){
    if(!file_exists("../Model/stockage.json")){
        $fb=fopen("../Model/stockage.json", "w+");
        fwrite($fb, '[]');
        fclose($fb);
    }
}

/**
 * @brief Log message in log file
 * @param $message string message to log
 * @return void
 */
function logMessage($message){
    $file = fopen("../log.txt", "a");
    fwrite($file, $message);
}

/**
 * @brief check User Password is correct
 * @param $user string username/email of user
 * @param $password string password already hashed
 * @return bool return true if user password is correct
 */
function passwordCheck($user , $password){
    reCreateStockageFile();
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
 * @brief Get full name of user (Real Name and Family Name)
 * @param $user string username/email of user
 * @return string Full name of users
 */
function fullName($user){
    reCreateStockageFile();
    $file = file_get_contents("../Model/stockage.json");
    $jsonLoad = json_decode($file, true);

    foreach ($jsonLoad as $i) {
        if ($i['username'] == $user) {
            return $i['realName'] . " " . $i['familyName'];
        }
    }
}

/**
 * @brief if login/mail/user already exist
 * @param $login string username/email of user
 * @return bool true if user already exist
 */
function isLoginExist($login){
    reCreateStockageFile();
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