<?php

session_start();



function getData($f) {
	return json_decode(file_get_contents($f));
}


function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}


include_once "auth.php";
function makeConn() {

	@$conn = new mysqli(...makeAuth());

	if($conn->connect_errno) die($conn->connect_error);

	$conn->set_charset('utf8');

	return $conn;
}

function makePDOConn() {
	try {
		$conn = new PDO(...makePDOAuth());
	} catch(PDOException $e) {
		die($e->getMessage());
	}
	return $conn;
}


function getRows($conn,$sql) {
	$a = [];

	$result = $conn->query($sql);

	if($conn->errno) die($conn->error);

	while($row = $result->fetch_object()) {
		$a[] = $row;
	}

	return $a;
}









// CART FUNCTIONS

// Array find loops an array looking for the first object that matches a boolean function
function array_find($array,$fn) {
	foreach($array as $o) if($fn($o)) return $o;
	return false;
}


function getCart() {
	return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}

function addToCart($id,$amount,$price) {
	$cart = getCart();
	
	$p = array_find(
		$cart,
		function($o) use ($id) { return $o->id==$id; }
	);

	if($p) {
		$p->amount += $amount;
	} else {
		$_SESSION['cart'][] = (object)[
			"id"=>$id,
			"amount"=>$amount,
			"price"=>$price
		];
	}
}

function getCartItems() {
	$cart = getCart();

	if(empty($cart)) return [];

	$ids = implode(",",array_map(function($o){return $o->id;},$cart));
	$data = getRows(makeConn(),
		"SELECT * FROM `products` WHERE `id` in ($ids)"
	);

	return array_map(function($o) use ($cart) {
		$p = array_find($cart,function($co) use ($o){ return $co->id==$o->id; });
		$o->amount = $p->amount;
		$o->total = $p->amount * $o->price;
		return $o;
	},$data);
}