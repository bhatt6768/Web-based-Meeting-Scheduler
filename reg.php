<?php



	

	
	$conn=mysqli_connect("localhost","root", "","scheduler") or die("The connection to the database has not been made");

$title=$_POST['title'];

$detail=$_POST['detail'];
$department=$_POST['department'];
$orgname=$_POST['orgname'];
$orgemail=$_POST['orgemail'];
$duration=$_POST['duration'];
$location=$_POST['location'];
$date=$_POST['date'];
$time=$_POST['time'];


	
	
	
	

   
	
	$sql="INSERT INTO meeting(title,detail,department,orgname,orgemail,duration,location,date,time) VALUES('$title','$detail','$department','$orgname','$orgemail','$duration','$location','$date','$time')";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
	
	echo "meeting scheduled succesfully";
	}
	
	

?>