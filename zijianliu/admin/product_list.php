<?php

include "../lib/php/functions.php";

print_p(getRows(makeConn(),"SELECT * FROM `products`"));
die;