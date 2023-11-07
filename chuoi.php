<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Hàm trả về độ dài của chuỗi
    echo strlen("Hello world") ;
    echo "<br>";
    //Hàm đếm sô từ trong chuỗi
    echo str_word_count("haha hihi huhu") ;
    echo "<br>";
    //Hàm đảo ngược chuỗi
    echo strrev("hello world") ;
    echo "<br>";
    //Hàm tìm kiếm văn bản trong chuỗi
    echo strpos("he cau","cau") ;
    echo "<br>";
    //Hàm thay thế văn bản trong chuỗi
    echo str_replace("hi","hee","a hi") ;
    echo "<br>";
    ?>
</body>
</html>