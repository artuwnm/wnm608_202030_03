<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Form</title>
	<?php include "parts/meta.php" ?>
</head>
<body>
  <?php include "parts/navbar.php" ?>
  <main>
    <div class="container">
       <nav class="nav-crumbs" style="margin:1em 0">
        <ul>
          <li><a href="index.php"><i class="fas fa-arrow-left" style="color:black;"></i> Back</a></li>    
        </ul>
      </nav>
    </div>

    <div class="container">
      <h2 style="text-align:center">Login with Social Media or Manually</h2>
      <div class="card">
      <div class="imgcontainer">
      <img src="img/Avatar.png" alt="Avatar" class="avatar">
      </div>
      </div>
    </div>

    <form>
      <div class="container">
        <div class="card">
          <a href="#" class="fb login-option">
            <i class="fa fa-facebook fa-fw"></i> Login with Facebook
           </a>
          <a href="#" class="twitter login-option">
            <i class="fa fa-twitter fa-fw"></i> Login with Twitter
          </a>
          <a href="#" class="google login-option"><i class="fa fa-google fa-fw">
            </i> Login with Google+
          </a>
        </div>
      </div>

      <div class="container">
        <div class="card">
          <p>Or sign in manually:</p>
        </div>
      </div>

      <div class="container">
      	<div class="card">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
        </div>

      	<div class="card">
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
        </div>
     
        <div class="card">
          <a class="form-button" href="index.php">Login</a>
        </div>
     
        <div class="container" style="background-color:#f1f1f1">
          <span class="psw">Forgot <a href="#">password?</a></span>
           <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      </div>
    </form>
  </main>

  <?php include "parts/footer.php" ?>
  
</body>
</html>