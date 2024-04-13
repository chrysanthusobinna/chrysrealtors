<?php
include("set.php"); 
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Housy - Real Estate HTML5 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CRoboto:300,400,500,700&amp;display=swap">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="page_loader"></div>

<!-- Contact section start -->
<div class="contact-section">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-6 align-self-center pad-0">
                <div class="form-section align-self-center">
                    <h3>Sign into your account</h3>
                    <div class="btn-section clearfix">
                        <a href="login.php" class="link-btn active btn-1 active-bg">Login</a>
                        <a href="signup.php" class="link-btn btn-2 default-bg">Register</a>
                    </div>
                    <div class="clearfix"></div>

        					
					<?php if(isset($_GET["LoginAlert"])){ ?>
						<div class="alert alert-warning" role="alert">
						<?php echo $_GET["LoginAlert"]; ?>
						</div>

					<?php } ?>

                    <form action="" method="POST">
                        <div class="form-group form-box">
                            <input type="email" name="email_address" class="input-text" placeholder="Email Address">
                        </div>
                        <div class="form-group form-box clearfix">
                            <input type="password" name="password" class="input-text" placeholder="Password">
                        </div>
                        <div class="form-group clearfix">
                        <button type="submit" name= "login" class="btn-md btn-theme float-left">Login as Agent</button>
                            <a href="forgot-password.php" class="forgot-password">Forgot Password</a>
                        </div>
                    </form>
                    <p>Don't have an account? <a href="signup.php">Register here</a></p>

                    
            <hr/>

            <button type="button" onclick = "window.location='admin_/admin_login.php'" class="btn btn-primary btn-block">Click Here To Login as Admin</button>


                </div>
            </div>


            <div class="col-lg-6 bg-color-15 align-self-center pad-0 none-992 bg-img">
                <div class="info clearfix">
                    <div class="logo-2">
                        <a href="index.php">
                            <img src="img/logos/logo-2.png" class="cm-logo" alt="black-logo">
                        </a>
                    </div>
                    <h3>Welcome to Housy</h3>
                    <div class="social-list">
                        <a href="#" class="facebook-bg">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="twitter-bg">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="google-bg">
                            <i class="fa fa-google"></i>
                        </a>
                        <a href="#" class="linkedin-bg">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 

<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-submenu.js"></script>
<script src="js/rangeslider.js"></script>
<script src="js/jquery.mb.YTPlayer.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.scrollUp.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/leaflet.js"></script>
<script src="js/leaflet-providers.js"></script>
<script src="js/leaflet.markercluster.js"></script>
<script src="js/dropzone.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.filterizr.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/maps.js"></script>
<script src="js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>



<?php
	if(isset($_POST["login"]))
	{
	$email_address			=	$_POST["email_address"];
	$password				=	$_POST["password"];


	$query_users 			=	mysqli_query($conn,"SELECT * FROM users WHERE email_address = '$email_address'") or die(mysqli_error($conn));;
	
 
	 


   if((mysqli_num_rows($query_users)>0) ) 
   {
		$query_user_record		=	mysqli_fetch_assoc($query_users) or die(mysqli_error($conn));
		$user_password			=	$query_user_record['password'];
			
			if(password_verify($password, $user_password))
			{
			$_SESSION['user']	=	$email_address;
			echo "<script>alert('You have logged in successful!'); window.location='users/';</script>";
 				
			}
			else
			{
			$LoginAlert		=	"Wrong Email Adrress or Password!";
			header("location: ?LoginAlert=$LoginAlert");
				
			}
	
 
   }
   else
   {
			$LoginAlert		=	"Wrong Email Adrress or Password!";
			header("location: ?LoginAlert=$LoginAlert");
				
   }

}

?>
