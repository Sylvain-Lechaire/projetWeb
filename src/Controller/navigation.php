<?php
/**
 * @file      Controller/navigation.php
 * @brief     This file is to redirect
 * @author    Created by Ethann.SCHNEIDER AND Amos.LeCoq
 * @version   13-MAY-2022
 */

/**
 * @brief     This function is to redirect to home
 * @return void
 */
function home(){
    require 'Model/article.php';
    $allArticle = getAllArticle();
    require 'View/home.php';
}

/**
 * @brief     This function is to redirect to 404 error page
 * @return void
 */
function lost(){
    require 'View/error404.php';
}

/**
 * @brief     This function is to redirect to about page
 * @return void
 */
function about(){
    require 'View/about.php';
}

/**
 * @brief     This function is to redirect to login page
 * @return void
 */
function loginPage(){
    require 'View/login.php';
}

/**
 * @brief     This function is to redirect to register page
 * @return void
 */
function registerPage(){
    require 'View/register.php';
}

/**
 * @brief     This function is to redirect to cart page
 * @return void
 */
function showCart(){
    require 'Model/article.php';
    $allArticle = getAllArticle();
    require 'View/cart.php';
}