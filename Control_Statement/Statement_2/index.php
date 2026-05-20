<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Statement 2</title>
</head>
<body>
    <?php 
    $overtime = 60;
    if($overtime <= 50){
        $pay_amt =1200;
        $medical = 1000;
        echo "Pay Amount : $pay_amt : Medical : $medical";
    }
    else{
        $pay_amt = 2000;
        $medical = 1500;
        echo "Pay Amount : $pay_amt : Medical : $medical";
    }

?>
</body>
</html>