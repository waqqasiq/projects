<!DOCTYPE HTML>
<?php
    session_start();
?>

<html>
<head>
	<title>Student Management System</title>
	<!-- Bootstrap -->

        <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<![endif]-->
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- start plugins -->
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<!----font-Awesome----->
        <link rel="stylesheet" href="../fonts/css/font-awesome.min.css">
	<!----font-Awesome----->
</head>
<body>
<?php
if(isset($_SESSION['adminMail'])===FALSE){
header("Location: ../index.php");
}
?>
<div class="header_bg">
	<div class="container">
		<div class="row header">
			<div class="logo navbar-left">
				<h1>International Institute of Emerging Sciences</h1>
			</div>
			<div class="clearfix"></div>
                        <ul class="menu navbar-right" style="width: auto;float: left; list-style: none">
                        <?php if(isset($_SESSION['adminMail'])===TRUE) {?>
                            <li style="width: auto;float: left; margin-left: 20px;">
                                <label style="font-size: 17px">Admin : <?php echo $_SESSION['adminName'];?></label>
                            </li>
                            <li style="width: auto;float: left; margin-left: 20px;">
                                <button type="button" class="btn btn-default btn-sm">
                                    <a href="logout.php">Log out</a>
                                </button>
                            </li>
                        <?php } ?>
                        </ul>
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
					<li class="active"><a href="account-list.php">Account List</a></li>
                                        <li><a href="routine.php">Advising</a></li>
                                        <li><a href="sub-list.php">Subject</a></li>
                                        <li><a href="gradeform.php">Assign Grade</a></li>
                                        <li><a href="admissionFormAdmin.php">Edit Form</a></li>
                                        <li><a href="notice-list.php">Notice</a></li>
                                        <li><a href="contactAdmin.php">Contact Info</a></li>
                                        <li><a href="addAdmin.php">Admin</a></li>
                                        <li><a href="adminAbout.php">About</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
			<!-- start soc_icons -->
		</nav>
	</div>
</div>

