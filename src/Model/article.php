<?php
/**
 * @file      Model/article.php
 * @brief     This file is to get article detail
 * @author    Created by Ethann.SCHNEIDER
 * @version   13-MAY-2022
 */

/**
 * @brief this function is to get all articles
 * @return mixed array of articles
 */
function getAllArticle(){
    $file = file_get_contents("Model/article.json");
    $allArticle = json_decode($file, true);

    return $allArticle;
}

/**
 * @brief this function is to get json of one article with id
 * @param $id integer the id of the article
 * @return mixed|void the json of the article
 */
function getArticle($id){
    $file = file_get_contents("Model/article.json");
    $AllArticle = json_decode($file, true);

    foreach ($AllArticle as $i){
        if($i['ProductId'] == $id){
            return $i;
        }
    }
}