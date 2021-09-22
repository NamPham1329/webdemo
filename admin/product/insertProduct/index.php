<?php
    require_once("../../category/listCategory/listCategories.php");
    session_start();
    if($_SESSION['users']['role_id'] !== '1'){
        header('Location: /webdemo/user/login');
    }
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="../public/frontend/css/main.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>New Product</title>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;

}

* {
  box-sizing: border-box;
}

.container {
  width: 50%;
  margin: auto;
  padding: 16px;
  background-color: white;
  border: 5px solid green;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.slug{
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.slug:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<div class="container">
<form method="POST" action="insert.php" enctype="multipart/form-data">
    <h1>CREATE PRODUCT</h1>
    <hr>

    <label for="name"><b>Product Name:</b></label>
    <input type="text" placeholder="Enter Name" name="name"value="">

    <label for="price"><b>Price</b></label>
    <input type="text" placeholder="Enter Price" name="price" value="">

    <label for="image"><b>Image</b></label>      
    <input type="file" name="image"></td>
    <br>
            
    <label for="detail"><b>Detail</b></label>
    <input type="text" placeholder="Enter Detail Product" name="detail">
    
    <label for="category_id"><b>Category ID:</b></label>
    <select name="category_id">
    <?php
            foreach ($data as $item){
                echo "<option value=".$item['id'].">"
                    .$item["category_name"].
                "</option>";
            echo "<br>";
            }
        ?>
    </select>
    <hr>
    <button type="submit" class='add_prd btn btn-warning left-margin' name="add_prd" value="save">Create</button>
    <br>
    <div class="back" class='btn btn-warning left-margin'>
		  <a href="/webdemo/admin/product/listProduct/">List Product</a>
    </div>
</form>
</div>
</body>
</html> 
