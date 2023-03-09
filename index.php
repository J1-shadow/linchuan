<!DOCTYPE html>
<html>
<head>
<title>Home</title>
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
								<li><a href="index.php" class="active">主页</a></li>
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
								<li type=""><a href="login.php">我的信息</a></li>
							</ul>
							<div class="clearfix"> </div>
						</div>	
					</nav>		
				</div>
			</div>
		</div>
	</div>
	<!-- //header -->
	<!-- banner -->
	<div class="banner">
			<div class="slider">
				<h2 class="wow shake animated" data-wow-delay=".5s">陵川</h2>
				<div class="border"></div>
				<script src="js/responsiveslides.min.js"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						// Slideshow 4
							$("#slider3").responsiveSlides({
								auto: true,
								pager: true,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
									$('.events').append("<li>before event fired.</li>");
								},
								after: function () {
									$('.events').append("<li>after event fired.</li>");
								}
							 });				
						});
				</script>
				<div  id="top" class="callbacks_container-wrap" background=url(../images/g1.jpg) no-repeat 0px 0px>
					<ul class="rslides" id="slider3">
						<li>
							<div class="slider-info">
								<h3 class="wow fadeInRight animated" data-wow-delay=".5s">王莽岭</h3>
								<p class="wow fadeInLeft animated" data-wow-delay=".5s">不登王莽岭，岂识太行山。天下奇峰聚，何须五岳攀。</p>
								<div class="more-button wow fadeInRight animated" data-wow-delay=".5s">
									<a href="single.php">看一看	</a>
								</div>
							</div>
						</li>
						<li>
							<div class="slider-info">
								<h3>锡崖沟</h3>
								<p>愚公移山，人定胜天</p>
								<div class="more-button">
									<a href="single.php">瞧一瞧	</a>
								</div>
							</div>
						</li>
						<li>
							<div class="slider-info">
								<h3>棋子山	</h3>
								<p> 箕子隐居，围棋发源	</p>
								<div class="more-button">
									<a href="single.php">望一望	</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
	</div>
	
	<div class="col-md-4 footer-nav wow fadeInRight animated" data-wow-delay=".5s">
		<h4>活动</h4>
		<div class="news-grids">
			<div class="news-grid">
				<h6><a href="single.php">王莽岭景区“五一”小长假 活动精彩纷呈 完美收官！</a></h6>
				<h6><a href="single.php">王莽岭端午节向您发来邀请函，多项精彩活动不容错过！</a></h6>
			</div>
		</div>
	</div>
</body>	
</html>