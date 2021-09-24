<?php
require_once("../../../database/db_helper.php");
require_once("index.php");
class insertRole extends DB{
    protected $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function insert_role()
    {
        if(!empty($this->name))
        {
            $sql = "INSERT INTO role(id, role_name) values (null, '$this->name')";
            $this->execute($sql);
            header('Location: /webdemo/admin/role/listRole'); 
        }
    }
}
if(!empty($_POST['create'])){
    $name = $_POST['name'];
    $newRole = new insertRole($name);
    return $newRole->insert_role();
}
?>