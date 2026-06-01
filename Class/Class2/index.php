<?php 
    class Mobile {
        public $price = 0.0;
        public $title = '';
        public function setPrice($price){
            $this->price = $price;
        }
        public function setTitle($title){
            $this -> title = $title;
        }
        public function getPrice (){
            echo "This is $" . $this -> price;
        }
        public function getTitle(){
            echo "The is $" . $this -> title;
        }
    }

    $Samsung = new Mobile();
    $Xiami = new Mobile();
    $Iphone = new Mobile();

    $Samsung -> setPrice(78.25);
    $Samsung -> setTitle("Samsung");

    $Xiami -> setTitle("Xiame");
    $Xiami -> setPrice(48.2);

    $Iphone -> setTitle("Iphone 14");
    $Iphone -> setPrice(158);

    $Samsung -> getTitle();
    echo"<br>";
    $Samsung -> getPrice();
    echo"<br>";
    $Xiami -> getTitle();
    echo"<br>";
    $Xiami -> getPrice();
    echo"<br>";
    $Iphone -> getTitle();
    echo"<br>";
    $Iphone -> getPrice();

?>