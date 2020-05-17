<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About us</title>

<?php include "parts/meta.php" ?>

	<style>
	h2 {
		margin-top:1em;
		border-bottom:1px solid var(--color-neutral-medium);
		margin-bottom:1em;
	}
	</style>

</head>
<body>
	<?php include "parts/navbar.php" ?>

	<header class="pagename">
		<div class="container display-flex">
			<div class="pagename">About us</div>
			</div>
	</header>


	<div class="grid gap">
			<div class="col-xs-12 col-md-6">
				<div class="card soft">
					<div class="1 big"><img src="img/hero.jpg" alt="hero"></div>
				</div>
			</div>

			<div class="col-xs-12 col-md-6">
				<div class="card soft">

					<div class="container">

						<div class="blockquote"><p class="quotation"> 
  Their purpose is infinite – from decorative pom poms to souvenir bottle openers – our keychains can simply be personal treasures or miniature extensions of our identity.</p>
						<div class= "footer-quote">— Erika Houle, author of The Psychology of Keychains</footer>
						</blockquote>
						</div>
						<br>
						<br>

      
			<p>The cool keychains that we attach to our keys often serve two purposes: they add personality to our keys and help us find them more easily</p>
			<p>If you're the type of person who is constantly losing their keys, you probably could use one of these cool keychains that is big and bold. That way, you'll be making your keys unmistakable.</p>
			<br>
			
			<a class="form-button red" href="product_list.php">Shop Now</a>

			</div>
    	




	</div>
</div>


	

  <?php include "parts/footer.php" ?>
    </div>



</body>
</html>