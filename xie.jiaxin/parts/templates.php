<?php

// $r current reduce value
// $o current object in the loop
function productListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-xs-12 col-md-3">     
    <div class="card soft">
        <a href="product_item.php?id=$o->id">
            <img src="$o->images" alt="">
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
	<div class="flex-none product-thumbs" style="margin-right:20rpx;">
		<img src="$o->images" width="90" height="90" style="width:90px;height:90px">
	</div>
	<div class="flex-stretch">
		<div class="display-flex">
			<div class="flex-stretch">
				<strong>$o->title</strong>
				<form method="get" action="data/form_actions.php">
					<input type="hidden" name="action" value="delete-cart-item">
					<input type="hidden" name="id" value="$o->id">
					<div class="display-flex">
						<div class="flex-none" style="padding-left: 80%;">
							<input type="submit" class="form-button" value="Remove">
						</div>
					</div>
				</form>
			</div>
			<div class="flex-none">&dollar;$o->price</div>
		</div>
	</div>
</div>
HTML;
}

// week 11

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





function makeCartBadge() {
	if(!isset($_SESSION['cart']) || !count($_SESSION['cart'])) {
		return "";
	} else return "(".array_reduce($_SESSION['cart'],function($r,$o){
		return $r + $o->amount;
	},0).")";
}