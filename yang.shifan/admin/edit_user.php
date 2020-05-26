<?php 
include_once('../lib/php/functions.php');
include('../parts/admin_header.php');
?>

<div class="container">
    <?php
    $index = $_GET['user'];
    $users_array = getData();
    $user = $users_array[$index];
    $name = $user['name'];
    $type = $user['type'];
    $email = $user['email'];
    $classes = implode(", ", $user['classes']);
  ?>
<form method="post" action="update_user.php">
    <input type="hidden" name="user_index" value="<?php echo $index ?>">
    <label for="name">User name:</label><br>
    <input type="text" id="name" name="name" value="<?php echo $name ?>"><br>
    <label for="type">Type:</label><br>
    <input type="text" id="type" name="type" value="<?php echo $type ?>"><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" value="<?php echo $email ?>"><br>
    <label for="classes">Classes:</label><br>
    <input type="text" id="classes" name="classes" value="<?php echo $classes ?>"><br>
    <input class="button" type="submit" value="Update">
</form>

<form method="post" action="delete_user.php">
<input type="hidden" name="user_index" value="<?php echo $index ?>">
<input class="button" type="submit" value="Delete">
</form>
</div>

<?php include('../parts/footer.php') ?>
