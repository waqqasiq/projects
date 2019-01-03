<?php
if(isset($_SESSION['adminMail'])==TRUE){
    	echo "<script>window.location='admin-page.php'</script>";
    	exit();
    }
include 'includes/database.php';
include 'includes/header2.php';
include 'includes/landing2.php';
include 'includes/footer.php';
?>