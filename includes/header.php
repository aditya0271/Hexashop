<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav nav-bar-dark">
                    <!-- ***** Logo Start ***** -->
                    <div>
                        <a href="index.php" class="logo mt-3">
                            <img src="assets/images/logo.png">
                        </a>
                        <form action="search_product.php" method="get"
                            class="input-group mt-4 rounded col-4 float-right">
                            <input type="search" name="search_query" class="form-control rounded" placeholder="Search"
                                aria-label="Search" aria-describedby="search-addon" />
                            <button class="input-group-text border-0 bg-secondary text-light" id="search-addon"
                                type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>
                    <div>
                    <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="cart.php"><i class="bi bi-cart3"></i> Cart <SUP></SUP></a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                        </ul>
                    </div>
                    <!-- ***** Logo End ***** -->
                    <ul class="nav ">
                        <li class="scroll-to-section"><a href="#top">Home</a></li>
                        <li class="scroll-to-section"><a href="#men">Men's</a></li>
                        <li class="scroll-to-section"><a href="#women">Women's</a></li>
                        <li class="scroll-to-section"><a href="#kids">Kid's</a></li>
                        <li class="submenu">
                            <a href="javascript:;">Pages</a>
                            <ul>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="products.php">Products</a></li>
                                <li><a href="single-product.php">Single Product</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:;">Delivery Brands</a>
                            <ul>
                                <!-- TO FETCH THE DATA FROM THE DATABASE -->
                                <?php
                                $select_brands = "SELECT * FROM `brands`";
                                $result_brands = mysqli_query($conn, $select_brands);

                                // Check if there are rows in the result set
                                if (mysqli_num_rows($result_brands) > 0) {
                                    while ($row_data = mysqli_fetch_assoc($result_brands)) {
                                        $brand_title = $row_data['brand_title'];
                                        $brand_id = $row_data['brand_id'];
                                        echo "<li class='nav-item mt-2'>
                        <a href='index.php?brand=$brand_id' class='navlink text-light'>$brand_title</a>
                      </li>";
                                    }
                                } else {
                                    echo "<li>No brands found</li>";
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:;">Categories</a>
                            <ul>
                                <!-- TO FETCH THE DATA FROM THE DATABASE -->

                                <?php
                                $select_categories = "SELECT * FROM `categories`";
                                $result_categories = mysqli_query($conn, $select_categories);
                                while ($row_data = mysqli_fetch_assoc($result_categories)) {
                                    $category_title = $row_data['category_title'];
                                    $category_id = $row_data['category_id'];
                                    echo "<li class='nav-item mt-2'>
  <a href='index.php?brand=$category_id' class='navlink text-light'>$category_title</a>
</li>";
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="#explore">Explore</a></li>
                    </ul>

                </nav>


            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->


<!-- bootstap  css link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">