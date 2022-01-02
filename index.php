<?php
  session_start();
	include "Api-hotel/dbconfig.php";

	// Inisiasi variabel
	$page = isset($_GET['page']) ? $_GET['page'] : false;
	$action = isset($_GET['action']) ? $_GET['action'] : false;

  // Mengecek Session
	$session_id = isset($_SESSION['id_admin']) ? $_SESSION['id_admin'] : false;
	$session_username = isset($_SESSION['username']) ? $_SESSION['username'] : false;
	$session_gambar = isset($_SESSION['gambar']) ? $_SESSION['gambar'] : false;


  if($session_id == false){
		header("location:http://localhost/e-hotel/auth/login.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="auth/assets/img/hotel.png">
  <title>Dashboard &mdash; Hotel</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="assets/node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="assets/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <!-- Navbar -->
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets/img/admin/<?php echo $session_gambar;?>" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?php echo $session_username;?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- Sidebar -->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">AdminHotel</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">

              <li><a class="nav-link" href="http://localhost/E-hotel/index.php"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
              
              <li><a class="nav-link" href="http://localhost/E-hotel/index.php?page=kamar&action=list"><i class="fas fa-person-booth"></i> <span>Kamar</span></a></li>
              
              <li><a class="nav-link" href="http://localhost/E-hotel/index.php?page=transaksi&action=list"><i class="fas fa-dollar-sign"></i> <span>Transaksi</span></a></li>
              
              <li><a class="nav-link" href="http://localhost/E-hotel/index.php?page=admin&action=list"><i class="fas fa-user-tie"></i> <span>Admin New</span></a></li>
              
              <li><a class="nav-link" href="http://localhost/E-hotel/auth/logout.php"><i class="fas fa-power-off"></i> <span>logout</span></a></li>
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-hotel"></i> E-Hotel
              </a>
            </div>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <!-- Membuat konten dinamis -->
			<?php
      $filename = "pages/$page/$action.php";
      
      if(file_exists($filename)){
        include_once($filename);
      }else{
        include_once("pages/dashboard/list.php");
      }
    ?>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="https://nauval.in/">Dmsmly</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="assets/node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="assets/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="assets/node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="assets/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
</body>
</html>
