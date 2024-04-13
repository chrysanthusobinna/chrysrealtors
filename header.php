<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $company_name; ?></title>
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

<!-- Top header start -->
<header class="top-header top-header-bg none-992" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-7">
                <div class="list-inline">
                    <a href="tel:<?php echo $company_phonenumber; ?>"><i class="fa fa-phone"></i>Need Support? <?php echo $company_phonenumber; ?></a>
                    <a href="mailto:<?php echo $company_emailaddress; ?>"><i class="fa fa-envelope"></i><?php echo $company_emailaddress ; ?></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-5">
                <ul class="top-social-media pull-right">


                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Main header start -->
<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logos" href="index.php">
                <img src="img/logos/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav header-ml">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"    aria-haspopup="true" aria-expanded="false">
                            Home
                        </a>             
                    </li>
 
                    <li class="nav-item active">
                        <a class="nav-link" href="properties.php"    aria-haspopup="true" aria-expanded="false">
                            Properties
                        </a>             
                    </li>                   

 
                    <li class="nav-item active">
                        <a class="nav-link" href="agents.php"    aria-haspopup="true" aria-expanded="false">
                            Agents
                        </a>             
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="about_us.php"    aria-haspopup="true" aria-expanded="false">
                            About us
                        </a>             
                    </li>


                    <li class="nav-item active">
                        <a class="nav-link" href="contact_us.php"    aria-haspopup="true" aria-expanded="false">
                            Contact us
                        </a>             
                    </li>


                </ul>
                <ul class="navbar-nav ml-auto">

                    <?php 	if(isset($_SESSION["user"])) { ?>

                        <li class="nav-item">
                                <a href="users/" class="nav-link link-btn"><i class="fa fa-copy"></i> Dashboard</a>
                            </li>
                            
                            <li class="nav-item">
                                &nbsp;
                            </li> 
                            
                            <li class="nav-item">
                                <a href="users/logout.php" class="nav-link link-btn"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>


                    <?php } elseif(isset($_SESSION["admin"])) {?>


                        <li class="nav-item">
                                <a href="admin_/" class="nav-link link-btn"><i class="fa fa-user"></i> Admin Dashboard</a>
                            </li>
                            
                            <li class="nav-item">
                                &nbsp;
                            </li> 
                            
                            <li class="nav-item">
                                <a href="admin_/exit.php" class="nav-link link-btn"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>


                    <?php } else {?>


                            <li class="nav-item">
                                <a href="login.php" class="nav-link link-btn"><i class="fa fa-sign-in"></i> Login</a>
                            </li>
                            
                            <li class="nav-item">
                                &nbsp;
                            </li> 
                            
                            <li class="nav-item">
                                <a href="signup.php" class="nav-link link-btn"><i class="fa fa-user"></i> Register</a>
                            </li>


                    <?php } ?>


                </ul>
            </div>
        </nav>
    </div>
</header>