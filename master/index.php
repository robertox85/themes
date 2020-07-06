<?php get_header(); ?>
<body class="master">
<div id="wrapper">
  <div id="header">
    <div id="tratt-header"></div>
    <div id="tratt-header2"></div>
    <div  class="container-16"> 
      <!--form-->
      <div id="international"> <a href="http://businessschool.luiss.it/en/" title="English version" style="font-size:14px">English version</a> </div>
      <div id="logo"><a href="http://businessschool.luiss.it/"><img src="http://www.lbs.luiss.it/wp-content/themes/lbs/img/logo.png" title="LUISS Business School"></a></div>
      <?php
include ('../static/nav.php');
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

 <div class="grid_12 alpha" id="area">
    
    <h1 class="page-title">News</h1>
    
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    

        <div class="article hentry">
				<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to');  ?> <?php the_title(); ?>"><?php the_title(); ?></a></h1>
        <div class="entry-info"><span class="time published"><?php the_time('j F Y') ?></span></div>
					<?php
					if ( has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to');  ?> <?php the_title(); ?>">
						<?php the_post_thumbnail(array(100, 75), array( 'class' => 'attachment-post-thumbnail' ));
					} ?></a>
		<div class="entry-summary"><?php the_excerpt('Read More...'); ?></div>
      </div>
	  <?php endwhile; endif; ?>
        </div>

		<div class="navigation">
			<div class="grid_4"><?php next_posts_link(__('&laquo; Prev')); ?></div>
			<div class="grid_4"><?php previous_posts_link(__('Next &raquo;')); ?></div>
		</div>

    </div>
</div>
  <div class="clear"></div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
</body>
</html>
