<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Statement</title>
</head>
<body>
    <?php 
    $day = 'Monday';
    if ($day == 'Monday'){
        echo "Today is Monday";
    }
    else if($day == 'Tuesday'){
        echo "Today is Tuesday";
    }
    else if($day == 'Wednesday'){
        echo "Today is Wednesday";
    }
    else if($day == 'Thursday'){
        echo "Today is Thursday";
    }
    else if($day == 'Friday'){
        echo "Today is Friday";
    }
    else if($day == 'Saturday'){
        echo "Today is Saturday";
    }
    else if($day == 'Sunday'){
        echo "Today is Sunday";
    }
    else
        echo 'Invalid Day for this day . <br>';
        echo 'Please enter a valid day of the week . <br>';
    
    ?>
</body>
</html>