<?php
$servername = "localhost";
$username = "root";
$password = "";
$pjname = "database";

//เชื่อมฐานข้อมูล
// Create connection
$conn = mysqli_connect($servername, $username, $password, $pjname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>