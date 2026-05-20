<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Three</title>
</head>
<body>
    <?php 
    $bruh_price = 5;
    echo '<table border="1" align="center">';
    echo '<tr><th>Quantity</th><th>Price</th><th>Price</th></tr>';
    for ($counter = 10; $counter <= 100; $counter +=10){
        echo '<tr><td>' . $counter . '</td>';
        echo '<td>' . $bruh_price * $counter . '</td></tr>';
    }
     ?>
</body>
</html>