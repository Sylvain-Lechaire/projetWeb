<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.0
date: 18.03.22
*/

/**
 * @brief if cart does not exsit create one
 * @return void
 */
function cartExist(){
    if(!file_exists("../Model/cart.json")){
        $fb=fopen("../Model/cart.json", "w+");
        fwrite($fb, '[]');
        fclose($fb);
    }
}

/**
 * @brief get cart content by username
 * @param $username string Username/Email of user
 * @return array|mixed Cart content of user
 */
function getCart($username){
    cartExist();
    $file = file_get_contents("../Model/cart.json");
    $AllArticle = json_decode($file, true);

    if(!isset($AllArticle[$username])){
        return [];
    }else{
        return $AllArticle[$username];
    }
}

/**
 * @brief If article already in class
 * @param $username string Username/Email of user
 * @param $article int article id
 * @return bool true if Article in cart and false if not in cart
 */
function ArticleAlreadyInCart($username, $article){
    cartExist();
    $file = file_get_contents("../Model/cart.json");
    $AllArticle = json_decode($file, true);

    if(isset($AllArticle[$username])){
        foreach ($AllArticle[$username] as $Art){
            if ($Art['Product'] == $article){
                return true;
            }
        }
    }
    return false;
}

/**
 * @param $username string Username/Email of user
 * @param $article int article id
 * @param $quantity int quantity of article
 * @return void
 */
function modifyQuantity($username, $article, $quantity){
    cartExist();
    $file = file_get_contents("../Model/cart.json");
    $jsonLoad = json_decode($file, true);

    if(isset($jsonLoad[$username])) {
        for ($i=0; $i<count($jsonLoad[$username]);$i++){
            if ($jsonLoad[$username][$i]['Product'] == $article){
                $jsonLoad[$username][$i]['Number'] = $quantity;
            }
        }
    }

    $jsonUnLoad = json_encode($jsonLoad);
    file_put_contents("../Model/cart.json", $jsonUnLoad);
}

/**
 * @brief insert Item in cart
 * @param $username string Username/Email of user
 * @param $id int article id
 * @param $quantity int quantity of article
 * @return bool return true
 */
function insertCart($username, $id, $quantity){
    cartExist();
    $file = file_get_contents("../Model/cart.json");
    $jsonLoad = json_decode($file, true);

    $article = array(
        "Product" => $id,
        "Number" => $quantity
    );

    if($jsonLoad[$username] == null){
        $jsonLoad[$username] = [$article];
    }else{
        array_push($jsonLoad[$username], $article);
    }

    $jsonUnLoad = json_encode($jsonLoad);
    file_put_contents("../Model/cart.json", $jsonUnLoad);
    return true;
}

/**
 * @brief remove Item in cart
 * @param $username string Username/Email of user
 * @param $id int article id
 * @return void
 */
function removeCart($username, $id){
    cartExist();
    $filePath = "../Model/cart.json";
    $file = file_get_contents($filePath);
    $Article = json_decode($file, true);
    $ArticleUser = $Article[$username];
    $i=0;

    if($Article[$username] == null){
        $Article[$username] = [];
    }

    foreach ($ArticleUser as $SingleProduct){
        if ($SingleProduct['Product'] == $id){
            unset($Article[$username][$i]);
            $Article[$username] = array_values($Article[$username]);
            $jsonUnLoad = json_encode($Article);
            file_put_contents($filePath, $jsonUnLoad);
        }
        $i++;
    }
}

/**
 * @brief Clear user cart
 * @param $username string Username/Email of user
 * @return void
 */
function clearUserCart($username){
    cartExist();
    $filePath = "../Model/cart.json";
    $file = file_get_contents($filePath);
    $Article = json_decode($file, true);

    $Article[$username] = [];
    $jsonUnLoad = json_encode($Article);
    file_put_contents($filePath, $jsonUnLoad);
}

?>