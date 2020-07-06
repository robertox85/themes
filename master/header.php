<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php bloginfo('name'); ?><?php wp_title('>>',true,''); ?></title>
<link rel="shortcut icon" type="image/x-icon" href="http://businessschool.luiss.it/wp-content/themes/lbs_2015/img/favicon.ico" />
<link rel="stylesheet" href="<?php  bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php wp_head(); ?>
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<style type="text/css">
nav li .menu, nav li .mega-menu { position: relative; left:0; margin-top:-1px; }
</style>
<![endif]-->
<!--[if IE 7]>
<link href="<?php bloginfo('url'); ?>/wp-content/themes/lbs/css/iefix.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 <script src="http://malsup.github.io/jquery.cycle.all.js"></script>
 <script type="text/javascript">
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
</script>

</head>