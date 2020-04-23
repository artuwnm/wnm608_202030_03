<!DOCTYPE html>
<html lang="en">
<head>
		<title>Login Form</title>
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

<div class="container">
<nav class="nav-ctumbs" style="margin:1em 0">
	<ul>
	<li>
		<a href="index.php">Back</a>
	</li>
	</ul>
</div>
  <h2>Login Form</h2>

<form>
  <div class="container">
  	<div class="card soft">
  	<div class="imgcontainer">
    <img src="img/designer1.png" alt="Avatar" class="avatar">
    </div>
    </div>
  </div>

  <div class="container">
  	<div class="card soft">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    </div>

	<div class="card soft">
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    </div>
        
   
   <div class="card soft">
    <a class="form-button" href="index.php">Login</a>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  


  <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Forgot <a href="#">password?</a></span>
 </div>
</div>

</form>
</main>

  <?php include "parts/footer.php" ?>
  
</body>
</html>