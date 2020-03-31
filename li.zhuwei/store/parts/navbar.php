
<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";
?>
<header class="navbar">
    <div class="container display-flex">
      <div class="flex-stretch" onclick="window.location.replace('./index.html');">
        <h1>JAN STUDIO</h1>
      </div>
      <nav class="nav flex-none">
        <!-- ul>li*3>a[href=#]>{Link $} -->
        <ul class="display-flex">
            <li><a href="collection.php">COLLECTION</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="contacts.php">CONTACT</a></li>
              <a href="bag.php">BAG
                <i class="fas fa-shopping-bag"></i>
              </a>
            </li>
        </ul>
      </nav>
    </div>
  </header>
		

</body>
</html>






			