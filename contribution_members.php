<?php
session_start();
include_once 'connect.php';

$response = "";
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

  <!-- Main CSS File -->
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

  <?php

if (isset($_POST['submit'])) {

$plan = mysqli_real_escape_string($connect, $_POST['plan']);
$firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
$lastname =  mysqli_real_escape_string($connect, $_POST['lastname']);
$phone =  mysqli_real_escape_string($connect, $_POST['phone_number']);
$amount_ =  mysqli_real_escape_string($connect, $_POST['amount']);
$collectable_ =  mysqli_real_escape_string($connect, $_POST['collectable']);
$email_ =  mysqli_real_escape_string($connect, $_POST['email']);

$get_user_data = "SELECT * FROM thriftee_contribution WHERE EMAIL = '$email_' && CONTRIBUTION_PLAN = '$plan'";

$get_result_of_user = mysqli_query($connect, $get_user_data);

if (mysqli_num_rows($get_result_of_user) > 0) {
    $response = "<div class='alert alert-warning' role='alert'>
                    <h4>You cannot be added to thesame plan twice</h4>
                </div>";
}else {
    

    $insertRec = "INSERT INTO `thriftee_contribution`(`GROUP_ID`, `FIRSTNAME`, `LASTNAME`, 
    `PHONE_NUMBER`, `AMOUNT`, `COLLECTABLE`, `DATE`, `EMAIL`, `CONTRIBUTION_PLAN`, `STATUS`)
    VALUES ('','$firstname','$lastname','$phone','$amount_','$collectable_','','$email_','$plan','')";

     $checkINSERTTED_data = mysqli_query($connect,$insertRec);

     if (!$checkINSERTTED_data) {
         header('location:pages-error-404.php');
}else {
    unset($_POST);
      $response = "<div class='alert alert-success' role='alert'>
            <h4>Welcome onboard</h4> 
        </div>";
           
                            }
}
}


?>


<main id="main" class="main">



 <!-- ====================MODAL FORM ======================= -->
 <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalToggleLabel"> ROTATION CONTRIBUTION</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <form action="" method="post">                          
    <div class="modal-body">
    <div class="mb-3">
        <span class="text-dark">Select Contribution Plan:</span>
       <select name="plan" class="form-control" required id="">
        <option value=""></option>
        <option value="Daily Contribution">Daily Contribution</option>
        <option value="Weekly Contribution">Weekly Contribution</option>
        <option value="Monthly Contribution">Monthly Contribution</option>
       </select>
      </div>

     

      <div class="mb-3">
        <label class="form-label">FIRSTNAME</label>
        <input type="text" name="firstname"  require="required" class="form-control" >
      </div>
    
      <div class="mb-3">
        <label class="form-label">LASTNAME</label>
        <input type="text" name="lastname"  require="required" class="form-control" >
      </div>

      <div class="mb-3">
        <label  class="form-label">PHONE NUMBER</label>
        <input type="number" name="phone_number" require="required" class="form-control" placeholder="+234">
    
        <div class="mb-3">
        <label class="form-label">AMOUNT</label>
        <input type="number" name="amount" require="required" onchange="calc_collectable()" id='amount' class="form-control" placeholder="1000">
    </div>
    
    <div class="mb-3">
        <label class="form-label">COLLECTABLE</label>
        <input type="number" name="collectable" id='collectable'  readonly require="required" class="form-control" >
    </div>

    <div class="mb-3">
        <label class="form-label">EMAIL ADDRESS</label>
        <input type="text" name="email" value="<?php echo $_SESSION['USER_ID'] ?>" readonly require="required" class="form-control" >
    </div>

    <input type="submit" name="submit" class="btn btn-primary" onclick="return confirm('are you sure you want to submit?')" />
      </div>
        </div>
        </div>
      </div>
    </form>
</div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    </div>
    <a class="btn btn-success" data-bs-toggle="modal" href="#exampleModalToggle" role="button">JOIN A GROUP</a>
     <p class="text-secondary my-5" style="margin-left: 2%">join group of similar savers</p>                      
     </form>
     <?php echo $response ?>
    </div>
    
  

 <!-- ====================MODAL FORM END======================= -->
<section class="section">
    
  <div class="row">
    <div class="col-lg">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">DAILY CONTRIBUTORS</h5>

          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">FULLNAME</th>
                <th scope="col">PHONE NUMBER</th>
                <th scope="col">AMOUNT</th>
                <th scope="col">COLLECTABLE</th>
                <th scope="col">STATUS</th>
              </tr>
            </thead>

            <?php
        $daily_contribution = "SELECT * FROM thriftee_contribution";
        $check = mysqli_query($connect,$daily_contribution);
       
        while ($row = mysqli_fetch_array($check)) {
        $concat = $row['FIRSTNAME']. " " .$row['LASTNAME'];
            $phone_number = $row['PHONE_NUMBER'];
            $amount = $row['AMOUNT'];
            $collectable = $row['COLLECTABLE'];
            $status = $row['STATUS'];

            if ($row['CONTRIBUTION_PLAN'] == 'Daily Contribution') {
         
                echo '<tbody>
                <tr>
                <td>'.$concat.'</td>
                <td>'.$phone_number.'</td>
                <td>'.$amount.'</td>
                <td>'.$collectable.'</td>
                <td>'.$status.'</td>
              </tr>
              </tbody>';
                 }
            
        }
        




    
      ?>
              
          
            
          </table>
          <!-- End Default Table Example -->
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">WEEKLY CONTRIBUTORS</h5>

          <!-- Dark Table -->
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">FULLNAME</th>
                <th scope="col">PHONE NUMBER</th>
                <th scope="col">AMOUNT</th>
                <th scope="col">COLLECTABLE</th>
                <th scope="col">STATUS</th>
              </tr>
            </thead>

            <?php
        $daily_contribution = "SELECT * FROM thriftee_contribution";
        $check = mysqli_query($connect,$daily_contribution);
       
        while ($row = mysqli_fetch_array($check)) {
        $concat = $row['FIRSTNAME']. " " .$row['LASTNAME'];
            $phone_number = $row['PHONE_NUMBER'];
            $amount = $row['AMOUNT'];
            $collectable = $row['COLLECTABLE'];
            $status = $row['STATUS'];

            if ($row['CONTRIBUTION_PLAN'] == 'Weekly Contribution') {
         
                echo '<tbody>
                <tr>
                <td>'.$concat.'</td>
                <td>'.$phone_number.'</td>
                <td>'.$amount.'</td>
                <td>'.$collectable.'</td>
                <td>'.$status.'</td>
              </tr>
              </tbody>';
                 }
            
        }
        




    
      ?>
          </table>
          <!-- End Primary Color Bordered Table -->

        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">MONTHLY CONTRIBUTORS</h5>
          <!-- <p>Add <code>.table-sm</code> to make any <code>.table</code> more compact by cutting all cell padding in half.</p> -->
          <!-- Small tables -->
          <table class="table table-success">
            <thead>
              <tr>
                <th scope="col">FULLNAME</th>
                <th scope="col">PHONE NUMBER</th>
                <th scope="col">AMOUNT</th>
                <th scope="col">COLLECTABLE</th>
                <th scope="col">STATUS</th>
              </tr>
            </thead>
            <tbody>
            <?php
        $daily_contribution = "SELECT * FROM thriftee_contribution";
        $check = mysqli_query($connect,$daily_contribution);
       
        while ($row = mysqli_fetch_array($check)) {
        $concat = $row['FIRSTNAME']. " " .$row['LASTNAME'];
            $phone_number = $row['PHONE_NUMBER'];
            $amount = $row['AMOUNT'];
            $collectable = $row['COLLECTABLE'];
            $status = $row['STATUS'];

            if ($row['CONTRIBUTION_PLAN'] == 'Monthly Contribution') {
         
                echo '<tbody>
                <tr>
                <td>'.$concat.'</td>
                <td>'.$phone_number.'</td>
                <td>'.$amount.'</td>
                <td>'.$collectable.'</td>
                <td>'.$status.'</td>
              </tr>
              </tbody>';
                 }
            
        }
        




    
      ?>
          </table>
          <!-- End small tables -->

        </div>
      </div>

    </div>
  </div>
</section>

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
<script>
  function calc_collectable(){
    var amount = document.getElementById('amount').value;
    var value = (amount * 10);
document.getElementById('collectable').value = value;
  }
</script>
</body>

</html>