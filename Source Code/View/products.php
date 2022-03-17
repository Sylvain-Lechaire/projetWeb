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
      <title>Product</title>
      <?php include 'template/head.php'?>
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
            <?php foreach ($AllArticle as $i): ?>
            <div id="<?= $i['ProductId'] ?>" class="item new col-md-4">
              <a href="single-product.php?id=<?= $i['ProductId'] ?>">
                <div class="featured-item">
                  <img src="../<?= $i['image'] ?>" alt="">
                  <h4><?= $i['name'] ?></h4>
                  <h6>$ <?= $i['price'] ?></h6>
                </div>
              </a>
            </div>
            <?php endforeach;?>
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