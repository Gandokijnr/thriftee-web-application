<?php
session_start();
include_once 'connect.php';


$MESSAGE = "";
function extendedAddslash(array $params): array{
  foreach ($params as &$var){
    is_array($var) ? ExtendedAddslash($var) : $var = addslashes($var);
    unset($var);
  }
  return $params;
}



if (isset($_POST['submit'])) {
  $title = mysqli_real_escape_string($connect, $_POST['title']);
  $firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
//   $birthmonth = mysqli_real_escape_string($connect, $_POST['birthmonth']);
  $birthday = mysqli_real_escape_string($connect, $_POST['birthday']);
  $birthyear = mysqli_real_escape_string($connect, $_POST['birthyear']);
  $marital_status = mysqli_real_escape_string($connect, $_POST['marital_status']);
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $amount_needed = mysqli_real_escape_string($connect, $_POST['amount_needed']);
  $phone_number = mysqli_real_escape_string($connect, $_POST['phone_number']);
  $street_address = mysqli_real_escape_string($connect, $_POST['street_address']);
  $city_address = mysqli_real_escape_string($connect, $_POST['city_address']);
  $state = mysqli_real_escape_string($connect, $_POST['state']);
  $postal_code = mysqli_real_escape_string($connect, $_POST['postal_code']);
  $resident_duration = mysqli_real_escape_string($connect, $_POST['resident_duration']);
  $presentemployer = mysqli_real_escape_string($connect, $_POST['presentemployer']);
  $office_name = mysqli_real_escape_string($connect, $_POST['office_name']);
  $employment_status = mysqli_real_escape_string($connect, $_POST['employment_status']);
  $monthly_income = mysqli_real_escape_string($connect, $_POST['monthly_income']);
  $monthly_rent = mysqli_real_escape_string($connect, $_POST['monthly_rent']);
  $comments = mysqli_real_escape_string($connect, $_POST['comments']);


  $select = "SELECT `EMAIL`, `PHONE_NUMBER` FROM `thrift_loan` WHERE EMAIL = '$email' && PHONE_NUMBER = '$phone_number'";

  $result = mysqli_query($connect, $select);

  if (mysqli_num_rows($result) > 0) {
    $MESSAGE = "<div class='alert alert-danger' role='alert'>
    USER ALREADY HAVE A PENDING LOAN APPLICATION
    </div>";
  }else {
    $insert = "INSERT INTO thrift_loan(USER_ID, TITLE, FIRSTNAME, LASTNAME, BIRTHDATE, 
    MARITAL_STATUS, EMAIL, AMOUNT, PHONE_NUMBER, STREET_NUMBER, CITY, STATE_PROVINCE, 
    POSTAL_CODE, RESIDENCE_DURATION, PRESENT_EMPLOYER, OFFICE_ADDRESS, EMPLOYMENT_STATUS, 
    MONTHLY_INCOME, MONTHLY_MORTGAGE_RENT, COMMENT) VALUES ('','$title','$firstname',
    '$lastname','$birthday','$marital_status','$email','$amount_needed','$phone_number','$street_address','$city_address',
    '$state','$postal_code','$resident_duration','$presentemployer','$office_name','$employment_status','$monthly_income',
    '$monthly_rent','$comments')";

       $insertResult = mysqli_query($connect, $insert);

       if ($insertResult) {

        $insert = "Data has been inserted Succesfully";
        // $MESSAGES = "
        // <h3>
        // <script>
        //             swal({
        //             title: 'Good job!',
        //             text: 'Your Loan Application Form has been submitted successfully',
        //             icon: 'success',
        //             button: 'OKAY!,
        //           });
        //     </script>
        //     </h3>
        //     ";
       }
  }

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Loan Application</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- CSS only -->
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f30e2a790832f3e96009402"/>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<!--    ============sweet alert============ -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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

  <main id="main" class="main">
     
  <form action="" method="post">
        <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_74" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 class="form-header">
              Loan Application Form

            </h1>
            <?php 
            if (isset($insert)) { ?>
            <?php
            
            echo'
            
                <script>
                
                    swal({
                        title: "THANK YOU!",
                        text: "LOAN APPLICATION FORM HAS BEEN SUBMITTED SUCCESSULLY!",
                        icon: "success",
                        });
                </script>';
                
            }
            
            ?>
          </div>
        </div>
      </li>
      <li class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-small">
          <div class="header-text httal htvam">
            <h3 id="header_75" class="form-header" data-component="header">
              Contact Information
            </h3>
          </div>
        </div>
      </li>
      <?php
      echo $MESSAGE ?>
      <li class="form-line" data-type="control_dropdown" id="id_15">
        <label class="form-label form-label-top form-label-auto" id="label_15" for="input_15"> Title: </label>
        <div id="cid_15" class="form-input-wide" data-layout="half">
          <select class="form-dropdown" id="" name="title" data-component="dropdown">
            <option value=""> Please Select </option>
            <option value="Mr"> Mr </option>
            <option value="Mrs"> Mrs </option>
            <option value="Ms"> Ms </option>
          </select>
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_fullname">
        <label class="form-label form-label-top form-label-auto">
          Name
          <span class="form-required">
            *
          </span>
        </label>
        <div class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" data-input-type="first">
              <input type="text" name="firstname" class="form-textbox validate[required]" autoComplete="section-input_61 given-name" size="10" value="" data-component="first" aria-labelledby="label_61 sublabel_61_first" required="" />
              <label class="form-sub-label"> First Name </label>
            </span>
            <span class="form-sub-label-container" data-input-type="last">
              <input type="text" name="lastname" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_61 family-name" size="15" value="" data-component="last" aria-labelledby="label_61 sublabel_61_last" required="" />
              <label class="form-sub-label" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_birthdate">
        <label class="form-label form-label-top form-label-auto"> Birth Date </label>
        <div class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container">
              <select name="birthmoth" class="form-dropdown" data-component="birthdate-month">
                <option>  </option>
                <option value="January"> January </option>
                <option value="February"> February </option>
                <option value="March"> March </option>
                <option value="April"> April </option>
                <option value="May"> May </option>
                <option value="June"> June </option>
                <option value="July"> July </option>
                <option value="August"> August </option>
                <option value="September"> September </option>
                <option value="October"> October </option>
                <option value="November"> November </option>
                <option value="December"> December </option>
              </select>
              <label class="form-sub-label" for="input_62_month"> Month </label>
            </span>
            <span class="form-sub-label-container">
              <select name="birthday" class="form-dropdown" data-component="birthdate-day">
                <option>  </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                <option value="11"> 11 </option>
                <option value="12"> 12 </option>
                <option value="13"> 13 </option>
                <option value="14"> 14 </option>
                <option value="15"> 15 </option>
                <option value="16"> 16 </option>
                <option value="17"> 17 </option>
                <option value="18"> 18 </option>
                <option value="19"> 19 </option>
                <option value="20"> 20 </option>
                <option value="21"> 21 </option>
                <option value="22"> 22 </option>
                <option value="23"> 23 </option>
                <option value="24"> 24 </option>
                <option value="25"> 25 </option>
                <option value="26"> 26 </option>
                <option value="27"> 27 </option>
                <option value="28"> 28 </option>
                <option value="29"> 29 </option>
                <option value="30"> 30 </option>
                <option value="31"> 31 </option>
              </select>
              <label class="form-sub-label" for="input_62_day"> Day </label>
            </span>
            <span class="form-sub-label-container">
              <select name="birthyear" class="form-dropdown" data-component="birthdate-year">
                <option>  </option>
                <option value="2022"> 2022 </option>
                <option value="2021"> 2021 </option>
                <option value="2020"> 2020 </option>
                <option value="2019"> 2019 </option>
                <option value="2018"> 2018 </option>
                <option value="2017"> 2017 </option>
                <option value="2016"> 2016 </option>
                <option value="2015"> 2015 </option>
                <option value="2014"> 2014 </option>
                <option value="2013"> 2013 </option>
                <option value="2012"> 2012 </option>
                <option value="2011"> 2011 </option>
                <option value="2010"> 2010 </option>
                <option value="2009"> 2009 </option>
                <option value="2008"> 2008 </option>
                <option value="2007"> 2007 </option>
                <option value="2006"> 2006 </option>
                <option value="2005"> 2005 </option>
                <option value="2004"> 2004 </option>
                <option value="2003"> 2003 </option>
                <option value="2002"> 2002 </option>
                <option value="2001"> 2001 </option>
                <option value="2000"> 2000 </option>
                <option value="1999"> 1999 </option>
                <option value="1998"> 1998 </option>
                <option value="1997"> 1997 </option>
                <option value="1996"> 1996 </option>
                <option value="1995"> 1995 </option>
                <option value="1994"> 1994 </option>
                <option value="1993"> 1993 </option>
                <option value="1992"> 1992 </option>
                <option value="1991"> 1991 </option>
                <option value="1990"> 1990 </option>
                <option value="1989"> 1989 </option>
                <option value="1988"> 1988 </option>
                <option value="1987"> 1987 </option>
                <option value="1986"> 1986 </option>
                <option value="1985"> 1985 </option>
                <option value="1984"> 1984 </option>
                <option value="1983"> 1983 </option>
                <option value="1982"> 1982 </option>
                <option value="1981"> 1981 </option>
                <option value="1980"> 1980 </option>
                <option value="1979"> 1979 </option>
                <option value="1978"> 1978 </option>
                <option value="1977"> 1977 </option>
                <option value="1976"> 1976 </option>
                <option value="1975"> 1975 </option>
                <option value="1974"> 1974 </option>
                <option value="1973"> 1973 </option>
                <option value="1972"> 1972 </option>
                <option value="1971"> 1971 </option>
                <option value="1970"> 1970 </option>
                <option value="1969"> 1969 </option>
                <option value="1968"> 1968 </option>
                <option value="1967"> 1967 </option>
                <option value="1966"> 1966 </option>
                <option value="1965"> 1965 </option>
                <option value="1964"> 1964 </option>
                <option value="1963"> 1963 </option>
                <option value="1962"> 1962 </option>
                <option value="1961"> 1961 </option>
                <option value="1960"> 1960 </option>
                <option value="1959"> 1959 </option>
                <option value="1958"> 1958 </option>
                <option value="1957"> 1957 </option>
                <option value="1956"> 1956 </option>
                <option value="1955"> 1955 </option>
                <option value="1954"> 1954 </option>
                <option value="1953"> 1953 </option>
                <option value="1952"> 1952 </option>
                <option value="1951"> 1951 </option>
                <option value="1950"> 1950 </option>
                <option value="1949"> 1949 </option>
                <option value="1948"> 1948 </option>
                <option value="1947"> 1947 </option>
                <option value="1946"> 1946 </option>
                <option value="1945"> 1945 </option>
                <option value="1944"> 1944 </option>
                <option value="1943"> 1943 </option>
                <option value="1942"> 1942 </option>
                <option value="1941"> 1941 </option>
                <option value="1940"> 1940 </option>
                <option value="1939"> 1939 </option>
                <option value="1938"> 1938 </option>
                <option value="1937"> 1937 </option>
                <option value="1936"> 1936 </option>
                <option value="1935"> 1935 </option>
                <option value="1934"> 1934 </option>
                <option value="1933"> 1933 </option>
                <option value="1932"> 1932 </option>
                <option value="1931"> 1931 </option>
                <option value="1930"> 1930 </option>
                <option value="1929"> 1929 </option>
                <option value="1928"> 1928 </option>
                <option value="1927"> 1927 </option>
                <option value="1926"> 1926 </option>
                <option value="1925"> 1925 </option>
                <option value="1924"> 1924 </option>
                <option value="1923"> 1923 </option>
                <option value="1922"> 1922 </option>
                <option value="1921"> 1921 </option>
                <option value="1920"> 1920 </option>
              </select>
              <label class="form-sub-label" for="input_62_year" aria-hidden="false"> Year </label>
            </span>
          </div>
        </div>
      </li>

        <li class="form-line" data-type="control_dropdown" id="id_15">
        <label class="form-label form-label-top form-label-auto" id="label_15" for="input_15"> Marital Status:
        <span class="form-required">
            *
          </span>
</label>
        <div id="cid_15" class="form-input-wide" data-layout="half">
          <select class="form-dropdown" id="" name="marital_status" data-component="dropdown">
            <option value=""> Please Select </option>
            <option value="Single"> Single </option>
            <option value="Married"> Married </option>
            <option value="Divorce"> Divorce </option>
            <option value="Order"> Order </option>
          </select>
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_email">
        <label class="form-label form-label-top form-label-auto" for="input_78">
          E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div class="form-input-wide jf-required" data-layout="half">
          <span class="form-sub-label-container">
            <input type="email" name="email" class="form-textbox validate[required, Email]" data-defaultvalue="" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_78 sublabel_input_78" required="" />
            <label class="form-sub-label" for="input_78" aria-hidden="false"> example@example.com </label>
          </span>
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_email">
        <label class="form-label form-label-top form-label-auto" for="input_78">
          Amount Needed
          <span class="form-required">
            *
          </span>
        </label>
        <div class="form-input-wide jf-required" data-layout="half">
          <span class="form-sub-label-container">
            <input type="number" name="amount_needed" class="form-textbox validate[required, Number]" data-defaultvalue="" value="" placeholder="ex: 2000" data-component="number" aria-labelledby="label_78 sublabel_input_78" required="" />
            <label class="form-sub-label" for="input_78" aria-hidden="false">2000</label>
          </span>
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_phone">
        <label class="form-label form-label-top form-label-auto" for="input_72_full">
          Phone
          <span class="form-required">
            *
          </span>
        </label>
        <div class="form-input-wide jf-required" data-layout="half">
          <span class="form-sub-label-container">
            <input type="tel" name="phone_number" data-type="number" class="phone-number form-textbox validate[required, Fill Mask]" data-defaultvalue="" autoComplete="section-input_72 tel-national" data-masked="true" value="" placeholder="090-000-0000" data-component="phone" aria-labelledby="label_72" required="" />
            <label class="form-sub-label is-empty" for="input_72_full" aria-hidden="false">  </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_address">
        <label class="form-label form-label-top form-label-auto" for="input_76_addr_line1">
          Address
          <span class="form-required">
            *
          </span>
        </label>
        <div class="form-input-wide jf-required" data-layout="full">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" name="street_address" class="form-textbox validate[required] form-address-line" data-defaultvalue="" autoComplete="section-input_76 address-line1" value="" data-component="address_line_1" aria-labelledby="label_76 sublabel_76_addr_line1" required="" />
                  <label class="form-sub-label" for="input_76_addr_line1" style="min-height:13px" aria-hidden="false"> Street Address </label>
                </span>
              </span>
            </div>
        
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" name="city_address" class="form-textbox validate[required] form-address-city" data-defaultvalue="" autoComplete="section-input_76 address-level2" value="" data-component="city" aria-labelledby="label_76 sublabel_76_city" required="" />
                  <label class="form-sub-label" for="input_76_city" style="min-height:13px" aria-hidden="false"> City </label>
                </span>
              </span>

              <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" name="state" class="form-textbox validate[required] form-address-state" data-defaultvalue="" autoComplete="section-input_76 address-level1" value="" data-component="state" aria-labelledby="label_76 sublabel_76_state" required="" />
                  <label class="form-sub-label" for="input_76_state" style="min-height:13px" aria-hidden="false"> State / Province </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" name="postal_code" class="form-textbox validate[required] form-address-postal" data-defaultvalue="" autoComplete="section-input_76 postal-code" value="" data-component="zip" aria-labelledby="label_76 sublabel_76_postal" required="" />
                  <label class="form-sub-label" for="input_76_postal" style="min-height:13px" aria-hidden="false"> Postal / Zip Code </label>
                </span>
              </span>
            </div>
          </div>
        </div>
      </li>
        <li class="form-line" data-type="control_dropdown" id="id_15">
        <label class="form-label form-label-top form-label-auto" id="label_15" for="input_15">  How long have you lived in your given address?
        <span class="form-required">
            *
          </span>
      </label>
        <div id="cid_15" class="form-input-wide" data-layout="half">
          <select class="form-dropdown" id="" name="resident_duration" data-component="dropdown">
            <option value=""> Please Select </option>
            <option value="0-1"> 0-1 </option>
            <option value="1-2"> 1-2 </option>
            <option value="2-3"> 2-3 </option>
            <option value="3-4"> 3-4 </option>
            <option value="5 years or more"> 5 years or more </option>
          </select>
        </div>
      </li>
      <li id="cid_50" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-small">
          <div class="header-text httal htvam">
            <h3 id="header_50" class="form-header" data-component="header">
              Employment Information
            </h3>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_29">
        <label class="form-label form-label-top form-label-auto" id="label_29" for="input_29">
          Present Employer
        </label>
        <div id="cid_29" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="input_29" name="presentemployer" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="if you are working" data-component="textbox" aria-labelledby="label_29" required="" />
        </div>
      </li>
      
      <li class="form-line" data-type="control_textbox" id="id_30">
        <label class="form-label form-label-top form-label-auto" id="label_30" for="input_30">
          Office Name
        </label>
        <div id="cid_30" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="input_30" name="office_name" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" placeholder=" " data-component="textbox" aria-labelledby="label_30" required="" />
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_30">
        <label class="form-label form-label-top form-label-auto text-danger" id="label_30" for="input_30">
         Unemployed? typed 'yes in the box'. Other wise fill the above employer. name
        </label>
        <div id="cid_30" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="input_30" name="employment_status" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" placeholder=" " data-component="textbox" aria-labelledby="label_30" required="" />
        </div>
    
      <li class="form-line jf-required" data-type="control_number" id="id_80">
        <label class="form-label form-label-top form-label-auto" id="label_80" for="input_80">
          Gross monthly income
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_80" class="form-input-wide jf-required" data-layout="half">
          <input type="number" id="input_80" name="monthly_income" data-type="input-number" class=" form-number-input form-textbox validate[required, Numeric]" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="ex: 1500" data-component="number" aria-labelledby="label_80" required="" step="any" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_number" id="id_81">
        <label class="form-label form-label-top form-label-auto" id="label_81" for="input_81">
          Monthly rent/mortgage
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_81" class="form-input-wide jf-required" data-layout="half">
          <input type="number" id="input_81" name="monthly_rent" data-type="input-number" class=" form-number-input form-textbox validate[required, Numeric]" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="ex: 0 for no rent/mortgage" data-component="number" aria-labelledby="label_81" required="" step="any" />
        </div>
      </li>
     
      <li class="form-line" data-type="control_textarea" id="id_44">
        <label class="form-label form-label-top form-label-auto" id="label_44" for="input_44"> Comments: </label>
        <div id="cid_44" class="form-input-wide" data-layout="full">
          <textarea id="input_44" class="form-textarea" name="comments" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_44"></textarea>
        </div>
      </li>



      <li class="form-line jf-required" data-type="control_checkbox" id="id_51">
        <label class="form-label form-label-top" id="label_51" for="input_51">
          I authorize prospective Credit Grantors/Lending/Leasing Companies to obtain personal and credit information about me from my employer and credit bureau, or credit reporting agency, any person who has or may have any financial dealing with me, or from any references I have provided. This information, as well as that provided by me in the application, will be referred to in connection with this lease and any other relationships we may establish from time to time. Any personal and credit information obtained may be disclosed from time to time to other lenders, credit bureaus or other credit reporting agencies. *
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_51" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_51" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" aria-describedby="label_51" class="form-checkbox validate[required]" id="input_51_0" name="Authorize" value="YES" required="" />
              <label id="label_input_51_0" for="input_51_0"> YES </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_checkbox" id="id_52">
        <label class="form-label form-label-top" id="label_52" for="input_52">
          I hereby agree that the information given is true, accurate and complete as of the date of this application submission. *
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_52" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_52" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" aria-describedby="label_52" class="form-checkbox validate[required]" id="input_52_0" name="q52_iHereby[]" value="YES" required="" />
              <label id="label_input_52_0" for="input_52_0"> YES </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_45">
        <div id="cid_45" class="form-input-wide" data-layout="full">
          <div data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
            <button id="input_45" type="submit" name="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Send Application Now
            </button>
          </div>
        </div>
      </li>
    </ul>
  </div>
  </form>


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