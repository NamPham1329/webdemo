<?php
require_once("update.php");
require_once("../../role/listRole/getRole.php");
session_start();
    if($_SESSION['users']['role_id'] !== '1'){
        header('Location: /webdemo/user/login');
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;
width: 25%;
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

<h2>Update User</h2>

<form  method="post" action="update.php">
  <div class="container">
  <label for="userID"><b>User ID:</b></label>
    <input type="text" name="userID" value="<?php
    if(!empty($data1)){
        echo $data1[0]['id'];
    }?>" readonly>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" value="<?php
    if(!empty($data1)){
        echo $data1[0]['username'];
    }?>" readonly>

    <label for="role"><b>Role:</b></label>
    <select name="role">
    <?php
        foreach ($data as $item){
            echo "<option value=".$item['id'].">"
                .$item["role_name"].
            "</option>";
        echo "<br>";
        }
    ?>
    </select>
        
    <button type="submit" name="update" value="update">Update</button>
    <span class="back"><a href="/webdemo/admin/user/listUser/">Back</a></span>
  </div>

</form>
<?php

?>
</body>
</html>