<?php
/**
 * @file      View/cart.php
 * @brief     This file is to display the cart
 * @author    Created by Ethann.SCHNEIDER
 * @version   13-MAY-2022
 */


if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
    header("Location: ?action=home");
}

$title = "Article Manager";

ob_start();
?>



<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="line-dec"></div>
            <h2>Article Manager</h2>
            <div class="item">
                <style>
                    .Cart-List{
                        border: #1b1e21 solid 2px;
                        border-collapse: collapse;
                        width: 100%;
                    }
                    .Cart-List td{
                        border: #1b1e21 solid 1px;
                    }
                    .cart-img{
                        width: 10%;
                    }
                </style>
                <table class="Cart-List">
                    <thead>
                    <tr>
                        <th>N° chassi</th>
                        <th>Name</th>
                        <th>Picture</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Apply</th>
                        <th>Remove</th>
                    </tr>
                    </thead>

                    <?php foreach ($allArticle as $article):?>
                    <tr>
                        <form action="?action=articleManager" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $article['productId'] ?>" required>
                            <td><input type="text" name="chassiNumber" value="<?= $article['chassiNumber'] ?>" required></td>
                            <td><input type="text" name="name" value="<?= $article['name']?>" required></td>
                            <td class="cart-img">
                                <input type="file" name="image">
                                <img src="Assets/images/<?= $article['imageName'] ?>" height="150">
                            </td>
                            <td><input type="number" name="price" value="<?= $article['price'] ?>" required>CHF</td>
                            <td><textarea name="description" cols="20" rows="10"><?= $article['description']?></textarea></td>
                            <td><input type="submit" value="Apply"></td>
                        </form>
                        <form action="?action=articleManager" method="post">
                            <input type="hidden" name="id" value="<?= $article['productId'] ?>" required>
                            <td><input type="submit" name="remove" value="Remove"></td>
                        </form>
                    </tr>
                    <?php endforeach;?>
                </table>
                <form id="add" method="post" action="?action=articleManager">
                    <input type="submit" name="add" value="add">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "View/gabarit.php";
?>