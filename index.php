<?php
$x = 10; //khai bao bien
$y = "Hello";
$x = "Hi";
$z = $x.$y; //noi chuoi
echo $z;
echo "aa"."5"."<br/>";
$n = 10;
if($n >= 10){
    echo "Gia tri qua lon <br/>";
}else{
    echo "Gia tri qua nho <br/>";
}
for($i = 0;$i < 10;$i++){
    echo " i= ".$i."<br/>";
}
$arr = []; //khai bao array
$arr[0] = 12;
$arr[1] = "Xin chao";
$arr[] = 101; //tu dong them vao cuoi mang
for($i = 0;$i < 3;$i++){
    echo "arr[".$i."] = ".$arr[$i]."<br.>";
}
$arr["name"] = "Nguyen Gia Thinh";
$arr["age"] = 10;
echo "Name: ".$arr["name"]."<br/>";
foreach ($arr as $item){
    echo $item."<br/>";
}
foreach ($arr as $key => $value){
    echo $key."-".$value."<br/>";
}