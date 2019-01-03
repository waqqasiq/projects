<!DOCTYPE HTML>
<?php

if(isset($_SESSION['adminMail'])===TRUE) {
    session_start();
    echo "<script>window.location='includes/admin-page.php'</script>";
} 
else if(isset($_SESSION['uid'])==TRUE){
    session_start();
    echo "<script>window.location='includes/dashtry.php?stdid=".$_SESSION['uid']."'</script>";
    exit();
}
?>
<html>
<head>
	<title>Student Management System</title>
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
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.js"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>
<!-- start slider -->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="./js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="./js/jquery.cslider.js"></script>
<script type="text/javascript">
    $(function() {

        $('#da-slider').cslider({
            autoplay : true,
            bgincrement : 450
        });

    });
</script>
<!-- Owl Carousel Assets -->
<link href="./css/owl.carousel.css" rel="stylesheet">
<script src="./js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {

        $("#owl-demo").owlCarousel({
            items : 4,
            lazyLoad : true,
            autoPlay : true,
            navigation : true,
            navigationText : ["", ""],
            rewindNav : false,
            scrollPerPage : false,
            pagination : false,
            paginationNumbers : false,
        });

    });
    
}
</script>
<!-- //Owl Carousel Assets -->
<!----font-Awesome----->
<link rel="stylesheet" href="./fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
    <div class="header_bg">
       <div class="container">
          <div class="row header">
             <div class="logo navbar-left">
                <h1><a href="index.php">International Institute of Emerging Sciences</a></h1>
            </div>
            <ul class="menu navbar-right" style="width: auto;float: left; list-style: none">
                <?php if(isset($_SESSION['uid'])===TRUE) {?>
                    <li style="width: auto;float: left; margin-left: 20px;font-size: medium;">
                        <strong>Welcome :</strong><?php echo $_SESSION['uname'] ?>
                    </li>
                    <li style="width: auto;float: left; margin-left: 20px;">
                        <button type="button" class="btn btn-default btn-sm">
                            <a href="includes/dashtry.php?stdid=<?php echo $_SESSION['uid']?>">Dashboard</a>
                        </button>
                    </li>
                    <li style="width: auto;float: left; margin-left: 20px;">
                        <button type="button" class="btn btn-default btn-sm">
                            <a href="includes/logout.php">Log out</a>
                        </button>
                    </li>
                <?php } ?>
            </ul>
            <ul class="menu navbar-right" style="width: auto;float: left; list-style: none">
                <?php if(isset($_SESSION['admin'])===TRUE) {?>
                    <li style="width: auto;float: left; margin-left: 20px;">
                        <strong>Welcome :</strong><?php echo $_SESSION['admin'] ?>
                    </li>
                    <li style="width: auto;float: left; margin-left: 20px;">
                        <button type="button" class="btn btn-default btn-sm">
                            <a href="includes/admin-page.php">Admin Panal</a>
                        </button>
                    </li>
                    <li style="width: auto;float: left; margin-left: 20px;">
                        <button type="button" class="btn btn-default btn-sm">
                            <a href="includes/logout.php">Log out</a>
                        </button>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>

<div class="container">
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li ><a href="index.php">Home</a></li>
                    <li><a href="admissions2.php">Admission</a></li>
                    <li><a href="includes/aboutus.php">About</a></li>
                    <li><a href="includes/notice-all.php">Notice</a></li>
                    
                    <li><a href="includes/contactus.php">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <!-- start soc_icons -->
        </nav>
        <div class="soc_icons navbar-right">
         <ul class="list-unstyled text-center">
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>
</div>
</div>