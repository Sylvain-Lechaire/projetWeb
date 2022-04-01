<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.0
date: 18.03.22
*/

/**
 * @param $username
 * @return array|mixed
 */
function getCart($username){
    if(!file_exists("../Model/cart.json")){
        $fb=fopen("../Model/cart.json", "w+");
        fwrite($fb, '[]');
        fclose($fb);
    }
    $file = file_get_contents("../Model/cart.json");
    $AllArticle = json_decode($file, true);

    if(!isset($AllArticle[$username])){
        return [];
    }else{
        return $AllArticle[$username];
    }
}

/**
 * @param $username
 * @param $article
 * @return bool
 */
function ArticleAlreadyInCart($username, $article){
    if(!file_exists("../Model/cart.json")){
        $fb=fopen("../Model/cart.json", "w+");
        fwrite($fb, '[]');
        fclose($fb);
    }
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

function modifyQuantity($username, $article, $quantity){
    if(!file_exists("../Model/cart.json")){
        $fb=fopen("../Model/cart.json", "w+");
        fwrite($fb, '[]');
        fclose($fb);
    }
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
 * @param $username
 * @param $id
 * @param $quantity
 * @return bool
 */
function insertCart($username, $id, $quantity){
    if(!file_exists("../Model/cart.json")){
        $fb=fopen("../Model/cart.json", "w+");
        fwrite($fb, '[]');
        fclose($fb);
    }
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
 * @param $username
 * @param $id
 * @return void
 */
function removeCart($username, $id){
    if(!file_exists("../Model/cart.json")){
        $fb=fopen("../Model/cart.json", "w+");
        fwrite($fb, '[]');
        fclose($fb);
    }
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
 * @param $username
 * @return void
 */
function clearUserCart($username){
    if(!file_exists("../Model/cart.json")){
        $fb=fopen("../Model/cart.json", "w+");
        fwrite($fb, '[]');
        fclose($fb);
    }
    $filePath = "../Model/cart.json";
    $file = file_get_contents($filePath);
    $Article = json_decode($file, true);

    $Article[$username] = [];
    $jsonUnLoad = json_encode($Article);
    file_put_contents($filePath, $jsonUnLoad);
}

?>