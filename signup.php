<!DOCTYPE html>
<html>
<head>
<title>Signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Around Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='https://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>	
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
</head>
<body>
	<!-- header -->
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="top-header-info">
					
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="top-nav wow fadeInRight animated" data-wow-delay=".5s">
					<nav class="navbar navbar-default">
						<div class="container">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php">??????</a></li>
								<li><a href="about.html">????????????</a></li>
								<li><a href="codes.php">????????????</a></li>
								<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">????????????<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a class="hvr-bounce-to-bottom" href="gallery1.php">????????????</a></li>
										<li><a class="hvr-bounce-to-bottom" href="gallery2.php">????????????</a></li>          
									</ul>
								</li>	
								<li><a href="blog.php">??????</a></li>
								<li><a href="contact.html">????????????</a></li>
								<li><a href="login.php" class="active">????????????</a></li>
							</ul>	
							<div class="clearfix"> </div>
						</div>	
					</nav>		
				</div>
			</div>
		</div>
	</div>
	<!-- //header -->
	
	<!-- login -->
	<div class="login">
		<div class="container">
			<div class="login-body">
				<div class="login-heading">
					<h1>??????</h1>
				</div>
				<div class="login-info">
					<form method="post">
						<input type="text" class="user" name="Cno" placeholder="????????????" required="">
						<input type="text" class="user" name="Cname" placeholder="??????" required="">
						<input type="text" class="user" name="Cid" placeholder="?????????" required="">
						<input type="text" class="user" name="Ctel" class="lock" placeholder="????????????">
						<input type="submit" name="hahaha" value="??????">
						<div class="signup-text">
							<a href="login.php">???????????????????????????</a>
						</div>
					</form>
					<?php
						include("sql-connections/sql-connect.php");
						error_reporting(0);
						if (isset($_POST['hahaha'])) {
							$result = mysqli_query($con,"insert into customer VALUES ('".$_POST['Cno']."','".$_POST['Cname']."','".$_POST['Cid']."','".$_POST['Ctel']."')");
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->
</body>	
</html>