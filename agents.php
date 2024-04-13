<?php
include("set.php"); 
include("header.php"); 

?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="page-name">
            <h1>Agents</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><span>/</span>Agents</li>
            </ul>
        </div>
    </div>
</div>

<!-- Our team 4 start -->
<div class="our-team-4 content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="option-bar">
                    <div class="float-left">
                        <h4>
                            <span class="heading-icon">
                                <i class="fa fa-th-list"></i>
                            </span>
                            <span class="title-name">Agent List</span>
                        </h4>
                    </div>
                    <div class="float-right cod-pad">
                        <div class="sorting-options">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">

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
					
					$numrows=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users"));
					
					$totalpages=ceil($numrows/$rowsperpage);
					if($currentpage>$totalpages)
					{
					$currentpage=$totalpages;
					}
					if($currentpage<1)
					{
					$currentpage=1;
					}
					
					$query2=mysqli_query($conn,"SELECT * FROM users ORDER BY id DESC LIMIT $offset, $rowsperpage");
					
					$num=mysqli_num_rows($query2);
					if($num==0)
					{
					echo"<div class='alert alert-warning' role='alert'>  NO RECORD FOUND  </div>";
					}
					else {

					?>

<?php


                        while($row_users=mysqli_fetch_array($query2))
                        {
                        $id						                =           $row_users['id'];
                        $profile_picture						=			$row_users['profile_picture'];
                        $first_name								=			$row_users['first_name'];
                        $last_name								=			$row_users['last_name'];
                        $phone_number							=			$row_users['phone_number'];
                        $user_address   						=			$row_users['address'];
                        $email_address							=			$row_users['email_address'];
    
?>


                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="row team-4">
                                            <div class="col-xl-5 col-lg-5 col-md-12 col-pad ">
                                                <div class="photo">
                                                    <img src="uploads/<?php echo $profile_picture; ?>"  style="height: 268px; height: 230px;" alt="agent" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-lg-7 col-md-12 col-pad align-self-center">
                                                <div class="detail">
                                                    <h5>Creative Director</h5>
                                                    <h4>
                                                        <a href="#"><?php echo $first_name." ".$last_name; ?></a>
                                                    </h4>

                                                    <div class="contact">
                                                        <ul>
                                                            <li>
                                                                <span>Address:</span><a > <?php echo $user_address; ?>,</a>
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

                                    <?php } }  ?>				  




        </div>



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

<?php include("footer.php"); ?>