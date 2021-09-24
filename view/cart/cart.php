<?php

use productDetail as GlobalProductDetail;

session_start();
if(empty($_SESSION))
{
    header('Location: /webdemo/view/login');
}
require_once("../../database/db_helper.php");

class checkUser extends DB{
    protected $account;
    function __construct($account)
    {
        $this->account = $account;
    }
    function getUserID()
    {
        $sql = "SELECT id FROM cart WHERE customer_id = '$this->account'";
        return $this->executeResult($sql);
    }
}

class newCart extends DB{
    protected $account;
    function __construct($account)
    {
        $this->account = $account;
    }
    function saveCart()
    {
        $sql = "INSERT INTO cart(id, customer_id, order_status) values(null, '$this->account','procesing')";
        return $this->execute($sql);
    }
}

class productDetail extends DB{
    protected $product;
    function __construct($product)
    {
        $this->product = $product;
    }
    function getProduct()
    {
        $sql = "SELECT * FROM product WHERE id = '$this->product'";
        return $this->executeResult($sql);
    }
}

class cartDetail extends DB{
        protected $idCart;
        protected $product_name;
        protected $price;
        protected $image;
        protected $quantity;
        protected $total;
        function __construct($cart, $product, $price, $image, $quantity, $total)
        {
            $this->idCart = $cart;
            $this->product_name = $product;
            $this->price = $price;
            $this->image = $image;
            $this->quantity = $quantity;
            $this->total = $total;
        }
        function saveCartDetail()
        {
            $sql = "INSERT INTO orderdetail(id, order_id, order_total, product_name, product_img, product_price, quantity) values(null,'$this->idCart', '$this->total', '$this->product_name', '$this->image', '$this->price', '$this->quantity')";
            $this->execute($sql);
        }
    }

class orderDetail extends DB{
    protected $id;
    function __construct($id)
    {
        $this->id = $id;
    }
    function listProduct()
    {
        $sql = "SELECT * FROM orderdetail WHERE order_id = '$this->id'";
        return $this->executeResult($sql);
    }
}

if(!empty($_SESSION['users']['id']) && !empty($_POST['addToCart']))
{
    $account = $_SESSION['users']['id'];//lấy id account
    $product = $_POST['addToCart'];//lấy id sản phẩm
    $order = new checkUser($account);//kiểm tra giỏ hàng của tài khoản đã được tạo hay chưa?
    $order_id = $order->getUserID();
    $id = $order_id[0]['id'];
    echo "<br>";
    if(empty($order_id)){
        $cart = new newCart($account);
        $cart->saveCart();
    }// nếu giỏ tài khoản chưa từng order thì tạo giỏ hàng tương ứng với tài khoản đó
    $product = new productDetail($product);//lấy thông tin sản phầm vừa được thêm
    $productDetail = $product->getProduct();

    foreach($productDetail as $item)
    {
        $id_product = $item['id'];
        $product_name = $item['product_name'];
        $price = $item['price']; 
        $image = $item['product_img'];
        $quantity = '1';
        $total = $price* $quantity;
    }
    $order = $order_id[0]['id'];
    $cartDetail = new cartDetail($order, $product_name, $price, $image, $quantity, $total);//thêm thông tin về sản phẩm vừa thêm vào chi tiết đơn hàng
    $cartDetail->saveCartDetail($id);
    $orderDetail = new orderDetail($id);//lấy thông tin chi tiết đơn hàng hiển thị lên view
    $data = $orderDetail->listProduct();
}
//tải lại trang tự thêm sản phẩm như trước
//khi chưa có đơn hàng thì add to cart lần đầu không thành công
//add to cart nếu chưa đăng nhập điều hướng đến trang đăng nhập trước.
//update thông tin giỏ hàng
// xóa sản phẩm trong giỏ hàng
//submit addTocart không chuyển trang.

?>