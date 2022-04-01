<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.0.0
date: 04.02.22
*/

function articleExist($id){
    $allArticle = getAllArticle();
    foreach ($allArticle as $item) {
        if ($item['ProductId'] == $id){
            return true;
        }
    }
    return false;
}

function getCheckArticle($id){
    if (isset($id)){
        if (articleExist((int)$id)){
            return getArticle((int)$id);
        }else{
            header("Location: ../View/products.php");
        }
    }else{
        header("Location: ../View/products.php");
    }
}