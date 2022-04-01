<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.0.1
date: 01.04.22
*/

/**
 * @brief create New account in database
 * @param $username string username/email of user
 * @param $hashPassword string password already hashed
 * @param $realName string Real Name of user
 * @param $familyName string Family Name of user
 * @return bool
 */
function newAccount($username, $hashPassword, $realName, $familyName){
    reCreateStockageFile();
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