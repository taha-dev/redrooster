<?php
	include "layouts/header.php";
	if (isset($_POST["submit"])) {
		header("location:contact.php");
	}
?>
	<div class="container">
		<h1>ABOUT US</h1>
		<div class="about-p">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
</div>
	<?php
	include "layouts/footer.php";
	?>