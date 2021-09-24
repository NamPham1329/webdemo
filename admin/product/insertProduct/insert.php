<?php
require_once("../../../database/db_helper.php");
require_once("index.php");
class insertProduct extends DB{
    protected $name;
    protected $price;
    protected $detail;
    protected $categoryID;
    protected $prd_img;
    function __construct($name, $price, $detail, $cate_ID, $prd_img)
    {
        $this->name = $name;
        $this->price = $price;
        $this->detail = $detail;
        $this->categoryID = $cate_ID;
        $this->prd_img = $prd_img;
    }
    function insertProduct()
    {
        if(!empty($this->name) && !empty($this->price) && !empty($this->detail) && !empty($this->categoryID) && !empty($this->prd_img))
        {
            $path = "../../../public/upload/";
            $tmp_name = $_FILES['image']['tmp_name'];
            $this->prd_img = $_FILES['image']['name'];
            move_uploaded_file($tmp_name,$path.$this->prd_img);
            $sql = "INSERT INTO product(id, product_name, price, product_detail, category_id, product_img) values(null,'$this->name', '$this->price', '$this->detail', '$this->categoryID', '$this->prd_img')";
            $this->execute($sql);
            header('Location: /webdemo/admin/product/listProduct'); 
        }
    }
}
if(!empty($_POST['add_prd']))
{
    $prd_name = $_POST['name'];
    $price = $_POST['price'];
    $prd_detail = $_POST['detail'];
    $categoryID = $_POST['category_id'];
    $prd_img = $_FILES['image']['name'];
    $insert = new insertProduct($prd_name, $price, $prd_detail, $categoryID, $prd_img);
    $insert->insertProduct();
}
?>