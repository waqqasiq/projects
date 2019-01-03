<?php
include_once('headerInside.php');
include_once('database.php');
if (isset($_REQUEST['studentid'])) {
    $studentid = $_REQUEST['studentid'];
    $query = "SELECT * FROM students WHERE id =$studentid";
    $result = mysqli_query($conn, $query);
    $student = mysqli_fetch_assoc($result);
    //print_r($student);
    $id = $student['id'];
    $name = $student['name'];
    $age = $student['age'];
    $contact = $student['contact'];
} else {
    $id = "";
    $name = "";
    $age = "";
    $contact = "";
}

if (isset($_REQUEST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];

    $query = "UPDATE students SET name='$name', age='$age', contact='$contact' WHERE id= $id";
    $last = mysqli_query($conn, $query);
    if ($last) {
        echo "<script>window.location='student-list.php'</script>";
    } else {
        echo "Something went Wrong";
    }
}
?>


<div class="container" style="height:500px;">

    <a href="student-list.php" class="btn btn-info">Student List</a>
    <form class="form-group" method="post" >
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="row">
            <div class="col-lg-6">
                <label>Name : </label>
                <input type="text" name="name" id='name' value="<?php echo $name ?>" class="form-control" />
            </div>        
            <div class="col-lg-6">
                <label>Age : </label>
                <input type="text" name="age" id='age' value="<?php echo $age ?>" class="form-control" />
            </div>
            <div class="col-lg-6">
                <label>Contact No. : </label>
                <input type="text" name="contact" id='contact' value="<?php echo $contact ?>" class="form-control" />
            </div>
            <div class="col-lg-11">
                <input type="submit" name="update" value="Update" class='btn btn-info' />
            </div>       
        </div>
    </form>
</div>
<?php
include_once('./includes/footer.php');
?>