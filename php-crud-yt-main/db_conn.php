<?php
$servername = "localhost";
$username = "root";
$password = "9579473032";
$dbname = "phpcrud";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
