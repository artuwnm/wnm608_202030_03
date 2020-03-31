<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "../parts/meta.php" ?>
  <title>collection</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="lib/css/gridsystem.css">
  <link rel="stylesheet" href="lib/css/styleguide.css">
  <link rel="stylesheet" href="css/storetheme.css">
  <script src="https://kit.fontawesome.com/041ded284b.js" crossorigin="anonymous"></script> 
  <script src="index.js"></script>
</head>
<body>
  <!-- header.navbar>h1+nav.nav -->
  <?php include "../parts/navbar.php" ?>

  <main>
    <div class="home-images">
      <div class="img-container home-img2">
        <div class="hero-text">
          <h1 style="font-size:50px">COLLECTION'S</h1>
          <h3>CRUISE 2020</h3>
          <button onclick="location.href='index.php'" type="button">Explore
          </button>
        </div>
      </div>
    </div>

    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center" id="food">
      <div class="w3-quarter">
        <img src="./img/home1.jpg" alt="Sandwich" style="width:100%">
        <h3>Rayon Long-Sleeve Blouses</h3>
        <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
      <div class="w3-quarter">
        <img src="./img/home1.jpg" alt="Steak" style="width:100%" onclick="window.location.replace('./index.html');">
        <h3>Rayon Long-Sleeve Blouses</h3>
        <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
      <div class="w3-quarter">
        <img src="./img/home1.jpg" alt="Cherries" style="width:100%">
        <h3>Rayon Long-Sleeve Blouses</h3>
        <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
        <p>What else?</p>
      </div>
      <div class="w3-quarter">
        <img src="./img/home1.jpg" alt="Pasta and Wine" style="width:100%">
        <h3>Rayon Long-Sleeve Blouses</h3>
        <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
    </div>
    
    <!-- Second Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center">
      <div class="w3-quarter">
        <img src="./img/home1.jpg" alt="Popsicle" style="width:100%">
        <h3>Rayon Long-Sleeve Blouses</h3>
        <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
      <div class="w3-quarter">
        <img src="./img/home1.jpg" alt="Salmon" style="width:100%">
        <h3>Rayon Long-Sleeve Blouses</h3>
        <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
      <div class="w3-quarter">
        <img src="./img/home1.jpg" alt="Sandwich" style="width:100%">
        <h3>Rayon Long-Sleeve Blouses</h3>
        <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
      <div class="w3-quarter">
        <img src="./img/home1.jpg" alt="Croissant" style="width:100%">
        <h3>Rayon Long-Sleeve Blouses</h3>
        <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
      
    </div>

  </main>

</body>
</html>