<?php
/**
 * @file      View/about.php
 * @brief     This file is to display the about page
 * @author    Created by Ethann.SCHNEIDER AND Amos.LeCoq
 * @version   13-MAY-2022
 */

$title = "About us";

ob_start();
?>
    <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div class="about-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>About Us</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-image">
              <img src="../assets/images/about-us.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
                <h4>Lorem Ipsum</h4>
                <br>
                <p> dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                    Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.
                    Aenean nec lorem. In porttitor. Donec laoreet nonummy augue.
                    Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                    Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.
                    Aenean nec lorem. In porttitor. Donec laoreet nonummy augue.
                    Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.
                </p>
                <br>
                <div class="share">
                <h6>Find us on: <span><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></span></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Page Ends Here -->

<?php
$content = ob_get_clean();
require "View/gabarit.php";
?>
