<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm sản phẩm</title>
</head>
<body>
<?php include("nav.php"); include_once "database.php"; ?>
<form action="LuuSP.php"  method="POST">
    <input type="text" name="name" placeholder="Name..."/>
    <input type="number" name="price" placeholder="Price..."/>
    <input type="number" name="qty" placeholder="Qty..."/>
    <input type="text" name="des" placeholder="Desc..."/>
    <input type="text" name="nsx" placeholder="NSX..."/>
    <button type="submit">Save</button>
</form>

</body>
</html>