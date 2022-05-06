<?php
/**
 * @file      Controller/navigation.php
 * @brief     This file is to control cart
 * @author    Created by Ethann.SCHNEIDER AND Amos.LeCoq
 * @version   06-MAI-2022
 */

function cart(){
    require "Model/Cart.php";

    if (isset($_POST['type'])){
        switch ($_POST['type']){
            case 'delete':
                if (isset($_POST['id'])) {
                    removeCart($_SESSION['username'], (int) $_POST['id']);
                }
            break;
            case 'add':
                if(isset($_POST['quantity'])){
                    if (ArticleAlreadyInCart($_SESSION['username'], (int) $_POST['id'])){
                        modifyQuantity($_SESSION['username'], (int) $_POST['id'], (int) $_POST['quantity']);
                    }else{
                        insertCart($_SESSION['username'], (int) $_POST['id'],(int) $_POST['quantity']);
                    }
                }
                break;
            case 'clear':
                clearUserCart($_SESSION['username']);
                break;
            default:
                break;
        }

        require 'View/cart.php';
    }
}


?>