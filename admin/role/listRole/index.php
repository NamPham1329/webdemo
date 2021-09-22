<?php
require_once("getRole.php");
require_once("../deleteRole/index.php");
require_once("../../../view/logout/logout.php");
    if($_SESSION['users']['role_id'] !== '1'){
        header('Location: /webdemo/view/login');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Simple Sidebar - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../../frontend/homepage/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../frontend/homepage/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
                <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/webdemo/">Home Page</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/webdemo/admin/user/listUser/">Account</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/webdemo/admin/product/listProduct">Product</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/webdemo/admin/category/listCategory/">Category</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/webdemo/admin/order/listOrder/">Order</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/webdemo/admin/role/listRole/">Role</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        
                        <form method="POST" action="/webdemo">
                            <button class='btn btn-warning left-margin' type="submit" name="logout" value="<?php echo $_SESSION['users']['id']?>">Logout</button>	
                        </form>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Role ID</th>
                            <th scope="col">Role Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($data as $item){
                                echo '<tr>
                                <td>'.$item['id'].'</td>
                                <td>'.$item['role_name'].'</td>
                                <td style="width: 5%;"><a href="/webdemo/admin/role/updateRole/?id='.$item['id'].'"><button class="btn btn-warning left-margin">Edit</button></a></td>
                                <td>
                                    <form method="POST">
                                        <button class="btn btn-warning left-margin" type="submit" name="delete" value="'.$item['id'].'">Delete</button>
                                    </form>
                                </td>
                                </tr>';
                            }
                        ?>
                    </tbody>
                    </table>
                    <div class="back">
                            <a href="/webdemo/admin/role/newRole" class="btn btn-warning left-margin">New</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../../frontend/homepage/js/scripts.js"></script>
    </body>
</html>