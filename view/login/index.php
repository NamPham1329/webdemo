<?php
require_once("login.php");
session_start();
if(!empty($_SESSION['users']['role_id']))
{
  if($_SESSION['users']['role_id']==='1')
  {
      header('Location: /webdemo/admin/product/listProduct');
  }
}
// print_r($_SESSION);
// echo "<br>";
// print_r($_POST);
?>

<?php
require_once("login.php");
if(!empty($_SESSION['users']['role_id']))
{
  if($_SESSION['users']['role_id']==='1')
  {
      header('Location: /webdemo/admin/product/listProduct');
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;
width: 50%;
margin: auto;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
h2{
  text-align: center;
}
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login Form</h2>

<form  method="post" action="login.php">
  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="login" value="login">Login</button>
  </div>
  <span class="psw"><a href="/webdemo/view/register">Do not have account?</a></span>
</form>

</body>
</html>
