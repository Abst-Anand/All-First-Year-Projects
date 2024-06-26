<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/userInterface.css">
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

    <title>User Interface</title>
</head>

<body>
    <div class="navbar navbar-light bg-light">
        <div class="container-fluid cont">
            <a class="navbar-brand" href="#">
                <img src="../Images/images.png" class="d-inline-block align-text-top image">
                <a class="name"> $TACK</a>
            </a>
        </div>
    </div>
    
         <?php                    
                    echo '<span class="user_welcome">Welcome ', $_SESSION['firstname'],' </span>';
         ?>
   
 
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

                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Profile</button>
                    
                   
                    <!--
                    <button class="btn btn-outline-success"  onclick="document.location.href='form.php'">Logout</button>
                    <button type="button" class="btn btn-primary launch" onclick="document.location.href='form.php'"> Logout</button>
                    -->
                    
                </form>
                    
                
            </div>
        </div>
         <!-- Modal -->
  <div class="modal fade main" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">User Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form">
              <label class="user_profile">Firstname:</label>
              <?php                    
                    echo $_SESSION['firstname'] ,'&nbsp;',$_SESSION['lastname'] ;
              ?><br>

              <label class="user_profile">Lastname:</label>
              <?php                    
                    echo $_SESSION['lastname'];
              ?><br>

              <label class="user_profile">Email:</label>
              <?php                    
                    echo $_SESSION['email'];
              ?> <br>

              <label class="user_profile">Mobile Number:</label>
              <?php   
                    echo $_SESSION['mobile_number'];
              ?> <br>
             
        
        <hr>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="document.location.href='form.php'">Logout</button> 
        
        </div>
      </div>
    </div>
  </div>
</body>
</html>


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
    <div class="carousel-inner caro" >
        <div class="carousel-item active">
            <img src="../Images/caro1.jpg" class="d-block w-100 ">
        </div>
        <div class="carousel-item">
            <img src="../Images/caro2.jpg" class="d-block w-100 ">
        </div>
        <div class="carousel-item">
            <img src="../Images/caro3.jpg" class="d-block w-100 ">
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
        <img src="../Images/download (2).jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Web Development</h5>
            <p class="card-text"><br>Create your own wesites! <br>HTML <br> CSS <br>JS</p>
            <a href="#" class="btn btn-primary">Learn More</a>
            <p class="card-text"><small class="text-muted">Last updated 3 days ago</small></p>
        </div>
    </div>
    <div class="card">
        <img src="../Images/download (3).jpg" class="card-img-top" height="290.5">
        <div class="card-body">
            <h5 class="card-title">Advantages:</h5>
            <p class="card-text"><br><br>Fully Customisable <br> Generate Revenue <br>Satisfy your Creativity <br>
            </p>
            <a href="#" class="btn btn-primary">Learn More</a>
            <p class="card-text"><small class="text-muted">Last updated 3 days ago</small></p>
        </div>
    </div>
    <div class="card">
        <img src="../Images/download (4).jpg" class="card-img-top" height="290.5">
        <div class="card-body">
            <h5 class="card-title">Backend Lanuages:</h5>
            <p class="card-text"> <br><br>NodeJS <br>PHP <br>Ruby on Rails <br></p>
            <a href="#" class="btn btn-primary">Learn More</a>
            <p class="card-text"><small class="text-muted">Last updated 3 days ago</small></p>
        </div>
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