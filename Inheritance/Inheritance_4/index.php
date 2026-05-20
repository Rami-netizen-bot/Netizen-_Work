<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php 
    class Fruit{
        public $name;
        public $color;
        function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }
        protected function intro(){
            echo "The fruit is {$this->name} and the color is {$this->color}. <br>";
        }
    }
    class Apple extends Fruit{
        public $wight;
        function __construct($name,$color,$wight){
            $this->name = $name;
            $this->color = $color;
            $this->wight = $wight;
        }

        public function intro()
        {
            echo "The fruit is {$this->name} and the color is {$this->color} and the wight is {$this->wight}. <br>";
        }
    }
    $apple = new Apple("Apple","Red","300g");
    $apple->intro();
    ?>
</body>
</html>