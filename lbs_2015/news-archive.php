<?php
/*
Template Name: Archivio News
*/
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header(2017); ?>

<style>
    :root {
        --current-color: #003A70;
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

<section>
<div class="container">
<div class="row">
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
 
    
    <div class="col-12 col-lg-6 my-16" style="border: 1px solid #e8e8e8;">
            <article itemscope="" itemtype="http://schema.org/Article">
                    <div class="row d-flex flex-row align-items-center justify-content-between my-16 px-16">
                        <div class="col-xs-4">
                            <span itemscope itemtype='http://schema.org/ImageObject'>
						<?php 
	$img_attr = array(
	'class'	=> "img-responsive",
);
	echo get_the_post_thumbnail($news->ID, 'thumbnail',$img_attr);
	
	?>
					</span>
                        </div>
                        <div class="col-xs-8">
                            <h6 class="my-0" itemprop="name headline"><?php echo the_title() ?></h6>
                            <p>
						<?php echo the_excerpt() ?>
					</p>
                            <a class="button button__secondary" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php
echo $leggi[ICL_LANGUAGE_CODE]; ?></a>
   
                        </div>
                    </div>
                </article>
            </div>

<?php 
} // END foreach

} // END if ?>
    </div>
<nav class="pagination-nav">
  <?php

$next_label['it']= '<span class="text-uppercase color__white strong">News più vecchie <i class="fal fa-angle-right"></i></span>';
$next_label['en']= '<span class="text-uppercase color__white strong">Older News <i class="fal fa-angle-right"></i></span>';

$prev_label['it']= '<span class="text-uppercase color__white strong"><i class="fal fa-angle-left"></i> News più recenti</span>';
$prev_label['en']= '<span class="text-uppercase color__white strong"><i class="fal fa-angle-left"></i> Newer News</span>';

// next_posts_link() usage with max_num_pages
previous_posts_link($prev_label[ICL_LANGUAGE_CODE]);
next_posts_link($next_label[ICL_LANGUAGE_CODE], $news_list->max_num_pages );

?>
</nav>
<?php 
// clean up after the query and pagination
wp_reset_postdata(); 
?>

<!--END .row -->

</div>
</section>
<!--END .container -->
<?php 

get_footer(2017);

?>
