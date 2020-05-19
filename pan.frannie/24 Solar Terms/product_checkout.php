<?php

session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkout-24 SOLAR TERMS</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<div class="container">
		<div class="nav-crumbs form-control" style="margin-top:30px">
			<ul>
				<li><a href="product_cart.php">Back</a></li>
			</ul>
		</div>

		<div  style="margin-top:30px;">
			
				<div class="card">
					<form class="form">
						<h2>Payment Information</h2>
						
                        <div class="grid gap display-flex">
                            
                            <div class="form-control col-xs-12 col-md-6" style="margin-top:20px">
				                <label class="form-label" for="input-example1">First Name</label>
				                <input type="text1" class="form-input"  id="input-example1">
			                </div>

			                <div class="form-control col-xs-12 col-md-6" style="margin-top:20px">
				                <label class="form-label" for="input-example1">Last Name</label>
				                <input type="text1" class="form-input"  id="input-example2">
			                </div>

			            </div>


                            <div class="form-control" style="margin-top:20px">
				                <label class="form-label" for="input-example1">Card Number</label>
				                <input type="text1" class="form-input" placeholder="0000-0000-0000-0000" id="input-example3">
			                </div>



                        <div class="grid gap display-flex">

                            <div class="form-control col-xs-12 col-md-4" style="margin-top:20px">
				                <label class="form-label" for="input-example1">Expiration Month</label>
				                <input type="text1" class="form-input" placeholder="mm" id="input-example4">
			                </div>


                            <div class="form-control col-xs-12 col-md-4" style="margin-top:20px">
				                <label class="form-label" for="input-example1">Expiration Year</label>
				                <input type="text1" class="form-input" placeholder="yy" id="input-example5">
			                </div>


                            <div class="form-control col-xs-12 col-md-4" style="margin-top:20px">
				                <label class="form-label" for="input-example1">CVV</label>
				                <input type="text1" class="form-input" placeholder="000" id="input-example6">
			                </div>

			            </div>



						<div style="margin-top:60px"><h2>Billing Address</h2></div>

						<div class="grid gap display-flex">
                            <div class="form-control col-xs-12 col-md-6" style="margin-top:20px">
				                <label class="form-label" for="input-example1">First Name</label>
				                <input type="text1" class="form-input" id="input-example7">
			                </div>

			                <div class="form-control col-xs-12 col-md-6" style="margin-top:20px">
				                <label class="form-label" for="input-example1">Last Name</label>
				                <input type="text1" class="form-input" id="input-example8">
			                </div>
			            </div>

			            <div class="grid gap display-flex">

			                <div class="form-control col-xs-12 col-md-6" style="margin-top:20px">
				                <label class="form-label" for="input-example1">Email</label>
				                <input type="text1" class="form-input" id="input-example9">
			                </div>

			                <div class="form-control col-xs-12 col-md-6" style="margin-top:20px">
				                <label class="form-label" for="input-example1">Phone</label>
				                <input type="text1" class="form-input" id="input-example9">
			                </div>
			            </div>

			            <div class="form-control" style="margin-top:20px">
				            <label class="form-label" for="input-example1">Street</label>
				            <input type="text1" class="form-input" id="input-example10">
			            </div>


			            <div class="grid gap display-flex">

			                <div class="form-control col-xs-12 col-md-4" style="margin-top:20px">
				                <label class="form-label" for="input-example1">City</label>
				                <input type="text1" class="form-input" id="input-example11">
			                </div>

			                <div class="form-control col-xs-12 col-md-4" style="margin-top:20px">
				                <label class="form-label" for="input-example1">State</label>
				                <input type="text1" class="form-input" id="input-example12">
			                </div>

			                <div class="form-control col-xs-12 col-md-4" style="margin-top:20px">
				                <label class="form-label" for="input-example1">Zip Code</label>
				                <input type="text1" class="form-input" id="input-example13">
			                </div>

			            </div>

					</form>
				</div>
			
			


				
			
		</div>


				<div class="btnstyle" style="display:flex;justify-content:flex-end;">
					<button class="btn first" ><a  href="product_confirmation.php">Confirm Purchase</a></button>
				</div>


	</div>




    <?php include "parts/footer.php" ?>



	
</body>
</html>





