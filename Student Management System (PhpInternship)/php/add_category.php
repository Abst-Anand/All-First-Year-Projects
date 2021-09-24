<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/student_signin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <title>Add Your Category</title>
    <style>
        h2{text-align: center;}
    </style>
</head>
<body>
    <h2>Welcome &nbsp;<?php echo $_SESSION['name'] ?></h2> <br><br>
    <form action="add_categoryToDB.php" method="POST">
    <div class="sign-in" style="width: 35% !important;">
            
            <h1>Add Your Category</h1>
            <form action="submit_student_signin.php" method="POST">                
                <input type="text" class="input-box" placeholder="Enter Category Name" name="add_category" required>                 
                <button type="reset" class="btn btn-primar btn-outline-danger" name= "reset">Reset</button>
                <button type="submit" class="btn btn-primar btn-outline-success" name= "submit">Submit</button>
              
            </form>
        </div>    
</body>
</html>

