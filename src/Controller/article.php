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
    require "Model/article.php";
    $allArticle = getAllArticle();
    foreach ($allArticle as $item) {
        if ($item['productId'] == $id){
            return true;
        }
    }
    return false;
}

/**
 * @brief this function is to get one article with id
 * @param $get array
 * @return void
 */
function getCheckArticle($get){
    if(isset($get['id'])){
        $id = $get['id'];
        if (articleExist((int)$id)){
            $article = getArticle((int)$id);
            $allArticle = getAllArticle();
            require 'View/singleProduct.php';
        }else{
            header('Location: ?action=products');
        }
    }else{
        header('Location: ?action=products');
    }
}

/**
 * @brief this function is to get all article
 * @return void
 */
function getCheckAllArticle(){
    require "Model/article.php";
    $allArticle = getAllArticle();

    require 'View/products.php';
}

function articleManager($post){
    require "Model/article.php";

    if (isset() && isset())
    $allArticle = getAllArticle();
    if ($_SESSION['isAdmin']>=1){
        require "View/articleManager.php";
    }else{
        require "View/home.php";
    }

}
