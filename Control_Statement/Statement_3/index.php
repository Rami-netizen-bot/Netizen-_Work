<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Statement</title>
</head>
<body>
    <?php
    $score = 89;
    if($score >= 85 && $score <= 100)
        echo "Grade A";
    else if($score >= 70 && $score < 85)
        echo "Grade B";
    else if($score >=50 && $score < 70)
        echo "Grade C";
    else
        echo "Grade F";
     ?>
</body>
</html>