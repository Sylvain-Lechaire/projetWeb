<?php
/*
Projet: Tank&Cio
Author : Ethann Schneider
Version: 1.0.1
date: 01.04.22
*/

/**
 * @brief recreate cart file if no exist
 * @return void
 */
function reCreateCartFile(){
    if(!file_exists("../Model/cart.json")){
        $fb=fopen("../Model/cart.json", "w+");
        fwrite($fb, '[]');
        fclose($fb);
    }
}

/**
 * @brief get User cart
 * @param $username string username/email of user
 * @return array array of userCart
 */
function getCart($username){
    reCreateCartFile();
    $file = file_get_contents("../Model/cart.json");
    $AllArticle = json_decode($file, true);

    if(!isset($AllArticle[$username])){
        return [];
    }else{
        return $AllArticle[$username];
    }
}

/**
 * @brief if article already in cart
 * @param $username string username/email of user
 * @param $article string article who is in cart
 * @return bool true if article is in cart
 */
function ArticleAlreadyInCart($username, $article){
    reCreateCartFile();
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
 * @brief modifyQuantity quantity of article in cart
 * @param $username string username/email of user
 * @param $article string article who is in cart
 * @param $quantity int quantity of article that will change
 * @return void
 */
function modifyQuantity($username, $article, $quantity){
    reCreateCartFile();
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
 * @brief Insert Article in cart
 * @param $username string username/email of user
 * @param $id string if of article to add in cart
 * @param $quantity int quantity of article
 * @return void
 */
function insertCart($username, $id, $quantity){
    reCreateCartFile();
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
}

/**
 * @brief remove item in cart
 * @param $username string username/email of user
 * @param $id string if of article to remove from cart
 * @return void
 */
function removeCart($username, $id){
    reCreateCartFile();
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
 * @brief to clear user cart
 * @param $username string username/email of user
 * @return void
 */
function clearUserCart($username){
    reCreateCartFile();
    $filePath = "../Model/cart.json";
    $file = file_get_contents($filePath);
    $Article = json_decode($file, true);

    $Article[$username] = [];
    $jsonUnLoad = json_encode($Article);
    file_put_contents($filePath, $jsonUnLoad);
}

?>