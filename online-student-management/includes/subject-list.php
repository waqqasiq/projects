<?php
include_once('database.php');
include_once 'admin-header.php';


/* ----- RECORD/DELETE ----------------*/
if (isset($_REQUEST['act']) && $_REQUEST['act'] == 'del') {
    $id = $_REQUEST['subjectid'];
   echo  $query = "DELETE FROM subject WHERE sub_id = $id";
    $rec = mysqli_query($conn, $query);
    if ($rec) {
        echo "<script>window.location='subject-list.php'</script>";
    } else {
        echo "Something went Wrong";
    }
}



?>
<head>
    <style>
        .btn-info {
        color: #fff;
        background-color: #000 !important;
        border-color: #000 !important;
        }
    </style>
</head>
<div class="container" style="font-size: 14px">
    <div class="row">
        <div class="col-lg-12">
            <br><a href="add-subr.php" class="btn btn-info">Add New </a><br/><br>
            <table class="table table-bordered" style width="100%">
                <thead>
                    <tr>
                        <th>Subject ID</th>
                        <th>Subject Name</th>
                        <th>Total Credit</th>
                        <th>Department Name</th> 
                        <th colspan="2" style = "text-align:center;"
                        </th>Action</th>
                    </tr>
                </thead>
                <?php
                //echo "<pre/>";
                $query = "SELECT subject.sub_id,subject.sub_name,subject.sub_credit,department.dept_name FROM subject INNER JOIN department on department.dept_id=subject.dept_id ";
                
                //$res=mysqli_query($conn,$q);

                $result = mysqli_query($conn, $query);
                //$student = mysqli_fetch_assoc($result);
                //$sn=1;
                while ($subject = mysqli_fetch_assoc($result)){// $department = mysqli_fetch_assoc($res)) {
                    //print_r($student);
                    ?>
                    <tr>
                        
                        <td><?php echo $subject['sub_id']; ?></td> 
                        <td><?php echo $subject['sub_name']; ?></td>
                        <td><?php echo $subject['sub_credit']; ?></td>
                        <td><?php  echo $subject['dept_name']; ?></td>
                        <td>
                            <a
                                style="color:DarkCyan" href="edit_subdetail.php?subjectid=<?php echo $subject['sub_id']?>">Edit
                            </a>
                        </td>
                        <td>
                            <a style="color:brown" title="Delete"  href="subject-list.php?act=del&subjectid= <?php echo $subject['sub_id'] ?>">Delete
                            </a>
                        </td>
                    </tr>
                <?php
                //$sn++;
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php //include_once('./includes/footer.php');
?>