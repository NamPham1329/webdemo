<?php
require_once("../../../database/db_helper.php");
class getProduct extends DB{
    protected $id;
    function __construct($id)
    {
        $this->id = $id;
    }
    function getPrdbyID()
    {
        $sql = "SELECT * FROM product WHERE id = '$this->id'";
        return $this->executeResult($sql);
    }
}
if(!empty($_GET['id']))
{
    $id = $_GET['id'];
    $getPrd = new getProduct($id);
    $data1 = $getPrd->getPrdbyID();
}

class updateProduct extends DB{
    protected $id;
    protected $name;
    protected $price;
    protected $detail;
    protected $categoryID;
    protected $prd_img;
    function __construct($id, $name, $price, $detail, $cate_ID, $prd_img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->detail = $detail;
        $this->categoryID = $cate_ID;
        $this->prd_img = $prd_img;
    }
    function update_product()
    {
        if(!empty($this->name) && !empty($this->name) && !empty($this->price) && !empty($this->detail) && !empty($this->categoryID) && !empty($this->prd_img))
        {
            $path = "../../upload/";
            $tmp_name = $_FILES['image']['tmp_name'];
            $this->prd_img = $_FILES['image']['name'];
            move_uploaded_file($tmp_name,$path.$this->prd_img);
            $sql = "UPDATE product SET product_name = '$this->name', price = '$this->price', product_detail = '$this->detail', category_id = '$this->categoryID', product_img = '$this->prd_img' WHERE id = '$this->id'";
            return $this->execute($sql); 
        }
    }
}
if(!empty($_POST['update_prd']))
{
    $id = $_POST['prdID'];
    $prd_name = $_POST['name'];
    $price = $_POST['price'];
    $prd_detail = $_POST['detail'];
    $categoryID = $_POST['category_id'];
    $prd_img = $_FILES['image']['name'];
    $update = new updateProduct($id, $prd_name, $price, $prd_detail, $categoryID, $prd_img);
    $update->update_product();
}
?>