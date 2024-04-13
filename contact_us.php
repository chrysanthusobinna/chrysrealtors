<?php 
include("set.php"); 
include("header.php"); 

?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="page-name">
            <h1>Contact Us</h1>
            <ul>
                <li><a href="index.php">Index</a></li>
                <li><span>/</span>Contact Us</li>
            </ul>
        </div>
    </div>
</div>

<!-- Contact 1 start -->
<div class="contact-1 content-area-5">
    <div class="container">
        <div class="row">
            <div class=" col-lg-4 col-md-5">
                <div class="contact-info">
                    <h3 class="heading">Find Us There</h3>
                    <p>Have a question, feedback, or need assistance? We're here to help! Get in touch with us using the information below or fill out the contact form, and we'll get back to you as soon as possible.</p>
                    <div class="media">
                        <i class="flaticon-technology-1"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Phone:</h5>
                            <p><a href="tel:<?php echo $company_phonenumber; ?>"><?php echo $company_phonenumber; ?></a></p>
                        </div>
                    </div>
                    <div class="media">
                        <i class="flaticon-envelope"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Email:</h5>
                            <p><a href="mailto:<?php echo $company_emailaddress; ?>"><?php echo $company_emailaddress; ?></a></p>
                        </div>
                    </div>
                    <div class="media">
                        <i class="flaticon-location"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Address:</h5>
                            <p><a href="#"><?php echo $company_address; ?></a></p>
                        </div>
                    </div>
       
                </div>
            </div>
            <div class="offset-lg-1 col-lg-7 col-md-7 ">
                <h3 class="heading">Contact Form</h3>
                <form action="#" method="GET" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group name">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group email">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group number">
                                <input type="text" name="phone" class="form-control" placeholder="Number">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group message">
                                <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="send-btn">
                                <button type="submit" class="btn btn-md button-theme">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Google map start -->
<div class="section">
    <div class="map">
        <div id="contactMap" class="contact-map"></div>
    </div>
</div>


<?php include("footer.php"); ?>