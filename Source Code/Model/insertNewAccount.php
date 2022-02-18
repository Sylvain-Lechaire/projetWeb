<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.0
date: 18.02.22
*/

function newAccount($username, $hashPassword, $realName, $familyName){
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