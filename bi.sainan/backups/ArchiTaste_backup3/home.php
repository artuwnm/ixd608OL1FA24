<?php 

    include_once "lib/php/functions.php";
    include_once "parts/templates.php";

     ?>

<!DOCTYPE html>
<html lang="en">
<head>

   <?php include "parts/meta.php"; ?>

</head>
<body>

   <?php include "parts/header.php"; ?>

<div class="view-window" style="background-image: url('img/mies.jpg'); height: 70vh;"></div>

<div class="container">

      <br>
      <br>

   <h1 class="text-center" style="font-size: 1.8em; font-weight: normal;">- Premiere Selection -</h1>

   <?php 
   recommendedId("Furniture");?>

      <br>
      <br>

   <h1 class="text-center" style="font-size: 1.8em; font-weight: normal;">- New Arrivals -</h1>

   <?php 
   recommendedPrice("Furniture");?>

</div>

      <br>
      <br>
      <br>
      <br>

<div class="container">   

   <h2 class="text-center">ABOUT US</h2>

      <div>
         <p>
            <span style="font-size: 2em; line-height: 1em;">ArchiTaste</span> offers a unique shopping experience with a curated selection of 
            products with taste of architects - Here you can find furniture designed by famous architects,
            premium 3D models of iconic architecture from the world, stylish decor items, unique gifts and accessories that are as functional as they are inspiring.
         </p>
         <p>
            We cater to architects, designers, and enthusiasts alike,
            providing everything that reflect architectural elegance.
            Simplicity and quality is what we advocate for.
            
            Whether you're looking to enhance your home, workspace or
            find the perfect gift for a design lover, our diverse
            range has something for everyone.
         </p>
      </div>

</div>

      <br>
      <br>
      <br>
      <br>
      <br>

<div class="view-window" style="background-image: url('img/mies.jpg'); height: 50vh;"></div>
<div class="view-window" style="background-image: url('img/architaste.png'); height: 50vh;"></div>
   
   <?php include "parts/footer.php"; ?>

</body>
</html>