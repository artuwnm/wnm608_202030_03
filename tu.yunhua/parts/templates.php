<?php


function productListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-md-4 text-center animate-box">
<div class="product">
	<a href="product_item.php?id=$o->id" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image"><img src="images/store/$o->thumbnail" alt=""></div>
			<figcaption class="product-description">
				<div class="desc">
					<h3><a href="">
						<div class="product-name">$o->name</div>
					</a></h3>
						<div class="product-price">&dollar;$o->price</div>
				</div>
			</div>
			</figcaption>
		</figure>
	</a>
</div>


HTML;
}



function cartListTemplate($r,$o) {
$pricefixed = number_format($o->total, 2, '.', '');
$selectamount = selectAmount($o->amount,10);
return $r.<<<HTML
<div class="display-flex card-section">
	<div class="flex-none product-thumbs">
		<img src="/images/store/$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<div class="display-flex">
			<div class="flex-stretch">
				<strong>$o->title ($o->amount)</strong>
			</div>
			<div class="flex-none">&dollar;$pricefixed</div>
		</div>
		<div>
			<form method="get" action="data/form_actions.php" onchange="this.submit()">
				<input type="hidden" name="action" value="update-cart-amount">
				<input type="hidden" name="id" value="$o->id">
				<span>$selectamount</span>
			</form>
		</div>
	</div>
</div>
HTML;
}





function selectAmount($amount=1,$total=10) {
	$output = "<select class='form-input'>";
	for($i=1;$i<=$total;$i++){
		$output .= "<option ".($i==$amount?"selected":"").">$i</option>";
	}
	$output .= "</select>";
	return $output;
}





function cartTotals() {
$cart = getCart();

$cartprice = array_reduce($cart,function($r,$o){return $r + ($o->amount*$o->price);},0);


$pricefixed = number_format($cartprice, 2, '.', '');
$taxfixed = number_format($cartprice*0.0725, 2, '.', '');
$taxedfixed = number_format($cartprice*1.0725, 2, '.', '');


return <<<HTML
<div class="card-section">
	<div class="display-flex">
		<div class="flex-stretch">
			<strong>Sub-Total</strong>
		</div>
		<div class="flex-none">&dollar;$pricefixed</div>
	</div>
	<div class="display-flex">
		<div class="flex-stretch">
			<strong>Taxes</strong>
		</div>
		<div class="flex-none">&dollar;$taxfixed</div>
	</div>
</div>
<div class="card-section">
	<div class="display-flex">
		<div class="flex-stretch">
			<strong>Total</strong>
		</div>
		<div class="flex-none">&dollar;$taxedfixed</div>
	</div>
</div>
HTML;
}