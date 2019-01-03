<?php
    include 'database.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="../css/admissionFormStyle.css" type="text/css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="js/admissionFormScript.js"></script>
        <title>Admission Form</title>
    </head>
    <?php
    $mailOf = null;
    $signInf = null;
    $name = null;
    if(isset($_REQUEST["stdMail"])){
        $mailOf = $_REQUEST["stdMail"];
        $qryOf = "select * from a where email = '$mailOf'";
        $resultOf = mysqli_query($conn,$qryOf);
        $signInfo = mysqli_fetch_assoc($resultOf);
        $name = explode(" ",$signInfo["name"]);
    }
    
    
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $qry2 = "select * from personal_info where email = '$email'";
        $resultVeri = mysqli_query($conn,$qry2);
        $resultVeriArr = mysqli_fetch_assoc($resultVeri);
            if($resultVeriArr){
                echo "<script>alert('This email is already registered!! ')</script>";
            }else{
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
                if(isset($_POST["mgender"])){
                    $gender = $_POST["mgender"];
                }else if($_POST["fgender"]){
                    $gender = $_POST["fgender"];
                }
                $idOf = $signInfo["id"];
                $qry = "INSERT INTO personal_info (`id`, `fname`, `lname`, `email`, `faname`, `faocu`, `moname`, `moocu`, `addr`, `birth`, `gender`, `sscName`, `sscGpa`, `hscName`, `hscGpa`) VALUES ($idOf,'$fname','$lname','$email','$faname','$faocu','$moname','$moocu','$addr','$yy-$mm-$dd','$gender','$sscname',$sscgpa,'$hscname',$hscgpa)";
                $result = mysqli_query($conn,$qry);
                 if($result){
                    echo "<script>alert('Register successfull.')</script>";
                    echo "<script> window.location.href='../index.php'</script>";
                }else{
                    echo "<script>alert('Registration failed! Give proper info.')</script>";
                }
            }
    }
    ?>
    <body>  
    <div class="container">
      <form method="post">
        <div class="row">
          <h4>Personal Information</h4>
          <div class="input-group input-group-icon">
              <input id="fname" name="fname" type="text" value="<?php echo $name[0]?>" placeholder="<?php echo $name[0]?>"/>
            <div class="input-icon"><i class="fa fa-user"></i></div>
          </div>
          <div class="input-group input-group-icon">
            <input id="lname" name="lname" type="text" value="<?php echo $name[1]?>" placeholder="<?php echo $name[0]?>"/>
            <div class="input-icon"><i class="fa fa-user"></i></div>
          </div>
          <div class="input-group input-group-icon">
            <input id="email" name="email" type="email" value="<?php echo $mailOf?>" placeholder="<?php echo $mailOf?>"/>
            <div class="input-icon"><i class="fa fa-envelope"></i></div>
          </div>
          <div class="input-group input-group-icon">
                <div class="w3-twothird">
                    <input id="faname" name="faname"  type="text" placeholder="Fathers Name*"/>
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
              <div class="w3-third">
                    <input name="faocu" type="text" placeholder="Occupation"/>
                </div>
          </div> 
          <div class="input-group input-group-icon">
                <div class="w3-twothird">
                    <input id="moname" name="moname" type="text" placeholder="Mothers Name*"/>
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
              <div class="w3-third">
                    <input name="moocu" type="text" placeholder="Occupation"/>
                </div>
          </div>
          <div class="input-group input-group-icon">
            <input name="add" type="text" placeholder="Address"/>
            <div class="input-icon"><i class="fa fa-user"></i></div>
          </div>
          
          <h4>Educational Information</h4>
          <div class="input-group input-group-icon">
                <div class="w3-threequarter">
                    <input id="sscname" name="sscname" type="text" placeholder="S.S.C Institute*"/>
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
              <div class="w3-quarter">
                    <input id="sscgpa" name="sscgpa" type="text" placeholder="GPA*"/>
                </div>
          </div>
          <div class="input-group input-group-icon">
                <div class="w3-threequarter">
                    <input id="hscname" name="hscname" type="text" placeholder="H.S.C Institute*"/>
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
              <div class="w3-quarter">
                    <input id="hscgpa" name="hscgpa" type="text" placeholder="GPA*"/>
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
        <div class="row">
          <div class="col-half">
            <h4>Date of Birth*</h4>
            <div class="input-group">
              <div class="col-third">
                <input id="dd" name="dd" type="text" placeholder="DD"/>
              </div>
              <div class="col-third">
                <input id="mm" name="mm" type="text" placeholder="MM"/>
              </div>
              <div class="col-third">
                <input id="yy" name="yy" type="text" placeholder="YYYY"/>
              </div>
            </div>
          </div>
          <div class="col-half">
            <h4>Gender</h4>
            <div class="input-group">
              <input type="radio" name="mgender" value="male" id="gender-male"/>
              <label for="gender-male">Male</label>
              <input type="radio" name="fgender" value="female" id="gender-female"/>
              <label for="gender-female">Female</label>
            </div>
          </div>
        </div>
          <div id="submit" class="input-group" onclick="validation()">
            <input name="submit" type="submit" >
        </div>
      </form>
    </div>
    </body>
</html>
