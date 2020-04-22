<?php 
 require_once "../lib/php/functions.php";



 if (isset($_GET))






 	//CART FUCNTIONS

 	function addToCart($id,$amount,$price){
 		$_SEESION['cart'][$id]=$amount *$price;
 	}