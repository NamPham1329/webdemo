<?php
require_once("../../../database/db_helper.php");
session_start();
    if($_SESSION['users']['role_id'] !== '1'){
        header('Location: /webdemo/user/login');
    }
class delOrder extends DB{
    protected $id;
    function __construct($id)
    {
        $this->id = $id;
    }
    function del_order()
    {
        $sql = "DELETE FROM cart WHERE id = '$this->id'";
        $this->execute($sql);
        header('Location: /webdemo/admin/order/listOrder');
    }
}
if(!empty($_POST['delete']))
{
    $id = $_POST['delete'];
    $delOrder = new delOrder($id);
    return $delOrder->del_order();
}
?>