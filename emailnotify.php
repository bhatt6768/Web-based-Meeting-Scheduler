<?php
	
   include('session.php');

require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
  
 $username = "root";
  $password = "";
  $host = "localhost";

 $cn = mysqli_connect("localhost", "root", "","scheduler");
     if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
}
  $mid=$_REQUEST['mid'];
  $membername=$_REQUEST['email'];
  $sql="INSERT INTO attendee(user,mno,membername) VALUES('$user_check','$mid','$membername')";
  $result1=mysqli_query($cn,$sql);
	if(!$result1)
	{
	 die("Connection failed: " . mysqli_connect_error());
	}
	
	
//$mail->SMTPDebug = 2; 
  //execute the SQL query and return records
  $result= mysqli_query($cn,"SELECT * FROM meeting where mid=$mid");


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';      // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                              // Enable SMTP authentication
$mail->Username = 'scheduletomeet123@gmail.com';                 // SMTP username
$mail->Password = 'Hondadio6768';                           // SMTP password
$mail->SMTPSecure = 'ssl'; 
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);                              // Enable TLS encryption, `ssl` also accepted
$mail->Port =465;                                  // TCP port to connect to
$to=$_REQUEST['email'];
$mail->setFrom('scheduletomeet123@gmail.com', 'Mailer');
$mail->addAddress($to);     // Add a recipient
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'meeting scheduled';
 $body = "
 you are invited for following meeting<br>
 meeting details are:
 <html>
    <head>
    <title>Student Data</title>
     <style>
     table {
    border-collapse: collapse;
    width: 100%;
}
th{
	
	  background-color: orange;
}
th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:pink}
 
   .profile-usermenu {
  margin-top: 30px;
}
  </style>
  </head>
  <body>

   <table>
  <thead>
    <tr>
      <th>title</th>
	   <th>organized by</th>
      <th>location</th>
      <th>date</th>
      <th>time</th>
     
    </tr>
  </thead>
  <tbody>";

while( $row = mysqli_fetch_assoc( $result ) ){ 

      $body.= "<tr> 
      <td>".$row['title']."</td>
	  <td>".$row['orgname']."</td>
      <td>".$row['location']."</td>
      <td>".$row['date']."</td>
      <td>".$row['time']."</td>

      </tr>";  
   }

   $body.="</tbody></table></body></html><br>
   
   
   Please click this link to attend meeting (Accept invitation):----------------------<br><br><br><br>
http://localhost:81/project/attendee.php?mno=".$_REQUEST['mid']."&membername=".$_REQUEST['email']."; 
   
   
<br><br><br><br>
Please click this link to Cancel meeting (Cancel invitation):----------------------<br><br><br><br>
http://localhost:81/project/cancel.php?mno=".$_REQUEST['mid']."&membername=".$_REQUEST['email'].""; 





   ?>
   
    <?php mysqli_close($cn); ?>
	 <?php
    $mail->Body = $body;



$mail->send();
$m="mail sent";
if($mail->send())
{
	
$m="mail sent";
header('Location:reg1.php');
}	
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
	
	
	

?>