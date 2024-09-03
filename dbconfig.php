<?php
$dbhost = "localhost";
     $dbuser = "root";
     $dbpass = "";
     $dbname = "esports";
     
     $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
     if ($con->connect_error) {
         die("Connection failed: " . $con->connect_error);
     }
    /* if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $grade=$_POST["grade"];
        $message=$_POST["message"];

    
    
        
    $sql="INSERT INTO `enquery`(`name`, `email`, `phone`, `subject`, `message`) 
    VALUES ('$name','$email','$phone','$grade','$message')";
    $result =mysqli_query($con, $sql);
    if (!$result) {
        die("Error: " . $con->error);
    }
    
}*/
     ?>