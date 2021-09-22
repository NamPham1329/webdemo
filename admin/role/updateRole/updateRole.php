<?php
require_once("../../../database/db_helper.php");

class getRole extends DB{
    protected $id;
    function __construct($id)
    {
        $this->id = $id;
    }
    function get_role(){
        $sql = "SELECT * FROM role WHERE id='$this->id'";
        return $this->executeResult($sql);
    }
}
if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $role = new getRole($id);
    $data = $role->get_role();
}

class updateRole extends DB{
    protected $id;
    protected $roleName;
    function __construct($id, $name)
    {
        $this->id = $id;
        $this->roleName = $name;
    }
    function update_role()
    {
        if(!empty($this->id) && !empty($this->roleName))
        {
            $sql = "UPDATE role SET role_name = '$this->roleName' WHERE id = '$this->id'";
            return $this->execute($sql);
        }
    }
}
if(!empty($_POST['update']))
{
    $id = $_POST['roleID'];
    $name = $_POST['name'];
    $update = new updateRole($id, $name);
    return $update->update_role();
}
?>