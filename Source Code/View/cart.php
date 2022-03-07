<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.0
date: 04.02.22
*/

session_start();

require '../Model/Article.php';

$AllArticle = getAllArticle();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cart</title>
    <?php include 'template/head.php'?>
</head>

<body>

<?php include "template/header.php";?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Cart</h2>
            <div class="item">
                <style>
                    .Cart-List{
                        border: #1b1e21 solid 2px;
                        border-collapse: collapse;
                        width: 100%;
                    }
                    .Cart-List td{
                        border: #1b1e21 solid 1px;
                    }
                    .cart-img{
                        width: 10%;
                    }
                </style>
                <table class="Cart-List">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Number</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>1</td>
                        <td class="cart-img">
                            <img src="assets/images/product-01.jpg" height="150">
                        </td>
                        <td><a href="single-product.php?id=1">Item-1</a></td>
                        <td>3</td>
                        <td>10000$</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Also Starts Here -->
<div class="featured-items">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>Also</h1>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <?php foreach ($AllArticle as $i): ?>
                        <a href="single-product.php?id=<?= $i['ProductId'] ?>">
                            <div class="featured-item">
                                <img src="../<?= $i['image'] ?>" alt="Item <?= $i['ProductId'] ?>">
                                <h4><?= $i['name'] ?></h4>
                                <h6>$ <?= $i['price'] ?></h6>
                            </div>
                        </a>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Also Ends Here -->

<?php include "template/footer.html";?>

</body>

</html>