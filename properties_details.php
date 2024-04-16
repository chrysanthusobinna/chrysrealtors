<?php
include("set.php"); 
include("header.php");
include("functions.php");




        if(!isset($_GET["id"])) { header("location: index.php?notif_err=Invalid Account ID!"); }
        $id		= $_GET["id"];
        $qry_properties=mysqli_query($conn,"SELECT * FROM properties WHERE id=$id");
        if(mysqli_num_rows($qry_properties)==0){ header("location: index.php?notif_err=Invalid Account ID!"); }

        $query_info=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM properties WHERE id='$id'"));


        $user_id						=			$query_info['user_id'];
        $title						    =			$query_info['title'];
        $address						=			$query_info['address'];
        $price						    =			$query_info['price'];
        $bedroom						=			$query_info['bedroom'];
        $bathroom						=			$query_info['bathroom'];
        $description					=			strip_tags($query_info['description']);
        $refrence_no					=			$query_info['refrence_no'];
        $pic_1						    =			$query_info['pic_1'];
        $pic_2						    =			$query_info['pic_2'];
        $pic_3						    =			$query_info['pic_3'];
        $pic_4						    =			$query_info['pic_4'];
        $pic_5						    =			$query_info['pic_5']; 
        
 
		if ($pic_1 == "NULL") {$pic_1 = "no_photo.png";}
		if ($pic_2 == "NULL") {$pic_2 = "no_photo.png";}
		if ($pic_3 == "NULL") {$pic_3 = "no_photo.png";}
		if ($pic_4 == "NULL") {$pic_4 = "no_photo.png";}
		if ($pic_5 == "NULL") {$pic_5 = "no_photo.png";}

 
            $query_seller_user	=	mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM users WHERE id='$user_id'"));
                
            $profile_picture						=			$query_seller_user['profile_picture'];
            $first_name								=			$query_seller_user['first_name'];
            $last_name								=			$query_seller_user['last_name'];
            $phone_number							=			$query_seller_user['phone_number'];
            $user_address   						=			$query_seller_user['address'];
            $email_address							=			$query_seller_user['email_address'];
        

?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="page-name">
            <h1>Properties Detail</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><span>/</span>Properties Detail</li>
            </ul>
        </div>
    </div>
</div>

<!-- Properties Details page start -->
<div class="properties-details-page content-area-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="properties-details-section">
                    <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-40">
                        <!-- Heading properties start -->
                        <div class="heading-properties-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <h3> <?php echo $title; ?></h3>
                                    </div>
                                    <div class="pull-right">
                                        <h3><span class="text-right"><?php echo $currency." ".number_format($price); ?></span></h3>
                                        <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item carousel-item" data-slide-number="0">
                                <img src="property_pics/<?php echo $pic_1; ?>" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="1">
                                <img src="property_pics/<?php echo $pic_2; ?>" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="2">
                                <img src="property_pics/<?php echo $pic_3; ?>" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="4">
                                <img src="property_pics/<?php echo $pic_4; ?>" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="5">
                                <img src="property_pics/<?php echo $pic_5; ?>" class="img-fluid" alt="slider-properties">
                            </div>
                        </div>
                        <!-- main slider carousel nav controls -->
                        <ul class="carousel-indicators smail-properties list-inline nav nav-justified">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                                    <img src="property_pics/<?php echo $pic_1; ?>" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">
                                    <img src="property_pics/<?php echo $pic_2; ?>" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-2" data-slide-to="2" data-target="#propertiesDetailsSlider">
                                    <img src="property_pics/<?php echo $pic_3; ?>" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-3" data-slide-to="3" data-target="#propertiesDetailsSlider">
                                    <img src="property_pics/<?php echo $pic_4; ?>" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-4" data-slide-to="4" data-target="#propertiesDetailsSlider">
                                    <img src="property_pics/<?php echo $pic_5; ?>" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                        </ul>
                        <!-- main slider carousel items -->
                    </div>
                    <!-- Advanced search start -->
                    <div class="widget-2 sidebar advanced-search-2">
                        <h3 class="sidebar-title">Advanced Search</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                       
                    </div>
                 
                    <!-- Properties condition start -->
                    <div class="properties-condition mb-40">
                    
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-furniture"></i><?php echo $bedroom ." ". pluralize($bedroom, 'Bed','Beds') ; ?> 
                                    </li>
                                    <li>
                                        &nbsp;
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        &nbsp;
                                    </li>
                                    <li>
                                        &nbsp;
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-holidays"></i><?php echo $bathroom ." ". pluralize($bathroom, 'Bathroom','Bathrooms') ; ?>
                                    </li>
                                    <li>
                                        &nbsp;
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr/>


                             <h4>About this property</h4>
                             <div style="text-align:justify;"><?php echo $description; ?></div>

           
   
                             <hr/>



                                <div class="row team-4 team-6">
                                        <div class="col-xl-5 col-lg-5 col-md-5 col-pad ">
                                            <div class="photo">
                                                <img src="uploads/<?php echo $profile_picture; ?>"  style="" alt="avatar-4" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-7 col-pad align-self-center">
                                            <div class="detail">
                                                <h5>Agent</h5>
                                                <h4>
                                                    <a href="#"><?php echo $first_name." ".$last_name; ?></a>
                                                </h4>

                                                <div class="contact">
                                                    <ul>
                                                        <li>
                                                            <span>Address:</span><a href="#"> <?php echo $user_address; ?></a>
                                                        </li>
                                                        <li>
                                                            <span>Email:</span><a href="mailto:<?php echo $email_address; ?>"> <?php echo $email_address; ?></a>
                                                        </li>
                                                        <li>
                                                            <span>Mobile:</span><a href="tel:<?php echo $phone_number; ?>"> <?php echo $phone_number; ?></a>
                                                        </li>
                                                 
                                                  
                                                    </ul>
                                                </div>

                                                <ul class="social-list clearfix">
                                                    <li><a href="mailto:<?php echo $email_address; ?>" class="facebook-bg"><i class="fa fa-envelope-o"></i></a></li>
                                                    <li><a href="https://wa.me/<?php echo $phone_number; ?>" class="twitter-bg"><i class="fa fa-whatsapp"></i></a></li>
                                                    <li><a href="tel:<?php echo $phone_number; ?>" class="google-bg"><i class="fa fa-phone"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>









           
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="sidebar widget advanced-search none-992">
                        <h3 class="sidebar-title"> <i class="fa fa-map-marker"></i> <?php echo $address; ?></h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <iframe src="https://maps.google.it/maps?q=<?php echo $car_location; ?>&output=embed"   height="350" style="width:100%;border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
             
               
     
                </div>
            </div>
        </div>
    </div>
</div>
 <?php

 include("footer.php"); 
 ?>