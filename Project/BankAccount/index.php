<?php 
//BankAccount class with validation and error handling
class BankAccount{
    // Private properties for account holder's name and balance
    private $accountHolder;
    private $balance;

// Constructor to initialize the account with a holder's name and starting balance
    public function __construct($name, $startingBalance){
        $this -> accountHolder = $name;
        $this -> balance = $this -> validateInitialBalance($startingBalance);
    }
    // Validation method for initial balance to ensure it's not negative
    private function validateInitialBalance($amount){
        if($amount < 0){
            throw new Exception("Account Create Error : Starting balance can't be negative");
        }
        // Return the validated initial balance as a float
        return (float)$amount;
    }
    // Method to get the current balance of the account
    public function getBalance(){
        return $this -> balance;
    }
    public function getHolderName(){
        return $this -> accountHolder;
    }
    public function deposit($amount){
        if(!is_numeric($amount) || $amount <= 0){
            throw new Exception("Doposit Error: deposit amount must be a positive number");
        }
        // Update the balance by adding the deposit amount
        $this -> balance += (float)$amount;
        // Return a success message with the deposited amount
        return "Successfully deposit \${$amount}";
    }
    public function withdraw($amount)
    {
        if(!is_numeric($amount)|| $amount <= 0){
         throw new Exception("Withdrawal Error: Withdrawal amount must be a positive number.");
        }
        if($amount > $this -> balance){
            throw new Exception("Withdrawal Error: Insufficient funds. Your current balance is \${$this->balance}.");
        }
        $this -> balance -= (float)$amount;
        return "Successfully withdrew \${$amount}";
    }
}

echo "<h2>Bank Account Example</h2>";
try {
    $account = new BankAccount("Ramy Hassan", 500);
    echo "<p>Account created for " . $account->getHolderName() . " with \${$account->getBalance()}</p>";
    echo "<p style='color: green;'>✔ " . $account->deposit(150.00) . "</p>"; // Balance is now 650
    echo "<p style='color: green;'>✔ " . $account->withdraw(100.00) . "</p>"; // Balance is now 550
    echo "<p><b>Final Authorized Balance: \${$account->getBalance()}</b></p>";
} catch (Exception $e){
    echo "<p style='color: red;'>❌ Caught Error: " . $e->getMessage() . "</p>";
}

echo "<hr><h2>Testing Security Violations</h2>";
try {
    $account2 = new BankAccount("Alice", 100); 
    $account2 -> withdraw(250); // Invalid initial balance
} catch (Exception $e){
    echo "<p style='color: red;'>❌ Caught Expected Error: " . $e->getMessage() . "</p>";
}

try {
    $account2 -> deposit(-50); // Invalid deposit amount

} catch (Exception $e){
    echo "<p style='color: red;'>❌ Caught Expected Error: " . $e->getMessage() . "</p>";
}

?>