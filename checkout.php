<?php
	include "layouts/header.php";
?>
	<div class="container">
		<div class="col-6">
			<div class="checkout-card">
				<h1>Checkout</h1>
				<p>Enter the details and submit to checkout</p>
				<form>
					<input type="name" name="fname" placeholder="First Name" required="required"><br>
					<input type="name" name="lname" placeholder="Last Name" required="required"><br>
					<input type="email" name="mail" placeholder="E-mail" required="required"><br>
					<input type="phone" name="phone" placeholder="Phone Number" required="required"><br>
					<input type="address" name="address" placeholder="Address" required="required"><br>
					<input class="checkout-btn" type="submit" name="submit" value="CHECKOUT">
				</form>
			</div>
		</div>
		<div class="col-6">
			<div class="checkout-items">
    	<img src="img/xs.png">
    	<p> VALUE BUCKET</p>
    	<p class="ch_price">PKR 1,250</p>
    </div>
    <hr class="checkout-divider">
    <div class="checkout-items">
    	<img src="img/xs.png">
    	<p> VALUE BUCKET</p>
    	<p class="ch_price">PKR 1,250</p>
    </div>
    <hr class="checkout-divider">
    <h1 class="total">YOUR TOTAL: PKR 2500</h1>
		</div>
</div>
	<?php
	include "layouts/footer.php";
	?>