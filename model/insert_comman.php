<?php
require('../model/config.php');
if(isset($_POST["save"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $comman = mysqli_real_escape_string($conn, $_POST["comman"]);
    $telephone = mysqli_real_escape_string($conn, $_POST["telephone"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);


    $sql = "INSERT INTO `comment_restaurant`(`name`, `email`, `telephone`, `note`) VALUES ('$name','$email','$telephone','$comman')";

    if ($conn ->query($sql)){
        header('location:../view/index.php');
    }
}
?>