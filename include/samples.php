
<div class="pg-opt pin">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Works</h2>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><a href="<?php echo $prefix; ?>/home/">صفحه اصلی</a></li>
                    <li class="active">نمونه کارها</li>
                </ol>
            </div>
        </div>
        <hr>
    </div>
</div>
    
<section class="slice bg-3 animate-hover-slide">
    <div class="w-section inverse work">
        <div class="container">
            <div class="row">
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
            </div>
            
            <div class="row">          
                <div id="ulSorList">
					
                    
                   <?php 
				   $sample_query = "SELECT * FROM `project` ORDER BY RAND()";
					$sample_result = mysqli_query($connection,$sample_query);
				   while($sample_row = mysqli_fetch_assoc($sample_result)){
					   $cat = $sample_row['project_type'];
					   
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
					}
					
					$project_address = filterName($sample_row['project_address']);
		
					   echo"
						<div class='mix category_$cat col-lg-4 col-md-4 col-sm-6' data-cat='$cat'>
							<div class='w-box inverse'>
								<div class='figure'>
									<img alt='طراحی وب سایت' src='".$prefix."/images/samples/$sample_row[project_image]' class='img-responsive'>
									<div class='figcaption bg-2'></div>
									<div class='figcaption-btn'>
										<a href='$sample_row[project_address]' target='_blank' class='btn btn-xs btn-one theater'><i class='fa fa-plus-circle'></i> ورود به سایت</a>
										<a href='".$prefix."/works/$project_address/' target='_blank' class='btn btn-xs btn-one'><i class='fa fa-link'></i> مشخصات سایت</a>
									</div>
								</div>
								<div class='row'>
									<div class='text-center'>
										<h3>$sample_row[project_name]</h3>
										<h1 class='h1-font'>$sample_row[project_service]</h1>
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