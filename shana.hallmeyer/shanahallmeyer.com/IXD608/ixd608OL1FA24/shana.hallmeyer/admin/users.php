<?php 

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");

$data = file_get_contents('../data/users.json');


function showUserPage($user){


// $classes = implode(",",$user->classes);


//heredoc
echo <<<HTML
<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
</nav>

<div class="container">
		<h3>$user->name</h3>

		<form>
			<input type="text" placeholder="$user->name" class="form-input">
			<input type="text" placeholder="$user->type" class="form-input">
			<input type="text" placeholder="$user->email" class="form-input">
			<input type="text" placeholder="$user->classes" class="form-input">
		</form>
</div>



<div class="container">
	
		<div class="form-control"><a href="admin/users.php?id=$i'>{$data[$i]}" class="form-button">Submit</a></div>
	</div>	

HTML;
}


//assignment 2 (extra credit): make the form work - the edited information changes and updates the json file
//hints: funtions.php - file_put_contents 
//json_encode 
//explode 
//$_POST (how to use these to update the form and get the info into the form-exporting data, the fuction above is about importing data)
//assignment 3: CRUD create, read, update, delete - 4 concepts of a database - need to make a fully usable admin page: add a user from the list and delete a user from the page









 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "../parts/meta.php"; ?>
	<title>Users admin page</title>
</head>
<body>
	
	<header class="navbar">
		<div class="container-nav display-flex">
			<div class="flex-none">
				<h1>Administration</h1>
			</div>

			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User list</a></li>
				</ul>				
			</nav>
		</div>
	</header>



	<div class="container">
		
		<div class="card soft">
			<?php 

			if (isset($_GET['id'])) {
				showUserPage($users[$_GET['id']]);
			}	else {

			 ?>


			<h2>User list</h2>
		
			<nav class="nav">
				<ul>
				<?php 
				for ($i=0; $i<count($users); $i++) { 
					echo "<li>
					<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
					</li>";
				}

				 ?>
			 	</ul>
			</nav> 
			
			<?php } ?>

		</div>
	</div>

<?php include "../parts/footer.php"; ?>	


</body>
</html>