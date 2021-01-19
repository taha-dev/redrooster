<?php
	include "layouts/header.php";
	if (isset($_POST["submit"])) 
	{
		$name = $_POST["name"];
		$price = $_POST["price"];
		$cat = $_POST["cat"];
 		$target_dir = "img/products/".$cat;
 		$filename = $_FILES["imgToUpload"]["name"];
		$target_file = $target_dir . $filename;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		echo "Name: ".$name."<br>";
		echo "Price: ".$price."<br>";
		echo "Category: ".$cat."<br>";
		echo "FileName: ".$filename."<br>";
		echo "Directory: ".$target_dir."<br>";
		echo "path: ".$target_dir."/".$cat."/".$filename."<br>";
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