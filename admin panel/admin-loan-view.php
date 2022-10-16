<?php
session_start();
include 'connect.php';

// fectching data from the database for auto fill

$ID = $_GET['loanviewid'];
$getdetails = "SELECT * FROM `thrift_loan` WHERE USER_ID = $ID";
$result = mysqli_query($connect, $getdetails);

// fectching data from the database for auto fill ends here

$row = mysqli_fetch_assoc($result);
$FIRSTNAME = $row['FIRSTNAME'];
$LASTNAME = $row['LASTNAME'];
$EMAIL = $row['EMAIL'];
$PHONE_NUMBER = $row['PHONE_NUMBER'];
$STATUS = $row['STATUS'];


if (isset($_POST['update'])) {

header('location:admin.php');
    $STATUS = $_POST['STATUS'];
   

    $sql = "UPDATE `thrift_loan` SET `STATUS`='$STATUS' WHERE USER_ID = $ID";

     $result = mysqli_query($connect, $sql);
    
     
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ADMIN UPDATE PAGE</title>
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

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
  <a href="admin.php" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">ThrifTEE</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<div class="search-bar">
  <form class="search-form d-flex align-items-center my-5" method="POST" action="#">
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
      </a>
      <!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><?php echo $_SESSION['USER_ID']; ?></h6>
          <span>Web Designer</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="">
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
          <a class="dropdown-item d-flex align-items-center" href="admin-logout.php">
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
    <a class="nav-link" href="admin.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>

  
  <!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>User Activities</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="group-members.php">
          <i class="bi bi-circle"></i><span>Group Members</span>
        </a>
      </li>

      <li>
        <a href="personal-savings-plan-list.php">
          <i class="bi bi-circle"></i><span>Individual Savers</span>
        </a>
      </li>

      <li>
    </ul>
  </li><!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Loan Apllicant</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="loan-list.php">
          <i class="bi bi-circle"></i><span>View List</span>
        </a>
      </li>
    </ul>
  </li>
  
  <!-- End Forms Nav -->


 
  <!-- End Charts Nav -->


  <li class="nav-heading">Pages</li>

 <!-- End Profile Page Nav -->


</ul>

</aside><!-- End Sidebar-->


  <main id="main" class="main">
  
  <div class="container-fluid px-4">
                        <h1 class="mt-4">LOAN APPLICANTS</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        </ol>

    
                       
                                <form method="post">
                                <div class="form-group">
                                    <label>FIRSTNAME:</label>
                                    <input type="text" class="form-control" value="<?php echo $FIRSTNAME  ?>" name="FIRSTNAME" placeholder="Enter Name">
                              
                                    <label>LASTNAME:</label>
                                    <input type="text" class="form-control" value="<?php echo $LASTNAME  ?>" name="FIRSTNAME" placeholder="Enter Name">
                              

                                

                                    <label>EMAIL:</label>
                                    <input type="email" class="form-control" name="EMAIL" value="<?php echo $EMAIL  ?>"  placeholder="Enter Your Address">
                                    <br>
                                    <label>PHONE NUMBER:</label>
                                    <input type="number" class="form-control" name="PHONE_NUMBER" value="<?php echo $PHONE_NUMBER  ?>" placeholder="+234">
                                    <br>
                                    <label>STATUS:</label>
                                    <input type="text" class="form-control" name="STATUS" value="<?php echo $STATUS  ?>" placeholder="">
                                    <br>
                                   



                            

                          
                                    
                                </div>
                                
                                
                                <button type="submit" class="btn btn-primary" name="update">Submit</button>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>ThrifTEE</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->


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