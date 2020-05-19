<?php

session_start();


function getData($f) {
	return json_decode(file_get_contents($f));
}


function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}


include_once "auth_example.php";
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
    $a = $result->fetch_all(MYSQLI_ASSOC);
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
		function($o) use ($id) {
		    return $o->id==$id;
		}
	);

	echo $price;
	if($p) {
		$p['amount'] += $amount;
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
	$ids = implode(",",array_map(function($o){
        return $o->id;
    },$cart));
	$data = getRows(makeConn(),
		"SELECT * FROM `products` WHERE `id` in ($ids)"
	);
	return array_map(function($o) use ($cart) {
		$p = array_find($cart,function($co) use ($o){
		    return $co->id==$o['id'];
		});
        $o['amount'] = $p->amount;
		$o['total'] = $p->amount * $o['price'];
		return $o;
	},$data);
}


@$category = $_GET['category'];
function getData_s(){
    global $category;
    $sql = "SELECT id,name,price,images FROM products WHERE category='{$category}'";
    if ($category==null){
        $sql = "SELECT id,name,price,images FROM products";
    }
    return getRows(makeConn(),$sql);
}


function indexData(){
    $data = getData_s();
    $html = "";
    for ($i=0;$i<count($data);$i++){
        $margin = "margin-right: 9.5%";
        if (($i+1)%3==0){
            $margin = "";
        }
        $price = $data[$i]['price'];
        $html .= <<<EOT
                    <div class="divShade" style="width: 27%;$margin;margin-top: 2em;">
                        <img src="img/{$data[$i]['images']}" alt="" style="width: 100%;height: 140px;margin: 0;display: block">
                        <div style="padding: 0.3em;width: 100%;cursor: default;height: 40px;margin-bottom: 10px">
                            <span style="float: left;padding: 0.8em 0 0.8em 0.8em">{$data[$i]['name']}</span>
                            <span style="float: right;padding: 0.8em;font-weight: bold">$ {$price}</span>
                        </div>
                        <div style="width: 100%;margin-bottom: 15px;margin-top: 5px;">
                            <a class="a_" href="product_item.php?id={$data[$i]['id']}" style="margin: 0 auto;width:120px ;padding: 3px 0;display: block;text-align: center;background: #a8a408;color: #FFF;font-size: 14px;font-weight: normal;border:1px solid ;border-radius:25px;">
                                Add&nbsp;to&nbsp;Cart
                            </a>
                        </div>
                    </div>
EOT;
    }
    echo $html;
}