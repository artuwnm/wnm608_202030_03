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

  <h1 style="text-align:center">JANSTUDIO TEAM</h1>
  <div class="card soft">
    <p style="text-align:center"><em>We love design!</em></p>
    <p style="text-align:center">There are three responses to a piece of design - yes, no, and WOW!</p>
     <p style="text-align:center">Wow is the one to aim for.</p>
  </div>
  </div>
  <br>

  <div class="card">
    
      <h2>Visit Our Store</h2><br>
      <img src="img/janstudiomockup.png" alt="Random Name">
    <div class="card soft">
      <p><strong>Address:</strong> 352 Brighton Ave, San Francisco, CA 94012</p>
      <p><strong>Phone: </strong>(650)-839-3620</p>
      <p><strong>Open Hours:</strong> Monday-Friday 10:00 AM - 6:00 PM</p>
    </div>


    <div class="col-md-1">
      <h2  style="color:#fb8ca9"><strong>Janelle Li</strong></h2><br>
      <img src="img/designer1.png" alt="Random Name">
       <p style="text-align:center" >CEO & Founder</p>
       <p style="text-align:center" >Janelle@janstudio.com</p>
    </div>

    <div class="col-md-1">
      <h2 style="color:#fb8ca9"><strong>Victor Palumbo</strong></h2><br>
      <img src="img/cs.jpg" alt="Random Name">
       <p style="text-align:center">Vice President of Business Development 
</p>
       <p style="text-align:center">Victor@janstudio.com</p>
    </div>

    <div class="col-md-1">
      <h2 style="color:#fb8ca9"><strong>Sarah Robins</strong></h2><br>
      <img src="img/marketing.jpg" alt="Random Name">
       <p style="text-align:center">UX/UI Designer</p>
       <p style="text-align:center">Sarah@janstudio.com</p>
    </div>
    

    <div class="col-md-1">
      <h2 style="color:#fb8ca9"><strong>William Vander</strong></h2><br>
      <img src="img/designer.jpg" alt="Random Name">
       <p style="text-align:center">Sales and Client Relations Associate</p>
       <p style="text-align:center">William@janstudio.com</p>

    </div>
   
  </div>

</div>
</div>

  </main>

  <?php include "parts/footer.php" ?>

</body>

</html>