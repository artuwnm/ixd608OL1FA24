<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "parts/meta.php"; ?>

	<title>Cart</title>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>



	<div class="container" id="figures"> 
		<h2>Cart</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-4">
			<figure class="figure">
			<img src="https://via.placeholder.com/400x400?text=product" alt="">
			</figure>
			</div>	

			<div class="col-xs-12 col-md-4">
				<h3>Product name</h3>
				<p>Product description Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			
			<h4>Quantity</h4>
			<div class="form-select form-control">
					<select>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</div>

				
			</div>

			<div class="col-xs-12 col-md-4">
				<script>
				const makeTable = (classes='') => {
				const head = ['Subtotal', 'Tax', 'Total'];
				const body = [
					['X.XX','X.XX','X.XX'],
					['X.XX','X.XX','X.XX'],
					['X.XX','X.XX','X.XX'],
				];

				document.write(`
				<table class="${classes}">
					<thead><tr>${head.reduce((r,o)=>r+`<th>${o}</th>`,'')}</tr></thead>
					<tbody>${body.reduce((r,o,i)=>r+
					`<tr>${
						[i+1,...o].reduce((r,o)=>r+` <td>${o}</td>`,'')
					}</tr>`,'')
					}</tbody>
					</table>
					`);
				}	
				</script>


				<div>
					<h3>Total</h3>
					<script>makeTable("table lined border striped vertical")</script>
				</div>
					

				<div class="form-control"><button class="form-button outline"><a href="checkout.php?id=1">Checkout</a></button></div>
				</div>	
			</div>
		
	</div>



<?php include "parts/footer.php"; ?>
	
</body>
</html>