<?php
require_once("../../../database/db_helper.php");
class listUser extends DB{
    function list_User()
    {
        $sql = "SELECT * FROM account WHERE username <> 'admin'";
        return $this->executeResult($sql);
    }
}
$list = new listUser();
$data1 = $list->list_User();
?>