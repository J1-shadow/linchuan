<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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
								<li><a href="index.php">主页</a></li>
								<li><a href="about.html">陵川介绍</a></li>
								<li><a href="codes.php">游览规划</a></li>
								<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">这有两个<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a class="hvr-bounce-to-bottom" href="gallery1.php">我是景区</a></li>
										<li><a class="hvr-bounce-to-bottom" href="gallery2.php">我是民宿</a></li>          
									</ul>
								</li>	
								<li><a href="blog.php">留言</a></li>
								<li><a href="contact.html">门店认领</a></li>
								<li><a href="login.php" class="active">我的信息</a></li>
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
					<h1>登录</h1>
				</div>
				<div class="login-info">
					<form method="post">
						<input type="text" class="user" name="Cid" placeholder="身份证" ></input>
						<input type="text" class="user" name="Ctel" placeholder="手机号码"></input>
						<div class="forgot-top-grids">
							<div class="forgot-grid">
								<ul>
									<li>
										<input type="checkbox" id="brand1" value="">
										<label for="brand1"><span></span>店长的秘密按钮</label>
									</li>
								</ul>
							</div>
						</div>
						<input type="submit" name="Sign_In" value="登录">
						<div class="signup-text">
							<a href="signup.php">没有注册？快来注册吧</a>
						</div>
						<hr>
					</form>
					<?php
					include("sql-connections/sql-connect.php");
					error_reporting(0);
					if(isset($_POST['Cid'])&&isset($_POST['Ctel']))
					{
						@$sql="SELECT Cid,Ctel FROM customer WHERE Cid='".$_POST['Cid']."' and Ctel='".$_POST['Ctel']."' LIMIT 0,1";
						$result=mysqli_query($con,$sql);
						$row = mysqli_fetch_array($result);
						if($row){
							echo'成功';
							header("location:single.php/?Cid=$Cid&code=$code");
						}
						else{
							echo'<p>登陆失败！</p>';
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->
</body>	
</html>