<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Eight</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="col-6">
                    <form action="" method="post">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php 
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        foreach($name as $val){
            echo '<h1>'.$val.'</h1>';
        }
    }
    
    ?>
</body>
</html>