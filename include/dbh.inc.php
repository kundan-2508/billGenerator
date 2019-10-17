<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "billingrecords";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword);
mysqli_select_db($conn,$dbName);

?>
