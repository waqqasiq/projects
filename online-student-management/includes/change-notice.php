<?php
    include_once 'headerInside2.php';
    include_once 'database.php';

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}


if (isset($_REQUEST['nid'])) {
    $nid = $_REQUEST['nid'];
    $query = "SELECT nid,topic,content FROM notice WHERE nid =$nid";
    $result = mysqli_query($conn, $query);
    $subject = mysqli_fetch_assoc($result);
    //print_r($student);
    $nid = $subject['nid'];
    $name = $subject['topic'];
    $credit = $subject['content'];
    
} else {
    $nid = "";
    $name = "";
    $credit = "";
    
}

if (isset($_REQUEST['save'])) {
    $nid = $_POST['nid'];
    $name = $_POST['topic'];
    $credit = $_POST['content'];
   if($name=="" || $credit=="" ){
                	
					echo '<script>alert("Fill out all fields")</script>';
                }	
                else{
     $query = "UPDATE notice SET topic='$name', content='$credit' WHERE nid= $nid";
    $last = mysqli_query($conn, $query);
    if ($last) {
        echo "<script>window.location='notice-list2.php'</script>";
    } else {
        echo "Something went Wrong";
    }
}
}



?>
<?
session_start();
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
<!----font-Awesome----->
</head>
<body>
<div class="main_bg"><!-- start main 
	<div class="container">
		<div class="main row">
			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">View Larger Map</a></small>
		</div>
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<a href="logout.php" style="float:right; font-size:16px; color: brown;margin-top:10px; margin-bottom:10px" >Logout</a>
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
				<h2>Change Notice</h2><br>
				<form method="post">
					<input type="hidden" name="nid" value="<?php echo $nid ?>">
				<div class="col-md-6">
				  <div class="contact-form">
				  	
					    
					    	<div>
						    	<span>Title</span>
						    	
						    	<span><input type="text" name="topic" id='name' value="<?php echo $name ?>" class="form-control" /></span>
						    </div>
						</div>
					</div>
					

						<div class="col-md-12">
						<div class="contact-form">
						    <div>
						    	<span>Content</span>
                                        <span><textarea  name="content" style="resize:vertical"  value="<?php echo $credit ?>" class="form-control" /></textarea></span>
						    </div>
						</div>
					</div>

					
                    
					<div class="col-md-12">
						<div class="contact-form">

						   <div>
                                                       <label class="fa-btn btn-1 btn-1e"><input type="submit" value="Update" name="save"></label>
						  </div>
						</div>
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
