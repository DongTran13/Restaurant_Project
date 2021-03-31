<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user";
$conn =  mysqli_connect($servername, $username, $password, $database);

mysqli_set_charset($conn, 'utf8mb4');
if(!$conn){
    die('Could not Connect My Sql:' .mysqli_error());
}
?>
