<?php
include "../lib/php/functions.php";


$empty_product = (object) [
  "name"=>"",
  "price"=>"",
  "description"=>"",
  "thumbnail"=>"",
  "images"=>"",
  "quantity"=>"",
  "category"=>"",
];


// CRUD LOGIC
try{
$conn = makePDOConn();
switch(@$_GET['action']) {
  case "update":
    $statement = $conn->prepare("UPDATE
    `products`
    SET 
        `name`=?,
        `price`=?,
        `category`=?,
        `description`=?,
        `thumbnail`=?,
        `images`=?,
        `date_modified`=NOW()
    WHERE `id`=?
      ");
    $statement->execute([
        $_POST['product-name'],
        $_POST['product-price'],
        $_POST['product-category'],
        $_POST['product-description'],
        $_POST['product-thumbnail'],
        $_POST['product-images'],
        $_GET['id']
    ]);

    header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
    break;
  case "create":
    $statement = $conn->prepare("INSERT INTO
    `products`
    (
        `name`,
        `price`,
        `category`,
        `description`,
        `thumbnail`,
        `images`,
        `date_create`,
        `date_modified`
    )
    VALUES
    (?,?,?,?,?,?,NOW(),NOW())
    ");

    $statement->execute([
        $_POST['product-name'],
        $_POST['product-price'],
        $_POST['product-category'],
        $_POST['product-description'],
        $_POST['product-thumbnail'],
        $_POST['product-images'], 
    ]);

    $id = $conn->lastInsertId();

    header("location:{$_SERVER['PHP_SELF']}?id=$id");
    break;
  case "delete":
    $statement = $conn->prepare("DELETE FROM `products` WHERE id=?");

    $statement->execute([$_GET['id']]);
    $id = $conn->lastInsertId();

    header("location:{$_SERVER['PHP_SELF']}");
    break;
}
} catch(PDOException $e) {
  die($e->getMessage());
}

//TEMPLATES
function makeListItemTemplate($r,$o) {
return $r.<<<HTML
<div class="itemlist-item display-flex">
    <div class="flex-none">
      <div class="image-square">
        <img src="../$o->thumbnail">
      </div>
    </div>

    <div class="flex-stretch">
      <div><strong>$o->name</strong></div>
      <div><strong>$o->category</strong></div>
    </div>
    <div class="flex-none display-flex">
        <div><a class="form-button"  href="./?id=$o->id">edit</a></div>
        <div><a class="form-button"  href="../product_item.php?id=$o->id">visit</a></div>
    </div>
</div>
HTML;
}

function makeProductForm($o) {

$id = $_GET['id'];

$addoredit = $id == "new" ? 'Add' : 'Edit';
$createorupdate = $id == "new" ? 'create' : 'update';
$deletebutton = $id == "new" ? '' : <<<HTML
<li class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$id&action=delete">Delete</a></li>
HTML;

$images = array_reduce(explode(",",$o->images), function($r,$p) {
  return $r."img src='img/$p'>";
});

$data_show = $id == "new" ? "" : <<<HTML
<div class="card soft">

<div class="product-main">
  <img src="../$o->thumbnail">
</div>
<div class="product-thumbs">$images</div>


<h2>$o->name</h2>
<div class="form-control">
  <strong>Price</strong>
  <span>$o->price</span>
</div>
<div class="form-control">
  <strong>Category</strong>
  <span>$o->category</span>
</div>
<div class="form-control">
  <strong>Description</strong>
  <span>$o->description</span>
</div>
</div>
HTML;


echo <<<HTML
<nav class="nav-pills">
  <div class="card soft">
  <ul>
    <li class="flex-none"><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
    <li class="flex-stretch"></li>
    $deletebutton
  </ul>
  </div>
</nav>
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
  <div class="grid gap">
    <div class="col-xs-12 col-md-4">
      $data_show
    </div>
    <div class="col-xs-12 col-md-8">
      <div class="card soft">
      <h2>$addoredit Product</h2>
      <div class="form-control">
        <label class="form-label" for="product-name">Name</label>
        <input class="form-input" id="product-name" name="product-name" value="$o->name">
      </div>

      <div class="form-control">
        <label class="form-label" for="product-price">Price</label>
        <input class="form-input" id="product-price" name="product-price" value="$o->price">
      </div>

      <div class="form-control">
        <label class="form-label" for="product-category">Category</label>
        <input class="form-input" id="product-categorye" name="product-category" value="$o->category">
      </div>

      <div class="form-control">
        <label class="form-label" for="product-description">Description</label>
        <textarea class="form-input" id="product-descriptione" name="product-description">$o->description</textarea>
      </div>

      <div class="form-control">
        <label class="form-label" for="product-thumbnail">Thumbnail</label>
        <input class="form-input" id="product-thumbnail" name="product-thumbnail" value="$o->thumbnail">
      </div>
     
     <div class="form-control">
        <label class="form-label" for="product-images">Other Images</label>
        <input class="form-input" id="product-images" name="product-images" value="$o->images">
      </div>

      <div class="form-control">
        <input type="submit" class="form-button" value="Submit">
      </div>
      </div>
    </div>
  </div>
</form>
HTML;

}

// file_put_contents, json_encode, explode, $_POST
// CRUD - Create Read Update Delete

$USER_DATA_FILE = "../data/users.json";

$users = getData($USER_DATA_FILE);

function showUserPage($user, $id) {
  $classes = implode(", ", $user->classes);

echo <<<HTML
<nav class='nav-crumbs'>
  <ul>
    <li><a href='users.php'>Back</a></li>
  </ul>
</nav>
<div>
  <h2>$user->name</h2>
  <div>
    <strong>Type</strong>
    <span>$user->type</span>
    <br>
  </div>
  <div>
    <strong>Email</strong>
    <span>$user->email</span>
  </div>
  <div>
    <strong>Classes</strong>
    <span>$classes</span>
  </div>
</div>

<br>
<h2>Update user information</h2>

<form method="post" action="users.php?id=$id">
  <label for="name">Type</label>
  <input type="text" id="name" name="name">
  </br>
  <label for="email">Email</label>
  <input type="text" id="email" name="email">
  </br>
  <label for="classes">Classes</label>
  <input type="text" id="classes" name="classes">
  </br>
  <input type="submit" value="Submit">
</form>
HTML;
}

include_once "../lib/php/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Learning Data</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../lib/css/gridsystem.css" type="text/css">
  <link rel="stylesheet" href="../lib/css/styleguide.css" type="text/css">
  <link rel="stylesheet" href="../css/storetheme.css" type="text/css">
  <script src="https://kit.fontawesome.com/041ded284b.js" crossorigin="anonymous"></script>
  <script src="index.js"></script>
</head>
<body>

<header class="navbar">
  <script src="https://kit.fontawesome.com/041ded284b.js" crossorigin="anonymous"></script>
  <div class="container display-flex">
    <div class="flex-stretch" onclick="window.location.replace('./index.php');">
      <!-- <h1>JAN STUDIO</h1> -->
      <div class="logo">
      <img class="logoimg" src="../img/JanStudio.png" alt="JANSTUDIO">
      </div>

    </div>
    <nav class="nav flex-none">
      <!-- ul>li*3>a[href=#]>{Link $} -->
      <ul class="display-flex">
           <li><a href="../admin">Product List</a></li>
           <li><a href="../admin?id=new">Add New Product</a></li>
           <li><a href="users.php">User List</a></li>
            <li><a href="../collection.php">Home</a></li>
      </ul>
    </nav>
  </div>
</header>

   <!--  <div class="container display-flex">
      <div class="flex-stretch">
        <h1>Admin</h1>
      </div>
      <nav class="nav-flex flex-none">
        <ul>
          <li><a href="users.php">User List</a></li>
        </ul>
      </nav>
    </div>
  </header> -->

  <?php
      
    if (isset($_GET['id'])) {
    //     showUserPage(
    //     $users[$_GET['id']], $_GET['id']
    //     $empty_product:

    // );

      if($_GET['id'] == "new") {
        makeProductForm($empty_product);
      } else {
        $rows = getRows($conn, "SELECT * FROM`products` WHERE `id`='{$_GET['id']}'");
        makeProductForm($rows[0]);
      }

    } else {

echo "
  <div class='container'>
    <div class='card soft'>
     
      <h2>User List</h2>

      <nav class='nav'>
      <ul class='itemlist'>
      <ul>
      ";

      $rows = getRows ($conn,"SELECT * FROM `products`");
      echo array_reduce($rows,'makeListItemTemplate');
echo "
      </ul>
      </nav>
    </div>
  </div>
";

    }
  ?>
  
</body>
</html>