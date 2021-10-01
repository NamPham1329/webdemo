<?php
    require_once("update.php");
    session_start();
    if($_SESSION['users']['role_id'] !== '1'){
        header('Location: /webdemo/user/login');
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
                                <div class="card">
                                    <div class="card-header">
                                        <strong><h3 class="title-5 m-b-35">update category</h3></strong>
                                    </div>
                                    <form action="" method="post" class="form-horizontal">
                                    <div class="card-body card-block">
                                        <div class="row form-group">
                                            <div class="col col-sm-6">
                                                <input name="id" value="<?php
                                                    if(!empty($data)){
                                                    foreach($data as $value){
                                                        echo $value['id'];
                                                    }
                                                    }
                                                    ?>" type="text" id="input-large" class="input-lg form-control-lg form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-6">
                                                <input name="name" value="<?php
                                                    if(!empty($data)){
                                                    foreach($data as $value){
                                                        echo $value['category_name'];
                                                    }
                                                    }
                                                    ?>" type="text" id="input-large" name="input-large" placeholder="Enter name category" class="input-lg form-control-lg form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button name="update" value="update" type="submit" class="btn btn-primary btn-sm">
                                            SAVE
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("../../layout/footer.php");?>





