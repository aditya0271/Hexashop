<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content='IE=edge' http-equiv=X-UA-Compatible>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MS Admin Panel</title>
    <link rel="shortcut icon" type="image/png" href="#">

    <!-- Core Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-slider.css">

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="overlay-background"></div>
    <!-- ########## START: Setting Box ########## -->
    <div class="theme-setting-wrapper">
        <button type="button" id="settings-trigger" class="btn btn-primary waves-effect waves-primary">
            <i class="la la-cog"></i>
        </button>
        <div class="theme-setting-sidebar">
            <div class="h-100">
                <div class="mt-4 d-flex align-items-center flex-wrap px-4">
                    <h4 class="font-weight-bold">THEME CUSTOMIZER</h4>
                    <small>Customize &amp; Preview in Real Time</small>
                </div>
                <hr>
                <div class="theme-setting-sidebar-scroll">
                    <div class="px-4">
                        <div>
                            <h5 class="mb-2">Dark Mode</h5>
                            <div class="d-flex align-items-center">
                                <div class="radio theme-radio mr-4">
                                    <input type="radio" id="light" name="light" value="theme-light">
                                    <label for="light">Light</label>
                                </div>
                                <div class="radio theme-radio mr-4">
                                    <input type="radio" id="dark" name="light" value="theme-dark">
                                    <label for="dark">Dark</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div></div>
    <!-- ########## END: Setting Box ########## -->

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-sideleft">
        <a id="remove-menu" class="la la-close d-xl-none"></a>
        <div class="br-logo d-flex justify-content-center align-items-center">
            <a href="index.php"><img src="assets/image/logo.png" alt="MS Admin Panel" width="80" /></a>
        </div>
        <ul class="custom-scroll">
            <li class="active"><a href="index.php" class="waves-effect waves-primary"><i
                        class="la la-dashboard"></i>Dashboard</a></li>
            <li><a href="elements.html" class="waves-effect waves-primary"><i class="la la-clone"></i>Elements</a></li>
            <!-- <li><a href="javascript:;" class="waves-effect waves-primary"><i
                        class="la la-bullhorn"></i>Campaign</a></li> -->
            <li class="dropdown-sub-menu">
                <a href="javascript:;" class="waves-effect waves-primary"><i class="la la-users"></i>Customers</a>
                <!-- <ul class="sub-menu">
                        <li><a href="javascript:;"><i class="la la-users"></i>New Customers</a></li>
                        <li><a href="javascript:;"><i class="la la-users"></i>Old Customers</a></li>
                    </ul> -->
            </li>
            <li><a href="javascript:;" class="waves-effect waves-primary"><i
                        class="la la-cart-arrow-down"></i>Orders</a></li>
            <li><a href="javascript:;" class="waves-effect waves-primary"><i class="la la-wechat"></i>Messages</a></li>
            <li><a href="javascript:;" class="waves-effect waves-primary"><i class="la la-bank"></i>Payments</a>
            </li>
            <li><a href="javascript:;" class="waves-effect waves-primary"><i class="la la-image"></i>Media
                    Manager</a></li>
            <li><a href="javascript:;" class="waves-effect waves-primary"><i class="la la-cog"></i>Settings</a>
            </li>
        </ul>
    </div>
    <!-- ########## END: LEFT PANEL ########## -->

    <header class="header fixed-top d-flex align-items-center">
        <!-- ########## START: HEAD PANEL ########## -->
        <div class="br-header d-flex w-100">
            <a id="add-menu" class="la la-navicon d-flex d-xl-none align-items-center justify-content-center"></a>
            <div class="br-header-left">
                <a href="javascript:;" class="searchbar-toggle la la-search d-flex d-md-none"></a>
                <form class="searchbar d-flex align-items-center pl-3">
                    <i class="la la-search"></i>
                    <input class="form-control border-0 pl-2" type="search" placeholder="Search...">
                </form>
            </div>
            <!-- br-header-left -->
            <div class="br-header-right ml-auto">
                <nav class="nav">
                    <div class="dropdown">
                        <a href="" class="nav-link position-relative dropdown-toggle waves-effect waves-primary"
                            id="dropdownMSG" data-toggle="dropdown">
                            <i class="la la-envelope-o"></i>
                            <span class="badge badge-accent">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-header py-0" aria-labelledby="dropdownMSG">
                            <div class="dropdown-menu-label">
                                <label class="mb-0">Messages</label>
                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-primary">View
                                    all</button>
                            </div>
                            <!-- d-flex -->
                            <div class="dropdown-divider my-0"></div>
                            <div class="media-list">
                                <!-- loop starts here -->
                                <a href="" class="media-list-link">
                                    <div class="media d-flex align-items-center py-2 px-2">
                                        <img src="assets/image/img1.jpg" width="50" class="rounded-circle" alt="">
                                        <div class="media-body pl-3">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <strong>Donna Seay</strong>
                                                <span>2 minutes ago</span>
                                            </div>
                                            <!-- d-flex -->
                                            <p class="mb-0">A wonderful serenity has taken possession of my entire soul,
                                                like these sweet mornings of spring.</p>
                                        </div>
                                    </div>
                                    <!-- media -->
                                </a>
                                <!-- loop ends here -->
                                <!-- loop starts here -->
                                <a href="" class="media-list-link">
                                    <div class="media d-flex align-items-center py-2 px-2">
                                        <img src="assets/image/img1.jpg" width="50" class="rounded-circle" alt="">
                                        <div class="media-body pl-3">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <strong>Donna Seay</strong>
                                                <span>2 minutes ago</span>
                                            </div>
                                            <!-- d-flex -->
                                            <p class="mb-0">A wonderful serenity has taken possession of my entire soul,
                                                like these sweet mornings of spring.</p>
                                        </div>
                                    </div>
                                    <!-- media -->
                                </a>
                                <!-- loop ends here -->
                                <!-- loop starts here -->
                                <a href="" class="media-list-link">
                                    <div class="media d-flex align-items-center py-2 px-2">
                                        <img src="assets/image/img1.jpg" width="50" class="rounded-circle" alt="">
                                        <div class="media-body pl-3">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <strong>Donna Seay</strong>
                                                <span>2 minutes ago</span>
                                            </div>
                                            <!-- d-flex -->
                                            <p class="mb-0">A wonderful serenity has taken possession of my entire soul,
                                                like these sweet mornings of spring.</p>
                                        </div>
                                    </div>
                                    <!-- media -->
                                </a>
                                <!-- loop ends here -->
                            </div>
                            <!-- media-list -->
                        </div>
                        <!-- dropdown-menu -->
                    </div>
                    <!-- dropdown -->
                    <div class="dropdown">
                        <a href="" class="nav-link position-relative dropdown-toggle waves-effect waves-primary"
                            id="dropdownNOTY" data-toggle="dropdown">
                            <i class="la la-bell"></i>
                            <span class="badge badge-accent ">1</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-header py-0" aria-labelledby="dropdownNOTY">
                            <div class="dropdown-menu-label">
                                <label class="mb-0">NOTIFICATIONS </label>
                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">View
                                    all</button>
                            </div>
                            <!-- d-flex -->
                            <div class="dropdown-divider my-0"></div>
                            <div class="media-list">
                                <!-- loop starts here -->
                                <a href="" class="media-list-link">
                                    <div class="media d-flex align-items-center py-2 px-2">
                                        <img src="assets/image/img1.jpg" width="50" class="rounded-circle" alt="">
                                        <div class="media-body pl-3">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <strong>Donna Seay</strong>
                                            </div>
                                            <!-- d-flex -->
                                            <p class="mb-0">A wonderful serenity has taken possession of </p>
                                        </div>
                                    </div>
                                    <!-- media -->
                                </a>
                                <!-- loop ends here -->
                                <!-- loop starts here -->
                                <a href="" class="media-list-link">
                                    <div class="media d-flex align-items-center py-2 px-2">
                                        <img src="assets/image/img1.jpg" width="50" class="rounded-circle" alt="">
                                        <div class="media-body pl-3">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <strong>Jaymin Modi</strong>
                                            </div>
                                            <!-- d-flex -->
                                            <p class="mb-0">A wonderful serenity has taken possession of my entire.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- media -->
                                </a>
                                <!-- loop ends here -->
                                <!-- loop starts here -->
                                <a href="" class="media-list-link">
                                    <div class="media d-flex align-items-center py-2 px-2">
                                        <img src="assets/image/img1.jpg" width="50" class="rounded-circle" alt="">
                                        <div class="media-body pl-3">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <strong>Aditya Upadhyay</strong>
                                            </div>
                                            <!-- d-flex -->
                                            <p class="mb-0">A wonderful serenity has taken possession.</p>
                                        </div>
                                    </div>
                                    <!-- media -->
                                </a>
                                <!-- loop ends here -->
                            </div>
                            <!-- media-list -->
                        </div>
                        <!-- dropdown-menu -->
                    </div>
                    <!-- dropdown -->
                    <div class="dropdown">
                        <a href="" class="nav-link-profile d-flex dropdown-toggle" data-toggle="dropdown"
                            id="dropdownprofile">
                            <img src="assets/image/img3.jpg" class="rounded" alt="" width="50">
                            <span class="logged-name px-3">Aditya Upadhyay <br><small
                                    class="pt-3">Founder</small></span>
                            <i class="profile-dropdown la la-caret-square-o-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-header dropdown-menu-user"
                            aria-labelledby="dropdownprofile">
                            <div class="text-center">
                                <a href=""><img src="assets/image/img3.jpg" width="80" class="rounded-circle"
                                        alt=""></a>
                                <h6 class="logged-fullname font-weight-bold mt-2">Aditya Upadhyay</h6>
                                <p class="my-0">adityaupadhyay@gmail.com</p>
                            </div>
                            <hr>
                            <ul class="list-unstyled user-profile-nav">
                                <li><a href="javascript:;" class=" waves-effect waves-light"><i class="la la-user"></i>
                                        Edit Profile</a></li>
                                <li><a href="javascript:;" class=" waves-effect waves-light"><i class="la la-cog"></i>
                                        Settings</a></li>
                                <li><a href="javascript:;" class=" waves-effect waves-light"><i
                                            class="la la-download"></i> Downloads</a></li>
                                <li><a href="javascript:;" class=" waves-effect waves-light"><i
                                            class="la la-star-o"></i> Favorites</a></li>
                                <li><a href="javascript:;" class=" waves-effect waves-light"><i class="la la-file"></i>
                                        Collections</a></li>
                                <li><a href="javascript:;" class=" waves-effect waves-light"><i
                                            class="la la-power-off"></i> Sign Out</a></li>
                            </ul>
                        </div>
                        <!-- dropdown-menu -->
                    </div>
                    <!-- dropdown -->
                </nav>
            </div>
            <!-- br-header-right -->
        </div>
        <!-- br-header -->
        <!-- ########## END: HEAD PANEL ########## -->
    </header>


    <!-- ########## START: MAIN PANEL ########## -->
    <section class="mainpanel">
        <div class="pagebody">
            <!----======= Start Color Code =======---->
            <div class="pagetitle">
                <h4 class="text-center">Manage Details</h4>
            </div>
<div class="card">
    <div class="card-body d-flex flex-column align-items-center">
        <div class="button text-center my-3">
            <button class="btn btn-secondary m-1"><a href="insert_product.php" class="text-light">Insert Products</a></button>
            <button class="btn btn-secondary m-1"><a href="#" class="text-light">View Products</a></button>
            <button class="btn btn-secondary m-1"><a href="index.php?insert_category" class="text-light">Insert Categories</a></button>
            <button class="btn btn-secondary m-1"><a href="#" class="text-light">View Categories</a></button>
            <button class="btn btn-secondary m-1"><a href="index.php?insert_brands" class="text-light">Insert Brands</a></button>
            <button class="btn btn-secondary m-1"><a href="#" class="text-light">All Orders</a></button>
            <button class="btn btn-secondary m-1"><a href="#" class="text-light">All Payments</a></button>
            <button class="btn btn-secondary m-1"><a href="#" class="text-light">List Users</a></button>
        </div>
        <form action="login.php" method="post">
            <button type="submit" class="btn btn-secondary m-1">Logout</button>
        </form>
    </div>
</div>


            <!-- including insert.php after clicking button -->
            <div class="container  my-4">
                <?php
                if (isset ($_GET['insert_category'])) {
                    include ('insert_categories.php');
                }
                if (isset ($_GET['insert_brands'])) {
                    include ('insert_brands.php');
                }
                ?>
            </div>
</body>

<script src="assets/scripts/jquery.min.js"></script>
<script src="assets/scripts/popper.min.js"></script>
<script src="assets/scripts/bootstrap-slider.min.js"></script>
<script src="assets/scripts/bootstrap.min.js"></script>
<script src="assets/scripts/bootstrap.bundle.min.js"></script>
<script src="assets/scripts/bootstrap-select.min.js"></script>
<script src="assets/scripts/bootstrap-tooltip-custom-class.js"></script>
<script src="assets/scripts/jquery.mCustomScrollbar.js"></script>
<script src="assets/scripts/Chart.min.js"></script>
<script src="assets/scripts/dashboard.js"></script>
<script src="assets/scripts/datatables.min.js"></script>
<script src="assets/scripts/ripple.min.js"></script>
<script src="assets/scripts/custome.js"></script>

</html>