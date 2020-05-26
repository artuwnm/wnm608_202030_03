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
      <div class="grid">
        <div class="col-xs-12 col-md-12 col-xl-12" style="padding:0; float:center; margin:auto;">
          <h2 style="text-align:center">Login</h2>
          <div class="card" style="padding-bottom: 0px; margin-bottom: 0px;">
          <div class="image-square">
            <img src="img/Avatar.png" alt="Avatar" class="avatar" style="width:150px; height:auto;">
          </div>
      </div>
        </div>
        <div class="col-xs-12 col-md-4 col-xl-4" style="padding:0; float:center; margin:auto;">
          <a href="#" class="fb login-option">
            <i class="fa fa-facebook fa-fw"></i>Facebook
          </a>
        </div>
        <div class="col-xs-12 col-md-4 col-xl-4" style="padding:0; float:center; margin:auto;">
          <a href="#" class="twitter login-option">
            <i class="fa fa-twitter fa-fw"></i>Twitter
          </a>
        </div>
        <div class="col-xs-12 col-md-4 col-xl-4" style="padding:0; float:center; margin:auto;">
          <a href="#" class="google login-option"><i class="fa fa-google fa-fw">
            </i>Google+
          </a>
        </div>

        <div class="col-xs-12 col-md-12 col-xl-12" style="padding:0">
          <form>
            <div class="card" style="padding:0;">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
            </div>

            <div class="card" style="padding:0;">
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
            </div>
         
            <div class="card" style="padding:0;">
              <a class="form-button" href="index.php">Login</a>
            </div>
         
            <div class="container" style="background-color:#f1f1f1">
              <span class="psw"><a href="#">Forgot password?</a></span>
               <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

  <?php include "parts/footer.php" ?>
  
</body>
</html>