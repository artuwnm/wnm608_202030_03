
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Landing Page</title>
    <?php include "parts/meta.php" ?>
    <link rel="stylesheet" href="lib/css/gridsystem.css">
    <link rel="stylesheet" href="lib/css/styleguide.css">
    <link rel="stylesheet" href="css/storetheme.css">
    <script src="https://kit.fontawesome.com/041ded284b.js" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</head>
<body>
  <!-- header.navbar>h1+nav.nav -->
  <?php include "parts/navbar.php" ?>

  <main>
    <div class="home-images">
      <div class="img-container home-img1">
        <div class="hero-text">
          <h1 style="font-size:50px">New Collection</h1>
          <h3>See what's coming</h3>
          <button onclick="location.href='collection.php'" type="button">Explore
          </button>
        </div>
      </div>
     </div> 

    <div class="container">
      <div class="card soft">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, illum magni dolor aspernatur vero repudiandae porro ab accusamus nostrum, quibusdam, possimus vel dolorem nemo eos exercitationem. Impedit laboriosam commodi, at.</p>
        <p>Sed atque, molestiae aperiam voluptatum deleniti quis amet mollitia! Aliquam amet eius molestias dignissimos nesciunt tempore voluptate sunt voluptatibus praesentium, aut deleniti animi officiis ipsa quam unde, similique quasi adipisci.</p>
      </div>
      <div class="card soft dark">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, illum magni dolor aspernatur vero repudiandae porro ab accusamus nostrum, quibusdam, possimus vel dolorem nemo eos exercitationem. Impedit laboriosam commodi, at.</p>
        <p>Sed atque, molestiae aperiam voluptatum deleniti quis amet mollitia! Aliquam amet eius molestias dignissimos nesciunt tempore voluptate sunt voluptatibus praesentium, aut deleniti animi officiis ipsa quam unde, similique quasi adipisci.</p>
      </div>
    </div>

    <div class="view-window display-flex flex-align-center flex-justify-center" style="background-image:url('img/background.jpg')">
      <div class="card soft">
        <h2>COOL CONTENT</h2>
      </div>
    </div>

    <div class="container">
      <div class="grid gap">
        <div class="col-4">
          <div class="card soft">
            <!--1 p*2>lorem20 -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam perspiciatis, ipsa! Dicta dolor blanditiis, velit iure, distinctio perferendis nisi impedit.</p>
            <p>Unde, iste neque laborum, aperiam quod dignissimos voluptatum facere! Voluptatibus, distinctio, in. Vitae qui, reprehenderit facere rerum ad dolorem doloremque!</p>
          </div>
        </div>


          <div class="col-4">
          <div class="card soft">
            <!-- p*2>lorem20 -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veritatis sequi fugit eum iste cumque molestias eveniet at quasi alias!</p>
            <p>Id voluptatibus, ipsa debitis sint, vel nulla dignissimos quis cupiditate tempora similique accusamus facilis facere inventore laborum porro quo sapiente?</p>
          </div>
        </div>

        <div class="col-4">
          <div class="card soft">
            <!-- p*2>lorem20 -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam perspiciatis, ipsa! Dicta dolor blanditiis, velit iure, distinctio perferendis nisi impedit.</p>
            <p>Unde, iste neque laborum, aperiam quod dignissimos voluptatum facere! Voluptatibus, distinctio, in. Vitae qui, reprehenderit facere rerum ad dolorem doloremque!</p>
          </div>
        </div>
        
      </div>
    </div>
  </main>

  <?php include "parts/footer.php" ?>

</body>
</html>