<?php

//Base class (Parent class)
class Product{
    public $title;
    public $price;

    public function __construct($title, $price){
        $this-> title = $title;
        $this -> price = $this -> validatePrice($price);
    }

    //Validation methods for title and price
    //Validation method for title
    protected function validateString($value){
    $clean = trim(strip_tags($value));
    if (empty($clean)){
        throw new Exception("Validation Error: Title cannot be empty");
    }
    return $clean;
    }
    //Validation method for price
    protected function validatePrice($value){
        if(!is_numeric($value)|| $value < 0){
            throw new Exception("Validation Error: Price must be a positive number");
        }
        return (float)$value;
    }
    //Method to get product details
    public function getDetails(){
       return "Product: {$this->title} | Price: \${$this->price}";
}
}
//Derived class (Child class) that inherits from Product
class ElectronicProduct extends Product{
    //Additional property for warranty
    public $warrantyMonths;
//Constructor that calls the parent constructor and initializes the warranty property
    public function __construct($title, $price,$warrantyMonths){
        parent::__construct($title, $price);
        //Validate and set the warranty months
        $this -> warrantyMonths = $this -> validateWarranty($warrantyMonths);
    }
    //Validation method for warranty months
    protected function validateWarranty($value){
        // Ensure warranty is a positive integer
        if(!is_int($value) || $value < 0){
            throw new Exception("Validation Error: Warranty must be a positive integer");
        }
        return $value;
    }
    // Override the getDetails method to include warranty information
    public function getDetails(){
        // Call the parent getDetails method and append warranty information
        return parent::getDetails() . " | Warranty: {$this->warrantyMonths} months";
    }
   
}
//Example usage of the ElectronicProduct class with error handling
echo "<h2>Product Example</h2>";
try {
    $laptop = new ElectronicProduct("Laptop", 999.99, 24);
    echo $laptop -> getDetails();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

echo "<h2>Invalid Product Price</h2>";
try{
    $brokenProduct = new ElectronicProduct("Cheap Laptop", -25, 12);
    echo $brokenProduct -> getDetails();
} catch(Exception $e){
    echo "Error: " . $e->getMessage();
}

echo "<h2>Invalid Warranty validateWarranty</h2>";
try{
    $phone = new ElectronicProduct("Iphone", 799.99, "Two Years");
    echo $phone -> getDetails();
} catch(Exception $e){
    echo "Error: " . $e->getMessage();
}


?>