<?php
include("../set.php"); 
include("../functions.php");

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
					<h4 class="m0 d-none d-lg-block">Add New Property</h4>
					 
			 
			 
					</div>
				</header>
				<!-- End Header -->
				<hr/>

				<h2 class="main-title d-block d-lg-none">Add New Property</h2>
 			   <form action="" class="form-horizontal" method="POST"  enctype="multipart/form-data">


				<div class="bg-white card-box border-20 mt-40">
				 

					
					<table class="table"> <tbody>

							<tr>
							<td>Title</td>
							<td>
							<input   type="text" name="title"  class="form-control"></td>
							</tr>
								<tr>
							<td>Address</td>
							<td>
							<input   type="text" name="address"  class="form-control"></td>
							</tr>
							 
							<tr>
                            <td>Price (<?php echo $currency; ?>)</td>
							<td>
							<input   type="number" name="price"  class="form-control"></td>
							</tr>							

							<tr>
							<td>No. Bedroom</td>
							<td>
							<input   type="number" name="bedroom"   class="form-control"></td>
							</tr>

							<tr>
							<td>No. Bathroom</td>
							<td>
							<input   type="number" name="bathroom"  class="form-control"></td>
							</tr>



							<tr>
							<td>Description</td>
							<td>
							<textarea   name="description" class="form-control"></textarea></td>
							</tr>
							



							
							</tbody> </table>




				</div>
				<!-- /.card-box -->

			 
				<!-- /.card-box -->
				<div class="button-group d-inline-flex align-items-center mt-30">
				<button  type="submit" name="submit" class="dash-btn-two tran3s me-3">Submit</button> &nbsp; 
					<a href="index.php" class="dash-btn-one tran3s me-3">Cancel</a>
				</div>		
			</form>		
			</div>
		</div>
		<!-- /.dashboard-body -->
 


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

if(isset($_POST["submit"]))
{


  $title						=			$_POST['title'];
  $address						=			$_POST['address'];
  $price						=			$_POST['price'];
  $bedroom						=			$_POST['bedroom'];
  $bathroom						=			$_POST['bathroom'];
  $description					=			clean_input($_POST['description']);
  $refrence_no					=			rand(10000000,90000000);
 
 
 
  $pic_1						=			"NULL";
  $pic_2						=			"NULL";
  $pic_3						=			"NULL";
  $pic_4						=			"NULL";
  $pic_5						=			"NULL";


	mysqli_query($conn,"INSERT INTO properties SET 	title	 		= 	'$title',
													address		 	= 	'$logged_user_id',
													user_id		 	= 	'$address',
													price		 	= 	'$price',
													bedroom 		= 	'$bedroom',
													bathroom		= 	'$bathroom',
													description		= 	'$description',
													refrence_no		= 	'$refrence_no',
													pic_1			= 	'$pic_1',
													pic_2			= 	'$pic_2',
													pic_3			= 	'$pic_3',
													pic_4			= 	'$pic_4',
													pic_5			= 	'$pic_5'");


	$last_entry_id					 =			 mysqli_insert_id($conn);

		 
	$custom_flash_msg = "New Property has been added successfully! Upload Property Photos";
	setFlashMessage($custom_flash_msg, 'success'); //set error or success
	header("location: upload_property_photos.php?id=$last_entry_id");


}

?>