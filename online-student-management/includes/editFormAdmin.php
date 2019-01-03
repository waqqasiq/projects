<?php
    include 'database.php';
    //include_once 'admin-header.php';
    
    session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="../css/editFormAdminStyle.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="js/admissionFormScript.js"></script>
        <title>Admission Form</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <?php
        $id = $_REQUEST["id"];
        if(isset($_POST["submit"])){
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $email = $_POST["email"];
                $faname = $_POST["faname"];
                $faocu = "";
                if(isset($_POST["faocu"])){
                    $faocu = $_POST["faocu"];
                }
                $moname = $_POST["moname"];
                $moocu = "";
                if(isset($_POST["moocu"])){
                    $moocu = $_POST["moocu"];
                }
                $addr = "";
                if(isset($_POST["add"])){
                    $addr = $_POST["add"];
                }
                $sscname = $_POST["sscname"];
                $sscgpa = $_POST["sscgpa"];
                $hscname = $_POST["hscname"];
                $hscgpa = $_POST["hscgpa"];
                $other = "";
                if(isset($_POST["other"])){
                    $other = $_POST["other"];
                }
                $othergpa = "";
                if(isset($_POST["othergpa"])){
                    $othergpa = $_POST["othergpa"];
                }
                $dd = $_POST["dd"];
                $mm = $_POST["mm"];
                $yy = $_POST["yy"];
                $gender = $_POST["gender"];
                $qry = "UPDATE personal_info SET `fname`='$fname',`lname`='$lname',`email`='$email',`faname`='$faname',`faocu`='$faocu',`moname`='$moname',`moocu`='$moocu',`addr`='$addr',`birth`='$yy-$mm-$dd',`gender`='$gender', `sscName`='$sscname', `sscGpa`=$sscgpa, `hscName`='$hscname', `hscGpa`=$hscgpa where id = $id";
                $result = mysqli_query($conn,$qry);
                 if($result){
                    echo "<script>alert('Update successfull.')</script>";
                }else{
                    echo "<script>alert('Update failed! Give proper info.')</script>";
                }
            }
        $qry = "select * from personal_info where id = $id";
        $result = mysqli_query($conn,$qry);
        $info = mysqli_fetch_assoc($result);
    ?>
    <body>  
    <div class="container">
      <form method="post">
        <div class="row">
          <h4>Personal Information</h4>
          <div class="input-group input-group-icon">
              <input id="fname" name="fname" type="text" placeholder="First Name*" value="<?php echo $info["fname"];?>"/>
            <div class="input-icon"><i class="fa fa-user"></i></div>
          </div>
          <div class="input-group input-group-icon">
            <input id="lname" name="lname" type="text" placeholder="Last Name*" value="<?php echo $info["lname"];?>"/>
            <div class="input-icon"><i class="fa fa-user"></i></div>
          </div>
          <div class="input-group input-group-icon">
            <input id="email" name="email" type="email" placeholder="Email Adress*" value="<?php echo $info["email"];?>"/>
            <div class="input-icon"><i class="fa fa-envelope"></i></div>
          </div>
          <div class="input-group input-group-icon">
                <div class="w3-twothird">
                    <input id="faname" name="faname"  type="text" placeholder="Fathers Name*" value="<?php echo $info["faname"];?>"/>
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
              <div class="w3-third">
                    <input name="faocu" type="text" placeholder="Occupation" value="<?php echo $info["faocu"];?>"/>
                </div>
          </div> 
          <div class="input-group input-group-icon">
                <div class="w3-twothird">
                    <input id="moname" name="moname" type="text" placeholder="Mothers Name*" value="<?php echo $info["moname"];?>"/>
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
              <div class="w3-third">
                    <input name="moocu" type="text" placeholder="Occupation" value="<?php echo $info["moocu"];?>"/>
                </div>
          </div>
          <div class="input-group input-group-icon">
            <input name="add" type="text" placeholder="Address" value="<?php echo $info["birth"];?>"/>
            <div class="input-icon"><i class="fa fa-user"></i></div>
          </div>
          
          <h4>Educational Information</h4>
          <div class="input-group input-group-icon">
                <div class="w3-threequarter">
                    <input id="sscname" name="sscname" type="text" placeholder="S.S.C Institute*" value="<?PHP echo $info["sscName"]?>"/>
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
              <div class="w3-quarter">
                    <input id="sscgpa" name="sscgpa" type="text" placeholder="GPA*" value="<?PHP echo $info["sscGpa"]?>"/>
                </div>
          </div>
          <div class="input-group input-group-icon">
                <div class="w3-threequarter">
                    <input id="hscname" name="hscname" type="text" placeholder="H.S.C Institute*" value="<?PHP echo $info["hscName"]?>"/>
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
              <div class="w3-quarter">
                    <input id="hscgpa" name="hscgpa" type="text" placeholder="GPA*" value="<?PHP echo $info["hscGpa"]?>"/>
                </div>
          </div>
            <div class="input-group input-group-icon">
                <div class="w3-threequarter">
                    <input name="other" type="text" placeholder="Other degree Institute"/>
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
              <div class="w3-quarter">
                    <input name="othergpa" type="text" placeholder="GPA"/>
                </div>
          </div>
        </div>
        <?php
            $date = $info["birth"];
            $arr = explode("-",$date);
        ?>
        <div class="row">
          <div class="col-half">
            <h4>Date of Birth*</h4>
            <div class="input-group">
              <div class="col-third">
                <input id="dd" name="dd" type="text" placeholder="DD" value="<?php echo $arr[2];?>"/>
              </div>
              <div class="col-third">
                <input id="mm" name="mm" type="text" placeholder="MM" value="<?php echo $arr[1];?>"/>
              </div>
              <div class="col-third">
                <input id="yy" name="yy" type="text" placeholder="YYYY" value="<?php echo $arr[0];?>"/>
              </div>
            </div>
          </div>
          <div class="col-half">
            <h4>Gender</h4>
            <div class="input-group">
              <input type="text" name="gender" value="<?php echo $info["gender"];?>" id="gender-male"/>
            </div>
          </div>
        </div>
          <div id="submit" class="input-group" onclick="validation()">
              <input name="submit" type="submit" value="update">
        </div>
        <div id="submit" class="input-group" onclick="goToForm()">
            <input name="go" type="button" value="Go To Form">
        </div>
          <script>
              function goToForm(){
                  window.location.href = "admissionFormAdmin.php";
              }
          </script>
      </form>
    </div>
    </body>
</html>