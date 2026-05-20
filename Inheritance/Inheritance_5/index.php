<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise one</title>
</head>
<body>
    <?php  
    // Main Class or Super Class or Parent Class
     class Person{
        protected $name;
        protected $age;
        protected $dob;
        public function __construct($name,$age,$dob){
            $this->name = $name;
            $this->age = $age;
            $this->dob = $dob;
        }
     }
     // Sub Class or Child Class or Derived Class
     class FormSubmition extends Person{
        private $email;
        private $phone;
     
        public function __construct($name, $age, $dob, $email, $phone)
        {
            parent::__construct($name, $age, $dob);
            $this-> email = htmlspecialchars($email);
            $this-> phone = htmlspecialchars($phone);
        }
        // Method to render the table row with the person's information
        public function renderTableRow(){
         return "<tr><td>{$this->name}</td><td>{$this->age}</td><td>{$this->dob}</td><td>{$this->email}</td><td>{$this->phone}</td></tr>";
        }
     }
   $submitTable = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // FIX: Store the object in a new variable ($formData) instead of overwriting $_POST
    $formData = new FormSubmition(
        $_POST['name'],
        $_POST['age'],
        $_POST['dob'],
        $_POST['email'],
        $_POST['phone']
    );

    // Now call your method using that new variable
    $submitTable = $formData->renderTableRow(); // or whatever your display method is named
}
    ?>
    <div class="form-container">
        <h2>HTML Form</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label>First Name :</label>
                <input type="text" name="first_name" required value="Kro">
            </div>
            <div class="form-group">
                <label>Last Name :</label>
                <input type="text" name="last_name" required value="IT">
            </div>
            <div class="form-group">
                <label>Date of Birth :</label>
                <input type="text" name="dob" placeholder="DD/MM/YYYY" required value="01/03/1990">
            </div>
            <div class="form-group">
                <label>Email id :</label>
                <input type="email" name="email" required value="it@gmail.com">
            </div>
            <div class="form-group">
                <label>Mobile Number :</label>
                <input type="text" name="mobile" required value="0962268888">
            </div>
            <div class="buttons">
                <button type="submit" name="submit" class="btn btn-submit">Submit</button>
                <button type="reset" class="btn btn-reset">Reset</button>
            </div>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>H/P</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (!empty($submittedRow)) {
                echo $submittedRow;
            } else {
                // Mock default view row matching your image before a fresh submission
                echo "<tr><td>Kro</td><td>IT</td><td>01/03/1990</td><td>it@gmail.com</td><td>0962268888</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #ffffff; }
        .form-container { background-color: #ebeff2; padding: 30px; width: 450px; border-radius: 4px; margin-bottom: 40px; }
        .form-container h2 { margin-top: 0; font-size: 24px; color: #000; }
        .form-group { display: flex; margin-bottom: 12px; align-items: center; }
        .form-group label { width: 150px; font-size: 16px; color: #333; }
        .form-group input { flex-grow: 1; padding: 8px; border: none; border-radius: 6px; background-color: #a6a6a6; color: white; font-size: 14px; }
        .buttons { margin-top: 25px; display: flex; gap: 15px; }
        .btn { padding: 10px 25px; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; font-size: 14px; text-transform: uppercase; }
        .btn-submit { background-color: #a6a6a6; color: black; }
        .btn-reset { background-color: #a6a6a6; color: black; }
        
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 10px; text-align: left; font-size: 14px; }
        th { background-color: #ffffff; }
    </style>
</body>
</html>