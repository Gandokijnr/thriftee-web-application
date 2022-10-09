<?php
include 'connect.php';
if (isset($_GET['deleteid'])) {

    $ID = $_GET['deleteid'];
    $sql = "DELETE FROM `thrift_loan` WHERE USER_ID = $ID";
    $delete = mysqli_query($connect, $sql);
    if ($delete) {
        header('location:admin-delete.php');
    }
    else {
       header('location:error-page.php');
    }

}
    





?>