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

$num = 0;
$price = 0;

$title = "Cart";

ob_start();
?>

<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="line-dec"></div>
            <h2>Cart</h2>
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
                <?php if(isset($_SESSION['cart'][0])): ?>
                    <table class="Cart-List">
                        <thead>
                        <tr>
                            <th>N°</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <?php foreach ($_SESSION['cart'] as $i): ?>
                        <?php
                            $item = getArticle($i);
                            $num++;
                            $price += $item['price'];
                        ?>
                        <tr>
                            <td><?= $num ?></td>
                            <td class="cart-img">
                                <img src="Assets/images/<?= $item['imageName'] ?>" height="150">
                            </td>
                            <td><a href="singleProduct.php?id=<?= $item['productId'] ?>"><?= $item['name'] ?></a></td>

                            <td>CHF <?= $item['price'] ?></td>
                            <td width="20">
                                <form action="?action=cart" method="post">
                                    <input type="text" name="type" value="delete" hidden>
                                    <input type="number" name="id" value="<?= $i ?>" hidden>
                                    <input type="text" name="quantity" value="0" hidden>
                                    <input type="submit" value="❌">
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                        <tfoot>
                        <tr>
                            <td colspan="3">Total : </td>
                            <td>CHF <?= $price ?></td>
                        </tr>
                        </tfoot>
                    </table>
                    <form action="?action=cart" method="post">
                        <input type="text" name="type" value="clear" hidden>
                        <input type="number" name="id" value="all" hidden>
                        <input type="text" name="quantity" value="0" hidden>
                        <input type="submit" value="Vider le Panier">
                    </form>
                <?php else: ?>
                    <div>
                        <br>
                        <h3>Cart is empty</h3>
                    </div>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Also Starts Here -->
<div class="featured-items">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>Also</h1>
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
<!-- Also Ends Here -->

<?php
$content = ob_get_clean();
require "View/gabarit.php";
?>