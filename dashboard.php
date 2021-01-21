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
	$user = $_SESSION["id"];
?>
	<div class="container">
<h1>DASHBOARD</h1>
<form method="post">
	<input class="logout-btn" type="submit" name="submit" value="LOGOUT">
</form>
</div>
<?php 
$sql1 = "SELECT * FROM orders WHERE user='$user'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
?>
<div class="container">
	<h1>PAST ORDERS</h1>
<table class="dash_table">
	<tr>
		<th>PRODUCT</th>
		<th>NAME</th>
		<th>QTY</th>
		<th>PRICE</th>
		<th>DATE & TIME</th>
	</tr>
<?php
			while($row1 = $result1->fetch_assoc()) {
  	$product = $row1["product"];
  	$sql2 = "SELECT name, img, price FROM products WHERE id='$product'";
  	$result2 = $conn->query($sql2);
  	$row2 = $result2->fetch_assoc();
			?>
				<tr>
					<td><img src="<?php echo $row2['img']?>"></td>
					<td><?php echo $row2["name"]; ?></td>
					<td><?php echo $row1["qty"];?></td>
					<td>PKR <?php echo $row2["price"]*$row1["qty"]; ?></td>
					<td><?php echo $row1["created_at"];?></td>
				</tr>
			
    <?php
}
    ?>
    </table>
</div>
	<?php
}
	include "layouts/footer.php";
	?>