<?php
session_start();
include_once 'connect.php';



if (isset($_POST['submit'])) {
   
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password =  md5($_POST['password']);
    
    $sql = "SELECT * FROM `registration` WHERE email = '$email' && password = '$password'";

    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) == 1) {

       $row = mysqli_fetch_array($result);

    
       if($row['usertype'] == 'admin') {

        $_SESSION['admin_name'] = $row['email'];
        header('location:admin.php');
        

    }else {
        $error[] = 'incorrect email or password';
    }

}

};


?>

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ThrifTEE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- chart cdn link -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body class="bg-dark">

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

    <div class="pagetitle">
      <h1 class="text-light">Dashboard</h1>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Number <span>| of Users</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                        <?php
                      
                      $collectresult = "SELECT USER_ID FROM `thrift_registration` ORDER BY USER_ID";
                      $query = mysqli_query($connect, $collectresult);
                      $result = mysqli_num_rows($query);

                      echo "<h3 class='text-center my-3'>$result</h3>";
                      

                      ?>
                      </h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">


                <div class="card-body">
                  <h5 class="card-title">Total <span>| Contribution</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                      <?php
                      
                
                      $sql = "SELECT  SUM(AMOUNT) from thriftee_contribution";
                      $contribution_result = mysqli_query($connect, $sql);
                      $row = mysqli_fetch_assoc($contribution_result);
                      $contribution = $row['SUM(AMOUNT)'];
                      echo "<h6 class='text-center my-3'>₦ $contribution</h6>";                                            


                      ?>
                    
                      </h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

              

                <div class="card-body">
                  <h5 class="card-title">Loan <span>| Applicants</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-wallet2"></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                      <?php
                      
                
                      $collectresult = "SELECT USER_ID FROM `thrift_loan` ORDER BY USER_ID";
                      $query = mysqli_query($connect, $collectresult);
                      $result = mysqli_num_rows($query);

                      echo "<h3 class='text-center my-3'>$result</h3>";                                           


                      ?>
                      </h6>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                
               

              </div>
              
            </div><!-- End Reports -->
            
            <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">REGISTERED USERS</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">User_ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                                    include 'connect.php';


                                    $select = "SELECT * FROM `thrift_registration`";

                                    $result = mysqli_query($connect, $select);

                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $ID = $row['USER_ID'];
                                            $FULLNAME = $row['FIRSTNAME'] .'  ' . $row['LASTNAME'];
                                            $EMAIL = $row['EMAIL'];
                                            $PHONE_NUMBER = $row['PHONE_NUMBER'];

                                            echo '<tbody>
                                            <tr>
                                                 <td>'.$ID.'</td>
                                                <td>'.$FULLNAME.'</td>
                                                <td>'.$EMAIL.'</td>
                                                <td>'.$PHONE_NUMBER.'</td>
                                                <td>
                                                <button class="btn btn-primary"><a href="admin-view.php?viewid='.$ID.'" class="text-light"><i class="bi bi-binoculars-fill"></i></a>
                                                </button>
                                                <button class="btn btn-danger" onclick("are you sure you want to delete user?")><a href="admin-delete.php?deleteid='.$ID.'" class="text-light"><i class="fa-solid fa-trash"></i></a></button>
                                                </td>
                                            </tr>
                                        </tbody>';
                                        }
                                    }

                                    ?>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>


        </div>

      
      </div>
    </section>
           

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">

            <div class="card-body">
              <h5 class="card-title"> NOTIFICATION<span>| FROM USERS </span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    <p class="text-dark">ThrifTEE was established to avail young professionals, entrepreneurs and SME Owners access to a stream of private funds that would serve as source of credit and investment opportunities even in an unstable economic environment.

                    At your comfort zones, Cloud Cooperative would grant you access to loans with fair interest rates! We want to ease the burden of having to go through traditional banks to access loans.

                    We are targeted at reaching entrepreneurs or individuals who are keen on reaching their personal, economic, academic and social goals through a jointly shared contributions-based scheme.</p>                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

          <!-- Budget Report -->
          <div class="card">
            <div class="card-body pb-0">
              <h5 class="card-title">ACTIVITIES <span>| LOG</span></h5>
            <p class="text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet sit numquam tempore dolorum animi nihil molestiae, repudiandae ea cum ipsum fugit saepe atque at vero? Officiis impedit nulla voluptatum quisquam.</p>
          </div><!-- End Budget Report -->


          
      </div>
      
    </section>

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>ThrifTEE</span></strong>. All Rights Reserved
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