<?php
$host = "localhost";
$dbname = "budgetbites";
$username = "root";
$password = "ICS311"; 

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
