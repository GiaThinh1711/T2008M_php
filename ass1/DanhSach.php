<?php include_once "database.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--    BOOSTRAP CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--BOOSTRAP JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<?php include("nav.php") ?>
<h1 style="text-align: center;margin: 10px">DANH SÁCH SẢN PHẨM</h1>
<?php
$sql_txt = "select * from sanpham";
$dssanpham = queryDB($sql_txt);
?>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Qty</th>
        <th scope="col">Desc</th>
        <th scope="col">Ncc</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (isset($_POST['id'])) {
        $id_Edit = $_POST['id'];
    }

    if (isset($_POST['name'])) {
        $name_Edit = $_POST['name'];
    }
    if (isset($_POST['price'])) {
        $price_Edit = $_POST['price'];
    }
    if (isset($_POST['qty'])) {
        $qty_Edit = $_POST['qty'];
    }
    if (isset($_POST['des'])) {
        $des_Edit = $_POST['des'];
    }
    if (isset($_POST['nsx'])) {
        $nsx_Edit = $_POST['nsx'];
    }
    //Update
    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['qty']) && isset($_POST['des'])&& isset($_POST['nsx'])) {
        $sql3_text="update sanpham set name ='$name_Edit',price=$price_Edit,qty=$qty_Edit,des='$des_Edit',nsx = '$nsx_Edit' where id=$id_Edit";
        if (connectDB()->query($sql3_text)==true){
            header("location:DanhSach.php");
        }
    }
    ?>
    <?php foreach ($dssanpham as $ds){ ?>
        <tr>
            <th scope="row"><?php echo $ds["name"] ?></th>
            <td><?php echo $ds["price"] ?></td>
            <td><?php echo $ds["qty"] ?></td>
            <td><?php echo $ds["des"] ?></td>
            <td><?php echo $ds["nsx"] ?>&ensp;<a href="SuaSP.php?id= <?php echo $ds["id"]?>">Edit</a>&ensp;<a href="XoaSP.php?id= <?php echo $ds["id"]?>">Delete</a>&ensp;<a href="GioHang.php?id= <?php echo $ds["id"]?>">Add To Cart</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>

