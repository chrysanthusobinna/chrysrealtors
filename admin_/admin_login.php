<?php

include("../set.php");



?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> <?php echo $company_name; ?>  | Admin Cpanel Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../_source/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="https://admin-lte3-resource.chrys-online.com/_source/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://admin-lte3-resource.chrys-online.com/_source/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" >
</head>
<body class="hold-transition login-page">
<div class="login-box">

  <a href="../">
    <img src="../img/logos/logo.png" alt="logo" class="img-fluid">
</a>
  <hr/>

  
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">ADMIN CPANEL</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username"  placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
		            <button type="submit" name="submit" class="btn btn-primary btn-block">LOGIN</button>

    </form>

  </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="https://admin-lte3-resource.chrys-online.com/_source/dist/js/adminlte.min.js"></script>

</body>
</html>



<?php

  if(isset($_POST['submit']))
  {
  $username 		= $_POST['username'];
  $password			= $_POST['password'];

  if(($username==$site_admin_username)& ($password==$site_admin_password))
  {
       $_SESSION['admin']=$site_admin_username;

       echo "<script>alert('You  have logged in successfully as Global Admin!');</script>";
       echo "<script>window.location='index.php';</script>";
     }
     else
     {
           echo "<script>alert('Wrong Admin Username or Password!');</script>";

     }

  }
?>
