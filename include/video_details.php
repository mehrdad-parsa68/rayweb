<?php 

	$video_id = $_GET['project_address'];
	
	$video_query = "SELECT videos.id AS video_id, videos.name, videos.lecturer_id, videos.description, videos.size, videos.time, videos.stat, videos.image1, videos.image2, videos.image3, videos.register_date, lecturer.id, lecturer.full_name FROM `videos` 
	INNER JOIN `lecturer` ON lecturer.id = videos.lecturer_id WHERE videos.id = '$video_id' LIMIT 1";
	
	$video_result = mysqli_query($connection,$video_query);
	$video_row = mysqli_fetch_assoc($video_result);
?>
<div class="pg-opt pin">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2>video</h2>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo $prefix; ?>/home/">صفحه اصلی</a></li>
                        <li class="active">ویدئو آموزشی</li>
                    </ol>
                </div>
            </div>
            <hr>
        </div>
    </div>
    
    <section class="slice bg-3">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                	<div class="col-md-6">
                    	<section id="homepageCarousel" class="carousel carousel-1 slide color-two-l" data-ride="carousel">
                                        <div class="carousel-inner">
                                              
                                            <div class="item item-dark active" style="background-image:url(<?php echo $prefix; ?>/images/video_images/<?php echo $video_row['image1']; ?>);">
                                                <div class="container">
                                                    <div class="description fluid-center">
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div> 
                                            <div class="item item-light" style="background-image:url(<?php echo $prefix; ?>/images/video_images/<?php echo $video_row['image2']; ?>);">
                                                <div class="container">
                                                    <div class="description">
                                                        
                                                    </div>
                                                    <div class="object">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="item item-light" style="background-image:url(<?php echo $prefix; ?>/images/video_images/<?php echo $video_row['image3']; ?>);">
                                                <div class="container">
                                                    <div class="description">
                                                        
                                                    </div>
                                                    <div class="object">
                                                        
                                                    </div>
                                                </div>
                                            </div>       
                                        </div>
                                        
                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#" data-slide="prev">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="right carousel-control" href="#" data-slide="next">
                                            <i class="fa fa-angle-right"></i>
                                        </a>     
                                        
                                    </section>
                                    <br>
                                    <div class="text-center">
                                        	<input type="submit" name="mosuavi" class="btn btn-two btn-lg" value="دانلود ویدئو">
                                            <p align="center">دفعات دانلود : <?php echo $video_row['stat']; ?></p>
                                        </div>
                    </div>
                    <div class="col-md-6">
						<h4>نام ویدئو :</h4><h5><?php echo $video_row['name']; ?></h5>
                        <hr>
                        <h4>نام مدرس :</h4><h5><?php echo $video_row['full_name']; ?></h5>
                        <hr>
                        <h4>درباره ویدئو :</h4><h5 align="justify"><?php echo $video_row['description']; ?></h5>
                        <hr>
                        <h4>حجم ویدئو :</h4><h5><?php echo $video_row['size']; ?> مگابایت</h5>
                        <hr>
                        <h4>زمان ویدئو :</h4><h5><?php echo $video_row['time']; ?></h5>
                        <hr>
                        <h4>برچسب های ویدئو :</h4><div class="itemTags">
                        	<ul class="tags">
                            	<li><a href="#">php</a></li>
                                <li><a href="#">mysqli</a></li>
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    <section class="slice relative bg-5 animate-hover-slide">
        <div class="w-section inverse">
            <div class="container">
                <h3 class="section-title">ویدئو های مشابه</h3>
                <div id="carouselWork" class="carousel-3 slide animate-hover-slide">
                    <div class="carousel-nav">
                        <a data-slide="prev" class="left color-two" href="#"><i class="fa fa-angle-left"></i></a>
                        <a data-slide="next" class="right color-two" href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                            <div class="col-md-3">
                                    <div class="w-box inverse">
                                        <div class="figure">
                                            <img alt="" src="<?php echo $prefix; ?>/images/samples/barincard.jpg" class="img-responsive">
                                            <div class="figcaption bg-2"></div>
                                            <div class="figcaption-btn">
                                               
                                                <a href="<?php echo $prefix; ?>/works/vistagroups/" class="btn btn-xs btn-one"><i class="fa fa-link"></i> دانلود ویدئو</a>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-xs-12">
                                                <h3>ویدئو اول</h3>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div><div class="col-md-3">
                                    <div class="w-box inverse">
                                        <div class="figure">
                                            <img alt="" src="<?php echo $prefix; ?>/images/samples/ano.jpg" class="img-responsive">
                                            <div class="figcaption bg-2"></div>
                                            <div class="figcaption-btn">
                                                <a href="<?php echo $prefix; ?>/works/vistagroups/" class="btn btn-xs btn-one"><i class="fa fa-link"></i> دانلود ویدئو</a>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-xs-12">
                                                <h3>ویدئو دوم</h3>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div><div class="col-md-3">
                                    <div class="w-box inverse">
                                        <div class="figure">
                                            <img alt="" src="<?php echo $prefix; ?>/images/samples/atieh.jpg" class="img-responsive">
                                            <div class="figcaption bg-2"></div>
                                            <div class="figcaption-btn">
                                            <a href="<?php echo $prefix; ?>/works/vistagroups/" class="btn btn-xs btn-one"><i class="fa fa-link"></i> دانلود ویدئو</a>
                                                
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-xs-12">
                                                <h3>ویدئو سوم</h3>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div><div class="col-md-3">
                                    <div class="w-box inverse">
                                        <div class="figure">
                                            <img alt="" src="<?php echo $prefix; ?>/images/samples/tadbir_small.jpg" class="img-responsive">
                                            <div class="figcaption bg-2"></div>
                                            <div class="figcaption-btn">
                                             
                                                <a href="<?php echo $prefix; ?>/works/vistagroups/" class="btn btn-xs btn-one"><i class="fa fa-link"></i> دانلود ویدئو</a>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-xs-12">
                                                <h3>ویدئو چهارم</h3>
                                                
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
                
            </div>
        </div>
    </section>
    
    
    
