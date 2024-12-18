
 <?php 

 include_once "lib/php/functions.php";
 include_once "parts/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemByID($_GET['id']);

 ?>


 <!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Added to Cart</title>

   <?php include "parts/meta.php"; ?>

</head>
<body>

   <?php include "parts/header.php"; ?>

    <br>

   <?php include "parts/crumb_order.php"; ?>
      
<div class="container">

        <br>
        <br>
        <br>

    <div class="text-center" style="height: 150px;">

        <h3 style="font-size: 1.75em;"><span style="color: orange; font-family: Bauhaus;"><?= $product->name ?></span> has been added to cart!</h3>
        <h3 style="margin-top: -1em;">There are now <span style="color: orange; font-size: 1.5em;"><?= $cart_product->amount ?></span> of <?= $product->name ?> in your cart</h3>
        
    </div>
         
    <div class="flex spread-equal" style="margin: 0 1em;">

       <div style="width: 400px;">
       <a href="product_list.php" class="form-button"><< Continue Shopping</a>
       </div>

        <div style="width: 400px;">
        <a href="cart.php" class="form-button">View Cart >></a>
        </div>
           
    </div>

        <br>
        <br>
        <br>
        <br>
        <hr class="container">

        <h3>Recommendations</h3>
        <?php recommendedCategory("All");?>

</div>

    <br>
    <br>
    <br>
    <br>
    <br>
    
   <?php include "parts/footer.php"; ?>

</body>
</html>