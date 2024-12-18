
 <?php 

 include_once "lib/php/functions.php";
 include_once "parts/templates.php";

$cart = getCart();

$cart_items = getCartItems();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Shopping Cart</title>

   <?php include "parts/meta.php"; ?>

</head>
<body>

   <?php include "parts/header.php"; ?>

   <br>

   <?php include "parts/crumb_order.php"; ?>

      
<div class="container">

    <?php 

    if(count($cart)) {
        ?>
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
                    <h1 class="text-center">Order Summary</h1>
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

       <?php 

    } else {
        ?>
        <br>
        <br>
        <div class="text-center">
            <h2>- Your Cart is Empty -</h2>
        </div>

        <br>

       <div class="flex center">
           <a href="product_list.php" class="button">Start shopping!</a>
       </div>

        <br>
        <br>

        <br>
        <hr class="container">

        <h3>Recommendations</h3>
        <?php recommendedCategory("All");?>
            
        <?php 
        }
        ?>
            
</div>

    <br>
    <br>
    <br>
    
   <?php include "parts/footer.php"; ?>

</body>
</html>