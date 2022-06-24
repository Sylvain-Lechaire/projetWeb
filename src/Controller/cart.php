<?php
/**
 * @file      Controller/cart.php
 * @brief     This file is to control cart
 * @author    Created by Ethann.SCHNEIDER AND Amos.LeCoq
 * @version   10-JUNE-2022
 */

/**
 * @brief This function is designed to use the cart
 * @param $cartItem
 * @return void
 */
function cart($cartItem){
    require 'Model/article.php';

    if(isset($cartItem['id']) && isset($cartItem['type'])){
        $id = $cartItem['id'];
        $type = $cartItem['type'];
        switch ($type){
            case 'delete':
                if (($key = array_search($id, $_SESSION['cart'])) !== false) {
                    unset($_SESSION['cart'][$key]);
                }
                break;
            case 'add':
                array_push($_SESSION['cart'], $id);
                break;
            case 'clear':
                $_SESSION['cart'] = [];
                break;
            default:
                //TODO NGY - what's append if we switch on the default case (really nothing ?)
                break;
        }
    }

    $allArticle = getAllArticles();
    require 'View/cart.php';
}