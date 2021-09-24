<?php


session_start();
$_SESSION['sic']      = $sic      = $_POST['sic'];  
$_SESSION['password'] = $password = $_POST['password'];

$connection_query = mysqli_connect('localhost','root','','php_internship');



$query= "SELECT * from students_form where sic='$sic' && password= '$password' ";

$result = mysqli_query($connection_query,$query);
$count  = mysqli_num_rows($result);

if($count > 0)
{
    
      
    //echo "LogIn Success!";
    header("Location:http://localhost/PhpInternship/php/student_interface.php");  
    //open homepage
}
else
{
    //header("Location:http://localhost/PhpInternship/php/student_signin.php");  
    echo "Invalid Credentials";
}





?>