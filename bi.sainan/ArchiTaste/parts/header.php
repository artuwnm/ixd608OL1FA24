<?php 

include_once "lib/php/functions.php" 

?>

 <header>

   <div class="container flex align-center">

      <div>
         <h1><a href="home.php">ArchiTaste</a></h1>
      </div>

      <div class="flex-stretch"></div>

      <div class="navbar">
         <a href="home.php" >Home</a>
         <a href="product_list.php" >Store</a>
         <a href="cart.php" >
            <span>Cart</span>
            <span class="badge"><?= markeCartBadge(); ?></span>
         </a>
         <a href="account.php" >Account</a>
      </div>

   </div>

 </header>