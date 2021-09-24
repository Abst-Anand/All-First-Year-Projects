<html>
    <head>
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="../css/SignUpPage.css">
        <script src="js/SignUpPage.js"></script>
        
    </head>
    <body>
        <div class="sign-up-form">
           
            <h1>Sign Up Now</h1>
            <form action="record_SignUPinfo.php"  method="POST">
                
                <input type="text" class="input-box" placeholder="Enter SIC Number" id="SIC_No" name="SIC_No" required >
                <input type="email" class="input-box" placeholder="Enter Email" id="username" name="email" required>                
                <input type="number" class="input-box" placeholder="Mobile Number" id="username" name="mobile_number">                      
                <input type="password" class="input-box" placeholder="Create Password" id="password" name="password" required >
                <p><span><input type="checkbox" required></span> I agree to the  <a href="TermsPopUp.html">Terms of Services</a></p>
                <button type="submit" class="signup-btn" name="submit">Sign Up</button>
               
                <hr>
                <p class="or">OR</p>
                <button type="button" class="google-btn">Login with Google</button>
                <p>Have an account? <a href="SignInPage.php">Sign In</a></p>

            </form>
    
        </div>

    </body>
    </html>
