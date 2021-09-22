<?php
require_once("../../../database/db_helper.php");
class Role extends DB{
    function get_role()
    {
        $sql = "SELECT * FROM role";
        return $this->executeResult($sql);
    }
}
$list = new Role();
$data = $list->get_role();
?>