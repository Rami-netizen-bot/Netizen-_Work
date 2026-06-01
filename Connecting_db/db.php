<?php 
$con = mysqli_connect("localhost", "root" , "", "crud_db");

if (!$con){
    die("Connection filded" . mysqli_connect_error());

}
echo "Connect Succesfully";
?>