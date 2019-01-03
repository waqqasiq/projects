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
$count = 1;
if(isset($_POST['save'])){
    $id=$_POST['stdid'];
    $subname=$_POST['sub'];
    $gpa=$_POST['gpa'];
    $grade=$_POST['grade'];
    $q ="select rt_id from gradedetails where id=$id and rt_id='$subname'";
    $r = mysqli_query($conn,$q);
    $l = mysqli_fetch_assoc($r);
    if(count($l)<=0){
        $query="INSERT INTO gradedetails(rt_id,gpa,grade,id) VALUES ('$subname',$gpa,'$grade',$id)";
        $result=mysqli_query($conn,$query);
        if($result){
           echo "<script>window.location='gradeform2.php'</script>";
        }
        
    }
    else{
            echo "<script>alert('Already Enrolled');</script>";
            echo "<script>window.location='gradeform2.php'</script>";
        }

}

if(isset($_REQUEST['act']) && $_REQUEST['act']='del'){
    $id= $_REQUEST['rt_id'];
    $query= "DELETE FROM gradedetails WHERE rt_id = $id";
  
    $rec = mysqli_query($conn,$query);
    if($rec){       
     echo"<script>window.location='gradeform2.php'</script>";
    }
    else{
        echo"problem";
    }
}
function  getSubject($conn,$subid){
   $query= "SELECT sub FROM routine WHERE rt_id='$subid'";
   $zone= mysqli_query($conn,$query);
   $sub = mysqli_fetch_assoc($zone);
   return $sub['sub'] ;
   
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
				<h2>Assign Grade</h2><br>
				<form method="post">
				<div class="col-md-6">
				  <div class="contact-form">
				  	
					    
					    	<div>
						    	<span>Student Name</span>
						    	
						    	<select id="stdid" name="stdid" class="form-control" >
                    <?php
                        $query = "SELECT id, name FROM a";
                        $result = mysqli_query($conn,$query);
                        ?> <option value="">--Select Name--</option>
                                        <?php
                        while($student= mysqli_fetch_assoc($result)){?>
                        <option value="<?php echo $student['id']; ?>"><?php echo $student['name']; ?></option>;
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
                                                            <option value="">--Subjects--</option>;
                   
                </select><br>
						    </div>
						</div>
						</div>

						<div class="col-md-6">
						<div class="contact-form">
						    <div>
						    	<span>GPA</span>
                                        <span><input type="number" step="0.01" name="gpa" class="form-control" id="inputEmail3"></span>
						    </div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="contact-form">
						    <div>
						    	<span>Grade</span>
                                                       
                                           <span><input type="text" name="grade" class="form-control" id="inputEmail3"></span>
						    </div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="contact-form">

						   <div>
                                                       <label class="fa-btn btn-1 btn-1e"><input type="submit" value="SAVE" name="save"></label>
						  </div>
						</div>
					</div>
					    </form>
                                       
				    </div>
				
  			</div>	
                        <?php
        $query   = "SELECT * FROM gradedetails";
        $result  = mysqli_query( $conn, $query );
        
        $rowcount=mysqli_num_rows($result);
        
    

        if($rowcount>0){ ?>
  			<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover" style="margin-bottom:100px">

                <thead class="th1" style="font-size:14px">
                    <h3  style="text-align:center; margin-bottom: 25px; font-weight:bold" >STUDENT RESULTS</h3>
                    <tr>
                        <td>Name</td>
                        <td>Subject</td>
                        <td>GPA</td>
                        <td>Grade</td>
                        
                    </tr>
                </thead>
                <tbody id="displayRecord">
                    <?php
        $query   = "SELECT a.name, gradedetails.id,gradedetails.rt_id,gradedetails.gpa,gradedetails.grade FROM gradedetails INNER JOIN a ON gradedetails.id=a.id";
        $result  = mysqli_query( $conn, $query );

        while( $student = mysqli_fetch_assoc( $result ) ) {
            ?>
            <tr>
                <td><?php echo $student['name'] ?></td>
                <td><?php echo getSubject($conn,$student['rt_id']); ?></td>
                <td><?php echo $student['gpa']; ?></td>
                <td><?php echo $student['grade']; ?></td>
                <td><a style="color:DarkCyan" href="admin-gradeshow.php?rt_id=<?php echo $student['rt_id']?>">Edit</a></td>
                <td><a style="color:brown" href="gradeform2.php?rt_id=<?php echo $student['rt_id']?>&act=del">DELETE</a></td>
            </tr>
            <?php
        }
        ?>
                </tbody>
            </table>
        </div>
    </div> 
</div>	 <?php } ?>
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>
<?php
    include_once 'footer.php';
?>
</body>
</html>