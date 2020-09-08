<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;
/**
 * Template Name: Servizi di Consulenza
 * @file servizi-consulenza.php
 */
get_header( 2017 );
?>
<div id="HomeCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="item active"><img src="/wp-content/uploads/2020/01/ProgettiSpeciali_rev.jpg" alt="<?php the_title()?>" height="800">
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

 <?php edit_post_link('<p><strong>Modifica Pagina</strong></p>', ''); ?>

<section class="body-section">
	<div class="container">
		
		<?php  if(get_field('home_launch_box_excerpt_top')) { ?>
		<div class="row">
			<div class="col-lg-12">
				<p class="h2">
					<?php echo get_field('home_launch_box_excerpt_top') ?>
				</p>
			</div>
		</div>
		<?php } ?>
		
		
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
		
		
		
		
		
		 <?php  if(get_field('home_launch_box_url_5')) { ?>
		<div class="row">
			<div class="col-md-3">
				<div class="feature">
					<h2 class="block-title h2" style="font-size: 23px"><a href="<?php echo get_field('home_launch_box_url_5') ?>"><?php echo get_field('home_launch_box_title_5') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_5') ?> </p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="feature">
					<h2 class="block-title h2" style="font-size: 23px"><a href="<?php echo get_field('home_launch_box_url_6') ?>"><?php echo get_field('home_launch_box_title_6') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_6') ?> </p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="feature">
					<h2 class="block-title h2" style="font-size: 23px"><a href="<?php echo get_field('home_launch_box_url_7') ?>"><?php echo get_field('home_launch_box_title_7') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_7') ?> </p>
				</div>
			</div>
			
			
			<div class="col-md-3">
				<div class="feature">
					<h2 class="block-title h2" style="font-size: 23px"><a href="<?php echo get_field('home_launch_box_url_8') ?>"><?php echo get_field('home_launch_box_title_8') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_8') ?> </p>
				</div>
			</div>
		</div>
<?php } ?>
		
		
 <?php  if(get_field('home_launch_box_url_9')) { ?>
		<div class="row">
			<div class="col-md-3">
				<div class="feature">
					<h2 class="block-title h2" style="font-size: 23px"><a href="<?php echo get_field('home_launch_box_url_9') ?>"><?php echo get_field('home_launch_box_title_9') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_9') ?> </p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="feature">
					<h2 class="block-title h2" style="font-size: 23px"><a href="<?php echo get_field('home_launch_box_url_10') ?>"><?php echo get_field('home_launch_box_title_10') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_10') ?> </p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="feature">
					<h2 class="block-title h2" style="font-size: 23px"><a href="<?php echo get_field('home_launch_box_url_11') ?>"><?php echo get_field('home_launch_box_title_11') ?></a></h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_11') ?> </p>
				</div>
			</div>
		</div>
		<?php } ?>
		
		
		
		
	</div>
</section>
	
		 <?php  if(get_field('home_launch_box_excerpt_bottom')) { ?>
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
	<?php } ?>
 

<?php get_footer(2017); ?>