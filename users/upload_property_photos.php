<?php
include("../set.php"); 
include("../functions.php");


	if(!isset($_GET["id"])) { header("location: index.php?notif_err=Invalid Account ID!"); }
	$id		= $_GET["id"];
	$query_account=mysqli_query($conn,"SELECT * FROM properties WHERE id=$id");
	if(mysqli_num_rows($query_account)==0){ header("location: index.php?notif_err=Invalid Account ID!"); }

	$query_info=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM properties WHERE id='$id'"));



	$title						=			$query_info['title'];
	$pic_1						=			$query_info['pic_1'];
	$pic_2						=			$query_info['pic_2'];
	$pic_3						=			$query_info['pic_3'];
	$pic_4						=			$query_info['pic_4'];
	$pic_5						=			$query_info['pic_5']; 
	
  
  $pic_1 = ($pic_1 == "NULL") ? "no_photo.png" : $pic_1;
  $pic_2 = ($pic_2 == "NULL") ? "no_photo.png" : $pic_2;
  $pic_3 = ($pic_3 == "NULL") ? "no_photo.png" : $pic_3;
  $pic_4 = ($pic_4 == "NULL") ? "no_photo.png" : $pic_4;
  $pic_5 = ($pic_5 == "NULL") ? "no_photo.png" : $pic_5;
  
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
					<h4 class="m0 d-none d-lg-block">Add Property Photos</h4>
					 
			 
			 
					</div>
				</header>
				<!-- End Header -->

                        					
				<?php include("notification.php"); ?>	



				<div class="bg-white card-box border-20 mt-40">
				 

					<h4>Photos for: <?php echo $title; ?> </h4>
					<hr/>
 
				<table class="table"> <tbody>

						<tr>
						<td>Photo 1</td>
						<td>
						<form action=""  method="POST"  enctype="multipart/form-data">
						<input type="hidden" value="<?php echo $id; ?>"   name="a_id">
						<div class="input-group input-group-sm">
						<input name="pic_1" type="file" class="form-control">
						<span class="input-group-append">
						<button name="upload_pic_1" type="submit" class="btn btn-info btn-flat">UPLOAD</button>
						</span>
						</div>	
						</form>				
						</td>
						<td>
						<img src="../property_pics/<?php echo $pic_1; ?>" width="100px">
						</td>
						</tr> 




						<tr>
						<td>Photo 2</td>
						<td>
						<form action=""  method="POST"  enctype="multipart/form-data">
						<input type="hidden" value="<?php echo $id; ?>"   name="a_id">
						<div class="input-group input-group-sm">
						<input name="pic_2" type="file" class="form-control">
						<span class="input-group-append">
						<button name="upload_pic_2" type="submit" class="btn btn-info btn-flat">UPLOAD</button>
						</span>
						</div>	
						</form>	
						</td>
						<td>
						<img src="../property_pics/<?php echo $pic_2; ?>" width="100px">
						</td>
						</tr> 


						<tr>
						<td>Photo 3</td>
						<td>
						<form action=""  method="POST"  enctype="multipart/form-data">
						<input type="hidden" value="<?php echo $id; ?>"   name="a_id">
						<div class="input-group input-group-sm">
						<input name="pic_3" type="file" class="form-control">
						<span class="input-group-append">
						<button name="upload_pic_3" type="submit" class="btn btn-info btn-flat">UPLOAD</button>
						</span>
						</div>	
						</form>	
						</td>
						<td>
						<img src="../property_pics/<?php echo $pic_3; ?>" width="100px">
						</td>
						</tr> 


						<tr>
						<td>Photo 4</td>
						<td>
						<form action=""  method="POST"  enctype="multipart/form-data">
						<input type="hidden" value="<?php echo $id; ?>"   name="a_id">
						<div class="input-group input-group-sm">
						<input name="pic_4" type="file" class="form-control">
						<span class="input-group-append">
						<button name="upload_pic_4" type="submit" class="btn btn-info btn-flat">UPLOAD</button>
						</span>
						</div>	
						</form>	
						</td>
						<td>
						<img src="../property_pics/<?php echo $pic_4; ?>" width="100px">
						</td>
						</tr> 



						<tr>
						<td>Photo 5</td>
						<td>
						<form action=""  method="POST"  enctype="multipart/form-data">
						<input type="hidden" value="<?php echo $id; ?>"   name="a_id">
						<div class="input-group input-group-sm">
						<input name="pic_5" type="file" class="form-control">
						<span class="input-group-append">
						<button name="upload_pic_5" type="submit" class="btn btn-info btn-flat">UPLOAD</button>
						</span>
						</div>	
						</form>		
						</td>
						<td>
						<img src="../property_pics/<?php echo $pic_5; ?>" width="100px">
						</td>
						</tr> 
						
						</tbody> </table>






				</div>
				<!-- /.card-box -->

			 
				<!-- /.card-box -->
				<div class="button-group d-inline-flex align-items-center mt-30">
				<a href="index.php" class="dash-btn-one tran3s me-3">Dashboard</a>
				</div>		
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

if(isset($_POST["upload_pic_1"]))
{

	$a_id						=			$_POST["a_id"];


	if(!empty($pic_1)){

		  	$new_pic_1			 =	rand(1000000,10000000).".jpg";
			$folder					 =	"../property_pics/";


			$img_allowed_types		 =	array('.jpg','.gif','.png','.bmp','.jpeg');
			$pic_1					 = 	$_FILES["pic_1"]["name"];
			$img_ext				 =	substr($pic_1, strpos($pic_1, '.'), strlen($pic_1)-1);



				if(!in_array($img_ext, $img_allowed_types))
				{
				header("location: ?id=$a_id&notif_err=image+type+is+not+an+allowed+type!");
				exit();
				}
				else
				{
				move_uploaded_file($_FILES["pic_1"]["tmp_name"], $folder.$pic_1);
				rename($folder.$pic_1,$folder.$new_pic_1);

				mysqli_query($conn,"UPDATE properties SET  pic_1	= '$new_pic_1'  WHERE  id = '$a_id'") or die(mysqli_error($conn));

				}



	}

		 
	$custom_flash_msg = "Property Photo uploaded successfully!";
	setFlashMessage($custom_flash_msg, 'success'); //set error or success
	header("location: ?id=$a_id");

}

?>






















<?php

if(isset($_POST["upload_pic_2"]))
{

	$a_id						=			$_POST["a_id"];


	if(!empty($pic_2)){

		  	$new_pic_2			 =	rand(1000000,10000000).".jpg";
			$folder					 =	"../property_pics/";


			$img_allowed_types		 =	array('.jpg','.gif','.png','.bmp','.jpeg');
			$pic_2					 = 	$_FILES["pic_2"]["name"];
			$img_ext				 =	substr($pic_2, strpos($pic_2, '.'), strlen($pic_2)-1);



				if(!in_array($img_ext, $img_allowed_types))
				{
				header("location: ?id=$a_id&notif_err=image+type+is+not+an+allowed+type!");
				exit();
				}
				else
				{
				move_uploaded_file($_FILES["pic_2"]["tmp_name"], $folder.$pic_2);
				rename($folder.$pic_2,$folder.$new_pic_2);

				mysqli_query($conn,"UPDATE properties SET  pic_2	= '$new_pic_2'  WHERE  id = '$a_id'") or die(mysqli_error($conn));

				}



	}


	$custom_flash_msg = "Property Photo uploaded successfully!";
	setFlashMessage($custom_flash_msg, 'success'); //set error or success
	header("location: ?id=$a_id");

}

?>



















<?php

if(isset($_POST["upload_pic_3"]))
{

	$a_id						=			$_POST["a_id"];


	if(!empty($pic_3)){

		  	$new_pic_3			 =	rand(1000000,10000000).".jpg";
			$folder					 =	"../property_pics/";


			$img_allowed_types		 =	array('.jpg','.gif','.png','.bmp','.jpeg');
			$pic_3					 = 	$_FILES["pic_3"]["name"];
			$img_ext				 =	substr($pic_3, strpos($pic_3, '.'), strlen($pic_3)-1);



				if(!in_array($img_ext, $img_allowed_types))
				{
				header("location: ?id=$a_id&notif_err=image+type+is+not+an+allowed+type!");
				exit();
				}
				else
				{
				move_uploaded_file($_FILES["pic_3"]["tmp_name"], $folder.$pic_3);
				rename($folder.$pic_3,$folder.$new_pic_3);

				mysqli_query($conn,"UPDATE properties SET  pic_3	= '$new_pic_3'  WHERE  id = '$a_id'") or die(mysqli_error($conn));

				}



	}


	$custom_flash_msg = "Property Photo uploaded successfully!";
	setFlashMessage($custom_flash_msg, 'success'); //set error or success
	header("location: ?id=$a_id");

}

?>

















<?php

if(isset($_POST["upload_pic_4"]))
{

	$a_id						=			$_POST["a_id"];


	if(!empty($pic_4)){

		  	$new_pic_4			 =	rand(1000000,10000000).".jpg";
			$folder					 =	"../property_pics/";


			$img_allowed_types		 =	array('.jpg','.gif','.png','.bmp','.jpeg');
			$pic_4					 = 	$_FILES["pic_4"]["name"];
			$img_ext				 =	substr($pic_4, strpos($pic_4, '.'), strlen($pic_4)-1);



				if(!in_array($img_ext, $img_allowed_types))
				{
				header("location: ?id=$a_id&notif_err=image+type+is+not+an+allowed+type!");
				exit();
				}
				else
				{
				move_uploaded_file($_FILES["pic_4"]["tmp_name"], $folder.$pic_4);
				rename($folder.$pic_4,$folder.$new_pic_4);

				mysqli_query($conn,"UPDATE properties SET  pic_4	= '$new_pic_4'  WHERE  id = '$a_id'") or die(mysqli_error($conn));

				}



	}


	$custom_flash_msg = "Property Photo uploaded successfully!";
	setFlashMessage($custom_flash_msg, 'success'); //set error or success
	header("location: ?id=$a_id");

}

?>



















<?php

if(isset($_POST["upload_pic_5"]))
{

	$a_id						=			$_POST["a_id"];


	if(!empty($pic_5)){

		  	$new_pic_5			 =	rand(1000000,10000000).".jpg";
			$folder					 =	"../property_pics/";


			$img_allowed_types		 =	array('.jpg','.gif','.png','.bmp','.jpeg');
			$pic_5					 = 	$_FILES["pic_5"]["name"];
			$img_ext				 =	substr($pic_5, strpos($pic_5, '.'), strlen($pic_5)-1);



				if(!in_array($img_ext, $img_allowed_types))
				{
				header("location: ?id=$a_id&notif_err=image+type+is+not+an+allowed+type!");
				exit();
				}
				else
				{
				move_uploaded_file($_FILES["pic_5"]["tmp_name"], $folder.$pic_5);
				rename($folder.$pic_5,$folder.$new_pic_5);

				mysqli_query($conn,"UPDATE properties SET  pic_5	= '$new_pic_5'  WHERE  id = '$a_id'") or die(mysqli_error($conn));

				}



	}


	$custom_flash_msg = "Property Photo uploaded successfully!";
	setFlashMessage($custom_flash_msg, 'success'); //set error or success
	header("location: ?id=$a_id");

}

?>









