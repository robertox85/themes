<?php
/*
Template Name: Archivio News
*/

get_header(2017); ?>

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
<section class="body-section">

<div class="container">
<div class="row items">
<?php
   
   


   
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;   
$news_cat=array();	 		
$news_cat['it']=1;
$news_cat['en']=2;
  $args = array(
	'posts_per_page'   => 16,

	'cat'              => $news_cat[ICL_LANGUAGE_CODE],
	
	'paged'            => $paged,
	'post_status'      => 'publish',
	'post_type'        => 'post',
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'suppress_filters' => true );
	

 
 $news_list  = new WP_Query($args);
if ( $news_list->have_posts() ) {
while ( $news_list->have_posts() ) {
$news_list->the_post();


 
 ?>
 
 <?php $leggi = array();
$leggi[ 'it' ] = 'Leggi di più';
$leggi[ 'en' ] = 'Read more';
?>
 
 
 <article itemscope itemtype="http://schema.org/Article" class="col-md-6 fix-box">
       
       <div class="col-md-4 nopadding">
        <span itemscope itemtype='http://schema.org/ImageObject'>
                <?php 
	$img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $news->post_title,
);
	echo get_the_post_thumbnail($news->ID, 'thumbnail',$img_attr);
	
	?>
    </span>
  </div>
  <div class="col-md-8">
  <h3 itemprop="name headline" class="home-news-headline"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
  <?php the_excerpt() ?>
  
  <p><a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>"><?php
echo $leggi[ICL_LANGUAGE_CODE]; ?> »</a></p>
  
  </div>
  <div class="clearfix"></div>
              </article>
<?php 
} // END foreach

} // END if ?>
<nav class="pagination-nav">
  <?php

$next_label['it']= '<span class="white-style">News più vecchie &raquo;</span>';
$next_label['en']= '<span class="white-style">Older News &raquo;</span>';

$prev_label['it']= '<span class="white-style">&laquo; News più recenti</span>';
$prev_label['en']= '<span class="white-style">&laquo; Newer News</span>';

// next_posts_link() usage with max_num_pages
previous_posts_link($prev_label[ICL_LANGUAGE_CODE]);
next_posts_link($next_label[ICL_LANGUAGE_CODE], $news_list->max_num_pages );

?>
</nav>
<?php 
// clean up after the query and pagination
wp_reset_postdata(); 
?>
</div>
<!--END .row -->

</div>
</section>
<!--END .container -->
<?php 

get_footer(2017);

?>
