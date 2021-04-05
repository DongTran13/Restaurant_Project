<?php
if (isset($_POST['save'])){
    if (empty($_POST['name'])){
        $erroName = "Please enter your name!";
    }
    if (empty($_POST['telephone'])){
        $erroTelephone = "Please enter your telephone!";
    }
    if (empty($_POST['email'])){
        $erroEmail = "Please enter your email!";
    }
    if (empty($_POST['comman'])){
        $erroNote = "Please enter your comment!";
    }
    if(empty($erroEmail) && empty($erroName)  && empty($erroTelephone) && empty($erroNote)){
        require_once ('../model/insert_comman.php');
    }
}

?>