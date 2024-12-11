<?php 

include_once "lib/php/functions.php" 

?>

<input type="checkbox" id="menu" class="hidden">

 <header>

   <div class="container flex align-center">

      <div>
         <h1><a href="home.php">ArchiTaste</a></h1>
      </div>

      <div class="flex-stretch"></div>

      <div class="menu-button">
         <label for="menu">&equiv;</label>
      </div>

      <nav class="navbar">
         <ul class="flex">
            <li class="active"><a href="home.php">Home</a></li>
            <li class="active"><a href="product_list.php">Store</a></li>
            <li class="active"><a href="cart.php">
               <span>Cart</span>
               <span class="badge"><?= markeCartBadge(); ?></span>
            </a></li>
            <li class="active"><a href="account.php">Account</a></li>
         </ul>
      </nav>

   </div>

 </header>