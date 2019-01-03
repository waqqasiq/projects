<?php
session_start();
if(isset($_SESSION['uid'])==True){
        echo "<script>window.location='dashtry.php?stdid=".$_SESSION['uid']."'</script>";
        exit();
    }
    include_once 'headerInside2.php';
    include_once 'database.php';
    if(isset($_SESSION['adminMail'])===FALSE){
        echo "<script>window.location='../index.php'</script>";
        exit();
    }


    /* ----- RECORD/DELETE ----------------*/
if (isset($_REQUEST['act']) && $_REQUEST['act'] == 'del') {
    $nid = $_REQUEST['coId'];
     $query = "DELETE FROM contact WHERE coId = $nid";
    $rec = mysqli_query($conn, $query);
    if ($rec) {
        echo "<script>window.location='contactAdmin2.php'</script>";
    } else {
        echo "Something went Wrong";
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
<style>
   h2 {
    text-align:center;
   }
</style>
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome--- -->
</head>

<body >
<!-- start main 
	<div class="container">
		<div class="main row">
			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">View Larger Map</a></small>
		</div>
	</div>
</div><!-- end main -->



<div class="main_btm">
                     <?php
        $query   = "SELECT * FROM contact";
        $result  = mysqli_query( $conn, $query );
        
        $rowcount=mysqli_num_rows($result);
        
    

        if($rowcount>0){ ?><!-- start main_btm -->
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
				   	
				 
            <table class="table table-bordered" style="width:100%; font-weight:550;">
                <thead style="font-size:13px">
                    <h2 style="text-align:center">Messages </h2>
                    <tr>
                       
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th> 
                        <th colspan="2" style = "text-align:center;"
                        </th>Action</th>
                    </tr>
                </thead>
                <?php
                //echo "<pre/>";
                $query = "SELECT * FROM contact" ;
                
                //$res=mysqli_query($conn,$q);

                $result = mysqli_query($conn, $query);
                //$student = mysqli_fetch_assoc($result);
                //$sn=1;
                while ($subject = mysqli_fetch_assoc($result)){// $department = mysqli_fetch_assoc($res)) {
                    //print_r($student);
                    ?>
                    <tr>
                        
                        <td><?php echo $subject['name']; ?></td> 
                        <td><?php echo $subject['emai']; ?></td>
                        <td><?php echo $subject['subject']; ?></td>
                        
                        <td>
                            <a
                                 style="color:DarkCyan" href="adminMail2.php?coId=<?php echo $subject['coId']?>">Reply
                            </a>
                        </td>
                        <td>
                            <a style="color:brown" title="Delete"  href="contactAdmin2.php?act=del&coId= <?php echo $subject['coId'] ?>">Delete
                            </a>
                        </td>
                    </tr>
                <?php
                //$sn++;
                }
                ?>
            </table>
				   
				</div> 
					
  			<div class="clearfix"></div>		
	</div> 
</div> <?php } else {
        ?>


    <div class="container" style="margin-bottom:145px" >
        <a href="logout.php" style="float:right; font-size:16px; color: brown;margin-top:10px; margin-bottom:10px" >Logout</a>
        <div class="main row" >
                

                <div class="col-md-12 company_ad">
                    <h2 >No Message Received </h2>
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
                    
                 
           
                   
                </div> 

                    
            <div class="clearfix"></div>        
    </div> 
</div>

<?php

    
} ?>
</div>

</body>
<?php
    include_once 'footer.php';
?>
</html>
