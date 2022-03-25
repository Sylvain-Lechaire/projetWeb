<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.1
date: 04.02.22
*/

session_start();

require "../Model/Cart.php";


if (isset($_POST['type'])){
    switch ($_POST['type']){
        case 'delete':
            if (isset($_POST['id'])) {
                removeCart($_SESSION['username'], (int) $_POST['id']);
            }
        break;
        case 'add':
            if(isset($_POST['quantity'])){
                insertCart($_SESSION['username'], (int) $_POST['id'],(int) $_POST['quantity']);
            }
            break;
        case 'clear':
            clearUserCart($_SESSION['username']);
            break;
        default:
            break;
    }
    header("Location: ../View/cart.php");

}


?>