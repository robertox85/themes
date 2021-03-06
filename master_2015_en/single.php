<?php
/**
 * The template for displaying all single posts and attachments
 *
 */

get_header(); ?>

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
        <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?>
        <?php endwhile; // end of the loop. ?>
      </div>
    </main>
    <aside id="sidebar" class="col-md-3 columns col-md-push-1 space col-xs-12">
      <div  class="block">
        <div class="content row"> <?php echo do_shortcode('[ssba]'); ?> </div> </div>
        
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
<?php 

get_footer(ICL_LANGUAGE_CODE);

?>
