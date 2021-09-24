<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="../css/bt.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Register Yourself !</title>
    <style>
        .form-head
         {
          background-color:gb(186, 186, 233);
          padding: 2%;
          font-weight: 800;
          font-size: larger;
         }

    </style>



</head>



<body>

<!--SIDEBAR-->
<div class="form-head bg-success bg-opacity-10">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2">
  <div class="container-fluid mb-2">
    <a class="navbar-brand" href="#"><h3>Student's Portal</h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
      </ul>
      <form class="d-flex">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <button class="btn btn-outline-success" type="button" onclick="window.location.href='users.php'" taget="new">Users</button>
        <button class="btn btn-outline-success" type="submit">JoinUs</button>
      </form>
    </div>
  </div>
</nav>

    </div>


<!--SIDEBAR END-->
    <div class="container bg-success p-2 text-dark bg-opacity-10">
    <h4 style="text-align: center;padding:2%;margin-bottom:4%;">Registration Form</h4>
        <form action="submit_student_form.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

            <div class="form-floating mb-3 ">
                <input type="text" class="form-control" id="name" name="name" placeholder="nameexample" required>
                <label for="name">Name</label>

                    <div class="invalid-feedback" >
                        Please Enter Your Name
                    </div>                
            </div>


            <div class="form-floating mb-3 ">
                <input type="text" class="form-control" id="sic" name="sic" placeholder="sicexample" required>
                <label for="sic">SIC Number</label>

                    <div class="invalid-feedback" >
                        Please Enter Your SIC Number
                    </div> 
            </div>


            <div class="form-floating mb-3 ">
                <input type="text" class="form-control" id="fname" name="father_name" placeholder="namef" required>
                <label for="fname">Father's Name</label>

                    <div class="invalid-feedback" >
                        Please Enter Your Father's Name
                    </div> 
            </div>


            <div class="form-floating mb-3 ">
                <input type="date" class="form-control" id="dob" name="dob" placeholder="namedob" required>
                <label for="dob">Date of Birth</label>

                    <div class="invalid-feedback" >
                        Please Enter Your Date of Birth
                    </div>
            </div>


            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="class" name="class" placeholder="nameclass" required>
                <label for="class">Class</label>

                    <div class="invalid-feedback" >
                        Please Enter Your Class
                    </div>
            </div>


            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                <label for="floatingInput">Email Address</label>

                    <div class="invalid-feedback" >
                        Please Enter Your Email <Address></Address>
                    </div>
            </div>


            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="contact" name="contact" placeholder="namecont" required>
                <label for="contact">Contact Number</label>
                   
                    <div class="invalid-feedback" >
                        Please Enter Your Contact Number
                    </div>
            </div>


            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="address" name="address" placeholder="add" required>
                <label for="address">Address</label>

                     <div class="invalid-feedback" >
                        Please Enter Your Address
                    </div>
            </div>




<!--Radio Inputs For Gender-->
            <div class="form-control mb-3 " style="padding: 12px;word-spacing: 8px;">
                <label>Gender</label> <br> <br>
                <label>
                    <input type="radio" name="gender" value="Male" > Male
                </label>

                <label>
                    <input type="radio" name="gender" value="Female" > Female
                </label>

                <label>
                    <input type="radio" name="gender" value="Transgender" > Transgender
                </label>

                   <div class="invalid-feedback" >
                        Please Select Your Gender
                    </div>
            </div>





<!--Radio Inputs For Category-->
            <div class="form-control mb-3 " style="padding: 12px;word-spacing: 8px;vertical-align:middle;">
                <label>Category</label> <br> <br>
                
     <?php
            $connect_query= mysqli_connect('localhost','root','','php_internship');
            $command="SELECT * FROM category";
            $query_result= mysqli_query($connect_query,$command);

                while($result=mysqli_fetch_array($query_result))
                    {
                                      
                         echo '<label>';
    ?>
            <input type="radio"  name="category" value="<?php echo $result["id"]; ?>" required> 


    <?php                                    
                                                                       
                         echo $result['category_name'];

                         //if(strlen($result['category_name']) == 4)
                        //echo '&nbsp;&nbsp;&nbsp;&nbsp;';                     
                        //else  
                         echo '&nbsp;&nbsp;';                     
                         echo '</label>';

                    }                                                    
      ?>     
                     <div class="invalid-feedback" >
                        Please Select Your Category
                    </div>
      <div  >                               
      <a href="add_category.php"  style="word-spacing: 0 !important;text-decoration:none;">Add your category</a>   
      </div>     
            </div>







<!--Radio Inputs For Religion-->
             
<div class="form-control mb-3 " style="padding: 12px;;word-spacing: 8px;vertical-align:middle;">
                <label>Religion</label> <br> <br>
                
     <?php
            $connect_query= mysqli_connect('localhost','root','','php_internship');
            $command="SELECT * FROM religion";
            $query_result= mysqli_query($connect_query,$command);

                while($result=mysqli_fetch_array($query_result))
                    {
                                      
                         echo '<label>';
    ?>
       <input type="radio"  name="religion" value="<?php echo $result["id"];?>" required>                                   
    <?php                                                                  
                         echo $result['religion_name'];

                         //if(strlen($result['category_name']) == 4)
                        //echo '&nbsp;&nbsp;&nbsp;&nbsp;';                     
                        //else  
                         echo '&nbsp;&nbsp;';                     
                         echo '</label>';

                    }                                                    
      ?>  
      <div>           
      <a href="add_religion.php" style="word-spacing: 0 !important;text-decoration:none;">Add your Religion</a>
      </div>                               
                    <div class="invalid-feedback" >
                        Please Select Your Religion
                    </div>
            </div>








<!--Checkbox Inputs For Facilities-->      

            <div class="form-control mb-3 " style="padding: 12px;;word-spacing: 8px;vertical-align:middle;">
                <label>Facilities</label> <br> <br>

                         
     <?php
            $connect_query= mysqli_connect('localhost','root','','php_internship');
            $command="SELECT * FROM facilities";
            $query_result= mysqli_query($connect_query,$command);

                while($result=mysqli_fetch_array($query_result))
                    {
                                      
                         echo '<label>';
    ?>
            <input type="checkbox"  name="facilities[]" value="<?php echo $result["id"]; ?>">                                    
    <?php                                                                  
                         echo $result['facility_name'];

                         //if(strlen($result['category_name']) == 4)
                        //echo '&nbsp;&nbsp;&nbsp;&nbsp;';                     
                        //else  
                         echo '&nbsp;&nbsp;';                     
                         echo '</label>';

                    }                                                    
      ?>                    
                
            </div>




          







            <div class="form-control mb-3  border-2" >
                <label>Upload Pic</label> <br> <br>
                <input class="form-control " name="image" type="file" id="formFileMultiple" multiple style="margin-left: 0%;width:100%;" required>

                    <div class="invalid-feedback" >
                        Please Upload Your Picture
                    </div>
            </div>




            <div class="form-floating mb-3 ">
                <input type="password" class="form-control" id="password" name="password" placeholder="passs" required>
                <label for="password">Create Password</label>

                    <div class="invalid-feedback" >
                        Please Create Your Password
                    </div>
            </div>

            <div class="form-check form-switch  mb-2">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="encrypt_switch">
                <label class="form-check-label" for="flexSwitchCheckDefault">Encrypt Password?</label>
            </div>


            

            <div class="col-12 ">
               <button type="reset"  class="btn  btn-outline-danger " style="width: 49%;">Reset form</button>           
            
               <button type="submit" class="btn btn-outline-success" id="submit" style="width: 49%;">Submit form</button>
            </div>
            <p style="margin-top: 6px;">Already Registered? <a href="student_signin.php">Sign In</a></p>

    </div>
    </form>
</body>
<script>
    var forms = document.querySelectorAll( ".needs-validation" );

    Array.prototype.slice.call(forms).forEach( function(form)
    {
        form.addEventListener("submit",function(event)
        {
        if(!form.checkValidity() )
        {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add("was-validated");
    });
    });
</script>

</html>