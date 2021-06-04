<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa thông tin</title>
</head>
<body>
<?php include "nav.php";?>
<?php
$id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$db = "t2008m_php";
$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die("Connect error...");
}

$sql_txt = "select * from sanpham where id = $id";
$rs = $conn->query($sql_txt);
$sp = null;
if($rs->num_rows>0){
    while($row = $rs->fetch_assoc()){
        $sp = $row;
        break;
    }
}
if($sp == null) header("location: DanhSach.php");
?>
<form action="DanhSach.php"  method="POST">
    <input type="hidden" name="id" value="<?php echo $sp["id"];?>"/>
    <input type="text" name="name" value="<?php echo $sp["name"];?>" placeholder="Name.."/>
    <input type="number" name="price" value="<?php echo $sp["price"];?>" placeholder="Price.."/>
    <input type="number" name="qty" value="<?php echo $sp["qty"];?>" placeholder="Qty.."/>
    <input type="text" name="des" value="<?php echo $sp["des"];?>" placeholder="Desc.."/>
    <input type="text" name="nsx" value="<?php echo $sp["nsx"];?>" placeholder="Nsx.."/>
    <button type="submit">Submit</button>
</form>
</body>
</html>
