<?php
include_once "database.php";
$name = $_POST["name"];
$price = $_POST["price"];
$qty = $_POST["qty"];
$des =  $_POST["des"];
$nsx =  $_POST["nsx"];

$sql_txt = "INSERT INTO sanpham(name,price,qty,des,nsx) VALUES('$name',$price,$qty,'$des','$nsx')";

insertOrUpdateDB($sql_txt);
header("location: DanhSach.php");
?>
