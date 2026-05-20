<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Seven</title>
</head>
<style>
    img{
        width: 300px;
        height: 200px;
        margin:  10px;
        float: left;
    }
</style>
<body>
    <?php 
    $image = array('1.jpg', '2.jpg', '3.jpg');
    foreach($image as $val_image){
        echo "<img src ='$val_image'/>";
    }
    ?>
</body>
</html>