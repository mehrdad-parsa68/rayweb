
<div class="pg-opt pin">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Videos</h2>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><a href="<?php echo $prefix; ?>/home/">صفحه اصلی</a></li>
                    <li class="active">ویدئو های آموزشی</li>
                </ol>
            </div>
        </div>
        <hr>
    </div>
</div>
    
<section class="slice bg-3 animate-hover-slide">
    <div class="w-section inverse work">
        <div class="container">
            <!--<div class="row">
                <div class="col-md-12">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-menu">دسته بندی پروژه ها</button>
                        <button type="button" class="btn btn-menu dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu" id="ulFilterMenu">
                            <li class="filter active" data-filter="all"><a>نمایش همه</a></li>
                            <li class="filter" data-filter="category_1"><a>شرکتی</a></li>
                            <li class="filter" data-filter="category_2"><a>شخصی</a></li>
                            <li class="filter" data-filter="category_3"><a>فروشگاهی</a></li>
                            <li class="filter" data-filter="category_4"><a>هنری</a></li>
                            <li class="filter" data-filter="category_5"><a>سرمایه گذاری</a></li>
                            <li class="filter" data-filter="category_6"><a>پرتال</a></li>
                        </ul>
                    </div>
                </div>
            </div>-->
            
            <div class="row">          
                <div id="ulSorList">
					
                    
                   <?php 
				   $videos_query = "SELECT * FROM `videos` ORDER BY RAND()";
				   $videos_result = mysqli_query($connection,$videos_query);
				   while($videos_row = mysqli_fetch_assoc($videos_result)){
					   /*$cat = $sample_row['project_type'];
					   
					   switch ($cat) {
						case 'شرکتی':
							$cat = 1;
							break;
						case 'شخصی':
							$cat = 2;
							break;
						case 'فروشگاهی':
							$cat = 3;
							break;
						case 'هنری':
							$cat = 4;
							break;
						case 'سرمایه گذاری':
							$cat = 5;
							break;
						case 'پرتال':
							$cat = 6;
							break;
					}*/
					$videos_row['description'] = substr($videos_row['description'],0,300);
					$videos_row['description'] = $videos_row['description'].' ...';
				
		
					   echo"
						<div class='mix category_cat col-lg-4 col-md-4 col-sm-6' data-cat='cat'>
							<div class='w-box inverse'>
								<div class='figure'>
									<img alt='$videos_row[name]' src='".$prefix."/images/video_images/$videos_row[image1]' class='img-responsive'>
									<div class='figcaption bg-2'></div>
									<div class='figcaption-btn'>
										<a href='".$prefix."/video/".$videos_row['id']."/' target='_blank' class='btn btn-xs btn-one'><i class='fa fa-link'></i> مشاهده و دانلود</a>
									</div>
								</div>
								<div class='row'>
									<div class='text-center'>
										<a href='".$prefix."/video/".$videos_row['id']."/' target='_blank' style='color:#2A6496'><h4>$videos_row[name]</h4></a>
										<small style='padding:10px;'>$videos_row[description]</small>
									</div>
									
								</div>
							</div>
						</div>";
				   }
                    ?>
                     
                    <div class="gap"></div>
                </div>
                                
            </div>
        </div>
    </div>
</section>
<hr>
<div class="container">
	<div class="wp-example" id="images-text">  
      <div class="slice para" style="background-image: url('/images/prv/para.jpg') !important;">
          <div class="w-section inverse">
              <div class="row">
                  <div class="col-md-12">
                      <div class="text-center">
                          <h4><i class="fa fa-quote-left fa-3x"></i></h4>
                          <h2>آینده چیزی نیست که انسان به ارث ببرد ؛ بلکه چیزی است که خود آن را می سازد</h2>
                          <p>
                              گابریل گارسیا مارکز
                          </p>
                          <span class="clearfix"></span> 
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>