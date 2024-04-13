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
  
   <!-- DataTables -->
  <link rel="stylesheet" href="https://admin-lte3-resource.chrys-online.com/_source/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
   
    <!-- Toastr -->
  <link rel="stylesheet" href="https://admin-lte3-resource.chrys-online.com/_source/plugins/toastr/toastr.min.css">
   
     
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" >

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
            <h1 class="m-0 text-dark">Manage Agents</h1>
          </div><!-- /.col -->


        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Manage Agents</li>
            </ol>
          </div>


        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


 		<?php include('notification.php'); ?>



        <?php         $query_users  = mysqli_query($conn,"SELECT * FROM users") or die(mysqli_error($conn)); ?>

        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">List of registered Agents (<?php echo mysqli_num_rows($query_users); ?> )</h3>
 
              </div>
              <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="example1" class="table table-bordered table-striped" >
                  <thead>
                    <tr>
                      <th>AGENT NAME</th>
                      <th>NO. PROPERTIES</th>
                      <th> &nbsp; </th>

                    </tr>
                  </thead>
                  <tbody>



        <?php

        if((mysqli_num_rows($query_users))==0){ 

          echo"
          <tr>
          <td>No Record(s)</td>
          <td></td>
          <td></td>
          </tr>
          ";



        }
        else
        {

                while($row_users=mysqli_fetch_array($query_users))
                {

                    $user_id        						=			$row_users['id'];
                    $profile_picture						=			$row_users['profile_picture'];
                    $first_name								  =			$row_users['first_name'];
                    $last_name							  	=			$row_users['last_name'];
                    $phone_number							  =			$row_users['phone_number'];
                    $user_address   						=			$row_users['address'];
                    $email_address							=			$row_users['email_address'];

                    $no_properties             =      mysqli_num_rows(mysqli_query($conn,"SELECT * FROM properties WHERE user_id  = '$user_id'"));

                    
        
                ?>
                    <tr>
                              <td><?php echo $first_name. " " . $last_name; ?></td>
                              <td><?php echo $no_properties; ?></td>
                              <td>

                                      <button type="button" 
                                      data-profile_picture    =		"../uploads/<?php echo $profile_picture; ?>" 
                                      data-full_name		      =		"<?php echo $first_name. " " . $last_name; ?>" 
                                      data-phone_number       =		"<?php echo $phone_number; ?>" 
                                      data-user_address       =		"<?php echo $user_address; ?>" 
                                      data-email_address      =		"<?php echo $email_address; ?>" 
                                      
                                      class="btn btn-primary open-Dialog btn-sm"  data-toggle="modal" data-target="#modal-default"><i class="fas fa-eye"></i>
                                      VIEW PROFILE
                                      </button>                                          

                                      <a   class="btn-sm open-DeleteDialog btn btn-danger" href="?delete_agent=true&user_id=<?php echo $user_id; ?>" onclick="return confirm('Are you sure you want to delete this Agent? All properties posted by this agent will be Deleted too')"><i class="fas fa-trash"></i> DELETE FILE</a>
                                     
                              </td>
                    </tr>
      <?php } }?>





                  </tbody>
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
<button onclick="window.location='index.php'" type="button" class="btn btn-sml btn-primary">BACK</button>
</center>

<br/>


 
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Agent Profile</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
			

            <center>
            <img class="img-circle elevation-2" style="width:100px; height:100px;" src="" id="profile_picture"  alt="User Avatar">
            </center>
            <hr/>

			     <table class="table table-bordered">

                  <tbody>
                    <tr>
                      <td><b>Full Name</b></td>
                      <td><p id="full_name"></p></td>
                    </tr>
                    <tr>
                      <td><b>Phone Numbers</b></td>
                      <td><p id="phone_number"><p> </td>
                    </tr>
                    <tr>
                      <td><b>Address</b></td>
                      <td><p id="user_address"></p> </td>
                    </tr>
                    <tr>
                      <td><b>Email Address</b></td>
                      <td><p id="email_address" ></p> </td>
                    </tr>

                  </tbody>
                </table>
 				
             
            </div>
 
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


















 









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
if(isset($_GET["delete_agent"]))
{

		$id						=			 $_GET["user_id"];

		mysqli_query($conn,"DELETE FROM users WHERE id='$id'") or die(mysqli_error($conn));
		mysqli_query($conn,"DELETE FROM properties WHERE user_id='$id'") or die(mysqli_error($conn));

		$custom_flash_msg = "Agent record has been Deleted";
		setFlashMessage($custom_flash_msg, 'success'); //set error or success
		header("location: ?");

}

?>