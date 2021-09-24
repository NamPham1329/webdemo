<?php
require_once("../../../database/db_helper.php");
class getCategory extends DB{
    protected $id;
    function __construct($id)
    {
        $this->id = $id;
    }
    function getCategory(){
        $sql = "SELECT * FROM categories WHERE id='$this->id'";
        return $this->executeResult($sql);
    }
}
if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $category = new getCategory($id);
    $data = $category->getCategory();
}
class updateCategory extends DB{
    protected $id;
    protected $category;
    function __construct($id, $category)
    {
        $this->id = $id;
        $this->category = $category;
    }
    function updateCategory()
    {
        if(!empty($_POST['name']))
        {
            $sql = "UPDATE categories SET category_name = '$this->category' WHERE id='$this->id'";
            $this->execute($sql);
            header('Location: /webdemo/admin/category/listCategory'); 
        }
    }
}
if(!empty($_POST['update']))
{
    $id =$_POST['id'];
    $name = $_POST['name'];
    $update = new updateCategory($id, $name);
    $update->updateCategory();
}