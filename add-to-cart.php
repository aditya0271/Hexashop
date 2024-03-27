<?php
// Start or resume the session
session_start();

// Check if the product ID is provided via GET parameter
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Example: Add the product to the cart (session)
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = []; // Initialize an empty cart if it doesn't exist
    }

    // Add the product ID to the cart array
    $_SESSION['cart'][] = $productId;

    // Redirect back to the previous page or a success page
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
} else {
    // Handle error if no product ID is provided
    echo "Error: Product ID not provided.";
}
?>
