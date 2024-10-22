<!DOCTYPE html>
<html lang="en">
<head>

   <?php include "parts/meta.php"; ?>

</head>
<body>

   <?php include "parts/navbar.php"; ?>

<div class="container">
   <h1>Product Item</h1>
      <p>This is Item # <?=$_GET['id']?></p>
   <div class="card soft">

      <figure class="figure">
          <img src="https://www.knoll.com/media/911/106/11613_c.jpg" alt="">
          <figcaption>Bacelona Chair</figcaption>
      </figure>
   </div>
</div>


</body>
</html>