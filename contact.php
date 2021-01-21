<?php
	include "layouts/header.php";
	if (isset($_POST["submit"])) {
		header("location:contact.php");
	}
?>
	<div class="container">
<div class="contact-card">
	<h1>Contact Us</h1>
	<p>Please fill this form to contact us</p>
<form method="post">
	<input type="name" name="name" placeholder="Full Name" required="required"><br>
	<input type="subject" name="sub" placeholder="Subject" required="required"><br>
	<input type="email" name="mail" placeholder="E-mail" required="required"><br>
	<textarea rows="5" name="msg" placeholder="Enter Your Message Here!" required="required"></textarea><br>
	<input class="contact-btn" type="submit" name="submit" value="SEND MESSAGE">
</form>
</div>
</div>
	<?php
	include "layouts/footer.php";
	?>