<?php
session_start();
if(isset($_SESSION['uid'])===TRUE){
        echo "<script>window.location='dashtry.php?stdid=".$_SESSION['uid']."'</script>";
        exit();
    }
    include_once 'headerInside2.php';
    include_once 'database.php';
    if(isset($_SESSION['adminMail'])===FALSE){
        echo "<script>window.location='../index.php'</script>";
        exit();
    }


    $qry = "select * from about";
$result = mysqli_query($conn,$qry);
$about = mysqli_fetch_assoc($result);

if(isset($_POST['save'])){
    $name =$_POST['content'];
    if($name==""){
                	
					echo '<script>alert("About cannot be empty")</script>';
                }
                else{
    $query= "UPDATE `about` SET `content` = '$name' where aboutid = 1";
    // exit();
    $last= mysqli_query($conn,$query);
    if($last){
        echo '<script> alert("Updated"); </script>';
        echo '<script> window.location="admin-page.php" </script>';
    }else{
        echo "<script>Something went wrong</script>";
    }
 }
}
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>IIES</title>
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
<!----font-Awesome--- -->
</head>
<body>
<!-- <div class="main_bg"><!-- start main -->
	
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->
	<div class="container" >
		<br><a href="logout.php" style="float:right; font-size:16px; color: brown;margin-top:10px; margin-bottom:10px" >Logout</a><br>
		<div class="main row">
			<div class="col-md-12 company_ad">
				    
      				<!--<address>
						 <p>Mohakhali 66,</p>
						 <p>Dhaka,</p>
						 <p>Bangladesh</p>
				   		<p>Phone:(00) 111 222 333</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <a href="mailto:info@mycompany.com">info(at)iies.com</a></p>
				   		<p>Follow on: <a href="https://www.facebook.com/">Facebook</a>, <a href="https://twitter.com/">Twitter</a></p>
				   	</address>-->
				   
				</div> 
			    <!-- <div class="col-md-4 company_ad">
				    <!--= <h2>find Address :</h2>
      				<address>
						 <p>Mohakhali 66,</p>
						 <p>Dhaka,</p>
						 <p>Bangladesh</p>
				   		<p>Phone:(00) 111 222 333</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <a href="mailto:info@mycompany.com">info(at)iies.com</a></p>
				   		<p>Follow on: <a href="https://www.facebook.com/">Facebook</a>, <a href="https://twitter.com/">Twitter</a></p>
				   	</address>
				</div> -->

				<div class="col-md-12">
				  <div class="contact-form">
				  	<h2 style="margin-top:5px">About Us</h2>
					    <form method="post">
					    	
						    <div>
						    	<span></span>
						    	<span><textarea name="content"  style="font-size:14px; resize:vertical; color: darkgray"><?php echo $about['content']?> </textarea></span>
						    </div>
						   <div>
                                                       <label class="fa-btn btn-1 btn-1e"><input type="submit" value="Update" name="save"></label>
						  </div>
					    </form>
                                        
				    </div>
  			</div>		
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>
<?php
    include_once 'footer.php';
?>
</body>
</html>
