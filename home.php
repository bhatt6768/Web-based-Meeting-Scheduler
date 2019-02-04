
<?php
session_start();
$error="";
$message="";

	if(isset($_POST['submit']))
{
$conn=mysqli_connect("localhost","root", "","scheduler") or die("The connection to the database has not been made");

$name=$_POST['name'];

$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$activationcode = hash('md5',rand(0,1000));
   
	$sql1="SELECT email FROM user WHERE email='$email'";
	$result1=mysqli_query($conn,$sql1);
	if($result1)
	{
	
	}
	 if(empty($error))
	{
	$sql="INSERT INTO user(name,email,mobile,password,confirmpassword,activationcode) VALUES('$name','$email','$mobile','$password','$confirmpassword','$activationcode')";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
	$_SESSION['name']=$name;
	$_SESSION['email']=$email;	
	$_SESSION['password']=$password;
	$_SESSION['confirmpassword']=$confirmpassword;
	$_SESSION['activationcode']=$activationcode;
	include('activateemail.php');
	$message="Please check your email to activate your account";
	echo '<script language="javascript">';
echo 'alert("Please check your email to activate your account")';
echo '</script>';
	}
	}
	
	
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="formlogin.css">
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
        xmlhttp.open("GET", "usercheck.php?email=" + str, true);
        xmlhttp.send();
    }
}
</script>
  <title>ScheduleToMeet</title>
  
  <link rel="stylesheet" href="form2.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
        </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
  
   <style>
    
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    
    footer {
      background-color: #f2f2f2;
      padding: 25px;
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
	   <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
	  
        <li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		<li><a href="#" data-toggle="modal" data-target="#login-modal1"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">

		 <div class="modal-dialog">
		 

				<div class="loginmodal-container">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button> 
					<h1>Login to Your Account</h1><br>
					 
				  <form data-toggle="validator" role="form" method="post" action="login.php">
				   <div class="form-group has-feedback">
    <label for="inputEmail" class="control-label">Email</label>
	 
					<input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" data-error="That email address is invalid" required>
     <span class="glyphicon form-control-feedback" aria-hidden="true"></span><div class="help-block with-errors"></div>
  </div>
     <div class="form-group has-feedback">
    <label for="inputPassword" class="control-label">Password</label>
					<input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password" data-error="please enter password" required>
					  <span class="glyphicon form-control-feedback" aria-hidden="true"></span><div class="help-block with-errors"></div>
  </div> 
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					<a href="#">Register</a> - <a href="#">Forgot Password</a>
				  </div>
				</div>
			</div>
		  </div>
		  <div class="modal fade" id="login-modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">

		 <div class="modal-dialog">
		 

				<div class="loginmodal-container">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button> 
					<h1>Admin-Login</h1><br>
					 
				  <form data-toggle="validator" role="form" method="post" action="adminlogin.php">
				   <div class="form-group has-feedback">
    <label for="inputEmail" class="control-label">Username</label>
	 
					<input type="text" name="username" class="form-control" id="inputEmail" placeholder="Username" data-error="please enter username" required>
     <span class="glyphicon form-control-feedback" aria-hidden="true"></span><div class="help-block with-errors"></div>
  </div>
     <div class="form-group has-feedback">
    <label for="inputPassword" class="control-label">Password</label>
					<input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password" data-error="please enter password" required>
					  <span class="glyphicon form-control-feedback" aria-hidden="true"></span><div class="help-block with-errors"></div>
  </div> 
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					<a href="#">Register</a> - <a href="#">Forgot Password</a>
				  </div>
				</div>
			</div>
		  </div>
		  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Registration</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            
                            <li class="active"><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            
                            <div class="tab-pane active" id="Registration">
                                <form role="form" data-toggle="validator" class="form-horizontal" method="post" action="home.php">
                                <div class="form-group has-feedback">
                                    <label for="inputName" class="col-sm-2 control-label">
                                        Name</label>

                                    <div class="col-sm-10">
                                        <div class="row">
                                          
                                            <div class="col-md-9">
                                                
												<input type="text" class="form-control"  name="name"  placeholder="Name" data-error="Name is required" required>
                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span><div class="help-block with-errors"></div>
											</div>
											
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control"  name="email"  placeholder="email" data-error="email is invalid try again" onkeyup="check(this.value)" required><br><input type="hidden"><font color="orange"<span id="mydiv"></span></font>
                                            <span class="glyphicon form-control-feedback"  aria-hidden="true"></span><div class="help-block with-errors"></div>
										
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                       
									   
									   <input type="text" maxlength="12" class="form-control" name="mobile"  placeholder="Mobile"  data-error="Enter 10 digit mobile number" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span><div class="help-block with-errors"></div>
	
									</div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" data-minlength="8" class="form-control"  name="password" id="inputPassword1" placeholder="Password" data-error="Minimum of 8 characters" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span><div class="help-block with-errors"></div>
								   </div>
                                </div>
								 <div class="form-group has-feedback">
                                    <label for="confirmpassword" class="col-sm-2 control-label">
                                        Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="password"  class="form-control"   name="confirmpassword" placeholder="confirm password" data-match="#inputPassword1" data-match-error="oops! password didnt match" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span><div class="help-block with-errors"></div>
								   </div>
                                </div>
								 <div class="form-group">
                  
                  
				  <div class="col-sm-10">
                  <label><input type="checkbox" id="terms" data-error="Before you register yourself" required>
                 Accept terms and conditions
                  </label>
                 <div class="help-block with-errors"></div>
				 </div>
                   
                    </div>
								
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="submit"   name="submit">
                                            
                                        <button type="button" class="btn btn-default btn-sm">
                                            Cancel</button>
											
                                    </div>
                                </div>
								
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="meet.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>schedule</h3>
          <p>Meetings.</p>
        </div>      
      </div>

      <div class="item">
        <img src="meet1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>schedule</h3>
          <p>Date,time,location</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  

  
  <div class="jumbotron text-center">
 <h1>What We Do</h1>
  <p>"Busy in your work schedule,Join with us to book your meetings and Arrange your schedules and meetings"</p></div>

  <!-- Container (Contact Section) -->
<br><div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> London,UK</p>
      <p><span class="glyphicon glyphicon-phone"></span> +44 9879781268</p>
      <p><span class="glyphicon glyphicon-envelope"></span> scheduletomeet@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://www.googlemapsgenerator.com/en/">http://www.googlemapsgenerator.com/en/</a></small></div><div><small><a href="http://couponcode.ng/hostgator/">http://couponcode.ng/hostgator</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important;padding-left:100px}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(51.5073509,-0.12775829999998223),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(51.5073509,-0.12775829999998223)});infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>London, United Kingdom<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

</div>
<footer class="container-fluid text-center">
  <p>&copy 2017 ScheduleToMeet</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>

</html>