<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Statement</title>
</head>
<body>
  <?php 
    $i =10;
    if ($i = 10){
        if ($i < 15)
            echo "i is smaller than 15";
       if ($i < 12)
        echo "i is smaller than 12 too";
    else
        echo "i is greater than 15";
    }
  ?>
</body>
</html>