<?php
require('../model/config.php');
if(isset($_POST["save"])){
    $name = mysqli_real_escape_string($conn, $_POST["username"]);
    $day = mysqli_real_escape_string($conn, $_POST["day"]);
    $telephone = mysqli_real_escape_string($conn, $_POST["telephone"]);
    $time = mysqli_real_escape_string($conn, $_POST["time"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $table = mysqli_real_escape_string($conn, $_POST["table"]);



    $sql = "INSERT INTO `information`(`name`, `day`, `telephone`, `hour`, `email`, `bookTable`) VALUES ('$name','$day','$telephone','$time','$email','$table')";

    if ($conn ->query($sql)){
        header('location:../view/index.php');
    }
}
?>