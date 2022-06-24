<?php
/**
 * @file      Controller/article.php
 * @brief     This file is to control article setting
 * @author    Created by Ethann.SCHNEIDER and Amos.LeCoq
 * @version   17-JUNE-2022
 */

/**
 * @brief     This function is designed to check if article exists
 * @param $articleId integer
 * @return bool
 */
function articleExists($articleId){
    require "Model/article.php";
    $allArticles = getAllArticles();
    foreach ($allArticles as $item) {
        if ($item['productId'] == $articleId){
            return true;
        }
    }
    return false;
}

/**
 * @brief this function is designed to redirect to the article view
 * @param $get array
 * @return void
 */
function getCheckArticle($get){
    if(isset($get['id'])){
        $articleId = $get['id'];
        if (articleExists((int)$articleId)){
            $article = getArticle((int)$articleId);
            $allArticles = getAllArticles();
            require 'View/singleProduct.php';
        }else{
            header('Location: ?action=products');
        }
    }else{
        header('Location: ?action=products');
    }
}

/**
 * @brief this function is designed to redirect to the articles view
 * @return void
 */
function getCheckAllArticle(){
    require "Model/article.php";
    $allArticle = getAllArticle();

    require 'View/products.php';
}

/**
 * @brief this function is designed to be the entry point of a CRUD specific for article
 * @param $articleAttributes array : product attributes
 * @param $visualProduct visual product
 * @return void
 */
function articleManager(array $articleAttributes, $visualProduct){
    require "Model/article.php";
    if ($_SESSION['isAdmin']>=1){
        if(isset($articleAttributes['add'])) {
            //TODO addArticle do not received the new article as parameter ?
            addArticle();
        }else if(isset($articleAttributes['remove']) && $articleAttributes['id']){
            removeArticle($articleAttributes['id']);
        }else if (isset($articleAttributes['id']) && isset($articleAttributes['chassiNumber']) &&
                  isset($articleAttributes['name']) && isset($articleAttributes['price']) &&
                  isset($articleAttributes['description'])){
            $image = null;
            if (isset($visualProduct['image'])){
                if($visualProduct['image']['tmp_name'] != '') $image = $visualProduct['image'];
            }
            modifyArticle($articleAttributes['id'], $articleAttributes['chassiNumber'],
                          $articleAttributes['name'], $articleAttributes['price'],
                          $articleAttributes['description'], $visualProduct);
        }
        $allArticles = getAllArticles();

        require "View/articleManager.php";
    }else{
        require "View/home.php";
    }
}
