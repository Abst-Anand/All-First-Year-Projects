<?php

session_start();
$_SESSION['SIC_No']   = $SIC_No   = $_POST['SIC_No'];  
$_SESSION['password'] = $password = $_POST['password'];
  
    
// echo $_POST['SIC_No'];
    
    $conn = new mysqli('localhost','root','','php_internship');

     if($conn->connect_error)
    {
          die('connection failed:'.$conn->connect_error);
    }
    else
    {

    $query= "SELECT * from users_table where SIC_No='$SIC_No' && password= '$password' ";

    $result = mysqli_query($conn,$query);
    $count  = mysqli_num_rows($result);

    if($count > 0)
    {
        
          
       // echo "LogIn Success!";
        header("Location:http://localhost/PhpInternship/php/loginUsingDB.php");  
        //open homepage
    }
    else
    {
        echo "Invalid Credentials";
    }
  
   }



?>