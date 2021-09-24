<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/js2.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
    <script>
        //Scroll DataTable
        $(document).ready(function () {


            $('#example').DataTable({
                "scrollY": "200px",
                "scrollCollapse": true,
                "paging": false
            });
        });

    </script>
    <style>
        a {
            text-decoration: none;
        }
    </style>
    <title> All Users</title>
</head>

<body>  
    <?php
    if(isset($_SESSION['alert']))  //shows delete message
    echo $_SESSION['alert'];
    else
    echo '';
    
   
    ?>
    

    <div class="border border-dark" style="margin:2%;">
        <h3 style="text-align:center;">All Users DataTable</h3>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>SIC No.</th>
                    <th>Father's Name</th>


                    <th>Gender</th>
                    <th>Category</th>
                    <th>Religion</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Facilties</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <div class="border border-dark">
                <tbody>
                    <?php 
            $connect_query= mysqli_connect('localhost','root','','php_internship');
            $command="SELECT students_form.father_name,students_form.facilities_id,students_form.class,students_form.address,students_form.id, students_form.name, students_form.sic, students_form.contact, students_form.gender,
                             category.category_name, religion.religion_name, facilities.facility_name
                      FROM   students_form, category, religion, facilities 
                      WHERE  students_form.category_id   = category.id
                      AND    students_form.religion_id   = religion.id
                      AND    students_form.facilities_id = facilities.id";
      //using INNER JOIN                
     //SELECT students_form.name, category.category_name FROM students_form INNER JOIN category on students_form.category_id= category.id
     //SELECT students_form.id, students_form.name, facilities.facility_name FROM students_form INNER JOIN facilities on students_form.facilities_id= facilities.id
            $query_result= mysqli_query($connect_query,$command);

                while($result=mysqli_fetch_array($query_result))
                    {
                       
            
           
            echo '<tr>';
            echo    '<td>'.$result["id"].'</td>';
            echo    '<td>'.$result["name"].'</td>';  
            echo    '<td>'.$result["sic"].'</td>'; 
            echo    '<td>'.$result["father_name"].'</td>';   
            echo    '<td>'.$result["gender"].'</td>';  
            echo    '<td>'.$result["category_name"].'</td>';  
            echo    '<td>'.$result["religion_name"].'</td>';                
            echo    '<td>'.$result["contact"].'</td>';  
            echo    '<td>'.$result["address"].'</td>'; 

            /* FACILITIES LOGICAL CODE ;)*/
            $user_id=$result['id'];
            $connect= mysqli_connect('localhost','root','','php_internship');
$cmd= "SELECT facilities_id FROM students_form WHERE id=$user_id";
//$get="SELECT facilities.id, facilities.facility_name, students_form.facilities_id FROM facilities,students_form WHERE students_form.id=37";

$res1=mysqli_query($connect,$cmd);
// $res2=mysqli_query($connect,$get);
// echo '<br>';
// echo '<br>';
echo '<td>';
while($view=mysqli_fetch_assoc($res1))

 {
     
$split= explode(',',$view['facilities_id']);


// echo '<pre>';
// print_r ($split);
// echo '<br>';
$size= sizeof($split);
// echo 'size= '.$size;
// echo '<br>';

for($t=0;$t<$size;$t++)
{
    
    
    $ftc="SELECT * FROM facilities WHERE id=$split[$t]";
    $qwe=mysqli_query($connect,$ftc);
    $rt=mysqli_fetch_array($qwe);
    $fac= $rt['facility_name'];
    $arr=array($fac);   
    $yt=implode(',',$arr);
    
   echo  $yt.',';
    
  
   // echo  $yt;  
}

}
echo '</td>';
         
           
            //echo '<td>Hostel, Transport, Library, Auditoriun, Sports, Laboratory </td>';
             echo    '<td>'; 
             ?>
                    <a href="edit.php?id=<?php echo $result['id']; ?>" target="new">Edit</a>/
                    <a href="delete.php?id=<?php echo $result['id']; ?>"
                        onclick="return confirm('Are You Sure?')">Delete</a>
                    <?php 
             
           //  echo ' $result['id'];" target=new>Edit/</a>';
             //echo '<a href="delete.php" target=new>Delete</a>';
             echo '</td>';     
             echo '</tr>';                                        
                    }
            
            ?>
                </tbody>
        </table>
    </div>
    </div>
</body>

</html>