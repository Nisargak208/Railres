<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> RAILWAY MANAGEMENT </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.9">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
	
</head>
<body>

	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo.png"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			 if(isset($_SESSION['name']))	
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
			 ?>
				<a href="login1.php" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="signup.php?value=0" class="btn btn-info">Signup</a>
			<?php } ?>
			
			
			</div>
			<div id="heading">
				<a href="index.php">Indian Railway</a>
			</div>
			</div>
		</div>
		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand" href="reservation.php">RESERVATION</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="booking.php">BOOKING HISTORY</a>
				</div>
			</div>
		</div>
		<div class="span12 well">
			<!-- Photos slider -->
			<div id="myCarousel" class="carousel slide" style="width:500px; float:left;margin-bottom:3px;">		
				<div class="carousel-inner">
				<div class="active item"><img src="images/61.jpg" style="width:500px;height:350px;"/></div>
				<div class="item"><img src="images/71.jpg" style="width:500px;height:350px;"/> </div>
				<div class="item"><img src="images/81.jpg" style="width:500px;height:350px;"/></div>
				<div class="item"><img src="images/91.jpg" style="width:500px;height:350px;"/></div>
				<div class="item"><img src="images/101.jpg" style="width:500px;height:350px;"/> </div>
				<div class="item"><img src="images/111.jpg"style="width:500px;height:350px;"/></div>
				
				</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
			<!-- News and Alert-->
			<div class="news" Style="float:right;">
			<marquee behavior="scroll" id="marq"  scrollamount=3 direction="up" height="250px" onmouseover="nestop()" onmouseout="nestrt()">
				<div>
				<p><b>Passenger Policy</b></p>
				<p><b>THESE ARTICLES ARE NOT ACCEPTED AS LUGGAGE WITH PASSENGER</b></p>
				</br>
				<p><b>Offensive artices, such as wet skins, hides ,explosives,dangerous inflammable articles and empty gas cylinders.</b></p></br>
				<p><b>Oil,grease,ghee,paint etc,if carried in packages which might by contact,breakage or leakage,damage other articles.</b></p></br>
				<p><b>Dead poultry and game(Shikhar),acids and other corrosive substances.</b><p></br>
				<p><b>Gentle request to wear mask at all times!!</b></p>
			
				
				</div>
			</marquee>
			</div>
		</div>
		
		<!-- Copyright -->
<footer >
		<div style="width:100%;">
			<div style="float:left;">
			<p class="text-right text-info"></p>	
			</div>
			<div style="float:right;">
			<p class="text-right text-info">	Desinged By : NISARGA NITHYA SAIJYOTI</p>
			</div>
		</div>
		</footer>	</div>
	
</body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>