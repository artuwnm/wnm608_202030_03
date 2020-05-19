<?php

include_once('../lib/php/functions.php');
$users_array = getData();

$index = $_POST['user_index'];

$user_data = array(
	'name'=> $_POST['name'],
	'type'=> $_POST['type'],
	'email'=>$_POST['email'],
	'classes'=> explode(',', $_POST['classes'])
);

if ($index >= 0 && $index < count($users_array)) {
	$users_array[$index] = $user_data;

} else {
	array_push($users_array, $user_data);
}

saveData($users_array);

header("location:users.php");
?>