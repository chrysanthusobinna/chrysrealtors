<?php
include("set.php"); 
include("header.php");
include("functions.php");



	 

            if(isset($_GET['q_bedroom']) && isset($_GET['q_bathroom']) && isset($_GET['q_address'])) 
            {

                $q_bedroom              =           mysqli_real_escape_string($conn, $_GET['q_bedroom']);
                $q_bathroom             =           mysqli_real_escape_string($conn, $_GET['q_bathroom']);
                $q_address              =           mysqli_real_escape_string($conn, $_GET['q_address']);



          

                    // Output the built query
                    $db_query		=	"WHERE status = '1' AND	bedroom = '$q_bedroom'    AND     bathroom = '$q_bathroom'  AND address LIKE '%$q_address%'";
                    

            }
            else
            {
                    $db_query		=	" WHERE status = '1' 	 "; 
                    
            }
            



?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="page-name">
            <h1>Property Listing </h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><span>/</span>Property Listing  </li>
            </ul>
        </div>
    </div>
</div>

<!-- Properties section body start -->
<div class="properties-section-body content-area">
    <div class="container">
        <div class="row">
            <div class="offset-lg-1 col-lg-10">
                <!-- Option bar start -->
                <div class="option-bar">
                    <div class="float-left">
                        <h4>
                            <span class="heading-icon">
                                <i class="fa fa-th-list"></i>
                            </span>
                            <span class="title-name">All Properties</span>
                        </h4>
                    </div>
                    <div class="float-right cod-pad">
                
                    </div>
                </div>



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
					
					$numrows=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM properties $db_query"));
					
					$totalpages=ceil($numrows/$rowsperpage);
					if($currentpage>$totalpages)
					{
					$currentpage=$totalpages;
					}
					if($currentpage<1)
					{
					$currentpage=1;
					}
					
					$query2=mysqli_query($conn,"SELECT * FROM properties $db_query ORDER BY id DESC LIMIT $offset, $rowsperpage");
					
					$num=mysqli_num_rows($query2);
					if($num==0)
					{
					echo"<div class='alert alert-warning' role='alert'>  NO RECORD FOUND  </div>";
					}
					else {

					?>



                        <?php


                        while($row_properties=mysqli_fetch_array($query2))
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

                        <!-- Property box 2 start -->
                        <div class="property-box-2">
                            <div class="row">
                                <div class="col-lg-4 col-md-5 col-pad">
                                    <a href="properties_details.php?id=<?php echo $id; ?>" class="property-img">
                                        <img src="property_pics/<?php echo $pic_1; ?>" alt="properties" class="img-fluid">
                                        <div class="listing-badges">
                                            <span class="featured">Featured</span>
                                            <span class="listing-time">For Sale</span>
                                        </div>
                                        <div class="price-box"><?php echo $currency." ".number_format($price); ?></div>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-7 col-pad">
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="properties_details.php?id=<?php echo $id; ?>"> <?php echo $title; ?></a>
                                        </h3>
                                        <p class="location">
                                            <a href="properties_details.php?id=<?php echo $id; ?>"> <i class="flaticon-location"></i><?php echo $address; ?>  </a>
                                        </p>
 


                                        <p class="location">
                                            <a href="properties_details.php?id=<?php echo $id; ?>"> <i class="flaticon-holidays"></i><?php echo $bathroom ." ". pluralize($bathroom, 'Bathroom','Bathrooms') ; ?>   </a>    |   
                                            <a href="properties_details.php?id=<?php echo $id; ?>"> <i class="flaticon-furniture"></i><?php echo $bedroom ." ". pluralize($bedroom, 'Bed','Beds') ; ?> </a>
                                        </p>


                  
                                    </div>


                                    
                                    <div class="footer clearfix">
                                        <div class="pull-left days">
                                           <!-- <a><i class="flaticon-time"></i> 5 Days ago</a> -->
                                        </div>
                                        <div class="pull-right">
                                             <a><i class="fa fa-user"></i> <?php echo $first_name." ".$last_name; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php } }  ?>				  
  
                        
   
                       <?php  if(isset($_GET['q_bedroom']) && isset($_GET['q_bathroom']) && isset($_GET['q_address'])){ ?>

                        <hr/>
                        <center>
                        <button type="button" onclick  = "window.location='?';" class="btn btn-primary">Show All Properties</button>
                       </center>
                      <hr/>


                        <?php } ?>
       


                <?php if($num > 0) { ?> 

                <!-- Page navigation start -->
                <div class="pagination-box hidden-mb-45 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">


                        <?php

                            if($currentpage>1)
                                {

                                echo"<li class='page-item'>  <a class='page-link' href='$self?id=$id&currentpage=1'> <i class='fa fa-angle-left'></i><i class='fa fa-angle-left'></i> </a>  </li>";
                           
                                $prevpage	=	$currentpage-1;

                                echo"<li class='page-item'>  <a class='page-link' href='$self?id=$id&currentpage=$prevpage'><i class='fa fa-angle-left'></i></a>  </li>";

                                }
                            for($x=($currentpage-$range); $x<(($currentpage+$range)+1); $x++)
                            {
                            if(($x>0) &&($x<=$totalpages))
                            {
                                if($x==$currentpage)
                                {
                                 echo "<li class='page-item'><a class='page-link active' href=''>$x</a></li>";

                                }
                                else
                                {
                                echo "<li class='page-item'><a class='page-link' href='$self?id=$id&currentpage=$x'>$x</a></li>";

                                }
                            } }
                            if($currentpage!=$totalpages)
                                {
                                $nextpage=$currentpage+1;
                           
                                
                                echo "<li class='page-item'> <a class='page-link' href='$self?id=$id&currentpage=$nextpage'><i class='fa fa-angle-right'></i></a>  </li>";
                                echo "<li class='page-item'> <a class='page-link' href='$self?id=$id&currentpage=$totalpages'> <i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i> </a>  </li>";

                                }


                                ?>

                            <!--
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            -->

                        </ul>
                    </nav>
                </div>

				<?php } ?>


            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>