<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Natural Essence</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>

	<?php include "../parts/viewwindow.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Product Item</h2>
			<p>This is item # <?= isset($_GET['id']) ? $_GET['id'] : 'not provided' ?></p>
			
		</div>
	</div>


<?php include "../parts/footer.php"; ?>
</body>
</html>