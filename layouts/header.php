<?php
include "connection.php";
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
		<li><a href="#">Home</a></li>
		<li><a href="#">News</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">About</a></li>
		<li class="dropdown"><i class="fa fa-shopping-cart cart-ic"></i>
			<div class="dropdown-content">
    <div class="cart-items">
    	<img src="img/xs.png">
    	<p> VALUE BUCKET</p>
    </div>
    <hr class="cart-divider">
    <div class="cart-items">
    	<img src="img/xs.png">
    	<p> VALUE BUCKET</p>
    </div>
    <hr class="cart-divider">
    <div class="checkout-btn-cart">
    	<button onclick="gotocheckout()">CHECKOUT</button>
    </div>
  </div>
		</li>
	</ul>
</div>
</div>


