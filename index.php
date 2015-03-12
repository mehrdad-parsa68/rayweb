<?php
	require_once('core/core.php');
	


    	$like_query = "SELECT id,name FROM `boost` ;";
		$like_result = mysqli_query($connection , $like_query);
		while($like_row = mysqli_fetch_assoc($like_result)){
			
			if ((@preg_match('/'.$like_row['name'].'/', $_SERVER['HTTP_REFERER'])) || (isset($_SESSION['boost']))) {
					$random = rand(3,6);
					$pages_query = "SELECT id,latin_name FROM `pages` WHERE id < '9' ORDER BY RAND()  LIMIT 1 ;";
					$pages_result = mysqli_query($connection , $pages_query);
					$pages_row = mysqli_fetch_assoc($pages_result);
					$_SESSION['boost'] = 'boost';
					header("Refresh:$random; url=/$pages_row[latin_name]/");
				break;
			}
			
		}









	if(isset($_SERVER['HTTP_REFERER'])){
		$referer_query = "INSERT INTO `url`(`id`, `name`) VALUES ('','$_SERVER[HTTP_REFERER]')";
		mysqli_query($connection , $referer_query);
		}
	
	if(!isset($_GET['page'])){
		$_GET['page'] = "home";
		}
	
	function convert($connection,$latin_name){
		$query = "SELECT persian_name From pages WHERE latin_name = '$latin_name' ";
		$result = mysqli_query($connection , $query);
		$row = mysqli_fetch_assoc($result);
		$persian_name = str_replace(" ","-",$row['persian_name']);
		return $persian_name;
		}
	
	function filterName($input){
						  $project_address = $input;
						  $project_address = str_replace("http://","",$project_address);
						  $project_address = str_replace("www.","",$project_address);
						  $project_address = str_replace(".com","",$project_address);
						  $project_address = str_replace(".ir","",$project_address);
						  $project_address = str_replace(".","",$project_address);
						  return $project_address;
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
		$_GET['page'] = "home";
	}
	//$latin_name_seo = convertToLatin($_GET['page'],$connection);
	$seo = new seo(@$_GET['page'],$connection,"طراحی وب سایت رای وب | Rayweb "," | ");
	
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
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
     <!-- Required -->
     <meta name="keywords" content="<?php echo $seo->getKeyword(); ?>" />
	<meta name="description" content="<?php echo $seo->getDescription(); ?>" />
	<meta name="robots" content="all">
    <meta name="author" content="rayweb.ir | شرکت طراحی وب سایت رای وب">
    <link href="/css/global-style.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="icon" href="/images/favicon.gif" type="image/png"><!-- LayerSlider stylesheet -->
<link rel="stylesheet" href="/assets/layerslider/css/layerslider.css" type="text/css">
<link rel="stylesheet" type="text/css" href="/css/component.css">
<link rel="stylesheet" type="text/css" href="/css/fxtransparent.css">
<link rel="stylesheet" type="text/css" href="/css/normalize.css">
<link rel="stylesheet" type="text/css" href="/css/lightbox.css">

<script src="/js/angular.min.js"></script>
<script src="/js/script.js"></script>
<script src="/js/modernizr.custom.js"></script>
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
<div class="col-sm-2 logo-div">
	<a class="navbar-brand logo" href="/home/" title="Rayweb | رای وب">
    	<img src="/images/logo-HR-with-note.png" alt="Rayweb | رای وب">   	
    </a>

</div>
<div class="col-sm-10">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span class="aux-text hidden-xs pull-right">
                        به <strong>رای وب</strong> خوش آمدید 66576199-021
                    </span>
                    <nav class="top-header-menu">
                        <ul class="menu">
                            
                            <li class="aux-languages dropdown animate-hover" data-animate="animated fadeInUp"><a href="/#"><span class="language name">فارسی</span></a>
                                <ul id="auxLanguages" class="sub-menu animate-wr">
                                    <li><span class="language language-active">فارسی</span></li>
                                    <li><a href="/#"><span class="language">English</span></a></li> 
                                    <li><a href="/#"><span class="language">Español</span></a></li>
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
                    
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="<?php if((isset($_GET['page']) && $_GET['page'] == 'home') || !isset($_GET['page'])){echo 'active';} ?> pull-right">
                            <a href="/home/" data-close-others="true">صفحه اصلی</a>
                        </li>
                        <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'article'){echo 'active';} ?> pull-right">
                            <a href="/article/" class="dropdown-toggle" data-close-others="true">مقالات</a>
                            
                        </li>
                        <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'hire'){echo 'active';} ?> pull-right">
                            <a href="/hire/" class="dropdown-toggle" data-close-others="true">استخدام</a>
                            
                        </li>
                        <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'courses'){echo 'active';} ?> pull-right">
                            <a href="/courses/" class="dropdown-toggle" data-close-others="true">دوره آموزشی</a>
                            
                        </li>
                        <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'works' ){echo 'active';} ?> pull-right">
                            <a href="/works/" class="dropdown-toggle" data-close-others="true">نمونه کارها</a>
                            
                        </li>
                        <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'about'){echo 'active';} ?> pull-right">
                            <a href="/about/" class="dropdown-toggle" data-close-others="true">درباره ما</a>
                            
                        </li>
                        <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'contact'){echo 'active';} ?> pull-right">
                            <a href="/contact/" class="dropdown-toggle" data-close-others="true">ارتباط با ما</a>
                            
                        </li>
                        <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'order'){echo 'active';} ?> pull-right">
                            <a href="/order/" class="dropdown-toggle" data-close-others="true">سفارش</a>
                            
                        </li>
                       
                    </ul>
                   
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>	
</div>
<div class="clearfix"></div>
<?php
	if(isset($_GET['page'])){	
	  //$page_latin = convertToLatin($_GET['page'],$connection);
	  $page_latin = $_GET['page'];
		if(is_file("include/$page_latin.php")){
			include "include/$page_latin.php";
			}else{
			die('صفحه مورد نظر وجود ندارد');
			}
		}else{
			include "include/home/";
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
                    <h4>مقالات <a href="">طراحی وب سایت</a></h4>
                    <hr>
                    <ul>
                    	<li><a href="#"><i class="fa fa-book"></i> AngularJS </a></li>
                        <li><a href="#"><i class="fa fa-book"></i>  اصول طراحی سایت </a></li>
                        <li><a href="#"><i class="fa fa-book"></i> عناصر مهم در طراحی سایت </a></li>
                       
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
                    	<li><a href="/home/"><i class="fa fa-arrow-circle-o-left"></i> صفحه اصلی </a></li>
                        <li><a href="/article/"><i class="fa fa-arrow-circle-o-left"></i> مقالات</a></li>
                        <li><a href="/hire/"><i class="fa fa-arrow-circle-o-left"></i> استخدام</a></li>
                        <li><a href="/courses/"><i class="fa fa-arrow-circle-o-left"></i> دوره آموزشی</a></li>
                        <li><a href="/works/"><i class="fa fa-arrow-circle-o-left"></i> نمونه کارها</a></li>
                        <li><a href="/about/"><i class="fa fa-arrow-circle-o-left"></i> درباره ما</a></li>
                        <li><a href="/contact/"><i class="fa fa-arrow-circle-o-left"></i> ارتباط با ما</a></li>
                        <li><a href="/order/"><i class="fa fa-arrow-circle-o-left"></i> سفارش</a></li>
                        <li><a href="/press/"><i class="fa fa-arrow-circle-o-left"></i> رای وب در جراید</a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <h3 class="text-center" style="color:#fff">طراحی ایده های خود را به ما بسپارید</h3>
        <div class="container text-center col col-social-icons">
        <a href="https://www.facebook.com/raywebco" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="/#"><i class="fa fa-google-plus"></i></a>
        <a href="/#"><i class="fa fa-linkedin"></i></a>
        <a href="/#"><i class="fa fa-instagram"></i></a>
        <br>
        <div class="social-link">
            <div class="g-plus-button">
                <div class="g-plusone" data-annotation="none" data-href="https://plus.google.com/117776726100578815115/about?hl=en"></div>
            </div>
            
            <div class="fb-like-button">
                <div class="fb-like" data-href="https://www.facebook.com/raywebco" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
                <div id="fb-root"></div>
            </div>
            <hr>
            </div>
        </div>
        
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
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/modernizr.custom.js"></script>
<script type="text/javascript" src="/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/js/jquery.easing.js"></script>
<script src="/js/lightbox.min.js"></script>

<!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
<![endif]-->

<!-- Plugins -->
<script type="text/javascript" src="/assets/hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="/assets/page-scroller/jquery.ui.totop.min.js"></script>
<script type="text/javascript" src="/assets/mixitup/jquery.mixitup.js"></script>
<script type="text/javascript" src="/assets/mixitup/jquery.mixitup.init.js"></script>
<script type="text/javascript" src="/assets/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="/assets/easy-pie-chart/jquery.easypiechart.js"></script>
<script type="text/javascript" src="/assets/waypoints/waypoints.min.js"></script>
<script type="text/javascript" src="/assets/sticky/jquery.sticky.js"></script>
<script type="text/javascript" src="/js/jquery.wp.custom.js"></script>
<script type="text/javascript" src="/js/jquery.wp.switcher.js"></script>
<script src="/assets/layerslider/js/greensock.js" type="text/javascript"></script>
<!--<script src="/js/classie.js"></script>
<script src="/js/main.js"></script>-->
<!-- LayerSlider script files -->
<script src="/assets/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="/assets/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
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
        <script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=1467123003571386&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
        
        <script type="text/javascript">
		  (function() {
			var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			po.src = 'https://apis.google.com/js/platform.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
        
</body>
</html>