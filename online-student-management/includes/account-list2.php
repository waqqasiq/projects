<?php
    include_once 'headerInside2.php';
    include_once 'database.php';
if(isset($_SESSION['uid'])==True){
        echo "<script>window.location='dashtry.php?stdid=".$_SESSION['uid']."'</script>";
        exit();
    }
if(isset($_REQUEST['act']) && $_REQUEST['act']='del')
{
    $id = $_REQUEST['id'];
    $query = "DELETE FROM a WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if ($result)
    {
        echo "<script>window.location='account-list2.php'</script>";
    }
 else {
        echo 'Something went wrong!';
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
	<div class="container" >
        <a href="logout.php" style="float:right; font-size:16px; color: brown;margin-top:10px; margin-bottom:10px" >Logout</a>
		<div class="main row" >
			    

			    <div class="col-md-12 company_ad">
				   <!-- <a href="logout.php" style="float:right; font-size:16px; color: brown" >Logout</a>
      				<!--<address>
						 <p>Mohakhali 66,</p>
						 <p>Dhaka,</p>
						 <p>Bangladesh</p>
				   		<p>Phone:(00) 111 222 333</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <a href="mailto:info@mycompany.com">info(at)iies.com</a></p>
				   		<p>Follow on: <a href="https://www.facebook.com/">Facebook</a>, <a href="https://twitter.com/">Twitter</a></p>
				   	</address>-->
				   
				   	
            <table class="table table-bordered" style="width:100%; font-size:13px;">

                <thead style="width:100%; font-size:14px;">
                    <h3 style="text-align:center">STUDENT LIST<h3>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                         
                        <th colspan="2" style = "text-align:center;"
                        </th>Action</th>
                    </tr>
                </thead>
                <?php
                $query = "SELECT id,name,email,phno FROM a ORDER BY name";
                $result = mysqli_query($conn,$query);
                while($student= mysqli_fetch_assoc($result)){?>
                <tr >
                    <td><?php echo $student['name']; ?></td>
                    <td><?php echo $student['email']; ?></td>
                    <td><?php echo $student['phno']; ?></td>
                    <td><a style="color:DarkCyan" href="account-edit2.php?id=<?php echo $student['id']?>">Edit</a></td>
                    <td><a style="color:brown" href="account-list2.php?id=<?php echo $student['id']?>&act=del">Delete</a></td>
                </tr>
                    <?php
                }
                ?>
                
            </table>
				   
				</div> 
				
				<div class="col-md-12">
				  <div class="contact-form">
				  	<!--<h2>Add Subject</h2> -->
					    
                                        
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
