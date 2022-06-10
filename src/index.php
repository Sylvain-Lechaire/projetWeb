<?php
/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Ethann.SCHNEIDER and Amos.LeCoq
 * @version   10-JUNE-2022
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
        case 'products':
            getCheckAllArticle();
            break;
        case 'singleProduct':
            getCheckArticle($_GET['id']);
            break;
        case 'about':
            about();
            break;
        default:
            lost();
    }
} else {
    home();
}