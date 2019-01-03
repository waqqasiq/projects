<?php
include_once('database.php');
include_once 'admin-header.php';


/* ----- RECORD/DELETE ----------------*/
if (isset($_REQUEST['act']) && $_REQUEST['act'] == 'del') {
    $nid = $_REQUEST['nid'];
   echo  $query = "DELETE FROM admin WHERE adminid = $nid";
    $rec = mysqli_query($conn, $query);
    if ($rec) {
        echo "<script>window.location='adminEdit.php'</script>";
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
<div class="container" style="font-size: 14px; margin-top: 20px;margin-bottom: 20px">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered" style width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                       
                        
                        <th colspan="2" style = "text-align:center;"
                        </th>Action</th>
                    </tr>
                </thead>
                <?php
                $query = "SELECT * FROM admin" ;
                $result = mysqli_query($conn, $query);
                while ($subject = mysqli_fetch_assoc($result)){// $department = mysqli_fetch_assoc($res)) {
                    ?>
                    <tr>
                        <td><?php echo $subject['name']; ?></td>
                        <td><?php echo $subject['email']; ?></td>
                        <td>
                            <a
                                style="color:DarkCyan" href="updateAdmin.php?nid=<?php echo $subject['adminid']?>">Edit
                            </a>
                        </td>
                        <td>
                            <a style="color:brown" title="Delete"  href="adminEdit.php?act=del&nid=<?php echo $subject['adminid'] ?>">Delete
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
<?php 
include_once('footer.php');
?>

