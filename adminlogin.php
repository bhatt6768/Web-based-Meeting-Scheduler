<?php
ob_start();
?>

<?php


   session_start();

// Create connection
$cn = mysqli_connect("localhost", "root", "","scheduler");


// Check connection
if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
}








$name=$_POST['username'];
$Pass=$_POST['pass'];







$q="SELECT  id FROM admin WHERE  username = '$name' and password = '$Pass'";
 
$records=mysqli_query($cn,$q);

$row =mysqli_fetch_assoc($records);
if((mysqli_num_rows($records))>0)


{
        
         $_SESSION['login_user'] = $name;

header('Location:adminprofile.php');










//header('Location:homepage3.php');


}


else
	{
		

	 echo("<script>alert('Enter correct login credentials!')</script>");
 echo("<script>window.location = 'home.php';</script>");
	

	}


?>
