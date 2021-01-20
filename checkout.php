<?php
	include "layouts/header.php";
	$total = 0;
$user = $_SESSION["id"];
if (isset($_GET["id"]) && isset($_GET["act"])) {
	$id = $_GET["id"];
	$act = strval($_GET["act"]);
	$sql = "SELECT qty FROM cart WHERE id='$id'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$qty = $row["qty"];
	if ($act === 'sub') {
		if ($qty > 1) 
		{
			$qty--;
			$sql1 = "UPDATE cart SET qty='$qty' WHERE id='$id'";
			$conn->query($sql1);
			header("location:checkout.php");
		}
	}
	else if($act === 'add')
	{
		$qty++;
		$sql2 = "UPDATE cart SET qty='$qty' WHERE id='$id'";
		$conn->query($sql2);
		header("location:checkout.php");
	}
	else
	{
		$sql3 = "DELETE FROM cart WHERE id='$id'";
		$conn->query($sql3);
		header("location:checkout.php");
	}
}
if(isset($_POST["submit"]))
{
	$sql2 = "SELECT product, qty FROM cart WHERE user='$user'";
	$result2 = $conn->query($sql2);
	while($row2 = $result2->fetch_assoc()) {
		$product = $row2["product"];
		$qty = $row2["qty"];
	$sql3 = "INSERT INTO orders (user, product, qty) VALUES ('$user', '$product', '$qty')";
	$conn->query($sql3);
}
$sql4 = "DELETE FROM cart WHERE user='$user'";
$conn->query($sql4);
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mail = $_POST["mail"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$sql5 = "INSERT INTO order_details (user, fname, lname, email, phone, address) VALUES ('$user', '$fname', '$lname', '$mail', '$phone', '$address')";
$conn->query($sql5);
}
$sql = "SELECT * FROM cart WHERE user='$user'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
?>
	<div class="container">
		<div class="col-6">
			<div class="checkout-card">
				<h1>Checkout</h1>
				<p>Enter the details and submit to checkout</p>
				<form method="post">
					<input type="name" name="fname" placeholder="First Name" required="required" maxlength="50"><br>
					<input type="name" name="lname" placeholder="Last Name" required="required" maxlength="50"><br>
					<input type="email" name="mail" placeholder="E-mail" required="required"><br>
					<input type="number" name="phone" placeholder="Phone Number" required="required" minlength="11" maxlength="13"><br>
					<input type="address" name="address" placeholder="Address" required="required"><br>
					<input class="checkout-btn" type="submit" name="submit" value="CHECKOUT">
				</form>
			</div>
		</div>
		<div class="col-6">
			<?php
			while($row = $result->fetch_assoc()) {
  	$product = $row["product"];
  	$sql1 = "SELECT name, img, price FROM products WHERE id='$product'";
  	$result1 = $conn->query($sql1);
  	$row1 = $result1->fetch_assoc();
			?>
			<div class="checkout-items">
    	<img src="<?php echo $row1['img']?>">
    	<p> <?php echo $row1["name"]; ?> x <?php echo $row["qty"];?></p>
    	<p class="ch_price">PKR <?php echo $row1["price"]*$row["qty"]; ?></p>
    	<p class="act-btns"><span><a href="checkout.php?id=<?php echo  $row['id']?>&act=add">+</a></span><span><a href="checkout.php?id=<?php echo  $row['id']?>&act=sub">-</a></span><span><a href="checkout.php?id=<?php echo $row['id']?>&act=x">x</a></span></p>
    </div>
    <hr class="checkout-divider">
    <?php
    $total += $row1["price"]*$row["qty"];
      }
    ?>
    <h1 class="total">YOUR TOTAL: PKR <?php echo $total; ?></h1>
</div>
<?php
      }
      else
      {
    ?>
<div class="container">
	<h1>NO ITEMS IN THE CART!</h1>
</div>
	<?php
}
	include "layouts/footer.php";
	?>