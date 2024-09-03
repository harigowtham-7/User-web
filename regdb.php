<?php
include("dbconfig.php");

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $age = $_POST["age"];

    $sql="INSERT INTO `user_reg`(`name`, `email`, `phone`, `password`, `age`) VALUES ('$name','$email',$phone,'$password','$age')";
    $result=mysqli_query($con,$sql);
    if (!$result) {
        die("Error: " . $con->error);
    }
    else{
        header("Location:login.php");
    }
}
?>