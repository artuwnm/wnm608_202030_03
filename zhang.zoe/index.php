<!DOCTYPE html>
<html lang="en">
<head>
	<title>Landing Page</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<!--.container>p*2>lorem30-->
	<div class="container">
		<div class="card soft">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet totam sequi tempore, excepturi enim nostrum beatae praesentium nemo quam veritatis doloremque possimus sapiente, obcaecati deleniti suscipit quae alias at minima!</p>
		<p>Exercitationem ab ullam dolor cupiditate maxime. Asperiores distinctio expedita maiores culpa facere incidunt veniam porro iure hic sunt sint, voluptatibus amet et assumenda dignissimos obcaecati, possimus. Cumque, ad tenetur ab.</p>
	</div>
	</div>
	<div class="container">
		<div class="card">
			<h2>Product Item</h2>

			<div>
				The item is #<?= $_GET['id']  ?>
			</div>
		</div>
	</div>
	
</body>
</html>