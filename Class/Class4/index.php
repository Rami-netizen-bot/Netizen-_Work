<?php 
     class Test {
        public function  first (){
            echo "Hello this Main Class";
        }
     }
     class Sample extends Test {
        public function second(){
            echo "hello  this is Sub class";
        }
     }
     $test = new Sample;
     $test -> first();
     echo "<br>";
     $test -> second();

?>