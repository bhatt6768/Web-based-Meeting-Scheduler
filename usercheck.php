<?php
 $cn = mysqli_connect("localhost", "root", "","scheduler");


// Check connection
if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email=$_GET['email'];
$data="";


$sql="select * from user where email='$email'";

$count=0;
 
$records=mysqli_query($cn,$sql);

$row =mysqli_fetch_assoc($records);
if((mysqli_num_rows($records))>0)

{


$data="sorry,email already registered";
echo $data;
}
else
{

$data="you can register";
echo $data;

}



?>
