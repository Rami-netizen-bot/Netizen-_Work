<?php 
class FileHaddler{
    private $filhaddle;
    private $filename;

    public function __construct($filename)
    {
       $this -> filename = $filename;
       echo "Constructing the object with file name : " . $this-> filename . "<br>";
       $this -> filhaddle = true;
    }
    public function writeData ($data){
        if ($this-> filhaddle){
            echo "Writing data to the file : " . $this -> filename . "<br>";
            echo "Data:" . $data . "<br>";
        }
    }
    public function __destruct()
    {
      echo "Destructiing the object and closing the file : " . $this-> filename . "<br>";
      $this -> filhaddle = false;
    }
}
echo "---------start Script -------------<br>";
$filhaddle = new FileHaddler("Exmple.txt");
$filhaddle -> writeData("Hello world!");
$filhaddle -> writeData("Testing destructer in PHP");
echo "------Script End--------<br>";
?>