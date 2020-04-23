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


include_once "auth.php";
function makeConn() {

  @$conn = new mysqli(...makeAuth());

  if($conn->connect_errno) die($conn->connect_error);

  $conn->set_charset('utf8');

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
?>
