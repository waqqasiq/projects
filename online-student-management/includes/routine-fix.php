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

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
if (isset($_REQUEST['save'])) {
    $id = $_POST['stdid'];
    $sub = $_POST['sub'];
    $day = $_POST['day'];
    $time = $_POST['time'];
    $qry = "INSERT INTO routine (`std_id`, `sub`, `day`, `time`) values($id,'$sub','$day','$time')";
    $rslt = mysqli_query($conn, $qry);
    if ($rslt) {
        //echo "<script></script>";
    } else {
        echo 'something went wrong!';
    }
}
$t11 = '-';
$t12 = '-';
$t21 = '-';
$t22 = '-';
$t31 = '-';
$t32 = '-';
$t41 = '-';
$t42 = '-';
if (isset($_REQUEST['shwrtn'])) {
    $id = $_POST['stdid'];
    $query = "SELECT * FROM routine WHERE std_id = $id";
    $run = mysqli_query($conn, $query);
    while ($rslt = mysqli_fetch_assoc($run)) {
        if ($rslt['day'] === 'sun') {
            if ($rslt['time'] === '9am') {
                $t11 = $rslt['sub'];
            } else if ($rslt['time'] === '11am') {
                $t21 = $rslt['sub'];
            } else if ($rslt['time'] === '1pm') {
                $t31 = $rslt['sub'];
            } else if ($rslt['time'] === '3pm') {
                $t41 = $rslt['sub'];
            }
        } else {
            if ($rslt['time'] === '9am') {
                $t12 = $rslt['sub'];
            } else if ($rslt['time'] === '11am') {
                $t22 = $rslt['sub'];
            } else if ($rslt['time'] === '1pm') {
                $t32 = $rslt['sub'];
            } else if ($rslt['time'] === '3pm') {
                $t42 = $rslt['sub'];
            }
        }
    }
}
if (isset($_REQUEST['delrtn'])) {
    $id = $_POST['stdid'];
    $query = "DELETE FROM routine WHERE std_id = $id";
    $del = mysqli_query($conn, $query);
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

<script>
    function getRecord(sid) {

        $.ajax({
            type: "POST",
            url: 'f2.php',
            data: 'act=getRec&sid=' + sid,
            success: function (data) {
                //alert(data);
                $("#displayRecord").html(data);
            }
        });
    }
</script>  

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
				<h2>Advise Subject</h2><br>
				<form method="post">
				<div class="col-md-6">
				  <div class="contact-form">
				  	
					    
					    	<div>
						    	<span>Subject Name</span>
						    	
						    	<select id="stdid" name="stdid" class="form-control" onchange="return getRecord(this.value);">
                    <?php
                    $query = "SELECT id,name FROM a ORDER BY id";
                    $result = mysqli_query($conn, $query);
                    ?> <option value="">--Select Name--</option>
                    <?php while ($student = mysqli_fetch_assoc($result)) { ?>
                        <option value="<?php echo $student['id']; ?>"><?php echo $student['id'] . '. - ' . $student['name']; ?></option>;
                        <?php
                    }
                    ?>
                </select><br>
						    </div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="contact-form">
						    <div>
						    	<span>Subject Title</span>
                                                        
                                                        <select id="sub" name="sub" class="form-control">
                    <?php
                    $query = "SELECT sub_id,sub_name FROM subject ORDER BY sub_id";
                    $sub = mysqli_query($conn, $query);
                    ?> <option value="">--Select Subject--</option>
                    <?php while ($sublist = mysqli_fetch_assoc($sub)) { ?>
                        <option value="<?php echo $sublist['sub_name']; ?>"><?php echo $sublist['sub_id'] . '. - ' . $sublist['sub_name']; ?></option>;
                        <?php
                    }
                    ?>
                </select><br>
						    </div>
						</div>
						</div>

						<div class="col-md-6">
						<div class="contact-form">
						    <div>
						    	<span>Day</span>
                                                       
                                                        <select id="day" name="day" class="form-control">
                    <option value="">--Select Day--</option>
                    <option value="sun">Sun-Tues</option>
                    <option value="mon">Mon-Wed</option>
                </select><br>
						    </div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="contact-form">
						    <div>
						    	<span>Schedule</span>
                                                       
                                                        <select id="time" name="time" class="form-control"> 
                    <option value="">--Select Time--</option>
                    <option value="9am">09.00AM-11.00AM</option>
                    <option value="11am">11.00AM-01.00PM</option>
                    <option value="1pm">01.00PM-03.00PM</option>
                    <option value="3pm">03.00PM-05.00PM</option>
                </select><br>
						    </div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="contact-form">

						   <div>
                                                       <label class="fa-btn btn-1 btn-1e"><input type="submit" value="SAVE" name="save"></label>
						  </div>
						</div>
					</div>
                    <div class="col-md-10">
                        <div class="contact-form">

                           <div>
                                                    <label class="fa-btn btn-1 btn-1e"><input type="submit" id="delrtn" name="delrtn"  value="RESET "></label>
                          </div>
                        </div>
                    </div>

                        

					    </form>
                                       
				    </div>
				
  			</div>	
  			<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered" style="text-align:center">

                <thead class="th1" style="font-size:14px">
                    <tr>
                        <td>TIME/DAY</td>
                        <td>Sunday</td>
                        <td>Monday</td>
                        <td>Tuesday</td>
                        <td>Wednesday</td>
                    </tr>
                </thead>
                <tbody id="displayRecord">
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
                </tbody>
            </table>
        </div>
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
