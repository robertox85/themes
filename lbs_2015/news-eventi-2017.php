<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;
/*
Template Name: News ed Eventi 2017
*/
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header( 2017 );
?> 

<style>
    :root {
        --current-color: #003A70;
    }
</style>

<?php $titolo_news = array();
$titolo_news[ 'it' ] = ' Tutte le news e gli eventi';
$titolo_news[ 'en' ] = 'All the news and events';

$titolo_eventi = array();
$titolo_eventi[ 'it' ] = 'Eventi';
$titolo_eventi[ 'en' ] = 'Events';

$tutti_eventi = array();
$tutti_eventi[ 'it' ] = 'Tutti gli Eventi';
$tutti_eventi[ 'en' ] = 'All Events';

$link_eventi = array();
$link_eventi[ 'it' ] = '/news-eventi/calendario/';
$link_eventi[ 'en' ] = '/en/news-events/calendar/';

$tutti_news = array();
$tutti_news[ 'it' ] = 'Tutte le News';
$tutti_news[ 'en' ] = 'All News';

$link_news = array();
$link_news[ 'it' ] = '/news-eventi/news/';
$link_news[ 'en' ] = '/en/news-events/news/';
?>


<div class="item-centre box-cover-subhome" style="background-image:url(<?php echo site_url() ?>/wp-content/uploads/2017/03/immagine_news_sub_home.jpg)">
    <div class="container">
        <div class="row centre mt-128 pt-80">
            <div class="col-md-12">
            <h1><?php echo the_title(); ?></h1>
            <h2><span class="bg__gold"><?php echo $titolo_news[ICL_LANGUAGE_CODE]; ?></span></h2>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container-fluid px-0 py-48" style="background-color: #F7F9FA">
        <div class="container">
            <div class="d-flex flex-row align-items-center justify-content-between section-title">
                <h3 class="color__gold pb-24 mb-0"><?php echo $titolo_eventi[ICL_LANGUAGE_CODE] ?></h3>
                <a class="button button__primary" href="<?php  echo $link_eventi[ICL_LANGUAGE_CODE]; ?>"><?php  echo $tutti_eventi[ICL_LANGUAGE_CODE]; ?></a>
            </div>
        </div>
    </div>
	<div class="container">
		<div class="row mt-48 mb-128">
			<?php

			$eventi_cat = array();
			$eventi_cat[ 'it' ] = 22;
			$eventi_cat[ 'en' ] = 23;
			$args = array(
				'posts_per_page' => 6,
				'offset' => 0,
				'cat' => $eventi_cat[ ICL_LANGUAGE_CODE ],
				'post_status' => 'publish',
				'post_type' => 'evento',
				'orderby' => 'post_date',
				'order' => 'DESC',
				'suppress_filters' => true );
			$events = get_posts( $args );

			if ( !( empty( $events ) ) ) {
				foreach ( $events as $event ) {
					$data_inizio = get_post_meta( $event->ID, 'data_inizio', true );

					?>
            
            <div class="col-12 col-lg-4">
            <article itemscope="" itemtype="http://schema.org/Article">
                    <div class="d-flex flex-row align-items-center justify-content-between my-16">
                        <div class="col-xs-4 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
                            <h6 class="my-0"><?php echo get_date($data_inizio,"events",ICL_LANGUAGE_CODE) ?></h6>
                        </div>
                        <div class="col-xs-8 box-event-title">
                            <h6 class="my-0" itemprop="name headline"><a href="<?php echo get_permalink($event->ID) ?>" title="<?php echo $event->post_title ?>" title="<?php echo $event->post_title ?>"><?php echo $event->post_title ?></a></h6>
                            <p>
						<?php echo $event->post_excerpt ?>
					</p>
                        </div>
                    </div>
                </article>
            </div>
        
			<?php 
} // END foreach

} // END if ?>
			
			
		</div>
	</div>
</section>


<section class="bg_3_perche">
    <div class="container-fluid px-0 pt-48">
        <div class="container">
            <div class="d-flex flex-row align-items-center justify-content-between section-title">
                <h3 class="color__white pb-24 mb-0">News</h3>
                <a class="button button__primary" href="<?php  echo $link_news[ICL_LANGUAGE_CODE]; ?>"><?php  echo $tutti_news[ICL_LANGUAGE_CODE]; ?></a>
            </div>
        </div>
    </div>
    <div class="container px-0">
		<div class="row mt-48 mb-128">

    <?php

			$news_cat = array();
			$news_cat[ 'it' ] = 1;
			$news_cat[ 'en' ] = 2;
			$args = array(
				'posts_per_page' => 6,
				'offset' => 0,
				'cat' => $news_cat[ ICL_LANGUAGE_CODE ],
				'post_status' => 'publish',
				'post_type' => 'post',
				'orderby' => 'post_date',
				'order' => 'DESC',
				'suppress_filters' => true );
			$news = get_posts( $args );

			if ( !( empty( $news ) ) ) {
				foreach ( $news as $news ) {


					?>
            
            
            <div class="col-12 col-lg-4">
            <article itemscope="" itemtype="http://schema.org/Article">
                    <div class="d-flex flex-row align-items-center justify-content-between my-16">
                        <div class="col-xs-4">
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
                        <div class="col-xs-8">
                            <h6 class="my-0" itemprop="name headline"><a href="<?php echo get_permalink($news->ID) ?>" title="<?php echo $news->post_title ?>" class="color__white"><?php echo $news->post_title ?></a></h6>
                            <p>
						<?php echo $news->post_excerpt ?>
					</p>
                        </div>
                    </div>
                </article>
            </div>

			<?php 
} // END foreach

} // END if ?>
    
		</div>
	</div>
</section>

<?php get_footer(2017); ?>