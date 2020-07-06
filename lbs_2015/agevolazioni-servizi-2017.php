<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;
/**
 * Template Name: Agevolazioni e Sevizi 2017
 * @file agevolazioni-2017.php
 */
get_header( 2017 );
?>

<style type="text/css">
@media only screen and (min-width:320px) and (max-width:980px){
}

	.carousel-caption{text-align:left;height:auto;left:1%;margin-bottom:-18%;}

}
</style>

<div id="HomeCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="item active"><img src="<?php echo site_url() ?>/wp-content/uploads/2017/04/AgevolazioniServizi.jpg" alt="<?php the_title()?>">
			<div class="container">
				<div class="carousel-caption">
					<h1>
						<?php the_title()?>
					</h1>
					<p><span class="slider_paragraf"><strong><?php echo get_field('sub_h1') ?></strong></span>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="body-section">
	<div class="container">
		<div class="row">
			
			<div class="col-md-4">
				<div class="feature">
					<h2 class="block-title h2"><a href="<?php echo get_field('home_launch_box_url_10') ?>"><?php echo get_field('home_launch_box_title_10') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_10') ?> </p>
				</div>
			</div>
			
			
			
			
				<div class="col-md-4">
				<div class="feature">
					<h2 class="block-title h2"><a href="<?php echo get_field('home_launch_box_url_6') ?>"><?php echo get_field('home_launch_box_title_6') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_6') ?> </p>
				</div>
			</div>
			
			
<!--
			<div class="col-md-4">
				<div class="feature">
					<h2 class="block-title h2"><a href="<?php //echo get_field('home_launch_box_url_1') ?>"><?php echo get_field('home_launch_box_title_1') ?></a></h2>
					<p>
						<?php // echo get_field('home_launch_box_excerpt_1') ?> </p>
				</div>
			</div>
		
-->
			
			
			
		</div>
		<div class="row">
			
			<div class="col-md-4">
				<div class="feature">
					<h2 class="block-title h2"><a href="<?php echo get_field('home_launch_box_url_3') ?>"><?php echo get_field('home_launch_box_title_3') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_3') ?> </p>
				</div>
			</div>
			
			
			<div class="col-md-4">
				<div class="feature">
					<h2 class="block-title h2"><a href="<?php echo get_field('home_launch_box_url_4') ?>"><?php echo get_field('home_launch_box_title_4') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_4') ?> </p>
				</div>
			</div>
			
			
				<div class="col-md-4">
				<div class="feature">
					<h2 class="block-title h2"><a href="<?php echo get_field('home_launch_box_url_2') ?>"><?php echo get_field('home_launch_box_title_2') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_2') ?> </p>
				</div>
			</div>
		
			
			
			
			
			
		</div>


		<div class="row">
			
			
			<div class="col-md-4">
				<div class="feature">
					<h2 class="block-title h2"><a href="<?php echo get_field('home_launch_box_url_5') ?>"><?php echo get_field('home_launch_box_title_5') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_5') ?> </p>
				</div>
			</div>
			
			
			<div class="col-md-4">
				<div class="feature">
					<h2 class="block-title h2"><a href="<?php echo get_field('home_launch_box_url_9') ?>"><?php echo get_field('home_launch_box_title_9') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_9') ?> </p>
				</div>
			</div>
			
			
			
			
			
			<div class="col-md-4">
				<div class="feature">
					<a href="<?php echo get_field('home_launch_box_url_9') ?>"><img src="<?php echo site_url() ?>/wp-content/uploads/2017/04/Rome_colosseo.jpg" alt="<?php echo get_field('home_launch_box_title_9') ?>" class="img-responsive"></a><p>
				</div>
			</div>
			</div>
			
		</div>


	</div>
</section>
<section class="bg_1_info body-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<p class="white-style h2">
					<?php echo get_field('home_launch_box_excerpt_7') ?>
				</p>
				<p class="white-style h2">
					<?php echo get_field('home_launch_box_excerpt_8') ?>
				</p>
			</div>
		</div>
	</div>
</section>
<?php get_footer(2017); ?>