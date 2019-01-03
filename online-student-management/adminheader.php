<!DOCTYPE HTML>
<?php
  
?>
<html>
<head>
	<title>Student Management System</title>
	<!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<div class="header_bg"  style="margin-top:0px">
	<div class="container" style="margin-top:0px">
		<div class="row header" style="margin-top:0px">
			<div class="logo navbar-left">
				<h1><a href="index.php">International Institute of Emerging Sciences</a></h1>
			</div>
			<div class="clearfix"></div>
                            <ul class="menu navbar-right" style="width: auto;float: left; list-style: none">
                            <?php if(isset($_SESSION['uid'])===TRUE) {?>
                            <li style="width: auto;float: left; margin-left: 20px;font-size: medium;">
                                <strong>Welcome :</strong><?php echo $_SESSION['uname'] ?>
                            </li>
                            <li style="width: auto;float: left; margin-left: 20px;">
                                <button type="button" class="btn btn-default btn-sm">
                                    <a href="includes/dashboard.php?stdid=<?php echo $_SESSION['uid']?>">Dashboard</a>
                                </button>
                            </li>
                            <li style="width: auto;float: left; margin-left: 20px;">
                                <button type="button" class="btn btn-default btn-sm">
                                    <a href="includes/logout.php">Log out</a>
                                </button>
                            </li>
                            <?php }else if(isset($_SESSION['uid'])===FALSE){
                                //header("Location: index.php");
                            } ?>
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
                            <?php }else if(isset($_SESSION['admin'])===FALSE){
                                //header("Location: index.php");
                            } ?>
                        </ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header" style="margin-top:0px">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			
	</div>
</div>
