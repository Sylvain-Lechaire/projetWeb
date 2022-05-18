<?php
/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Ethann.SCHNEIDER and Amos.LECOQ
 * @version   13-MAY-2022
 */

session_start();

require "controller/navigation.php";
require "controller/user.php";
require "controller/article.php";
require "controller/cart.php";


if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home':
            home();
            break;
        case 'login':
            login($_POST);
            break;
        case 'register':
            register($_POST);
            break;
        case 'logout':
            logout();
            break;
        case 'cart':
            cart($_POST);
            break;
        case 'showCart':
            showCart();
            break;
        case 'products':
            getProducts();
            break;
        case 'product':
            getProduct($_GET['id']);
            break;
        case 'about':
            about();
            break;
        default:
            home(true);
    }
} else {
    home();
}