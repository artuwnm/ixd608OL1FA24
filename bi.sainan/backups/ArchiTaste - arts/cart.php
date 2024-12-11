
 <?php 

 include_once "lib/php/functions.php";
 include_once "parts/templates.php";

$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `custom_id` IN (01,03,05)");

$cart_items = getCartItems();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Shopping Cart</title>

   <?php include "parts/meta.php"; ?>

</head>
<body>

   <?php include "parts/navbar.php"; ?>

   <br>

   <?php include "parts/crumb_order.php"; ?>

   <hr class="container">

      
<div class="container">

    <div class="grid gap">

        <div class="col-xs-12 col-md-7">

<div class="container">
            <h1>Shopping Cart</h1>
            <div><?= array_reduce($cart_items,'cartListTemplate') ?></div>
        </div>

</div>

        <div class="col-xs-12 col-md-1">
            <hr class="vr">
        </div>

        <div class="col-xs-12 col-md-4">
                <h1 class="centertext">Order Summary</h1>
                <hr>
                <div><?= cartTotals() ?></div>
        </div>

    </div>

    <br>
    <hr class="container">
    <br>

   <div class="container">
       <a href="checkout.php" class="form-button">Checkout</a>
   </div>

</div>

    <br>
    <br>
    <br>
    
   <?php include "parts/footer.php"; ?>

</body>
</html>