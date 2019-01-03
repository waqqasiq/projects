<?php
    include_once 'database.php';
    include_once 'dashHead.php';
    
    $stdId = $_REQUEST["stdid"];
    $id = $stdId;
    $qry = "select * from personal_info where id=$stdId";
    $result = mysqli_query($conn,$qry);
    $subject = mysqli_fetch_assoc($result)
    
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/header.css">
        <title>Info of SM University</title>
        <style>
            #nList{
                margin-bottom: 7px;
                color: black;
                font-size: 15px;
            }
        </style>
    </head>
    <body>
        <?php include_once 'sidebar.php';?>
        <div class="area" style="padding: 4%;">
            <div class="list-group" style="background-color: #f4f4f4;">
                <a href="#" id="nList" class="list-group-item list-group-item-action flex-column align-items-start col-sm-12">
                  <div class="d-flex w-100 justify-content-between">
                    <label class="mb-1">Your Student ID is: </label>
                  </div>
                  <p class="mb-1"><?php echo $subject["id"]?></p>
                </a>
            </div>
            <div class="list-group">
                <a href="#" id="nList" class="list-group-item list-group-item-action flex-column align-items-start col-sm-12">
                  <div class="d-flex w-100 justify-content-between">
                    <label class="mb-1">First Name is: </label>
                  </div>
                  <p class="mb-1"><?php echo $subject["fname"]?></p>
                </a>
            </div>
            <div class="list-group">
                <a href="#" id="nList" class="list-group-item list-group-item-action flex-column align-items-start col-sm-12">
                  <div class="d-flex w-100 justify-content-between">
                    <label class="mb-1">Last Name is: </label>
                  </div>
                  <p class="mb-1"><?php echo $subject["lname"]?></p>
                </a>
            </div>
            <div class="list-group">
                <a href="#" id="nList" class="list-group-item list-group-item-action flex-column align-items-start col-sm-6">
                  <div class="d-flex w-100 justify-content-between">
                    <label class="mb-1">Father's Name is: </label>
                  </div>
                  <p class="mb-1"><?php echo $subject["faname"]?></p>
                </a>
            </div>
            <div class="list-group">
                <a href="#" id="nList" class="list-group-item list-group-item-action flex-column align-items-start col-sm-6">
                  <div class="d-flex w-100 justify-content-between">
                    <label class="mb-1">Father's Occupation ID is: </label>
                  </div>
                  <p class="mb-1"><?php echo $subject["faocu"]?></p>
                </a>
            </div>
            <div class="list-group">
                <a href="#" id="nList" class="list-group-item list-group-item-action flex-column align-items-start col-sm-6">
                  <div class="d-flex w-100 justify-content-between">
                    <label class="mb-1">Mother's Name is: </label>
                  </div>
                  <p class="mb-1"><?php echo $subject["moname"]?></p>
                </a>
            </div>
            <div class="list-group">
                <a href="#" id="nList" class="list-group-item list-group-item-action flex-column align-items-start col-sm-6">
                  <div class="d-flex w-100 justify-content-between">
                    <label class="mb-1">Mother's Occupation ID is: </label>
                  </div>
                  <p class="mb-1"><?php echo $subject["moocu"]?></p>
                </a>
            </div>
            <div class="list-group">
                <a href="#" id="nList" class="list-group-item list-group-item-action flex-column align-items-start col-sm-12">
                  <div class="d-flex w-100 justify-content-between">
                    <label class="mb-1">Date of Birth: </label>
                  </div>
                  <p class="mb-1"><?php echo $subject["birth"]?></p>
                </a>
            </div>
            <div class="list-group">
                <a href="#" id="nList" class="list-group-item list-group-item-action flex-column align-items-start col-sm-6">
                  <div class="d-flex w-100 justify-content-between">
                    <label class="mb-1">SSC institute and GPA : </label>
                  </div>
                  <p class="mb-1"><?php echo "Institute: ".$subject["sscName"]?></p>
                  <p class="mb-1"><?php echo "GPA: ".$subject["sscGpa"]?></p>
                </a>
            </div>
            <div class="list-group">
                <a href="#" id="nList" class="list-group-item list-group-item-action flex-column align-items-start col-sm-6">
                  <div class="d-flex w-100 justify-content-between">
                    <label class="mb-1">HSC institute and GPA: </label>
                  </div>
                  <p class="mb-1"><?php echo "Institute: ".$subject["hscName"]?></p>
                  <p class="mb-1"><?php echo "GPA: ".$subject["hscGpa"]?></p>
                </a>
            </div>
        </div>
    </body>
    
</html>

