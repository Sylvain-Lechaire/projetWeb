<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.0.0
date: 01.04.22
*/

/**
 * @brief if article already exist
 * @param $id string id of article
 * @return bool true if article already exist
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

/**
 * @brief Get article and get for error
 * @param $id string id of article
 * @return array Getted article
 */
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