<?php
$dbServerName = "localhost:8080";
$dbUserName = "root";
$dbPass = "";
$dbName = "glassesrus";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPass, $dbName);
echo $conn;
?>