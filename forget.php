<?php include("dbconfig.php"); ?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eSPORTS-Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="wrapper-login">
    <form action="" method="post" id="form">
      <h2>Don't Worry!</h2>
        <div class="input-field">
        <input type="email" name="email" id="email" required>
        <label>Enter your email</label>
      </div>
      
      
      <button type="submit" name="submit">Submit</button>
     
    </form>
  </div>
  
</body>
<?php 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $sql="SELECT * FROM `user_reg` WHERE `email`='$email' ";
    $result=mysqli_query($con,$sql);
    $rows=mysqli_fetch_array($result);
    $pass = $rows['password'];

    // ------mailer--- //
    $mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();                              //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;             //Enable SMTP authentication
    $mail->Username   = 'harigowtham5533@gmail.com';   //SMTP write your email
    $mail->Password   = 'ekrazszrsnvhamlf';      //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('harigowtham5533@gmail.com'); // Sender Email and name
    
    
        //$mail->addAddress($email);
        $mail->addAddress($email);
       // $mail->addAddress($emailt);
        //$mail->addAddress($emails);
        //$mail->addAddress($emailq);
    
         //Add a recipient email  
    $mail->addReplyTo('harigowtham5533@gmail.com'); // reply to sender email

    //Content
    $mail->isHTML(true);               //Set email format to HTML
    $mail->Subject = "Esports";   // email subject headings
    $mail->Body    = "HI Your Password is ".$pass." Thank you"; //email message

    // Success sent message alert
    $mail->send();
    echo
    " 
    <script> 
     alert('Message was sent successfully!');
     document.location.href = 'login.php';
    </script>
    ";

}

?>

</html>