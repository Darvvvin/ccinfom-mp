<?php
    $hostname = "localhost";
    $username = "root";
    $password = "12345678";
    $databasename = "feed";

    $connect = mysqli_connect($hostname, $username, $password, $databasename);
    $query = "SELECT * FROM hsadult";
    
    $result = mysqli_query($connect, $query);

    $hsID = "hsID";
    $brgyID = "brgyID";
    $familyNum = "familynum";
    $fName = "firstname";
    $mInitial = "middle";
    $lName = "lastname";
    $birthday = "birthday";
    $gender = "gender";
    $address = "address";
    $contactNum = "mobilenumber";
    $hsStatus = "hsStatus";
    $brgyStatus = "brgyStatus";
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FEED - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a href="index.html" class="navbar-brand"><img src="images/brand.png" width="125px"></a>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="table_weights.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Weight Monitoring</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="table_feedingprograms.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Feeding Programs</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Your Information</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Health Seeker ID</th>
                    <th>BRGY ID</th>
                    <th>Contact</th>
                    <th>First Name</th>
                    <th>Initial</th>
                    <th>Last Name</th>
                    <th>Birthday</th>
                    <th>Sex</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>HS Status</th>
                    <th>BRGY Status</th>
                  </tr>
                  <tbody>
                  <?php
                      while ($row = mysqli_fetch_array($result)) {
                          echo "<tr>";
                          echo "<th>".$row[$hsID]."</th>";
                          echo "<th>".$row[$brgyID]."</th>";
                          echo "<th>".$row[$familyNum]."</th>";
                          echo "<th>".$row[$fName]."</th>";
                          echo "<th>".$row[$mInitial]."</th>";
                          echo "<th>".$row[$lName]."</th>";
                          echo "<th>".$row[$birthday]."</th>";
                          echo "<th>".$row[$gender]."</th>";
                          echo "<th>".$row[$address]."</th>";
                          echo "<th>".$row[$contactNum]."</th>";
                          echo "<th>".$row[$hsStatus]."</th>";
                          echo "<th>".$row[$brgyStatus]."</th>";
                          echo "</tr>";
                      }
                   ?>
                  </tbody>
                </thead>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        <div class="card p-3 mx-auto" style="width: 100%; margin-bottom: 100px">
            <h3 class="card-title" style="color: #1f1f1f">Update <b>Information</b></h3>
            <form method="post" action="connectregisterhs.php"> <!-- JUSTIN DO SOMETHING HERE (I LOVE NIGGERS) !-->
                <div class="form-row">
                    <div class="form-group col-md-5">
                      <label for="inputFirstName">First Name</label>
                      <input type="text" class="form-control" name="firstname" placeholder="Justin">
                    </div>
                    <div class="form-group col-md-5">
                      <label for="inputLastName">Last Name</label>
                      <input type="text" class="form-control" name="lastname" placeholder="Dela Cruz">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputLastName">Middle</label>
                      <input type="text" class="form-control" name="middle" placeholder="T" maxlength="1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword">HS ID</label>
                    <input type="text" class="form-control" name="hsID" placeholder="e.g. justingalura">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Barangay ID</label>
                    <input type="password" class="form-control" name="brgyID">
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Family Contact</label>
                    <input type="text" class="form-control" name="familynum" placeholder="e.g. 847-0001">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Birthday</label>
                    <input type="date" class="form-control" name="birthday" placeholder="e.g. 09176565612">
                </div>
                <div class="form-group">
				  <label for="sel1">Gender</label>
				  <select class="form-control" id="sel1" name="gender">
				    <option>Male</option>
				    <option>Female</option>
				    <option>Helicopter</option>
				  </select>
				</div>
                <div class="form-group">
                    <label for="inputEmail">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="e.g. A101 Arthaland Dormitories DLSU">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Contact</label>
                    <input type="text" class="form-control" name="mobilenumber" placeholder="e.g. 09176565612">
                </div>
                <div class="form-group">
				  <label for="sel1">HS Status</label>
				  <select class="form-control" id="sel1" name="hsStatus">
				    <option>Stable</option>
				    <option>Stagnant</option>
				    <option>Critical</option>
				  </select>
				</div>
                <div class="form-group">
                    <label for="inputEmail">BRGY Status</label>
                    <select class="form-control" id="sel1" name="brgyStatus">
                    <option>Valid</option>
                    <option>Invalid</option>
                  </select>
                </div>
              <div class="form-group">
              </div>
              <button type="submit" class="btn btn-primary">Update Information</button>
            </form>
        </div>
      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
