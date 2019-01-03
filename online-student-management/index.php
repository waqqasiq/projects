<?php
	session_start();
	if(isset($_SESSION['uid'])==TRUE){
	    echo "<script>window.location='includes/dashtry.php?stdid=".$_SESSION['uid']."'</script>";
	    exit();
	}
	else if(isset($_SESSION['adminMail'])==TRUE){
		echo "<script>window.location='includes/admin-page.php'</script>";
		exit();
	}
	include 'includes/database.php';
	include 'includes/header.php';
	include 'includes/landing.php';
	include 'includes/footer.php';
?>