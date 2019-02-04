<?php
if(!isset($_SESSION)) 
{ 
  session_start(); 
} 
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
//$mail->SMTPDebug = 3;   
$activationcode=$_SESSION['activationcode'];
$name=$_SESSION['name'];
                       
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';      // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'scheduletomeet123@gmail.com';                 // SMTP username
$mail->Password = 'Hondadio6768';                           // SMTP password
$mail->SMTPSecure = 'ssl';  
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);                          // Enable TLS encryption, `ssl` also accepted
$mail->Port =465;                                  // TCP port to connect to
$to=$_SESSION['email'];
$mail->setFrom('scheduletomeet123@gmail.com', 'Mailer');
$mail->addAddress($to);     // Add a recipient
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Account Confirmation Message';
$mail->Body = "
 
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------<br><br><br><br>
Username:" .$_SESSION['name']."<br>
<br><br><br><br>
------------------------
 
Please click this link to activate your account:----------------------<br><br><br><br>
http://localhost:81/project/verify.php?email=".$_SESSION['email']."&activationcode=".$_SESSION['activationcode']."  "; // Our message above including the link
$mail->send();
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
?>