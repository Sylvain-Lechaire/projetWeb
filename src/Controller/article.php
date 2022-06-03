<?php
/**
 * @file      Controller/article.php
 * @brief     This file is to control article setting
 * @author    Created by Ethann.SCHNEIDER and Amos.LeCoq
 * @version   13-MAY-2022
 */

/**
 * @brief     This function is to check if article exist
 * @param $id integer the id of the article
 * @return bool
 */
function articleExist($id){
    require "model/article.php";
    $allArticle = getAllArticle();
    foreach ($allArticle as $item) {
        if ($item['ProductId'] == $id){
            return true;
        }
    }
    return false;
}

/**
 * @brief this function is to get one article with id
 * @param $id integer the id of the article
 * @return void
 */
function getCheckArticle($id){
    if (articleExist((int)$id)){
        $article = getArticle((int)$id);
        $allArticle = getAllArticle();
        require 'View/singleProduct.php';
    }else{
        require 'View/products.php';
    }
}

/**
 * @brief this function is to get all article
 * @return void
 */
function getCheckAllArticle(){
    require "model/article.php";
    $allArticle = getAllArticle();

    require 'View/products.php';
}
