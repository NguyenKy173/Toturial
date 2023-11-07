<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //while
    echo "<h3>Vòng lặp while</h3>";
    $x = 1;
    while ($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }
    ?>

    <?php
    //do..while
    echo "<h3>Vòng lặp do... while</h3>";
    $x = 1;
    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);
    ?>

    <?php
    //for
    echo "<h3>Vòng lặp for</h3>";
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
    ?>

    <?php
    //foreach
    echo "<h3>Vòng lặp foreach</h3>";
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo "$value <br>";
    }
    ?>

    <?php
    //break
    echo "<h3>break</h3>";
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
    }
    ?>

    <?php
    //continur
    echo "<h3>continue</h3>";
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            continue;
        }
        echo "The number is: $x <br>";
    }
    ?>
</body>

</html>