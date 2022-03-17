<!DOCTYPE html>
<html>
<?php
// deklarasi parameter koneksi database
$server   = "localhost";
$username = "root";
$password = "";
$database = "sistemkeuangan1";

// koneksi database
$mysqli = new mysqli($server, $username, $password, $database);

// cek koneksi
if ($mysqli->connect_error) {
    die('Koneksi Database Gagal : '.$mysqli->connect_error);
}
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Sistem Informasi Keuangan RA Ibnu Salamah</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/logotk.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>
<body>

                  
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="assets/img/brand/nav.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="ortu_dashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-item pcoded-hasmenu">
              <a class="nav-link "><span class="pcoded-mtext">Transaksi</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="ortu_awal_a.php">
                <i class="ni ni-money-coins text-blue"></i>
                <span class="nav-link-text">Semester Ganjil</span>
              </a>
              </li>

            <li class="nav-item">
              <a class="nav-link" href="ortu_awal_b.php">
                <i class="ni ni-money-coins text-blue"></i>
                <span class="nav-link-text">Semester Genap</span>
              </a>
              </li>

            <li class="nav-item">
              <a class="nav-link" href="ortu_spp.php">
                <i class="ni ni-cart text-blue"></i>
                <span class="nav-link-text">SPP</span>
              </a>
            </li>

        

             <li class="nav-item pcoded-hasmenu">
              <a class="nav-link "><span class="pcoded-mtext">_________________________________</span></a>
            </li>

              <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <i class="ni ni-button-power text-blue"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>

           
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <h6 class="h2 text-white d-inline-block mb-0">Sistem Informasi Keuangan RA Ibnu Salamah</h6>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
           
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/theme/avatar.png">

                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                   
                    <span><?php echo $_SESSION['username']; ?></a></span>
                      
                  </div>
                   
                </div>
              </a>
            
             


            </li>
          </ul>
        </div>
      </div>
    </nav>
</body>

</html>