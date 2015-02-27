<?php
	require_once('core/core.php');
	
	
	function convert($connection,$latin_name){
		$query = "SELECT persian_name From pages WHERE latin_name = '$latin_name' ";
		$result = mysqli_query($connection , $query);
		$row = mysqli_fetch_assoc($result);
		$persian_name = str_replace(" ","-",$row['persian_name']);
		return $persian_name;
		}
		
	function convertToLatin($page,$connection){
		$page_get = str_replace("-"," ",$page);
		$page_query = "SELECT latin_name From pages WHERE persian_name = '$page_get' ";
		$page_result = mysqli_query($connection , $page_query);
		$page_row = mysqli_fetch_assoc($page_result);
		$page_latin = $page_row['latin_name'];
		return $page_latin;
		}
	if(!isset($_GET['page'])){
		$_GET['page'] = "صفحه اصلی";
	}
	$latin_name_seo = convertToLatin($_GET['page'],$connection);
	$seo = new seo(@$latin_name_seo,$connection,"رای وب"," | ");
	
	//echo $seo->fetchPersianUrl();
	
	
		
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="google-site-verification" content="tF5Zp0xkr-Mad7p0X3PBzrflsqWPZlU8yJjXpcAoYhk" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $seo->getTitle(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://www.rayweb.ir/css/custom.css">
     <!-- Required -->
     <meta name="keywords" content="<?php echo $seo->getKeyword(); ?>" />
	<meta name="description" content="<?php echo $seo->getDescription(); ?>" />
	<meta name="robots" content="all">
    <link href="http://www.rayweb.ir/css/global-style.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="icon" href="http://www.rayweb.ir/images/favicon.gif" type="image/png"><!-- LayerSlider stylesheet -->
<link rel="stylesheet" href="http://www.rayweb.ir/assets/layerslider/css/layerslider.css" type="text/css">
<link rel="stylesheet" type="text/css" href="http://www.rayweb.ir/css/component.css">
<link rel="stylesheet" type="text/css" href="http://www.rayweb.ir/css/fxtransparent.css">
<link rel="stylesheet" type="text/css" href="http://www.rayweb.ir/css/normalize.css">
<link rel="stylesheet" type="text/css" href="http://www.rayweb.ir/css/lightbox.css">

<script src="http://www.rayweb.ir/js/angular.min.js"></script>
<script src="http://www.rayweb.ir/js/script.js"></script>
<script src="http://www.rayweb.ir/js/modernizr.custom.js"></script>
<!-- Custom styles for this template -->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-K3LXRG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K3LXRG');</script>
<!-- End Google Tag Manager -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60004298-1', 'auto');
  ga('send', 'pageview');


</script>
<div class="top-header">
	<div class="container">
        <div class="row">
            <div class="col-sm-12">
            	<span class="aux-text hidden-xs pull-right">
                    به <strong>رای وب</strong> خوش آمدید 66576199-021
                </span>
            	<nav class="top-header-menu">
                    <ul class="menu">
                        
                        <li class="aux-languages dropdown animate-hover" data-animate="animated fadeInUp"><a href="http://www.rayweb.ir/boomerang.html#"><span class="language name">فارسی</span></a>
                            <ul id="auxLanguages" class="sub-menu animate-wr">
                                <li><span class="language language-active">فارسی</span></li>
                                <li><a href="http://www.rayweb.ir/#"><span class="language">English</span></a></li> 
                                <li><a href="http://www.rayweb.ir/#"><span class="language">Español</span></a></li>
                            </ul>
                        </li>
                        
                    </ul>
				</nav>
            </div>
        </div>
    </div>
</div>
<!-- Header: Logo and Main Nav -->
<header>    
	<div id="navOne" class="navbar navbar-wp" role="navigation">
        <div class="container header-main">
            <div class="navbar-header">
            	
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.rayweb.ir/index.php" title="Rayweb | رای وب">
                	<img src="http://www.rayweb.ir/images/logo.png" alt="Rayweb | رای وب">
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                	<li class="<?php if((isset($_GET['page']) && $_GET['page'] == 'home') || !isset($_GET['page'])){echo 'active';} ?> pull-right">
                    	<a href="http://www.rayweb.ir/<?php echo convert($connection,"home"); ?>/" data-close-others="true">صفحه اصلی</a>
                	</li>
                    <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'article'){echo 'active';} ?> pull-right">
                    	<a href="http://www.rayweb.ir/<?php echo convert($connection,"article"); ?>/" class="dropdown-toggle" data-close-others="true">مقالات</a>
                        
                	</li>
                    <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'hire'){echo 'active';} ?> pull-right">
                    	<a href="http://www.rayweb.ir/<?php echo convert($connection,"hire"); ?>/" class="dropdown-toggle" data-close-others="true">استخدام</a>
                        
                	</li>
                    <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'education'){echo 'active';} ?> pull-right">
                    	<a href="http://www.rayweb.ir/<?php echo convert($connection,"education"); ?>/" class="dropdown-toggle" data-close-others="true">آموزش</a>
                        
                	</li>
                    <li class="<?php if(isset($_GET['page']) && ($_GET['page'] == 'sample' || $_GET['page'] == 'sampledetail')){echo 'active';} ?> pull-right">
                    	<a href="http://www.rayweb.ir/<?php echo convert($connection,"sample"); ?>/" class="dropdown-toggle" data-close-others="true">نمونه کارها</a>
                        
                	</li>
                    <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'about'){echo 'active';} ?> pull-right">
                    	<a href="http://www.rayweb.ir/<?php echo convert($connection,"about"); ?>/" class="dropdown-toggle" data-close-others="true">درباره ما</a>
                        
                	</li>
                    <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'contact'){echo 'active';} ?> pull-right">
                    	<a href="http://www.rayweb.ir/<?php echo convert($connection,"contact"); ?>/" class="dropdown-toggle" data-close-others="true">ارتباط با ما</a>
                        
                	</li>
                    <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'order'){echo 'active';} ?> pull-right">
                    	<a href="http://www.rayweb.ir/<?php echo convert($connection,"order"); ?>/" class="dropdown-toggle" data-close-others="true">سفارش</a>
                        
                	</li>
                    <!--<li class="dropdown pull-right animate-click" data-animate="animated fadeInUp" style="z-index:500;">
                    	<a href="http://www.rayweb.ir/boomerang.html#" class="dropdown-toggle dropdown-form-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                        <ul class="dropdown-menu dropdown-menu-user animate-wr">
                            <li id="dropdownForm">
                            	<div class="dropdown-form">
                                	<form class="form-default form-inline p-15">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="What do you want to find?">
                                            <span class="input-group-btn">
                                                <button class="btn btn-two" type="button">Go!</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                	</li>-->
                    <!--<li class="hidden-xs">
                        <a href="http://www.rayweb.ir/boomerang.html#" id="cmdAsideMenu" class="dropdown-toggle dropdown-form-toggle" title="Open sidebar">
                        	<i class="fa fa-outdent"></i>
                        </a>
                    </li>-->
                </ul>
               
            </div><!--/.nav-collapse -->
        </div>
    </div>
</header>	

<?php
	if(isset($_GET['page'])){	
	  $page_latin = convertToLatin($_GET['page'],$connection);
		if(is_file("include/$page_latin.php")){
			include "include/$page_latin.php";
			}else{
			die('صفحه مورد نظر وجود ندارد');
			}
		}else{
			include "include/صفحه-اصلی/";
	}
?>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            	<div class="col">
                   <h4>ارتباط با <strong>رای وب</strong></h4>
                   <hr>
                   <ul>
                        <li><i class="fa fa-taxi"></i> تهران - بلوار تعاون - خیابان فرساد شرقی (آلاله) - خیابان عدالت - کوچه 2 غربی - پلاک 33 - واحد 2 </li>
                        <li><i class="fa fa-phone"></i> 44958948 - 021 </li>
                        <li><i class="fa fa-phone"></i> 44141868 - 021 </li>
                        <li><i class="fa fa-fax"></i> 44958941 - 021 </li>
                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@rayweb.ir" title="Email Us"> info@rayweb.ir </a></li>
                        
                    </ul>
                 </div>
            </div>
            
            <div class="col-md-3">
            	<div class="col">
                    <h4>مقالات <a href="http://www.rayweb.ir">طراحی وب سایت</a></h4>
                    <hr>
                    <ul>
                    	<li><a href="http://www.rayweb.ir/?page=home"><i class="fa fa-book"></i> AngularJS </a></li>
                        <li><a href="http://www.rayweb.ir/?page=home"><i class="fa fa-book"></i>  اصول طراحی سایت </a></li>
                        <li><a href="http://www.rayweb.ir/?page=home"><i class="fa fa-book"></i> عناصر مهم در طراحی سایت </a></li>
                       
                    </ul>
                </div>
            </div>
            
            <div class="col-md-3">
            	<div class="">
                    <h4>ویدئو های طراحی وب سایت</h4>
                    <hr>
                    
                </div>
            </div>

             <div class="col-md-3">
             	<div class="col">
                    <h4>لینک های مرتبط</h4>
                    <hr>
                    <ul>
                    	<li><a href="http://www.rayweb.ir/?page=home"><i class="fa fa-arrow-circle-o-left"></i> صفحه اصلی </a></li>
                        <li><a href="http://www.rayweb.ir/?page=article"><i class="fa fa-arrow-circle-o-left"></i> مقالات</a></li>
                        <li><a href="http://www.rayweb.ir/?page=hire"><i class="fa fa-arrow-circle-o-left"></i> استخدام</a></li>
                        <li><a href="http://www.rayweb.ir/?page=education"><i class="fa fa-arrow-circle-o-left"></i> آموزش</a></li>
                        <li><a href="http://www.rayweb.ir/?page=sapmle"><i class="fa fa-arrow-circle-o-left"></i> نمونه کارها</a></li>
                        <li><a href="http://www.rayweb.ir/?page=about"><i class="fa fa-arrow-circle-o-left"></i> درباره ما</a></li>
                        <li><a href="http://www.rayweb.ir/?page=contact"><i class="fa fa-arrow-circle-o-left"></i> ارتباط با ما</a></li>
                        <li><a href="http://www.rayweb.ir/?page=order"><i class="fa fa-arrow-circle-o-left"></i> سفارش</a></li>
                        <li><a href="http://www.rayweb.ir/?page=press"><i class="fa fa-arrow-circle-o-left"></i> رای وب در جراید</a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <h3 class="text-center" style="color:#fff">طراحی ایده های خود را به ما بسپارید</h3>
        <div class="container text-center col col-social-icons">
        <a href="https://www.facebook.com/raywebco" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="http://www.rayweb.ir/boomerang.html#"><i class="fa fa-google-plus"></i></a>
        <a href="http://www.rayweb.ir/boomerang.html#"><i class="fa fa-linkedin"></i></a>
        <a href="http://www.rayweb.ir/boomerang.html#"><i class="fa fa-instagram"></i></a>
        </div>
        <hr>
        
        <div class="row text-center">
        	<div class="col-lg-12 copyright exo" dir="rtl">
            	کلیه حقوق این وب سایت متعلق به شرکت داریس رایا وب می باشد. 
                
            </div>
            <div class="col-lg-3 footer-logo">
            	
            </div>
        </div>
         <!-- Begin WebGozar.com Counter code -->
<script type="text/javascript" language="javascript" src="http://www.webgozar.ir/c.aspx?Code=3274641&amp;t=counter" ></script>
<noscript><a href="http://www.webgozar.com/counter/stats.aspx?code=3274641" target="_blank">&#1570;&#1605;&#1575;&#1585;</a></noscript>
<!-- End WebGozar.com Counter code -->
    </div>
</footer>


<!-- JavaScript -->
<script type="text/javascript" src="http://www.rayweb.ir/js/jquery.js"></script>
<script type="text/javascript" src="http://www.rayweb.ir/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://www.rayweb.ir/js/modernizr.custom.js"></script>
<script type="text/javascript" src="http://www.rayweb.ir/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="http://www.rayweb.ir/js/jquery.cookie.js"></script>
<script type="text/javascript" src="http://www.rayweb.ir/js/jquery.easing.js"></script>
<script src="http://www.rayweb.ir/js/lightbox.min.js"></script>

<!--[if lt IE 9]>
    <script src="http://www.rayweb.ir/js/html5shiv.js"></script>
    <script src="http://www.rayweb.ir/js/respond.min.js"></script>
<![endif]-->

<!-- Plugins -->
<script type="text/javascript" src="http://www.rayweb.ir/assets/hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="http://www.rayweb.ir/assets/page-scroller/jquery.ui.totop.min.js"></script>
<script type="text/javascript" src="http://www.rayweb.ir/assets/mixitup/jquery.mixitup.js"></script>
<script type="text/javascript" src="http://www.rayweb.ir/assets/mixitup/jquery.mixitup.init.js"></script>
<script type="text/javascript" src="http://www.rayweb.ir/assets/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="http://www.rayweb.ir/assets/easy-pie-chart/jquery.easypiechart.js"></script>
<script type="text/javascript" src="http://www.rayweb.ir/assets/waypoints/waypoints.min.js"></script>
<script type="text/javascript" src="http://www.rayweb.ir/assets/sticky/jquery.sticky.js"></script>
<script type="text/javascript" src="http://www.rayweb.ir/js/jquery.wp.custom.js"></script>
<script type="text/javascript" src="http://www.rayweb.ir/js/jquery.wp.switcher.js"></script>
<script src="http://www.rayweb.ir/assets/layerslider/js/greensock.js" type="text/javascript"></script>
<!--<script src="http://www.rayweb.ir/js/classie.js"></script>
<script src="http://www.rayweb.ir/js/main.js"></script>-->
<!-- LayerSlider script files -->
<script src="http://www.rayweb.ir/assets/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="http://www.rayweb.ir/assets/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<!-- Initializing the slider -->
	<script>
		jQuery("#layerslider").layerSlider({
			pauseOnHover: true,
			autoPlayVideos: false,
			skinsPath: 'assets/layerslider/skins/',
			responsive: false,
			responsiveUnder: 1280,
			layersContainer: 1280,
			skin: 'borderlessdark3d',
			hoverPrevNext: false
		});
	</script>
    <script>
			
		$(document).ready(function() {
				$( "a.a-filter" ).click(function() {
					// get the value from text field
					var input = $(this).attr('value');
					$( "a.a-filter" ).removeClass('active-a');
					$(this).addClass('active-a');
					// check wheather the matching element exists
						// by default every list element will be shown
						
						if(input == 'all'){
							$(".content").show(1000);
							}else{
						$("[data-label*="+ input +"]").show(1000);
						
						// Non related element will be hidden after input
						$(".content").not("[data-label*="+ input +"]").hide(1000);
						
							}
				});
			});
		</script>
</body>
</html>