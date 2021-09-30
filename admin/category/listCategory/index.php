<?php
    require_once("listCategories.php");
    require_once("../deleteCategory/index.php");
    require_once("../../../view/logout/logout.php");
    if($_SESSION['users']['role_id'] !== '1'){
        header('Location: /webdemo/view/login');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>ADMIN</title>

    <!-- Fontfaces CSS-->
    <link href="../../frontend/homepage/css/font-face.css" rel="stylesheet" media="all">
    <link href="../../frontend/homepage/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../frontend/homepage/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../frontend/homepage/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../frontend/homepage/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../frontend/homepage/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../frontend/homepage/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../frontend/homepage/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../frontend/homepage/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../frontend/homepage/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../frontend/homepage/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../frontend/homepage/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="../../frontend/homepage/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                            <li class="has-sub">
                                <a class="" href="/webdemo/">
                                    <i class="fas fa-tachometer-alt"></i>Home</a>
                            </li>
                            <li>
                                <a href="chart.html">
                                    <i class="fas fa-chart-bar"></i>Charts</a>
                            </li>
                            <li>
                                <a href="/webdemo/admin/product/listProduct/">
                                    <i class="fas fa-table"></i>Products</a>
                            </li>
                            <li>
                                <a href="form.html">
                                    <i class="far fa-check-square"></i>Forms</a>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <i class="fas fa-calendar-alt"></i>Calendar</a>
                            </li>
                            <li>
                                <a href="map.html">
                                    <i class="fas fa-map-marker-alt"></i>Maps</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Pages</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="register.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="forget-pass.html">Forget Password</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-desktop"></i>UI Elements</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="button.html">Button</a>
                                    </li>
                                    <li>
                                        <a href="badge.html">Badges</a>
                                    </li>
                                    <li>
                                        <a href="tab.html">Tabs</a>
                                    </li>
                                    <li>
                                        <a href="card.html">Cards</a>
                                    </li>
                                    <li>
                                        <a href="alert.html">Alerts</a>
                                    </li>
                                    <li>
                                        <a href="progress-bar.html">Progress Bars</a>
                                    </li>
                                    <li>
                                        <a href="modal.html">Modals</a>
                                    </li>
                                    <li>
                                        <a href="switch.html">Switchs</a>
                                    </li>
                                    <li>
                                        <a href="grid.html">Grids</a>
                                    </li>
                                    <li>
                                        <a href="fontawesome.html">Fontawesome Icon</a>
                                    </li>
                                    <li>
                                        <a href="typo.html">Typography</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar">
            <div class="logo">
                <a href="/webdemo/">
                    <img src="../../frontend/homepage/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a  href="/webdemo/" class="">
                            <i class="fas fa-home"></i></i>Home
                            </a>
                        </li>
                        <li>
                            <a href="/webdemo/admin/user/listUser/">
                            <i class="fas fa-user"></i></i>Account</a>
                        </li>
                        <li>
                            <a href="/webdemo/admin/product/listProduct/">
                            <i class="fas fa-box"></i>Products</a>
                        </li>
                        <li>
                            <a href="/webdemo/admin/category/listCategory/">
                            <i class="fas fa-clipboard-list"></i>Category</a>
                        </li>
                        <li>
                            <a href="/webdemo/admin/order/listOrder/">
                                <i class="fas fa-calendar-alt"></i>Order</a>
                        </li>
                        <li>
                            <a href="/webdemo/admin/role/listRole/">
                                <i class="fas fa-map-marker-alt"></i>Role</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                    <form method="POST">
                                            <button class='btn btn-warning left-margin' type="submit" name="logout" value="<?php echo $_SESSION['users']['id']?>">Logout</button>	
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">category</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-right" style="position: absolute; right: 2%;">
                                        <a href="/webdemo/admin/category/insertCategory">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item
                                        </button></a>   
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>category name</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if(!empty($data))
                                            {
                                                foreach($data as $item){
                                            ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $item['id']?></td>
                                                <td><?php echo $item['category_name']?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="/webdemo/admin/category/updateCategory/?id=<?php echo $item['id']; ?>" style="margin-right: 5px;">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                        </a>
                                                        <form method="post" style="margin-right: 5px;">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" type="submit" name="delete" value="<?php echo $item['id']; ?>">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                        </form>
                                                        
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } }?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../../frontend/homepage/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../frontend/homepage/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../frontend/homepage/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- ../../frontend/homepage/Vendor JS       -->
    <script src="../../frontend/homepage/vendor/slick/slick.min.js">
    </script>
    <script src="../../frontend/homepage/vendor/wow/wow.min.js"></script>
    <script src="../../frontend/homepage/vendor/animsition/animsition.min.js"></script>
    <script src="../../frontend/homepage/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../../frontend/homepage/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../../frontend/homepage/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../../frontend/homepage/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../frontend/homepage/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../frontend/homepage/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../../frontend/homepage/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <!-- <script src="../../frontend/homepage/js/main.js"></script> -->

</body>

</html>