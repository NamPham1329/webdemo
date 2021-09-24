<?php
require_once("../../../database/db_helper.php");
require_once("index.php");
class getUser extends DB{
    protected $id;
    function __construct($id)
    {
        $this->id  = $id;
    }
    function get_user()
    {
        $sql = "SELECT * FROM account WHERE id = '$this->id'";
        return $this->executeResult($sql);
    }
}
if(!empty($_GET['id']))
{
    $id = $_GET['id'];
    $user = new getUser($id);
    $data1 = $user->get_user();
}
class updateUser extends DB{
    protected $idRole;
    protected $userID;
    function __construct($idRole, $userID)
    {
        $this->userID = $userID;
        $this->idRole = $idRole;
    }
    function updateRole()
    {
        $sql = "UPDATE account SET role_id = '$this->idRole' WHERE id='$this->userID'";
        $this->execute($sql);
        header('Location: /webdemo/admin/user/listUser'); 
    }
}
if(!empty($_POST['update']))
{
    $role = $_POST['role'];
    $id = $_POST['userID'];
    $update = new updateUser($role, $id);
    $update->updateRole();  
}
?>