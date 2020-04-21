<?php 

function productListTemplate($r,$o) {
return $r.<<<HTML
<div>$o->price</div>
HTML;
}

function cartListTemplate($r,$o) {
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none product-thumbs">
		<img src="">
	</div>
</div>
}