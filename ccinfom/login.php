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
        
    <!-- Ubuntu Font -->  
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/6313065a06.js" crossorigin="anonymous"></script>
        
    <title>ASLN</title>
    </head>
    
    <body style = "background-image: url(images/bg_1-blur.jpg)">
        <nav class="navbar fixed-top navbar-expand-sm navbar-dark navbar-custom">
            <a href="index.html" class="navbar-brand"><img src="images/brand.png" width="125px"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <div class="nav-link dropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-sign-in-alt"></i> Login
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">NGO</a>
                            <a class="dropdown-item" href="#">Health Worker</a>
                            <a class="dropdown-item" href="#">Health Seeker</a>
                            <a class="dropdown-item" href="#">Barangay Captain</a>
                          </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link dropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: dodgerblue">
                            <i class="fas fa-plus-square"></i> Register
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">NGO</a>
                            <a class="dropdown-item" href="#">Health Worker</a>
                            <a class="dropdown-item" href="#">Health Seeker</a>
                            <a class="dropdown-item" href="#">Barangay Captain</a>
                          </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="card p-3 mx-auto" style="width: 25rem; margin-top: 250px">
            <div class="card-body">
                <h3 class="card-title" style="color: #1f1f1f">Login</h3>
                <form>
                    <?php
                        if (isset($_SESSION['ngoID'])){
                            echo '<button type="button" class="btn btn-primary"><i class="fas fa-sign-out-alt"></i> Log Out</button>';
                            echo '<form action="ccinfom/logout.inc.php" method="post">';
                            //      <button type="submit" name="logout-submit">Logout</button>
                            //        </form>' IF THE CODE YOU USED DOESN'T WORK, TRY THIS ^^
                        } else{
                        echo '<div class="form-group">
                            <label for="InputEmail">Username</label>
                            <input type="text" class="form-control" name="personnelid" aria-describedby="emailHelp" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="SavePassword">
                            <label class="form-check-label mb-3" for="SavePassword">Keep me Logged In</label>
                        </div>
                        <button type="login" class="btn btn-primary">Login</button>
                        berd
                    </form>';
                        } 

                    ?>
            </div>
        </div>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>