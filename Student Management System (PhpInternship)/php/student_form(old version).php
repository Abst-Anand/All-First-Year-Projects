<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/student_form.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <title>Student Form</title>
</head>

<body>
    <div class="form-head">
        <h3>Student's Portal</h3>
    </div>
    <form action="submit_student_form.php" method="POST" enctype="multipart/form-data">
        <div class="form-boy">
            <div class="form-goup">
                <form>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label ">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">SIC No.</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="sic">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Father's Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="father_name">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Date of Birth</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="dob">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Class</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="class">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Contact Number</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="contact">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="address">
                        </div>
                    </div>

                    <fieldset class="row mb-3 " style="width: 99%;">
                        <label for="formFileMultiple"
                            class="form-label bg-success p-2 text-dark bg-opacity-50">Gender</label>
                        <div class="bg-light">
                            <div class="col-sm-10 offset-sm-2 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios1"
                                        value="Male" checked>
                                    <label class="form-check-label" for="gridRadios1">Male</label>

                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios1"
                                        value="Female" checked>
                                    <label class="form-check-label" for="gridRadios1">Female</label>

                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios1"
                                        value="Transgender" checked>
                                    <label class="form-check-label" for="gridRadios1">Transgender</label>

                                </div>
                            </div>
                        </div>
                    </fieldset>






                    <fieldset class="row mb-3 " style="width: 99%;">
                        <label for="formFileMultiple"
                            class="form-label bg-success p-2 text-dark bg-opacity-50">Category</label>
                        <div class="bg-light">
                            <div class="col-sm-10 offset-sm-2 ">
                                <?php
                    $connect_query= mysqli_connect('localhost','root','','php_internship');
                    $command="SELECT * FROM category";
                    $query_result= mysqli_query($connect_query,$command);

                                  while($result=mysqli_fetch_array($query_result))
                                  {
                                  echo '<div class="form-check">
                                  <input class="form-check-input" type="radio" name="category" id="gridRadios1"
                                  value= "$category"><label class="form-check-label" for="gridRadios1" >';

                                  echo $result['category_name'];
                                   $category = $result['category_name'];

                                  echo '</label></div>';
                                  }
                              
                                ?>
                                <a href="add_category.php">Add your category</a>

                            </div>
                        </div>
                    </fieldset>
            </div>
            <fieldset class="row mb-3 " style="width: 99%;">
                <label for="formFileMultiple" class="form-label bg-success p-2 text-dark bg-opacity-50">Religion</label>
                <div class="col-sm-14 bg-light">
                    <div class="col-sm-10 offset-sm-2">

                        <?php
            $connect_query= mysqli_connect('localhost','root','','php_internship');
            $command="SELECT * FROM religion";
            $query_result= mysqli_query($connect_query,$command);
                    
                       while($result=mysqli_fetch_array($query_result))
                       {
                               echo '<div class="row mb-3">
                                     
                                     <div class="form-check form-check-line  ">
                                    <input class="form-check-input" type="radio" id="gridCheck1" name="religion" value="<?php echo $religion;?>">
                                    <label class="form-check-label" for="gridCheck1">';

                                    echo $result['religion_name'];
                                    $religion =$result['religion_name'];
                                       

                               echo '</label></div></div>';
                       }                       
                    
                    ?>

                        <a href="add_religion.php">Add your Religion</a>
                    </div>
                </div>
            </fieldset>
            <div class="row mb-3 " style="width: 99%;">
                <label for="formFileMultiple" class="form-label bg-success p-2 text-dark bg-opacity-50">Facilities
                    Availed</label>
                <div class="bg-light">
                

                    <?php
           $connect_query= mysqli_connect('localhost','root','','php_internship');
           $command="SELECT * FROM facilities";
           $query_result= mysqli_query($connect_query,$command);
                   
                      while($result=mysqli_fetch_array($query_result))
                      {
        
                               echo '<div class="col-sm-10 offset-sm-2">
                                     <div class="form-check">                    
                                     <input class="form-check-input" type="checkbox" id="gridCheck1" name="facilities" value="">
                                     <label class="form-check-label" for="gridCheck1">';
                                     echo $result['facility_name'];
                   
                                echo '</label></div></div>';
                      }
        ?>
                </div>

                </div>
                <div class="row mb-3" style="width: 99%;">
                    <label for="formFileMultiple" class="form-label bg-success p-2 text-dark bg-opacity-50"
                        name="image">Upload Pic</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="image" type="file" id="formFileMultiple" multiple style="margin-left: 35%;width:50%;">
                    </div>
                </div>

                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Sign Up</button>
                <p>Already Registered? <a href="student_signin.php">Sign In</a></p>
    </form>
    </div>
    </div>
</body>

</html>