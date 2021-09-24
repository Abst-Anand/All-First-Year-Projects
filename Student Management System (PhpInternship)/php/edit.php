<?php
$user_id = $_REQUEST['id'];
//echo $user_id;
require ("connection.php");
$command = "SELECT * FROM students_form WHERE id=$user_id";
$query1_result = mysqli_query($connect_command,$command);

while($res=mysqli_fetch_array($query1_result))
{
  
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="js/js2.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css");
        * {
            margin: 0;
            padding: 0;
        }
        
        .container {
            width: 450px;
        }
        
        label {
            margin: 3%;
            width: 28%;
        }
        
        input{
            width: 70%;
        }
         
    </style>


    <title>Edit Profile</title>
</head>

<body>
    <div class="head  bg-success p-2 text-dark bg-opacity-10">
        <h2 style="text-align: center;">Update Your Details</h2>
    </div>
    <div class="container bg-success p-2 text-dark bg-opacity-10">
        <form action="update.php?id=<?php echo $res['id']; ?>" method="POST" enctype="multipart/form-data">


        <div class="mb-2 input-group has-validation">
            <label for="name" class="form-label ">Name</label>
            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person-check-fill"></i></span>
            <input type="text" class="form-control " id="name" name="name" aria-describedby="inputGroupPrepend" value="<?php echo $res['name'];?>">
        </div>




        <div class="mb-2 input-group has-validation">
            <label for="sic" class="form-label">SIC Number</label>
            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-at"></i></span>
            <input type="text" class="form-control" id="sic" name="sic" aria-describedby="inputGroupPrepend" value="<?php echo $res['sic'];?>">
        </div>



        <div class="mb-2 input-group has-validation">
            <label for="Father_name" class="form-label">Father's Name</label>
            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-people-fill"></i></span>
            <input type="text" class="form-control" id="Father_name" name="father_name" aria-describedby="inputGroupPrepend" value="<?php echo $res['father_name'];?>">
        </div>



        <div class="mb-2 input-group has-validation">
            <label for="dob" class="form-label">Date of Birth</label>
            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-calendar-event-fill"></i></span>
            <input type="date" class="form-control" id="dob" name="dob" aria-describedby="inputGroupPrepend" value="<?php echo $res['dob'];?>">
        </div>


        <div class="mb-2 input-group has-validation">
            <label for="class" class="form-label">Class</label>
            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-award-fill"></i></span>
            <input type="number" class="form-control" id="class" name="class" aria-describedby="inputGroupPrepend"value="<?php echo $res['class'];?>">
        </div>



        <div class="mb-2 input-group has-validation">
            <label for="email" class="form-label">Email</label>
            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-chat-right-text-fill"></i></span>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend" value="<?php echo $res['email'];?>">
        </div>


        <div class="mb-2 input-group has-validation">
            <label for="contact" class="form-label">Contact Number</label>
            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-chat-square-text-fill"></i></span>
            <input type="number" class="form-control" id="contact" name="contact" aria-describedby="inputGroupPrepend" value="<?php echo $res['contact'];?>">
        </div>



        <div class="mb-2 input-group has-validation">
            <label for="address" class="form-label">Address</label>
            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-house-door-fill"></i></span>
            <input type="text" class="form-control" id="address" name="address" aria-describedby="inputGroupPrepend" value="<?php echo $res['address'];?>">
        </div>    


        
        
        <div class="mb-2 input-group has-validation">
            <label for="general" class="form-label">Gender</label>
            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-gender-ambiguous"></i></span>
        <div class="form-control  " style="word-spacing: 24px;">
                <label for="male" style="width: 12% !important;margin:2% !important;">
                    <input type="radio" id="male" name="gender" value="Male" <?php if('Male'==$res['gender']) echo 'checked'; ?> > Male
                </label>                

                <label for="female" style="width: 12% !important;margin:2% !important;">
                    <input type="radio" id="female" name="gender" value="Female" <?php if('Female'==$res['gender']) echo 'checked'; ?> > Female
                </label>

                <label for="ts" style="width: 12% !important;margin:2% !important;">
                    <input type="radio" id="ts" name="gender" value="Transgender" <?php if('Transgender'==$res['gender']) echo 'checked'; ?> > Transgender
                </label>
                                
        </div>
        </div>




        <div class="mb-2 input-group has-validation">
            <label for="address" class="form-label">Category</label>
            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-tag-fill"></i></span>
            <div class="form-control" style="word-spacing: 400px;">
        
        
        <?php
       

   $connect_command = mysqli_connect('localhost', 'root', '', 'php_internship');
   $command="SELECT * FROM category";
   $query_result= mysqli_query($connect_command,$command);

       while($result=mysqli_fetch_array($query_result))
           
        {
               
               echo '<label style="width: 25% !important;margin:2% !important;">';
         ?>
                <input type="radio" name="category" value="<?php echo $result["id"]; ?>" <?php   if($res["category_id"] == $result["id"])  echo 'checked'; ?> >
       <?php
               echo $result['category_name'];
              
               echo '</label>';           
        }
    
    
    
         ?>
                           
        </div>
        </div>




        <div class="mb-2 input-group has-validation">
            <label for="address" class="form-label">Religion</label>
            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-diagram-2-fill"></i></span>
            <div class="form-control" style="word-spacing: 400px;">
        
        
        <?php
       

   $connect_command = mysqli_connect('localhost', 'root', '', 'php_internship');
   $command="SELECT * FROM religion";
   $query_result= mysqli_query($connect_command,$command);

       while($result=mysqli_fetch_array($query_result))
           
        {
               
               echo '<label style="width: 35% !important;margin:2% !important;">';
         ?>
                <input type="radio" name="religion" value="<?php echo $result["id"];?>" <?php   if($res["religion_id"] == $result["id"])  echo 'checked'; ?> >
       <?php
               echo $result['religion_name'];
              
               echo '</label>';           
        }
    
    
    
    
         ?>
                           
        </div>
        </div>



        
        <div class="mb-2 input-group has-validation">
            <label for="address" class="form-label">Facilities</label>
            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-slash-circle-fill"></i></span>
            <div class="form-control" style="word-spacing: 400px;">
        
        
        <?php
       

   $connect_command = mysqli_connect('localhost', 'root', '', 'php_internship');
   $command="SELECT * FROM facilities";
   $query_result= mysqli_query($connect_command,$command);

       while($result=mysqli_fetch_array($query_result))
           
        {
               
               echo '<label style="width: 35% !important;margin:2% !important;">';
         ?>
                <input type="checkbox" name="facilities[]" value="<?php echo $result["id"]; ?>" <?php   if($res["facilities_id"] == $result["id"])  echo 'checked'; ?> >
       <?php
               echo $result['facility_name'];
              
               echo '</label>';           
        }
    
    
}

         ?>
                           
        </div>
        </div>




        
        <div class="mb-4 input-group has-validation">
            <label for="image" class="form-label">Update Picture</label>
            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-image-fill"></i></span>
            <input type="file" class="form-control" id="image" name="image" aria-describedby="inputGroupPrepend" >
        </div>




        
        <div class="col-12 ">
               <button type="reset"  class="btn  btn-outline-danger " style="width: 49%;">Reset</button>           
            
               <button type="submit" class="btn btn-outline-success" id="submit" style="width: 49%;">Update</button>
            </div>



        


        
            </form>

                
    </div>
   


</body>

</html>

