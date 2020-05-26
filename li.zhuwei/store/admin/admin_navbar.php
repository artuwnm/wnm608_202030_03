<script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function showHideHamburger() {
  var topnav = document.getElementById("myTopnav");
  if (topnav.className === "nav-pills topnav") {
    topnav.className = "topnav responsive";
  } else {
    topnav.className = "nav-pills topnav";
  }
}
</script>

<header class="navbar">
  <div class="display-flex">
    <nav class="nav-pills topnav" id="myTopnav">
      <ul>
        <li>
          <img id="nav-logo" src="../img/JanStudio.png" alt="JANSTUDIO">
        </li>
        <li><a href="../admin">Admin</a></li>
        <li><a href="../admin?id=new">Add New Product</a></li>
        <li><a href="users.php">User List</a></li>
        <li><a href="../index.php">Home</a></li>
        <li>
          <a href="javascript:void(0);" class="hamburger" onclick="showHideHamburger()">
            <i class="fa fa-bars"></i>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>