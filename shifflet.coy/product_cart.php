<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";


$result = getCartItems();

// print_p($result);

?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Store: Cart</title>

    <?php include "parts/meta.php" ?>

</head>
<body>

    <?php include "parts/navbar.php" ?>

    <div class="container">
        <nav class="nav-crumbs" style="margin:1em 0">
            <ul>
                <li><a href="product_list.php">Back</a></li>
            </ul>
        </nav>

        <div class="grid gap">
            <div class="col-xs-12 col-md-8">
                <div class="card flat">
                <?php
                echo array_reduce($result,'cartListTemplate');
                ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="card flat">
                    <?= cartTotals(); ?>
                    <div class="card-section">
                        <a href="product_checkout.php" class="form-button">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>