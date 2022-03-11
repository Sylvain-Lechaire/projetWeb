<?php

function getCart($username){
    $file = file_get_contents("../Model/cart.json");
    $AllArticle = json_decode($file, true);

    return $AllArticle[$username];
}

?>