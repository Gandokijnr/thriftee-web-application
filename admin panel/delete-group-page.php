<?php
include 'connect.php';
if (isset($_GET['deleteid'])) {

    $ID = $_GET['deleteid'];
    $sql = "DELETE FROM `thriftee_contribution` WHERE GROUP_ID = $ID";
    $delete = mysqli_query($connect, $sql);
    if ($delete) {
        header('location:group-members.php');
    }
    else {
       header('location:error-page.php');
    }

}
    





?>