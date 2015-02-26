<div class="pg-opt pin">
    <div class="container">
    
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h2 class="h-green">Articles</h2>
            </div>
            <div class="col-md-6 col-sm-6">
                <ol class="breadcrumb">
                    <li><a href="?page=home">صفحه اصلی</a></li>
                    <li class="active">مقالات</li>
                </ol>
            </div>
        </div>
        <hr>
    </div>
</div>

<div class="container" dir="rtl">
	<div class="col-lg-12" style="font-size:18px; ">
		<h2>مقالات طراحی وب سایت</h2>
		<ul style="list-style:none; color:black important;">
			<li><a class="exo" href="index.php?page=article&article=4"><span class="fa fa-book"></span>&nbsp;&nbsp; AngularJS</a></li>
			<li><a class="exo" href="index.php?page=article&article=3"><span class="fa fa-book"></span>&nbsp;&nbsp; اصول طراحی سایت</a></li>
			<li><a class="exo" href="index.php?page=article&article=2"><span class="fa fa-book"></span>&nbsp;&nbsp;  عناصر مهم در طراحی سایت</a></li>
			<li><a class="exo" href="index.php?page=article&article=1"><span class="fa fa-book"></span>&nbsp;&nbsp;  تأثیر طراحی سایت واکنشی یا “Responsive”بر سئو</a></li>		
            <li><a class="exo" href="index.php?page=article&article=5"><span class="fa fa-book"></span>&nbsp;&nbsp;  W3C و معتبر سازی کدها</a></li>
            <li><a class="exo" href="index.php?page=article&article=5"><span class="fa fa-book"></span>&nbsp;&nbsp; CSS3 نسل جدیدی از CSS</a></li>
            
            
		</ul>
	</div>  
</div>
<hr>
<div class="container">
	<div class="wp-example" id="images-text">  
      <div class="slice para">
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
<?php
if(isset($_GET['article'])){
	include($_GET['article'].'.php');
	}