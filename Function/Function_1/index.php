<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function one</title>
</head>
<body>
    <?php 
    echo 'Return Function <br>';
    function addFunciton($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    }
    $return_Value = addFunciton(10, 20);
    echo "Returned Value is $return_Value";
    ?>
</body>
</html>