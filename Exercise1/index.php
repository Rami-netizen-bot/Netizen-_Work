<?php 
class Product {
    //Use Constructer to create property when create Object
    public function __construct(
        private int $id,
        private string $name,
        private float $price
    ){}
    //Get Mothod Getter return value 
   public function getId(): int {return $this->id; }
   public function getName(): string {return $this->name; }
   public function getPrice(): float {return $this->price; }
}
class CartItem{
    // Create constructer to store 
    public function __construct(
        private Product $product,
        private int $quantity
    ) {}
    // Get Method Geter return value from constructer
    public function getProduct(): Product{return $this->product;}
    public function getQuantity(): int {return $this->quantity;}
    //Get method function to set quantity
    public function setQuantity(int $quantity):void {
        $this->quantity = $quantity;
    }
    //Get method function to get total price Product
   public function getTotalprice(): float {
        return $this->product-> getPrice() * $this-> quantity;
   }
}


class ShoppingCart{
    // Get store items in array to use key getId easy find
    private array $items = [];
    public function addProduct(Product $product, int $quantity): void{
        // condition if quantity less then 0 or equla to 0 it will show message
        if($quantity <= 0){
            throw new InvalidArgumentException("Quantity is must be greater than 0");
        }
        $id = $product->getId();
        //if items has already it just to add on own item (quantity)
        if (isset($this->items[$id])){
            $currentQty = $this->items[$id]->getQuantity();
            $this->items[$id]->setQuantity($currentQty + $quantity);
            return;
        }
        // if not own it will to create new product
        $this->items[$id] = new CartItem($product, $quantity);
    }
    public function removeProduct(int $product): void{
        unset($this->items[$product]);
    }
    public function getTotal(): float{
        //Initializ value
        $total = 0.0;
        foreach ($this->items as $item){
            $total += $item-> getTotalprice();
            // loop get to array items and call method from Object CartItem 
        }
        return $total;
    }
}

$cart = new ShoppingCart();
$laptop = new  Product(1, "PHP rocket Laptop", 999.99);
$mouse = new Product(2, "Wireless Mouse" , 49.50);

$cart-> addProduct($laptop,1);
$cart-> addProduct($mouse,2);

?>