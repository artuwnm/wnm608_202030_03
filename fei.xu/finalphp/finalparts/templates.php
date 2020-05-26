<?php


function productListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-xs-6 col-md-4">
	<a href=product_item.php?id=$o->id" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image"><img src="img/store/$o->thumbnail" alt=""></div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;$o->price</div>
				<div class="product-name">$o->name</div>
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
		<img src="img/store/$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<div class="display-flex">
			<div class="flex-stretch">
				$o->name ($o->amount)
				</div>
				<div class="flex-none">&dollar;$pricefixed</div>
			</div>
			<div class="display-flex">
			<div class="flex-stretch" style="font-size:0.8em">
			<form method="get" action="../data/form_actions.php">
					<input type="hidden" name="action" value="delete-cart-item">
					<input type="hidden" name="id" value="$o->id">
					<div class="display-flex"><div class="flex-none">
						<input type="submit" class="form-button2" value="Remove">
					</div></div>
				</form>
			</div>
			<div class="amount">
				<form method="get" action="../data/form_actions.php" onchange="this.submit()">
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
	$output = "<select class='form-input1' name='amount'>";
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
<h5> Order summary</h5>
	<div class="display-flex">
		<div class="flex-stretch">
			Subtotal
		</div>
		<div class="flex-none">&dollar;$pricefixed</div>
	</div>
	<br>
	<div class="display-flex">
		<div class="flex-stretch">
			Taxes
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

function recommendedProducts($rows) {
$products = array_reduce($rows,'productListTemplate');
echo <<<HTML
<div class="grid gap productlist">$products</div>
HTML;
}
function recommendedCategory($cat,$limit=3) {
	$rows = getRows(makeConn(),"SELECT * FROM `products` WHERE category='$cat' ORDER BY `date_create` DESC LIMIT $limit");
	recommendedProducts($rows);
}
function recommendedSimilar($cat,$id=0,$limit=3) {
	$rows = getRows(makeConn(),"SELECT * FROM `products` WHERE category='$cat' AND id <> $id ORDER BY rand() LIMIT $limit");
	recommendedProducts($rows);
}