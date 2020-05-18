
<?php

include "lib/php/functions.php";


?><!DOCTYPE html>
<html lang="en">
<head>
	<title>PRODUCT LIST</title>
	<?php include "Parts/meta.php" ?>



<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="lib/js/functions.js"></script>
<script src="js/templates.js"></script>
<script src="js/list.js"></script>

</head>



<body>
	<?php include "Parts/navbar.php" ?>



		

<div class="container">

<h4>Product List</h4>

      <div class="form-control">
        <form class="hotdog light" id="product-search">
          <input type="search" class="search" placeholder="Search Products">
        </form>
      </div>
<br>





<div class="form-control display-flex">
  <div class="flex-none-1">
  <button type="button" class="form-button js-filter" data-type="category"  data-value="">All</button>
</div>
<div class="flex-none-1">
  <button type="button" class="form-button js-filter" data-type="category" data-value="Dinnerware">Dinnerware</button>
      </div>

<div class="flex-none-1">
  <button type="button" class="form-button js-filter" data-type="category" data-value="Drinkware">Drinkware</button>
      </div>


<div class="flex-none-1">
  <button type="button" class="form-button js-filter" data-type="category" data-value="Serveware">Serveware</button>
      </div>


    </div>




<div class="col-xs-12 col-md-6">
      <div class="display-flex flex-align-right ">


<div class="form-control">
        <div class="form-select">
          <select class="js-sort">
            <option value="1">Newest</option>
            <option value="2">Oldest</option>
            <option value="3">Most Expensive</option>
            <option value="4">Least Expensive</option>
          </select>
        </div>
      </div>



</div>
</div>


<br>
<br>



<div class="grid gap productlist"></div>
		
</div>

<br>
<br>
<br>






<footer class="footer">
  <div class="container display-flex flex-justify-center">
    <div class="copyright">
      <h1>Abode<br>© 2020 design by Aejin Choi</h1>
    </div>
  </div>
</footer>



		</body>
		</html>