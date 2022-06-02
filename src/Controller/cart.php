<?php
/**
 * @file      Controller/cart.php
 * @brief     This file is to control cart
 * @author    Created by Ethann.SCHNEIDER AND Amos.LeCoq
 * @version   13-MAY-2022
 */

/**
 * @brief This function is to use the cart
 * @param $type string Type of action
 * @param $id int Article id
 * @param $quantity int Quantity of article
 * @return void
 */
function cart($type, $id, $quantity){
    require "Model/cart.php";
    require 'Model/article.php';

    switch ($type){
        case 'delete':
            removeCart($_SESSION['username'], (int) $id);
            break;
        case 'add':
            if (articleAlreadyInCart($_SESSION['username'], (int) $id)){
                modifyQuantity($_SESSION['username'], (int) $id, (int) $quantity);
            }else{
                insertCart($_SESSION['username'], (int) $id,(int) $quantity);
            }
            break;
        case 'clear':
            clearUserCart($_SESSION['username']);
            break;
        default:
            break;
    }

    $_SESSION['cart'] = getCart($_SESSION['username']);
    $allArticle = getAllArticle();
    require 'View/cart.php';
}


?>