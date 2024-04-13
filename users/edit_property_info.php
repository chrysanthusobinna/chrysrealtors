<?php
include("../set.php"); 
include("../functions.php");

if(!isset($_GET["id"])) { header("location: index.php?notif_err=Invalid Account ID!"); }
$id		= $_GET["id"];
$query_account=mysqli_query($conn,"SELECT * FROM properties WHERE id=$id");
if(mysqli_num_rows($query_account)==0){ header("location: index.php?notif_err=Invalid Account ID!"); }

$query_info=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM properties WHERE id='$id'"));


  $title						=			$query_info['title'];
  $address						=			$query_info['address'];
  $price						=			$query_info['price'];
  $bedroom						=			$query_info['bedroom'];
  $bathroom						=			$query_info['bathroom'];
  $description					=			clean_output($query_info['description']);
  $refrence_no					=			$query_info['refrence_no'];
  $pic_1						=			$query_info['pic_1'];
  $pic_2						=			$query_info['pic_2'];
  $pic_3						=			$query_info['pic_3'];
  $pic_4						=			$query_info['pic_4'];
  $pic_5						=			$query_info['pic_5']; 
 
 
 


?>

<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="keywords" $conntent="Real estate, Property sale, Property buy">
	<meta name="description" $conntent="Real estate, Property sale, Property buy">

	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" $conntent="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" $conntent="width=device-width, initial-scale=1.0">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" $conntent="#0D1A1C">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" $conntent="#0D1A1C">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" $conntent="#0D1A1C">
	<title><?php echo $company_name; ?> Dashboard</title>
	<!-- Favi$conn -->
	<link rel="i$conn" type="image/png" sizes="56x56" href="../images/fav-i$conn/i$conn.png">
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
				<div class="i$conn"><img src="../images/loader.gif" alt="" class="m-auto d-block" width="64"></div>
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
					<div class="d-flex align-items-center justify-$conntent-end">
					<h4 class="m0 d-none d-lg-block">Edit Property Information</h4>
					 
			 
			 
					</div>
				</header>
				<!-- End Header -->
				<hr/>

 			   <form action="" class="form-horizontal" method="POST"  enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $id; ?>"   name="a_id">


				<div class="bg-white card-box border-20 mt-40">
				 

	
                <table class="table"> <tbody>

                            <tr>
                            <td>Title</td>
                            <td>
                            <input   type="text" name="title" value="<?php echo $title; ?>" class="form-control"></td>
                            </tr>
                                <tr>
                            <td>Address</td>
                            <td>
                            <input   type="text" name="address" value="<?php echo $address; ?>" class="form-control"></td>
                            </tr>
                
                            <tr>
                            <td>Price (<?php echo $currency; ?>)</td>
                            <td>
                            <input   type="number" name="price" value="<?php echo $price; ?>" class="form-control"></td>
                            </tr>

                     
                            <tr>
                            <td>No. Bedroom</td>
                            <td>
                            <input   type="number" name="bedroom" value="<?php echo $bedroom; ?>" class="form-control"></td>
                            </tr>

                            <tr>
                            <td>No. Bathroom</td>
                            <td>
                            <input   type="number" name="bathroom" value="<?php echo $bathroom; ?>" class="form-control"></td>
                            </tr>


                            <tr>
                            <td>Description</td>
                            <td>
                            <textarea   name="description" class="form-control"><?php echo $description; ?></textarea></td>
                            </tr>
                            



                            <tr>
                            <td>Refrence number</td>
                            <td>
                            <input   type="text" name="refrence_no" value="<?php echo $refrence_no; ?>" class="form-control"></td>
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

        $a_id						    =			$_POST["a_id"];

        $title						    =			$_POST['title'];
        $address						=			$_POST['address'];
        $price					    	=			$_POST['price'];
        $bedroom						=			$_POST['bedroom'];
        $bathroom						=			$_POST['bathroom'];
        $description					=			clean_input($_POST['description']);
        $refrence_no					=			$_POST['refrence_no'];
        
    


	mysqli_query($conn,"UPDATE properties SET 	title	 		= 	'$title',
												address		 	= 	'$address',
												price		 	= 	'$price',
												bedroom 		= 	'$bedroom',
												bathroom		= 	'$bathroom',
												description		= 	'$description',
												refrence_no		= 	'$refrence_no'   WHERE id='$a_id'");


    $custom_flash_msg = "Property Information has been added successfully Updated! ";
    setFlashMessage($custom_flash_msg, 'success'); //set error or success
    header("location: ?id=$a_id");



}

?>
 