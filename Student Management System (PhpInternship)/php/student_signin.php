

<html>
    <head>
        <title>Log in</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/student_signin.css">
        <script src="js/SignUpPage.js"></script>
    </head>
    <body>
        <div class="sign-in">
            <img src="../Images/download (1).jpg">
            <h1>Sign In</h1>
            <form action="submit_student_signin.php" method="POST">
                
                <input type="text" class="input-box" placeholder="Enter SIC Number" name="sic" required>
                <input type="password" class="input-box" placeholder="Password" name="password" required>  
                <button type="reset" class="btn  btn-outline-danger" name= "reset">Reset</button>
                <button type="submit" class="btn  btn-outline-success" name= "submit">Sign In</button>
                 <p><a  href="#">Forgot Password?</a></p> 
                <p>Not Registered? <a href="bootstrapform.php">Sign Up</a></p>

            </form>
        </div>

    </body>
 

 </html>

 