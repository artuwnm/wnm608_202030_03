<?php 
	$url = '../../data/user.json'; // path to your JSON file
	$data = file_get_contents($url); // put the contents of the file into a variable
	$users2 = json_decode($data,true);// 把JSON字符串转成PHP数组

	$name = (isset($_POST['userName'])) ? $_POST['userName'] : 'no name';
	$email = (isset($_POST['email'])) ? $_POST['email'] : 'no email';
	$array = ['userName' => $name];
	echo json_encode($array);

	array_push($users2, array('user' => $name, 'email' => $email ));

	print_r($users2);
	
	$string = json_encode($users2);
	file_put_contents('../../data/user.json',$string);//写入
 ?>
