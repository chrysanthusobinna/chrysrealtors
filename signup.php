<?php
include("set.php");
include("functions.php");


		// Generate CSRF token if not already generated
		if (!isset($_SESSION['csrf_token'])) {
			$_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Generate a random token
		}

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
                <div class="form-section clearfix">
                    <h3>Create an account</h3>
                    <div class="btn-section clearfix">
                        <a href="login.php" class="link-btn active btn-1 default-bg">Login</a>
                        <a href="signup.php" class="link-btn btn-2 active-bg">Register</a>
                    </div>
                    <div class="clearfix"></div>

    
					<?php

		 
			if(	(isset($_GET['RegisterationErrorMsg'])) &&
				(
				!empty($_SESSION["CSRF_token_Error"]) || 
				!empty($_SESSION["first_name_Error"]) || 
				!empty($_SESSION["last_name_Error"]) || 
				!empty($_SESSION["phone_number_Error"]) || 
				!empty($_SESSION["address_Error"]) || 
				!empty($_SESSION["email_address_Error"]) || 
				!empty($_SESSION["password_Error"]) || 
				!empty($_SESSION["profile_picture_Error"])
				) 
				){ ?>

					
					<br/>
					<div class="alert alert-warning" role="alert">
						<?php
						echo $_SESSION["CSRF_token_Error"] . $_SESSION["first_name_Error"] . $_SESSION["last_name_Error"] . $_SESSION["phone_number_Error"] . $_SESSION["address_Error"] . $_SESSION["email_address_Error"] . $_SESSION["password_Error"] . $_SESSION["profile_picture_Error"];
				
				?>
					</div>
					<br/>
					<?php } ?>
 
                    


                    <form action="#" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>"> 

                    <div class="form-group form-box">
                            <p style="text-align:left;">Profile Picture</p>
                            <input required  type="file" name="profile_picture" class="input-text"  >
                        </div>


                        <div class="form-group form-box">
                            <p style="text-align:left;">First Name</p>
                            <input required  type="text" name="first_name" class="input-text" placeholder="First Name">
                        </div>

                        <div class="form-group form-box">
                            <p style="text-align:left;">Last Name</p>
                            <input  required  type="text" name="last_name" class="input-text" placeholder="Last Name">
                        </div>


                        <div class="form-group form-box">
                            <p style="text-align:left;">Email Address </p>
                            <input  required  type="email" name="email_address" class="input-text" placeholder="Email Address">
                        </div>



                        
                        <div class="form-group form-box">
                            <p style="text-align:left;">Phone Number / Whatsapp Number </p>
                            <input  required  type="text" name="phone_number" class="input-text" placeholder="Phone Number">
                        </div>

 

                                                
                        <div class="form-group form-box">
                            <p style="text-align:left;">Address </p>
                            <input  required  type="text" name="address" class="input-text" placeholder="Address">
                        </div>



                        <div class="form-group form-box clearfix">
                        <p style="text-align:left;">Password </p>
                           <input  required  type="password" name="password" class="input-text" placeholder="Password">
                        </div>
                        <p style="text-align:left;">Password Confirmation</p>
                        <div class="form-group form-box clearfix">
                            <input  required  type="password" name="password_2" class="input-text" placeholder="Confirm Password">
                        </div>



                        <div class="form-group clearfix">
                            <button type="submit"  name = "submit" class="btn-md btn-theme float-left">Register</button>
                        </div>
                    </form>
                    <p>Already a member? <a href="login.php">Login here</a></p>
                </div>
            </div>
            <div class="col-lg-6 bg-color-15 align-self-center pad-0 none-992 bg-img">
                <div class="info clearfix">
                    <div class="logo-2">
                        <a href="login.php">
                            <img src="img/logos/logo-2.png" class="cm-logo" alt="black-logo">
                        </a>
                    </div>
                    <h3>Register as an Agent</h3>
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
  if(isset($_POST['submit']))
  {

 
	
    $_SESSION["CSRF_token_Error"]						 =	"";
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        // CSRF token is invalid, handle the error (e.g., log, redirect, or show an error message)
    

        $_SESSION["CSRF_token_Error"]					.=	"&#183; CSRF token validation failed <br/>";
        $sessionKeys = array(
            "first_name_Error",
            "last_name_Error",
            "phone_number_Error",
            "address_Error",
            "email_address_Error",
            "password_Error",
            "profile_picture_Error"
        );

        // Assign empty strings to session variables
        foreach ($sessionKeys as $key) {
            $_SESSION[$key] = "";
        }			
        header("location: ?RegisterationErrorMsg=true");
        die();
        

    }

    $profile_picture			= 			$_FILES["profile_picture"]["name"];

    $first_name					=			clean_input(ucwords($_POST['first_name']));
    $last_name					=			clean_input(ucwords($_POST['last_name']));
    $phone_number				=			clean_input($_POST['phone_number']);
    $address			        =			clean_input($_POST['address']);
    $email_address				=			clean_input($_POST['email_address']);
    $password					=			$_POST['password']; 
    $password_2					=			$_POST['password_2']; 
      
     


    $_SESSION["first_name"]					=			clean_input(ucwords($_POST['first_name']));
    $_SESSION["last_name"]					=			clean_input(ucwords($_POST['last_name']));
    $_SESSION["phone_number"]				=			clean_input($_POST['phone_number']);
    $_SESSION["address"]			        =			clean_input($_POST['address']);
    $_SESSION["email_address"]				=			clean_input($_POST['email_address']);




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
         $_SESSION["address_Error"]				.=	"&#183; Address is required <br/>";		
    }		
    
  

    
    //VALIDATE email_address
    $_SESSION["email_address_Error"]					 =	""; 
    
    $check_email										 =	mysqli_query($conn,"SELECT * FROM users WHERE email_address='$email_address'");
    
    if(mysqli_num_rows($check_email)>0){
        $_SESSION["email_address_Error"]				.=	"&#183; Email Address Alrady Exist <br/>";
    }

    if(empty($email_address))
    {
         $_SESSION["email_address_Error"]				.=	"&#183; Email Address is required <br/>";		
    }
            
    if (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["email_address_Error"]				.=	"&#183; Invalid email format <br/>";
      }
    

    //VALIDATE password
    $_SESSION["password_Error"]					 		 =	""; 
    
    if(empty($password))
    {
         $_SESSION["password_Error"]						.=	"&#183; Password is required <br/>";		
    }
    
    if($password != $password_2)
    {
        $_SESSION["password_Error"]						.=	"&#183; Password Confirmation does not match <br/>";		
    }
    
    if(strlen($password) < 8)
    {
        $_SESSION["password_Error"]						.=	"&#183; Password must be more than 8 characters in length <br/>";		
    }
    
    
 
    //VALIDATE profile_picture
    $_SESSION["profile_picture_Error"]					=	"";

    $profile_picture_img_ext							=			pathinfo($profile_picture, PATHINFO_EXTENSION);
    $profile_picture_new								=			time().rand(1000,9000).".".$profile_picture_img_ext;

     

    if (!isset($_FILES['profile_picture'])) 
    {
         $_SESSION["profile_picture_Error"]				.=	"&#183; Profile Picture is required <br/>";		
    }

    $folder												=	"uploads/";
    $img_allowed_types									=	array('jpg','gif','png','bmp','jpeg','JPG','GIF','PNG','BMP','JPEG');
                        
    if(!in_array($profile_picture_img_ext, $img_allowed_types))
    {
        $_SESSION["profile_picture_Error"]				.=	"&#183; Profile Picture must be an Image file type <br/>";		
    }
        
    

     
      if(	!empty($_SESSION["first_name_Error"]) || 
            !empty($_SESSION["last_name_Error"]) || 
            !empty($_SESSION["phone_number_Error"]) || 
            !empty($_SESSION["address_Error"]) || 
            !empty($_SESSION["email_address_Error"]) || 
            !empty($_SESSION["password_Error"]) || 
            !empty($_SESSION["profile_picture_Error"])
            )
            {
                header("location: ?RegisterationErrorMsg=true");
            }
            else
            {
              move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $folder.$profile_picture);
            rename($folder.$profile_picture,$folder.$profile_picture_new);
            
            
            $password 									= 	password_hash($password, PASSWORD_DEFAULT);




            mysqli_query($conn,"INSERT INTO users	 SET 			profile_picture			=		'$profile_picture_new',
                                                                    first_name				=		'$first_name', 
                                                                    last_name				=		'$last_name', 
                                                                    phone_number			=		'$phone_number', 																		
                                                                    address		            =		'$address', 
                                                                    email_address			=		'$email_address', 
                                                                    password				=		'$password'") or die(mysqli_error($conn));
            
            session_destroy();				
            $success_message	=	"Registration Completed, You can now login!";														
            header("location: login.php?LoginAlert=$success_message");
                                                                    
                                                                    
            }
     
  
		 
  }
  
  
  
  
  
  
  ?>