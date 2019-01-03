<?php
session_start();
if(isset($_SESSION['adminMail'])==TRUE){
    	echo "<script>window.location='admin-page.php'</script>";
    	exit();
    }
    include_once 'dashHead.php';
    include_once 'database.php';
    $sid=$_REQUEST["stdid"] ;

$id = $_REQUEST['stdid'];
if(isset($_SESSION['uid'])===FALSE){
    echo "<script>window.location='../index.php'</script>";
}
//print_r($_SESSION);

$t11='-'; $t12='-'; $t21='-'; $t22='-'; $t31='-'; $t32='-'; $t41='-'; $t42='-';
              $query = "SELECT * FROM routine WHERE std_id = $id";
                $run = mysqli_query($conn,$query);
                while($rslt= mysqli_fetch_assoc($run)){
                    if ($rslt['day']==='sun')
                    {
                        if($rslt['time']==='9am'){ $t11 = $rslt['sub']; }
                        else if($rslt['time']==='11am'){ $t21 = $rslt['sub']; }
                        else if($rslt['time']==='1pm'){ $t31 = $rslt['sub']; }
                        else if($rslt['time']==='3pm'){ $t41 = $rslt['sub']; }
                    }
                    else {
                        if($rslt['time']==='9am'){ $t12 = $rslt['sub']; }
                        else if($rslt['time']==='11am'){ $t22 = $rslt['sub']; }
                        else if($rslt['time']==='1pm'){ $t32 = $rslt['sub']; }
                        else if($rslt['time']==='3pm'){ $t42 = $rslt['sub']; }
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

<div class="main_btm">

    <!-- start main_btm -->
	<div class="container">
        <?php?>
		<div class="main row">
			    
                
                 
            <?php
        $query   = "SELECT name FROM a where id= $sid";
        $result  = mysqli_query( $conn, $query );
        $name= mysqli_fetch_assoc( $result )
        ?>
        <h3>    <?php echo $name['name']?>'s Routine</h3><br>
    
				
				<div class="col-md-12">
				  <div class="contact-form">
				  	<table class="table table-bordered">
                <thead class="th1">
                    <tr style="font-size:14px">
                <td>TIME/DAY</td>
                <td>Sunday</td>
                <td>Monday</td>
                <td>Tuesday</td>
                <td>Wednesday</td>
                    </tr>
                </thead>
                <tr>
                <td class="th1">09.00AM-11.00AM</td>
                <td name="t11"> <?php echo $t11; ?> </td>
                <td name="t12"> <?php echo $t12; ?></td>
                <td name="t13"> <?php echo $t11; ?></td>
                <td name="t14"> <?php echo $t12; ?></td>
                </tr>
                <tr>
                <td class="th1">11.00AM-01.00PM</td>
                <td name="t21"> <?php echo $t21; ?></td>
                <td name="t22"> <?php echo $t22; ?></td>
                <td name="t23"> <?php echo $t21; ?></td>
                <td name="t24"> <?php echo $t22; ?></td>
                </tr>
                <tr>
                <td class="th1">01.00PM-03.00PM</td>
                <td name="t31"> <?php echo $t31; ?></td>
                <td name="t32"> <?php echo $t32; ?></td>
                <td name="t33"> <?php echo $t31; ?></td>
                <td name="t34"> <?php echo $t32; ?></td>
                </tr>
                <tr>
                <td class="th1">03.00PM-05.00PM</td>
                <td name="t41"> <?php echo $t41; ?></td>
                <td name="t42"> <?php echo $t42; ?></td>
                <td name="t43"> <?php echo $t41; ?></td>
                <td name="t44"> <?php echo $t42; ?></td>
                </tr>
            </table>
				  	
				  	
					   
                                        
				    </div>

  			</div>		
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>

<?php include_once 'footer.php'; ?>

 
</body>
</html>
