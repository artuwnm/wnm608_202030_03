<?php


function productListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=$o->id" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image"><img src="/aau/wnm608_202030_03/xiao.zhe/images/store/$o->thumbnail" alt=""></div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;$o->price</div>
				<div class="product-title">$o->title</div>
			</figcaption>
		</figure>
	</a>
</div>
HTML;
}


function cartListTemplate($r,$o) {
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none product-thumbs">
		<img src="/aau/wnm608_202030_03/xiao.zhe/images/store/$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<div class="display-flex">
			<div class="flex-stretch">
				<strong>$o->title</strong>
				<div>
					Delete
				</div>
			</div>
			<div class="flex-none">&dollar;$o->price</div>
		</div>
	</div>
</div>
HTML;
}