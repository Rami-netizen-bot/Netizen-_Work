<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Six</title>
    <style>
        .box{
            color: white;
            width: 300px;
            height: 200px;
            background-color: red;
            font-size: 30px;
            text-align: center;
            line-height: 200px;
            margin: 10px;
            float: left;
        }
    </style>
</head>
<body>
    <?php 
    $colors = ["red", "green", "blue"];
    for($i = 0; $i < count($colors); $i++){
        echo "<div class='box' style = 'background-color: $colors[$i];'>
        " . ($i + 1) . "</div>";
    }
     ?>
</body>
</html>