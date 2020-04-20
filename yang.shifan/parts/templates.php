<?php

function productListTemplate($r, $o) {
return $r.<<<HTML
	<div class="col-4 col-s-4">
		<div class="product-description">
			<a href="product_item.php?id=$o->id">
				<h1>$o->title</h1>
				<p>&dollar;$o->price</p>
				<img src="img/little.jpg">
			</a>
		</div>
	</div>
HTML;
}

?>