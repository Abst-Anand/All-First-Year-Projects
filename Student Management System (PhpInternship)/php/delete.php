
<?php
session_start();
if(isset($_REQUEST['id']))
{
$user_id = $_REQUEST['id'];

$connect = mysqli_connect('localhost','root','','php_internship');

$command= "DELETE FROM students_form WHERE id='$user_id'";
$delete= mysqli_query($connect,$command);
if($delete)
{
header("Location:http://localhost/PhpInternship/php/users.php");

$_SESSION['alert']='<div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Your Record is Deleted!</h4>
                    <p>Aww yeah, you successfully deleted your record, we hoped you would stay a bit longer.
                      But it is what it is.</p>
                     <hr>
                    <p class="mb-0">You can always join us back!</p>
                   </div>';
}
}

?>































    <!--     
    <script type="text/javascript">
    $(document).ready(function() {
                 $('#pay-grid').DataTable( {
                  columnDefs: [ {
                  targets: [ 0 ],
                  orderData: [ 0, 1 ]
               }, {
                  targets: [ 1 ],
                  orderData: [ 1, 0 ]
                }, {
                  targets: [ 4 ],
                  orderData: [ 4, 0 ]
            } ]
        } );
    } );
    
    </script>
    <table id="pay-grid" class="" style="width:100%">
     
     <thead>
     <tr>
     <th>Group</th>
     <th>Code</th>
     <th>Jan</th>
     <th>Feb</th>
     <th>Mar</th>
     <th>Apr</th>
     <th>May</th>
     <th>Jun</th>
     <th>Jul</th>
     <th>Aug</th>
     <th>Sep</th>
     <th>Oct</th>
     <th>Sep</th>
     <th>Oct</th>
     </tr>
     </thead>
     <div class="border border-dark">
                    <tbody>
                        <tr>
                            <td>Tiger</td>
                            <td>Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>$320,800</td>
                           
                            
                        </tr>
                        <tr>
                            <td>Garrett</td>
                            <td>Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>$170,750</td>
                        </tr> -->