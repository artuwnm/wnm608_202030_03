<!DOCTYPE html>
<html lang="en">
<head>
    <title>Collection Page</title>
    <?php include "parts/meta.php" ?>
    <link rel="stylesheet" href="lib/css/gridsystem.css">
    <link rel="stylesheet" href="lib/css/styleguide.css">
    <link rel="stylesheet" href="css/storetheme.css">
    <script src="https://kit.fontawesome.com/041ded284b.js" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</head>
<body>

  <?php include "parts/navbar.php" ?>

  <main>
    <div class="home-images">
      <div class="img-container home-img2">
        <div class="hero-text">
          <h1 style="font-size:50px">COLLECTION'S</h1>
          <h3>CRUISE 2020</h3>
          <button onclick="location.href='./index.php'" type="button">Explore
          </button>
        </div>
      </div>
    </div>

    <!-- First Photo Grid-->
      <div class="col-4 col-s-4">
        <img src="./img/home1.jpg" alt="Sandwich" style="width:100%" onClick="location.href='./product_item.php?productId=1'">
        <h3>Rayon Long-Sleeve Blouses</h3>
        <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
      <div class="col-4 col-s-4">
        <img src="./img/home1.jpg" alt="Steak" style="width:100%" onClick="location.href='./product_item.php?productId=2'">
        <h3>Rayon Long-Sleeve Blouses</h3>
        <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
      <div class="col-4 col-s-4">
        <img src="./img/home1.jpg" alt="Cherries" style="width:100%"
        onClick="location.href='./product_item.php?productId=3'">
        <h3>Rayon Long-Sleeve Blouses</h3>
        <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
        <p>What else?</p>
      </div>
      <div class="col-4 col-s-4">
        <img src="./img/home1.jpg" alt="Pasta and Wine" style="width:100%" 
        onClick="location.href='./product_item.php?productId=4'">
        <h3>Rayon Long-Sleeve Blouses</h3>
        <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
  
    <!-- Second Photo Grid-->
    
      <div class="col-4 col-s-4">
        <img src="./img/home1.jpg" alt="Popsicle" style="width:100%"
        onClick="location.href='./product_item.php?productId=5'">
        <h3>Rayon Long-Sleeve Blouses</h3>
        <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
      <div class="col-4 col-s-4">
        <img src="./img/home1.jpg" alt="Salmon" style="width:100%"
        onClick="location.href='./product_item.php?productId=6'">
        <h3>Rayon Long-Sleeve Blouses</h3>
        <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
      <div class="col-4 col-s-4">
        <img src="./img/home1.jpg" alt="Sandwich" style="width:100%"
        onClick="location.href='./product_item.php?productId=7'">
        <h3>Rayon Long-Sleeve Blouses</h3>
        <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
      <div class="col-4 col-s-4">
        <img src="./img/home1.jpg" alt="Croissant" style="width:100%"
        onClick="location.href='./product_item.php?productId=8'">
        <h3>Rayon Long-Sleeve Blouses</h3>
        <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
    

  </main>

  <?php include "parts/footer.php" ?>

</body>
</html>