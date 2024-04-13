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
					<h4 class="m0 d-none d-lg-block">My Profile</h4>
					 
			 
			 
					</div>
				</header>
				<!-- End Header -->			

				<?php 
  		 
		   if(	(isset($_GET['UpdateProfileErrorMsg'])) &&
			   (
			   !empty($_SESSION["first_name_Error"]) || 
			   !empty($_SESSION["last_name_Error"]) || 
			   !empty($_SESSION["phone_number_Error"]) || 
			   !empty($_SESSION["address_Error"]) 
			   ) 
			   ){ ?>

				   
				   <br/>
				   <div class="alert alert-warning" role="alert">
					   <?php
					   echo $_SESSION["first_name_Error"] . $_SESSION["last_name_Error"] . $_SESSION["phone_number_Error"] . $_SESSION["address_Error"];
					   ?>
				   </div>
				   <br/>
				   <?php } ?>

				   <?php include("notification.php"); ?>



				   <div class="bg-white card-box border-20">
					<h4>Change Profile Photo</h4>
					<hr/>
 
						<div class="row">
						<div class="col-md-6">
		
								<form  enctype='multipart/form-data' action="" method="POST" class="form-horizontal">
							<div class="form-group row">
								<label for="inputName" class="col-sm-2 col-form-label">Choose Photo</label>
								<div class="col-sm-10">
								<input type="file" class="form-control"   name="profile_picture" accept="image/*" onchange="showSelectedImg(this);"   >
								</div>
							</div>


							<div class="offset-sm-2 col-sm-10">
								<button type="submit" name="change_profile" class="btn btn-primary btn-block">Save</button>
								</div>
						
							</form>
							
						</div>
						<div class="col-md-6">

						<img style="width:200px;" id="profile_picture_img" class="img-fluid img-circle" src="../uploads/<?php echo $profile_picture; ?>" alt="User profile picture">

						</div>
					</div>

				   

 

	  			 </div>
				 <br/>





				<div class="bg-white card-box border-20">
				<h4>Edit Profile</h4>
					<hr/>
				

				<form  action="" method="POST" class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="<?php echo $first_name; ?>"  name="first_name" placeholder="Full Name" required>
                        </div>
                      </div>
					  
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="<?php echo $last_name; ?>"  name="last_name" placeholder="Last Name" required>
                        </div>
                      </div>

					  
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  value="<?php echo $phone_number; ?>"  name="phone_number"  placeholder="Phone Number" required>
                        </div>
                      </div>
					  
					  
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  value="<?php echo $address; ?>"  name="address"  placeholder="Whatsapp Contact" required>
                        </div>
                      </div>
					  					  
					  
                       <div class="offset-sm-2 col-sm-10">
                          <button type="submit" name="submit" class="btn btn-primary">Save</button>
                          <button type="button" onclick="javascript: history.go(-1);" class="btn btn-danger">Back</button>
                        </div>

						</form>

                      </div>

                </div>
				<!-- /.card-box -->				
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


		<script>

		function showSelectedImg(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
			$('#profile_picture_img').attr('src', e.target.result).width(150).height(200);
			};

			reader.readAsDataURL(input.files[0]);
		}
		}


		</script>



	</div> <!-- /.main-page-wrapper -->
</body>


</html>


<?php

if(isset($_POST["submit"])){

		$first_name								=			$_POST["first_name"];
		$last_name								=			$_POST["last_name"];
		$phone_number							=			$_POST["phone_number"];
		$address								=			$_POST["address"];
 



  
		$_SESSION["first_name"]					=			clean_input(ucwords($_POST['first_name']));
		$_SESSION["last_name"]					=			clean_input(ucwords($_POST['last_name']));
		$_SESSION["phone_number"]				=			clean_input($_POST['phone_number']);
		$_SESSION["address"]					=			clean_input($_POST['address']);

 
  

		//VALIDATE first_name
		$_SESSION["first_name_Error"]						 =	"";
		
        if(empty($first_name))
        {
 			$_SESSION["first_name_Error"]					.=	"&#183; First Name is required <br/>";		
        }
		
		if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
			$_SESSION["first_name_Error"]					.=	"&#183; Only letters and white space allowed for First Name <br/>";
		}		

		//VALIDATE last_name
		$_SESSION["last_name_Error"]						 =	""; 
		 
        if(empty($last_name))
        {
 			$_SESSION["last_name_Error"]					.=	 "&#183; Last Name is required <br/>";		
        }
		
		if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
			$_SESSION["last_name_Error"]					.=	"&#183; Only letters and white space allowed for Last Name <br/>";
		}

		//VALIDATE phone_number
		$_SESSION["phone_number_Error"]						 =	"";

        if(empty($phone_number))
        {
 			$_SESSION["phone_number_Error"]					.=	"&#183; Phone Number is required <br/>";		
        }		
		
		if (!preg_match('/^\+?[0-9]{7,15}$/', $phone_number)) {
			$_SESSION["phone_number_Error"]					.=	"&#183; You have entered an Invalid Phone Number <br/>";
		}	

		//VALIDATE address
		$_SESSION["address_Error"]					 = 	"";  

        if(empty($address))
        {
 			$_SESSION["address_Error"]				.=	"&#183; Phone Number is required <br/>";		
        }		
		
	 
		
		
		

		 
		  if(	!empty($_SESSION["first_name_Error"]) || 
				!empty($_SESSION["last_name_Error"]) || 
				!empty($_SESSION["phone_number_Error"]) || 
				!empty($_SESSION["address_Error"])
				)
				{
					header("location: ?UpdateProfileErrorMsg=true");
				}
				else
				{
 
						mysqli_query($conn,"UPDATE users	 SET 		first_name				=		'$first_name', 
																		last_name				=		'$last_name', 
																		phone_number			=		'$phone_number', 																		
																		address					=		'$address' 	WHERE email_address = '$_SESSION[user]'") or die(mysqli_error($conn));
				
				unset($_SESSION["first_name_Error"]);
				unset($_SESSION["last_name_Error"]);
				unset($_SESSION["phone_number_Error"]);
				unset($_SESSION["address_Error"]);
				
																		
				$custom_flash_msg = "Profile Information Updated!";
				setFlashMessage($custom_flash_msg, 'success'); //set error or success
                header("location: ?");
																			
				}
 
}


?>





<?php

if(isset($_POST["change_profile"])){


 		$profile_picture									= 			$_FILES["profile_picture"]["name"];

		//VALIDATE profile_picture
		$_SESSION["profile_picture_Error"]					=			"";

		$profile_picture_img_ext							=			pathinfo($profile_picture, PATHINFO_EXTENSION);
		$profile_picture_new								=			time().rand(1000,9000).".".$profile_picture_img_ext;
 
 		

        if (!isset($_FILES['profile_picture'])) 
        {
 			$_SESSION["profile_picture_Error"]				.=	"&#183; Profile Picture is required <br/>";		
        }

		$folder												=	"../uploads/";
		$img_allowed_types									=	array('jpg','gif','png','bmp','jpeg','JPG','GIF','PNG','BMP','JPEG');
							
		if(!in_array($profile_picture_img_ext, $img_allowed_types))
		{
			$_SESSION["profile_picture_Error"]				.=	"&#183; Profile Picture must be an Image file type <br/>";		
		}
			
			
			
			
			
			

		 
		  if(	!empty($_SESSION["profile_picture_Error"]) )
				{
					header("location: ?RegisterationErrorMsg=true");
				}
				else
				{
			  	move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $folder.$profile_picture);
				rename($folder.$profile_picture,$folder.$profile_picture_new);

				mysqli_query($conn,"UPDATE	users	 SET	profile_picture	=	'$profile_picture_new' WHERE  email_address = '$_SESSION[user]'") or die(mysqli_error($conn));
				
				unset($_SESSION["profile_picture_Error"]); 
				
				$custom_flash_msg = "Profile Picture Updated!";
				setFlashMessage($custom_flash_msg, 'success'); //set error or success
                header("location: ?");																		
																		
				}
		 

	


}


?>