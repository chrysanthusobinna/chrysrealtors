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
						<h4 style="" class=" ">Agent dashboard | My Properties</h4>
					 
			 
			 
					</div>
				</header>
				<!-- End Header -->

				<?php include("notification.php"); ?>
			 

				<div class="bg-white card-box p0 border-20">
					
                    <div class="table-responsive pt-25 pb-25 pe-4 ps-4">

					<?php 		$query_trx=mysqli_query($conn,"SELECT * FROM properties ORDER BY id DESC") or die(mysqli_error($conn)); ?>



            <div class="card-body table-responsive">




					<?php
					$self=$_SERVER["PHP_SELF"];
					$rowsperpage=10;
					$range=7;
					if(isset($_GET["currentpage"]) && is_numeric($_GET["currentpage"]))
					{
					$currentpage=(int)$_GET["currentpage"];
					} else {
					$currentpage=1;
					}
					$offset=($currentpage-1)*$rowsperpage;
					
					$numrows=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM properties WHERE user_id = '$logged_user_id'"));
					
					$totalpages=ceil($numrows/$rowsperpage);
					if($currentpage>$totalpages)
					{
					$currentpage=$totalpages;
					}
					if($currentpage<1)
					{
					$currentpage=1;
					}
					
					$query2=mysqli_query($conn,"SELECT * FROM properties WHERE user_id = '$logged_user_id' ORDER BY id DESC LIMIT $offset, $rowsperpage");
					
					$num=mysqli_num_rows($query2);
					if($num==0)
					{
					echo"<div class='alert alert-warning' role='alert'>  NO RECORD FOUND  </div>";
					}
					else {

					?>

              <table id="example1" class="table table-bordered table-striped" style="height: 265px;">
                  <thead>
                    <tr>
                      <th>IMAGE </th>
                      <th>TITTLE </th>
                      <th>PRICE</th> 
                      <th>STATUS</th> 
                      <th>#</th> 
                    </tr>
                  </thead>
                  <tbody>
				  


				<?php


				while($row_properties=mysqli_fetch_array($query2))
				{
				$id						=			 $row_properties['id'];
				$title					=			 $row_properties['title'];
				$price					=			 $row_properties['price']; 
				$pic_1					=			 $row_properties['pic_1']; 

				$status					=			 $row_properties['status']; 

				if($status  ==  0)

				{

					$status_txt = "<b class='text-danger'>Not Approved</b>";                        



				}
				else
				{
					$status_txt = "<b class='text-success'>Approved</b>";                        

				}
				?>
					  <tr>
                      <td>
					  <img src="../property_pics/<?php echo $pic_1; ?>" alt="" style="width: 105px;"  class="p-img">
					  </td>
					  <td>

					  <b> <?php echo $title; ?></b></td>
                      <td><?php echo $currency." ".number_format($price); ?></td>
                      <td> <?php echo $status_txt; ?></td>
					  
					  
					  <td>
					  <a target='_blank' class="btn-sm  btn btn-info" href="../properties_details.php?id=<?php echo $id; ?>"  > <i class="fas fa-eye"></i> </a>
					  <a  class="btn-sm  btn btn-success" href="edit_property_info.php?id=<?php echo $id; ?>"  > <i class="fas fa-edit"></i> </a>
					  <a   class="btn-sm btn btn-danger" href="?delete_property=true&id=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete this Property?')"><i class="fas fa-trash"></i></a>

               
					  </td>


                      </tr>
				<?php } ?>				  


			 
                  </tbody>		
                <tfoot>
                <tr>
                    <tr>
                      <th>IMAGE </th>
                      <th>TITTLE </th>
                      <th>PRICE</th> 
                      <th>STATUS</th> 
                      <th>#</th> 
                    </tr>
                </tr>
                </tfoot>				  
                 </table>


				 <?php } ?>
				 
  
  

              </div>
                  <!-- /.card-body -->
  
            </div>
            <!-- /.card -->


                    </div>                    
                </div>
				<!-- /.card-box -->

				<?php if($num > 0) { ?> 
				<ul class="pagination-one d-flex align-items-center justify-content-center style-none pt-40">

					<?php

					if($currentpage>1)
						{
						echo"<li>  <a href='$self?id=$id&currentpage=1'><i class='fa fa-angle-left'></i><i class='fa fa-angle-left'></i></a> </li>";
						$prevpage	=	$currentpage-1;
						echo"<li>  <a href='$self?id=$id&currentpage=$prevpage'><i class='fa fa-angle-left'></i></a> </li>";
						}
					for($x=($currentpage-$range); $x<(($currentpage+$range)+1); $x++)
					{
					if(($x>0) &&($x<=$totalpages))
					{
						if($x==$currentpage)
						{
						echo " <li  class='active'><a href=''>$x</a></li>";
						}
						else
						{
						echo " <li><a  href='$self?id=$id&currentpage=$x'>$x</a></li>";

						}
					} }
					if($currentpage!=$totalpages)
						{
						$nextpage=$currentpage+1;

						
						echo "<li> <a href='$self?id=$id&currentpage=$nextpage'><i class='fa fa-angle-right'></i></a> </li>";
						echo "<li> <a href='$self?id=$id&currentpage=$totalpages'><i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i></a> </li>";
						}


						?>

                </ul>	
				
				<?php } ?>
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
if(isset($_GET["delete_property"]))
{

		$id						=       $_GET["id"];
        $qry_properties         =       mysqli_query($conn,"SELECT * FROM properties WHERE id=$id");

            if(mysqli_num_rows($qry_properties)==0)
            { 
                $custom_flash_msg = "Request Failed, Invalid ID";
                setFlashMessage($custom_flash_msg, 'error'); //set error or success
                header("location: ?");              }
            else
            {
                    $query_info=mysqli_fetch_assoc($qry_properties);

                    $pic_1						    =			"../property_pics/" . $query_info['pic_1'];
                    $pic_2						    =			"../property_pics/" . $query_info['pic_2'];
                    $pic_3						    =			"../property_pics/" . $query_info['pic_3'];
                    $pic_4						    =			"../property_pics/" . $query_info['pic_4'];
                    $pic_5						    =			"../property_pics/" . $query_info['pic_5']; 
            
                    if($query_info['pic_1']         !=          "NULL") { unlink($pic_1); }
                    if($query_info['pic_2']         !=          "NULL") { unlink($pic_2); }
                    if($query_info['pic_3']         !=          "NULL") { unlink($pic_3); }
                    if($query_info['pic_4']         !=          "NULL") { unlink($pic_4); }
                    if($query_info['pic_5']         !=          "NULL") { unlink($pic_5); }
                            
                    
            
            
            
                    mysqli_query($conn,"DELETE FROM properties WHERE id='$id'") or die(mysqli_error($conn));
            
            
            
            
                    $custom_flash_msg = "Property record has been Deleted";
                    setFlashMessage($custom_flash_msg, 'success'); //set error or success
                    header("location: ?");               
            }



}

?>
