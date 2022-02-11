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
      <title>Product Detail</title>
      <?php include 'template/head.php'?>
      <link rel="stylesheet" href="assets/css/owl.css">
      <link rel="stylesheet" href="assets/css/flex-slider.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>

  <body>

  <?php include "template/header.php";?>

    <!-- Page Content -->
    <!-- Single Starts Here -->
    <div class="single-product">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Panzer 68</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="product-slider">
              <div id="slider" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="assets/images/product-01.jpg" />
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
              <div id="carousel" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="assets/images/product-01.jpg" />
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4>Panzer 68</h4>
              <h6>$10 000.00</h6>
              <p>Proin commodo, diam a ultricies sagittis, erat odio rhoncus metus, eu feugiat lorem lacus aliquet arcu. Curabitur in gravida nisi, non placerat nibh. Praesent sit amet diam ultrices, commodo turpis id, dignissim leo. Suspendisse mauris massa, porttitor non fermentum vel, ullamcorper scelerisque velit. </p>
              <span>7 left on stock</span>
              <form action="" method="get">
                <label for="quantity">Quantity:</label>
                <input name="quantity" type="quantity" class="quantity-text" id="quantity" 
                	onfocus="if(this.value == '1') { this.value = ''; }" 
                    onBlur="if(this.value == '') { this.value = '1';}"
                    value="1">
                <input type="submit" class="button" value="Order Now!">
              </form>
              <div class="down-content">
                <div class="categories">
                  <h6>Category: <span><a href="#">Cold War Tank</a>,<a href="#">Man</a>,<a href="#">Lifestyle</a></span></h6>
                </div>
                <div class="share">
                  <h6>Share: <span><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a><a href="https://www.linkedin.com/""><i class="fa fa-linkedin"></i></a><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></span></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Single Page Ends Here -->


    <!-- Similar Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>You May Also Like</h1>
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
    <!-- Similar Ends Here -->

  <?php include "template/footer.html";?>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/flex-slider.js"></script>


  </body>

</html>
