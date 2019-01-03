<?php
include_once ('database.php');

            $qry = "select dept_name, dept_loc from department";
            $result = mysqli_query($conn,$qry);
        

?>
<script>
            function goto(){
                alert("You need to signup first!!!");
                window.location.href='includes/login2.php';
            }
        </script>
<!-- <div class="slider_bg"><!-- start slider 
    <div class="container" style="color: whitesmoke">
		<div id="da-slider" class="da-slider text-center">
                    <?php if(isset($_SESSION['uid']) === false) {?>
			<div class="da-slide">
				<h2 style="color: black;">Log In</h2>
                                <h3 class="da-link"><a href="includes/login2.php" class="fa-btn btn-1 btn-1e" style="color: black;">Go there</a></h3>
			</div>
                    <?php }else if(isset($_SESSION['uid']) === true){ ?>
			<div class="da-slide">
				<h2 style="color: white;">Logout</h2>
                                <h3 class="da-link"><a href="includes/logout.php" class="fa-btn btn-1 btn-1e" style="color: black;">Go there</a></h3>
			</div>
                    <?php } ?>
			<div class="da-slide">
				<h2 style="color: black;">Admission</h2>

                                <h3 class="da-link"><a href="includes/admission.php" class="fa-btn btn-1 btn-1e" style="color: black;">Go there</a></h3>
			</div>
			<div class="da-slide">
				<h2 style="color: black;">Log In</h2>

				<h3 class="da-link"><a href="includes/login2.php" class="fa-btn btn-1 btn-1e" style="color: black;">Go there</a></h3>
			</div>
			<div class="da-slide">
				<h2 style="color: black;">Admission</h2>

				<h3 class="da-link"><a href="includes/admission.php" class="fa-btn btn-1 btn-1e" style="color: black;">Go there</a></h3>
			</div>
		</div>
	</div>
</div> end slider --> 
<style>

 .description{
 	padding:30px !important;
 	font-size:20px;
 }
</style>
<body>
<div class="main_bg"  ><!-- start main -->
	<div class="container">
		<div class="containerTemp" style="max-width: 100%; ">
            
            <hr class="hr">
            <div class="description">
                <p>International Institute of Emerging Sciences is one of the top university of Bangladesh. We offer top quality educational facilities. We have qualified faculties and they are 
                at all time available to students for any of their query. </p>
            </div>
            <div><h3 style="text-align: center">Courses that we offer</h3></div>
            <div id="owl-demo" class="owl-carousel text-center">
                <?php
                    while ($dept = mysqli_fetch_assoc($result)){
                ?>
                <div class="item" id="insideCourse" style="background-color: #f4f4f4">
                            <div class="cau_left">
                                <?php
                                    echo "<h4><a href='includes/info2.php'>".$dept["dept_name"]."</a></h4>";
                                    echo "<p>Department Location ".$dept["dept_loc"]."</p>";
                                ?>
                            </div>
                    </div>
                <?php
                    }
                ?>	
            </div>

            
            <div class="underGrad"  >
                <hr class="hr">
                <header ><h1 style="text-align: center; margin-top: 15px;">Undergraduate Admission</h1></header>
                <div class="row" >
                	<div class="col-sm-6" style="background: #f4f4f4;  ">
                		<div class="inside" style=" font-size: 15px; ">
                		<img src="css/images/xm.jpg" id="xm_img" style="width:100%; ">
                        </div>
                    </div>
                    <div class="col-sm-6" style="background: #f4f4f4;  text-align:center ">
                        <div class="inside" style=" font-size: 15px;">
                            <h3>Admission</h3>
                            <p style="padding:10px">
                                <br>We offer on of the most recognized and reputed undergraduate degree in various subjects. A freshman class of about 1,700 students 
                                and a transfer class of about 30 students are admitted each year. IIES reviews each applicant with an eye to academic excellence, 
                                intellectual vitality and personal context.
                            </p>
                        <div>
                            <span class="admisFake" onclick="show('admisU')" style="color: #694749">Undergraduate Admission <i class="fa fa-angle-double-right"></i></span>
                        </div>
                        <div class="list-group col-sm-4" id="admisU" style="display: none; margin-top: 3px">
                            <a href="includes/info2.php" class="list-group-item" style="color: #694749">Info</a>
                            <?php if(isset($_SESSION['uid']) === false){?>
                                <a onclick="goto()" class="list-group-item" style="color: #694749">Apply for exam</a>
                            <?php
                            
                            }else{}?>
                        </div>
                        </div>
                    </div>
                    


                    </div>
                </div>


                <div class="postGrad"  >
                <hr class="hr">
                <header ><h1 style="text-align: center; margin-top: 10px; margin-bottom:20px">Postgraduate Admission</h1></header>
                <div class="row" >
                	
                    <div class="col-sm-6" style="background: #f4f4f4; text-align:center; margin-bottom:20px">
                        <div class="inside" style="font-size: 15px;">
                            <h3>Admission</h3>
                            <p style="padding:10px">
                                <br>More than 65 departments and programs offer graduate and professional degrees at IIES. Admission requirements vary 
                                    greatly among them. We offer on of the most recognized and reputed postgraduate degree in various subjects.
                            </p>
                             <div> <span class="admisFake" onclick="show('admisP')" style="color: #694749">Postgraduate Admission <i class="fa fa-angle-double-right"></i></span> </div>
                        <div class="list-group col-sm-4" id="admisP" style="display: none; margin-top: 3px">
                                      <a href="includes/info2.php" class="list-group-item" style="color: #694749">Info</a>
                                      <?php if(isset($_SESSION['uid']) === false){?>
                                      <a onclick="goto()" class="list-group-item" style="color: #694749">Apply for exam</a>
                                      <?php
                                      }else{
                                          
                                      }
                                      ?>
                                    </div>
                       
                        </div>
                        
                           <!-- <h3>Admission</h3>
                            <p style="padding-right: 25%;">
                                <br>We offer on of the most recognized and reputed undergraduate degree in various subjects. A freshman class of about 1,700 students 
                                and a transfer class of about 30 students are admitted each year. Stanford reviews each applicant with an eye to academic excellence, 
                                intellectual vitality and personal context.
                            </p> 
                        <div>
                            <span class="admisFake" onclick="show('admisU')" style="color: #694749"> <i class="fa fa-angle-double-right"></i></span>
                        </div> 
                        <div class="list-group col-sm-4" id="admisU" style="display: none; margin-top: 3px">
                            <a href="info2.php" class="list-group-item" style="color: #694749">Info</a>
                            <?php if(isset($_SESSION['uid']) === false){?>
                                <a onclick="goto()" class="list-group-item" style="color: #694749">Apply for exam</a>
                            <?php
                            
                            }else{}?>
                        </div> -->
                        </div>
                        
                        <div class="col-sm-6" style="background: #f4f4f4;">

                        		<div class="inside" style="font-size: 15px; ">
                            <img src="css/images/xm_2.jpg" id="xm_img" style="width:100%" >
                        </div>
                         
                        
                        </div>

                    

                    </div>
                    </div>
                    

                    
                    </div>
                </div>




            </div>
            
            <div class="finance_aid" style="height: 150%;">
                <hr class="hr">
                <h2 style="text-align: center;padding: 2%;">Financial aids</h2>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="card">
                        <div class="card-block" style="background-color: #f4f4f4;">
                          <h3 class="card-title" style="text-align: center">Upto 100%</h3>
                        <p class="card-text" style="text-align: center; font-size: 15px">We offer different scholarship program for those who are financially challenged. We offer scholarship for 
                            those whose parents earn less then &dollar;3000</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card">
                        <div class="card-block" style="background-color: #f4f4f4;">
                          <h3 class="card-title" style="text-align: center">Full Free</h3>
                        <p class="card-text" style="text-align: center; font-size: 15px">Those who have the potential and the passion to pursue higher education but can not afford the 
                        expenses of university fee wee offer full free scholarship.</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        
	<!-- end main -->

</body>
		<!----//End-img-cursual---->
	</div>
</div>

