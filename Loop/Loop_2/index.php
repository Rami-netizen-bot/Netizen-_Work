<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Two</title>
</head>
<body>
    <?php 
    echo "Case 1 <br>";
    for ($x =20 ; $x >=1 ; $x--){
        echo "The number is: $x <br>";
    }
     ?>
     <?php 
          echo "Case 2 <br>";
     for($x =20; $x>=1; $x-=2) {
        echo "The number is: $x <br>";
     }

     ?>
     <?php 
     echo "Case 3 <br>";
     for($x=20; $x >=1; $x-=3){
        echo "The number is: $x <br>";
     }
     ?>
</body>
</html>