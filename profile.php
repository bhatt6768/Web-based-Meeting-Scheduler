

<?php
   include('session.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>


<script>
function check(str) {
    if (str.length == 0) { 
        document.getElementById("mydiv").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("mydiv").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "meetingcheck.php?date=" + str, true);
        xmlhttp.send();
    }
}
</script>




  <title>ScheduleToMeet</title>
 
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
 
	
  <link href="stylec.css" rel="stylesheet" type="text/css">
 <link href="styleform.css" rel="stylesheet" type="text/css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  
   <style>
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

tr:hover{background-color:pink}
 
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
	
      <h4>Book your meetings</h4>
	
	  
    
	
<!-- Multistep Form -->

		<br><br><br><div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform" method="post" action="reg1.php">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Meeting Details 1</li>
                <li>Meeting Details 2</li>
                <li>Meeting Details 3</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Meeting Details 1</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
               <input type="text" name="title" placeholder="Subject" required>
<input type="text" name="detail" placeholder="Enter detail"  required>
  <select type="options" name="department" placeholder="Department" required>
                                    <option>--Department--</option>
									<option>All</option>
                                    <option>Mechanical</option>
                                    <option>Chemical</option>
									  <option>Civil</option>
                                    <option>Computer</option>
									  <option>IT</option>
                                    <option>Electrical</option>
									  <option>IC</option>
                                    
                                </select>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
			
            <fieldset>
                <h2 class="fs-title">Meeting Details 2</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
                <input type="text" name="orgname" placeholder="organizer name">
<input type="email" name="orgemail" placeholder="organizer email">
<select type="options" name="duration">
                                    <option>Time duration</option>
									<option>45 minutes</option>
									<option>1 hour</option>
                                    <option>2 hour</option>
                                    <option>3 hour</option>
									  
                                    
                                </select>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Meeting Details 3</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
               <input type="text" name="location" placeholder="Location" >
<input name="setTodaysDate" type="date" placeholder="Date" onkeyup="check(this.value)"><input type="hidden"><font color="red"<span id="mydiv"></span></font>
<br><input type="time" name="time" placeholder="Time">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit" class="submit action-button" value="Submit"/>
            </fieldset>
        </form>
        <!-- link to designify.me code snippets -->
        
        <!-- /.link to designify.me code snippets -->
    </div>
</div>
      
    
	
	</div>
    <div id="menu1" class="tab-pane fade">
      <h3>Meetings</h3>
      <p>view  meetings to attend(status)
<?php	
  
	  $conn=mysqli_connect("localhost","root", "","scheduler") or die("The connection to the database has not been made");
	$sql = "SELECT mid,title,date,location,time FROM meeting where uemail='$user_check'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
			echo "<th>Meeting no</th>";
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
				 echo "<th>status</th>";
                
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

 <script src="date.js"></script>

<!-- Placed at the end of the document so the pages load faster -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
        </script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>


  <script src="styleee.js"></script>
  <script type="text/javascript">
jQuery().ready(function() {
 
  var v = jQuery("#msform").validate({
      rules: {
        title: {
          required: true,
          minlength: 2,
          maxlength: 16
        },
        detail: {
          required: true,
          minlength: 2,
          email: true,
          maxlength: 100,
        },
        department: {
          required: true,
          minlength: 6,
          maxlength: 15,
        },
        orgname: {
          required: true,
          minlength: 6,
          equalTo: "#upass1",
        }
 
      },
      errorElement: "span",
      errorClass: "help-inline",
    });
 
});
</script>
  
    <!-- Include the jQuery library -->
    
</body>


</html>