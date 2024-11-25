
 <?php 

 include_once "lib/php/functions.php";

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

   <?php include "parts/navbar.php"; ?>

   <br>

   <?php include "parts/crumb_order.php"; ?>

   <hr class="container">

      
<div class="container">

        <br>
        <br>
        <br>
        <br>
        <br>

    <div class="centertext" style="height: 25vh;">

        <h3 style="font-size: 1.75em;"><span style="color: orange; font-family: Bauhaus;"><?= $product->name ?></span> has been added to cart!</h3>
        <h3>There are now <span style="color: orange;"><?= $cart_product->amount ?></span> of <?= $product->name ?> in your cart</h3>
        
    </div>

         
    <div class="flex spread">

       <div style="width: 450px;">
       <a href="product_list.php" class="form-button"><< Continue Shopping</a>
       </div>

        <div style="width: 450px;">
        <a href="cart.php" class="form-button">View Cart >></a>
        </div>
           
    </div>

</div>

    <br>
    <br>
    <br>
    
   <?php include "parts/footer.php"; ?>

</body>
</html>