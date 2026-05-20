<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Function</title>
</head>
<body>
    <?php 
    // declare(strict_types=1); //strict type declaration

    function sum (int $x, int $y){
        $z = $x + $y;
        return $z;
    }

    echo "5 +10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4) . "<br>";
    ?>
</body>
</html>