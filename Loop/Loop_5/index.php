<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Five</title>
</head>
<body>
    <?php 
    $a =  array();
    $a[0][0] = "Ramy";
    $a[0][1] = "Ali";
    $a[1][0] = "Ahmed";
    $a[1][1] = "Yasser";
    foreach ($a as $e1){
        foreach ($e1 as $e2){
            echo "$e2 <br>";
        }
    }
    ?>
</body>
</html>