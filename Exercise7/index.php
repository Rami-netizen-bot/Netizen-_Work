<?php 
interface Observer {
    public function update(string $message): void;
}
interface Subject {
    public function attach(Observer $observer):void;
    public function notify(): void;
}
 class Product implements Subject{
    private array $observers =[];
    private string $status = "In Stock";

    public function __construct()
    {
      
    }

    #[Override]
    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }
    public function setStatus(string $status): void{
        $this->status =$status;
        $this->notify();
    }
    #[Override]
    public function notify(): void
    {
       foreach($this->observers as $observer){
        $observer->update("Product Status change to : " .$this->status);
       }
    }
 }

 class EmailAlert implements Observer{
    #[Override]
    public function update(string $message): void
    {
        echo "Sending Email: " . $message . "\n";
    }
 }
$iphone = new Product();
$user1 = new EmailAlert();
$user2 = new EmailAlert();


$iphone->attach($user1);
$iphone->attach($user2);

$iphone->setStatus("Out of Stock!");







?>