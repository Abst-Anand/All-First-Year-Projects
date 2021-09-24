
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/form.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"></script>

            <!--Password Plugins
            <script src="/path/to/cdn/jquery.min.js"></script>
            <script src="/path/to/jquery.passwordstrength.js"></script>
            -->
    
        <title>Form Validation</title>
        <script>
          $(document).ready(function()
          {
            $('#error_password').hide();

            $('#error_password').keyup(function(){
              valid_password();
            });
          });
          function valid_password()
          {
            let password = $('#password').val();

            if(password.length < 8 && 'password'== '@' || 'password'== '#' || 'password'== '$' )
            $('#error_password').show();

          }
          else
          {
            $('#error_password').hide();

          }

            $(function ()  
            {
              $('[data-toggle="tooltip"]').tooltip()
            })
           
         
          </script>
    </head>
<body>
    <h2 style="text-align: center;">Registration Form</h2>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary launch" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
    SignUp
  </button>
  
  <!-- Modal -->
  <div class="modal fade main" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Sign Up Now</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form">
              <form action="validate.php" method="POST">
              <input type="firstname" class="input-box" placeholder="First Name" name="firstname" required><br>
        <input type="lastname" class="input-box" placeholder="Last Name" name="lastname" required><br>
        <input type="email" class="input-box" placeholder="Email" name="email" required><br>
        <input type="number" class="input-box" placeholder="Mobile Number" name="mobile_number" required><br>  
        <input type="password" class="input-box" id="password" placeholder="Create Password" name="password" data-toggle="tooltip" data-placement="top" title="At least 8 characters with a special character" required><br>
        
    
        <span id="error_password"></span>

        <p><span><input type="checkbox" required></span> I agree to the  <a href="#">Terms of Agreement</a></p>  
        <hr>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="reset" class="btn btn-secondary" >Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button> 
        </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>