<?php
/**
 * @file      View/error404.php
 * @brief     This file is display error page
 * @author    Created by Ethann.SCHNEIDER
 * @version   13-MAY-2022
 */

$title = "Error 404";

ob_start();
?>

    <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div style="text-align: center;" class="error-page">
        <br><br><br>
        <h1 style="color: darkred;">Error 404</h1> Not Found
        <br><br><br><br><br><br><br><br>
    </div>
    <!-- About Page Ends Here -->

<?php
$content = ob_get_clean();
require "View/gabarit.php";
?>
