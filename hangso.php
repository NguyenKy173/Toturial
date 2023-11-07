<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Hằng phân biệt chữ hoa chữ thường
    define("HIHA", "Hello world!");
    echo HIHA;
    echo "<br>";
    //Bạn cũng có thể tạo một hằng số bằng cách sử dụng consttừ khóa.
    const car = "BWN";
    echo car;
    echo"<br>";
    //Mảng hằng số PHP
    define("cars",["xe1","xe2","xe3"]);
    echo cars[1];
    echo"<br>";
    //.= cột cả hai lại
    $k = "hello";
    $l= " hi";
    $k .= $l;
    echo $k;
    ?>
</body>

</html>