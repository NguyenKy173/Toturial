<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1></h1>
    <?php
    //Biến có phạm vi toàn cầu
    echo "<h1>Biến có phạm vi toàn cầu</h1>";
    $x = 5;
    function myTest()
    {
        echo "<h2>Variable  x inside function is: $x </h2>";
    }
    myTest();
    echo "<h2>Variable  x inside function is: $x </h2>";
    echo "<br>";
    ?>
    <?php
    // //lưu trữ
    // $b = 5;
    // $c = 10;
    // function test()
    // {
    //     $GLOBALS['b'] = $GLOBALS['b'] + $GLOBALS['c'];
    // }
    // test();
    // echo $b;
    // ?>
    // <?php
    //Biến địa phương
    echo "<h1>Biến địa phương</h1> <br>";
    function myTest2()
    {
        $y = 5;
        echo "<h2>Variable  x inside function is: $y </h2>";
    }
    myTest2();
    echo "<p><h2>Variable  x inside function is: $y </h2>";
    echo "<br>";
    ?>
    <?php
    //Biến tĩnh: biến cục bộ không bị xoá
    echo "<h1>Biến tĩnh</h1> <br>";
    function myTest3(){
        static $d =0;
        echo $d;
        $d++;
    }
    myTest3();
    echo "<br>";
    myTest3();
    echo "<br>";
    myTest3();
    echo "<br>";

    ?>
    <!-- echo không có giá trị trả về trong khi print có giá trị trả về bằng 0 nên thường được dùng trong các biểu thức
         echo nhận một tham số- print nhận một đối số
        echo thì nhanh hơn print một chút -->
</body>

</html>