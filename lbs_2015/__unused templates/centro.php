<?php
/*
Template Name: CENTRI DI COMPETENZA & LAB
*/
get_header(); 
?>
<?php  $titolo_centro = array();
$titolo_centro['it'] = ' Centri di Competenza e Lab';
$titolo_centro['en'] = 'Knowledge Centre & Lab';
?>

<div class="item-centre"><img src="<?php echo site_url() ?>/wp-content/uploads/2016/04/big_data.jpg" alt="<?php the_title()?>" >
  <div class="container">
    <div class="centre-caption centre">
      <h1><?php echo the_title(); ?></h1>
      <h2> <?php echo $titolo_centro[ICL_LANGUAGE_CODE]; ?> </h2>
    </div>
  </div>
</div>






<div class="container">
  <div class="row">
    <main id="main" class="site-main centre">
      <div id="page-content" class="col-md-8 columns  space">
        <?php while ( have_posts() ) : the_post(); 
		$post_id = get_the_ID();?>
        <?php the_content(''); ?>
      
        <?php endwhile; // end of the loop. ?>
      </div>
    </main>
    <div id="sidebar-menu-lab" class="col-md-3 columns col-md-push-1 space col-xs-12">
      <?php  $centro = array();
	    $centro['it'] = '#';
		$centro['en'] = '#';
?>
 
      <div  class="block">
        <h2><a href="<?php echo $centro[ICL_LANGUAGE_CODE]; ?>"> <?php echo $titolo_centro[ICL_LANGUAGE_CODE]; ?></a></h2>
      </div>
<?php 
  if ( is_page(array(4828,4831, 3666, 3726)) ) {
  	      wp_nav_menu(
  		      array(
  		
  			'menu' => 'Knowledge Centre & Lab'
  		      )
  	     );
?>
<?php }  elseif (is_page(array(3729,3669))) { 
  wp_nav_menu(array(
  		'menu' => 'Roma'
  		      )
  	     );
  
  
  ?>
      <?php } ?>
      <?php // wp_nav_menu( array( 'menu' => 'Centri' )); ?>
    </div>
    <aside class="col-md-3 columns col-md-push-1 space col-xs-12">
      <div  class="block">
        <div class="content row"> <?php echo do_shortcode('[ssba]'); ?> </div>
      </div>
    </aside>
  </div>
  <!--END .row --> 
</div>
<!--END .container -->
<?php 

get_footer(ICL_LANGUAGE_CODE);

?>
