<?php
require_once("../../../database/db_helper.php");
class listOrder extends DB{
    function list_order()
    {
        $sql = "SELECT * FROM cart";
        return $this->executeResult($sql);
    }
}
$list = new listOrder();
$data = $list->list_order();
?>