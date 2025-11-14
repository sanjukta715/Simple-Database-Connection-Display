<?php
$host = "localhost";
$user = "root";     // your MySQL username
$pass = "";         // your MySQL password
$dbname = "experiment1_db";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
