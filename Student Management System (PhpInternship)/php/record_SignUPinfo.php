<?php
include ("validateDB.php");
$connection_query = mysqli_connect('localhost','root','','php_internship');

if(isset($_POST['submit']))
{
    session_start();
    $SIC_No = $_POST['SIC_No'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $password = $_POST['password'];




$result= mysqli_query($connection_query ,"INSERT into users_table (SIC_No,email,mobile_number,password) VALUES('$SIC_No','$email','$mobile_number','$password')");

if($result)
//echo "Data Inserted Successfully";
header("Location:http://localhost/PhpInternship/php/userInterface.php"); 
else
echo "failed";
}

?>


