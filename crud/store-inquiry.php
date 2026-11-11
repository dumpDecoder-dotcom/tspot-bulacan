<?php
    include "connect.php";

    if(isset($_POST["submit"])){

        $fname = !empty($_POST["fname"]) ? $_POST["fname"] : NULL;
        $lname = !empty($_POST["lname"]) ? $_POST["lname"] : NULL;
        $email = !empty($_POST["email"]) ? $_POST["email"] : NULL;
        $inquiry_message = !empty($_POST["message"]) ? $_POST["message"] : NULL;

        $query = "INSERT INTO inquiries (fname, lname, email, inquiry_message) VALUES ('$fname', '$lname', '$email', '$inquiry_message')";
    }
    else {
        echo "A Problem Occurred. Please Try Again. <br> Redirecting in 3 secs.";
        header("refresh: 3s; url=../contacts.html");
    }
?>