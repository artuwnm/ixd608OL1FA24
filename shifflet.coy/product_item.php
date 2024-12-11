<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images, function ($r, $o) {
    return $r . "<img src='img/$o'>";
});

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Store: Product Item</title>
    <?php include "parts/meta.php"; ?>
    <script src="js/product_thumbs.js"></script>

</head>
<body>
    <?php include "parts/navbar.php"; ?>

    <div class="container">
        

        <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card soft">
                    <div class="images-main">
                        <img src="img/<?= $product->thumbnail ?>" alt="Product Thumbnail">
                    </div>
                    <div class="images-thumbs">
                        <?= $image_elements ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
               <form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">
                    <div class="card-section">
                        <h2 class="product-title"><?= $product->name ?></h2>
                        <div class="product-price">&dollar;<?= $product->price ?></div>
                    </div>
                    <div class="card-section">
                        <label class="form-label">Amount</label>
                        <select name="amount" class="form-button">
                            <?php for ($i = 1; $i <= 10; $i++): ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="card-section">
				<input type="submit" class="form-button" value="Add To Cart">
				</div>
                </form>
            </div>
        </div>

        <div class="card soft dark">
            <h3>Description</h3>
            <div class="product-description">
                <?= $product->description ?>
            </div>
        </div>

        <div>
            <h2>Recommended Products</h2>
            <?php recommendedCategory($product->category, $product->id); ?>
        </div>
    </div>
    <?php include "parts/footer.php" ?>
</body>
</html>
