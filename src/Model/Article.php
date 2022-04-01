<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider Amos Le Coq
Version: 1.0.1
date: 01.04.22
*/

/**
 * @brief Get all article in the website/json file
 * @return array all article
 */
function getAllArticle(){
    $file = file_get_contents("../Model/article.json");
    $AllArticle = json_decode($file, true);

    return $AllArticle;
}


/**
 * @brief Get article with id
 * @param $id int id of article
 * @return array article concerned
 */
function getArticle($id){
    $file = file_get_contents("../Model/article.json");
    $AllArticle = json_decode($file, true);

    foreach ($AllArticle as $i){
        if($i['ProductId'] == $id){
            return $i;
        }
    }
}