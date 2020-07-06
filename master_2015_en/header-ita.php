<!DOCTYPE html>
<html>
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
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel='stylesheet' id='cookie-notice-front-css'  href='http://businessschool.luiss.it/wp-content/plugins/cookie-notice/css/front.css' type='text/css' media='all' />
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<script type="text/javascript">
$ = jQuery.noConflict(false);
</script>
<div id="site-wrapper">
<div id="site-canvas">
<header id="masthead">
<div class="container">
<div class="row">
  <div id="mobile-menu-trigger"> <a class="main-menu-toggle menu-icon" title="apri il menu"> <span></span> </a> </div>
  <div class="col-md-4" id="logo"><a href="http://businessschool.luiss.it" title="Home page"><img src="<?php bloginfo('template_directory'); ?>/img/logo-home.png" alt="Luiss Business School Logo" id="logo-img" /></a></div>
  <nav id="secondary-nav" class="col-md-6">
    <ul>
      <li><a href="http://www.luiss.it/">LUISS.it</a></li>
      <li><a href="javascript:void(0)" id="network-offcanvas-trigger">LUISS Network</a></li>
    </ul>
  </nav>
  
  <?php language_selector_flags(); ?>
  
  <!--<div class="lang_selector">
        <ul>
          <li><a  class="active" href="http://businessschool.luiss.it/">IT</a></li>
          <li><a  href="http://businessschool.luiss.it/en/">EN</a></li>
        </ul>
      </div>  --> 
  
</div>
<!-- END .row --> 

<!-- END .container -->
</header>

<?php if(ICL_LANGUAGE_CODE=='it'): ?>

  <?php get_template_part( 'nav', 'it' ); // Navigation bar to use in single pages (nav-it.php) ?>

<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>

  <?php get_template_part( 'nav', 'en' ); // Navigation bar to use in single pages (nav-it.php) ?>

<?php endif;?>
      
<nav id="network-container-offcanvas">
  <div class="container">
    <div class="row">
      <div class="large-centered columns" id="network-container-offcanvas-ul">
        <div class="col-xs-6 col-sm-3">
          <ul>
            <li><a href="http://www.luissuniversitypress.it/">University Press</a></li>
            <li><a href="http://www.luiss.tv/">LUISS TV</a></li>
            <li><a href="http://www.radioluiss.it/">Radio LUISS</a></li>
            <li><a href="http://www.store.luiss.it/">LUISS Store</a></li>
          </ul>
        </div>
        <div class="col-xs-6 col-sm-3">
          <ul>
            <li><a href="http://www.luissenlabs.com/">LUISS Enlabs</a></li>
            <li><a href="http://www.laureatiluiss.it/">Associazione Laureati</a></li>
            <li><a href="http://www.ilab.luiss.it/">i-lab</a></li>
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

	?>
      <span class="back-to-top"><a id="backtotop" href="javascript:void(0)"><i class="fa fa-angle-up"></i> Back to top</a></span> </div>
    <!--END .row --> 
  </div>
  <!-- .END container --> 
</nav>
