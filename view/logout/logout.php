<?php
if(empty($_SESSION)){
    session_start();
}
class Logout{
    public function logout()
    {
        if(!empty($_POST['logout'])){
            session_destroy();
            header('Location: /webdemo');  
        } 
    }
}
$logout = new Logout();
return $logout->logout();
?>