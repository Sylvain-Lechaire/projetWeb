<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider Amos Le Coq
Version: 1.0.0
date: 03.03.22
*/

/**
 * @return mixed
 */
function getAllArticle(){
    $file = file_get_contents("../Model/article.json");
    $AllArticle = json_decode($file, true);

    return $AllArticle;
}

/**
 * @param $id
 * @return mixed|void
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