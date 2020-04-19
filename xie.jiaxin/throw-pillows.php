<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "parts/meta.php" ?>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Catamaran:300|Oxanium:300, 600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="lib/css/styleguide-m4.css">
    <link rel="stylesheet" href="lib/css/gridsystem.css">
    <link rel="stylesheet" href="css/storetheme.css">
    <link rel="stylesheet" href="/js/sticky-navbar.js">
</head>
<body>
    <!-- php -->
    <?php include "parts/navbar.php" ?>
    
    </header>
    <!-- dropdown -->
        <ul class="breadcrumb">
            <li><a href="#">Home Decor</a></li>
            <li><a href="#">Throw Pillows</a></li>    
            <li>Mango Planet</li>   
        </ul>
        <dl class="better">
            <dt><h4>Price<i class="down"></i></h4></dt>
                <dd>
                    <div class="slidecontainer">
                        <p>Value: <span id="demo"></span></p>
                        <input type="range" min="1" max="100" value="50" class="slider" id="myRange">    
                    </div>
                </dd>
        </dl>
        <dl class="better">
            <dt><h4>Color<i class="down"></i></h4></dt>
                <dd>
                    <ul id="filter-options">
                        <li><input type="checkbox" value="filter_red" data-filter_id="red"> Red</li>
                        <li><input type="checkbox" value="filter_green" data-filter_id="green"> Green</li>
                        <li><input type="checkbox" value="filter_blue" data-filter_id="blue"> Blue</li>
                        <li><input type="checkbox" value="filter_orange" data-filter_id="orange"> Orange</li>
                        <li><input type="checkbox" value="filter_yellow" data-filter_id="yellow"> Yellow</li>
                    </ul>
                </dd>
        </dl>
       
        <div class="container"> 
        <div class="grid gap">
            <div class="col-xs-12 col-md-4">     
                <div class="card soft">
                    <a href="t-p-1.html">
                        <img src="./img/throw-pillow-1.jpg" alt="">
                        <h4 class="product-name-small">Mango Planet</h4>
                        <h5 class="product-price-small">$20</h5>
                    </a>
                </div> 
            </div>
        
        
        
            <div class="col-xs-12 col-md-4">     
                <div class="card soft">
                    <a href="t-p-1.html">
                        <img src="./img/throw-pillow-1.jpg" alt="">
                        <h4 class="product-name-small">Mango Planet</h4>
                        <h5 class="product-price-small">$20</h5>
                    </a>
                </div> 
            </div>
        
            <div class="col-xs-12 col-md-4">     
                <div class="card soft">
                    <a href="t-p-1.html">
                        <img src="./img/throw-pillow-1.jpg" alt="">
                        <h4 class="product-name-small">Mango Planet</h4>
                        <h5 class="product-price-small">$20</h5>
                    </a>
                </div> 
            </div>

            <div class="col-xs-12 col-md-4">     
                <div class="card soft">
                    <a href="t-p-1.html">
                        <img src="./img/throw-pillow-1.jpg" alt="">
                        <h4 class="product-name-small">Mango Planet</h4>
                        <h5 class="product-price-small">$20</h5>
                    </a>
                </div> 
            </div>

             <div class="col-xs-12 col-md-4">     
                <div class="card soft">
                    <a href="t-p-1.html">
                        <img src="./img/throw-pillow-1.jpg" alt="">
                        <h4 class="product-name-small">Mango Planet</h4>
                        <h5 class="product-price-small">$20</h5>
                    </a>
                </div> 
            </div>

            <div class="col-xs-12 col-md-4">     
                <div class="card soft">
                    <a href="t-p-1.html">
                        <img src="./img/throw-pillow-1.jpg" alt="">
                        <h4 class="product-name-small">Mango Planet</h4>
                        <h5 class="product-price-small">$20</h5>
                    </a>
                </div> 
            </div>
        </div>
    </div>
<script src="js/slider.js"></script>
<script src="js/accordion.js"></script>
<script src="js/filterbycolor.js"></script>
</body>
</html>