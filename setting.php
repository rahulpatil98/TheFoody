<?php
ob_start();
session_start();
require("includes/common.php");
if (!isset($_SESSION['email'])) {
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('includes/header.php') ?>
    
  </head>
  <body>
    <!-- nav bar -->
    <?php include('includes/nav.php') ?>

    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread ">Change Password <span class="oi oi-cog"></span></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Change Password <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    		
    <section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-0">
				<div class="row d-flex no-gutters">
          <div class="col-md-6 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
          	<div class="py-md-5">
	          	<div class="heading-section ftco-animate mb-5">
		          	<span class="subheading">Change Passeord </span>
		    
		          </div>
	            <form action="setting_submit.php" method="POST">
	              <div class="row">
				    <div class="col-md-12 ">
	                  <div class="form-group">
                        <?php 
                        if( isset($_SESSION['Error']) )
                        {
                        ?>
                   
                        <span class="alert alert-danger alert-dismissible fade show " role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <?php
                          echo $_SESSION['Error'];
                          unset($_SESSION['Error']);
                        ?>
                        </span>
                        <?php }
                        ?>
	                  </div>
                      <div class="form-group">
                        <?php 
                        if( isset($_SESSION['Error1']) )
                        {
                        ?>
                   
                        <span class="alert alert-success alert-dismissible fade show " role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <?php
                          echo $_SESSION['Error1'];
                          unset($_SESSION['Error1']);
                        ?>
                        </span>
                        <?php }
                        ?>
	                  </div>
	                </div>
	                <div class="col-md-8">
	                  <div class="form-group">
                        <label for="old_password">Old Password</label>
                        <input type="password" class="form-control" name="old_password" pattern=".{6,}" placeholder="Old Password" required>
	                  </div>
	                </div>
	                <div class="col-md-8">
	                  <div class="form-group">
                        <label for="new_password">New Password</label>
                        <input type="password" class="form-control" name="new_password"  pattern=".{6,}" placeholder="New Password" required>
	                  </div>
	                </div>
	                <div class="col-md-8">
	                  <div class="form-group">
                        <label for="repnew_password">Confirm Password</label>
                        <input type="password" class="form-control" name="repnew_password" pattern=".{6,}" placeholder="Re-type New Password" required>
	                  </div>
	                </div>
	               
	                <div class="col-md-12 mt-3">
	                  <div class="form-group">
	                    <input type="submit" value="Change Password" class="btn btn-primary py-3 px-5">
	                  </div>
	                </div>
                  </div>
                 
	            </form>
	          </div>
            </div>
                <div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0 ftco-section ftco-wrap-about">
                    <div class="col-md-12 d-flex">
					    <div class="img img-1 mr-md-2" style="background-image: url(images/image_4.jpg);"></div>
					</div>
			    </div>
           </div>
		</div>
    </section>
    
    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-12 text-center heading-section ftco-animate">
          	            <span class="subheading">Timing</span>
                        <h2 class="mb-4">Booking Services</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						<pc class="time">
							<span>Mon - Fri <strong>8 AM - 11 PM</strong></span>
							<span><a href="#">+ 1-978-123-4567</a></span>
						</p>
                    </div>
                </div>
            </div>
    </section>        
    

         
    <!-- Footer -->
    <?php include("includes/footer.php") ?>

     <!-- footer end --> 
    <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  <?php include("includes/script.php") ?>
  
    </body>
  </html>
