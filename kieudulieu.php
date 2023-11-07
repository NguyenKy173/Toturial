<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //var_dump trả về kiểu dữ liệu và giá trị
    //Đối tượng PHP
    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function Mes()
        {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }
    $myCar = new Car("black", "Vovlo");
    echo $myCar-> Mes(); 
    echo "<br>";
    $myCar = new Car("red","BWN");
    echo $myCar-> Mes(); 
    echo "<br>";
    ?>
    <?php
    //Giá trị null của PHP
    $i ="heloo";
    $i =null;
    var_dump($i);
    ?>
</body>

</html>