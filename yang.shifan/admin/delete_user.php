<?php

include_once('../lib/php/functions.php');
$users_array = getData();

$index = $_POST['user_index'];

if ($index >= 0 && $index < count($users_array)) {
	array_splice($users_array, $index, 1);
}

saveData($users_array);

header("location:users.php");
?>