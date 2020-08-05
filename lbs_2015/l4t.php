<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;
/**
 * Template Name: Leader for Talent
 * @file l4t.php
 */
get_header( 2017 );
?>
<div id="HomeCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="item active"><img src="<?php echo site_url() ?>/wp-content/uploads/2018/02/Immagine_LforT.png" alt="<?php the_title()?>" height="600">
			<div class="container">
				<div class="carousel-caption">
					<h1>
						<?php the_title()?>
					</h1>
					<p><span class="slider_paragraf"><strong>#L4T</strong></span>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="body-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="feature">
					<p><?php echo get_field('home_launch_box_l4t') ?> </p>
					<div class="vid">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/Dsn1BsBP3uw?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg_1_info body-section bg_3_perche">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<p class=" h2">
					VIDEO
				</p>
			</div>
			<div class="col-lg-8 col-lg-offset-2"> 
			 <?php  if(get_field('title_video_1')) { ?>
				<div class=" col-md-6 embed-container space">
				<h3 ><?php the_field('title_video_1'); ?></h3>
					<iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_1') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				 <?php } ?>		
		  <?php  if(get_field('title_video_2')) { ?>			
				<div class=" col-md-6 embed-container space">
					<h3 ><?php the_field('title_video_2'); ?></h3>
					<iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_2') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
			<?php } ?>	
			</div>
			<div class="col-lg-8 col-lg-offset-2">
				  <?php  if(get_field('title_video_3')) { ?>			
				<div class=" col-md-6 embed-container space">
					<h3><?php the_field('title_video_3'); ?></h3>
					<iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_3') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
			<?php } ?>	
				 <?php  if(get_field('title_video_4')) { ?>			
				<div class=" col-md-6 embed-container space">
					<h3 ><?php the_field('title_video_4'); ?></h3>
					<iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_4') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				<?php } ?>
				</div>
			<div class="col-lg-8 col-lg-offset-2">
				  <?php  if(get_field('title_video_5')) { ?>			
				<div class=" col-md-6 embed-container space">
					<h3 ><?php the_field('title_video_5'); ?></h3>
					<iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_5') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
			<?php } ?>	
				 <?php  if(get_field('title_video_6')) { ?>			
				<div class=" col-md-6 embed-container space">
					<h3 ><?php the_field('title_video_6'); ?></h3>
					<iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_6') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				<?php } ?>
				</div>
				<div class="col-lg-8 col-lg-offset-2">
				  <?php  if(get_field('title_video_7')) { ?>			
				<div class=" col-md-6 embed-container space">
					<h3 ><?php the_field('title_video_7'); ?></h3>
					<iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_7') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
			<?php } ?>	
				 <?php  if(get_field('title_video_8')) { ?>			
				<div class=" col-md-6 embed-container space">
					<h3><?php the_field('title_video_8'); ?></h3>
					<iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_8') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="body-section">
	<div class="container">
		<div class="row items">
			<div class="col-lg-8 col-lg-offset-2">
			<h2 class="block-title h2">News</h2>
			<div class="spacer-20"></div>
			<?php
			$news_cat = array();
			$news_cat[ 'it' ] = 106;
			$news_cat[ 'en' ] = 107;
			$args = array(
				'posts_per_page' => 12,
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
		<a href="<?php echo get_permalink($news->ID) ?>" title="<?php  echo $news->post_title ?>">		
			<article itemscope itemtype="http://schema.org/Article" class="col-md-4">
				<div class="col-md-12 nopadding">
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
				<!--<div class="col-md-2">
					<h3 itemprop="name headline" class="home-news-headline"><a href="<?php //echo get_permalink($news->ID) ?>" title="<?php // echo $news->post_title ?>"><?php //echo $news->post_title ?></a></h3>
				</div>-->
					</article> 
				</a>
			<?php 
} // END foreach
} // END if ?>
			</div>
		</div>
		<?php edit_post_link('<p><strong>Modifica Pagina</strong></p>'); ?>
	</div>
</section>
<?php get_footer(2017); ?>