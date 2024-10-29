<?php 

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");


function showUserPage($user) {

echo <<<HTML
		
<nav class="nav nav-crumbs">
	<ul>
		<li>
			<a href="admin/users.php">Back</a>
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
	       <label class="form-label">Password</label>
	       <input type="number" placeholder="$user->type" class="form-input">
	   </div>
	   <div>
	       <label class="form-label">Email Address</label>
	       <input type="password" placeholder="$user->email" class="form-input">
	   </div>
	   <div>
	       <label class="form-label">Classes</label>
	       <input type="text" placeholder="$user->cls" class="form-input">
	   </div>
	</form>

	<br>

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

	<header class="navbar" style="line-height: 3rem;">
		<div class="container display-flex align-top">
			<div class="flex-none">
				<h1 style="font-size: 3em;">User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-menu flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">

		<br>

	    <div>

	    	<?php 

	    	if(isset($_GET['id'])) {
	    		showUserPage($users[$_GET['id']]);

	    	} else {

	    	 ?>

	      	<h2>User List</h2>

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
	      		
	      				<br>
	      		
	      		   <div class="form-control nobullet">
	      		       <a href="admin/users.php" class="form-button">Submit</a>
	      		   </div>
	      	</div>


	</div>
</body>
</html>