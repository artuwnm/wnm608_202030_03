<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Landing Page</title>
    <?php include "parts/meta.php"; ?>
    <?php include "parts/templates.php"; ?>
</head>
 
<body>
  <?php include "parts/navbar.php" ?>

  <main>
    <div class="home-images">
      <div class="img-container home-img1">
        <div class="hero-text">
          <h1 style="font-size:50px">New Collection</h1>
          <h3>See what's coming</h3>
          <button class="home-button" onclick="location.href='collection.php'" type="button">Explore
          </button>
        </div>
      </div>
    </div> 

    <div class="container">
      <div class="card">
        <h2>Visit Our Store</h2><br>
        <img src="img/janstudiomockup.png" alt="Random Name">
        <div class="card soft">
          <p><strong>Address:</strong> 352 Brighton Ave, San Francisco, CA 94012</p>
          <p><strong>Phone: </strong>(650)-839-3620</p>
          <p><strong>Open Hours:</strong> Monday-Friday 10:00 AM - 6:00 PM</p>
        </div>
      </div>

      <h2>Trending</h2>
      <div class="horizontal-card-list">
        <button id="scroll-button-left">
          <i class="fas fa-angle-left fa-lg"></i>
        </button>
        <div class="scrolling-wrapper">
          <?php recommendedCategory('trending', 12, True); ?>
        </div>
        <button id="scroll-button-right">
          <i class="fas fa-angle-right fa-lg"></i>
        </button>
      </div>
    </div>

    <div class="container">
      <h2>Seasons</h2>
      <?php recommendedCategory('seasons'); ?>
    </div>

    <div class="view-window" style="background-image:url('img/home1.png')">
      <div class="display-flex" style="justify-content: center; align-items: center; height: 100%;">
        <div class="card soft">
          <h2>JANSTUDIO SALE COMING NEXT MONTH!</h2>
          <P>Get 20% OFF on Everything. Start 6/23 12:00 AM!
        </div>
      </div>
    </div>

    <div class="display-flex" style="justify-content: center">
      <div class="display-flex" style="flex-direction: column;">
        <div class="card">
          <img src="img/Pin1.png">
          <h3>Los Angeles</h3>
          <p><b>We had the best time playing at Venice Beach!</b></p> 
        </div>
        <div class="card">
          <img src="img/home4.png">
          <h3>Los Angeles</h3>
          <p><b>We had the best time playing at Venice Beach!</b></p> 
        </div>
      </div>
    </div>
  </main>

  <?php include "parts/footer.php" ?>

</body>
</html>