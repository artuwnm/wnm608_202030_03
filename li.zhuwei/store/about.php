<!DOCTYPE html>
<html lang="en">
<head>
		<title>About Page</title>
	    <?php include "parts/meta.php" ?>
		<link rel="stylesheet" href="lib/css/gridsystem.css">
		<link rel="stylesheet" href="lib/css/styleguide.css">
		<link rel="stylesheet" href="css/storetheme.css">
		<script src="https://kit.fontawesome.com/041ded284b.js" crossorigin="anonymous"></script>
		<script src="index.js"></script>
<body>
  <!-- header.navbar>h1+nav.nav -->
  <?php include "parts/navbar.php" ?>


  <main>
<div class="container">
  <div class="container">
    <nav class="nav-crumbs" style="margin:1em 0">
      <ul>
        <li><a href="index.php"><i class="fas fa-arrow-left" style="color:black;"></i>Back</a></li>    
      </ul>
    </nav>
  <h3 style="text-align:center">DESIGN TEAM</h3>
  <p style="text-align:center"><em>We love design!</em></p>
  <p style="text-align:center">We have created a round buttom website. Lorem ipsum..</p>
  <br>
  <div class="row">
    <div class="col-md-1">
      <p><strong>Name</strong></p><br>
      <img src="img/designer1.png" alt="Random Name">
      <p>Just some random text</p>
    </div>
    <div class="col-md-1">
      <p><strong>Name</strong></p><br>
      <img src="img/designer1.png" alt="Random Name">
       <p>Just some random text</p>

    </div>
    <div class="col-md-1">
      <p><strong>Name</strong></p><br>
      <img src="img/designer1.png" alt="Random Name">
       <p>Just some random text</p>
    </div>
  </div>
</div>

  </main>

  <?php include "parts/footer.php" ?>

</body>

</html>