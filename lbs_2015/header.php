<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>"/>
	<title>
		<?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		?>
	</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico"/>
	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">	
	<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
	



	<?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>
	<script type="text/javascript">
		$ = jQuery.noConflict( false );
	</script>
	<div id="site-wrapper">
		<div id="site-canvas">
			<header id="masthead">
				<div class="container">
					<div class="row">
						<div id="mobile-menu-trigger"> <a class="main-menu-toggle menu-icon" title="apri il menu"> <span></span> </a> </div>
						<div class="col-md-4" id="logo"><a href="<?php echo site_url(); ?>" title="Home page"><img src="<?php bloginfo('template_directory'); ?>/img/logo-home.png" alt="Luiss Business School Logo" id="logo-img" /></a>
						</div>
						<nav id="secondary-nav" class="col-md-6">
							<ul>
								<li><a href="http://www.luiss.it/">LUISS.it</a>
								</li>
								<li><a href="javascript:void(0)" id="network-offcanvas-trigger">LUISS Network</a>
								</li>
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
if(function_exists('wp_nav_menu')) {

wp_nav_menu(array(
'theme_location' => 'menu-top',
'container_id'    => 'menu-main-container',
'container' => 'div',
'menu_id' => 'menu-main',
));
}?>
						<div class="searchbar"><a class="sb-icon-search" title="cerca nel sito"><i class="fa fa-search "></i></a>
						</div>
						<div id="sb-search" class="sb-search">
							<form action="http://www.google.com/cse" id="searchbox_012139100949894875782:1dp0jtr1a6w">
								<input type="hidden" name="cx" value="012139100949894875782:1dp0jtr1a6w"/>
								<input type="hidden" name="cof" value="FORID:5"/>
								<input type="hidden" name="ie" value="UTF-8"/>
								<input id="f_search-oc" class="sb-search-input" type="text" placeholder="Search on LUISS Business School websites" name="as_q">
							</form>
							<script type="text/javascript" src="//www.google.com/cse/brand?form=cse-search-box&amp;lang=en"></script>
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
									<li><a href="http://www.luissuniversitypress.it/">University Press</a>
									</li>
									<li><a href="http://www.luiss.tv/">LUISS TV</a>
									</li>
									<li><a href="http://www.radioluiss.it/">Radio LUISS</a>
									</li>
									<li><a href="http://www.store.luiss.it/">LUISS Store</a>
									</li>


								</ul>
							</div>

							<div class="col-xs-6 col-sm-3">
								<ul>
									<li><a href="http://www.luissenlabs.com/">LUISS Enlabs</a>
									</li>
									<li><a href="http://www.laureatiluiss.it/">Associazione Laureati</a>
									</li>
									<li><a href="http://www.ilab.luiss.it/">i-lab</a>
									</li>
									<li><a href="http://www.fondazionecapriglione.luiss.it/">Fondazione Capriglione Onlus</a>
									</li>
								</ul>
							</div>

							<div class="col-xs-6 col-sm-3">
								<ul>
									<li><a href="http://www.amministrazioneincammino.luiss.it/">Amministrazione in cammino</a>
									</li>
									<li><a href="http://archivioceradi.luiss.it/">Archivio Ceradi</a>
									</li>
									<li><a href="http://www.romeinternationalschool.it/">Rome International School</a>
									</li>
									<li><a href="http://www.emdeaconsulting.com/">EMDEA Junior Consulting</a>
									</li>
								</ul>
							</div>
							<button class="close-menu">x</button>
						</div>
					</div>
				</div>
			</nav>
			<nav id="breadcrumb-top">
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