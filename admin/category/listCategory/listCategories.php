<?php
require_once("../../../database/db_helper.php");
class listCategories extends DB{
    function listCategory()
    {
        $sql = "SELECT * FROM categories";
        return $this->executeResult($sql);
    }
}
$list = new listCategories();
$data = $list->listCategory();
?>
