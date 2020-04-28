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
						<span><div class="product-price">&dollar;5.00</div></span>
						<!-- 5.00 改成 <?= $o->price ?> -->
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
	<div class="flex-none product-thumbs" style="margin-right:1em">
		<img src="images/store/$o->thumbnail">
	</div>
	<div class="flex-stretch cart">
		<div class="display-flex">
			<div class="flex-stretch">
				<strong>$o->name</strong>
			</div>
			<div class="flex-none2">&dollar;$pricefixed</div>
		</div>
		<div class="display-flex">
			<div class="flex-stretch" style="font-size:0.8em">
				<form method="get" action="./data/form_actions.php">
					<input type="hidden" name="action" value="delete-cart-item">
					<input type="hidden" name="id" value="$o->id">
					<div class="display-flex"><div class="flex-none">
						<input type="submit" class="form-button delete" value="delete">
					</div></div>
				</form>
			</div>
			<div class="form-input2">
				<form method="get" action="./data/form_actions.php" onchange="this.submit()">
					<input type="hidden" name="action" value="update-cart-amount">
					<input type="hidden" name="id" value="$o->id">
					<div class="display-flex"><div class="flex-none">$selectamount</div></div>
				</form>
			</div>
		</div>
	</div>
</div>
HTML;
}


function selectAmount($amount=1,$total=10) {
	$output = "<select class='form-input' name='amount'>";
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
$taxfixed = number_format($cartprice*0.0, 2, '.', '');
$taxedfixed = number_format($cartprice*1, 2, '.', '');



return <<<HTML
<div class="card-section">
	<div class="display-flex">
		<div class="flex-stretch cart">
			<strong>Subtotal</strong>
		</div>
		<div class="flex-none">&dollar;$pricefixed</div>
	</div>
	<div class="display-flex">
		<div class="flex-stretch cart">
			<strong>Tax</strong>
		</div>
		<div class="flex-none">&dollar;0.00</div>
	</div>
	<div class="display-flex">
		<div class="flex-stretch cart">
			<strong>Shipping</strong>
		</div>
		<div class="flex-none">&dollar;0.00</div>
	</div>
</div>

<div class="card-section">
	<div class="display-flex total">
		<div class="flex-stretch cart">
			<span><strong>Total</strong></span>
		</div>
		<span><strong>
			<div class="flex-none">&dollar;$taxedfixed</div>
		</strong></span>
	</div>
</div>
HTML;
}





function makeCartBadge() {
	if(!isset($_SESSION['cart']) || !count($_SESSION['cart'])) {
		return "";
	} else return "(".array_reduce($_SESSION['cart'],function($r,$o){
		return $r + $o->amount;
	},0).")";
}