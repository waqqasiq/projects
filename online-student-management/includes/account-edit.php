<?php
    include_once 'admin-header.php';
    //$conn = mysqli_connect('localhost','root','','std_mng');
    include_once 'database.php' ;
    if(!$conn){
        die("Connection Failed: ".mysqli_connect_error());
    }
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $query = "SELECT * FROM a WHERE id = $id";
        $result = mysqli_query($conn,$query);
        $student = mysqli_fetch_assoc($result);
        $name = $student['name'];
        $email = $student['email'];
        $phno = $student['phno'];
        $id = $student['id'];
    }
    else{
        $name = "";
        $email = "";
        $phno = "";
        $id = "";
    }
    if(isset($_REQUEST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phno = $_POST['phno'];
        $id = $_POST['id'];
        $query = "UPDATE a SET name = '$name', email='$email', phno = '$phno' WHERE id=$id";
        $last = mysqli_query($conn,$query);

        if($last){
            echo "<script>window.location='account-list.php'</script>";
        }
        else{
            echo "Something went wrong";
        }
    }
?>
<html>
    <head>
        <link href="bootstrap.min.css" rel="stylesheet">
        <style>
            #update
            {
                margin-top: 5%;
            }

            .btn-info {
            color: #fff;
            background-color: #000 !important;
            border-color: #000 !important;
            }
            
        </style>

   <body>
        <h4 style="text-align: center; padding-bottom: 20px; text-decoration: underline; ">
                            Edit Account </h4>
        <div class="container">
        <form method="post">
            <input type="hidden" id="id" name="id" value="<?php echo $id;?>">

                    <div class="row">
                        <div class='col-lg-12'>
                            <label> Full Name : </label> <input type="text" value="<?php echo $name;?>" class="form-control" id="name" name="name">
                        </div>
                        <div class='col-lg-12'>
                            <label> Email ID :</label> <input type="email" value="<?php echo $email;?>" class="form-control" id="emailid" name="email"> 
                        </div>
                        <div class='col-lg-12'>
                            <label> Phone Number :</label> <input type="text" value="<?php echo $phno;?>" class="form-control" id="phno" name="phno">
                        </div>
                        
                        <div class='col-lg-6'>
                            <input type="submit" id="update" name="update" class="btn btn-info " value="Update" onclick="validation()">
                        </div>
                    </div>
        </form>
        <br>
            <div class="row">
                <div class='col-lg-6'>
                            <a type="button" class="btn btn-info" href = "account-list.php">Go To List</a>
                </div>
            </div>
        </div>
        
    </body>
</html>



