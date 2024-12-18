<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>My Account</title>

   <?php include "parts/meta.php"; ?>

</head>
<body>

   <?php include "parts/header.php"; ?>

   <br>

   <?php include "parts/crumb_account.php"; ?>


<div class="container">
   <h1>Order History</h1>

   <div class="form-control">
       <a href="#" class="form-button">View My Orders</a>
   </div>

</div>

   <br>
   <hr class="container">


<div class="container">
   <h1>Account Info</h1>
   <div class="card soft">
        <form>
            <div class="form-control">
                <label class="form-label">User Name</label>
                <input type="text" placeholder="User Name" class="form-input">
            </div>
            <div class="form-control">
                <label class="form-label">Email</label>
                <input type="email" placeholder="Email Address" class="form-input">
            </div>
            <div class="form-control">
                <label class="form-label">Password</label>
                <input type="password" placeholder="Password" class="form-input">
            </div>
        </form>
   </div>

   <br>

   <div class="form-control">
       <a href="#" class="form-button">Change</a>
   </div>

</div>

   <br>
   <hr class="container">

   <div class="container">
       <h1>Default Payment Method</h1>
       <h3>Payment Info</h3>
       <div class="card soft">
            <form>
                <div class="form-control">
                    <label class="form-label">Name</label>
                    <input type="text" placeholder="Name of Cardholder" class="form-input">
                </div>
                <div class="form-control">
                    <label class="form-label">Card No.</label>
                    <input type="text" placeholder="Card Number" class="form-input">
                </div>
                <div class="form-control display-flex flex-align-center">
                    <div class="flex-none">
                        <label class="form-label">Exp.</label>
                    </div>
                    <div class="flex-stretch">
                        <input type="date" placeholder="Expiration Date" class="form-input flex-stretch">
                    </div>
                    <div class="flex-none">
                        <label class="form-label">Code</label>
                    </div>
                    <div class="flex-stretch">
                        <input type="text" placeholder="CVV Code" class="form-input flex-stretch">
                    </div>
                </div>
            </form>
       </div>
   </div>

<div class="container">
   <h3>Billing Info</h3>
   <div class="card soft">
        <form>
            <div class="form-control">
                <label class="form-label">Address</label>
                <input type="text" placeholder="Apt, Street" class="form-input">
            </div>
            <div class="form-control display-flex flex-align-center">
                <div class="flex-none">
                    <label class="form-label">Address</label>
                </div>
                <div class="flex-stretch">
                    <input type="text" placeholder="City, State" class="form-input flex-stretch">
                </div>
                <div class="flex-none">
                    <label class="form-label">Zip</label>
                </div>
                <div class="flex-stretch">
                    <input type="text" placeholder="Zip Code" class="form-input flex-stretch">
                </div>
            </div>
        </form>
   </div>
   <br>

   <div class="form-control">
       <a href="#" class="form-button">Edit</a>
   </div>

   <br>
   <hr class="container">

<div class="container">
   <h1>Default Shipping Info</h1>
   <div class="card soft">
        <form>
            <div class="form-control">
                <label class="form-label">Name</label>
                <input type="text" placeholder="Name of Recipient" class="form-input">
            </div>
            <div class="form-control">
                <label class="form-label">Phone</label>
                <input type="text" placeholder="Contact Number" class="form-input">
            </div>
            <div class="form-control">
                <label class="form-label">Address</label>
                <input type="text" placeholder="Apt, Street" class="form-input">
            </div>
            <div class="form-control display-flex flex-align-center">
                <div class="flex-none">
                    <label class="form-label">Address</label>
                </div>
                <div class="flex-stretch">
                    <input type="text" placeholder="City, State" class="form-input flex-stretch">
                </div>
                <div class="flex-none">
                    <label class="form-label">Zip</label>
                </div>
                <div class="flex-stretch">
                    <input type="text" placeholder="Zip Code" class="form-input flex-stretch">
                </div>
            </div>
        </form>
   </div>

   <br>

   <div class="form-control">
       <a href="#" class="form-button">Edit</a>
   </div>

   </div>
   </div>

    <br>
    <br>
    <br>

   <?php include "parts/footer.php"; ?>


</body>
</html>