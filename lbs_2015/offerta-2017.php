<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;

/**
 * Template Name: Offerta 2017
 * @file offerta-2017.php
 */
//wp_enqueue_style('Home_Styles','http://lgs.luiss.it/wp-content/themes/lbs_2015/css/home.css');
get_header( 2017 );
?>
<script id="myn_pixel" async src="https://white.mynsystems.com/myn_pixel_fp.js?accountId=50"></script>
<!--
Start of Floodlight Tag: Please do not remove
Activity name of this tag: LUISS_Offerta_Formativa
URL of the webpage where the tag is expected to be placed: 
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 12/20/2018
-->
<script type="text/javascript">
var axel = Math.random() + "";
var a = axel * 10000000000000;
document.write('<iframe src="https://9105818.fls.doubleclick.net/activityi;src=9105818;type=secti0;cat=luiss0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
</script>
<noscript>
<iframe src="https://9105818.fls.doubleclick.net/activityi;src=9105818;type=secti0;cat=luiss0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
</noscript>
<!-- End of Floodlight Tag: Please do not remove -->

<div id="CarouselCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="item active"><img src="//businessschool.luiss.it/wp-content/uploads/2018/04/offerta-formativa.jpg" alt="Offerta Formativa" height="800">
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



<section id="home-section-1" class="home-section">
	<div class="container">



		<?php edit_post_link('<p class="button arr featured-links">Modifica Pagina</p>', ''); ?>



		<div class="row">
			<?php // for ($i = 1; $i <= 6; $i++) { 
   
  // if ($i==4) { echo '</div><div class="row">'; }
   
   ?>
<!--
			<div class="col-md-4">
				<div class="feature titolo-ls">
					<a style="" href="<?php // echo get_field('home_launch_box_url_1'); ?>">

						<h2 class="block-title">
							<?php // echo get_field('home_launch_box_title_1'); ?>
						</h2>
						<p class="paragrafo-ls">
							<?php // echo get_field('home_launch_box_excerpt_1'); ?>
						</p>
					</a>
				</div>
			</div>
-->


			<div class="col-md-6">
				<div class="feature titolo-mba">
					<a style="" href="<?php echo get_field('home_launch_box_url_2'); ?>">
						<h2 class="block-title">
							<?php echo get_field('home_launch_box_title_2'); ?>
						</h2>
						<p class="paragrafo-mba">
							<?php echo get_field('home_launch_box_excerpt_2'); ?>
						</p>
					</a>
				</div>
			</div>


			<div class="col-md-6">
				<div class="feature titolo-master">
					<a style="" href="<?php echo get_field('home_launch_box_url_3'); ?>">
						<h2 class="block-title ">
							<?php echo get_field('home_launch_box_title_3'); ?>
						</h2>


						<p class="paragrafo-master">
							<?php echo get_field('home_launch_box_excerpt_3'); ?>
						</p>
					</a>
				</div>
			</div>


			<div class="col-md-6">
				<div class="feature titolo-pe">
					<a style="" href="<?php echo get_field('home_launch_box_url_4'); ?>">
						<h2 class="block-title">

							<?php echo get_field('home_launch_box_title_4'); ?>

						</h2>




						<p class="paragrafo-pe">
							<?php echo get_field('home_launch_box_excerpt_4'); ?>
						</p>
					</a>
				</div>
			</div>

<!--
			<div class="col-md-4">
				<div class="feature titolo-phd">
					<a style="" href="<?php // echo get_field('home_launch_box_url_5'); ?>">
						<h2 class="block-title ">
							<?php // echo get_field('home_launch_box_title_5'); ?>

						</h2>


						<p class="paragrafo-phd">
							<?php // echo get_field('home_launch_box_excerpt_5'); ?>
						</p>
					</a>
				</div>
			</div>
-->



			<div class="col-md-6">
				<div class="feature titolo-cs">
					<a style="" href="<?php echo get_field('home_launch_box_url_6'); ?>">
						<h2 class="block-title ">
							<?php echo get_field('home_launch_box_title_6'); ?>

						</h2>


						<p class="paragrafo-cs effect-shine">
							<?php echo get_field('home_launch_box_excerpt_6'); ?>
						</p>
					</a>
				</div>
			</div>
		</div>

		<?php // } ?>
	</div>
	<!-- END .row  -->
	</div>
	<!-- END .container -->
</section>



<section class="offerta">
	<div class="container">

		<div class="col-md-6" id="course-finder-wrapper">
			<?php get_template_part('course-finder-widget-new'); ?>
		</div>
	</div>
</section>
<?php get_footer(2017); ?>