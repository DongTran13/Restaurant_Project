<?php
    if (isset($_POST['save'])){
        if (empty($_POST['username'])){
            $erroName = "Please enter your name!";
        }
        if (empty($_POST['day'])) {
            $erroDate = "Please enter when you want to book table ?";
        }
        if (empty($_POST['telephone'])){
            $erroTelephone = "Please enter your telephone!";
        }
        if (empty($_POST['time'])){
            $erroTime = "Please enter What time are you want to book table ?";
        }
        if (empty($_POST['email'])){
            $erroEmail = "Please enter your email!";
        }
        if (empty($_POST['table'])){
            $erroTable = "Please enter which table you want to sit !!";
        }else{
                $countTable = $_POST['table'];
                $sql = "SELECT COUNT(bookTable) FROM information WHERE bookTable = '$countTable'";
                if($sql > 0){
                    $erroTable = "This table have already been booked !";
                }
        }

        if(empty($erroEmail) && empty($erroTime)  && empty($erroTelephone) && empty($erroDate)  && empty($erroName) && empty($erroTable)){
            require_once ('../model/insert.php');
        }
    }

?>