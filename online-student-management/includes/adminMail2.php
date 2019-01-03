<?php
    include_once 'headerInside2.php';
    include_once 'database.php';


    function getValue($conn,$id){
    $qry = "SELECT name FROM `admin` where adminid = $id";
    $rslt = mysqli_query($conn,$qry);
    $name = mysqli_fetch_assoc($rslt);
    return $name['name'];
}
if(isset($_REQUEST['coId'])){
    $coid = $_REQUEST['coId'];
    $qry = "select emai from contact where coId = $coid";
    $result = mysqli_query($conn,$qry);
    $contInfo = mysqli_fetch_assoc($result);
}

if(isset($_POST['save'])){
    
    $to      = $_POST['to'];
    $coid      = $_POST['coid'];
    $rdate = date('Y-m-d');
    $rplyby = $_SESSION['adminid'];
    $subject = "SM University - Reply";
    $message = $_POST['content'];
    $headers = 'From: samin' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    if($message==""){
                    
                    echo '<script>alert("Fill out all fields")</script>';
                }   
                else if($to==""){
                     echo '<script>alert("Fill out all fields")</script>';
                }
                else{
    
    $sts = mail($to, $subject, $message, $headers);    
    $qury= "INSERT INTO `contact_reply`(`coid`, `r_msg`, `rply_date`, `rply_by` , `stemail`) VALUES ($coid,'$message','$rdate','$rplyby','$to')";
   $relt = mysqli_query($conn,$qury);  
    if($sts){
       //$relt = mysqli_query($conn,$qury);       
       echo '<script> window.location="contactAdmin2.php"</script>';
       
   }else{
        //echo 'Your mail not sent successfully';
       echo '<script> window.location="contactAdmin2.php"</script>';
   }
 }
}

if(isset($_REQUEST['act']) && isset($_REQUEST['rid'])){
    $rid = $_REQUEST['rid'];
    $qury7 = "DELETE FROM `contact_reply` WHERE rplyid = $rid";
    $result7 = mysqli_query($conn,$qury7);
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
				
				<div class="col-md-12">
				  <div class="contact-form">
				  	<h2>Reply to Student</h2>
					    <form method="post">
                            <input type="hidden" name="coid" id='coid' value="<?php echo $_REQUEST['coId'];?>" />
					    	<div>
						    	<span>To</span>
                                                        <span><input type="text" name="to" id='to' value='<?php echo $contInfo['emai']?>' class="form-control" /></span>
						    </div>
					    	<div>
						    	<span>Message</span>
						    	<span><textarea name="content"  style="font-size:14px; color: darkgray"> </textarea></span>
						    </div>
						   <div>
                                                       <label class="fa-btn btn-1 btn-1e"><input type="submit" value="SEND" name="save"></label>
						  </div>
					    </form>
                                      
				    </div>
  			</div>		
  			<div class="clearfix"></div>		
	</div> 
</div>
<div class="container">
<div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered" style width="100%" >
            	<tr style="font-size:14px">
                    <th>Student</th>
                    <th>Email</th>
                    <th colspan="10">Comment/Concern/Query</th>
                </tr>
                <?php
                $coid = $_REQUEST['coId'];
                $query = "SELECT name,coid,emai,subject FROM contact where coid =  $coid" ;
                
                
              
                $result1 = mysqli_query($conn, $query);
                
                $subject1 = mysqli_fetch_assoc($result1);

                echo ' <tr><td colspan="1">'.$subject1['name'].'</td><td colspan="1">'. $subject1['emai'].'</td><td colspan="10">'. $subject1['subject'].'</td></tr>';
                
                $query1 = "SELECT * FROM contact_reply where coid =  $coid" ;  
                $result = mysqli_query($conn, $query1); ?>
                <tr style="font-size:14px">
                    <th >Reply by</th>
                    <th colspan="12">Message</th>
                   
                </tr>
                <?php while($subject = mysqli_fetch_assoc($result)){    ?>
                <tr>
                <td colspan="1"><?php echo getValue($conn,$subject['rply_by']); ?></td>
                <td colspan="10"><?php echo  $subject['r_msg']; ?></td>
                
                <td colspan="1">
                    <a style="color:brown" title="Delete"  href="adminMail2.php?act=del&rid=<?php echo $subject['rplyid'] ?>&coId=<?php echo $coid?>">Delete
                    </a>
                </td>
            </tr>
                <?php
               
                }
                ?>
            </table>
        </div>
    </div>
</div>
</div>
<?php
    include_once 'footer.php';
?>
</body>
</html>
