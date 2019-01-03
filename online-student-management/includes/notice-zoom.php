<?php
    include_once 'headerout2.php';
    include_once 'database.php';
    

$qry = "select nid,topic,content,curtime from notice order by nid desc limit 3";
    $qry2 = "select nid,topic,content,curtime from notice order by nid desc";
    $result = mysqli_query($conn,$qry);


$id= $_REQUEST['id'];
  if (isset($_REQUEST['id'])) {
    $qry = "select * from notice where nid='$id'";
    $result = mysqli_query($conn,$qry);
    $qry2 = "select nid,topic,content,curtime from notice order by nid desc";
    $subject = mysqli_fetch_assoc($result);
  }
//print_r($_SESSION);
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
 <link rel="stylesheet" href="../css/info.css">
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
			<h2 style="text-align:center">Notice</h2><br>
    
				
				<div class="col-md-8">
				  <div class="contact-form">
				  <div class="accordion">
            <dl>
              <dt>
              </dt>
            <dd style="background: #f4f4f4; width: 100%">
            <br><br><div class="col-sm-12" id="info">
                <h3><?php echo $subject["topic"]?></h3>
                <p style="font-size:11px">
                    <?php echo "Published Date: ".$subject["curtime"]?>
                    
                </p>
                <p style="font-size:14px">
                   
                    <?php echo $subject["content"]?>
                </p>
            </dd>
         
            </dl>
</div>
        </div>
    </div>

           <div class="col-md-4">
                  <div class="contact-form">
                  <div class="accordion">
           
            <dl style="background: #f4f4f4;padding: 2%;">
                <marquee style="max-height: 400px;" direction = "up" onmouseover="this.stop();" onmouseout="this.start();">
                     <?php 
                   $topic = mysqli_query($conn,$qry2);
                     while($news = mysqli_fetch_assoc($topic)){
                        
                         ?>
              <dd style="padding: 2%; font-size: 15px">
                  <strong><a href="notice3.php?id=<?php echo $news['nid']?>"> <?php echo $news["topic"]?></a></strong>
           
              </dd>
            <?php }?>
               </marquee>
            </dl>
              
          </div>
        </div>
    </div>	
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>

<?php include_once 'footer.php'; ?>

 
</body>
</html>
