<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
<?php
$dshocsinh = [];
$dshocsinh[] = [
    "name" => "Nguyen Gia Thinh",
    "age" => 20
] ;
$dshocsinh[] = [
    "name" => "Nguyen Gia Vuong",
    "age" => 18
] ;
$dshocsinh[] = [
    "name" => "Nguyen Gia Dat",
    "age" => 23 ];
?>
    <ul>
        <?php foreach ($dshocsinh as $hs){ ?>
            <li><?php echo $hs["name"]."--".$hs["age"]; ?></li>
        <?php  } ?>
    </ul>
    <a href="index.php">Return</a>;
</body>
</html>
