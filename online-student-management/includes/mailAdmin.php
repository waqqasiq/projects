<?php 
include_once('database.php');
include_once 'headerInside2.php';

function getValue($conn,$id){
    $qry = "SELECT name FROM `admin` where adminid = $id";
    $rslt = mysqli_query($conn,$qry);
    $name = mysqli_fetch_assoc($rslt);
    return $name['name'];
}
if(isset($_REQUEST['coId'])){
    $coid = $_REQUEST['coId'];
    $qry = "select emai from contact where coId = $coid";
    $result = mysqli_query($conn,$qry);
    $contInfo = mysqli_fetch_assoc($result);
}

if(isset($_POST['save'])){
    
    $to      = $_POST['to'];
    $coid      = $_POST['coid'];
    $rdate = date('Y-m-d');
    $rplyby = $_SESSION['adminid'];
    $subject = "SM University - Reply";
    $message = $_POST['content'];
    $headers = 'From: samin' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
    $sts = mail($to, $subject, $message, $headers);    
    $qury= "INSERT INTO `contact_reply`(`coid`, `r_msg`, `rply_date`, `rply_by`) VALUES ($coid,'$message','$rdate','$rplyby')";
   $relt = mysqli_query($conn,$qury);  
    if($sts){
       //$relt = mysqli_query($conn,$qury);       
       echo '<script> window.location="adminMail2.php"</script>';
       
   }else{
        //echo 'Your mail not sent successfully';
       echo '<script> window.location="adminMail2.php"</script>';
   }
}

if(isset($_REQUEST['act']) && isset($_REQUEST['rid'])){
    $rid = $_REQUEST['rid'];
    $qury7 = "DELETE FROM `contact_reply` WHERE rplyid = $rid";
    $result7 = mysqli_query($conn,$qury7);
}
    
?>

<html>

<style>
        .btn-info {
        color: #fff;
        background-color: #000 !important;
        border-color: #000 !important;
        }
</style>

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

<head>

<div class="container" style="margin-top:25px;">
<form class="form-group" method="post" style="font-size: medium">
    <input type="hidden" name="coid" id='coid' value="<?php echo $_REQUEST['coId'];?>" />
    <div class="row">
        <div class="col-lg-6">
            <label>To: </label>
            <input type="text" name="to" id='to' value='<?php echo $contInfo['emai']?>' class="form-control" />
        </div>         
        <div class="col-lg-12">
            <label>Content : </label>
            <textarea  name="content" class="form-control" /></textarea>
        </div>
        <div class="col-lg-11"><br>
            <input type="submit" name="save" value="send" class='btn btn-info' onclick="return validateForm()"/>
        </div>       
    </div>
</form>
    
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered" style width="100%">
                <?php
                $coid = $_REQUEST['coId'];
                $query = "SELECT coid,emai,subject FROM contact where coid =  $coid" ;
                
              
                $result1 = mysqli_query($conn, $query);
                
                $subject1 = mysqli_fetch_assoc($result1);
                echo ' <tr><td>'. $subject1['emai'].'</td><td colspan = "2">'. $subject1['subject'].'</td></tr>';
                $query1 = "SELECT * FROM contact_reply where coid =  $coid" ;  
                $result = mysqli_query($conn, $query1); ?>
                <tr>
                    <th>Reply by</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
                <?php while($subject = mysqli_fetch_assoc($result)){    ?>
                <tr>
                <td><?php echo getValue($conn,$subject['rply_by']); ?></td>
                <td><?php echo $subject['r_msg']; ?></td>
                
                <td>
                    <a style="color:brown" title="Delete"  href="mailAdmin.php?act=del&rid=<?php echo $subject['rplyid'] ?>&coId=<?php echo $coid?>">Delete
                    </a>
                </td>
            </tr>
                <?php
               
                }
                ?>
            </table>
        </div>
    </div>
</div>

