<?php
$servername = "database-1.cyx4pezrtqce.us-east-1.rds.amazonaws.com";
$dbusername = "main";
$dbpassword = "malek20736798";
$dbname = "project";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
