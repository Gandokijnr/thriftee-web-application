<?php

include 'connect.php';

// fectching data from the database for auto fill

$ID = $_GET['viewid'];
$getdetails = "SELECT * FROM `thrift_registration` WHERE USER_ID = $ID";
$result = mysqli_query($connect, $getdetails);

// fectching data from the database for auto fill ends here

$row = mysqli_fetch_assoc($result);
$FIRSTNAME = $row['FIRSTNAME'];
$LASTNAME = $row['LASTNAME'];
$EMAIL = $row['EMAIL'];
$PHONE_NUMBER = $row['PHONE_NUMBER'];
?>