<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<title>
<?php
     global $page, $paged;
    wp_title( '|', true, 'right' );
     bloginfo( 'name' );

?>
</title>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-63172324-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-63172324-1', { 'anonymize_ip': true });
  gtag('config', 'UA-63172324-1', { 'optimize_id': 'GTM-K2JVW5J'});
  gtag('config', 'UA-63172324-1');
</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '203976930981295'); 
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" 
src="https://www.facebook.com/tr?id=203976930981295&ev=PageView
&noscript=1"/>
</noscript>	
<!-- Hotjar Tracking Code for / -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1739676,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<script data-obct type="text/javascript">
  /** DO NOT MODIFY THIS CODE**/
  !function(_window, _document) {
    var OB_ADV_ID='00a4dea5852c992781d1c553f9553aaea5';
    if (_window.obApi) {var toArray = function(object) {return Object.prototype.toString.call(object) === '[object Array]' ? object : [object];};_window.obApi.marketerId = toArray(_window.obApi.marketerId).concat(toArray(OB_ADV_ID));return;}
    var api = _window.obApi = function() {api.dispatch ? api.dispatch.apply(api, arguments) : api.queue.push(arguments);};api.version = '1.1';api.loaded = true;api.marketerId = OB_ADV_ID;api.queue = [];var tag = _document.createElement('script');tag.async = true;tag.src = '//amplify.outbrain.com/cp/obtp.js';tag.type = 'text/javascript';var script = _document.getElementsByTagName('script')[0];script.parentNode.insertBefore(tag, script);}(window, document);
obApi('track', 'PAGE_VIEW');
</script>


<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" />
<link href="<?php  bloginfo('template_directory'); ?>/style_2017.css?ver=<?php echo time() ?>" rel="stylesheet">
<link rel='stylesheet' id='Googge_Web_Font_Oswald-css'  href='https://fonts.googleapis.com/css?family=Oswald' type='text/css' media='all' />
<?php  wp_head(); ?>
</head>
<!-- <body class="home page-template page-template-home page-template-home-php page">-->
<body <?php body_class(); ?>> 
<script type="text/javascript">
		$ = jQuery.noConflict( false );
</script>
<div id="site-wrapper">
<div id="site-canvas">
<header id="masthead">
  <div class="container">
    <div class="row">
      <div id="mobile-menu-trigger"><a class="main-menu-toggle menu-icon" title="apri il menu"><span></span></a></div>
      <div class="col-md-4" id="logo"><a href="<?php echo site_url(); ?>" title="Home page"><img src="<?php echo site_url() ?>/wp-content/themes/lbs_2015/img/logo_mba.png" alt="Luiss Business School Logo" id="logo-img" /></a></div>
      <nav id="secondary-nav" class="col-md-6">
        <ul>
          <li><a href="http://www.luiss.it/">LUISS.it</a></li>
          <li><a href="javascript:void(0)" id="network-offcanvas-trigger">LUISS Network</a></li>
        </ul>
      </nav>
      <?php language_selector_flags(); ?>
    </div>
    <!-- END .row --> 
  </div>
  <!-- END .container --> 
</header>
<nav id="nav-main">
  <div class="container">
    <div class="row">
 <?php   	
	  
	  
	  
 if ( is_page_template( 'home-2017.php' ) ) {
     wp_nav_menu(array('theme_location' => 'menu-top',
'container_id'    => 'menu-main-container',
'container' => 'div',
'menu_id' => 'menu-main',
'depth' => 0,));    

    } else {
		  wp_nav_menu(array(
'theme_location' => 'menu-top',
'container_id'    => 'menu-main-container',
'container' => 'div',
'menu_id' => 'menu-main',
));           
	  
	  
		  
		  
		   }
		  
//if(function_exists('wp_nav_menu')) {
	
	//if (is_home()) {
       
	  // wp_nav_menu(array(
//'theme_location' => 'menu-top',
//'container_id'    => 'menu-main-container',
//'container' => 'div',
//'menu_id' => 'menu-main',
//'depth' => 1,
//));
	   
	   
	                 
    // }
      //  else {
       // wp_nav_menu(array(
//'theme_location' => 'menu-top',
//'container_id'    => 'menu-main-container',
//'container' => 'div',
//'menu_id' => 'menu-main',
//));           
  //    }
	


//}?>
      <div class="searchbar"><a class="sb-icon-search" title="cerca nel sito"><span class="glyphicon glyphicon-search"></span></a></div>
     
      
      <div id="sb-search" class="sb-search">
      
      
<script>
  (function() {
    var cx = '012139100949894875782:1dp0jtr1a6w';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchbox-only></gcse:searchbox-only>
      
      </div>
      
    </div>
    <!--END .row --> 
  </div>
  <!-- .END container --> 
</nav>
<nav id="network-container-offcanvas">
  <div class="container">
    <div class="row">
      <div class="large-centered columns" id="network-container-offcanvas-ul">
        <div class="col-xs-6 col-sm-3">
          <ul>
            <li><a href="http://www.luissuniversitypress.it/">University Press</a></li>
            <li><a href="http://www.radioluiss.it/">Radio LUISS</a></li>
            <li><a href="http://www.store.luiss.it/">LUISS Store</a></li>
          </ul>
        </div>
        <div class="col-xs-6 col-sm-3">
          <ul>
            <li><a href="http://www.luissenlabs.com/">LUISS Enlabs</a></li>
            <li><a href="http://www.laureatiluiss.it/">Associazione Laureati</a></li>
            <li><a href="http://www.fondazionecapriglione.luiss.it/">Fondazione Capriglione Onlus</a></li>
          </ul>
        </div>
        <div class="col-xs-6 col-sm-3">
          <ul>
            <li><a href="http://www.amministrazioneincammino.luiss.it/">Amministrazione in cammino</a></li>
            <li><a href="http://archivioceradi.luiss.it/">Archivio Ceradi</a></li>
            <li><a href="http://www.romeinternationalschool.it/">Rome International School</a></li>
            <li><a href="http://www.emdeaconsulting.com/">EMDEA Junior Consulting</a></li>
          </ul>
        </div>
        <button class="close-menu">x</button>
      </div>
    </div>
  </div>
</nav>
<nav id="breadcrumb-top" >
  <div class="container">
    <div class="row breadcrumb">
						<?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }
	
		$back_to_top_text= array();
		$back_to_top_text['it'] = 'Torna su';
		$back_to_top_text['en'] = 'Back to top';
	
	?>
						<span class="back-to-top"><a id="backtotop" href="javascript:void(0)"><i class="fa fa-angle-up"></i> <?php echo $back_to_top_text[ICL_LANGUAGE_CODE] ?></a></span> </div>
    <!--END .row --> 
  </div>
  <!-- .END container --> 
</nav>
