<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
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
                "scrollY": "400px",
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

    <title>Home</title>
</head>

<body>
    <div class="navbar navbar-light bg-light">
        <div class="container-fluid cont">
            <a class="navbar-brand" href="#">
                <img src="Images/images.png" class="d-inline-block align-text-top image">
                <a class="name"> $TACK</a>
            </a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light navi">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Docs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Courses
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="first.html" target="_new">HTML</a></li>
                            <li><a class="dropdown-item" href="#">CSS</a></li>
                            <li><a class="dropdown-item" href="#">JavaScript</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">NodeJS</a></li>
                            <li><a class="dropdown-item" href="#">PHP</a></li>
                            <li><a class="dropdown-item" href="#">Ruby on Rails</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Location</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    <button class="btn btn-outline-success" type="button" onclick="window.location.href='bootstrapform.php'" taget="new">SignUp</button>
                    
                </form>
            </div>
        </div>


        </div>
        </div>
        </div>
        </div>
</body>

</html>
</nav>


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="Images/download (2).jpg" class="d-block w-100 caro" alt="...">
        </div>
        <div class="carousel-item">
            <img src="Images/download (3).jpg" class="d-block w-100 caro" alt="...">
        </div>
        <div class="carousel-item">
            <img src="Images/download (4).jpg" class="d-block w-100 caro" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="card-group">
    <div class="card">
        <img src="Images/download (2).jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Web Development</h5>
            <p class="card-text"><br>Create your own wesites! <br>HTML <br> CSS <br>JS</p>
            <a href="#" class="btn btn-primary">Learn More</a>
            <p class="card-text"><small class="text-muted">Last updated 3 days ago</small></p>
        </div>
    </div>
    <div class="card">
        <img src="Images/download (3).jpg" class="card-img-top" height="290.5">
        <div class="card-body">
            <h5 class="card-title">Advantages:</h5>
            <p class="card-text"><br><br>Fully Customisable <br> Generate Revenue <br>Satisfy your Creativity <br>
            </p>
            <a href="#" class="btn btn-primary">Learn More</a>
            <p class="card-text"><small class="text-muted">Last updated 3 days ago</small></p>
        </div>
    </div>
    <div class="card">
        <img src="Images/download (4).jpg" class="card-img-top" height="290.5">
        <div class="card-body">
            <h5 class="card-title">Backend Lanuages:</h5>
            <p class="card-text"> <br><br>NodeJS <br>PHP <br>Ruby on Rails <br></p>
            <a href="#" class="btn btn-primary">Learn More</a>
            <p class="card-text"><small class="text-muted">Last updated 3 days ago</small></p>
        </div>
    </div>
</div>
<!--USERS DATATABLE -->
<?php
    if(isset($_SESSION['alert']))  //shows delete message from delete.php
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
<div class="details">
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, accusamus perspiciatis? Praesentium rerum
        molestiae natus fugit laudantium nihil, incidunt nulla architecto eum dolorem, illo inventore. Facilis autem
        ratione unde impedit! <br>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit soluta voluptas distinctio sunt, aliquid et
        enim? Voluptate vel itaque pariatur, facilis ipsum, facere eius dolorem modi eaque odio sint sequi odit quod
        rem alias! <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad qui ipsa dolores nulla mollitia
        officiis fuga, sint hic quas quis cumque. Sequi distinctio iste accusamus odio consectetur quae pariatur
        assumenda!
    </p>
</div>

<div>
    <div style="background-color: aquamarine;text-align: center;">
        <br> Div1 <br><br>
        <div style="background-color: bisque;text-align: center;">
            <br> Div2 <br><br>

            <div style="background-color: burlywood;text-align: center;">
                <br> Div3 <br><br>

            </div>
        </div>
    </div>
</div>

<div class="container">
    <footer class="py-5">
        <div class="row">
            <div class="col-2">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col-2">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col-2">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col-4 offset-1">
                <form>
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of whats new and exciting from us.</p>
                    <div class="d-flex w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p>&copy; 2021 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter" />
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram" />
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook" />
                        </svg></a></li>
            </ul>
        </div>
    </footer>
</div>


</body>

</html>