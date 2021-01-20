<?php
include "connection.php";
$num = 0;
function cartbadge($conn) {
    if (session_status() != PHP_SESSION_NONE) {
 $uid = $_SESSION["id"];
$sql = "SELECT COUNT(id) AS NumberOfProducts FROM cart WHERE user='$uid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$num = $row["NumberOfProducts"]; 
return $num;
    }
    return 0;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="navbar">
<div class="nav-brand">
	<img src="img/icons/redrooster.png">
</div>
<div class="nav-btn">
<button class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></button>
</div>
<div class="nav-menu" id="mynav-menu">
	<ul>
		<li><a href="#">About Us</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="index.php">Home</a></li>
		<li class="dropdown"><i class="fa fa-shopping-cart cart-ic" onmouseover="getcart()"></i><sup><?php echo cartbadge($conn);?></sup>
			<div class="dropdown-content" id="dropdown-content">
  </div>
		</li>
	</ul>
</div>
</div>


