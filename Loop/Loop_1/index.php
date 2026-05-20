<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop one</title>
</head>
<body>
    echo "Case 1 <br>";
    <?php 
    for ($x= 1; $x <= 20; $x++) {
        echo "The number is: $x <br>";
    }
    ?>
    echo "Case 2 <br>";
     <?php 
     for ($x =1; $x <=20 ; $x+=2){
        echo "The number is: $x <br>";
     }
      ?>
    <?php 

    for ($x =2; $x <=20; $x+=2){
        echo "The number is: $x <br>";
    }
     ?>
     echo "Case 3 <br>";
     <?php 
     for ($x =2; $x <=20 ; $x+=3){
        echo "The number is: $x <br>";
     }
      ?>
</body>
</html>