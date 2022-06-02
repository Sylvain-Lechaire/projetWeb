<?php
/**
 * @file      View/home.php
 * @brief     This file is to display the home page
 * @author    Created by Ethann.SCHNEIDER AND Amos.LeCoq
 * @version   13-MAY-2022
 */

$title = "Acceuil";

ob_start();

?>



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
                    <?php if (isset($_SESSION['username'])) echo $_SESSION['Fullname']; ?>
                    <br> We are a tank society We love tank
                </p>
              <div class="main-button">
                <a href="?action=products">Order Now!</a>
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
                <?php foreach ($allArticle as $i): ?>
                    <a href="?action=singleProduct&id=<?= $i['ProductId'] ?>">
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
    <!-- Featred Ends Here -->

<?php
$content = ob_get_clean();
require "View/gabarit.php";
?>
