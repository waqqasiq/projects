<?php 
	include_once('database.php');
	if(isset($_REQUEST['cid']) && $_REQUEST['cid']!=''){
		$cid= $_REQUEST['cid'];
                echo $cid;
		$query= "SELECT * FROM routine WHERE std_id=$cid";
                
		$zone= mysqli_query($conn,$query);
			echo "<option value=''>--Select Subject--</option>";
		while($zonlist= mysqli_fetch_assoc($zone)){
			echo "<option value='".$zonlist['rt_id']."'>".$zonlist['sub']."</option>";
		}
	}
?>