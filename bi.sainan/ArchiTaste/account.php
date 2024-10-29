<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>My Account</title>

   <?php include "parts/meta.php"; ?>

</head>
<body>

   <?php include "parts/navbar.php"; ?>

   <br>

   <?php include "parts/nav_account.php"; ?>

   <hr class="container">


<div class="container">
   <h1>Order History</h1>

   <br>

   <div class="form-control nobullet">
       <a href="#" class="form-button">View</a>
   </div>

</div>

   <br>
   <hr class="container">


<div class="container">
   <h1>Account Info</h1>
   <div class="card soft">
        <form>
            <div class="form-control">
                <label class="form-label"></label>
                <input type="text" placeholder="User Name" class="form-input">
            </div>
            <div class="form-control">
                <label class="form-label"></label>
                <input type="number" placeholder="Password" class="form-input">
            </div>
            <div class="form-control">
                <label class="form-label"></label>
                <input type="password" placeholder="Email Address" class="form-input">
            </div>
        </form>
   </div>

   <br>

   <div class="form-control nobullet">
       <a href="#" class="form-button">Change</a>
   </div>

</div>

   <br>
   <hr class="container">

<div class="container">
   <h1>Billing Info</h1>
   <div class="card soft">
        <form>
            <div class="form-control">
                <label class="form-label"></label>
                <input type="text" placeholder="Name" class="form-input">
            </div>
            <div class="form-control">
                <label class="form-label"></label>
                <input type="number" placeholder="Phone" class="form-input">
            </div>
            <div class="form-control">
                <label class="form-label"></label>
                <input type="password" placeholder="Address" class="form-input">
            </div>
            <div class="form-control display-flex flex-align-center">
                <div class="flex-none">
                    <label class="form-label"></label>
                </div>
                <div class="flex-stretch">
                    <input type="search" placeholder="Address" class="form-input flex-stretch">
                </div>
                <div class="flex-none">
                    <label class="form-label"></label>
                </div>
                <div class="flex-stretch">
                    <input type="search" placeholder="Zip" class="form-input flex-stretch">
                </div>
            </div>
        </form>
   </div>

   <br>

   <div class="form-control nobullet">
       <a href="#" class="form-button">Edit</a>
   </div>

   </div>



</body>
</html>