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

   <?php include "parts/navbar.php"; ?>

    <br>
    <br>

      
<div class="container">

        <br>

    <div class="flex center align-center centertext" style="height: 250px;">

        <h1>Thank you for your purchase!</h1>
        
    </div>

    <br>
    <br>
   
   <div style="width: 800px; margin: auto;">
       <a href="product_list.php" class="form-button">Continue Shopping</a>
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