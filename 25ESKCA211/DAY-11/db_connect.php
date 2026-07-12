<?php

$host = "localhost";
$user = "root";
$password = "12345";
$database = "industrial_training";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connected successfully <br>";
}
?>
