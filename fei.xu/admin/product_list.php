<?php

include "../lib/php/functions1.php";

print_p(getRows(makeConn(),"SELECT * FROM `products`"));
die;