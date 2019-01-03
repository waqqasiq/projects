<?php
    include 'headerInside.php';
    include_once ('database.php');
    
    // SING UO
        if(isset($_POST['save']))
    {
        $name = $_POST['name'];
        $email = $_POST['emailid'];
        $phno = $_POST['phno'];
        $pass = $_POST['snpassword'];
        if($name!=""||$email!=""||$phno!=""||$pass!="")
        {
        $query = "SELECT * FROM a where email='$email'";
        $result = mysqli_query($conn,$query);
        $temp= mysqli_fetch_assoc($result);
        if(count($temp)<=0){
        $qry = "INSERT INTO a values(null,'$name','$email','$phno','$pass')";
        $rslt = mysqli_query($conn,$qry);
        if($rslt)
        {
            echo "<script> window.location.href='admissionForm.php?stdMail=$email'</script>";
        }
        else{
            echo 'something went wrong!';
        }
            }
        else{
            echo '<script> alert("Email already exists!") </script>';
        }
        }
        
    }
    // LOG IN
    
    if(isset($_POST['enter']))
    {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        
    if($email!="" || $pass!="")
        {
        $query = "SELECT * FROM a where email='$email' and password= '$pass'";
        $result = mysqli_query($conn,$query);
        $temp= mysqli_fetch_assoc($result);
        if(count($temp)>0)
        {
                $_SESSION['uid']= $temp['id'];
                $_SESSION['uname']= $temp['name'];
                $_SESSION['umail']= $temp['email'];
                echo "<script>window.location='dashboard.php?stdid=".$temp['id']."'</script>";
        }
        else{
            echo '<script> alert("Wrong Username or Password!!") </script>';
        }
        }
    }
?>
<html>
    <head>
        <script src="../js/jquery.min.js"></script>
    <style>
        #save{
            margin-top: 5%;
            margin-left: 33%;
        }
         #enter{
            margin-top: 5%;
            margin-left: 40%;
        }
        .btn-info {
        color: #fff;
        background-color: #000 !important;
        border-color: #000 !important;
        }
        
    </style>
    <script>
$(document).ready(function(){
                $("#signup").hide();
            $("#lgnbtn").click(function(){
                $("#login").show();
                $("#signup").hide();
            });
            $("#sgnbtn").click(function(){
                $("#signup").show();
                $("#login").hide();
            });
             $("#enter").click(function(){
                var email = $("#email").val();
                var pass = $("#password").val();
                if(email==="")
                {
                    alert("Email Address Required!");
                }
                else if(pass==="")
                {
                    alert("Password Required!");
                }
            });
              $("#save").click(function(){
                if($("#name").val()===""||$("#emaiilid").val()===""||$("#snpassword").val()===""||$("#csnpassword").val()===""||$("#phno").val()==="")
                {
                    alert("You have to fill up all the boxes");
                }
               else if($("#snpassword").val()!==$("#csnpassword").val())
               {
                   alert("Enter Password Correctly!");
               }
            });
            });
    </script>
    </head>
    <div style="text-align: center; margin-top: 3%">
        <button type="button" class="btn btn-info">
            <a href="../adminw.php" style="color: whitesmoke" >Admin Login</a>
        </button>
    </div>
    <div class="container" style="margin-top: 3%;">
        <div class="row">
            <div class="col-lg-12" style="text-align:center">
                <input type="button" class="btn btn-primary" id="lgnbtn" value="LOG IN" style="margin-right:10px" >
            <input type="button" class="btn btn-danger" id="sgnbtn" value="SIGN UP" >
            </div>
        </div>
        </div>
    <body style="font-size: large">
        

        <div class="container" style="margin-left:32%">
        <div class="row">
            <div class="col-lg-6" id="login">
                <form method="post">
                    <div class="row" style="padding: 10%;">
                    <div class='col-lg-12'>
                        <label> Email Address : </label> <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class='col-lg-12'>
                        <label> Password : </label> <input type="password" class="form-control" id="password" name="password"> 
                    </div>
                         <div class='col-lg-12'>
                             <label> </label> <input type="submit" id="enter" name="enter" class="btn btn-info center" value="Submit">
                    </div>
                     </div>
                </form>
        </div>
        
            <div class="col-lg-6" id="signup">
                <form method="post">
                <div class="row" style="padding: 10%;">
                    <div class='col-lg-12'>
                        <label> Full Name : </label> <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class='col-lg-12'>
                        <label> Email Address :</label> <input type="email" class="form-control" id="emailid" name="emailid"> 
                    </div>
                    <div class='col-lg-6'>
                        <label> Phone Number :</label> <input type="text" class="form-control" id="phno" name="phno">
                    </div>
                    <div class='col-lg-6'>
                        <label>Gender:</label>
                            <select class="form-control" id="gender">
                             <option>Male</option>
                             <option>Female</option>
                            </select>
                    </div>
                    <div class='col-lg-6'>
                        <label> Password  : </label> <input type="password" class="form-control" id="snpassword" name="snpassword"> 
                    </div>
                    <div class='col-lg-6'>
                        <label> Confirm Password  : </label> <input type="password" class="form-control" id="csnpassword" name="csnpassword"> 
                    </div>
                    <div class='col-lg-8'>
                        <label> </label> <input type="submit" id="save" name="save" class="btn btn-info center" value="Create an Account">
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </body>
<?php
    include_once 'footer.php';
?>
</html>