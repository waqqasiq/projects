<!DOCTYPE HTML>

<?php


if(isset($_SESSION['adminMail'])===TRUE){
    session_start();
    echo "<script>window.location='admin-page.php'</script>";
    exit();
}

//if(isset($_SESSION['adminMail'])===TRUE) {
  //  echo "<script>window.location='admin-page.php'</script>";
//} 
if(isset($_SESSION['uid'])===FALSE){
   echo "<script>window.location='../index.php'</script>";
   exit();
}
?>
<html>
<head>
	<title>Student Management System</title>
	<!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
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
    <div class="header_bg">
       <div class="container">
          <div class="row header">
             <div class="logo navbar-left">
                <h1><a >International Institute of Emerging Sciences</a></h1>
            </div>
            <div class="clearfix"></div>
            <ul class="menu navbar-right" style="width: auto;float: left; list-style: none">
                <?php if(isset($_SESSION['uid'])===TRUE) {?>
                    <li style="width: auto;float: left; margin-left: 20px;font-size: medium;">
                        <strong>Welcome :</strong><?php echo $_SESSION['uname'] ?>
                    </li>
                    <li style="width: auto;float: left; margin-left: 20px;">
                        <button type="button" class="btn btn-default btn-sm">
                            <a href="dashtry.php?stdid=<?php echo $_SESSION['uid']?>">Dashboard</a>
                        </button>
                    </li>
                    <li style="width: auto;float: left; margin-left: 20px;">
                        <button type="button" class="btn btn-default btn-sm">
                            <a href="logout.php">Log out</a>
                        </button>
                    </li>
                <?php }else if(isset($_SESSION['uid'])===FALSE){
                                //header("Location: ../index.php");
                } ?>
            </ul>
            <ul class="menu navbar-right" style="width: auto;float: left; list-style: none">
                <?php if(isset($_SESSION['admin'])===TRUE) {?>
                    <li style="width: auto;float: left; margin-left: 20px;">
                        <strong>Welcome :</strong><?php echo $_SESSION['admin'] ?>
                    </li>
                    <li style="width: auto;float: left; margin-left: 20px;">
                        <button type="button" class="btn btn-default btn-sm">
                            <a href="admin-page.php">Admin Panal</a>
                        </button>
                    </li>
                    <li style="width: auto;float: left; margin-left: 20px;">
                        <button type="button" class="btn btn-default btn-sm">
                            <a href="logout.php">Log out</a>
                        </button>
                    </li>
                <?php }else if(isset($_SESSION['admin'])===FALSE){
                                //header("Location: ../index.php");
                } ?>
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
					<li ><a href="dashtry.php?stdid=<?php echo $_SESSION['uid'];?>">Dashboard</a></li>
                    <li><a href="gradeshow.php?stdid=<?php echo $_SESSION['uid']?>">Gradesheet</a></li>
                    <li><a href="routine-stdtry.php?stdid=<?php echo $_SESSION['uid'];?>">Routine</a></li>
                    <li><a href="about.php">About</a></li>
                    
                    
                    <li><a href="notices.php">Notice</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    
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
