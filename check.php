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