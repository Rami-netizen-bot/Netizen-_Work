<?php 
interface DiscountStrategy{
    public function apply(float $price): float;
}
class ChrismastDiscount implements DiscountStrategy {
    #[Override]
    public function apply(float $price): float
    {
        return $price *5 ;
    }
}
class MemberDiscount implements DiscountStrategy{
    #[Override]
    public function apply(float $price): float
    {
       return $price * 0.8;
    }
}
class Nodiscount implements DiscountStrategy {
    #[Override]
    public function apply(float $price): float
    {
       return $price;
    }
}
class ShoppingCart {
    private DiscountStrategy $discount;
    public function __construct(DiscountStrategy $discount)
    {
     $this->discount = $discount;  
    }
    public function calculateTotal(float $price):float{
        return $this->discount->apply($price);
    }
}
$price = 100.0;
$originalPrice = 100.0;
$chrismast = new ChrismastDiscount();
$cart = new ShoppingCart($chrismast);
echo "តម្លៃពេលបុណ្យណូអែល" . $cart->calculateTotal($price) . "\n";

$member =  new MemberDiscount();
$cart = new ShoppingCart($member);
echo "តម្លៃសម្រាប់សមាជិក៖ " . $cart->calculateTotal($price) . "\n";


$cart1 = new ShoppingCart(new ChrismastDiscount());
echo "តម្លៃបុណ្យណូអែល: $" . $cart1->calculateTotal($originalPrice) . "\n";
$cart2 = new ShoppingCart(new MemberDiscount());
echo "តម្លៃសម្រាប់សមាជិក: $" . $cart2->calculateTotal($originalPrice) . "\n";
$cart3 = new ShoppingCart(new Nodiscount());
echo "តម្លៃធម្មតា: $" . $cart3->calculateTotal($originalPrice) . "\n";