<?php 
	$url = '../../data/user.json'; // path to your JSON file
	$data = file_get_contents($url); // put the contents of the file into a variable
	$users2 = json_decode($data,true);// 把JSON字符串转成PHP数组

	$num = (isset($_POST['num'])) ? $_POST['num'] : 'no num';
	$array = ['num' => $num];
	echo json_encode($array);
	
	unset($users2[$num]);

	$users2 = array_values($users2);

	$string = json_encode($users2);
	file_put_contents('../../data/user.json',$string);//写入
 ?>
