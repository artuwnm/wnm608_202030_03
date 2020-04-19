<?php

// $r current reduce value
// $o current object in the loop
function productListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-xs-12 col-md-4">     
    <div class="card soft">
        <a href="product_item.php?id=$o->id">
            <img src="/img/$o->thumbnail" alt="">
            <h4 class="product-name-small">$o->name</h4>
            <h5 class="product-price-small">&dollar;$o->price</h5>
        </a>
    </div> 
</div>
HTML;
}


function cartListTemplate($r,$o) {
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none product-thumbs">
		<img src="/images/store/$o->thumbnail">
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