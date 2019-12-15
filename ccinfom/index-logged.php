<?php
  session_start();
?>

<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Darvin CSS -->
    <link rel="stylesheet" href = "css/main.css">
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Ubuntu Font -->  
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/6313065a06.js" crossorigin="anonymous"></script>
        
    <title>FEED</title>
    </head>
    <body style = "background-image: url(images/bg_1-blur.jpg)">
        <nav class="navbar fixed-top navbar-expand-sm navbar-dark navbar-custom">
            <a href="#" class="navbar-brand"><img src="images/brand.png" width="125px"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="tables.html">
                        <button type="button" class="btn btn-primary"><i class="fas fa-plus-square"></i> View Health Records</button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <!--Landing-->
            <div class="container sd-mt-5" style="margin-top: 300px">
                <img src="images/brand.png" class="img-fluid mx-auto d-block mt-5" alt="Logo" style="max-width: 500px">

             <h2 class = "text-center m-3 fluid">
        <div class="row p-4">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-heartbeat"></i>
                </div>
                <div class="mr-5">View All Records</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="table.html">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-running"></i>
                </div>
                <div class="mr-5"><font size = "6">Stable Records</font></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-walking"></i>
                </div>
                  <div class="mr-5"><font size = "6">Stagnant Records</font></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-wheelchair"></i>
                </div>
                <div class="mr-5"><font size = "6">Critical Records</font></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
        </h2>
    </div>
    <!-- Footer -->
    
    <div class="text-dark text-center fixed-bottom" style="background-color: #141414;opacity: 95%;">
        <ul class="list-inline justify-content-center mt-2">
            <li class="list-inline-item">
                <a class="text-white" href="https://www.facebook.com/Airutopia-ADC-289039429234/"><i class="fab fa-facebook-f" aria-hidden="true"></i> Facebook</a>
            </li>
            <li class="list-inline-item">
					<a class="text-white" href="https://twitter.com/AirSpaceLife"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
            </li>
            <li class="list-inline-item">
					<a class="text-white" href="https://www.youtube.com/user/airutopia"><i class="fab fa-youtube" aria-hidden="true"></i> Youtube</a>
            </li>
            <li class="list-inline-item">
				<a class="text-white" href="#"><i class="fab fa-instagram" aria-hidden="true"></i> Instagram</a>
            </li>
        </ul>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>