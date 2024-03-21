<?php
// Include your database connection or any necessary files here
include('includes/config.php');

// Check if the search query is set and not empty
if (isset($_GET['search_query']) && !empty($_GET['search_query'])) {
    // Sanitize the search query to prevent SQL injection
    $search_query = mysqli_real_escape_string($conn, $_GET['search_query']);

    // Perform the search query
    $sql = "SELECT * FROM product WHERE product_name LIKE '%$search_query%'";
    $result = mysqli_query($conn, $sql);

    // Check if any results were found
    if (mysqli_num_rows($result) > 0) {
        // Display the search results
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>{$row['product_name']}</p>";
            echo "<div>";
            echo "<h3>{$row['product_name']}</h3>";
            echo "<p>Price: {$row['product_price']}</p>";
            echo "<p>product id : {$row['product_id']}</p>";
            // You can display other product information as needed
            echo "</div>";
            // You can display other product information as needed
        }
    } else {
        echo "No results found.";
    }
} else {
    echo "Please enter a search query.";
}
?>

















<?php
// Include your database connection or any necessary files here
include('includes/config.php');

// Check if the search query is set and not empty
if (isset($_GET['search_query']) && !empty($_GET['search_query'])) {
    // Sanitize the search query to prevent SQL injection
    $search_query = mysqli_real_escape_string($conn, $_GET['search_query']);

    // Perform the search query
    $sql = "SELECT * FROM product WHERE product_name LIKE '%$search_query%'";
    $result = mysqli_query($conn, $sql);

    // Check if any results were found
    if (mysqli_num_rows($result) > 0) {
        // Display the search results
        while ($row = mysqli_fetch_assoc($result)) {
?>
          <div class="container">
    <div class="row">
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <img src=".<?php echo $row['product_image']; ?>" class="card-img-top" alt="<?php echo $row['product_name']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                            <p class="card-text"><?php echo $row['product_description']; ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?php echo $row['product_price']; ?></small>
                            <a href="single-product.php?id=<?php echo $row['product_id']; ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo '<div class="col-12"><p class="text-center">No results found.</p></div>';
        }
        ?>
    </div>
</div>

<?php
        }
    } else {
        echo "No results found.";
    }
} else {
    echo "Please enter a search query.";
}
?>
