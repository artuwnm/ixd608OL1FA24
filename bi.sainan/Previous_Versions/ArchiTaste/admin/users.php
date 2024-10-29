<?php 

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");

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

	    <div class="soft card">

	      	<h2>User List</h2>

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

	    </div>


	</div>
</body>
</html>