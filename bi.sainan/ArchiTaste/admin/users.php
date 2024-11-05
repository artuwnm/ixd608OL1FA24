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
	<form method="" action="">
	   <div>
	       <label class="form-label" for="user-name">User Name</label>
	       <input class="form-input" name="user-name" id="user-name" type="text" value="$user->name">
	   </div>
	   <div>
	       <label class="form-label" for="user-type">Type</label>
	       <input class="form-input" name="user-type" id="user-type" type="text" value="$user->type">
	   </div>
	   <div>
	       <label class="form-label" for="user-email">Email Address</label>
	       <input class="form-input" name="user-email" id="user-email" type="email" value="$user->email">
	   </div>
	   <div>
	       <label class="form-label" for="user-classes">Classes</label>
	       <input class="form-input" name="user-classes" id="user-classes" type="text" value="$user->cls">
	   </div>

<br>

	<div class="form-control">
	    <input class="form-button" type="submit" value="Save">
	</div>

	</form>

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

	<header>
		<div class="container display-flex align-center">
			<div class="flex-none">
				<h1 style="font-size: 5em; line-height: 8rem;">User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav navbar flex-none">
				<ul>
					<li style="font-size: 1.2em;"><a href="admin/users.php">User List</a></li>
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