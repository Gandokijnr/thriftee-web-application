<?php
session_start(); 
include_once 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Contact - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.php" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">ThrifTEE</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
  </form>
</div><!-- End Search Bar -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->

  

    <li class="nav-item dropdown pe-3">

    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo 'HELLO  '. $_SESSION['USERNAME']?></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><?php echo $_SESSION['USER_ID']; ?></h6>
          <span>Web Designer</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>Need Help?</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>

  
  <!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Service</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="contribution.php">
          <i class="bi bi-circle"></i><span>Join Group</span>
        </a>
      </li>

      <li>
        <a href="page-personal-saving.php">
          <i class="bi bi-circle"></i><span>Personal Savings</span>
        </a>
      </li>

      <li>
    </ul>
  </li><!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="page-loan.php">
          <i class="bi bi-circle"></i><span>Loan Form</span>
        </a>
      </li>
    </ul>
  </li>
  
  <!-- End Forms Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-headset"></i><span>Customer Support</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="#">
          <i class="bi bi-circle"></i><span>Chat an Agent</span>
        </a>
    </ul>
  </li> 
  <!-- End Charts Nav -->


  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="users-profile.php">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->


</ul>

</aside><!-- End Sidebar-->
  <main id="main" class="main">
     <div class="col-xl-10 col-md-6">
                            <div class="card bg-light text-dark mb-4">
                                <div class="card-body text-center"><h4 class="lead text-success my-5"><b style="font-weight: 1000">DAILY CONTRIBUTION</b>
                                    <div class="rol" style="text-align: left">
                                        <div class="col my-5">
                                        <b class="lead" style="font-weight: 1000">Lasting Period:</b> <span style="font-weight: 500">1 Month</span><br><br>
                                        <b class="lead" style="font-weight: 1000">Start Date:</b> <span  style="font-weight: 500">20 September, 2022</span><br><br>
                                        <b class="lead" style="font-weight: 1000">End date:</b> <span  style="font-weight: 500">20 October, 2022</span><br><br>
                                        <b class="lead" style="font-weight: 1000">Daily Amount:</b> <span  style="font-weight: 500"> 500</span>
                                        </div>
                                        <button class="btn btn-success"><a class="text-light text-decoration-none" href="contribution_members.php">VIEW</a></button>
                                    </div>                                   
                                </div>
                            </div>
                        </div> 
                    </div> 



                    <div class="col-xl-10 col-md-6">
                            <div class="card bg-light text-dark mb-4">
                                <div class="card-body text-center"><h4 class="lead text-success my-5"><b style="font-weight: 1000">WEEKLY CONTRIBUTION</b>
                                    <div class="rol" style="text-align: left">
                                        <div class="col my-5">
                                        <b class="lead" style="font-weight: 1000">Lasting Period:</b> <span  style="font-weight: 500">2 Months</span><br><br>
                                        <b class="lead" style="font-weight: 1000">Start Date:</b> <span  style="font-weight: 500">20 September, 2022</span><br><br>
                                        <b class="lead" style="font-weight: 1000">End date:</b> <span  style="font-weight: 500">20 October, 2022</span><br><br>
                                        <b class="lead" style="font-weight: 1000">Daily Amount:</b> <span  style="font-weight: 500">1000</span>
                                        </div>
                                        <button class="btn btn-success"><a class="text-light text-decoration-none" href="contribution_members.php">VIEW</a></button>
                                    </div>                                   
                                </div>
                            </div>
                        </div> 
                    </div> 




<div class="col-xl-10 col-md-6">
                            <div class="card bg-light text-dark mb-4">
                                <div class="card-body text-center"><h4 class="lead text-success my-5"><b style="font-weight: 1000">MONTHLY CONTRIBUTION</b>
                                    <div class="rol" style="text-align: left">
                                        <div class="col my-5">
                                        <b class="lead" style="font-weight: 1000">Lasting Period:</b> <span  style="font-weight: 500">6 Months</span><br><br>
                                        <b class="lead" style="font-weight: 1000">Start Date:</b> <span  style="font-weight: 500">20 September, 2022</span><br><br>
                                        <b class="lead" style="font-weight: 1000">End date:</b> <span  style="font-weight: 500">20 October, 2022</span><br><br>
                                        <b class="lead" style="font-weight: 1000">Daily Amount:</b> <span  style="font-weight: 500"> 5000</span>
                                        </div>
                                        <button class="btn btn-success"><a class="text-light text-decoration-none" href="contribution_members.php">VIEW</a></button>
                                    </div>                                   
                                </div>
                            </div>
                        </div> 
                    </div> 
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    
    <div class="credits">
    


    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>