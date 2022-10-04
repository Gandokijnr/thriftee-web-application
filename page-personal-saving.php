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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">ThrifTEE </span>
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
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo 'Welcome Back ' .$_SESSION['USERNAME']; ?></span>
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
          <i class="bi bi-bar-chart"></i><span>Analytics</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
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
  <div id="layoutSidenav_content">
                <main>
                    <div class="container px-4">
                       
                       <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalToggleLabel">PERSONAL SAVINGS</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
<!-- personal savings form-->

<form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Savings Box</label>
    <input type="text" name="savingobject" require="required" class="form-control" id="exampleInputEmail1">
    <div class="form-text">Give a Descriptive Saving Box Name. <span class="text-primary">e.g: school fee</span></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Break Date</label>
    <input type="date" name="breakdate" require="required" class="form-control">
    <small class="text-danger">you will only be able break your savings after 90 days or the selected break date, emergency withdrawal is not available</small>

    <div class="mb-3">
    <label class="form-label my-3">Autocharge Amount</label>
    <input type="number" name="amount" require="required" class="form-control" placeholder="NGN">
</div>
<div class="mb-3">
    <label class="form-label">Autocharge Schedule</label>
    <input type="text" name="schedule" require="required" class="form-control" placeholder="EXAMPLE: Everyday" >
</div>

<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="text" name="user_email" readonly require="required" class="form-control" value="<?php echo $_SESSION['USER_ID'] ?>" placeholder="registered email" >
</div>
<button type="submit" name="PERSONALSAVING" class="btn btn-primary">Submit</button>

  </div>
 


<!---personal savings form ends here-->
    </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">

   



  </div>
      <!-- <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">PREVIOUS</button>
      </div> -->
    </div>
  </div>
</div>
<a class="btn btn-success my-5" data-bs-toggle="modal" href="#exampleModalToggle" role="button">CREATE SAVINGS BOX</a>
                       


<?php
include 'connect.php';
$MESSAGE = "";

if (isset($_POST['PERSONALSAVING'])) {
    $user_email = mysqli_real_escape_string($connect, $_POST['user_email']);
    $Object = mysqli_real_escape_string($connect, $_POST['savingobject']);
    $Break_date = mysqli_real_escape_string($connect, $_POST['breakdate']);
    $Amount = mysqli_real_escape_string($connect, $_POST['amount']);
    $Schedule = mysqli_real_escape_string($connect, $_POST['schedule']);

    $select = "SELECT * FROM thriftee_personal where EMAIL = '$_SESSION[USER_ID]'";

    $result = mysqli_query($connect, $select);

    if (mysqli_num_rows($result) > 1) {
        $MESSAGE = "<div class='alert alert-danger' role='alert'>
        <span class='text-danger lead'><b>Sorry you cannot have more 2 record of savings to maintain consistency</b></span>
        </div>";
        
    }else {
        # code...

        $insert = "INSERT INTO thriftee_personal (USER_ID, EMAIL, SAVING_OBJECT, BREAK_DATE, AMOUNT, CHARGE_SCHEDULE, STATUS) 
        VALUES ('NULL','$user_email','$Object','$Break_date','$Amount','$Schedule','ACTIVE')";

        $insertRECORD = mysqli_query($connect, $insert);

        if ($insertRECORD) {
            $MESSAGE = "<div class='alert alert-success' role='alert'>
            <span class='text-danger lead'><b>Personal Savings Record Created Successfully</b></span>
            </div>";

        unset($_POST);
        }
    }
}

?>


<?php echo $MESSAGE; ?>
<table class="table">
            <thead>
              <tr>
                <th scope="col">SAVING BOX NAME</th>
                <th scope="col">BREAK DATE</th>
                <th scope="col">AMOUNT</th>
                <th scope="col">COLLECTABLE</th>
                <th scope="col">STATUS</th>
                <th scope="col">ACTION</th>
              </tr>
            </thead>
                    



                                    <?php
                                    include 'connect.php';

                                    $MESSAGE = "<span class='text-danger'>DATA INSERTED SUCCESSFULLY</span>";

                                    
                                    $select = "SELECT * FROM thriftee_personal where EMAIL = '$_SESSION[USER_ID]'";

                                    $result = mysqli_query($connect, $select);

                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            // $ID = $row['ID'];
                                            $MONTHLY_PAYABLE = $row['SAVING_OBJECT'];
                                            $ENDDATE = $row['BREAK_DATE'];
                                            $SAVINGS = $row['AMOUNT'];
                                            $MONTHLY_COLLECTABLE = $row['CHARGE_SCHEDULE'];
                                            $SAVED = $row['STATUS'];

                                             echo '<tbody>
                                             <tr>
                                                 <td>'.$MONTHLY_PAYABLE.'</td>
                                                 <td>'.$ENDDATE.'</td>
                                                 <td>'.$SAVINGS.'</td>
                                                 <td>'.$MONTHLY_COLLECTABLE.'</td>
                                                 <td>'.$SAVED.'</td>
                                                 <td>
                                                 <button class="btn btn-danger"><a class="text-light text-decoration-none" href="edit.php?"><i class="bi bi-trash-fill"></i>Break Kolo</a>
                                                 </button>
                                                </td>
                                             </tr>
                                         </tbody>';
                                         }
                                     }
                                     //<td>
                                     //<button class="" btn btn-primary><a href="edit.php?editid'.$ID.'" class="text-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                    // </button>
                                    // <button class="" btn btn-primary><a href="delete.php?deleteid='.$ID.'" class="text-danger"><i class="fa-solid fa-trash"></i></a></button>
                                    // </td>
                                    
                                    ?>
                                    
                                </table>
                            </div>
                            </div>
                            </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>ThrifTEE</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
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