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
    }

?>