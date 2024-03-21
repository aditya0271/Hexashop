<?php
$servername = "localhost";
$username = "root";
$password = "Admin@123";
$database = "shopping";
//database
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully";

?>