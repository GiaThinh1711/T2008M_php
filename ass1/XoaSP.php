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
$sql_txt = "delete from sanpham where id = $id";
$rs = $conn->query($sql_txt);
header("location: DanhSach.php");
