<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.0
date: 04.02.22
*/

session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Acceuil</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>

  <body>
    
    <?php include "template/header.php";?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caption">
              <h2>Tank&Cie Ecommerce</h2>
              <div class="line-dec"></div>
                <p> Welcome to our website <br> We are a society that sell tank for Collector</p>
              <div class="main-button">
                <a href="products.php">Order Now!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Featured Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Items</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
                <a href="single-product.php">
                  <div class="featured-item">
                      <img src="assets/images/product-01.jpg" alt="Item 1">
                      <h4>panzer 68</h4>
                      <h6>$15 000.00</h6>
                  </div>
                </a>
                <a href="single-product.php">
                    <div class="featured-item">
                        <img src="assets/images/product-02.jpg" alt="Item 2">
                        <h4>type 69</h4>
                        <h6>$69000.00</h6>
                    </div>
                </a>
                <a href="single-product.php">
                    <div class="featured-item">
                        <img src="assets/images/product-03.jpg" alt="Item 3">
                        <h4>Maus Panzer</h4>
                        <h6>$800 000.00</h6>
                    </div>
                </a>
                <a href="single-product.php">
                    <div class="featured-item">
                        <img src="assets/images/product-04.jpg" alt="Item 3">
                        <h4>M24 Pershing</h4>
                        <h6>$50 000.00</h6>
                    </div>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Featred Ends Here -->


    <?php include "template/footer.html";?>


  </body>

</html>
