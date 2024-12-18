<?php 

include "../lib/php/functions.php";

$filename = "../data/users.json";
$users = file_get_json($filename);


$empty_user = (object)[
	"name"=>"",
	"type"=>"",
	"email"=>"",
	"cls"=>""
];



// print_p([$_GET,$_POST]);

if(isset($_GET['action'])) {
	switch ($_GET['action']) {
		case 'update':
			$users[$_GET['id']]->name = $_POST['user-name'];
			$users[$_GET['id']]->type = $_POST['user-type'];
			$users[$_GET['id']]->email = $_POST['user-email'];
			$users[$_GET['id']]->cls = $_POST['user-classes'];

			file_put_contents($filename, json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}? id = {$_GET['id']}");
			break;
		
		case 'create':
			$empty_user->name = $_POST['user-name'];
			$empty_user->type = $_POST['user-type'];
			$empty_user->email = $_POST['user-email'];
			$empty_user->cls = $_POST['user-classes'];

			$id = count($users);

			$users[] = $empty_user;

			file_put_contents($filename, json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}? id = $id");
			break;
		case 'delete':
			break;
	}
}


function showUserPage($user) {

	$id = $_GET['id'];
	$addoredit = $id == "new" ? "Add" : "Edit";
	$createorupdate = $id == "new" ? "create" : "update";
	//$classes = implode(",", $user-classes);

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
	<h2>$addoredit User</h2>
	<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	   <div>
	       <label class="form-label" for="user-name">User Name</label>
	       <input class="form-input" name="user-name" id="user-name" type="text" value="$user->name" placeholder="Enter Firstname Lastname">
	   </div>
	   <div>
	       <label class="form-label" for="user-type">Type</label>
	       <input class="form-input" name="user-type" id="user-type" type="text" value="$user->type" placeholder="Enter the type of user">
	   </div>
	   <div>
	       <label class="form-label" for="user-email">Email Address</label>
	       <input class="form-input" name="user-email" id="user-email" type="email" value="$user->email" placeholder="Enter the user email">
	   </div>
	   <div>
	       <label class="form-label" for="user-classes">Classes</label>
	       <input class="form-input" name="user-classes" id="user-classes" type="text" value="$user->cls" placeholder="Enter the class number, comma separated">
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
			<nav class="nav navbar">
				<ul class="flex">
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
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
				showUserPage($_GET['id'] == "new" ? $empty_user : $users[$_GET['id']]);

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