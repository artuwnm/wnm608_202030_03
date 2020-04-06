<?php include('../parts/header.php') ?>
<?php include('../lib/php/functions.php')?>

<form>
  <?php
    $index = $_GET['user'];
    $users_array = getData();
    $user = $users_array[$index];
    $name = $user['name'];
    $type = $user['type'];
    $email = $user['email'];
    $classes = implode(", ", $user['classes']);
  ?>
  <label for="name">User name:</label><br>
  <input type="text" id="name" name="name" value="<?php echo $name ?>"><br>
  <label for="type">Type:</label><br>
  <input type="text" id="type" name="type" value="<?php echo $type ?>"><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value="<?php echo $email ?>"><br>
  <label for="classes">Classes:</label><br>
  <input type="text" id="classes" name="classes" value="<?php echo $classes ?>"><br>
  <input type="submit" value="Update" disabled>
</form> 

<?php include('../parts/footer.php') ?>
