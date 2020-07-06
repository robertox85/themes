<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;
/*
Template Name: News ed Eventi 2017
*/
get_header( 2017 );
?> 
<?php $titolo_news = array();
$titolo_news[ 'it' ] = ' Tutte le news e gli eventi';
$titolo_news[ 'en' ] = 'All the news and events';
?>

<?php $titolo_eventi = array();
$titolo_eventi[ 'it' ] = 'EVENTI';
$titolo_eventi[ 'en' ] = 'EVENTS';
?>

<?php $tutti_eventi = array();
$tutti_eventi[ 'it' ] = 'TUTTI GLI EVENTI';
$tutti_eventi[ 'en' ] = 'ALL EVENTS';
?>

<?php $link_eventi = array();
$link_eventi[ 'it' ] = '/news-eventi/calendario/';
$link_eventi[ 'en' ] = '/en/news-events/calendar/';
?>


<?php $tutti_news = array();
$tutti_news[ 'it' ] = 'TUTTE LE NEWS';
$tutti_news[ 'en' ] = 'ALL NEWS';
?>

<?php $link_news = array();
$link_news[ 'it' ] = '/news-eventi/news/';
$link_news[ 'en' ] = '/en/news-events/news/';
?>

<div id="Carousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="item active"><img src="<?php echo site_url() ?>/wp-content/uploads/2017/03/immagine_news_sub_home.jpg" alt="<?php the_title()?>">
			<div class="container">
				<div class="carousel-caption">
					<h1>
						<?php the_title()?>
					</h1>
					<p><span class="slider_paragraf"><strong><?php echo $titolo_news[ICL_LANGUAGE_CODE]; ?></strong></span>
				</div>
			</div>
		</div>
	</div>
</div>



<section class="body-section">

	<div class="container">
		<div class="row items">
			<h2 class="block-title ">
				<?php echo $titolo_eventi[ICL_LANGUAGE_CODE] ?>
			</h2>
			<div class="spacer-20"></div>


			<?php

			$eventi_cat = array();
			$eventi_cat[ 'it' ] = 22;
			$eventi_cat[ 'en' ] = 23;
			$args = array(
				'posts_per_page' => 4,
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
			<article itemscope itemtype="http://schema.org/Article" class="col-md-6" style="min-height: 200px;">

				<div class="event-date">
					<?php echo get_date($data_inizio,"events",ICL_LANGUAGE_CODE) ?>
				</div>
				<div class="pull-left event-preview">
					<h3 itemprop="name headline" class="home-news-headline"><a href="<?php echo get_permalink($event->ID) ?>" title="<?php echo $event->post_title ?>"><?php echo $event->post_title ?></a></h3>
					<p>
						<?php echo $event->post_excerpt ?>
					</p>
				</div>
				
			</article>
			
			
			

			<?php 
} // END foreach

} // END if ?>
			
			<p style="margin-top:40px;"><a href="<?php  echo $link_eventi[ICL_LANGUAGE_CODE]; ?>" class="button col-md-12 featured-links"><span class="white-style"><?php  echo $tutti_eventi[ICL_LANGUAGE_CODE]; ?></span></a>
			</p>
		</div>
	</div>

</section>
<section class="body-section bg_3_perche">
	<div class="container">
		<div class="row items">
			<h2 class="block-title h2 white-style">News</h2>
			<div class="spacer-20"></div>
			<?php

			$news_cat = array();
			$news_cat[ 'it' ] = 1;
			$news_cat[ 'en' ] = 2;
			$args = array(
				'posts_per_page' => 4,
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
			<article itemscope itemtype="http://schema.org/Article" class="col-md-6">

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
					<h3 itemprop="name headline" class="home-news-headline"><a href="<?php echo get_permalink($news->ID) ?>" title="<?php echo $news->post_title ?>"><?php echo $news->post_title ?></a></h3>
					<p class="white-style">
						<?php echo $news->post_excerpt ?>
					</p>
				</div>
				<div class="clearfix"></div>
			</article>

			<?php 
} // END foreach

} // END if ?>
			<div class="clearfix"></div>
			<p style="margin-top:40px;"><a href="<?php  echo $link_news[ICL_LANGUAGE_CODE]; ?>" class="button featured-links col-md-12"><span class="white-style"><?php  echo $tutti_news[ICL_LANGUAGE_CODE]; ?></span></a>
			</p>
		</div>
	</div>

</section>

<?php get_footer(2017); ?>