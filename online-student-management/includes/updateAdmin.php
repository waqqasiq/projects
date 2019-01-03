<?php 
include_once('database.php');
include_once 'admin-header.php';
if(isset($_REQUEST['nid'])){
    $idAd = $_REQUEST['nid'];
    $qry = "SELECT * FROM admin WHERE adminid = $idAd";
    $rslt= mysqli_query($conn,$qry);
    $adminInfo = mysqli_fetch_assoc($rslt);
}

if(isset($_POST['save'])){
    $name =$_POST['name'];
    $mail =$_POST['mail'];
    $query= "UPDATE `admin` SET `name`='$name',`email`='$mail' WHERE adminid = $idAd";
    
    // exit();
    $last= mysqli_query($conn,$query);
    if($last){
        echo '<script> alert("Successfull Changed"); </script>';
        echo "<script>window.location='adminEdit.php'</script>";
    }else{
        echo "<script>Something went wrong</script>";
    }
}
    
?>
<script>
    function validateForm() {
        var x = document.getElementById('name').value;
        var x = document.getElementById('mail').value;
        var x = document.getElementById('pass').value;
        if (x=="") {
            alert("Enter all info");
            return false;
        }else{
            return true;
        }
    }
</script>
<style>
        .btn-info {
        color: #fff;
        background-color: #000 !important;
        border-color: #000 !important;
        }
</style>
<div class="container" style="margin-top:25px;">
    <a href="adminEdit.php" class="btn btn-info" style="margin-bottom:20px ">Admin List</a>
<form class="form-group" method="post" style="font-size: medium">
    <div class="row">
        <div class="col-lg-6">
            <label>Admin Name: </label>
            <input type="text" name="name" id='name' class="form-control" value="<?php echo $adminInfo['name'];?>"/>
        </div>  
        <div class="col-lg-6">
            <label>Admin Email : </label>
            <input type="text" name="mail" id='mail' class="form-control" value="<?php echo $adminInfo['email'];?>"/>
        </div>        
        <div class="col-lg-11"><br>
            <input type="submit" name="save" value="Update" class='btn btn-info' onclick="return validateForm()"/>
        </div>       
    </div>
</form>
</div>

