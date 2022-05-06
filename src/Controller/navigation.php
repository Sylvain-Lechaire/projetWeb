<?php
/**
 * @file      Controller/navigation.php
 * @brief     This file is to redirect
 * @author    Created by Ethann.SCHNEIDER AND Amos.LeCoq
 * @version   06-MAI-2022
 */

function home(){
    require 'View/home.php';
}

function lost(){
    require 'View/error404.php';
}