<?php
session_start();

$connection = mysqli_connect('localhost', 'root', '','php_internship');

$_SESSION['name']        = $name        = $_POST['name'];
$_SESSION['sic']         = $sic         = $_POST['sic'];
$_SESSION['father_name'] = $father_name = $_POST['father_name'];
$_SESSION['dob']         = $dob         = $_POST['dob'];
$_SESSION['class']       = $class       = $_POST['class'];
$_SESSION['category']    = $category    = $_POST['category'];
$_SESSION['gender']      = $gender      = $_POST['gender'];
$_SESSION['email']       = $email       = $_POST['email'];
$_SESSION['contact']     = $contact     = $_POST['contact'];
$_SESSION['religion']    = $religion    = $_POST['religion'];
$_SESSION['address']     = $address     = $_POST['address'];
$_SESSION['password']    = $password    = $_POST['password'];

$facilities  = $_POST['facilities'];
$facility=implode(",",$facilities);
$_SESSION['facilities']  = $facility;

$_SESSION['image']       = $filename    = $_FILES['image']['name'];
$_SESSION["folder"]      = $folder      = "images/".$filename;
$temp_name               = $_FILES['image']['tmp_name'];
//echo $temp_name;
//echo '<br>';
//echo $folder;
move_uploaded_file($temp_name,$folder);
//echo "<img src='$folder ' height='100' width='100'/>";
if(isset($_POST['encrypt_switch']))
{
    $password= password_hash($_POST['password'], PASSWORD_BCRYPT); 
}

$insert_query = "INSERT INTO students_form  
                    (`name`,sic,father_name,dob,class,category_id,gender,email,contact,religion_id,`address`,`password`,facilities_id,`image`)
                 VALUES ('$name','$sic','$father_name','$dob','$class','$category','$gender','$email','$contact','$religion','$address','$password','$facility','$folder')";


$result=mysqli_query($connection,$insert_query);

    //echo "Registration Successful";
        
        header("Location:http://localhost/PhpInternship/php/student_interface.php");  
 

?>