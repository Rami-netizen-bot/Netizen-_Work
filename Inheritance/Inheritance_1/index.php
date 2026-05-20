<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php 
    // super class or parent class
    class Test {
        public function first(){
            echo "Hello my main class <br>  ";
        }
    }
    // sub class or child class
    class Sample extends Test{
        public function second(){
            echo "This is sub class <br>";
        }
     }
    $test = new Sample();
    $test->first();
    $test->second();
    
     ?>
</body>
</html>