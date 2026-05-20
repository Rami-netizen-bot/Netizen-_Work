<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php 
    class fruit{
        public $name;
        public $color;
        function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }
        public function intro(){
            echo "The fruit is {$this->name} and the color is {$this->color}. <br>";
        }
    }

    //Inherit from the fruit class
    class Apple extends fruit{
        public function message(){
            echo "I am a apple. <br>";
        }
     }
     $apple = new Apple("Apple","Red");
     $apple->intro();
     $apple->message();
    
    ?>
</body>
</html>