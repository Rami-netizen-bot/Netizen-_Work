<?php 
class fruit{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this -> name = $name;
        $this -> color =$color;
    }
    protected function intro(){
        echo "The fruit is {$this -> name } and the color is {$this -> color} .";
    }

}
class Apple extends fruit{
    public $widget;
  
    public function __construct($name, $color , $widget)
    {
       $this -> name = $name;
       $this -> color = $color;
       $this -> widget = $widget;
    }
    #[Override]
    public function intro()
    {
        echo "The fruit is {$this -> name} the color is {$this -> color} and the weigth is {$this -> widget} grams. ";
    }
    public function message(){
        echo "I am a Apple!";
    }
}

$apple = new Apple("Apple", "Red", "100");
$apple -> intro();
echo "<br>";
$apple -> message();


?>