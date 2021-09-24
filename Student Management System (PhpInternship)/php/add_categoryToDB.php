<?php
                    $connect_query= mysqli_connect('localhost','root','','php_internship');
                    
                    $add_category= $_POST['add_category'];
                    $command="INSERT INTO `category` (`id`, `category_name`) VALUES (NULL, '$add_category');";
                    $query_result= mysqli_query($connect_query,$command);

                    header("Location:http://localhost/PhpInternship/php/student_form.php"); 
?>