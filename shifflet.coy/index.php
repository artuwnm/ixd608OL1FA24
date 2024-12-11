<?php 
include "parts/navbar.php"; 
include "lib/php/functions.php";
include "parts/templates.php";
include "parts/meta.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>

    <div class="view-window" style="background-image:url('img/bg.jpg'); height: 50vh;"></div>


    <div class="container card soft">
        <h2><center>Welcome to Trech!</center></h2>
        <p>Trech is your ultimate destination for trendy tech. Whether you're upgrading your gadgets, exploring smart devices, or investing in cutting-edge technology, we've got what you need to stay ahead.</p>

        <p>Our mission is to make technology accessible and exciting for everyone. From the latest smartphones and laptops to innovative smart home solutions and wearables, Trech offers a carefully curated selection of products designed to fit your modern lifestyle.</p>

        <p>We believe shopping for tech should be fun and effortless. That's why we provide detailed product information, personalized recommendations, and an easy-to-navigate online store. Discover the future of tech with Trech!</p>
    </div>

    <div class="container card hard">
        <center>Use promo code <b>TRENDY20</b> at checkout for 20% off your first purchase.</center>
    </div>

    <div class="container">
        <h2><center>New Arrivals</center></h2>
        <?php recommendedCategory("Health"); ?>
    </div>

    <div class="container">
        <button type="button" class="form-button"><a href="product_list.php">View All Products</a></button>
    </div>

    <?php include "parts/footer.php"; ?>

</body>
</html>
