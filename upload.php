<?php
	include "layouts/header.php";
	if ($_SESSION["email"] == "" || $_SESSION["pass"] == "")
	{
		header("location:login.php");
	}
	if ($_SESSION["role"] != "admin") {
		header("location:error.php");
	}
	if (isset($_POST["submit"])) 
	{
		$name = $_POST["name"];
		$price = $_POST["price"];
		$cat = $_POST["cat"];
 		$target_dir = "img/products/".$cat."/";
 		$filename = $_FILES["imgToUpload"]["name"];
		$target_file = $target_dir . $filename;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$path = $target_dir."".$filename;
		$sql = "INSERT INTO products(name, price, img, category) VALUES ('$name', '$price', '$path', '$cat')";
		if(move_uploaded_file($_FILES["imgToUpload"]["tmp_name"], $target_file) && $conn->query($sql) === TRUE)
		{
			echo "uploaded";
		}
		else
		{
			echo "Error";
		}
	}

?>
	<div class="container">
<div class="upload-card">
	<h1>Upload a product</h1>
<form action="" method="post" enctype="multipart/form-data">
	<input type="name" name="name" placeholder="Name" required="required"><br>
	<input type="price" name="price" placeholder="Price" required="required"><br>
	<label for="categories">Category:</label>

<select id="categories" name="cat">
  <option value="shared_meals">SHARED MEALS</option>
  <option value="chicken_combos">CHICKEN COMBOS</option>
  <option value="boxes">BOXES</option>
  <option value="BR&W">BURGERS, ROLLS & WRAPS</option>
  <option value="desserts">DESSERTS</option>
</select>
<br>
	Select image to upload:
    <input class="img-upload" type="file" name="imgToUpload" accept="image/png, image/jpg" required="required"><br>
	<input class="upload-btn" type="submit" name="submit" value="UPLOAD">
</form>
</div>
</div>
	<?php
	include "layouts/footer.php";
	?>