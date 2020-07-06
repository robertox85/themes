<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
/*
*/
get_header(2017); 
?>
<style type="text/css">
.iframe-rwd {
	position: relative;
	padding-bottom: 40%;
	padding-top: 30px;
	height: 0;
	overflow: hidden;
}
.iframe-rwd iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
</style>

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
<?php
$data_inizio = get_post_meta( $post->ID, 'data_inizio', true);
$new_format_start = date('M/j/Y',strtotime($data_inizio));

$data_termine = get_post_meta( $post->ID, 'data_termine', true);
$new_format_start = date('M/j/Y',strtotime($data_termine));
?>
<div class="container">
  <div class="row">
    <main id="main" class="site-main" role="main">
      <div id="page-content" class="col-md-8 columns  space">
        <p><i class="fa fa-calendar"></i> <?php echo get_date($data_inizio,"events",ICL_LANGUAGE_CODE) ?>
          <?  if(get_field('data_termine')!= get_field('data_inizio') ) { echo '- ' .get_date($data_termine,"events",ICL_LANGUAGE_CODE); }?>
          - <?php print_custom_field('ora'); ?> </p>
        <p><i class="fa fa-map-marker"></i> <?php print_custom_field('location'); ?></p>
        <!--   <div class="iframe-rwd"> --><?php print_custom_field('mappa'); ?><!--</div>  -->
		 
        <hr />
        <?php while ( have_posts() ) : the_post(); 
		$post_id = get_the_ID();?>
        <?php the_content(''); ?>
        <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?>
        <?php endwhile; // end of the loop. ?>
      </div>
    </main>
    <aside id="sidebar" class="col-md-3 columns col-md-push-1 space col-xs-12">
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
	'posts_per_page'   => 4,
	'offset'           => 0,
	'cat'              => $news_cat[ICL_LANGUAGE_CODE],
	'post_status'      => 'publish',
	'post_type'        => 'evento',
	'meta_query'  => array(
             array(        
              'key'     => 'data_inizio',  // which meta to query
              'value'   => date("Y-m-d"),
              'compare' => '>=',          // method of comparison
              'type' => 'DATE'
            ) 
           ) ,
	'meta_key'		   => 'data_inizio',
	'orderby'		   => 'meta_value',
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
</div>
<!--END .row -->
</div>
<!--END .container -->

<?php 

get_footer(2017);

?>
