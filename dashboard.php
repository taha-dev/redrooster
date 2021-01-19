<?php
	include "layouts/header.php";
	if ($_SESSION["email"] == "" || $_SESSION["pass"] == "")
	{
		header("location:login.php");
	}
	if (isset($_POST["submit"])) 
	{
		session_destroy();
		header("location:login.php");
	}
?>
	<div class="container">
<h1>DASHBOARD</h1>
<form method="post">
	<input class="logout-btn" type="submit" name="submit" value="LOGOUT">
</form>
</div>

	<?php
	include "layouts/footer.php";
	?>