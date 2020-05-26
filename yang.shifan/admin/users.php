<?php 
include_once('../lib/php/functions.php');
include('../parts/admin_header.php');
?>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>
</head>
<body>

<table style="width:100%">
  <tr>
    <th>User List</th>
  </tr>
  <?php
    makeConn();
    $users_array = getData();
    foreach ($users_array as $index => $user) {
      $name = $user['name'];
      echo "<tr><td><a href=\"edit_user.php?user=$index\">$name</a></td></tr>";
    }
  ?>
</table>

<?php include('../parts/footer.php') ?>
