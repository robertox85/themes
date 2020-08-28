<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
/*
*/
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header(2017); 
?>

<header id="content-title" class="wide-row">
  <div class="container">
    <div class="row">
      <div class="sommario col-md-8">
        <h1><?php echo the_title(); ?></h1>
      </div>
    </div>
    <!--END .row --> 
  </div>
  <!--END .container --> 
</header>
<div class="container">
  <div class="row">
    <main id="main" class="site-main" role="main">
      <div id="page-content" class="col-md-8 columns  space">
        <?php while ( have_posts() ) : the_post(); 
		$post_id = get_the_ID();?>
        <?php the_content(''); ?>
        <?php endwhile; // end of the loop. ?>
      </div>
    </main>
    <aside id="sidebar" class="col-md-3 columns col-md-push-1 space col-xs-12">
      <div  class="block">
        <div class="content row">
          <?php   $titolo_accordo = array();
		$titolo_accordo['it'] = 'Tutti le convenzioni';
		$titolo_accordo['en'] = 'All Conventions';
?>
          <h2><?php echo $titolo_accordo[ICL_LANGUAGE_CODE]; ?></h2>
          <?php $my_query = new WP_Query('posts_per_page=-1&&post_type=accordo');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate = $post->ID; ?>
          <h2><a href="<?php the_permalink(); ?>" class="arr">
            <?php the_title(); ?>
            </a></strong></h2>
          <?php the_excerpt(); ?>
       
          <?php endwhile;  wp_reset_query(); ?>
        </div>
      </div>
    </aside>
  </div>
  <!--END .row --> 
</div>
<!--END .container -->
<?php 

get_footer(2017);

?>
