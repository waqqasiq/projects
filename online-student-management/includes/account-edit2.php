<?php
    include_once 'headerInside2.php';
    include_once 'database.php';

    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }


    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $query = "SELECT * FROM a WHERE id = $id";
        $result = mysqli_query($conn,$query);
        $student = mysqli_fetch_assoc($result);
        $name = $student['name'];
        $email = $student['email'];
        $phno = $student['phno'];
        $id = $student['id'];
    }
    else{
        $name = "";
        $email = "";
        $phno = "";
        $id = "";
    }
    if(isset($_REQUEST['save'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phno = $_POST['phno'];
                $id = $_POST['id'];
                if($name=="" || $email==""){
					echo '<script>alert("Fill out all necessary details")</script>';
                }
                else{
                    $query = "UPDATE a SET name = '$name', email='$email', phno = '$phno' WHERE id=$id";
                    $last = mysqli_query($conn,$query);
                    if($last){
                        echo "<script>window.location='account-list2.php'</script>";
                    }
                    else{
                     echo "Something went wrong";
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

        <script>
            function validateForm() {
                var x = document.getElementById('name').value;
                var y = document.getElementById('emailid').value;
                var z = document.getElementById('phnno').value;
                if(x=="" || y=="" || z==""){
                	alert("All fields cannot be empty");
                }
                else if (x=="" ) {
                    alert("Enter name");
                    return false;
                }else if(y==""){
                	alert("Enter email");
                    return false;
                }
                else if(z==""){
                	alert("Enter Contact no");
                    return false;
                }
            }

        </script>




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
        				<h2></h2><br> <!--line break -->
        				<form method="post" onsubmit="return validateForm()">
        					<input type="hidden" name="id" value="<?php echo $id ?>">
        				<div class="col-md-6">
        				  <div class="contact-form">
        					    	<div>
        						    	<span>Full Name</span>
        						    	<span><input type="text" value="<?php echo $name;?>" class="form-control" id="name" name="name"></span>
        						    </div>
        						</div>
        					</div>
        					

        						<div class="col-md-6">
        						<div class="contact-form">
        						    <div>
        						    	<span>Email ID</span>
                                                <span><input type="email" value="<?php echo $email;?>" class="form-control" id="emailid" name="email"></span>
        						    </div>
        						</div>
        					</div>

        					<div class="col-md-6">
        						<div class="contact-form">
        						    <div>
        						    	<span>Contact No</span>
                                                               
                                                   <span><input type="text" value="<?php echo $phno;?>" class="form-control" id="phno" name="phno"></span>
        						    </div>
        						</div>
        					</div>
                            
        					<div class="col-md-12">
        						<div class="contact-form">

        						   <div>
                                                               <label class="fa-btn btn-1 btn-1e"><input type="submit" value="Update" name="save" ></label>
        						  </div>
        						</div>
        					</div>
        					    </form>
                                               
        				    </div>
        				
          			</div>	

          			<script>
                function validateForm() {
                    var x = document.getElementById('name').value;
                    var y = document.getElementById('emailid').value;
                    var z = document.getElementById('phnno').value;
                   
                    else if (x=="" ) {
                        alert("Enter name");
                        return false;
                    }else if(y==""){
                    	alert("Enter email");
                        return false;
                    }
                    else if(z==""){
                    	alert("Enter Contact no");
                        return false;
                    }
                }
            </script>
          	
          			<div class="clearfix"></div>		
        	</div> 
        </div>
        </div>
        <?php
            include_once 'footer.php';
        ?>
    </body>
</html>
