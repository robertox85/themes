<?php
/*
Template Name: 3 colonne menu generato
*/
get_header(2017); 
?>

<header id="content-title" class="wide-row">
  <div class="container">
    <div class="row">
      <h1 class="col-md-7 col-md-push-2"><?php echo the_title(); ?></h1>
    </div>
    <!--END .row --> 
  </div>
  <!--END .container --> 
</header>
<div class="container">
  <div class="row">
    <main id="main" class="site-main" role="main">
      <div id="page-content" class="col-lg-7 col-lg-push-2 col-sm-12 space">
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(''); ?>
        <?php endwhile; // end of the loop. ?>
      </div>
    </main>
    <div id="menu-local" class="col-lg-2 col-sm-12 col-lg-pull-7">
      <?php $top_level_parent = get_top_level_parent(); 

if (!(empty($top_level_parent))) { ?>
      <h2><a href="<?php echo get_permalink($top_level_parent->ID); ?>"><?php echo $top_level_parent->post_title ?></a></h2>
      <?php } ?>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
      <?php dynamic_sidebar('sidebar_chisiamo'); ?>
      <?php endif; ?>
    </div>
    <aside id="sidebar" class="col-lg-3 col-sm-12 space"> </aside>
  </div>
  <!--END .row --> 
</div>
<!--END .container -->
<?php get_footer(2017); ?>