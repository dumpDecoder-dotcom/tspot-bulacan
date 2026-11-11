<?php
    include "connect.php";

    if(isset($_POST['submit'])){

        $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : null;
        $category = isset($_POST['category']) ? $_POST['category'] : null;
        $location = isset($_POST['location']) ? $_POST['location'] : null;


        $query = "SELECT * FROM ";
    }
?>