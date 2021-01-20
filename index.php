	<?php
	include "layouts/header.php";
	if ($_SESSION["email"] == "" || $_SESSION["pass"] == "")
	{
		header("location:login.php");
	}
		$user_id = $_SESSION["id"];
	if (isset($_GET["id"]))
	{
		$id = $_GET["id"];
		$sql1 = "SELECT * FROM cart WHERE product='$id'";
		$result1 = $conn->query($sql1);
		if ($result1->num_rows == 0) {
			$sql2 = "INSERT INTO cart (product, qty, user) VALUES ('$id', '1', '$user_id')";
			$conn->query($sql2);
			header("location:index.php");
		}
		else
		{
			$row1 = $result1->fetch_assoc();
			$qty = intval($row1["qty"]);
			$qty++;
			$sql3 = "UPDATE cart SET qty='$qty' WHERE product='$id'";
			$conn->query($sql3);
			header("location:index.php");
		}
	}
	$categories = array("shared_meals", "chicken_combos", "boxes", "BR&W", "desserts");
	?>
<div class="container">
	<?php
	for ($i=0; $i < 5; $i++) { 
	if ($i == 0) {
		echo "<h1>SHARED MEALS</h1>";
	}
	elseif ($i == 1) {
		echo "<h1>CHICKEN COMBOS</h1>";
	}
	elseif ($i == 2)
	{
		echo "<h1>BOXES</h1>";
	}
	elseif($i == 3)
	{
		echo "<h1>BURGERS, ROLLS & WRAPS</h1>";
	}
	elseif($i == 4)
	{
		echo "<h1>DESSERTS</h1>";
	}
	$sql = "SELECT * FROM products WHERE category='$categories[$i]'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
	?>
	<div class="card">
		<div class="card-content">
			<div class="col">
		<img src="<?php echo $row['img']?>">
		<h2><?php echo $row["name"]; ?></h2>
		<!-- <p>9 Pcs Hot & Crispy Chicken</p> -->
		<p class="price">PKR <?php echo $row["price"]; ?></p>
		<a href="index.php?id=<?php echo $row['id']?>"><button class="cart-btn">ADD TO BUCKET</button></a>
		</div>
		</div>
	</div>
	<?php
	}
}
}
	?>
</div>
<?php
include "layouts/footer.php";
?>
