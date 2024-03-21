<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = $_POST["username"];
    $password = $_POST["password"];
    // You should perform proper validation and sanitation here

    // Query to check if the user exists
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    // Check if the query was successful and if the user exists
    if ($result && $result->num_rows > 0) {
        // Authentication successful
        $_SESSION['username'] = $username;
        header("Location:index.php"); // Redirect to a welcome page or dashboard
    } else {
        // Authentication failed
        // echo '<script>alert("YOU HAVE BEEN LOGOUT FROM");</script>';
    
    }
}

// Close the database connection
$conn->close();
?>
