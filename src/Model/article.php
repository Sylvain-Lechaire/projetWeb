<?php
/**
 * @file      Model/article.php
 * @brief     This file is to get article detail
 * @author    Created by Ethann.SCHNEIDER
 * @author    Updated by Amos Le Coq
 * @version   10-JUN-2022
 */

/**
 * @brief this function is to get all articles
 * @return mixed array of articles
 * @author Amos Le Coq
 */
function getAllArticle(){
    require_once 'model/dbConnector.php';
    return querySelect('SELECT productId, chassiNumber, name, imageName, price, description FROM articles');
}

/**
 * @brief this function is to get database of one article with id
 * @param $id integer the id of the article
 * @return mixed array of one article
 * @author Amos Le Coq
 */
function getArticle($id){
    require_once 'model/dbConnector.php';
    $article = querySelect('SELECT productId, chassiNumber, name, imageName, price, description FROM articles WHERE productId = '.$id)[0];

    return ;

}