<?php 
    $con = mysqli_connect('localhost', 'root', '');
    $database = mysqli_select_db($con, 'galize');

    if (!$con || !$database) {
        echo mysqli_error($con);
    }
?>