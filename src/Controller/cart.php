<?php
/**
 * @file      Controller/cart.php
 * @brief     This file is to control cart
 * @author    Created by Ethann.SCHNEIDER AND Amos.LeCoq
 * @version   10-JUNE-2022
 */

/**
 * @brief This function is to use the cart
 * @param $post array The post array
 * @return void
 */
function cart($post){
    require 'Model/article.php';

    if(isset($post['id']) && isset($post['type'])){
        $id = $post['id'];
        $type = $post['type'];
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
                break;
        }
    }


    $allArticle = getAllArticle();
    require 'View/cart.php';
}


?>