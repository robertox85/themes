<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;

/**
 * Template Name: Offerta 2017
 * @file offerta-2017.php
 */
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header( 2017 );
?>
<div class="item-centre box-cover-subhome" style="background-image:url(<?php echo site_url() ?>/wp-content/uploads/2018/04/offerta-formativa.jpg)">
    <div class="container">
        <div class="row centre mt-128 pt-80">
            <div class="col-md-12">
            <h1><?php echo the_title(); ?></h1>
            <h2><span class="bg__gold"><?php echo get_field('sub_h1') ?></span></h2>
            </div>
        </div>
    </div>
</div>

<?php 
    
$button_label = array();
$button_label['it'] = 'Scopri';
$button_label['en'] = 'Find out more';
                
?>

<section class="py-24 pt-md-48 pb-md-80" style="border-bottom: 1px solid #e8e8e8;">
    <div class="container px-0">
        <p><?php edit_post_link('<p>Modifica Pagina</p>', ''); ?></p>
        <div class="px-0 d-flex flex-row flex-wrap align-items-stretch justify-content-between">
            <!-- Box delle tipologia di corso -->
            <!--
_1 = Lauree Triennali e magistrali  - non utilizzato
_2 = MBA
_3 = Master
_4 = Programmi Executive
_5 = Programmi Custom - N.B. EDITARE IN PAGINA AL POSTO DI PHD
_6 = Programmi di alta formazione - non utilizzato
            <!-- Box MBA -->
            <div class="card-off-big p-24 m-16 d-flex flex-column align-items-stretch justify-content-center" style="border-color:#00968f;">
                <h2 class="color__green pb-24"><?php echo get_field('home_launch_box_title_2'); ?></h2>
                <p class="big pb-24 d-none d-md-block"><?php echo get_field('home_launch_box_excerpt_2'); ?></p>
                <!-- Pulsanti -->
                <div class="row">
                    <div class="col-xs-12">
                        <a class="button button__primary bg__green hp" href="<?php echo get_field('home_launch_box_url_2'); ?>"><?php echo $button_label[ICL_LANGUAGE_CODE]; ?></a>
                    </div>
                </div>
            </div>

            <!-- Box Master -->
            <div class="card-off-big p-24 m-16 d-flex flex-column align-items-start justify-content-center" style="border-color:#d50032;">
                <h2 class="color__red pb-24"><?php echo get_field('home_launch_box_title_3'); ?></h2>
                <p class="big pb-24 d-none d-md-block"><?php echo get_field('home_launch_box_excerpt_3'); ?></p>
                <!-- Pulsanti -->
                <div class="row">
                    <div class="col-xs-12">
                        <a class="button button__primary bg__red hp" href="<?php echo get_field('home_launch_box_url_3'); ?>"><?php echo $button_label[ICL_LANGUAGE_CODE]; ?></a>
                    </div>
                </div>
            </div>

            <!-- Box Programmi Executive -->
            <div class="card-off-big p-24 m-16 d-flex flex-column align-items-start justify-content-center" style="border-color: #0077c8;">
                <h2 class="color__light_blue pb-24"><?php echo get_field('home_launch_box_title_4'); ?></h2>
                <p class="big pb-24 d-none d-md-block"><?php echo get_field('home_launch_box_excerpt_4'); ?></p>
                <!-- Pulsanti -->
                <div class="row">
                    <div class="col-xs-12">
                        <a class="button button__primary bg__light_blue hp" href="<?php echo get_field('home_launch_box_url_4'); ?>"><?php echo $button_label[ICL_LANGUAGE_CODE]; ?></a>
                    </div>
                </div>
            </div>

            <!-- Box Programmi Custom -->
            <div class="card-off-big p-24 m-16 d-flex flex-column align-items-start justify-content-center" style="border-color: #d45d00;">
                <h2 class="color__orange pb-24"><?php echo get_field('home_launch_box_title_5'); ?></h2>
                <p class="big pb-24 d-none d-md-block"><?php echo get_field('home_launch_box_excerpt_5'); ?></p>
                <!-- Pulsanti -->
                <div class="row">
                    <div class="col-xs-12">
                        <a class="button button__primary bg__orange hp" href="<?php echo get_field('home_launch_box_url_5'); ?>"><?php echo $button_label[ICL_LANGUAGE_CODE]; ?></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="offerta">
	<div class="container">

		<div id="course-finder-wrapper">
			<?php get_template_part('course-finder-widget-new'); ?>
		</div>
	</div>
</section>
<?php get_footer(2017); ?>