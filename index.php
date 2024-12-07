<?php
$servername = "localhost";
$username = "lamp_user";
$password = "abhishek";
$dbname ="lamp_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname)

// check connection
	if ($conn->connect_error) {
	    die("connection failed: " . $conn->connect_error);
	}
echo "connected successfully to the datebase";
?>
