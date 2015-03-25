<?php
	require_once('core/core.php');
	


    	$like_query = "SELECT id,name FROM `boost` ;";
		$like_result = mysqli_query($connection , $like_query);
		while($like_row = mysqli_fetch_assoc($like_result)){
			
			if ((@preg_match('/'.$like_row['name'].'/', $_SERVER['HTTP_REFERER'])) || (isset($_SESSION['boost']))) {
					$random = rand(2,4);
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
	
	$article_footer_query = "SELECT * FROM `articles` LIMIT 5";
	$article_footer_result = mysqli_query($connection,$article_footer_query);
	
	$video_footer_query = "SELECT * FROM `videos` LIMIT 5";
	$video_footer_result = mysqli_query($connection,$video_footer_query);
	##############################
	
	$news_query = "SELECT * FROM `news` ORDER BY `date` DESC LIMIT 10";
	
	$news_result = mysqli_query($connection,$news_query);
	
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="google-site-verification" content="tF5Zp0xkr-Mad7p0X3PBzrflsqWPZlU8yJjXpcAoYhk" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $seo->getTitle(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo $prefix; ?>/css/custom.css">
     <!-- Required -->
     <meta name="keywords" content="<?php echo $seo->getKeyword(); ?>" />
	<meta name="description" content="<?php echo $seo->getDescription(); ?>" />
	<meta name="robots" content="all">
    <meta name="author" content="rayweb.ir | شرکت طراحی وب سایت رای وب">
    
    <link rel="stylesheet" type="text/css" href="<?php echo $prefix; ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $prefix; ?>/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $prefix; ?>/assets/animate/animate.css">
    <link rel="canonical" href="http://rayweb.ir<?php echo $_SERVER['REQUEST_URI']; ?>" />
    
    <link href="<?php echo $prefix; ?>/css/global-style.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="icon" href="<?php echo $prefix; ?>/images/favicon.gif" type="image/png"><!-- LayerSlider stylesheet -->
<link rel="stylesheet" href="<?php echo $prefix; ?>/assets/layerslider/css/layerslider.css" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo $prefix; ?>/css/component.css">
<link rel="stylesheet" type="text/css" href="<?php echo $prefix; ?>/css/fxtransparent.css">
<link rel="stylesheet" type="text/css" href="<?php echo $prefix; ?>/css/normalize.css">
<link rel="stylesheet" type="text/css" href="<?php echo $prefix; ?>/css/lightbox.css">

<script src="<?php echo $prefix; ?>/js/angular.min.js"></script>
<script src="<?php echo $prefix; ?>/js/script.js"></script>
<script src="<?php echo $prefix; ?>/js/modernizr.custom.js"></script>
<style>
.wp-theme-1,.lw,.bg-5,.bg-3 {
	background-image:url(<?php echo $prefix; ?>/images/bg.jpg !important);
	}
body{
	background-image:url(<?php echo $prefix; ?>/images/bg.jpg) !important;
	}
section,.top-header,header{
	background-image:url(<?php echo $prefix; ?>/images/bg.jpg);
	}
</style>
<!-- Custom styles for this template -->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Code baraye Anetwork.ir : 
    <script type='text/javascript'>
	!( function( d, wid, uid ) {
		var s = d.createElement( 'script' ), h = d.head || d.getElementsByTagName( 'head' )[ 0 ]; s.async = true; s.onload = function( e ) { h.removeChild( this ); }; h.appendChild( s ); s.src = 'http://footprint.anetwork.ir/a?' + wid + '.14032015.' + uid;
	})( document, 450758, 22971 );
	</script>
    -->
    
</head>
<body>
<!-- Google Tag Manager -->
<!--<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-K3LXRG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K3LXRG');</script>-->
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
	<a class="navbar-brand logo" href="<?php echo $prefix; ?>/home/" title="Rayweb | رای وب">
    	<img src="<?php echo $prefix; ?>/images/logo-HR-with-note.png" alt="Rayweb | رای وب">   	
    </a>

</div>
<div class="col-sm-10 header-nav">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                   <span class="aux-text hidden-xs pull-right">
                        <strong>طراحی وب سایت رای وب 44141868 - 021</strong>
                    </span>
                    <nav class="top-header-menu">
                        <ul class="menu">
                            
                            <li class="aux-languages dropdown animate-hover" data-animate="animated fadeInUp"><a href="/#"><span class="language name">فارسی</span></a>
                                <ul id="auxLanguages" class="sub-menu animate-wr">
                                    <li><span class="language language-active">فارسی</span></li>
                                    <li><a href="#"><span class="language">English</span></a></li> 
                                    <li><a href="#"><span class="language">Español</span></a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <hr class="hr-header">
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
                            <a href="<?php echo $prefix; ?>/home/" data-close-others="true">صفحه اصلی</a>
                        </li>
                        <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'article'){echo 'active';} ?> pull-right">
                            <a href="<?php echo $prefix; ?>/article/" class="dropdown-toggle" data-close-others="true">مقالات</a>
                            
                        </li>
                        <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'hire'){echo 'active';} ?> pull-right">
                            <a href="<?php echo $prefix; ?>/hire/" class="dropdown-toggle" data-close-others="true">استخدام</a>
                            
                        </li>
                        <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'courses'){echo 'active';} ?> pull-right">
                            <a href="<?php echo $prefix; ?>/courses/" class="dropdown-toggle" data-close-others="true">دوره آموزشی</a>
                            
                        </li>
                        <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'works' ){echo 'active';} ?> pull-right">
                            <a href="<?php echo $prefix; ?>/works/" class="dropdown-toggle" data-close-others="true">نمونه کارها</a>
                            
                        </li>
                        <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'about'){echo 'active';} ?> pull-right">
                            <a href="<?php echo $prefix; ?>/about/" class="dropdown-toggle" data-close-others="true">درباره ما</a>
                            
                        </li>
                        <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'contact'){echo 'active';} ?> pull-right">
                            <a href="<?php echo $prefix; ?>/contact/" class="dropdown-toggle" data-close-others="true">ارتباط با ما</a>
                            
                        </li>
                        <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'order'){echo 'active';} ?> pull-right">
                            <a href="<?php echo $prefix; ?>/order/" class="dropdown-toggle" data-close-others="true">سفارش</a>
                            
                        </li>
                        <li class="<?php if(isset($_GET['page']) && $_GET['page'] == 'video'){echo 'active';} ?> pull-right">
                            <a href="<?php echo $prefix; ?>/video/" class="dropdown-toggle" data-close-others="true" style="color:red">دانلود ویدئو آموزشی</a>
                            
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
                    <h4>مقالات <a href="http://rayweb.ir">طراحی وب سایت</a></h4>
                    <hr>
                    <ul>
                    	<?php 
				while($article_footer_row = mysqli_fetch_assoc($article_footer_result)){
						echo '<li><a href="/article/'.$article_footer_row['id'].'/"> <span class="fa fa-book"></span> '.$article_footer_row['title'].' </a></li>'	;
					
					}
			?>
                       
                    </ul>
                </div>
            </div>
            
            <div class="col-md-3">
            	<div class="col">
                    <h4>ویدئو های <a href="http://rayweb.ir">طراحی وب سایت</a></h4>
                    <hr>
                    <ul>
                    	<?php 
				while($video_footer_row = mysqli_fetch_assoc($video_footer_result)){
						echo '<li><a href="/video/'.$video_footer_row['id'].'/"> <span class="fa fa-video-camera"></span> '.$video_footer_row['name'].' </a></li>'	;
					
					}
			?>
                       
                    </ul>
                </div>
            </div>

             <div class="col-md-3">
             	<div class="col">
                    <h4>لینک های مرتبط</h4>
                    <hr>
                    <ul>
                    	<li><a href="<?php echo $prefix; ?>/home/"><i class="fa fa-arrow-circle-o-left"></i> صفحه اصلی </a></li>
                        <li><a href="<?php echo $prefix; ?>/article/"><i class="fa fa-arrow-circle-o-left"></i> مقالات</a></li>
                        <li><a href="<?php echo $prefix; ?>/hire/"><i class="fa fa-arrow-circle-o-left"></i> استخدام</a></li>
                        <li><a href="<?php echo $prefix; ?>/courses/"><i class="fa fa-arrow-circle-o-left"></i> دوره آموزشی</a></li>
                        <li><a href="<?php echo $prefix; ?>/works/"><i class="fa fa-arrow-circle-o-left"></i> نمونه کارها</a></li>
                        <li><a href="<?php echo $prefix; ?>/about/"><i class="fa fa-arrow-circle-o-left"></i> درباره ما</a></li>
                        <li><a href="<?php echo $prefix; ?>/contact/"><i class="fa fa-arrow-circle-o-left"></i> ارتباط با ما</a></li>
                        <li><a href="<?php echo $prefix; ?>/order/"><i class="fa fa-arrow-circle-o-left"></i> سفارش</a></li>
                        <li><a href="<?php echo $prefix; ?>/press/"><i class="fa fa-arrow-circle-o-left"></i> رای وب در جراید</a></li>
                        <li><a href="<?php echo $prefix; ?>/video/"><i class="fa fa-arrow-circle-o-left"></i> دانلود ویدئو آموزشی</a></li>
                        <li><a href="<?php echo $prefix; ?>/news/"><i class="fa fa-arrow-circle-o-left"></i> آخرین اخبار فناوری اطلاعات (IT)</a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <h3 class="text-center" style="color:#fff">طراحی ایده های خود را به ما بسپارید</h3>
        <div class="container text-center col col-social-icons">
        <a href="https://www.facebook.com/raywebco" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://plus.google.com/communities/107271610650119455714"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <br>
        <div class="social-link">
            <div class="g-plus-button">
                <div class="g-plusone" data-annotation="none" data-href="https://plus.google.com/communities/107271610650119455714"></div>
            </div>
            
            <div class="fb-like-button">
                <div class="fb-like" data-href="https://www.facebook.com/raywebco" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
                <div id="fb-root"></div>
            </div>
            <hr>
            </div>
        </div>
        
        <div class="row text-center">
        	<div class="col-lg-12 copyright" dir="rtl">
            	کلیه حقوق این وب سایت متعلق به شرکت آرتمن رایا وب می باشد. 
                
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
<script type="text/javascript" src="<?php echo $prefix; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $prefix; ?>/js/timeago.js"></script>
<script type="text/javascript" src="<?php echo $prefix; ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $prefix; ?>/js/modernizr.custom.js"></script>
<script type="text/javascript" src="<?php echo $prefix; ?>/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="<?php echo $prefix; ?>/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo $prefix; ?>/js/jquery.easing.js"></script>
<script src="<?php echo $prefix; ?>/js/lightbox.min.js"></script>

<!-- Plugins -->
<script type="text/javascript" src="<?php echo $prefix; ?>/assets/hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="<?php echo $prefix; ?>/assets/page-scroller/jquery.ui.totop.min.js"></script>
<script type="text/javascript" src="<?php echo $prefix; ?>/assets/mixitup/jquery.mixitup.js"></script>
<script type="text/javascript" src="<?php echo $prefix; ?>/assets/mixitup/jquery.mixitup.init.js"></script>
<script type="text/javascript" src="<?php echo $prefix; ?>/assets/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php echo $prefix; ?>/assets/easy-pie-chart/jquery.easypiechart.js"></script>
<script type="text/javascript" src="<?php echo $prefix; ?>/assets/waypoints/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo $prefix; ?>/assets/sticky/jquery.sticky.js"></script>
<script type="text/javascript" src="<?php echo $prefix; ?>/js/jquery.wp.custom.js"></script>
<script type="text/javascript" src="<?php echo $prefix; ?>/js/jquery.wp.switcher.js"></script>
<script src="<?php echo $prefix; ?>/assets/layerslider/js/greensock.js" type="text/javascript"></script>
<script src="<?php echo $prefix; ?>/js/classie.js"></script>
<script src="<?php echo $prefix; ?>/js/main.js"></script>
<!-- LayerSlider script files -->
<script src="<?php echo $prefix; ?>/assets/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="<?php echo $prefix; ?>/assets/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<!-- Initializing the slider -->
	<script>
		jQuery("#layerslider").layerSlider({
			pauseOnHover: true,
			autoPlayVideos: false,
			skinsPath: '<?php echo $prefix; ?>/assets/layerslider/skins/',
			responsive: false,
			responsiveUnder: 1280,
			layersContainer: 1280,
			skin: 'borderlessdark3d',
			hoverPrevNext: false
		});
	</script>
    <script>
		$(document).ready(function() {
			$(".timeago").timeago();
		});
			
		// Persian
		// Use DIR attribute for RTL text in Persian Language for ABBR tag .
		// By MB.seifollahi@gmail.com
		jQuery.timeago.settings.strings = {
		prefixAgo: null,
		prefixFromNow: null,
		suffixAgo: "پیش",
		suffixFromNow: "از حال",
		seconds: "کمتر از یک دقیقه",
		minute: "حدود یک دقیقه",
		minutes: "%d دقیقه",
		hour: "حدود یک ساعت",
		hours: "حدود %d ساعت",
		day: "یک روز",
		days: "%d روز",
		month: "حدود یک ماه",
		months: "%d ماه",
		year: "حدود یک سال",
		years: "%d سال",
		wordSeparator: " "
		};
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