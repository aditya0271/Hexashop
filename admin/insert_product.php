<!-- config file -->
<?php
include ('../includes/config.php');

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['insert_product'])) {
    
    // Get form data

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $categories = $_POST['categories'];

    // Accessing image name

    $product_image = '/assets/images/' . $_FILES['product_image']['name'];

    // Accessing image temp name

    $temp_image = $_FILES['product_image']['tmp_name'];

    // Checking the condition

    if ($product_id == '' or $product_name == '' or $product_price == '' or $product_image == '' or $categories == '') {
        echo "<script>alert('Please fill all the available fields')</script>";
    } else {
        move_uploaded_file($temp_image, "./assets/images/$product_image");

        // Insert data into the database
        $sql = "INSERT INTO product (product_id, product_image, product_name, product_price, categories)
                VALUES ('$product_id', '$product_image', '$product_name', '$product_price','$categories')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New record created successfully')</script>";
        } else {
            echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "')</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- csslink -->
    <link rel="stylesheet" href="../style.css">
</head>

<div class="container mt-3">
    <h1 class="text-center">Insert Products</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <!-- ID -->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="product_id" class="form-label">Product Id</label>
            <input type="text" name="product_id" id="product_id" class="form-control" placeholder="Enter product id">
            <br>
        </div>
        <!--Image -->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="product_image" class="form-label">Product Image</label>
            <input type="file" name="product_image" id="product_image" class="form-control" required="required">
        </div>
        <!--Name-->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" name="product_name" id="product_name" class="form-control"
                placeholder="Enter product name">
            <br>
        </div>
        <!-- price -->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" name="product_price" id="product_price" class="form-control"
                placeholder="Enter product price">
            <br>
        </div>
        <!-- Category -->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="category" class="form-label">Category</label>
            <select name="categories" id="categories" class="form-control" placeholder="select categories">
                <option value="m">m</option>
                <option value="w">w</option>
                <option value="k">k</option>
            </select>
            <br>

        <div class="form-outline mb-2 w-50 m-auto">
            <input type="submit" name="insert_product" class="btn btn-info" value="Insert Product">
            </div>

        </div>

    </form>
</div>

</body>

</html>