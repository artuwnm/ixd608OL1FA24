
 <?php 

 include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

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

   <?php include "parts/nav_order.php"; ?>

   <hr class="container">

      
<div class="container">

        <br>
        <br>

    <div class="flex center align-center centertext" style="height: 30vh;">

        <h1><span style="color: orange;"><?= $product->name ?></span> has been added to cart !</h1>
        
    </div>

         
    <div class="flex spread">

       <div class="nobullet" style="width: 300px;">
       <li><a href="product_list.php" class="form-button"><< Continue Shopping</a></li>
       </div>

        <div class="nobullet" style="width: 300px;">
        <li><a href="cart.php" class="form-button">View Cart >></a></li>
        </div>
           
    </div>

</div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
   <?php include "parts/footer.php"; ?>

</body>
</html>