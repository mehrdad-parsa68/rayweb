<?php
	$id = $_GET['id'];
	$project_query = "SELECT * FROM `project` WHERE `id`='$id'";
	$project_result = mysqli_query($connection,$project_query);
	$project_row = mysqli_fetch_assoc($project_result);
?>


<div class="pg-opt pin">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><?php echo $project_row['project_name']; ?></h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="http://www.rayweb.ir/<?php echo convert($connection,"home"); ?>/">صفحه اصلی</a></li>
                        <li><a href="http://www.rayweb.ir/<?php echo convert($connection,"sample"); ?>/">نمونه کارها</a></li>
                        <li class="active">اطلاعات سایت</li>
                    </ol>
                </div>
                
            </div>
        </div>
    </div>
    
    <section class="slice bg-3">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        
                                <div class="item item-dark active">
                                    <img src="images/samples/detail/<?php echo $project_row['detail_image']; ?>" alt="" class="img-responsive">
                                </div>
                           
                    </div>
                    <div class="col-md-6">
                        <div class="vertical-info">
                            <h4>موضوع سایت</h4>
                            <p class="delimiter">
                            <?php echo $project_row['project_type']; ?>
                            </p>
                            
                            <h4>مشتری</h4>
                            <p class="delimiter">
                            <?php echo $project_row['client']; ?> 
                            </p>
                            <h4>زمینه فعالیت</h4>
                            <p class="delimiter">
                            <?php echo $project_row['project_description']; ?>
                            </p>
                            
                            <h4>تکنولوژی های مورد استفاده</h4>
                            <p class="delimiter exo">
                            <?php echo $project_row['Technology']; ?> 
                            </p>
                            
                            <a target="_blank" href="<?php echo $project_row['project_address']; ?>">
                             	مشاهده سایت
                            </a>
                            
                            
                        </div>
                        <div style="height:20px;"></div>
                        
                        <h3 class="section-title">گواهی حسن انجام کار</h3>
                        <p>
                        <img src="images/confirmation/<?php echo $project_row['confirmation']; ?>" alt="" class="img-responsive">
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="slice relative bg-5 animate-hover-slide">
        <div class="w-section inverse">
            <div class="container">
                <h3 class="section-title">پروژه های مشابه</h3>
                <div id="carouselWork" class="carousel-3 slide animate-hover-slide">
                    <div class="carousel-nav">
                        <a data-slide="prev" class="left color-two" href="#carouselWork"><i class="fa fa-angle-left"></i></a>
                        <a data-slide="next" class="right color-two" href="#carouselWork"><i class="fa fa-angle-right"></i></a>
                    </div>
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                            <?php
							$same_query = "SELECT * FROM `project` WHERE `project_type`='$project_row[project_type]' LIMIT 0,4";
							
							$same_result = mysqli_query($connection,$same_query);
							
							
							while($same_row = mysqli_fetch_assoc($same_result)){
								
                                echo '<div class="col-md-3">
                                    <div class="w-box inverse">
                                        <div class="figure">
                                            <img alt="" src="images/samples/'.$same_row['project_image'].'" class="img-responsive">
                                            <div class="figcaption bg-2"></div>
                                            <div class="figcaption-btn">
                                                <a href="'.$same_row['project_address'].'" class="btn btn-xs btn-one theater"><i class="fa fa-plus-circle"></i> ورود به سایت</a>
                                                <a href="?page=sampledetail&id='.$same_row['id'].'" class="btn btn-xs btn-one"><i class="fa fa-link"></i> مشخصات سایت</a>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-xs-12">
                                                <h2>'.$same_row['project_name'].'</h2>
                                                <small>'.$same_row['project_service'].'</small>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>';
							}
								?>
                                
                                
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <?php
							$same_query = "SELECT * FROM `project` WHERE `project_type`='$project_row[project_type]' LIMIT 0,4";
							
							$same_result = mysqli_query($connection,$same_query);
							
							
							while($same_row = mysqli_fetch_assoc($same_result)){
								
                                echo '<div class="col-md-3">
                                    <div class="w-box inverse">
                                        <div class="figure">
                                            <img alt="" src="images/samples/'.$same_row['project_image'].'" class="img-responsive">
                                            <div class="figcaption bg-2"></div>
                                            <div class="figcaption-btn">
                                                <a href="'.$same_row['project_address'].'" class="btn btn-xs btn-one theater"><i class="fa fa-plus-circle"></i> ورود به سایت</a>
                                                <a href="?page=sampledetail&id='.$same_row['id'].'" class="btn btn-xs btn-one"><i class="fa fa-link"></i> مشخصات سایت</a>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-xs-12">
                                                <h2>'.$same_row['project_name'].'</h2>
                                                <small>'.$same_row['project_service'].'</small>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>';
							}
								?>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
   