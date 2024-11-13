<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Natural Essence</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>

	<?php include "../parts/viewwindow.php"; ?>

	<div class="container">
        <h2>Product Details</h2>
        <div class="product-details">
            <div class="product-image">
                <img src="https://dummyimage.com/400x400/000/fff&text=Product+3" alt="Product 3">
            </div>

            <div class="product-info">
                <h3>Product 3</h3>
                <p>Description: This is a detailed description of Product 3.</p>
                <div class="price">$26.99</div>
                <form action="addtocart.php" method="post">
                    <input type="hidden" name="product_id" value="3">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
    
    <?php include "../parts/footer.php"; ?>
</body>
</html>