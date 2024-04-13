<?php
include("set.php"); 
include("header.php"); 
include("functions.php");

?>

<!-- Banner start -->
<div class="banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height item-bg active">
                <img class="d-block w-100 h-100" src="img/banner/banner-4.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <div class="text-sections">
                                <h3 class="text-uppercase">WELCOME TO <?php echo $company_name; ?></h3>
                                <p>Allow us to guide you through the innovative stress free approach in finding your dream Properties.</p>
                            </div>
                            <div class="btn-sections">
                                <a href="properties.php" class="btn btn-lg btn-theme">Get Started Now</a>
                                <a href="about_us.php" class="btn btn-lg btn-white-lg-outline">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="img/banner/banner-3.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                    <div class="text-center">
                            <div class="text-sections">
                                <h3 class="text-uppercase">WELCOME TO <?php echo $company_name; ?></h3>
                                <p>Allow us to guide you through the innovative stress free approach in finding your dream Properties.</p>
                            </div>
                            <div class="btn-sections">
                                <a href="properties.php" class="btn btn-lg btn-theme">Get Started Now</a>
                                <a href="about_us.php" class="btn btn-lg btn-white-lg-outline">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="img/banner/banner-1.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                    <div class="text-center">
                            <div class="text-sections">
                                <h3 class="text-uppercase">WELCOME TO <?php echo $company_name; ?></h3>
                                <p>Allow us to guide you through the innovative stress free approach in finding your dream Properties.</p>
                            </div>
                            <div class="btn-sections">
                                <a href="properties.php" class="btn btn-lg btn-theme">Get Started Now</a>
                                <a href="about_us.php" class="btn btn-lg btn-white-lg-outline">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#bannerCarousole" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
        </a>
        <a class="carousel-control-next" href="#bannerCarousole" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
        </a>
    </div>
</div>

<!-- Search Section start -->
<div class="search-section ss2 search-area-2 bg-grea">
 
    <div class="tab-content" id="carTabContent">
        <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
            <div class="s">
                <div class="container">
                    <div class="search-section-area">
                        <div class="search-area-inner">
                            <div class="search-contents">
                                <form method="GET" action="properties.php">
                                    <div class="row">
 
                          
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                                <select class="selectpicker search-fields" name="q_bedroom" required>
                                                    <option value="">Bedrooms</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                                <select class="selectpicker search-fields" name="q_bathroom" required>
                                                    <option value="">Bathrooms</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                                <div class="form-group email">
                                                    <input type="text" name="q_address" class="form-control search-fields" placeholder="Location" required>
                                                </div>
                                            </div>                                

                                        </div>
                          
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="form-group">
                                                <button class="search-button" type="submit">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Featured properties start -->
<div class="featured-properties content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Featured Properties</h1>
            <p>Explore our curated selection of premier properties. Discover exceptional listings tailored to suit your every need.</p>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>

 

            <?php


                        
                $query_properties=mysqli_query($conn,"SELECT * FROM properties  WHERE status = '1'  order by rand() desc LIMIT 4") or die(mysqli_error($conn));

                if(mysqli_num_rows($query_properties) > 0)
                {
                    


                    while($row_properties=mysqli_fetch_array($query_properties))
                    {
                    
                        $id						=           $row_properties['id'];
                        $title					=           $row_properties['title'];
                        $price					=           $row_properties['price']; 
                        $pic_1					=           $row_properties['pic_1']; 

                        $user_id				=	        $row_properties['user_id'];
                        $address				=	        $row_properties['address'];
                        $price					=	        $row_properties['price'];
                        $bedroom				=	        $row_properties['bedroom'];
                        $bathroom				=	        $row_properties['bathroom'];
                        $description			=	        $row_properties['description'];
                        $refrence_no			=	        $row_properties['refrence_no'];
                            

                                $query_seller_user	=	mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM users WHERE id='$user_id'"));

                                $profile_picture						=			$query_seller_user['profile_picture'];
                                $first_name								=			$query_seller_user['first_name'];
                                $last_name								=			$query_seller_user['last_name'];
                                $phone_number							=			$query_seller_user['phone_number'];
                                $user_address   						=			$query_seller_user['address'];
                                $email_address							=			$query_seller_user['email_address'];
                        
?>	           
                <div class="slick-slide-item">
                    <div class="property-box-3">
                        <div class="property-thumbnail">
                            <a href="properties_details.php?id=<?php echo $id; ?>" class="property-img">
                                <div class="tag-2">For Rent</div>
                                <img style="height: 215px;" class="d-block w-100" src="property_pics/<?php echo $pic_1; ?>" alt="properties">
                                <div class="facilities-list">
                                    <ul>
                                        <li>
                                        <i class="flaticon-holidays"></i> <?php echo $bathroom ." ". pluralize($bathroom, 'Bathroom','Bathrooms') ; ?>
                                        </li>
                                        <li>
                                            &nbsp;
                                        </li>
                                        <li>
                                        <i class="flaticon-furniture"></i> <?php echo $bedroom ." ". pluralize($bedroom, 'Bed','Beds') ; ?>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="details">
                            <div class="top" style="height: 110px;">
                                <h1 class="title">
                                    <a href="properties_details.php?id=<?php echo $id; ?>"><?php echo $title; ?></a>
                                </h1>
 


                                <div class="location" >
                                    <a href="properties_details.php?id=<?php echo $id; ?>" tabindex="0">
                                        <i class="fa fa-map-marker"></i><?php echo $address; ?>
                                    </a> 
                                </div>
                            </div>
                            <div class="footer clearfix">
                                <div class="pull-left days">
                                    <p><?php echo $currency." ".number_format($price); ?></p>
                                </div>
                                <ul class="pull-right">
                                    <li><a href="#" tabindex="0"><i class="flaticon-favorite"></i></a></li>
                                    <li><a href="#" tabindex="0"><i class="flaticon-multimedia"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 

	
					
} 	} 


else { echo ("<div class='alert alert-warning' role='alert'>  NO RECORD FOUND  </div>");}
?>
            </div>
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>

<!-- Services 2 start -->
<div class="services-2 content-area-5 bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>What are you looking for?</h1>
            <p>Discover your perfect match amidst a wealth of options. Explore our diverse listings to find exactly what you're seeking.</p>
        </div>
        <div class="row wow">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="services-demo">
                    <img class="img-fluid" src="img/img-1.jpg" alt="properties">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="service-info-3">
                    <div class="icon">
                        <i class="flaticon-apartment"></i>
                    </div>
                    <div class="service-detail">
                        <h3>
                            Apartments
                        </h3>
                        <p>Experience urban living at its finest with our stunning selection of apartments. Find your ideal space that combines comfort, style, and convenience.</p>
                        <br/>
                    </div>
                </div>
                <div class="service-info-3">
                    <div class="icon">
                        <i class="flaticon-internet"></i>
                    </div>
                    <div class="service-detail">
                        <h3>
                            Shops
                        </h3>
                        <p>Unlock your entrepreneurial spirit with our prime selection of retail spaces. Explore vibrant locations tailored to elevate your business.</p>
                        <br/>
                   </div>
                </div>
 
                <div class="service-info-3 mb-0">
                    <div class="icon">
                        <i class="flaticon-coins"></i>
                    </div>
                    <div class="service-detail">
                        <h3>
                            Offices
                        </h3>
                        <p>Discover professional spaces crafted for your success. Explore our range of offices tailored to elevate your business ventures.</p>
                        <br/>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

 

<!-- Categories strat -->
<div class="categories content-area-8 bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Most Popular Places</h1>
            <p>Explore sought-after destinations where dreams meet reality. Discover the most coveted properties in our curated selection of prime locations.</p>
        </div>
        <div class="row wow">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-1-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">Manchester</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-2-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">Liverpool</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-6-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">Edinburgh</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-6 col-pad none-992">
                        <div class="category">
                            <div class="category_bg_box cat-3-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">London</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-5-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">Birmingham</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 
 
<!-- Testimonial 3 start -->
<div class="testimonial-3">
    <div class="container">
        <div class="main-title-2">
            <h1>Our Testimonial</h1>
            <p>Discover what our clients have to say about their experience with us. Explore testimonials showcasing our commitment to excellence in real estate.</p>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <div class="profile-user">
                                <div class="avatar">
                                    <img src="images/testimony_user.png" alt="testimonial-avatar" class="img-fluid">
                                </div>
                            </div>
                            <h5>
                                Eliane Perei
                            </h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                                <span>( 4.5 Reviews )</span>
                            </div>
                            <p>Thanks to the diligent team at <?php echo $company_name; ?>, I found my dream home effortlessly!</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <div class="profile-user">
                                <div class="avatar">
                                <img src="images/testimony_user.png" alt="testimonial-avatar" class="img-fluid">
                                </div>
                            </div>
                            <h5>
                                John Pitarshon
                            </h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                                <span>( 4.5 Reviews )</span>
                            </div>
                            <p>Kudos to <?php echo $company_name; ?> Agents for their expert guidance throughout the entire home-buying process.</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <div class="profile-user">
                                <div class="avatar">
                                <img src="images/testimony_user.png" alt="testimonial-avatar" class="img-fluid">
                                </div>
                            </div>
                            <h5>
                                Paul James
                            </h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                                <span>( 4.5 Reviews )</span>
                            </div>
                            <p>Incredible service from <?php echo $company_name; ?> made buying our new house a joyous experience.</p>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</div>

 
 
<?php
include("footer.php");
?>