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

	<h3 id="controls">Check out</h3>
	<div class="card soft">
	<form>
		<div class="form-control">
			<label class="form-label">Example</label>
			<input type="text" placeholder="Text" class="form-input">
		</div>
		<div class="form-control">
			<label class="form-label">Example</label>
			<input type="number" placeholder="Number" class="form-input">
		</div>
		<div class="form-control">
			<label class="form-label">Example</label>
			<input type="password" placeholder="Password" class="form-input">
		</div>
		<div class="form-control display-flex flex-align-center">
			<div class="flex-none">
				<label class="form-label">Example</label>
			</div>
			<div class="flex-stretch">
				<input type="search" placeholder="Search" class="form-input">
			</div>
			<div class="flex-none">
				<label class="form-label">Example</label>
			</div>
			<div class="flex-stretch">
				<input type="search" placeholder="Search" class="form-input">
			</div>
		</div>
	</form>

	<form action="thankyou.php" method="post">
			<button type="submit">Place the order</button>
		</form>

	</div>

	 <?php include "../parts/footer.php"; ?>
</body>
</html>