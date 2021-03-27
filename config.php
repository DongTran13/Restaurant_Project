<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user";


$conn = new mysqli($servername, $username, $password, $database);

mysqli_set_charset($conn, 'utf8mb4');

?>
