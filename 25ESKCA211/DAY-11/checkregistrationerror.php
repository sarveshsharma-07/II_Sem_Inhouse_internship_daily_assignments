<?php
$error="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn,$_POST['confirmpassword']);

    if ($name == "" || $email == "" || $password == "") {
        $error = "All fields are required.";
        echo $error;
    } elseif($password!=$confirmPassword){
        $error="Password does not match.";
        echo $error;    
    }
    else {
        $insertQuery="INSERT INTO user(name,email,password)
                      VALUES('$name','$email','$password')";

        $result=mysqli_query($conn,$insertQuery);

        if($result){
            header("Location: success.php");
        }else{
            echo "Error occured while storing data ";
            echo"Error:".mysqli_error($conn);
        }
        exit();
    }
}
?>
