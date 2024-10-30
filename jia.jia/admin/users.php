<?php



include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");

function update() {
	echo "!!!";
}

function showUserPage($user) {
//heredoc
echo <<<HTML
<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
</nav>
<div>
	<form>
		<div class="form-control">
			<label class="form-label">Name</label>
			<input type="text" id="name" placeholder=$user->name class="form-input">
		</div>
		<div class="form-control">
			<label class="form-label">Type</label>
			<input type="text" id="type" placeholder=$user->type class="form-input">
		</div>
		<div class="form-control">
			<label class="form-label">Instrument</label>
			<input type="text" id="instrument" placeholder=$user->instrument class="form-input">
		</div>
		<div class="form-control">
			<label class="form-label">Born</label>
			<input type="text" id="born" placeholder=$user->born class="form-input">
		</div>
	</form>
</div>

<div class="form-control">
	<button type="button" onclick="update()" class="form-button">Update</button>
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

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="card soft">
			<?php

			if(isset($_GET['id'])) {
				showUserPage($users[$_GET['id']]);
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