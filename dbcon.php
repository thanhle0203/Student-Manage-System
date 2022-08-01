<?php
    $servername = "localhost";
    $username = "thanhle";
    $password = "ella123";
    $dbname = "student_manage_system";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn) {
        die('Connection Failed'. mysqli_connect_error());
    }

?>