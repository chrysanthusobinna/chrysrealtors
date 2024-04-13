<?php
include("../set.php"); 
include("../functions.php");
include("user_inc.php");


?>


<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Real estate, Property sale, Property buy">
	<meta name="description" content="Real estate, Property sale, Property buy">

	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#0D1A1C">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#0D1A1C">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#0D1A1C">
	<title><?php echo $company_name; ?> Dashboard</title>
	<!-- Favicon -->
	  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" >
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-css/bootstrap.min.css" media="all">
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="../css/style.min.css" media="all">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="../css/responsive.css" media="all">

	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="../css/fontawesome-free/css/all.min.css">


	<!-- Fix Internet Explorer ______________________________________-->
	<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
</head>

<body>
	<div class="main-page-wrapper">
		<!-- ===================================================
			Loading Transition
		==================================================== -->
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="icon"><img src="../images/loader.gif" alt="" class="m-auto d-block" width="64"></div>
			</div>
		</div>

		<!-- 
		=============================================
			Dashboard Aside Menu
		============================================== 
		-->
		<?php include("side_bar.php"); ?>

		<!-- /.dash-aside-navbar -->

		<!-- 
		=============================================
			Dashboard Body
		============================================== 
		-->
		<div class="dashboard-body">
			<div class="position-relative">
	
				<!-- ************************ Header **************************** -->
				<header class="dashboard-header">
					<div class="d-flex align-items-center justify-content-end">
					<h4 class="m0 d-none d-lg-block">Edit Profile</h4>
					 
			 
			 
					</div>
				</header>
				<!-- End Header -->			
				<?php 
  		 
		   if(	(isset($_GET['UpdateProfileErrorMsg'])) && ( !empty($_SESSION["password_Error"]))  ){ ?>

				   
				   <br/>
				   <div class="alert alert-warning" role="alert">
					   <?php
					   echo $_SESSION["password_Error"];
			   
			   ?>
				   </div>
				   <br/>
				   <?php 		$_SESSION["password_Error"] =	"";  } ?>
				   
				   

		   <?php include("notification.php"); ?>




				<div class="bg-white card-box border-20">
					<form action="" method="POST">
 
				
				<table class="table"> <tbody>

						<tr>
						<td>Old Password</td>
						<td>
						<input class="form-control"   name="old_password"  type="password" placeholder="Old Password" required></td>
						</tr>
							<tr>
						<td>New Password</td>
						<td>
						<input class="form-control"   name="new_password"  type="password" placeholder="New Password" required></td>
						</tr>
							<tr>
						<td>Re-type Password</td>
						<td>
						<input class="form-control"   name="confirm_password"  type="password" placeholder="Re-type Password" required></td>
						</tr>


						</tbody> </table>
						

						<button type="submit" name="submit"  class="btn btn-primary">SUBMIT</button>
                   <button type="button" onclick="window.location='manage_user_profile.php'" class="btn btn-danger float-right">BACK TO PROFILE</button>
		   </form>

                </div>
				<!-- /.card-box -->				
			</div>
		</div>
		<!-- /.dashboard-body -->


		<!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen modal-dialog-centered">
                <div class="container">
                    <div class="remove-account-popup text-center modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<img src="https://html.creativegigstf.com/homy/homy/images/lazy.svg" data-src="images/icon/icon_22.svg" alt="" class="lazy-img m-auto">
						<h2>Are you sure?</h2>
						<p>Are you sure to delete your account? All data will be lost.</p>
						<div class="button-group d-inline-flex justify-content-center align-items-center pt-15">
							<a href="#" class="confirm-btn fw-500 tran3s me-3">Yes</a>
							<button type="button" class="btn-close fw-500 ms-3" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
						</div>
                    </div>
                    <!-- /.remove-account-popup -->
                </div>
            </div>
        </div>
		


		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>




		<!-- Optional JavaScript _____________________________  -->

		<!-- jQuery first, then Bootstrap JS -->
		<!-- jQuery -->
		<script src="../vendor/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- WOW js -->
		<script src="../vendor/wow/wow.min.js"></script>
		<!-- Slick Slider -->
		<script src="../vendor/slick/slick.min.js"></script>
		<!-- Fancybox -->
		<script src="../vendor/fancybox/fancybox.umd.js"></script>
		<!-- Lazy -->
		<script src="../vendor/jquery.lazy.min.js"></script>
		<!-- js Counter -->
		<script src="../vendor/jquery.counterup.min.js"></script>
		<script src="../vendor/jquery.waypoints.min.js"></script>
		<!-- Nice Select -->
		<script src="../vendor/nice-select/jquery.nice-select.min.js"></script>
		<!-- validator js -->
		<script src="../vendor/validator.js"></script>

		<!-- Theme js -->
		<script src="../js/theme.js"></script>
	</div> <!-- /.main-page-wrapper -->
</body>


</html>





<?php

if(isset($_POST["submit"])){

$old_password			=			$_POST["old_password"];
$new_password			=			$_POST["new_password"];
$confirm_password		=			$_POST["confirm_password"];



		//VALIDATE password
		$_SESSION["password_Error"]					 		 =	""; 
		
        if(empty($new_password))
        {
 			$_SESSION["password_Error"]						.=	"&#183; Password is required <br/>";		
        }
		
		if($new_password != $confirm_password)
		{
			$_SESSION["password_Error"]						.=	"&#183; Password Confirmation does not match <br/>";		
		}
		
		if(strlen($new_password) < 8)
		{
			$_SESSION["password_Error"]						.=	"&#183; Password must be more than 8 characters in length <br/>";		
		}
		
		if(!password_verify($old_password, $logged_user_password))
		{
			$_SESSION["password_Error"]						.=	"&#183; Old Password is incorrect<br/>";		

		}				


	

		 
			if(	!empty($_SESSION["password_Error"])	)
				{
					header("location: ?UpdateProfileErrorMsg=true");
				}
				else
				{
 				$password 									= 	password_hash($new_password, PASSWORD_DEFAULT);

				mysqli_query($conn,"UPDATE users	 SET 			password				=		'$password' WHERE email_address = '$_SESSION[user]'") or die(mysqli_error($con));
				
				unset($_SESSION["password_Error"]); 
				
																		
				$custom_flash_msg = "Password Changed!";
				setFlashMessage($custom_flash_msg, 'success'); //set error or success
                header("location: ?");
																			
				}



 
}


?>


