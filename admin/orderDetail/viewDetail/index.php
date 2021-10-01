<?php
    require_once("detail.php");
    require_once("../../../view/logout/logout.php");
    if($_SESSION['users']['role_id'] !== '1'){
        header('Location: /webdemo/view/login');
    }
?>

<?php 
require_once("../../layout/header.php");
require_once("../../layout/sidebar.php"); 
require_once("../../layout/header_desktop.php");
?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">order detail</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>order id</th>
                                                <th>product name</th>
                                                <th>price</th>
                                                <th>quantity</th>
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
                                                <td><?php echo $item['product_name']?></td>
                                                <td><?php echo $item['product_price']?></td>
                                                <td><?php echo $item['quantity']?></td>
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

    <?php require_once("../../layout/footer.php");?>    