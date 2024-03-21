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
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Hexashop - Product Detail Page</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <!-- <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Single Product Page</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Product Area Starts ***** -->
    <?php
    // Check if product ID is provided in the URL
    if (isset ($_GET['id']) && !empty ($_GET['id'])) {
        $product_id = mysqli_real_escape_string($conn, $_GET['id']);

        // Fetch product details from the database based on the product ID
        $sql = "SELECT * FROM products WHERE product_id = '$product_id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $product = mysqli_fetch_assoc($result);
            ?>
            <!-- HTML structure to display product details -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src=".<?php echo $product['product_image']; ?>" alt=".<?php echo $product['product_name']; ?>">
                    </div>
                    <div class="col-lg-6">
                        <h2>
                            <?php echo $product['product_name']; ?>
                            <br>
                        </h2>
                        <h5>
                            <?php echo $product['product_description']; ?>
                        </h5>
                        <h3>RS.
                            <?php echo $product['product_price']; ?>
                        </h3>
                        <span><p>inclusive of all taxes</p></span><br>
                        <br>
                        <a href="#" class="btn btn-primary"><i class="bi bi-cart-fill"></i> Add to Cart</a>
                        <a href="#" class="btn btn-secondary"><i class="bi bi-heart-fill"></i> Wishlist <br></a>
                        <h6>
                            <strong> <br>DELIVERY OPTIONS <i class="bi bi-truck"></i></strong>
                        </h6>
                        
                        <ul>
                            <li><p>Availability 100% Original Products</p></li>
                            <li><p>Pay on delivery might be available</p></li>
                            <li><p>Easy 14 days returns and exchanges</p></li>
                            <li><p>Try & Buy might be available</p></li></p>
                        </ul>
                        <!-- Additional product details can be displayed here -->
                    </div>
                </div>
            </div>
            <?php
        } else {
            echo "Product not found.";
        }
    } else {
        echo "Product ID not provided.";
    }
    ?>

    <!-- Footer Area -->
    <?php
    include ('includes/footer.php');
    ?>
    <!-- Footer Area ends -->


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/quantity.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function () {
            var selectedClass = "";
            $("p").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function () {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });

    </script>

</body>

</html>