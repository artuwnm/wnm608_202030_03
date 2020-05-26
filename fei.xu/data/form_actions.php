<?php

require_once "../lib/php/functions1.php";



if(!isset($_GET['action'])) die("No Action Set");






switch($_GET['action']) {
	case "add-to-cart":
		$product = getRows(makeConn(),"SELECT `price` FROM `products` WHERE `id` = {$_GET['id']}");
		addToCart($_GET['id'],$_GET['amount'],$product[0]->price);
		header("location:../finalphp/product_added_to_cart.php?id={$_GET['id']}");
		break;
	case "update-cart-amount":
		$p = array_find(
			$_SESSION['cart'],
			function($o){ return $o->id==$_GET['id']; }
		);
		$p->amount = $_GET['amount'];
		header("location:../finalphp/product_cart.php");
		break;
	case "delete-cart-item":
		$_SESSION['cart'] = array_filter($_SESSION['cart'],function($o){ return $o->id!=$_GET['id']; });
		
		header("location:../finalphp/product_cart.php");
		break;
}


print_p($_SESSION);