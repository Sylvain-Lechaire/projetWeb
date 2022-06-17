<?php
/**
 * @file      Model/article.php
 * @brief     This file is to get article detail
 * @author    Created by Ethann.SCHNEIDER and Amos.LeCoq
 * @author    Updated by Amos Le Coq
 * @version   17-JUNE-2022
 */

/**
 * @brief this function is to get all articles
 * @return mixed array of articles
 * @author Amos Le Coq
 */
function getAllArticle(){
    require_once 'Model/dbConnector.php';
    return querySelect('SELECT productId, chassiNumber, name, imageName, price, description FROM articles');
}

/**
 * @brief this function is to get database of one article with id
 * @param $id integer the id of the article
 * @return mixed array of one article
 * @author Amos Le Coq
 */
function getArticle($id){
    require_once 'Model/dbConnector.php';
    $article = querySelect('SELECT productId, chassiNumber, name, imageName, price, description FROM articles WHERE productId = '.$id)[0];
    $categories = querySelect('SELECT categories.name AS categorie FROM articles_has_categories INNER JOIN articles ON articles_has_categories.Articles_id = articles.id INNER JOIN categories ON articles_has_categories.Categories_id = categories.id WHERE articles.productId = '.$id);
    $article['categories'] = [];
    foreach ($categories as $category) {
        array_push($article['categories'], $category['categorie']);
    }

    return $article;
}

/**
 * @brief Function to modify article
 * @param $id int product Id
 * @param $chassiNumber string
 * @param $name string
 * @param $price float
 * @param $description string
 * @param $image null|array array of post image
 * @return bool if modify congratulate
 */
function modifyArticle($id, $chassiNumber, $name, $price, $description, $image){
    require 'Model/dbConnector.php';
    try{
        if ($image != null){
            move_uploaded_file($image['tmp_name'] , "Assets/images/".$image['name']);
            queryInsert('UPDATE articles SET chassiNumber = "'.$chassiNumber.'", name = "'.$name.'", price = '.$price.', description = "'.$description.'", imageName = "'.$image['name'].'" WHERE productId = '.$id.';');
        } else {
            queryInsert('UPDATE articles SET chassiNumber = "'.$chassiNumber.'", name = "'.$name.'", price = '.$price.', description = "'.$description.'" WHERE productId = '.$id.';');
        }
        return true;
    }catch (PDOException $e){
        return false;
    }

}

/**
 * @brief function to add one article
 * @return bool if modify congratulate
 */
function addArticle(){
    require 'Model/dbConnector.php';
    try {
        $id = null;
        do {
            $id = rand(0, 200000000);
        } while (count(querySelect("SELECT productId FROM articles WHERE productId = " . $id)) >= 1);
        queryInsert("INSERT INTO articles(productId, chassiNumber, name, imageName, price, description) VALUES (".$id.", 'default', 'default', 'default', 0.00, 'default')");
        return True;
    }catch (PDOException $e){
        return false;
    }
}

/**
 * @brief function to delete one article by productId
 * @param $id
 * @return bool if modify congratulate
 */
function removeArticle($id){
    require 'Model/dbConnector.php';
    try {
        queryInsert("DELETE FROM articles WHERE productId = ".$id);
        return True;
    }catch (PDOException $e){
        return false;
    }
}