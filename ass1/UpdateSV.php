<?php
$name = $_POST["name"];
$price = $_POST["price"];
$qty = $_POST["qty"];
$desc =  $_POST["desc"];
$nsx =  $_POST["nsx"];
$id = $_POST["id"];
$servername = "localhost";
$username = "root";
$password = "";
$db = "t2008m_php";
$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die("Connect error...");
}
$sql_txt = "update sanpham set name='$name',price = $price, qty='$qty',desc = '$desc',nsx = '$nsx' where id= $id";
if($conn->query($sql_txt) === true){
    header("location: DanhSach.php");
}else{
    echo "ERRORS:".$conn->error;
}