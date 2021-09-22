<?php
require_once("../../../database/db_helper.php");
session_start();
    if($_SESSION['users']['role_id'] !== '1'){
        header('Location: /webdemo/user/login');
    }
class deleteUser extends DB{
    protected $id;
    function __construct($id)
    {
        $this->id = $id;
    }
    function delete()
    {
        $sql = "DELETE FROM account WHERE id = '$this->id'";
        $this->execute($sql);
        header('Location: /webdemo/admin/User/listUser/');
    }
}
if(!empty($_POST["delete"])){
    $id = $_POST["delete"];
    $delete = new deleteUser($id);
    $delete->delete();
}
?>