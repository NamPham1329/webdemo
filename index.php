<?php
require_once("database/db_helper.php");
require_once("view/logout/logout.php");
class GetPrd extends Db{
    function get_Prd()
    {
        $sql = "SELECT * FROM product";
        return $this->executeResult($sql);
    }
}
$product = new GetPrd();
$data = $product->get_Prd();



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="public/frontend/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="public/frontend/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/webdemo/">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>

                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit" >
                            <a class="link" style="color: #000;" href="/webdemo/view/cart/viewCart">
                                <i class="bi-cart-fill me-1"></i>
                                Cart
                                <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                            </a>
                        </button>
                    </form>
                    <form class="d-flex" style="margin-left: 10px;">
                        <button class="btn btn-outline-dark" type="submit">
                            <a class="link" style="color: #000;" href="/webdemo/view/login">
                                Login
                            </a>
                        </button>
                    </form>
                    <form method="POST" class="d-flex" style="margin-left: 10px;">
                        <button class='btn btn-outline-dark' type="submit" name="logout" value="logout">Logout</button>	
                    </form>
                    <?php if(!empty($_SESSION))
                    {
                        echo($_SESSION['users']['username']);
                    } ?>
                    
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php 
                if(!empty($data)){
                $path = 'public/upload/';
                foreach ($data as $item){?>   
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo $path.$item['product_img']?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $item['product_name']?></h5>
                                    <!-- Product price-->
                                    <?php echo '$'.$item['price'];?>
                                </div>
                            </div>
                            <a class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center" href="/webdemo/view/product/?id=<?php echo $item['id']; ?>"><button class="btn btn-outline-dark">View options</button></a>
                        </div>
                    </div>
                <?php } }?>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="public/frontend/js/scripts.js"></script>
    </body>
</html>
