<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider Amos Le Coq
Version: 1.1.0
date: 03.03.22
*/

require "../Model/insertNewAccount.php";
require "../Model/GetLogin.php";
require "../Controller/login.php";

if (isset($_POST['username']) and isset($_POST['realName']) and isset($_POST['familyName']) and isset($_POST['password'])) {
        if (filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)) {

            if (!isLoginExist($_POST['username'])) {
                $username = $_POST['username'];
                $realName = $_POST['realName'];
                $familyName = $_POST['familyName'];
                $password = hash("sha256", $_POST['password']);
                newAccount($username, $password, $realName, $familyName);

                login($username, $password);
            } else {
                header("Location: ../View/Register.php?action=erreur&erreur=L\'utilisateur existe deja");
            }
        } else {
            header("Location: ../View/Register.php?action=erreur&erreur=l\'email doit etre formatter juste");
        }

}else{
        header("Location: ../View/Register.php?action=erreur&erreur=Information are not posted");
}