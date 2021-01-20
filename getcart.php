<?php
include "connection.php";
$user = $_SESSION["id"];
$sql = "SELECT * FROM cart WHERE user='$user'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  	$product = $row["product"];
  	$sql1 = "SELECT name, img FROM products WHERE id='$product'";
  	$result1 = $conn->query($sql1);
  	$row1 = $result1->fetch_assoc();
    echo "<div class='cart-items'>";
    echo "<img src='".$row1["img"]."'>";
    echo "<p>&nbsp;".$row1["name"]."</p>";
    echo "</div>";
    echo "<hr class='cart-divider'>";
  }
  echo "<div class='checkout-btn-cart'><button onclick='gotocheckout()'>CHECKOUT</button></div>";
} else {
  echo "<p>&nbsp;No Items in Cart</p>";
}
?>
