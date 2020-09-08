<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;
/**
 * Template Name: Progetti Speciali 2017
 * @file progetti-speciali-2017.php
 */
get_header( 2017 );
?>
<div id="HomeCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="item active"><img src="/wp-content/uploads/2017/04/ProgettiSpeciali.jpg" alt="<?php the_title()?>" height="800">
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
			<div class="col-md-3">
				<div class="feature">
					<h2 class="block-title h2" style="font-size: 23px"><a href="<?php echo get_field('home_launch_box_url_1') ?>"><?php echo get_field('home_launch_box_title_1') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_1') ?> </p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="feature">
					<h2 class="block-title h2" style="font-size: 23px"><a href="<?php echo get_field('home_launch_box_url_2') ?>"><?php echo get_field('home_launch_box_title_2') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_2') ?> </p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="feature">
					<h2 class="block-title h2" style="font-size: 23px"><a href="<?php echo get_field('home_launch_box_url_3') ?>"><?php echo get_field('home_launch_box_title_3') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_3') ?> </p>
				</div>
			</div>
			
			
			<div class="col-md-3">
				<div class="feature">
					<h2 class="block-title h2" style="font-size: 23px"><a href="<?php echo get_field('home_launch_box_url_4') ?>"><?php echo get_field('home_launch_box_title_4') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_4') ?> </p>
				</div>
			</div>
			
		</div>
	</div>
</section>
<section class="bg_1_info body-section bg_3_perche">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<p class="white-style h2">
					<?php echo get_field('home_launch_box_excerpt_bottom') ?>
				</p>
			</div>
		</div>
	</div>
</section>

  <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?>

<?php get_footer(2017); ?>