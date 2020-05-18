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
          <p><strong>Address:</strong> <br>352 Brighton Ave, San Francisco, CA 94012</p>
          <p><strong>Phone: </strong><br>(650)-839-3620</p>
          <p><strong>Open Hours:</strong> <br>Monday-Friday 10:00 AM - 6:00 PM</p>
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

    <div class="view-window" style="background-image:url('img/summerstory.png')">
      <div class="display-flex" style="justify-content: center; align-items: center; height: 100%;">
        <div class="card soft" style="text-align:center">
          <h2>COMING SOON</h2>
          <h3>Get 20% OFF on Everything.</h3>
          <h3 style="color:#fb8ca9">CODE:JANSTUDIOBONUS</h3>
          <P>All purchase in store and online May 25th - May 31th</P>
        </div>
      </div>
    </div>
    <div class="container">
      <h2>Seasons</h2>
      <?php recommendedCategory('seasons'); ?>
    </div>

  <div class="container">
    <div class="display-flex" style="justify-content: center">

      <div class="display-flex" style="flex-direction: column;">
        <h1 style="text-align:center">Design Stories</h1>

        <div class="card">
          <img src="img/fairystory.png">
          <h2>FairyLand</h2>
          <p><b>BEST GIFT FOR GIRLFRIEND AND MOM!</b> <br>I wish you were a fairyland, hoping you are happy endlessly. I wish you can enjoy the fairyland atmosphere of the evenings here when the myriad stars twinkle as though in communication with the glittering lights.</p> 
             <div class="card">
             <a class="form-button" href="http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?id=2">Details</a>
             </div>
        </div>

        <div class="card">
          <img src="img/peacockstory.png">
          <h2>Peacock</h2>
          <p><b>A WONDERFUL GIFT FOR FRIENDS AND FAMILIES.</b> <br>The design inspired from Filoli Garden located in Redwood City. A steamy jungle covered it, but not with plants. This covering seemed to be made of peacock feathers, full of eyes and shimmering colors.</p>  
             <div class="card">
             <a class="form-button" href="http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?id=14">Details</a>
             </div>
        </div>

        <div class="card">
          <img src="img/Bluestory.png">
          <h2>Ocean</h2>
          <p><b>A STORY BETWEEN THE BLUE OCEAN AND LITTLE DAISY.</b> <br>The tiny little skylark stroked the daisy, and flew away to the wide and blue sky. It looked like an ocean of flowers. Is there any significance to this blue? Yes, it is little daisy's ocean dream.</p> 
             <div class="card">
             <a class="form-button" href="http://janelleweiwei.org/aau/wnm608/li.zhuwei/store/product_item.php?id=5">Details</a>
             </div>
        </div>
      </div>
    </div>
  </div>
  </main>

  <?php include "parts/footer.php" ?>

</body>
</html>