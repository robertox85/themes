<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;
/**
 * Template Name: Agevolazioni e Sevizi 2017
 * @file agevolazioni-2017.php
 */
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header( 2017 );
?>

<style>
:root {
  --current-color: #cc8a00;
}
</style>

<div class="item-centre box-cover-subhome" style="background-image:url(<?php echo site_url() ?>/wp-content/uploads/2017/04/AgevolazioniServizi.jpg)">
    <div class="container">
        <div class="row centre mt-128 pt-80">
            <div class="col-md-12">
            <h1><?php echo the_title(); ?></h1>
            <h2><span class="bg__gold"><?php echo get_field('sub_h1') ?></span></h2>
            </div>
        </div>
    </div>
</div>

<section class="bg__blue py-64">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h3 class="color__white pb-24">
					<?php echo get_field('home_launch_box_excerpt_7') ?>
				</h3>
                <h3 class="color__white">
					<?php echo get_field('home_launch_box_excerpt_8') ?>
				</h3>
			</div>
		</div>
	</div>
</section>

<?php 
$label_button=array();
$label_button['it']='Scopri';
$label_button['en']='Find out more';
?>

<section style="background-color: #F7F9FA">
	<div class="container">
		<div class="row">
			<div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48 d-flex flex-column align-items-start justify-content-between"><div class="firs-block">
                <h6 class="pb-16"><?php echo get_field('home_launch_box_title_10') ?></h6>
                <p class="pb-32"><?php echo get_field('home_launch_box_excerpt_10') ?></p>
                </div><div class="second-block"><a class="button button__secondary" href="<?php echo get_field('home_launch_box_url_10') ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a></div>
			</div>
            
            <div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48 d-flex flex-column align-items-start justify-content-between"><div class="firs-block">
                <h6 class="pb-16"><?php echo get_field('home_launch_box_title_6') ?></h6>
                <p class="pb-32"><?php echo get_field('home_launch_box_excerpt_6') ?></p>
                </div><div class="second-block"><a class="button button__secondary" href="<?php echo get_field('home_launch_box_url_6') ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a></div>
			</div>
            <!--
            <div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48 d-flex flex-column align-items-start justify-content-between"><div class="firs-block">
                <h6 class="pb-16"><?php echo get_field('home_launch_box_title_1') ?></h6>
                <p class="pb-32"><?php echo get_field('home_launch_box_excerpt_1') ?></p>
                </div><div class="second-block"><a class="button button__secondary" href="<?php echo get_field('home_launch_box_url_1') ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a></div>
			</div>
            -->
            <div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48 d-flex flex-column align-items-start justify-content-between"><div class="firs-block">
                <h6 class="pb-16"><?php echo get_field('home_launch_box_title_3') ?></h6>
                <p class="pb-32"><?php echo get_field('home_launch_box_excerpt_3') ?></p>
                </div><div class="second-block"><a class="button button__secondary" href="<?php echo get_field('home_launch_box_url_3') ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a></div>
			</div>
            
            <div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48 d-flex flex-column align-items-start justify-content-between"><div class="firs-block">
                <h6 class="pb-16"><?php echo get_field('home_launch_box_title_4') ?></h6>
                <p class="pb-32"><?php echo get_field('home_launch_box_excerpt_4') ?></p>
                </div><div class="second-block"><a class="button button__secondary" href="<?php echo get_field('home_launch_box_url_4') ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a></div>
			</div>
            
            <div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48 d-flex flex-column align-items-start justify-content-between"><div class="firs-block">
                <h6 class="pb-16"><?php echo get_field('home_launch_box_title_2') ?></h6>
                <p class="pb-32"><?php echo get_field('home_launch_box_excerpt_2') ?></p>
                </div><div class="second-block"><a class="button button__secondary" href="<?php echo get_field('home_launch_box_url_2') ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a></div>
			</div>
            
            <div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48 d-flex flex-column align-items-start justify-content-between"><div class="firs-block">
                <h6 class="pb-16"><?php echo get_field('home_launch_box_title_5') ?></h6>
                <p class="pb-32"><?php echo get_field('home_launch_box_excerpt_5') ?></p>
                </div><div class="second-block"><a class="button button__secondary" href="<?php echo get_field('home_launch_box_url_5') ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a></div>
			</div>
            
            <div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48 d-flex flex-column align-items-start justify-content-between"><div class="firs-block">
                <h6 class="pb-16"><?php echo get_field('home_launch_box_title_9') ?></h6>
                <p class="pb-32"><?php echo get_field('home_launch_box_excerpt_9') ?></p>
                </div><div class="second-block"><a class="button button__secondary" href="<?php echo get_field('home_launch_box_url_9') ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a></div>
			</div>	
		</div>
	</div>
</section>
<p><?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
<?php get_footer(2017); ?>