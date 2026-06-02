<?php
//Interface example for a delivery system
interface Transport
{
    //Method signature for deliver, to be implemented by classes that implement this interface
    public function deliver();
}
//Concrete class for Truck delivery that implements the Transport interface
class TruckDelivery implements Transport
{
    private $licensePlate;
    public function __construct($licensePlate)
    {
        if (empty($licensePlate)) {
            throw new Exception("Factory Error: License plate cannot be empty");
        }
        $this->licensePlate = $licensePlate;
    }
    //Implementation of the deliver method for Truck delivery
    public function deliver()
    {
        return "Delivering cargo by land via Truck [License: {$this->licensePlate}].";
    }
}
//Concrete class for Ship delivery that implements the Transport interface
class ShipDelivery implements Transport
{
    private $vesselName;
    public function __construct($vesselName)
    {
        if (!preg_match('/^[a-zA-Z0-9\s]+$/', $vesselName)) {
            throw new Exception("Factory Error: Vessel name must be alphanumeric");
        }
        $this->vesselName = $vesselName;
    }
    public function deliver()
    {
        return "Delivering cargo by sea via Cargo Ship [Name: {$this->vesselName}].";
    }
}
class DeliveryFactory
{
    public static function createDelivery($type, $identifier)
    {
        switch (strtolower($type)) {
            case 'land':
                return new TruckDelivery($identifier);
            case 'sea':
                return new ShipDelivery($identifier);
            default:
                throw new Exception("Factory Error: Unknown delivery type '{$type}'.");
        }
    }
}

echo "<h2>The Factory Method Pattern</h2>";

// Test Case 1 : Successful Truck Delivery Operation

try{
    $delivery1 = DeliveryFactory::createDelivery('labd' , 'ABC-1234');
    $delivery2 = DeliveryFactory::createDelivery('sea', '123456789');
    echo "<p style='color: green;'>✔ " . $delivery1->deliver() . "</p>";
    echo "<p style='color: green;'>✔ " . $delivery2->deliver() . "</p>";
} catch (Exception $e){
    echo "<p style='color: red;'>❌ Error: " . $e->getMessage() . "</p>";
}

echo "<h2>Testing Factory Gatekeeper Validation</h2>";

try {
    $brokenType = DeliveryFactory::createDelivery('air', 'Flight-001');

} catch (Exception $e){
    echo "<p style='color: red;'>❌ Caught Expected Error: " . $e->getMessage() . "</p>";
}
 try {
    $brokenShip = DeliveryFactory::createDelivery('sea', 'invalid-mmsi-code');
 } catch (Exception $e){
    echo "<p style='color: red;'>❌ Caught Expected Error: " . $e->getMessage() . "</p>";
 }

?>
