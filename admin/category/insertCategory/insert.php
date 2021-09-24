<?php
require_once("../../../database/db_helper.php");
require_once("index.php");
class insertCategories extends DB{
    protected $category_name;
    function __construct($category)
    {
        $this->category_name = $category;
    }
    function insert()
    {
        if(!empty($this->category_name))
        {
            $sql = "INSERT INTO categories(id, category_name)values(null, '$this->category_name')";
            $this->execute($sql);
            header('Location: /webdemo/admin/category/listCategory'); 
        }
    }
}
if(!empty($_POST['create']))
{
    $category_name = $_POST['name'];
    $insertCategory = new insertCategories($category_name);
    $insertCategory->insert();
}
?>