<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">
	<script>
	const makeTable = (classes='') => {
		const head = ['Item', 'Quantity', 'Price'];
		const body = [
			['Item1', '1', '$3.99'],
			['Item2', '1', '$3.99'],
			['Item3', '1', '$3.99'],
			['Item4', '1', '$3.99'],
			['Tax', '', '$3.99'],
			['Total', '', '$3.99'],
		];

		document.write(`
		<table class="${classes}">
			<thead><tr>${head.reduce((r,o)=>r+`<th>${o}</th>`, '')}</tr></thead>
			<tbody>${body.reduce((r,o,i)=>r+
				`<tr>${
					[...o].reduce((r,o)=>r+`<th>${o}</th>`, '')
				}</tr>`, '')
			}</tbody>
		</table>
		`);
	}
	</script>
	<div class="card soft">
			<script>makeTable("table striped")</script>
		</div>
	</div>
	<div class="container">
			<h3 id="controls">Credit Card Info</h3>
			<form>
				<div class="form-control">
					<label class="form-label">Name</label>
					<input type="text" placeholder="Name" class="form-input">
				</div>
				<div class="form-control">
					<label class="form-label">Address</label>
					<input type="text" placeholder="Address" class="form-input">
				</div>
				<div class="form-control">
					<label class="form-label">Credit Card Number</label>
					<input type="number" placeholder="XXXX XXXX XXXX XXXX" class="form-input">
				</div>
				<div class="form-control display-flex flex-align-center">
					<div class="flex-none">
						<label class="form-label">Expiration Date</label>
					</div>
					<div class="flex-stretch">
						<input type="text" placeholder="XX/XX" class="form-input flex-stretch">
					</div>
					<div class="flex-none">
						<label class="form-label">CVV</label>
					</div>
					<div class="flex-stretch">
						<input type="number" placeholder="XXX" class="form-input flex-stretch">
					</div>
				</div>
			</form>
	</div>
	<div class="form-control">
			<button type="button" class="form-button">Process Payment</button>
	</div>
</body>
</html>