<?php

use Fruit as GlobalFruit;

class fruit{
    // parent class
    public $name;
    public $color;

    public function __construct($name,  $color){ // constructer
        $this-> name = $name;
        $this -> color = $color;
    }
    protected function intro(){
        echo "The fruite is {$this-> name} and the color is {$this->color}.";
    }
}
//sub classs or child class

class Apple extends fruit {
    public function message(){
        echo "I am a Apple";
        $this -> intro();
    }
}
class Mango extends fruit {
    public function massage(){
        echo "I am a Mango";
        $this -> intro();
    }
}



?>