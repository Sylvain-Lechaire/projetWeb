<?php
/**
 * @file      View/singleProduct.php
 * @brief     This file is display single product page
 * @author    Created by Ethann.SCHNEIDER
 * @version   13-MAY-2022
 */

$title = 'Product Detail |'.$article['name'];

ob_start();
?>

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
                    <img src="Assets/images/<?= $article['imageName'] ?>" />
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
              <div id="carousel" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="Assets/images/<?= $article['imageName'] ?>" />
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
              <form action="?action=cart" method="post">
                  <input type="submit" class="button" value="Order Now!">
                <input type="text" name="type" value="add" hidden>
                <input type="number" name="id" value="<?= $article['productId'] ?>" hidden>
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
                <?php foreach ($allArticle as $i): ?>
                    <a href="?action=singleProduct&id=<?= $i['productId'] ?>">
                        <div class="featured-item">
                            <img src="Assets/images/<?= $i['imageName'] ?>" alt="Item <?= $i['productId'] ?>">
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

<?php
$content = ob_get_clean();
require "View/gabarit.php";
?>