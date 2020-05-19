<?php 
include_once('../lib/php/functions.php');
include('../parts/admin_header.php');
?>
<div class="container">
<form method="post" action="update_user.php">
  <input type="hidden" name="user_index" value="-1">
  <label for="name">User name:</label><br>
  <input type="text" id="name" name="name" value=""><br>
  <label for="type">Type:</label><br>
  <input type="text" id="type" name="type" value=""><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value=""><br>
  <label for="classes">Classes:</label><br>
  <input type="text" id="classes" name="classes" value=""><br>
  <input class="button" type="submit" value="Add">
</form>
</div>

<?php include('../parts/footer.php') ?>
