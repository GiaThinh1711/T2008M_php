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
<h1 style="text-align: center;margin: 10px">DANH SÁCH SẢN PHẨM</h1>
<?php
$dssanpham = [];
$dssanpham[] = [
    "name" => "blalbal",
    "price" => 1000,
    "desc" => "sadasdas",
    "NCC" => "dấdasd"
];
$dssanpham[] = [
    "name" => "đasasadsad",
    "price" => 1000,
    "desc" => "sadasdas",
    "NCC" => "dấdasd"
];
$dssanpham[] = [
    "name" => "đasaasdasd",
    "price" => 1000,
    "desc" => "sadasdas",
    "NCC" => "dấdasd"
];
?>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Desc</th>
        <th scope="col">Ncc</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($dssanpham as $ds){ ?>
        <tr>
            <th scope="row"><?php echo $ds["name"] ?></th>
            <td><?php echo $ds["price"] ?></td>
            <td><?php echo $ds["desc"] ?></td>
            <td><?php echo $ds["NCC"] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>

