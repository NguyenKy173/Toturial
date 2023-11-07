<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //check kiểu dữ liệu
    $a = 45;
    var_dump(is_int($a));
    echo "<br>";
    $b = 45.1;
    var_dump(is_int($b));
    echo "<br>";
    //kiểm tra có phải số không
    $x = acos(8);
    var_dump($x);
    echo "<br>";
    //chuỗi số
    // Check if the variable is numeric 
    echo "<h3>Kiểm tra xem biến có phải là chuỗi số không!</h3> "; 
    $x = 5985;
    var_dump(is_numeric($x));
    echo "<br>";

    $x = "5985";
    var_dump(is_numeric($x));
    echo "<br>";

    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    echo "<br>";

    $x = "Hello";
    var_dump(is_numeric($x));
    echo "<br>";
    //ép kiểu
    echo "<h3>ép kiểu!</h3> ";
    $x = 234.432;
    $int_cast = (int)$x;
    echo $int_cast;
    ?>
</body>

</html>