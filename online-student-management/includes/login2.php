<?php
session_start();
if(isset($_SESSION['uid'])===TRUE){
        echo "<script>window.location='dashtry.php?stdid=".$_SESSION['uid']."'</script>";
        exit();
    }
    else if(isset($_SESSION['adminMail'])===TRUE){
    	echo "<script>window.location='admin-page.php'</script>";
    	exit();
    }
      include_once 'headerout2.php';
    include_once 'database.php';

    
  
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
	<script>
        function validateForm() {
            var x = document.getElementById('mail').value;
            var y = document.getElementById('pass').value;
            if (x=="" ) {
                alert("Enter email");
                //return false;
            }else if(y==""){
            	alert("Enter password");
                //return true;
            }
        }
    </script>
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
<!----font-Awesome----->
</head>
<body>
<div class="main_bg"><!-- start main -->
	<!-- <div class="container">
		<div class="main row">
			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">View Larger Map</a></small>
		</div>
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="col-md-12 company_ad">
			    	<a href="adminlogin.php" style="float:right; font-size:16px; color: brown; margin-top:6px" >Admin</a>
			    	
			    	
				  <!-- <<h2>find Address :</h2>
      				<address>
						 <p>Mohakhali 66,</p>
						 <p>Dhaka,</p>
						 <p>Bangladesh</p>
				   		<p>Phone:(00) 111 222 333</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <a href="mailto:info@mycompany.com">info(at)iies.com</a></p>
				   		<p>Follow on: <a href="https://www.facebook.com/">Facebook</a>, <a href="https://twitter.com/">Twitter</a></p>
				   	</address> -->
				   
				</div>
				<br>
		<div class="main row">
			    <div class="col-md-4 company_ad">
			    	<!--<a href="adminlogin.php" style="float:right; font-size:16px; color: brown" >Admin</a>
			    	
			    	
				  <!-- <<h2>find Address :</h2>
      				<address>
						 <p>Mohakhali 66,</p>
						 <p>Dhaka,</p>
						 <p>Bangladesh</p>
				   		<p>Phone:(00) 111 222 333</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <a href="mailto:info@mycompany.com">info(at)iies.com</a></p>
				   		<p>Follow on: <a href="https://www.facebook.com/">Facebook</a>, <a href="https://twitter.com/">Twitter</a></p>
				   	</address> -->
				   
				</div>
				
				<div class="col-md-4" style="text-align:center">
				  <div class="contact-form">

				  	<h2>User Login</h2>

					    <form method="post">
					    	
						    <div>
						    	<span></span>
                                                        <span><input type="text" name="email" id="mail" class="form-control" id="inputEmail3" placeholder="email-address" style="text-align:center"></span>
						    </div>
						    <div>
						    	<span></span>
                                                        <span><input type="password" name="pass" id="pass" class="form-control" id="inputEmail3" placeholder="password" style="text-align:center"></span>
						    </div>
						   <div>
                                                       <label class="fa-btn btn-1 btn-1e"><input type="submit" value="Sign In " name="contact" onclick="validateForm()"></label>
						  </div>


					    </form>
					    <form method="post" action="signup2.php">
					    	
											  <div>
						  								<h4>If you are not a user already, sign up now</h4>
						  								
                                                       <label class="fa-btn btn-1 btn-1e"><input type="submit" value="Sign Up " name="contact" >
                                              </div>

					    </form>
					    

                                        <?php
                                        if(isset($_POST['contact'])){
                                            
                                            $email = $_POST['email'];
                                            $pass = $_POST['pass'];
                                            
											if($email!="" || $pass!="")
									        {
									        $query = "SELECT * FROM a where email='$email' and password= '$pass'";
									        $result = mysqli_query($conn,$query);
									        $temp= mysqli_fetch_assoc($result);
									        if(count($temp)>0)
									        {
									                $_SESSION['uid']= $temp['id'];
									                $_SESSION['uname']= $temp['name'];
									                $_SESSION['umail']= $temp['email'];
									                echo "<script>window.location='dashtry.php?stdid=".$temp['id']."'</script>";
									        }
									        //else{
									          //  echo '<script> alert("Wrong Username or Password!!") </script>';
									        //}
									        }
                                            
                                        }
                                        ?>
				    </div>

  			</div>		
  			<div class="col-md-4 company_ad">
			    	<!--<a href="adminlogin.php" style="float:right; font-size:16px; color: brown" >Admin</a>
			    	
			    	
				  <!-- <<h2>find Address :</h2>
      				<address>
						 <p>Mohakhali 66,</p>
						 <p>Dhaka,</p>
						 <p>Bangladesh</p>
				   		<p>Phone:(00) 111 222 333</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <a href="mailto:info@mycompany.com">info(at)iies.com</a></p>
				   		<p>Follow on: <a href="https://www.facebook.com/">Facebook</a>, <a href="https://twitter.com/">Twitter</a></p>
				   	</address> -->
				   
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
