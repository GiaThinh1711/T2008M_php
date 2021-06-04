<?php include_once "session.php";include_once "database.php"?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Giỏ Hàng</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<?php if(isset($_GET ["id"])){
    $GioHang = $_SESSION["giohang"];
    $id = $_GET["id"];
    $sql4_txt = queryDB("select * from sanpham where id = $id");
    $save_list = $sql4_txt[0];
    if(!in_array($save_list,$GioHang)){
        $GioHang[] = $save_list;
        $_SESSION["giohang"] = $GioHang;
    }
} ?>
<h1>Giỏ hàng</h1>
<?php  $ds = $_SESSION["giohang"]; ?>
<?php $payment = 0 ?>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Qty</th>
        <th scope="col">Desc</th>
        <th scope="col">Nsx</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($ds as $sp){ $payment += $sp["price"]  ?>
    <tr>
        <th scope="row"><?php echo $sp["name"];?></th>
        <td><?php echo $sp["price"];?></td>
        <td><?php echo $sp["qty"];?></td>
        <td><?php echo $sp["des"];?></td>
        <td><?php echo $sp["nsx"];?></td>
    </tr>
    <?php  } ?>
    </tbody>
</table>
    <div style=""><span>Total: <?php echo $payment?></span> </div>
    <p><a href="DanhSach.php" style="text-decoration: none;color: red">Home</a></p>
</body>
</html>
