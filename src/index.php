<?php
/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Ethann.SCHNEIDER and Amos.LeCoq
 * @version   06-MAI-2022
 */

session_start();

require "controller/navigation.php";
require "controller/user.php";
require "controller/article.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home':
            home();
            break;
        case 'login':
            login($_POST['username'] ,$_POST['password']);
            break;
        case 'register':
            register($_POST['username'], $_POST['realName'], $_POST['familyName'],$_POST['password']);
            break;
        case 'logout':
            logout();
            break;
        default:
            lost();
    }
} else {
    home();
}