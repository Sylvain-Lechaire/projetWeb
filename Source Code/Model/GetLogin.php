<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.0
date: 04.02.22
*/

/**
 * @param $message
 * @return void
 */
function logMessage($message){
    $file = fopen("../log.txt", "a");
    fwrite($file, $message);
}

/**
 * @param $user
 * @param $password
 * @return bool
 */
function passwordCheck($user , $password){
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
 * @param $user
 * @return Full name of users
 */
function fullName($user){
    $file = file_get_contents("../Model/stockage.json");
    $jsonLoad = json_decode($file, true);

    foreach ($jsonLoad as $i){
        if($i['username'] == $user){
            return $i['realName']." ".$i['familyName'];
        }
    }
}

function isLoginExist($login){
    $file = file_get_contents("../Model/stockage.json");
    $jsonLoad = json_decode($file, true);

    foreach ($jsonLoad as $i){
        if($i['username'] == $login){
            return true;
        }
    }
    return false;
}
?>