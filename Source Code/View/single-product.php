<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.0
date: 04.02.22
*/

session_start();

require '../Model/Article.php';
require '../Controller/Article.php';

$AllArticle = getAllArticle();

$article = getCheckArticle($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">

  <head>
      <title>Product Detail | <?= $article['name'] ?></title>
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
              <h1><?= $article['name'] ?></h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="product-slider">
              <div id="slider" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="../<?= $article['image'] ?>" />
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
              <div id="carousel" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="../<?= $article['image'] ?>" />
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4><?= $article['name'] ?></h4>
              <h6>$<?= $article['price'] ?></h6>
              <p><?= $article['description'] ?></p>
              <span><?= $article['quantityLeft'] ?> left on stock</span>
              <form action="../Controller/cartControl.php" method="post">
                <label for="quantity">Quantity:</label>
                <input name="quantity" type="quantity" class="quantity-text" id="quantity" 
                	onfocus="if(this.value == '1') { this.value = ''; }" 
                    onBlur="if(this.value == '') { this.value = '1';}"
                    value="1" max="<?= $article['quantityLeft'] ?>">
                <input type="submit" class="button" value="Order Now!">
                <input type="text" name="type" value="add" hidden>
                <input type="number" name="id" value="<?= $article['ProductId'] ?>" hidden>
              </form>
              <div class="down-content">
                <div class="categories">
                  <h6>Category: <span><?php foreach ($article['Category'] as $i) echo "<a href='#'>$i</a>,"; ?></span></h6>
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
    <!-- Similar Ends Here -->

  <?php include "template/footer.html";?>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/flex-slider.js"></script>


  </body>

</html>
