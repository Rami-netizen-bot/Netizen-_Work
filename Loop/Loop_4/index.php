<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Four</title>
</head>
<body>
    <?php 
    echo "Foreach Loop" ;
    $capitals = [
        'Turkey' => 'Ankara',
        'Germany' => 'Berlin',
        'France' => 'Paris',
        'Italy' => 'Rome',
        'Spain' => 'Madrid'
        
    ];
    foreach ($capitals as $country => $capital){
        echo "The capital of $country is $capital <br>";
    }
    ?>
</body>
</html>