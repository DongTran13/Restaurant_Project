<?php
require('config.php');
if (isset($_POST['save'])) {
    if (empty($_POST['username'])) {
        $erroName = "Please enter your name!";
    }
    if (empty($_POST['day'])) {
        $erroDate = "Please enter when you want to book table ?";
    }
    if (empty($_POST['telephone'])) {
        $erroTelephone = "Please enter your telephone!";
    }
    if (empty($_POST['time'])) {
        $erroTime = "Please enter What time are you want to book table ?";
    }
    if (empty($_POST['email'])) {
        $erroEmail = "Please enter your email!";
    }
    if (empty($_POST['bookTable'])) {
        $erroTable = "Please enter which table you want to sit !!";
    } else if (isset($_POST['bookTable'])) {
        $table = $_POST['bookTable'];
        $result = mysqli_query($conn, "SELECT * FROM `information` WHERE bookTable = '$table' ");
        if (mysqli_num_rows($result) >= 1 ){
            $erroTable="This table has already booked";
        }

    }
    if (empty($erroEmail) && empty($erroTime) && empty($erroTelephone) && empty($erroDate) && empty($erroName) && empty($erroTable)) {
        require_once('../model/insert.php');
    }
}

?>