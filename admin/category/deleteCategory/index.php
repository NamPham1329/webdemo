<?php
require_once("../../../database/db_helper.php");
session_start();
    if($_SESSION['users']['role_id'] !== '1'){
        header('Location: /webdemo/user/login');
    }
class deleteCategory extends DB{
    protected $id;
    function __construct($id)
    {
        $this->id = $id;
    }
    function delete()
    {
        $sql = "DELETE FROM categories WHERE id = '$this->id'";
        $this->execute($sql);
        header('Location: /webdemo/admin/category/listCategory/');
    }
}
if(!empty($_POST["delete"]))
{
    $id = $_POST["delete"];
    $delete = new deleteCategory($id);
    $delete->delete();
}
?>