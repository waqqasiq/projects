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

function  getSubject($conn,$subid){
 $query= "SELECT sub FROM routine WHERE rt_id='$subid'";
 $zone= mysqli_query($conn,$query);
 $sub = mysqli_fetch_assoc($zone);
 return $sub['sub'] ;
 
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



            
            
            
            <div class="col-md-12">
              <div class="contact-form">
                 <table class="table table-hover">
                    <thead class="th1">
                        <h3>    <?php echo $name['name']?>'s Gradesheet</h3><br>
                        <tr style="font-size:14px">

                            <?php
                            $query   = "SELECT name FROM a where id= $sid";
                            $result  = mysqli_query( $conn, $query );
                            $name= mysqli_fetch_assoc( $result );
                            
                            $query   = "SELECT * FROM gradedetails where id= $sid";
                            $query1   = "SELECT * FROM gradedetails where id= $sid";
                            $result = mysqli_query( $conn, $query );
                            $result1  = mysqli_query( $conn, $query1 );
                            $std1 = mysqli_fetch_assoc( $result1 );
                            if(count($std1)<=0){
                                echo '<strong> No course has been completed</strong>';
                                
                            }
                            else{

                                ?>
                                <td>Id</td>
                                <td>Subject Name</td>
                                <td>GPA</td>
                                <td>GRADE</td>
                            </tr>
                        </thead>
                        <?php

                    }
                    ?>
                    
                    
                    
                    
                    <?php
                    while( $student = mysqli_fetch_assoc( $result ) ) {
                        ?>
                        <tr style="font-size:14px; font-weight:normal">
                            <td><?php echo $student['id']; ?></td>
                            <td><?php echo getSubject($conn,$student['rt_id']); ?></td>
                            <td><?php echo $student['gpa']; ?></td>
                            <td><?php echo $student['grade']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
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
