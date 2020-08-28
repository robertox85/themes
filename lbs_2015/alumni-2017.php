<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;

/**
 * Template Name: Alumni 2017
 * @file alumni.php
 */
get_header( 2017 );
?>
<div id="Carousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="item active"><img src="<?php echo site_url() ?>/wp-content/uploads/2018/04/alumni.jpg" alt="<?php the_title()?>" class="img-responsive">
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
<section class="drawers">
	<div class="wide-row">
		<div class="container">
			<header class="row">
				<div class="col-lg-12">
					<h2>
						<?php echo get_field('cassetto_lancio'); ?>
					</h2>
				</div>
			</header>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class=" col-lg-3 columns panel">
				<article class="no-img">
					<div class="text">
						<h2 class="headline">
							<?php echo get_field ('titolo_cassetto'); ?>
						</h2>
						<div class="description" itemprop="description">
							<p>
								<?php echo get_field ('descrizione_cassetto'); ?>
							</p>
						</div>
					</div>
				</article>
			</div>
			<div class=" col-lg-3 columns panel">
				<article class="no-img">
					<div class="text">
						<h2 class="headline">
							<?php echo get_field ('titolo_cassetto_2'); ?>
						</h2>
						<div class="description" itemprop="description">
							<p>
								<?php echo get_field ('descrizione_cassetto_2'); ?>
							</p>
						</div>
					</div>
				</article>
			</div>
			<div class=" col-lg-3 columns panel">
				<article class="no-img">
					<div class="text">
						<h2 class="headline">
							<?php echo get_field ('titolo_cassetto_3'); ?>
						</h2>
						<div class="description" itemprop="description">
							<p>
								<?php echo get_field ('descrizione_cassetto_3'); ?>
							</p>
						</div>
					</div>
				</article>
			</div>
			<div class=" col-lg-3 columns panel">
				<article class="no-img">
					<div class="text">
						<h2 class="headline">
							<?php echo get_field('titolo_cassetto_4'); ?>
						</h2>
						<div class="description" itemprop="description">
							<p>
								<?php echo get_field('descrizione_cassetto_4'); ?>
							</p>
						</div>
					</div>
			</div>
			</article>
		</div>
	</div>
</section>
<section class="stories stories-cards cards  bg_alumni">
	<div class="wide-row">
		<div class="container">
			<header class="row">
				<div class="col-lg-10 space">
					<h2>
						<?php echo get_field ('titolo_lancio_storia'); ?>
					</h2>
				</div>
<!--
				<div class="col-lg-2 space">
					<a href="<?php //echo get_field ('link_tutte_le_storie'); ?>" class="button more"><?php //echo get_field ('tutte_le_storie'); ?></a> </div>
-->
			</header>
		</div>
	</div>
	<?php  
 $post_parent['it']=125;
 $post_parent['en']=1558;
 
 $args = array(
	'posts_per_page'   => 7,
	'offset'           => 0,
	'orderby'          => 'ID',
	'order'            => 'DESC',
	'post_type'        => 'page',
	'post_status'      => 'publish',
	'post_parent'      => $post_parent[ICL_LANGUAGE_CODE],
	'suppress_filters' => true );
	 
$storie =  get_posts($args);
if (!(empty( $storie))) { ?>
	<div class="row">
		<div class="container">

			<?php 
$s = 0;

$storia_class = array();
$storia_class[1] = 'big with-img';
$storia_class[2] = 'small black';
$storia_class[3] = 'medium with-img';
$storia_class[4] = 'small yellow';
$storia_class[5] = 'medium with-img';
$storia_class[6] = 'small black';
$storia_class[7] = 'big with-img';



foreach(  $storie as $storia )  {
$s++	

?>
			<?php if (in_array($s, array(1,3,6))) {  ?>
			<div class="col-lg-4 col-md-8 nopadding">
				<?php } // END if ?>

				<div class="<?php echo $storia_class[$s] ?>">
					<article>
						<a href="<?php echo get_permalink($storia->ID) ?>" title="<?php echo readmore(ICL_LANGUAGE_CODE) ?>">
							<?php if (in_array($s, array(1,3,5,7))) { 
	$img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $storia->post_title,
);
	echo get_the_post_thumbnail($storia->ID, 'thumbnail',$img_attr);
	
	}?>
							<div class="text">
								<h3 class="color__gold pt-16 pb-4">
									<?php echo $storia->post_title ?>
								</h3>
								<?php if (in_array($s, array(1,7))) {  ?>
								<p>
									<?php echo $storia->post_excerpt ?>
								</p>
								<?php } // END if ?>
							</div>
						</a>
					</article>
				</div>
				<?php if (in_array($s, array(2,5,7))) {  ?>
			</div>
			<?php } // END if ?>

			<?php } // END foreach ?>
		</div>
		<!-- END row -->
	</div>
	<!-- END container -->
	<?php } // END if ?>
</section>
<?php get_footer(2017); ?>