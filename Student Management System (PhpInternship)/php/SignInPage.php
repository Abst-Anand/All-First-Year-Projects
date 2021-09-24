

<html>
    <head>
        <title>Log in</title>
        
        <link rel="stylesheet" href="../css/SignInPage.css">
        <script src="js/SignUpPage.js"></script>
    </head>
    <body>
        <div class="sign-in">
            <img src="../Images/download (1).jpg">
            <h1>Sign In</h1>
            <form action="recordFetch_SignIn.php" method="POST">

                <input type="text" class="input-box" placeholder="Enter SIC Number" name="SIC_No" required>
                <input type="password" class="input-box" placeholder="Password" name="password" required>  
                <button type="submit" class="signin-btn"  name= "submit">Sign In</button> <br><br>
                 <a  href="#">Forgot Password?</a>
                <p>Not Registered? <a href="SignUpPage.php">Sign Up</a></p>

            </form>
        </div>

    </body>
 

 </html>

 