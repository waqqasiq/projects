<?php
include_once'database.php';
include_once 'admin-header.php';

     if(isset($_REQUEST['rt_id']))
     {
	     $studentid = $_REQUEST['rt_id'];
	     $query = "SELECT * FROM gradedetails WHERE rt_id = $studentid";
	     $result = mysqli_query($conn,$query);
	     $student = mysqli_fetch_assoc($result);
	     $gpa = $student['gpa'];
	     $grade = $student['grade'];

     }
     else
     {
	     $subname ='' ;
	     $gpa = '';
	     $grade = '';

     }

function  getSubject($conn,$subid){
    $query= "SELECT sub FROM routine WHERE rt_id='$subid'";
    $zone= mysqli_query($conn,$query);
    $sub = mysqli_fetch_assoc($zone);
    return $sub['sub'] ;
   
}
function  getName($conn,$name){
    $query= "SELECT name FROM a WHERE id=$name";
    $zone= mysqli_query($conn,$query);
    $sub = mysqli_fetch_assoc($zone);
    return $sub['name'] ;
   
}
if(isset($_REQUEST['save']))
{
	$id = $_POST['id'];
	$subname = $_POST['sname'];
	$gpa = $_POST['gpa'];
	$grade = $_POST['grade'];
	
	$query = "UPDATE `gradedetails` SET `gpa`=$gpa,`grade`='$grade' WHERE rt_id = $studentid";
	$last = mysqli_query($conn,$query);
	if($last)
	{
		echo "<script>window.location='gradeform.php'</script>";
	}
	else
	{
		echo "Something went wrong";
	}
	
  
}

?>


<div class="container">
	<form method="post">
		<input type="" name="id" value="<?php echo getName($conn,$student['id'])?>">

		<div class="row">
			<div class='col-lg-6'>
				<label> Subject name : </label>
				<input type="text" class="form-control" id="sname" name="sname" value="<?php echo getSubject($conn,$studentid)?>">
			</div>
			<div class='col-lg-6'>
				<label> GPA  : </label>
				<input type="number" step="0.01" class="form-control" id="gpa" name="gpa" value="<?php echo $gpa ;?>">
			</div>
			<div class='col-lg-6'>
				<label> Grade :</label>
				<input type="text" class="form-control" id="grade" name="grade" value="<?php echo $grade?>">
			</div>
			<div class='col-lg-6'>
				<input type="submit" id="save"  name="save"  class="btn btn-info center" value="update" ">
			</div>
		</div>
	</form>
</div>
