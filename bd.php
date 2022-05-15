<?php
$servername = "remotemysql.com";
$database = "V9T6OTCIlR";
$username = "V9T6OTCIlR";
$password = "NXAe76BUbh";
// Create connection
try {
  $conn = mysqli_connect($servername, $username, $password, $database);
//  echo "BIEN NELLY";
} catch (\Exception $e) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
