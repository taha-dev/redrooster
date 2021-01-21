<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "redrooster";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
session_start();
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>