


<div id="sidebar" class="clearfix">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('agevolazioni') ) : ?>
  <?php endif; ?>
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