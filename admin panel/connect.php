<?php
$connect = mysqli_connect('localhost', 'root', '', 'thrftee');

if (!$connect) {
    die('cannot connect'.mysqli_error($connect));
}
?>