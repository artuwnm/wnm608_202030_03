<?php


function homeListTemplate($r,$o) {
	// r is  currently reduced value
	// o  is  current object in the loop
return $r.<<<HTML
<div class="col-xs-6 col-md-2">		
	<a href="product_item.php?id=$o->id" class="display-block">		
		<figure class="thumb-figure">
			<div class="thumb-image">
				<img src="img/$o->thumbnail" alt="">
			</div>
			<figcaption class="product-description">
				<div>$o->name</div>
				<div>&dollar;$o->price</div>
			</figcaption>
		</figure>
	</a>
</div>
HTML;
}


function productListTemplate($r,$o) {
	// r is  currently reduced value
	// o  is  current object in the loop
return $r.<<<HTML
<div class="col-xs-6 col-md-3">		
	<a href="product_item.php?id=$o->id" class="display-block">		
		<figure class="product-figure soft">
			<div class="product-image">
				<img src="img/$o->thumbnail" alt="">
			</div>
			<figcaption class="product-description">
				<div class="product-name">$o->name</div>
				<div class="product-price">&dollar;$o->price</div>
			</figcaption>
		</figure>
	</a>
</div>
HTML;
}


function cartListTemplate($r,$o) {
	// r is  currently reduced value
	// o  is  current object in the loop
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none product-thumbs">
		<img src="img/$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<div class="display-flex">
			<div class="flex-stretch">
				<strong>$o->name</strong>
			</div>
			<div class="flex-none">&dollar;$o->price</div>
		</div>
	</div>
	<div class="flex-none">
		Delete
	</div>
</div>
HTML;
}