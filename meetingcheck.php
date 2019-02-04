<?php
 $cn = mysqli_connect("localhost", "root", "","scheduler");


// Check connection
if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
}

$date=$_GET['date'];
$data="";


$sql="select * from meeting where date='$date'";

$count=0;
 
$records=mysqli_query($cn,$sql);

$row =mysqli_fetch_assoc($records);
if((mysqli_num_rows($records))>0)

{


$data="date already taken";
echo $data;
}
else
{

$data="date slot free";
echo $data;

}



?>
