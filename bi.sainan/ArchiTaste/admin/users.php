<?php 

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");


function showUserPage($user) {

echo <<<HTML

		<br>
		
<nav class="nav nav-crumbs">
	<ul>
		<li style="font-size: 1.2em;">
			<a href="admin/users.php"> < Back</a>
		</li>
	</ul>
</nav>

<div class="soft card">
	<h2>$user->name</h2>
	<form>
	   <div>
	       <label class="form-label">User Name</label>
	       <input type="text" placeholder="$user->name" class="form-input">
	   </div>
	   <div>
	       <label class="form-label">Type</label>
	       <input type="text" placeholder="$user->type" class="form-input">
	   </div>
	   <div>
	       <label class="form-label">Email Address</label>
	       <input type="email" placeholder="$user->email" class="form-input">
	   </div>
	   <div>
	       <label class="form-label">Classes</label>
	       <input type="text" placeholder="$user->cls" class="form-input">
	   </div>
	</form>

	<br>

</div>
	      		
			<br>
	
	   <div class="form-control nobullet">
	       <a href="admin/users.php" class="form-button">Submit</a>
	   </div>
</div>


HTML;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">

	<title>User Admin Page</title>

   <?php include "../parts/meta.php"; ?>

</head>

<body>

	<header class="navbar" style="line-height: 8rem;">
		<div class="container display-flex align-center">
			<div class="flex-none">
				<h1 style="font-size: 5em;">User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-menu flex-none">
				<ul>
					<li style="font-size: 1.2em"><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

		<br>
		<br>
		<br>

	<div class="container">

	    <div>

	    	<?php 

	    	if(isset($_GET['id'])) {
	    		showUserPage($users[$_GET['id']]);

	    	} else {

	    	 ?>

	      	<h1>User List</h1>

	      	<div class="soft card">
	      		<nav class="nav nav-block">
	      			<ul>
	      				<?php
	      				for ($i=0; $i < count($users); $i++) { 
	      					echo "<li> 
	      					<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
	      					</li>";
	      				}
	      				?>
	      			</ul>
	      		</nav>
	      		
	      		<?php 
	      		
	      			    	} ?>
	    		</div>
			</div>
		</div>

		<br>
		<br>
		<br>
		<br>
		<br>
    
<footer>
	<div class="footer">
        <p>&copy; 2024 ArchiTaste. All rights reserved.</p>
	</div>
</footer>

</body>
</html>