<?php


    $name = $_POST["name"]  ;
    $branch = $_POST["branch"] ;
    $email = $_POST["email"] ;
    $phoneNumber = $_POST["phonenumber"] ;
    $password=$_POST["password"];
    $confirm=$_POST["confirm_password"];
    $check=$_POST["agree"];


    if($password!=$confirm){
        die("Passwords do not match.");
    }

    if (empty($name)) {
        echo "Name is empty <br>";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email is invalid <br>";
    }
    if (strlen($phoneNumber) !== 10) {
    echo "Invalid phone number <br>";
    }
    if (!is_numeric($phoneNumber)) {
        echo "Invalid phone number <br>";
    }
?>
