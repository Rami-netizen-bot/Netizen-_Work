<?php 
    class Books {
        public function name(){
            echo "Method 1";
        }
        public function price(){
            echo "900 res";
        }

    }

    // Create object
    $obj = new Books();
    $obj -> name();
    $obj -> price();
?>