<?php
	include "layouts/header.php";
	if (isset($_POST["submit"]))
	{
		$email = $_POST["mail"];
		$sql1 = "SELECT * FROM users WHERE email='$email'";
		$result = $conn->query($sql1);
		if ($result->num_rows == 0)
		{
		$pass = $_POST["pass"];
		$con_pass = $_POST["con-pass"];
		if($pass === $con_pass) 
		{
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$phone = $_POST["phone"];
		$pass = md5($pass);
		$sql = "INSERT INTO users (fname, lname, email, password, phone, role) VALUES ('$fname', '$lname', '$email', '$pass', '$phone', 'user')";
		if ($conn->query($sql) != TRUE) 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		}
		else
		{
			echo "Error!";
		}
		}
		else
		{
			echo "Email Already in use";
		}
	}
?>
	<div class="container">
<div class="signup-card">
	<h1>Create your account</h1>
	<p>Already Registered?<a href="login.php">Login</a></p>
<form method="post">
	<input type="name" name="fname" placeholder="First Name" required="required" maxlength="50"><br>
	<input type="name" name="lname" placeholder="Last Name" required="required" maxlength="50"><br>
	<input type="email" name="mail" placeholder="E-mail" required="required"><br>
	<input type="password" name="pass" placeholder="Password" required="required" minlength="8" maxlength="16"><br>
	<input type="password" name="con-pass" placeholder="Confirm Password" required="required" minlength="8" maxlength="16"><br>
	<input type="phone" name="phone" placeholder="Phone Number" required="required" minlength="11" maxlength="13"><br>
	<input class="signup-btn" type="submit" name="submit" value="SIGNUP">
</form>
</div>
</div>
	<?php
	include "layouts/footer.php";
	?>
