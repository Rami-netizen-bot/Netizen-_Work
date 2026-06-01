<?php 
interface Flyble{
    public function fly();
}
class Bird implements Flyble{
    #[Override]
    public function fly()
    {
      echo "The bird is flying. <br>";
    }
}
class Drone implements Flyble {
    #[Override]
    public function fly()
    {
        echo "The drone is flying . <br> ";

    }
}

 function makkItfly(Flyble $flyble){
    $flyble -> fly();
 }

 makkItfly(new Bird());
 makkItfly(new Drone());



?>