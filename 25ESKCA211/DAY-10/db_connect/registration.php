<?php

    include('db_connect.php');
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $branch=mysqli_real_escape_string($conn,$_POST['branch']);
        $phoneNumber=mysqli_real_escape_string($conn,$_POST["phonenumber"]);
        $cgpa=mysqli_real_escape_string($conn,$_POST["cgpa"]);
        $roll_no=mysqli_real_escape_string($conn,$_POST["roll_no"]);

        $sql="INSERT INTO student(name,branch,phone_number,cgpa,roll_no)
              VALUES('$name','$branch','$phoneNumber','$cgpa','$roll_no')";
        
        if(mysqli_query($conn,$sql)){
            echo"<br>Student Registered Successfully!";
        }else{
            echo"Error:".mysqli_error($conn);
        }
    }
?>
