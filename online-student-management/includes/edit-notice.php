<head>
<style>
        .btn-info {
        color: #fff;
        background-color: #000 !important;
        border-color: #000 !important;
        }
        textarea {
            width: 100%;
  height: 150px;
    resize: vertical;
}
</style>
</head>
<?php
include_once('database.php');
include_once('admin-header.php');


if (isset($_REQUEST['nid'])) {
    $nid = $_REQUEST['nid'];
    $query = "SELECT nid,topic,content FROM notice WHERE nid =$nid";
    $result = mysqli_query($conn, $query);
    $subject = mysqli_fetch_assoc($result);
    //print_r($student);
    $nid = $subject['nid'];
    $name = $subject['topic'];
    $credit = $subject['content'];
    
} else {
    $nid = "";
    $name = "";
    $credit = "";
    
}

if (isset($_REQUEST['update'])) {
    $nid = $_POST['nid'];
    $name = $_POST['topic'];
    $credit = $_POST['content'];
   
    echo $query = "UPDATE notice SET topic='$name', content='$credit' WHERE nid= $nid";
    $last = mysqli_query($conn, $query);
    if ($last) {
        echo "<script>window.location='notice-list.php'</script>";
    } else {
        echo "Something went Wrong";
    }
}
?>


<div class="container" style="height:500px;">

    <br></br><a href="notice-list.php" class="btn btn-info">Notice List</a><br></br>
    <form class="form-group" method="post" >
        <input type="hidden" name="nid" value="<?php echo $nid ?>">
        <div class="row">
                 
            <div class="col-lg-6">
                <label>Title : </label>
                <input type="text" name="topic" id='name' value="<?php echo $name ?>" class="form-control" />
            </div>
            
            <div class="col-lg-12">
                <label>Content : </label>
                <textarea  name="content"  value="<?php echo $credit ?>" class="form-control" /></textarea>
            </div>
            
            
            <div class="col-lg-11">
            <br></br>    <input type="submit" name="update" value="Update" class='btn btn-info' />
            </div>       
        </div>
    </form>
</div>
<?php
include_once('footer.php');
?>