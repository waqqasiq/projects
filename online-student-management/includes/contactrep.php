<?php
    include_once 'headerInside.php';
    include_once 'database.php';

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}


if(isset($_REQUEST['act']) && $_REQUEST['act']='del'){
    $id= $_REQUEST['rplyid'];
   $query= "DELETE FROM contact_reply WHERE rplyid = $id";
  
    $rec = mysqli_query($conn,$query);
    if($rec){       
     echo"<script>window.location='contactrep.php'</script>";
    }
    else{
        echo"problem";
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
    function validation(){
        var subname = document.getElementById('sname').value;
        var gpa = document.getElementById('gpa').value;
        var grade = document.getElementById('grade').value;
        if (subname==""){
            alert("subname is must");
            return false;
        }
        if (gpa==""){
            alert("gpa is must");
            return false;
        }
        if (grade==""){
            alert("grade is must");
            return false;
        }
    }
</script>
<script>
$(document).ready(function(){
    $("#stdid").change(function(){
        $cid= $(this).val();
        $.ajax({
            type: "POST",
            url: 'functions.php',
            data: 'cid='+$cid,
            success: function(data){
                //alert(data);
                $("#sub").html(data);
            }
        });
    });

});
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
				
                        <?php
        $query   = "SELECT * FROM contact_reply INNER JOIN contact where contact.emai=contact_reply.stemail";
        $result  = mysqli_query( $conn, $query );
        
        $rowcount=mysqli_num_rows($result);
        
    

        if($rowcount>0){ ?>
  			<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover" style="margin-bottom:100px">

                <thead class="th1" style="font-size:14px">
                    <h3  style="text-align:center; margin-bottom: 25px; font-weight:bold" >MESSAGE REPLY</h3>
                    <tr>
                        
                        <td>Subject</td>
                        
                        <td>Reply</td>
                        
                    </tr>
                </thead>
                <tbody id="displayRecord">
                    <?php
                    $userid = $_SESSION['uid'];
        $query   = "SELECT contact_reply.rplyid,contact.subject,contact_reply.r_msg FROM contact_reply INNER JOIN contact ON contact.coId=contact_reply.coid INNER JOIN a ON contact_reply.stemail=a.email";
        $result  = mysqli_query( $conn, $query );

        while( $student = mysqli_fetch_assoc( $result ) ) {
            ?>
            <tr>
                
                <td class="col-md-5"><?php echo $student['subject']; ?></td>
                
                <td class="col-md-6"><?php echo $student['r_msg']; ?></td>
                
                <td><a style="color:brown" href="contactrep.php?rplyid=<?php echo $student['rplyid']?>&act=del">DELETE</a></td>
            </tr>
            <?php
        }
        ?>
                </tbody>
            </table>
        </div>
    </div> 
</div>	 <?php } else echo"<h2 > No Message Received Yet </h2>" ?>
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>
<?php
    include_once 'footer.php';
?>
</body>
</html>