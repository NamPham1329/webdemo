<?php
require_once("../../../database/db_helper.php");
session_start();
if($_SESSION['users']['role_id'] !== '1'){
    header('Location: /webdemo/user/login');
}
class delProduct extends DB{
    protected $id;
    function __construct($id)
    {
        $this->id = $id;
    }
    function deleteProduct()
    {
        $sql = "DELETE FROM product WHERE id = '$this->id'";
        $this->execute($sql);
        header('Location: /webdemo/admin/product/listProduct/');
    }
}
if(!empty($_POST['delete']))
{
    $id = $_POST['delete'];
    $delProduct = new delProduct($id);
    $delProduct->deleteProduct();
}
?>