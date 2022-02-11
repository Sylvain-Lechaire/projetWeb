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

    <title>Products</title>

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
    <!-- Items Starts Here -->
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Items</h1>
            </div>
          </div>
          <div class="col-md-8 col-sm-12">
            <div id="filters" class="button-group">
              <button class="btn btn-primary" data-filter="*">All Products</button>
              <button class="btn btn-primary" data-filter=".new">Newest</button>
              <button class="btn btn-primary" data-filter=".low">Low Price</button>
              <button class="btn btn-primary" data-filter=".high">Hight Price</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="featured container no-gutter">

        <div class="row posts">
            <div id="1" class="item new col-md-4">
              <a href="single-product.php">
                <div class="featured-item">
                  <img src="assets/images/product-01.jpg" alt="">
                  <h4>panzer 68</h4>
                  <h6>$15 000.00</h6>
                </div>
              </a>
            </div>
            <div id="2" class="item new col-md-4">
                <a href="single-product.php">
                    <div class="featured-item">
                        <img src="assets/images/product-02.jpg" alt="">
                        <h4>type 69</h4>
                        <h6>$6900.00</h6>
                    </div>
                </a>
            </div>
            <div id="3" class="item new col-md-4">
                <a href="single-product.php">
                    <div class="featured-item">
                        <img src="assets/images/product-03.jpg" alt="">
                        <h4>Maus Panzer</h4>
                        <h6>$800 000.00</h6>
                    </div>
                </a>
            </div>
            <div id="4" class="item new col-md-4">
                <a href="single-product.php">
                    <div class="featured-item">
                        <img src="assets/images/product-04.jpg" alt="">
                        <h4>M24 Pershing</h4>
                        <h6>$50 000.00</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="page-navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li class="current-page"><a href="#">1</a></li>
              <!---
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Featred Page Ends Here -->

  <?php include "template/footer.html";?>

  </body>

</html>