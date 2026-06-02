<?php
//Abstract class and inheritance example with validation and error handling
abstract class Notification
{
    //Common properties for all notifications
    public $reciptient;
    public $message;
    //Constructor to initialize the notification with recipient and message
    public function __construct($reciptient, $message)
    {
        //Validate recipient and message using the validateString method
        $this->reciptient = $reciptient;
        $this->message = $message;
    }
    protected function validateString($value, $fieldName)
    {
        $clean = trim(strip_tags($value));
        if (empty($clean)) {
            throw new Exception("Validation Error: {$fieldName} cannot be empty");
        }
        return $clean;
    }
    abstract public function send();
}
//Derived class for Email notifications that extends the base Notification class
class EmailNotification extends Notification
{
    public function __construct($reciptient, $message)
    {
        parent::__construct($reciptient, $message);
        //Extra validation for email format
        if (!filter_var($reciptient, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Validation Error: '{$this->reciptient}' is not a valid email address.");
        }
    }
    //
    public function send()
    {
        return "Connecting to Mail Server... Sending Email to <b>{$this->reciptient}</b>: \"{$this->message}\"";
    }
}
//Derived class for SMS notifications that extends the base Notification class
class SMSNotification extends Notification
{
    //Constructor that calls the parent constructor and adds phone number validation
    public function __construct($reciptient, $message)
    {
        parent::__construct($reciptient, $message);
        if (!preg_match('/^\+?[0-9]{10,15}$/', $this->reciptient)) {
            throw new Exception("Validation Error: '{$this->reciptient}' is not a valid phone number.");
        }
    }
    //Implementation of the abstract send method for SMS notifications
    public function send()
    {
        return "Connecting to Telecom Gateway... Sending SMS to <b>{$this->reciptient}</b>: \"{$this->message}\"";
    }
}

echo "<h2>Notification System Example</h2>";

//Test Case 11 : Valid Email and SMS

try {
    $services = [new EmailNotification("dev@example.com", "Your server has update successfully"), new SMSNotification("+1234567890", "Alert : Security locale_get_display_name")];
    foreach ($services as $Notification) {
        echo "<p style='color: green;'>✔ " . $Notification->send() . "</p>";
    }
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Error: " . $e->getMessage() . "</p>";
}

//Test Case 2 : Attempt to create the abstract class directly (should cause an error)

try {
    echo "<p>Constructing a raw base Notification is blocked by PHP design rules.</p>";
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ System Rule Blocked It: " . $e->getMessage() . "</p>";
}

// Test Case 3 : Invalid Email Pattern Validation
try {
    $badEmail = new EmailNotification("not-an-email", "Hi there!");
    echo $badEmail->send();
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Caught Expected Error: " . $e->getMessage() . "</p>";
}

// Test Case 4 : Empty Message Content Validation
try {
    $badSMS = new SMSNotification("+1234567890", "   ");
    echo $badSMS->send();
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Caught Expected Error: " . $e->getMessage() . "</p>";
}
