<?php 
	$news_query = "SELECT * FROM `news`";
	$news_result = mysqli_query($connection,$news_query);
?>
<div class="pg-opt pin">
    <div class="container">
    
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h2 class="h-green">IT NEWS</h2>
            </div>
            <div class="col-md-6 col-sm-6">
                <ol class="breadcrumb">
                    <li><a href="<?php echo $prefix; ?>/home/">صفحه اصلی</a></li>
                    <li class="active"> اخبار فناوری اطلاعات(IT)</li>
                </ol>
            </div>
        </div>
        <hr>
    </div>
</div>

<div class="container" dir="rtl">
	<div class="col-lg-12" style="font-size:18px; ">
		<h2>آخرین اخبار فناوری اطلاعات (IT)</h2>
		<ul style="list-style:none; color:black important;">
        	<?php 
				while($news_row = mysqli_fetch_assoc($news_result)){
					$timeago = date('c',$news_row['date']);
		  			$news_date = jdate('Y/m/d',$news_row['date']);
					
					echo "
						<li><i class='fa fa-newspaper-o'></i><a href='$prefix/news/$news_row[id]/'> $news_row[title]  
						(<span class='timeago' title='$timeago'>($news_date)</span>)</a></li>
						";
					
					}
			?>
			
            
            
		</ul>
	</div>  
</div>
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