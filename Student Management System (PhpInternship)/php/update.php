<?php

$user_id = $_REQUEST['id'];

$connect = mysqli_connect('localhost','root','','php_internship');




if(isset($_POST['name']) || isset($_POST['sic']) || isset($_POST['father_name'])  || isset($_POST['dob']) || isset($_POST['class']) || isset($_POST['category'])
|| isset($_POST['gender'])  || isset($_POST['email'])  || isset($_POST['contact']) || isset($_POST['religion'])  || isset($_POST['address']) || isset($_POST['facilities'])
|| isset($_POST['image'])  )
{
$name        = $_POST['name'];
$sic         = $_POST['sic'];
$father_name = $_POST['father_name'];
$dob         = $_POST['dob'];
$class       = $_POST['class'];
$category    = $_POST['category'];
$gender      = $_POST['gender'];
$email       = $_POST['email'];
$contact     = $_POST['contact'];
$religion    = $_POST['religion'];
$address     = $_POST['address'];

$facilities  = $_POST['facilities'];
$facility=implode(",",$facilities);


$filename    = $_FILES['image']['name'];
$folder      = "images/".$filename;
$temp_name   = $_FILES['image']['tmp_name'];


$command = "UPDATE students_form
            SET `name`='$name', sic='$sic', father_name='$father_name', dob='$dob', class='$class',
                                     category_id= '$category', gender='$gender', email='$email',contact='$contact',
                                     religion_id='$religion', `address`='$address',facilities_id='$facility',
                                     `image`='$folder' 
                                     WHERE id='$user_id'";
$result= mysqli_query($connect,$command);     


// $sql = "UPDATE students_form\n"

//     . "SET name=\'updated name\' \n"

//     . "WHERE id=\'37\'";

if($result)
{
    echo 'DATA UPDATED SUCCESSFULLY';
    // header("Location:http://localhost/PhpInternship/php/users.php");
}
else
{
    echo 'Not Updated';
    // header("Location:http://localhost/PhpInternship/php/edit.php");

}


}

else
{
    echo 'cannot retrive data';
   // header("Location:")
}




?>