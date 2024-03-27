<!DOCTYPE html>
<html lang="en">
<head>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

<title>Hexashop Ecommerce HTML CSS Template</title>


<!-- Additional CSS Files -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

<link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

<link rel="stylesheet" href="assets/css/owl-carousel.css">

<link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
</head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        .item {
            display: inline-block;
            margin: 10px;
        }

        .thumb {
            position: relative;
        }

        .hover-content {
            position: absolute;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 10px;
            display: none;
        }

        .thumb:hover .hover-content {
            display: block;
        }
    </style>
</head>
<body>
    <?php
    // Establish database connection
    $servername = "localhost"; // Change this to your MySQL server
    $username = "root"; // Change this to your MySQL username
    $password = "Admin@123"; // Change this to your MySQL password
    $database = "shopping"; // Change this to your MySQL database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch product data
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            ?>
            <div class="item">
                <div class="thumb">
                    <div class="hover-content">
                        <ul>
                            <li><a href="single-product.php?id=<?php echo $row['product_id']; ?>"><i class="fa fa-eye"></i></a></li>
                            <li><a href="single-product.php?id=<?php echo $row['product_id']; ?>"><i class="fa fa-star"></i></a></li>
                            <li><a href="single-product.php?id=<?php echo $row['product_id']; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <img src="assets/images/<?php echo $row['product_image']; ?>" alt="">
                </div>
                <div class="down-content">
                    <h4><?php echo $row['product_name']; ?></h4>
                    <span>$<?php echo $row['product_price']; ?></span>
                    <ul class="stars">
                        <?php
                        $rating = $row['product_rating']; // Assuming product_rating is a field in your database
                        for ($i = 0; $i < $rating; $i++) {
                            echo '<li><i class="fa fa-star"></i></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <?php
        }
    } else {
        echo "0 results";
    }

    // Close the connection
    $conn->close();
    ?>
</body>
</html>











































<!-- config file -->
<?php
include ('../includes/config.php');

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['insert_product'])) {
    
    // Get form data

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_brand=$_POST['product_brand'];
    $categories = $_POST['categories'];
    $product_description=$_POST['product_description'];
    // Accessing image name

    $product_image = '/assets/images/' . $_FILES['product_image']['name'];
    $product_image1 = '/assets/images/' . $_FILES['product_image1']['name'];
    $product_image2 = '/assets/images/' . $_FILES['product_image2']['name'];
    $product_image3 = '/assets/images/' . $_FILES['product_image3']['name'];

    

    // Accessing image temp name

    $temp_image = $_FILES['product_image']['tmp_name'];
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    // Checking the condition

    if ($product_id == '' or $product_name == '' or $product_price == '' or $product_image == '' or $categories == '') {
        echo "<script>alert('Please fill all the available fields')</script>";
    } else {
        move_uploaded_file($temp_image, "./assets/images/$product_image");
        move_uploaded_file($temp_image1, "./assets/images/$product_image1");
        move_uploaded_file($temp_image2, "./assets/images/$product_image2");
        move_uploaded_file($temp_image3, "./assets/images/$product_image3");

        // Insert data into the database
        $sql = "INSERT INTO product (product_id, product_name, product_price, product_image,product_brand, categories,product_description)
                VALUES ('$product_id','$product_name','$product_price','$product_brand' '$product_image', '$categories','$product_description')";

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

<div class="container mt-3 text-align-center">
    <h1 class="text-center">Insert Products</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <form action="insert_product.php" method="POST" enctype="multipart/form-data">

    <label for="product_id">Product Id:</label>
    <input type="number" id="product_id" name="product_id" required><br><br>

    <label for="product_name">Product Name:</label>
    <input type="text" id="product_name" name="product_name" required><br><br>

    <label for="product_brand">Product Brand:</label>
    <input type="text" id="product_brand" name="product_brand" required><br><br>

    <label for="product_price">Product Price:</label>
    <input type="text" id="product_price" name="product_price" required><br><br>

    <label for="product_description">Product Description:</label><br>
    <textarea id="product_description" name="product_description" rows="4" cols="50" required></textarea><br><br>

    <label for="product_image">Product Image:</label>
    <input type="file" id="product_image" name="product_image" accept="image/*" required><br><br>

    <label for="product_image1">Product Image 1:</label>
    <input type="file" id="product_image1" name="product_image1" accept="image/*"><br><br>

    <label for="product_image2">Product Image 2:</label>
    <input type="file" id="product_image2" name="product_image2" accept="image/*"><br><br>

    <label for="product_image3">Product Image 3:</label>
    <input type="file" id="product_image3" name="product_image3" accept="image/*"><br><br>
    

    <div class="form-outline mb-2 w-50 m-auto">
            <label for="category" class="form-label">Category</label>
            <select name="categories" id="categories" class="form-control" placeholder="select categories">
                <option value="m">m</option>
                <option value="w">w</option>
                <option value="k">k</option>
            </select>
            <br>

    <input type="submit" value="Add Product">
</form>

    </form>
</div>

</body>

</html>