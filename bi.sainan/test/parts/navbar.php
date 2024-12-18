<?php 

include_once "lib/php/functions.php" 

?>   

 <header>

   <div class="container flex align-center">

      <div id="logo">
         <h1><a href="home.php">ArchiTaste</a></h1>
      </div>

      <div class="flex-stretch"></div>

      <nav id="navbar" class="nav navbar">
         <ul class="flex">
            <li><a href="home.php">Home</a></li>
            <li><a href="product_list.php">Store</a></li>
            <li><a href="cart.php">
               <span>Cart</span>
               <span class="badge"><?= markeCartBadge(); ?></span>
            </a></li>
            <li><a href="account.php">Account</a></li>
         </ul>
      </nav>

   </div>


   <div class="container" id="searchbar">
       <form>
           <input type="search" class="hotdog" placeholder="Search">
       </form>
   </div>


   <br>
   <br>


 </header>