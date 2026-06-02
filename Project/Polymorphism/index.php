<?php
class Payment
{
    public $amount;

    public function __construct($amount)
    {
        $this->amount = $this->validateAmount($amount);
    }

    protected function validateAmount($value)
    {
        if (!is_numeric($value) || $value < 0) {
            throw new Exception("Validation Error: Amount must be a positive number");
        }
        return (float)$value;
    }
    public function processPayment()
    {
        return "Processing payment of \${$this->amount}";
    }
}
class PayPalPayment extends Payment
{
    public $email;

    public function __construct($amount, $email)
    {
        parent::__construct($amount);
        $this->email = $email;
    }
    private function validateEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Validation Error: Invalid email format");
        }
        return $email;
    }
    public function processPayment()
    {
        return "Successfully logged into PayPal as <b>{$this->email}</b> and charged <b>\${$this->amount}</b>.";
    }
}

class CreditCardPayment extends Payment
{
    public $cardNumber;
    public function __construct($amount, $cardNumber)
    {
        parent::__construct($amount);
        $this->cardNumber = $cardNumber;
    }
    private function validateCardNumber($cardNumber)
    {
        $cleanNumber = str_replace('', '', $cardNumber);
        if (!is_numeric($cleanNumber) || strlen($cleanNumber) < 16) {
            throw new Exception("Validation Error: Invalid card number");
        }
        return "***-****-****-" . substr($cleanNumber, -4);
    }
    public function processPayment()
    {
        return "Securely charged <b>\${$this->amount}</b> to Credit Card ending in <b>{$this->cardNumber}</b>.";
    }
}
$transsactions = [
    new PayPalPayment(150.00, "user@gmail.com"),
    new CreditCardPayment(200.00, "1234-5678-9012-3456")
];

echo "<h2>Payment Processing</h2>";
foreach ($transsactions as $transaction){
    echo "<p>{$transaction->processPayment()}</p>";
}
echo "<h2>Invalid Payment Example</h2>";
try{
    $badPaypal = new PayPalPayment(10.00, "invalid-email-addcslashes");
} catch (Exception $e){
   echo "<p style='color: red;'> Caught Error: " . $e->getMessage() . "</p>";
}

try{
    $badCard = new CreditCardPayment(50.00, "1234-5678");
} catch (Exception $e){
    echo "<p style='color: red;'> Caught Error: " . $e->getMessage() . "</p>";
}


?>