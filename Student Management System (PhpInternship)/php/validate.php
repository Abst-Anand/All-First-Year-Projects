
<?php
session_start();


$_SESSION['firstname']=$_POST['firstname'];            //setting session variables 
$_SESSION['lastname']=$_POST['lastname'];
$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];
$_SESSION['mobile_number']=$_POST['mobile_number'];
/*
echo $_SESSION['firstname'];
echo '<br>';
echo $_SESSION['lastname'];
*/


if(isset($_SESSION['email']))                                                        
{
    if($_SESSION['email']=='admin@php' && $_SESSION['password']=='123')           //checking form credentials
    {
       header("Location:http://localhost/PhpInternship/php/userInterface.php");         //redirects user 
    }
    else
    {
      header("Location:http://localhost/PhpInternship/php/login.php");                  //redirects user 
    }

}


/* 
echo '<pre>';
print_r($_REQUEST);
echo '<br>';

if($_POST['email']=='admin@php' && $_POST['password']=='123')
{
    header("Location:http://localhost/PhpInternship/php/bootstrapPhp.php");
}
else
{
    echo '<h3>Wrong Credentials</h3>';
    header("Locaton:http://localhost/PhpInternship/php/form.php");  //not redirecting to form page
}
*/
?>
