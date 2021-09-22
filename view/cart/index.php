<?php
session_start();
print_r($_SESSION);
if(empty($_SESSION))
{
    header('Location: /webdemo/view/login');
}
else {
    header('Location: /webdemo/view/cart/cart.php');
}


?>