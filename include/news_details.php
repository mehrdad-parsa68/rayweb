<?php 
	$new_id = $_GET['project_address'];
	$news_query = "SELECT * FROM `news` WHERE id = '$new_id' LIMIT 1";
	$article_result = mysqli_query($connection,$news_query);
	$news_row = mysqli_fetch_assoc($news_result);
	
	
	$tags = '';
	$tag_query = "SELECT tags.id,tags.name,tags_articles.article_id,tags_articles.tag_id FROM tags 
				INNER JOIN tags_articles ON tags.id = tags_articles.tag_id 
									WHERE tags_articles.article_id = '$article_id' ;";
	$tag_result = mysqli_query($connection,$tag_query);
	while($tag_row = mysqli_fetch_assoc($tag_result)){
		$tags .= "<li><a href='".$prefix."/tags/".$tag_row['name']."/' target='_blank' >$tag_row[name]</a></li> ";
		}
		
		
	// stat query
	$stat = $article_row['stat'] + 1;
	$stat_query = "UPDATE `articles` SET `stat`='$stat' WHERE id = '$article_id' ; ";
	mysqli_query($connection,$stat_query);
?>
<div class="pg-opt pin">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h1 class="h1-small"><?php echo $news_row['title'] ?></h1>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ol class="breadcrumb">
                        <li><a href="/home/">صفحه اصلی</a></li>
                        <li class="active">اخبار فناوری اطلاعات (IT)</li>
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
                	<div class="container article">
                    	<p>
                    	<?php echo $news_row['description'];?>    
                        </p>   
                      <div>
                            <p align="right">تعداد مشاهده : <?php echo $article_row['stat']; ?></p>
                             <p>برچسب های مقاله :</p><div class="itemTags">
                        	<ul class="tags">
                            	<?php echo $tags ?>
                            </ul>
                        </div>
                      </div>
                    </div>
                   
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    <section class="slice relative bg-5 animate-hover-slide">
        <div class="w-section inverse">
            <div class="container">
                <h3 class="section-title">مقالات مشابه</h3>
                <div id="carouselWork" class="carousel-3 slide animate-hover-slide">
                    <div class="carousel-nav">
                        <a data-slide="prev" class="left color-two" href="#carouselWork"><i class="fa fa-angle-left"></i></a>
                        <a data-slide="next" class="right color-two" href="#carouselWork"><i class="fa fa-angle-right"></i></a>
                    </div>
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                            <div class="col-md-3">
                                    <div class="w-box inverse">
                                        <div class="figure">
                                            <img alt="" src="/images/samples/barincard.jpg" class="img-responsive">
                                            <div class="figcaption bg-2"></div>
                                            <div class="figcaption-btn">
                                               
                                                <a href="/works/vistagroups/" class="btn btn-xs btn-one"><i class="fa fa-link"></i> دانلود ویدئو</a>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-xs-12">
                                                <h3>مقاله اول</h3>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div><div class="col-md-3">
                                    <div class="w-box inverse">
                                        <div class="figure">
                                            <img alt="" src="/images/samples/ano.jpg" class="img-responsive">
                                            <div class="figcaption bg-2"></div>
                                            <div class="figcaption-btn">
                                                <a href="/works/vistagroups/" class="btn btn-xs btn-one"><i class="fa fa-link"></i> دانلود ویدئو</a>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-xs-12">
                                                <h3>مقاله دوم</h3>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div><div class="col-md-3">
                                    <div class="w-box inverse">
                                        <div class="figure">
                                            <img alt="" src="/images/samples/atieh.jpg" class="img-responsive">
                                            <div class="figcaption bg-2"></div>
                                            <div class="figcaption-btn">
                                            <a href="/works/vistagroups/" class="btn btn-xs btn-one"><i class="fa fa-link"></i> دانلود ویدئو</a>
                                                
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-xs-12">
                                                <h3>مقاله سوم</h3>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div><div class="col-md-3">
                                    <div class="w-box inverse">
                                        <div class="figure">
                                            <img alt="" src="/images/samples/tadbir_small.jpg" class="img-responsive">
                                            <div class="figcaption bg-2"></div>
                                            <div class="figcaption-btn">
                                             
                                                <a href="/works/vistagroups/" class="btn btn-xs btn-one"><i class="fa fa-link"></i> دانلود ویدئو</a>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-xs-12">
                                                <h3>مقاله چهارم</h3>
                                                
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
    
    
    
