<?php
   include('session.php');








	if(isset($_POST['submit']))
{
	
	$conn=mysqli_connect("localhost","root", "","scheduler") or die("The connection to the database has not been made");

$title=$_POST['title'];

$detail=$_POST['detail'];
$department=$_POST['department'];
$orgname=$_POST['orgname'];
$orgemail=$_POST['orgemail'];
$duration=$_POST['duration'];
$location=$_POST['location'];
$date=$_POST['setTodaysDate'];
$time=$_POST['time'];


	
	
	
	

   
	
	
	$ql="INSERT INTO meeting(uemail,title,detail,department,orgname,orgemail,duration,location,date,time) VALUES('$user_check','$title','$detail','$department','$orgname','$orgemail','$duration','$location','$date','$time')";
	$sql="INSERT INTO events(uemail,title,date) VALUES('$user_check','$title','$date')";

	$result=mysqli_query($conn,$ql);
		$res=mysqli_query($conn,$sql);
		
	
	if($result&&$res)
	{
	
	$message="meeting scheduled succesfully";
	echo '<script language="javascript">';
echo 'alert("Meeting Scheduled Succesfully")';
echo '</script>';
	}
	
	
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "ajaxmember.php?name=" + str, true);
        xmlhttp.send();
    }
}
</script>
  <title>ScheduleToMeet</title>
 

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="attendee.css" rel="stylesheet" type="text/css">
   <link href="stylec.css" rel="stylesheet" type="text/css">
 <link href="styleform.css" rel="stylesheet" type="text/css">
  

 
  
   <style>
   
   .form-group input[type=text]{
	   width:50%;
   }
   .form-group label{
	   color:orange;
   }
   
    table {
    border-collapse: collapse;
    width: 75%;
}
th{
	
	  background-color: #35C5A3;
	  color:black;
}
th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:silver}
 
   .profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}
   
    .sidenav {
      padding-top: 70px;
      background-color: #f1f1f1;
      height: 100%;
    }
      @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 1px;
      }
      .row.content {height:auto;} 
    }
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
	
    
      .row.content {height: 900px}
    footer {
      background-color: #f2f2f2;
      padding: 25px;
	  margin-bottom:0px;
    }
	
     
  #home{
	  background: -webkit-linear-gradient(to left, #6441A5, #2a0845);
	   
  }
  #s{
	  
	  
	  margin-left:0px;
	  margin-top:0px;
	  
  }
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:100px;
  }
   @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
	
	.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}
	
    .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 10px;
      font-family: Montserrat, sans-serif;
	  }
	  
	   .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
 .profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;

  }
  
  
.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

 

  </style>
  </head>
  
  <body>
  

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">ScheduleToMeet</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">services</a></li>
        <li><a href="#Contact">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	   <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
	  
       
      </ul>
    </div>
  </div>
</nav>


  <div class="container-fluid text-center">    
  <div class="row content">
  
    <div class="col-sm-2 sidenav">
	<div class="profile-userpic">
					<img src="acc.png" class="img-thumbnail"  class="img-responsive" alt="">
				</div>
				
				<div class="profile-usertitle">
					<br><div class="profile-usertitle-name">
						<h4 style="color:orange"><?php echo $login_session; ?></h4>
					</div>
					<div class="profile-usertitle-job">
						<b>Assistant Professor</b>
					</div>
				</div>
					<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
     <br><br><br> 
    </div>
		
    <div class="col-sm-8 text-left"> 
      
	  <h4 style="color:orange;">Welcome<br><b><?php echo $login_session; ?></h4></b>
      
      <hr>
      
      
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Meetings</a></li>
    <li><a data-toggle="tab" href="#menu2">calender</a></li>
    <li><a data-toggle="tab" href="#menu3">Attendee <span class="caret"></span></a> <ul class="dropdown-menu">
      <li><a href="#">Submenu 1-1</a></li>
      <li><a href="#">Submenu 1-2</a></li>
      <li><a href="#">Submenu 1-3</a></li> 
    </ul></li>
	
   
  </ul>

  <div class="tab-content">
  
    <div id="home" class="tab-pane fade in active">
	
     
	
	  
	  
     <br><h4 style="color:orange;"> Whola Done!!<br><b></h4></b>
	
<!-- Multistep Form -->
<a href="profile.php"><button type="button" class="btn btn-warning">Book again</button></a>
</div>
		
	
	
    <div id="menu1" class="tab-pane fade">
      <h3>Meetings</h3>
      <p>view  meetings to attend(status)
	  <?php	
  
	  $conn=mysqli_connect("localhost","root", "","scheduler") or die("The connection to the database has not been made");
	$sql = "SELECT mid,title,date,location,time FROM meeting where uemail='$user_check'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class=tb>";
            echo "<tr>";
			 echo "<th>meeting no</th>";
                echo "<th>title</th>";
                echo "<th>Date</th>";
                echo "<th>Location</th>";
                echo "<th>Time</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
			 echo "<td>" . $row['mid'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['time'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
	  </p>
	  <div class="container">
	  
	<form action="emailnotify.php">

<br><br>

		<div class="form-group">
		
			<label>Add Members:</label><br/>
			<input type="email" name="email" onkeyup="showHint(this.value)" placeholder="add members"/>
		</div>
<p style="color:orange">Suggestions: <span id="txtHint"></span></p>
<div class="form-group">
		
			<label>meeting no:</label><br/>
			<input type="text" name="mid" placeholder="meeting no"/>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Send email notification</button>
		
		</div>

	</form>
	
	
</div>

    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>calender</h3>
      <p>Meetings calender view</p>

<div id="calendar_div">
<?php
//Include the event calendar functions file
include_once('funcal.php');
?>
        <?php echo getCalender(); ?>
    </div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3 style="color:teal">List of Attendee</h3>
      <p style="color:orange">members going to attend meeting </p>
	    <?php	
  
	  $conn=mysqli_connect("localhost","root", "","scheduler") or die("The connection to the database has not been made");
	$sql = "SELECT mno,membername,active FROM attendee where user='$user_check'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
			 echo "<th>meeting no</th>";
                echo "<th>membername</th>";
				echo "<th>Status</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
			 echo "<td>" . $row['mno'] . "</td>";
                echo "<td>" . $row['membername'] . "</td>";
				echo "<td>" . $row['active'] . "</td>";
               
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
    </div>
  </div>
</div>
    </div>
</div>
</div>
 

<footer class="container-fluid text-center">
  <p>&copy 2017 ScheduleToMeet</p>
</footer>


<!-- Placed at the end of the document so the pages load faster -->

  <script type="text/javascript" src="typeahead.js"></script>

 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 
  

    <!-- Include the jQuery library -->
	
    
</body>

</html>