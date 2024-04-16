<?php
include("../set.php");
include("user_inc.php");
include('../functions.php');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $company_name; ?> | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../_source/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="https://admin-lte3-resource.chrys-online.com/_source/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://admin-lte3-resource.chrys-online.com/_source/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="https://admin-lte3-resource.chrys-online.com/_source/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://admin-lte3-resource.chrys-online.com/_source/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://admin-lte3-resource.chrys-online.com/_source/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="https://admin-lte3-resource.chrys-online.com/_source/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="https://admin-lte3-resource.chrys-online.com/_source/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" >

   <!-- DataTables -->
  <link rel="stylesheet" href="https://admin-lte3-resource.chrys-online.com/_source/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
   
    <!-- Toastr -->
  <link rel="stylesheet" href="https://admin-lte3-resource.chrys-online.com/_source/plugins/toastr/toastr.min.css">
   
     
 
</head>
<body  class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="logout.php" class="nav-link">Logout</a>
      </li>
    </ul>


   </nav>
  <!-- /.navbar -->

<?php include("side_bar.php"); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Properties</h1>
          </div><!-- /.col -->


        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Manage Properties</li>
            </ol>
          </div>


        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


 		<?php include('notification.php'); ?>



        <?php         $query_properties  = mysqli_query($conn,"SELECT * FROM properties") or die(mysqli_error($conn)); ?>

        <div class="row">
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">List of registered Agents (<?php echo mysqli_num_rows($query_properties); ?> )</h3>
 
              </div>
              <!-- /.card-header -->
            <div class="card-body table-responsive">
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


				while($row_properties=mysqli_fetch_array($query_properties))
				{
				$id						=			 $row_properties['id'];
				$title					=			 $row_properties['title'];
				$price					=			 $row_properties['price']; 
				$pic_1					=			 $row_properties['pic_1']; 

                $status					=			 $row_properties['status']; 

                    if($status  ==  0)

                    {

                        $update_status_btn = "<a class='btn-sm btn btn-success' href='?update_status=approve&id=$id' onclick=\"return confirm('Are you sure you want to Approve this Property?')\"><i class='fas fa-check'></i></a>";                        
                        $status_txt = "<b class='text-danger'>Not Approved</b>";                        



                    }
                    else
                    {
                        $update_status_btn = "<a class='btn-sm btn btn-danger' href='?update_status=disapprove&id=$id' onclick=\"return confirm('Are you sure you want to Disapprove this Property?')\"><i class='fas fa-times'></i></a>";
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
					  <?php echo $update_status_btn; ?>
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
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->









<br/>
<center>
<button onclick="window.location='index.php'" type="button" class="btn btn-sml btn-info">BACK</button>
</center>

<br/>


  

 





      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong><script>document.write(new Date().getFullYear());</script> &copy;  </strong>
    <?php echo $company_name; ?> | Designed by  | Designed by <a href="www.linkedin.com/in/chrysanthus-obinna">Chrysanthus.C.</a> </a>
    <div class="float-right d-none d-sm-inline-block">
     </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins/moment/moment.min.js"></script>
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/dist/js/demo.js"></script>


<!-- DataTables -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins/datatables/jquery.dataTables.js"></script>
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins//datatables-bs4/js/dataTables.bootstrap4.js"></script>


<!-- Toastr -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins/toastr/toastr.min.js"></script>



<script>
  $(function () {
 	
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
    });
  });
</script>


 
 <script>
 $(function(){
  $(".open-Dialog").click(function(){
    
      $('#full_name').html($(this).data('full_name'));
      $('#phone_number').html($(this).data('phone_number'));
      $('#user_address').html($(this).data('user_address'));
      $('#email_address').html($(this).data('email_address'));
      $('#profile_picture').attr('src', $(this).data('profile_picture'));

   });
});

</script>





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





<?php

        if( (isset($_GET['update_status'])) && (isset($_GET['id'])) )
        {
            $id                     =       $_GET['id'];
            $qry_properties         =       mysqli_query($conn,"SELECT * FROM properties WHERE id='$id'") or die(mysqli_error($conn));

            if(mysqli_num_rows($qry_properties) > 0)
            { 
   
                      
            

            if($_GET['update_status'] == "approve")
            {

              $query_info=mysqli_fetch_assoc($qry_properties);

              if(($query_info['pic_1']        ==          "NULL") ||
                ($query_info['pic_2']         ==          "NULL") ||
                ($query_info['pic_3']         ==          "NULL") ||
                ($query_info['pic_4']         ==          "NULL") ||
                ($query_info['pic_5']         ==          "NULL"))
                {
                  
                  $custom_flash_msg = "Property status could not be updated! Agent is expected to upload atleast 5 Property photos. ";
                  setFlashMessage($custom_flash_msg, 'error'); //set error or success
                  header("location: ?");
                     
                }
                else
                {
                  mysqli_query($conn,"UPDATE properties SET status = '1' WHERE  id='$id'");

            
                  $custom_flash_msg = "Property status has been Updated";
                  setFlashMessage($custom_flash_msg, 'success'); //set error or success
                  header("location: ?");
  
                }
                                 
              
            }
            else
            {
                mysqli_query($conn,"UPDATE properties SET status = '0' WHERE  id='$id'");

            
                $custom_flash_msg = "Property status has been Updated";
                setFlashMessage($custom_flash_msg, 'success'); //set error or success
                header("location: ?");
    
            }


        }
        else
        {
          $custom_flash_msg = "Request Failed, Invalid ID $id ";
          setFlashMessage($custom_flash_msg, 'error'); //set error or success
          header("location: ?"); 
        }
      }


 

?>