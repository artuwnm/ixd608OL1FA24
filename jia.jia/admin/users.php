<?php



include "../lib/php/functions.php";

$filename = "../data/users.json";
$users = file_get_json($filename);

$empty_user = (object) [
	"name"=>"",
	"type"=>"",
	"instrument"=>"",
	"born"=>""
];

if(isset($_GET['action'])) {
	switch($_GET['action']) {
		case "update":
			$users[$_GET['id']]->name = $_POST['user-name'];
			$users[$_GET['id']]->type = $_POST['user-type'];
			$users[$_GET['id']]->instrument = $_POST['user-instrument'];
			$users[$_GET['id']]->born = $_POST['user-born'];

			file_put_contents($filename, json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$empty_user->name = $_POST['user-name'];
			$empty_user->type = $_POST['user-type'];
			$empty_user->instrument = $_POST['user-instrument'];
			$empty_user->born = $_POST['user-born'];

			$id = count($users);

			$users[] = $empty_user;

			file_put_contents($filename, json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case "delete":
			array_splice($users, $_GET['id'], 1);
			file_put_contents($filename, json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}");
			break;

	}
}



function showUserPage($user) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
//heredoc
$display = <<<HTML
<div>
	<h2>$user->name</h2>
	<div>
		<strong>Type</strong>
		<span>$user->type</span>
	</div>
	<div>
		<strong>Instrument</strong>
		<span>$user->instrument</span>
	</div>
	<div>
		<strong>Born</strong>
		<span>$user->born</span>
	</div>
</div>
HTML;

$form = <<<HTML
<div>
	<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
		<h2>$addoredit User</h2>
		<div class="form-control">
			<label class="form-label" for="user-name">Name</label>
			<input type="text" name="user-name" value="$user->name" id="user-name" class="form-input" placeholder="Enter the User Name">
		</div>
		<div class="form-control">
			<label class="form-label" for="user-type">Type</label>
			<input type="text" name="user-type" value="$user->type" id="user-type" class="form-input" placeholder="Enter the User Type">
		</div>
		<div class="form-control">
			<label class="form-label" for="user-instrument">Instrument</label>
			<input type="text" name="user-instrument" value="$user->instrument" id="user-instrument" class="form-input" placeholder="Enter the User Instrument">
		</div>
		<div class="form-control">
			<label class="form-label" for="user-born">Born</label>
			<input type="text" name="user-born" value="$user->born" id="user-born" class="form-input" placeholder="Enter the User Born Country">
		</div>
		<div class="form-control">
			<input class="form-button" type="submit" value="Save changes">
		</div>
	</form>
</div>
HTML;

$output = $id == "new" ? $form : 
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'>$display</div>
		<div class='col-xs-12 col-md-5'>$form</div>
	</div>
	";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";


echo <<< HTML
<nav class="display-flex">
	<div class="flex-stretch"><li><a href="{$_SERVER['PHP_SELF']}">Back</a></li></div>
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

	<input type="checkbox" id="menu" class="hidden">
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<div class="flex-none menu-button">
				<label for="menu">&equiv;</label>
			</div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
				</ul>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="card soft">
			<?php

			if(isset($_GET['id'])) {
				showUserPage($_GET['id'] == "new" ? $empty_user : $users[$_GET['id']]);
			} else {

			?>


			<h2>User List</h2>

			<nav class="nav">
				<ul>
			<?php

			for($i=0;$i<count($users);$i++){
				echo "<li>
					<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
				</li>";
			}

			?>
				</ul>
			</nav>

			<?php }	?>

		</div>
	</div>

</body>

</html>