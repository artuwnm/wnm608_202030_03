<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart Page</title>
	
	<?php include "../parts/meta.php" ?>
</head>
<body>

	
	<!-- Cart -->
	<script>
	const makeTable = (classes='') => {
		const head = ['ITEM','','PRICE','REMOVE'];
		const body = [
			['522',"Hamilton Cline",'hcline@academyart.edu'],
			['512',"Fred McHale",'fmchale@academyart.edu'],
			['522',"Michael Catanzaro",'mcatanzaro@academyart.edu'],
			['514',"Andrea Pimentel",'apimentel@academyart.edu'],
			['516',"DC Scarpelli",'dscarpelli@academyart.edu'],
		];

		// let ran = Math.floor(Math.random()*links.length);
		return `
		<table class="${classes}">
			<thead><tr>${head.reduce((r,o)=>r+`<th>${o}</th>`,'')}</tr></thead>
			<tbody>${body.reduce((r,o,i)=>r+
				`<tr>${
					[i+1,...o].reduce((r,o)=>r+`<td>${o}</td>`,'')
				}</tr>`,'')
			}</tbody>
		</table>
		`;
	}
	</script>
	<div class="card">
			<h3>SHOPPINGBAG</h3>

			<script>document.write(makeTable('table lined outline horizontal'))</script>
		</div>

   
			
    <!-- footer -->
		<div>
        <?php include "../parts/footer.php" ?>
        </div>
</body>
</html>