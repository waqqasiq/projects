<?php
	include_once('database.php');
	include_once 'headerout2.php';

	$qry = "select * from about";
	$result = mysqli_query($conn,$qry);
	$about = mysqli_fetch_assoc($result);
?>
<!DOCTYPE HTML>
<html>
	<head>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- start plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!----font-Awesome----->
		<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
			<!----font-Awesome----->
	</head>
	<body>

		<div class="main_bg"><!-- start main -->
			<div class="container" style="margin-top:45px; margin-bottom:40px;">
				<div class="about row">
					<h2>about us</h2>
					<p class="para"><?php echo $about['content']?></p>

				</div>
			</div>
		</div><!-- end main -->
		<div class="main_btm"><!-- start main_btm -->

		</div>
	    <?php
	        include_once 'footer.php';
	    ?>
	</body>
</html>