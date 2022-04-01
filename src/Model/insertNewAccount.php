<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.0
date: 18.02.22
*/

/**
 * @brief Create a new account in dba
 * @param $username string Username/mail of user
 * @param $hashPassword string Hash password already Hashed
 * @param $realName string Firstname of user
 * @param $familyName string Family of user
 * @return bool
 */
function newAccount($username, $hashPassword, $realName, $familyName){
    if(!file_exists("../Model/stockage.json")){
        $fb=fopen("../Model/stockage.json", "w+");
        fwrite($fb, '[]');
        fclose($fb);
    }
    $file = file_get_contents("../Model/stockage.json");
    $jsonLoad = json_decode($file, true);

    $user = array(
        "username" => $username,
        "password" => $hashPassword,
        "realName" => $realName,
        "familyName" => $familyName
    );

    array_push($jsonLoad, $user);

    $jsonUnLoad = json_encode($jsonLoad);
    file_put_contents("../Model/stockage.json", $jsonUnLoad);
    return true;
}


?>