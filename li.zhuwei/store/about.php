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
      <nav class="nav-crumbs" style="margin:1em 0">
        <ul>
          <li><a href="index.php"><i class="fas fa-arrow-left" style="color:black;"></i> Back</a></li>    
        </ul>
      </nav>
    </div>

    <div style="padding-left: 4em; padding-right: 4em;">
      <h1 style="text-align:center">JANSTUDIO TEAM</h1>
      <p style="text-align:center"><em>We love to design!</em></p>
      <p style="text-align:center">There are three responses to a piece of design - yes, no, and WOW!</p>
      <p style="text-align:center">Wow is the one to aim for.</p>
    </div>

    <div class="container">
      <div class="grid gap">
        <div class="col-xs-12 col-md-12 col-xl-12" style="margin:auto;">
          <h2 style="text-align: center">Visit Our Store</h2>   
          <div class="card soft" style="display: flex; flex-direction: column; align-items: center">
            <img style="width:300px; height:auto;" src="img/janstudiomockup.png" alt="Random Name">
            <div>
              <p style="margin-left: 0;"><strong>Address:</strong> 352 Brighton Ave, San Francisco, CA 94012</p>
              <p style="margin-left: 0;"><strong>Phone: </strong>(650)-839-3620</p>
              <p><strong>Open Hours:</strong> Monday-Friday 10:00 AM - 6:00 PM</p>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-md-12 col-xl-12" style="margin:auto;">
          <h2 style="margin-left:0px">Meet designers</h2>   
        </div>

        <div class="col-xs-12 col-md-6 col-xl-6">
          <div class="card soft">
            <h2  style="color:#fb8ca9"><strong>Janelle Li</strong></h2><br>
            <img style="width:100%; height:auto;" src="img/designer1.png" alt="Random Name">
            <p style="text-align:center" >CEO & Founder</p>
            <p style="text-align:center" >Janelle@janstudio.com</p>
          </div>
        </div>

        <div class="col-xs-12 col-md-6 col-xl-6">
          <div class="card soft">
            <h2 style="color:#fb8ca9"><strong>Victor Palumbo</strong></h2><br>
            <img style="width:100%; height:auto;" src="img/cs.jpg" alt="Random Name">
            <p style="text-align:center">Vice President of Business Development </p>
            <p style="text-align:center">Victor@janstudio.com</p>
          </div>
        </div>

        <div class="col-xs-12 col-md-6 col-xl-6">
          <div class="card soft">
            <h2 style="color:#fb8ca9"><strong>Sarah Robins</strong></h2><br>
            <img style="width:100%; height:auto;" src="img/marketing.jpg" alt="Random Name">
            <p style="text-align:center">UX/UI Designer</p>
            <p style="text-align:center">Sarah@janstudio.com</p>
          </div>
        </div>
        
        <div class="col-xs-12 col-md-6 col-xl-6">
          <div class="card soft">
            <h2 style="color:#fb8ca9"><strong>William Vander</strong></h2><br>
            <img style="width:100%; height:auto;" src="img/designer.jpg" alt="Random Name">
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