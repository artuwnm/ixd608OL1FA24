<?php

include "../lib/php/functions.php";

$filename= "../data/users.json";
$users= file_get_json($filename);

$empty_user = (object) [
	"name"=>"",
	"type"=>"",
	"email"=>"",
	"classes"=>[]
];

//print_p([$_GET,$_POST]);

// CRUD create, replace, update, delete form data submitted to our json data file

if(isset($_GET['action'])) {
	switch ($_GET['action']) {
		case "update":
			$users[$_GET['id']]->name = $_POST['user-name'];
			$users[$_GET['id']]->type = $_POST['user-type'];
			$users[$_GET['id']]->email = $_POST['user-email'];
			$users[$_GET['id']]->classes = explode(", ", $_POST['user-classes']);

			file_put_contents($filename, json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		
		case "create":
			$empty_user->name = $_POST['user-name'];
			$empty_user->type = $_POST['user-type'];
			$empty_user->email = $_POST['user-email'];
			$empty_user->classes = explode(", ", $_POST['user-classes']);

			$id = count($users);

			$users[] = $empty_user;

			file_put_contents($filename, json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;

		case "delete":
			array_splice($users,$_GET['id'], 1);
			file_put_contents($filename, json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}
}


function showUserPage($user) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";

// heredoc
$display = <<<HTML
<div>
	<h2>$user->name</h2>
	<div>
		<strong>Type</strong>
		<span>$user->type</span>
	</div>
	<div>
		<strong>Email</strong>
		<span>$user->email</span>
	</div>
	<div>
		<strong>Classes</strong>
		<span>$user->cls</span>
	</div>
</div>
HTML;
$form = <<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">	
	<h2>$addoredit User</h2>
	<div class="form-control">
		<label class="form-label" for="user-name">User Name</label>
		<input type="text" class="form-input" name="user-name" id="user-name" value="$user->name" placeholder=" Enter Firstname Lastname">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-type">Type</label>
		<input type="text" class="form-input" name="user-type" id="user-type" value="$user->type" placeholder="Enter the type of user">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-email">Email</label>
		<input type="email" class="form-input" name="user-email" id="user-email" value="$user->email" placeholder="Enter the user email">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-classes">Classes</label>
		<input type="text" class="form-input" name="user-classes" id="user-classes" value="$user->cls" placeholder="Enter the class number, comma separated">
	</div>
	<div class="form-control">
		<input type="submit" class="form-button" value="Save Changes">
	</div>
</form>
HTML;

$output = $id == "new" ? $form :
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'>$display</div>
		<div class='col-xs-12 col-md-5'>$form</div>
	</div>
	";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";
	
echo <<<HTML
<nav class="display-flex">
	<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
	<div class="flex-none">$delete</div>
</nav>
$output
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