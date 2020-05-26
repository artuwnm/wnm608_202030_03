<?php
    include_once('lib/php/functions.php');
    include_once('parts/templates.php');
    include('parts/header.php');
?>

<div class="container">
    <div class="grid gap">
        <div class="col-xs-12 col-md-6">
            <div class="card">
             	<h2>Contact Us</h2>
             	<div>+1 415-007-2334</div>
             	<hr>
             	<div>fancyflora@gmail.com</div>
             	<hr>
             	<div>Live Chat</div>
             	<hr>
             	<div>180 Owens St, San Francisco, CA 94102</div>
             	<hr>
             	
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="card">
                <form class="form">
                    <div class="form-control">
                        <label for="contact-name" class="form-label">Name</label>
                        <input type="text" class="form-input" name="contact-name">
                    </div>
                    <div class="form-control">
                        <label for="contact-email" class="form-label">Email</label>
                        <input type="email" class="form-input" name="contact-email">
                    </div>
                    <div class="form-control">
                        <label for="contact-phone" class="form-label">Phone</label>
                        <input type="phone" class="form-input" name="contact-phone">
                    </div>
					<div class="form-control">
						<label class="form-label" for="product-description">Message</label>
						<textarea class="form-input" id="product-description" name="product-description" style="height:10em"></textarea>
					</div>
					
        			<a href="message.php" class="button">Submit</a>
                </form>
            </div>
        </div>
    </div>
 </div>

<?php include('parts/footer.php') ?>
