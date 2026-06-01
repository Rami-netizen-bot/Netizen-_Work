<?php 
class Person2{
    private $age = array();
    public function setAge($age = array()){
        if (!is_array($age)){
            echo "Ivalid age format. Pleae provide an array fo ages.";
            return;
        }
        foreach ($age as $a ){
            if ($a < 0){
                echo "Age cannot be negative." ;
                return;
            }
        }
        $this-> age = $age;
    }
    public function getAge(){
        return implode(",", $this->age);
    }
}
$person = new Person2();
$person -> setAge([25,30,35]);
echo "Age : " . $person-> getAge() . "<br>";
?>