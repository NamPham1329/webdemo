<?php
require_once("../../../database/db_helper.php");
class getPrd extends DB{
    function get_Product()
    {
        $sql = "SELECT * FROM product";
        return $this->executeResult($sql);
    }
}
$list = new getPrd();
$data1 = $list->get_Product();
?>