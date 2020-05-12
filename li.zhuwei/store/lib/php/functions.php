<?php

function getData($f) {
  $str = file_get_contents($f);
  $res = json_decode($str);
  if ($error = json_last_error()) {
    $errorReference = [
        JSON_ERROR_DEPTH => 'The maximum stack depth has been exceeded.',
        JSON_ERROR_STATE_MISMATCH => 'Invalid or malformed JSON.',
        JSON_ERROR_CTRL_CHAR => 'Control character error, possibly incorrectly encoded.',
        JSON_ERROR_SYNTAX => 'Syntax error.',
        JSON_ERROR_UTF8 => 'Malformed UTF-8 characters, possibly incorrectly encoded.',
        JSON_ERROR_RECURSION => 'One or more recursive references in the value to be encoded.',
        JSON_ERROR_INF_OR_NAN => 'One or more NAN or INF values in the value to be encoded.',
        JSON_ERROR_UNSUPPORTED_TYPE => 'A value of a type that cannot be encoded was given.',
    ];
    $errStr = isset($errorReference[$error]) ? $errorReference[$error] : "Unknown error ($error)";
    throw new \Exception("JSON decode error ($error): $errStr");
  }
  return $res;
}

include_once "auth.php";
function makePDOConn(){
  try {
    $conn = new PDO(...makePDOAuth());
  } catch(PDOException $e) {
    die($e->getMessage());
  }
  return $conn;
}

function writeData($f, $content) {
  file_put_contents($f, json_encode($content));
}

function print_p($v) {
  echo "<pre>",print_r($v),"</pre>";
}

function check_valid_email($input) {
  return filter_var(test_input($input), FILTER_VALIDATE_EMAIL);
}

function check_valid_type($input) {
  return preg_match("/^[a-zA-Z ]*$/", test_input($input));
}

function check_valid_classes($input) {
  return preg_match("/^[0-9, ]*$/", test_input($input));
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function getResult($f) {
  return json_decode(file_get_contents($f));
}

include_once "product_model.php";
function getRows($conn,$sql) {
  $a = [];

  $result = $conn->query($sql);

  $obj = new ProductModel();

  while($row = $result->fetchObject(get_class($obj))) {
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
  $data = getRows(makePDOConn(),
    "SELECT * FROM `products` WHERE `id` in ($ids)"
  );

  return array_map(function($o) use ($cart) {
    $p = array_find($cart,function($co) use ($o){ return $co->id==$o->id; });
    $o->amount = $p->amount;
    $o->total = $p->amount * $o->price;
    return $o;
  },$data);
}

?>