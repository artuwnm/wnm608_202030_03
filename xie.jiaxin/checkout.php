<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cartItems = getCartItems();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Store: Payment</title>

    <?php include "parts/meta.php" ?>
</head>
<body>

<?php include "parts/navbar.php" ?>

<div class="container">

    <div class="col-xs-12 col-md-6" style="width:50%;float:left;">
        <div style="padding-bottom:20px;padding-top:20px;">Cart > Information > Shipping > Payment</div>



        <div style="overflow:hidden;">
            <div>
                <a href="index.php">
                    <img src="img/logo.png" alt="" style="width: 12%;">
                </a>
            </div>
            <div>
                <div style="padding-bottom:10px"><input type="text" placeholder="First Name" name="fname" style="width:45%;height:34px;border:1px solid #eee;"/><input placeholder="Last Name"  type="text" name="lname" style="width:45%;height:34px;border:1px solid #eee;"/></div>
                <div style="padding-bottom:10px"><input type="text" placeholder="Address"  name="address" style="width:90%;height:34px;border:1px solid #eee;"/></div>
                <div style="padding-bottom:10px"><input type="text" placeholder="Email"  name="email" style="width:45%;height:34px;border:1px solid #eee;"/><input placeholder="Phone Number" maxlength="11" type="text" name="phone" style="width:45%;height:34px;border:1px solid #eee;"/></div>
            </div>
            <input type="hidden" name="action" value="addpay">

        </div>


        <div>
            <div>Pay Method</div>
            <div>
                <div style="padding-bottom:15px;overflow:hidden;"><input type="radio" name="type" value="1" checked/> Creditcard
                <input type="radio" name="type" value="2" /> Paypal
                <input type="radio" name="type" value="3" /> Apple Pay
                </div>
                <div>
                    <div style="padding-bottom:10px"><input placeholder="Card Number"   type="text" name="cardnum" style="width:90%;height:34px;border:1px solid #eee;"/></div>
                    <div style="padding-bottom:10px"><input  placeholder="Card On Name" type="text" name="cardname" style="width:90%;height:34px;border:1px solid #eee;"/></div>

                    <div style="padding-bottom:10px"><input placeholder="Expriation date (MM/YY)" type="text" name="edate" style="width:45%;height:34px;border:1px solid #eee;"/><input placeholder="Security code" type="text" name="scode" style="width:45%;height:34px;border:1px solid #eee;"/></div>

                </div>
            </div>
        </div>

        <a class="large-button" href="product_pay.php">Pay Now</a>
    </div>

    <div class="col-xs-12 col-md-6" style="float:right;width:50%;padding-top:120px;">

<?php
function cartTotals2() {
    $cart = getCart();

    $cartprice = array_reduce($cart,function($r,$o){return $r + ($o->amount*$o->price);},0);


    $pricefixed = number_format($cartprice, 2, '.', '');
    $taxfixed = number_format($cartprice*0.0725, 2, '.', '');
    $taxedfixed = number_format($cartprice*1.0725, 2, '.', '');


    return <<<HTML
<div class="card-section">
	<div class="display-flex">
		<div class="flex-stretch">
			<div>Sub-Total</div>
		</div>
		<div class="flex-none">&dollar;$pricefixed</div>
	</div>
	<div class="display-flex">
		<div class="flex-stretch">
			<div>Taxes</div>
		</div>
		<div class="flex-none">&dollar;$taxfixed</div>
	</div>
</div>
<div class="card-section">
	<div class="display-flex">
		<div class="flex-stretch">
			<div>Total</div>
		</div>
		<div class="flex-none">&dollar;$taxedfixed</div>
	</div>
</div>
HTML;
}

function cartList2($r,$o) {
    return $r.<<<HTML
         <div style="heighit:100px;margin-bottom:20px;width:100%;overflow:hidden;">
            <div style="float:left;"><img src="$o->images" width="90" height="90" style="width:90px;height:90px"></div>
            <div style="float:left;padding-left:5%;"><div>$o->name</div><div> nums：$o->amount</div></div>
           <div style="float:right;">&dollar;$o->price</div>
       </div>
HTML;
}

echo array_reduce($cartItems,'cartList2');

?>
        <?= cartTotals2() ?>

    </div>


</div>


</body>
</html>