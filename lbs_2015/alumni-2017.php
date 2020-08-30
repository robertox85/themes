<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;

/**
 * Template Name: Alumni 2017
 * @file alumni.php
 */
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header( 2017 );
?>

<style>
    :root {
        --current-color: #cc8a00;
    }
</style>

<div class="item-centre box-cover-subhome" style="background-image:url(<?php echo site_url() ?>/wp-content/uploads/2018/04/alumni.jpg)">
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
                <h3 class="color__white">
                    <?php echo get_field('cassetto_lancio'); ?>
                </h3>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #F7F9FA">
    <div class="container">
        <div class="row">
            <div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48">
                <h6 class="pb-16"><?php echo get_field ('titolo_cassetto'); ?></h6>
                <p class="pb-32"><?php echo get_field ('descrizione_cassetto'); ?></p>
            </div>

            <div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48">
                <h6 class="pb-16"><?php echo get_field ('titolo_cassetto_2'); ?></h6>
                <p class="pb-32"><?php echo get_field ('descrizione_cassetto_2'); ?></p>
            </div>

            <div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48">
                <h6 class="pb-16"><?php echo get_field ('titolo_cassetto_3'); ?></h6>
                <p class="pb-32"><?php echo get_field ('descrizione_cassetto_3'); ?></p>
            </div>

            <div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48">
                <h6 class="pb-16"><?php echo get_field ('titolo_cassetto_4'); ?></h6>
                <p class="pb-32"><?php echo get_field ('descrizione_cassetto_4'); ?></p>
            </div>


        </div>
    </div>
</section>

<section style="background-color: #F7F9FA">
    <div class="container-fluid px-0 bg__white py-48">
        <div class="container">
            <div class="d-flex flex-row align-items-center justify-content-between section-title">
                <h3 class="color__gold pb-24 mb-0"><?php echo get_field ('titolo_lancio_storia'); ?></h3>
                <a class="button button__primary" href="<?php echo get_field ('link_tutte_le_storie'); ?>"><?php echo get_field ('tutte_le_storie'); ?></a>
            </div>
        </div>
    </div>

    <?php  
 $post_parent['it']=125;
 $post_parent['en']=1558;
 
 $args = array(
	'posts_per_page'   => 8,
	'offset'           => 0,
	'orderby'          => 'ID',
	'order'            => 'DESC',
	'post_type'        => 'page',
	'post_status'      => 'publish',
	'post_parent'      => $post_parent[ICL_LANGUAGE_CODE],
	'suppress_filters' => true );
	 
$storie =  get_posts($args);
if (!(empty($storie))) : ?>
    <div class="container">
        <div class="row">

            <?php 
$s = 0;

$label_button=array();
$label_button['it']='Leggi la storia';
$label_button['en']='Find out more';

foreach(  $storie as $storia )  :
$s++	

?>

            <div class="col-md-3 accordion-card my-24 my-md-48">

                <?php
	$img_attr = array(
	'class'	=> "img-card",
	'alt'	=> $storia->post_title,
);
	echo get_the_post_thumbnail($storia->ID, 'thumbnail',$img_attr);
	
	?>
                <div class="card-content px-24 pt-48 pb-24">
                    <h6 class="pb-16"><?php echo $storia->post_title ?></h6>
                    <?php echo $storia->post_excerpt ?>
                    <a class="button button__secondary pt-32" href="<?php echo get_permalink($storia->ID) ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a>
                </div>
            </div>


            <?php endforeach; // END foreach ?>
            <?php endif; ?>
        </div>
        <!-- END row -->
    </div>
    <!-- END container -->

</section>
<?php edit_post_link('<p><strong>Modifica Pagina</strong></p>'); ?>
<?php get_footer(2017); ?>