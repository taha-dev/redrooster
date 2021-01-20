<?php
	include "layouts/header.php";
	if (isset($_POST["submit"])) 
	{
		$mail = $_POST["mail"];
		$pass = $_POST["pass"];
		$pass = md5($pass);
		$sql = "SELECT id, email, password, role FROM users WHERE email = '$mail' AND password = '$pass'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
			$_SESSION["email"] = $mail;
			$_SESSION["pass"] = $pass;
			$row = $result->fetch_assoc();
			$_SESSION["role"] = $row["role"];
			$_SESSION["id"] = $row["id"];
			header("location:dashboard.php");
		}
		else
		{
			echo "Wrong input";
		}
	}
?>
	<div class="container">
<div class="login-card">
	<h1>Login with your account</h1>
	<p>Don't have an Account?<a href="signup.php">Create an Account</a></p>
	<p>Enter your e-mail address and password to log in.</p>
<form method="post">
	<input type="email" name="mail" placeholder="E-mail" required="required"><br>
	<input type="password" name="pass" placeholder="Password (8 - 16)" required="required" minlength="8" maxlength="16"><br>
	<input class="login-btn" type="submit" name="submit" value="LOGIN">
</form>
</div>
</div>
	<?php
	include "layouts/footer.php";
	?>