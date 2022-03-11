<?php

function getCart(){
    $file = file_get_contents("../Model/cart.json");
    $AllArticle = json_decode($file, true);

    return $AllArticle[$_SESSION['username']];
}

?>