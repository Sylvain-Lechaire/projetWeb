<?php

function getCart($username){
    $file = file_get_contents("../Model/cart.json");
    $AllArticle = json_decode($file, true);

    return $AllArticle[$username];
}

function insertCart($username, $id){

}

function removeCart($username, $id){
    $file = file_get_contents("../Model/cart.json");
    $Article = json_decode($file, true)[$username];
    $i=0;

    foreach ($Article as $SingleProduct){
        if ($SingleProduct['Product'] == $id){
            unset($Article[$i]);
        }
        $i++;
    }
}

?>