<!DOCTYPE html>
<html>
<head>
<title>Gallery</title>
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
<link rel="stylesheet" href="css/lightbox.css">
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="css/table.css" rel="stylesheet" type="text/css">
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
								<li><a href="login.php">我的信息</a></li>
							</ul>	
							<div class="clearfix"> </div>
						</div>	
					</nav>		
				</div>
			</div>
		</div>
	</div>
	<!-- //header -->
	<div>
		<center>
		<h1>民宿一览</h1>
		</center>
		<?php
			include("sql-connections/sql-connect.php");
			error_reporting(0);
			@$sql="SELECT * FROM homestay";
			$result=mysqli_query($con,$sql);
			$num=mysqli_affected_rows($con);
		?>
		<table id='table' align="center" border="2" style="text-align:center;font-size:30px;width:1200px">
			<tr>
				<th>
					编号
				</th>
				<th>
					民宿名称
				</th>
				<th>
					价格区间
				</th>
				<th>
					地址
				</th>
				<th>
					联系电话
				</th>
				<th>
					评分(0-5)
				</th>
			</tr>
			<?php
				for($i=0;$i<$num;$i++){
					$table.="<tr>";
					$row = mysqli_fetch_array($result);
					for($j=0;$j<6;$j++){
						$table.="<td>$row[$j]</td>";
					}
					$table.="</tr>";
				}
				echo $table;
			?>
		</table>
	</div>
	
</body>	
</html>