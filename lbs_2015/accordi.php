<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
/*
Template Name: accordi
*/
get_header(2017); 
?>


<?php
$titolo_centro       = array();
$titolo_centro['it'] = ' Informazioni Utili';
$titolo_centro['en'] = 'Useful information';
?>

<div class="item-centre"><img src="<?php echo site_url() ?>/wp-content/uploads/2017/06/Campus_etc.jpg" alt="<?php
the_title();
?>" >
  <div class="container">
    <div class="centre-caption-info centre">
      <h1><?php
echo the_title();
?></h1>
      <h2> <?php
echo $titolo_centro[ICL_LANGUAGE_CODE];
?> </h2>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <main id="main" class="site-main centre">
      <div id="page-content" class="col-md-9 columns  space"> 
       
       
       
       
       
       
       
       
        <?php $my_query = new WP_Query('posts_per_page=-1&&post_type=accordo');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate = $post->ID; ?>
        <h3><a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
          </a></strong></h3>
        <?php the_excerpt(); ?>
        <hr />
        
        <p> <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
        
        <?php endwhile;  wp_reset_query(); ?>
      </div>
    </main>
    
    
    
   <div id="sidebar-menu-centro" class="col-md-3 columns  space col-xs-12">
      
      
      <?php
$centro       = array();
$centro['it'] = 'INFORMAZIONI UTILI';
$centro['en'] = 'USEFUL INFORMATION';
?>
 
 
       <?php
$link_centro       = array();
$link_centro['it'] = '/agevolazioni-e-servizi/';
$link_centro['en'] = '/en/service-facilities/';
?>
 
 
 <h2 ><a  class=" white-style" title="<?php
echo $centro[ICL_LANGUAGE_CODE];
 ?>" href="<?php
echo $link_centro[ICL_LANGUAGE_CODE];
?>" ><?php
echo $centro[ICL_LANGUAGE_CODE];
 ?> </a></h2>
     
      <?php
if (ICL_LANGUAGE_CODE == 'it'):
?> 
     
<?php
    wp_nav_menu(array(
        'menu' => 'Informazioni Utili'
    ));
?>

<?php
elseif (ICL_LANGUAGE_CODE == 'en'):
?>
  
 <?php
    wp_nav_menu(array(
        'menu' => 'Useful information'
    ));
?>
 
 
<?php
endif;
?> 
   
    
    </div> 
    
    
    
    
    
    
    
    
    <aside id="sidebar" class="col-lg-3 col-sm-12 space">
      <div  class="block">
        <div class="content row"> <?php echo do_shortcode('[ssba]'); ?> </div>
      </div>
      <div  class="block">
      <div class="content row">
        <?php   $titolo_news = array();
		$titolo_news['it'] = 'Ultimi Eventi';
		$titolo_news['en'] = 'Last Events';
?>
        <h2><?php echo $titolo_news[ICL_LANGUAGE_CODE]; ?></h2>
        <?php

$news_cat=array();	 		
$news_cat['it']=22;
$news_cat['en']=23;
  $args = array(
	'posts_per_page'   => 3,
	'offset'           => 0,
	'cat'              => $news_cat[ICL_LANGUAGE_CODE],
	'post_status'      => 'publish',
	'post_type'        => 'evento',
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'suppress_filters' => true );
 $news =  get_posts($args);
	 
if (!(empty($news))) {
 foreach($news as $news )  {
	 
 
 ?>
        <h5> <a href="<?php echo get_permalink($news->ID) ?>" title="<?php echo $news->post_title ?>"><?php echo $news->post_title ?></a></h5>
        <p class="desc"><em><?php echo $news->post_excerpt ?></em></p>
        <?php 
} // END foreach

} // END if ?>
      </div>
    </div>
    
    <div  class="block">
      <div class="content row">
        <?php   $titolo_news = array();
		$titolo_news['it'] = 'Ultime News';
		$titolo_news['en'] = 'Last news';
?>
        <h2><?php echo $titolo_news[ICL_LANGUAGE_CODE]; ?></h2>
        <?php

$news_cat=array();	 		
$news_cat['it']=1;
$news_cat['en']=2;
  $args = array(
	'posts_per_page'   => 3,
	'offset'           => 0,
	'cat'              => $news_cat[ICL_LANGUAGE_CODE],
	'post_status'      => 'publish',
	'post_type'        => 'post',
	'orderby'          => 'post_date',
	'order'            => 'post_date',
	'suppress_filters' => true );
 $news =  get_posts($args);
	 
if (!(empty($news))) {
 foreach($news as $news )  {
	 
 
 ?>
        <h5> <a href="<?php echo get_permalink($news->ID) ?>" title="<?php echo $news->post_title ?>"><?php echo $news->post_title ?></a></h5>
        <p class="desc"><em><?php echo $news->post_excerpt ?></em></p>
        <?php 
} // END foreach

} // END if ?>
      </div>
    </div>
    
    </aside>
  </div>
  <!--END .row --> 
</div>
<!--END .container -->
<?php get_footer(2017); ?>
