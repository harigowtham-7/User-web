<?php
session_start();
include("dbconfig.php");
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if(isset($_POST["entry"])){
    $user = $_SESSION['uname'];
    
    $tour = $_POST['tour'];
    $gamename = $_POST['game'];
    $type = $_POST['player'];
    $player1 = $_POST['player1'];
    $player1gn = $_POST['soloig'];
    $player1id = $_POST['soloid'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $tnamed = $_POST['tnamed'];
    $lnamed = $_POST['lnamed'];
    $emaild = $_POST['email2'];
    $mobiled = $_POST['mobile2'];
    $ingame2 = $_POST['ingamed'];
    $inid2 = $_POST['inidd'];
    $p2d = $_POST['p2d'];
    $p2igd = $_POST['p2igd'];
    $p2idd = $_POST['p2idd'];
    $filename = $_FILES["filed"]["name"];
    $filetype = $_FILES["filed"]["type"];
    move_uploaded_file($_FILES["filed"]["tmp_name"],'entry/'.$filename);
    $filepath="entry/".$filename;

    $tnamet = $_POST['tnamet'];
    $lnamet = $_POST['lnamet'];
    $emailt = $_POST['email3'];
    $mobilet = $_POST['mobile3'];
    $ingame3 = $_POST['ingamet'];
    $inid3 = $_POST['inidt'];
    $p2t = $_POST['p2t'];
    $p2igt = $_POST['p2igt'];
    $p2idt = $_POST['p2idt'];
    $p3t = $_POST['p3t'];
    $p3igt = $_POST['p3igt'];
    $p3idt = $_POST['p3idt'];
    $filename1 = $_FILES["filet"]["name"];
    $filetype1 = $_FILES["filet"]["type"];
    move_uploaded_file($_FILES["filet"]["tmp_name"],'entry/'.$filename1);
    $filepath1="entry/".$filename1;

    $tnames = $_POST['tnames'];
    $lnames = $_POST['lnames'];
    $emails = $_POST['email4'];
    $mobiles = $_POST['mobile4'];
    $ingame4 = $_POST['ingames'];
    $inid4 = $_POST['inids'];
    $p2s = $_POST['p2s'];
    $p2igs = $_POST['p2igs'];
    $p2ids = $_POST['p2ids'];
    $p3s = $_POST['p3s'];
    $p3igs = $_POST['p3igs'];
    $p3ids = $_POST['p3ids'];
    $p4s = $_POST['p4s'];
    $p4igs = $_POST['p4igs'];
    $p4ids = $_POST['p4ids'];
    $filename2 = $_FILES["files"]["name"];
    $filetype2 = $_FILES["files"]["type"];
    move_uploaded_file($_FILES["files"]["tmp_name"],'entry/'.$filename2);
    $filepath2="entry/".$filename2;

    $tnameq = $_POST['tnameq'];
    $lnameq = $_POST['lnameq'];
    $emailq = $_POST['email5'];
    $mobileq = $_POST['mobile5'];
    $ingame5 = $_POST['ingameq'];
    $inid5 = $_POST['inidq'];
    $p2q = $_POST['p2q'];
    $p2igq = $_POST['p2igq'];
    $p2idq = $_POST['p2idq'];
    $p3q = $_POST['p3q'];
    $p3igq = $_POST['p3igq'];
    $p3idq = $_POST['p3idq'];
    $p4q = $_POST['p4q'];
    $p4igq = $_POST['p4igq'];
    $p4idq = $_POST['p4idq'];
    $p5q = $_POST['p5q'];
    $p5igq = $_POST['p5igq'];
    $p5idq = $_POST['p5idq'];
    $filename3 = $_FILES["file"]["name"];
    $filetype3 = $_FILES["file"]["type"];
    move_uploaded_file($_FILES["file"]["tmp_name"],'entry/'.$filename3);
    $filepath3="entry/".$filename3;
    //$sql="INSERT INTO `subentry`(`gamename`, `player`, `player name`, `ingame name`, `ingame id`, `email`, `mobile`, `player2`, `ingame name2`, `ingame id2`, `player3`, `ingame name3`, `ingame id3`, `player4`, `ingame name4`, `ingame id4`, `player5`, `ingame name5`, `ingame id5`, `logo`, `tname`, `lname`) VALUES ('$gamename','$player','$player1','$ingame1','$inid1','$email','$mobile','$player2','$ingame2','$inid2','$player3','$ingame3','$inid3','$player4','$ingame4','$inid4','$player5','$ingame5','$inid5','$filepath','$tname','$lname')";
    //$sql="INSERT INTO `subentry`(`gamename`, `player`, `player name`, `ingame name`, `ingame id`, `email`, `mobile`, `player2`, `ingame name2`, `ingame id2`, `player3`, `ingame name3`, `ingame id3`, `player4`, `ingame name4`, `ingame id4`, `player5`, `ingame name5`, `ingame id5`, `logo`, `tname`, `lname`) VALUES ('$gamename','$player','$player1','$player1gn','$player1id','$email','$mobile','$player2','$ingame2','$inid2','$player3','$ingame3','$inid3','$player4','$ingame4','$inid4','$player5','$ingame5','$inid5','$filepath','$tname','$lname')";
    $sql="INSERT INTO `entry`(`user`,`tournament`, `gamename`, `type`, `player name`, `ingame name`, `ingame id`, `email`, `mobile`,`tname d`, `lname d`, `ingame d`, `inid d`, `email d`, `mobile d`, `p2 d`, `p2 ig d`, `p2 id d`, `logo d`,`tname t`, `lname t`, `ingame t`, `inid t`, `email t`, `mobile t`, `p2 t`, `p2 ig t`, `p2 id t`, `p3 t`, `p3 ig t`, `p3 id t`, `logo t`, `tname s`, `lname s`, `ingame s`, `inid s`, `email s`, `mobile s`, `p2 s`, `p2 ig s`, `p2 id s`, `p3 s`, `p3 ig s`, `p3 id s`, `p4 s`, `p4 ig s`, `p4 id s`, `logo s`, `tname q`, `lname q`, `ingame q`, `inid q`, `email q`, `mobile q`, `p2 q`, `p2 ig q`, `p2 id q`, `p3 q`, `p3 ig q`, `p3 id q`, `p4 q`, `p4 ig q`, `p4 id q`, `p5 q`, `p5 ig q`, `p5 id q`, `logo q`) VALUES 
    ('$user','$tour','$gamename','$type','$player1','$player1gn','$player1id','$email','$mobile','$tnamed','$lnamed','$ingame2','$inid2','$email','$mobiled','$p2d','$p2igd','$p2idd','$filepath','$tnamet','$lnamet','$ingame3','$inid3','$email','$mobilet','$p2t','$p2igt','$p2idt','$p3t','$p3igt','$p3idt','$filepath1','$tnames','$lnames','$ingame4','$inid4','$email','$mobiles','$p2s','$p2igs','$p2ids','$p3s','$p3igs','$p3ids','$p4s','$p4igs','$p4ids','$filepath2','$tnameq','$lnameq','$ingame5','$inid5','$email','$mobileq','$p2q','$p2igq','$p2idq','$p3q','$p3igq','$p3idq','$p4q','$p4igq','$p4idq','$p5q','$p5igq','$p5idq','$filepath3')";
    $result=mysqli_query($con,$sql);
    if (!$result) {
        die("Error: " . $con->error);
    }
    else{
        header("Location:index.php");
    }

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
    $mail->Body    = "HI ".$player1.$lnamed.$lnamet.$lnames.$lnameq.  " your application was submit succesfully.Our team will verify and approved your request.
    Hope you will be part of our."; //email message

    // Success sent message alert
    $mail->send();
    echo
    " 
    <script> 
     alert('Message was sent successfully!');
     document.location.href = 'index.php';
    </script>
    ";


}

?>