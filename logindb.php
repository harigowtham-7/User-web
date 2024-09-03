<?php 
session_start();
include("dbconfig.php");

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];


    $sql="SELECT * FROM `user_reg` WHERE `email`='$email' and `password`='$pass' ";
    $result=mysqli_query($con,$sql);
    $rows=mysqli_fetch_array($result);
    if(mysqli_num_rows($result)>0){
        //  echo "login succes";
        $_SESSION["user"]=$user;
        $_SESSION['uname']=$rows['name'];
        header("Location: index.php");
       }
       else{
        echo '<script>alert("Wrong Username or Password")</script>';
     echo "<script>window.location.href='login.php'</script>";
       
           
          
       }
    
    
   
   

}
?>