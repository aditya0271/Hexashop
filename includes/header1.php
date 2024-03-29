<head>

    <!-- Google Web Fonts -->
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

<body>


    <!-- Navbar start -->
    <div class="container-fluid fixed-top">
        <div class="container topbar bg-dark d-none d-lg-block">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#"
                            class="text-white">123 Street, New York</a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#"
                            class="text-white"> hexashop.com</a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                    <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                    <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
                </div>
            </div>
        </div>
        <?php ?>
        <div class="container px-0">
            <nav class="navbar navbar-light bg-secondary navbar-expand-xl ">
                <a href="index.html" class="navbar-brand">
                    <h1 class="text-light display-6">HEXASHOP</h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse ">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white shadow-lg" id="navbarCollapse">
                    <div class="navbar-nav mx-auto shadow-lg">
                        <a href="#top" class="nav-item nav-link active">Home</a>
                        <a href="#men" class="nav-item nav-link">Men's</a>
                        <a href="#women" class="nav-item nav-link">Women's</a>
                        <a href="#kids" class="nav-item nav-link">Kid's</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-2 bg-secondary rounded-0">
                                <a href="cart.html" class="dropdown-item">About Us</a>
                                <a href="chackout.html" class="dropdown-item">Products</a>
                                <a href="testimonial.html" class="dropdown-item">Single Products</a>
                                <a href="404.html" class="dropdown-item">Contact Us</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Categories</a>
                    </div>

                    <div class="d-flex align-items-center justify-content-end my-3">
                        <form action="search_product.php" method="GET" class="d-flex my-4">
                            <input class="form-control me-2 shadow-lg" type="search" name="search_query"
                                placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-dark" id="search-addon" type="submit">Search</button>
                        </form>
                        <a href="cart.php" class="position-relative my-1 text-dark">
                            <i class="fa fa-shopping-bag fa-2x mx-2"></i>
                            <span
                                class="position-absolute bg-secondary bg-outline-dark rounded-circle d-flex align-items-center justify-content-center text-dark px-"
                                style="top: -5px; left: 20px; height: 20px; min-width: 20px;">
                                <sup>4
        
                                </sup>
                            </span>
                        </a>
                        <a href="#" class="me-4 text-dark">
                            <i class="fas fa-user fa-2x mx-2 "></i>
                        </a>
                    </div>

                </div>
        </div>
        </nav>
    </div>
    </div>
    <!-- Navbar End -->




    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>