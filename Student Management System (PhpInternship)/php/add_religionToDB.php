<?php
                    $connect_query= mysqli_connect('localhost','root','','php_internship');
                    
                    $add_religion= $_POST['add_religion'];
                    $command="INSERT INTO `religion` (`id`, `religion_name`) VALUES (NULL, '$add_religion');";
                    $query_result= mysqli_query($connect_query,$command);

                    header("Location:http://localhost/PhpInternship/php/student_form.php"); 
?>