<?php 
class BankAccount{
    //Get Property
    private float $balance;
    private array $transactionHistory = [];
    //Create constructer and Check validation
    public function __construct(float $initialBalance)
    {
        //check validation it not negative
      if($initialBalance < 0){
        throw new InvalidArgumentException("Initial balance cannot be negative");
      }
      //Initialization value
      $this->balance = $initialBalance;
      $this->transactionHistory[] = "Account Opened with initail balance: $" . number_format($initialBalance,2);
    }
    public function deposit(float $amount): void {
        if ($amount <= 0){
            throw new InvalidArgumentException("Deposit amount must be positive");
        }
        $this->balance += $amount;
        $this->transactionHistory[] = "Deposited $"  . number_format($amount,2);
    }
    public function withdraw (float $amount):void {
        if ($amount <= 0){
            throw new InvalidArgumentException("Withdrawal amount must be positive");
        }
        if($amount > $this->balance){
            throw new Exception("Insufficient fund for withdrawal of $" . number_format($amount,2)) ;
        }
        $this->balance -= $amount;
        $timestamp = date('Y-m-d H:i:s');
        $this->transactionHistory[] = "withdraw $" . number_format($amount,2);
    }
    //Method getBalance Retrun value
    public function getBalance(): float {
        return $this->balance;
    }
    //Method getHistory get Return transaction History
    public function getHistory(): array{
        return $this->transactionHistory;
    }
}

try{
    $account = new BankAccount(100.00);
    $account -> deposit(50.50);
    $account -> withdraw(30.00);

    foreach ($account-> getHistory() as $log){
        echo $log . "\n";
    }
    echo "Current Balance: $" . $account-> getBalance() . "\n";
} catch (Exception $e){
    echo "Error :" . $e->getMessage();
}

?>