<?php 
include_once "lib/php/functions.php";
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
      
<div class="container">

    <div class="flex center align-center text-center" style="height: 250px;">

        <h1>Thank you for your purchase!</h1>
        
    </div>
   
   <div class="flex center">
       <a href="product_list.php" class="button">Continue Shopping</a>
   </div>

</div>

    <br>
    <br>
    <br>
    <br>
    <br>
    
   <?php include "parts/footer.php"; ?>

</body>
</html>