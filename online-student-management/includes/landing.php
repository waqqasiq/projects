<?php
if(isset($_SESSION['uid'])==TRUE){
        echo "<script>window.location='dashtry.php?stdid=".$_SESSION['uid']."'</script>";
        exit();
    }
    else if(isset($_SESSION['adminMail'])==TRUE){
    	echo "<script>window.location='admin-page.php'</script>";
    	exit();
    }
include_once ('database.php');
?>
<div class="slider_bg"><!-- start slider -->
    <div class="container" style="color: whitesmoke">
		<div id="da-slider" class="da-slider text-center">
                    <?php if(isset($_SESSION['uid']) === false) {?>
			<div class="da-slide">
				<h2 style="color: whitesmoke;">Log In</h2>
                                <h3 class="da-link"><a href="includes/login2.php" class="fa-btn btn-1 btn-1e" style="color: whitesmoke;">Go there</a></h3>
			</div>
                    <?php }else if(isset($_SESSION['uid']) === true){ ?>
			<div class="da-slide">
				<h2 style="color: whitesmoke;">Logout</h2>
                                <h3 class="da-link"><a href="includes/logout.php" class="fa-btn btn-1 btn-1e" style="color: whitesmoke;">Go there</a></h3>
			</div>
                    <?php } ?>
			<div class="da-slide">
				<h2 style="color: whitesmoke;">Admission</h2>

                                <h3 class="da-link"><a href="../admissions2.php" class="fa-btn btn-1 btn-1e" style="color: whitesmoke;">Go there</a></h3>
			</div>
			<div class="da-slide">
				<h2 style="color: whitesmoke;">Log In</h2>

				<h3 class="da-link"><a href="includes/login2.php" class="fa-btn btn-1 btn-1e" style="color: whitesmoke;">Go there</a></h3>
			</div>
			<div class="da-slide">
				<h2 style="color: whitesmoke;">Admission</h2>

				<h3 class="da-link"><a href="admissions2.php" class="fa-btn btn-1 btn-1e" style="color: whitesmoke;">Go there</a></h3>
			</div>
		</div>
	</div>
</div><!-- end slider -->

<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="main row">
			<div class="col-md-3 images_1_of_4 text-center">
                            <?php if(isset($_SESSION['admin'])===false && isset($_SESSION['uid']) === false) {?>
                            <a href="includes/login2.php"><span class="bg"><i class="fa fa-globe"></i></span></a>
				<h4><a href="includes/login2.php">Log In</a></h4>
				<p class="para">You can log in here and get access to see you routine, results and other stuffs</p>
                            <?php }else if(isset($_SESSION['admin'])===true){ ?>
                                <a href="includes/logout.php"><span class="bg"><i class="fa fa-globe"></i></span></a>
				<h4><a href="includes/logout.php">Logout</a></h4>
				<p class="para">You can log in here and get access to see you routine, results and other stuffs</p>
                            <?php }else if(isset($_SESSION['uid'])===true){ ?>
                                <a href="includes/logout.php"><span class="bg"><i class="fa fa-globe"></i></span></a>
				<h4><a href="includes/logout.php">Logout</a></h4>
				<p class="para">You can log in here and get access to see you routine, results and other stuffs</p>				
                            <?php } ?>
			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center">
                                <a href="admissions2.php"><span class="bg"><i class="fa fa-laptop"></i></span></a>
				<h4><a href="admissions2.php">Admission</a></h4>
				<p class="para">Learn about our admission system and be a part of us</p>

			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center">
                                <a href="includes/notice-all.php"><span class="bg"><i class="fa fa-cog"></i></span></a>
				<h4><a href="includes/notice-all.php">Notice</a></h4>
				<p class="para">Do not miss what is important for you </p>

			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center">
                                <a href="includes/aboutus.php"><span class="bg"><i class="fa fa-shield"></i> </span></a>
				<h4><a href="includes/aboutus.php">About Us</a></h4>
				<p class="para">See who we are and what we do</p>

			</div>
		</div>
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->
	<div class="container">

		<!----start-img-cursual---->
		<div id="owl-demo" class="owl-carousel text-center">
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-3</a></h4>
					<p>
						Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-2</a></h4>
					<p>
						Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-2</a></h4>
					<p>
						Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-1</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-4</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-3</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-2</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-1</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-4</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-3</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-1</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-2</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
		</div>
		<!----//End-img-cursual---->
	</div>
</div>

