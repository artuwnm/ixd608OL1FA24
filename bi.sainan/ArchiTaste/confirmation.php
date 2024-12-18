<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";
resetCart();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Confirmation</title>

   <?php include "parts/meta.php"; ?>

</head>
<body>

   <?php include "parts/header.php"; ?>

    <br>

   <?php include "parts/crumb_order.php"; ?>
      
<div class="container">

    <div class="flex center align-center text-center" style="height: 200px;">

        <h1>Thank you for your purchase!</h1>
        
    </div>
   
   <div class="flex center form-control">
       <a href="product_list.php" class="button">Continue Shopping</a>
   </div>

        <br>
        <br>
        <br>
        <br>
        <hr class="container">

        <h3>Recommended For You</h3>
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