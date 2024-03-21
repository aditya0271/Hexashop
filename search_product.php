<?php
include ('includes/config.php');
include ('includes/header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Hexashop Ecommerce HTML CSS Template</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>
<body>
    <!-- Your HTML structure for the product items -->
    <div class="container ">
        <div class="row">
            <?php
            // Check if search query is set
            if (isset($_GET['search_query']) && !empty($_GET['search_query'])) {
                $search_query = mysqli_real_escape_string($conn, $_GET['search_query']);
                $sql = "SELECT * FROM product WHERE product_name LIKE '%$search_query%'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
            ?>
                        <div class="col-lg-5 col-md-8 col-sm-8 " >
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.php?id=<?php echo $row['product_id']; ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.php?id=<?php echo $row['product_id']; ?>"><i class="fa fa-star"></i></a></li>
                                            <li><a href="add-to-cart.php?id=<?php echo $row['product_id']; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src=".<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_name']; ?>">
                                <br>
                                </div>
                                <div class="down-content">
                                    <h4><?php echo $row['product_name']; ?></h4>
                                    <span><?php echo $row['product_price']; ?></span>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item"><a href="single-product.php?id=<?php echo $row['product_id']; ?>"><i class="fa fa-eye"></i></a></li>
                                        <li class="list-inline-item"><a href="single-product.php?id=<?php echo $row['product_id']; ?>"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="add-to-cart.php?id=<?php echo $row['product_id']; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                            </div>
                        </div>
            <?php
                    }
                } else {
                    echo "<div class='col-12'>No results found.</div>";
                }
            } else {
                echo "<div class='col-12'>Please enter a search query.</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
