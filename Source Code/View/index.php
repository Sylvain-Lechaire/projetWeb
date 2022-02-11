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
      <title>Acceuil</title>
      <?php include 'template/head.php'?>
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
                <p>
                    Welcome to our website
                    <?php if (isset($_SESSION['username']) && isset($_SESSION['password'])) echo $_SESSION['Fullname']; ?>
                    <br> We are a tank society We love tank
                </p>
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
