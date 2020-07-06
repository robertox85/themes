<?php
/*
 * Template Name: Brochure
 */
?>
<?php get_header(); ?>
<body class="master">
<div id="wrapper">
  <div id="header">
    <div id="tratt-header"></div>
    <div id="tratt-header2"></div>
    <div  class="container-16"> 
      <!--form-->
      <div id="international"> <a href="http://www.lbs.luiss.it/en" title="English version">English version</a> </div>
      <div id="logo"><a href="http://www.lbs.luiss.it/"><img src="<?php bloginfo('url'); ?>/wp-content/themes/macofin/images/logo.png" title="LUISS Business School"></a></div>
      <?php
include ('nav.php');
?>
    </div>
  </div>
  <div id="testata"></div>
  <div class="container-16">
    <div class="container_16 clearfix">
      <div class="grid_16">
        <div class="breadcrumb">
        <?php if (class_exists('breadcrumb_navigation_xt')) {
	echo 'Tu sei in: ';
	// New breadcrumb object
	$mybreadcrumb = new breadcrumb_navigation_xt;
	// Options for breadcrumb_navigation_xt
	$mybreadcrumb->opt['title_blog'] = 'Home';
	$mybreadcrumb->opt['separator'] = ' &raquo; ';
	// Display the breadcrumb
	$mybreadcrumb->display();
} ?>
      </div>
      </div>
      <div class="grid_12 alpha" id="area">
        <h1>
          <?php bloginfo('name'); ?>
        </h1>
        <h2>
          <?php bloginfo('description'); ?>
        </h2>
        <div class="hr"></div>
        <h2>
          <?php the_title(); ?>
        </h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?>
        <?php endwhile; endif; ?>
        <div class="clear"></div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
</body>
</html>