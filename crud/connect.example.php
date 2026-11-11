<?php
    $database_name = "";

    $conn = mysqli_connect("localhost", "root", "");
    if(!mysqli_select_db($conn, $database_name)){
        die("Connection Error!");
    }
?>