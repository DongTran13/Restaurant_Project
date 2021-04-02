<?php
require('../model/config.php');
if(isset($_POST["save"])){
    $name = mysqli_real_escape_string($conn, $_POST["username"]);
    $day = mysqli_real_escape_string($conn, $_POST["day"]);
    $telephone = mysqli_real_escape_string($conn, $_POST["telephone"]);
    $time = mysqli_real_escape_string($conn, $_POST["time"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);


    $sql = "INSERT INTO `information`(`name`, `day`, `telephone`, `hour`, `email`) VALUES ('$name','$day','$telephone','$time','$email')";

    if ($conn ->query($sql)){
        header('location:../view/index.php');
    }
}
?>