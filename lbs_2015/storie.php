<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Template Name: Storie
 * @file storie.php
*/
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header(2017); 
?>


<style>
    :root {
        --current-color: #cc8a00;
    }
</style>

<div class="item-centre box-cover-subhome" style="background-image:url(<?php echo site_url() ?>/wp-content/uploads/2015/09/LUISS-BS-MBA-Graduation-Day-sh.jpg)">
    <div class="container">
        <div class="row centre mt-128 pt-80">
            <div class="col-md-12">
                <h1><?php echo the_title(); ?></h1>
                <h2><span class="bg__gold">Aluni Made in Luiss Business School</span></h2>
            </div>
        </div>
    </div>
</div>

<section style="background-color: #F7F9FA">

    <?php  
 $post_parent['it']=125;
 $post_parent['en']=1558;
 
 $args = array(
	'posts_per_page'   => -1,
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

            <div class="col-md-6 col-lg-3 accordion-card my-24 my-md-48 px-0">

                <?php
	$img_attr = array(
	'class'	=> "img-card",
	'alt'	=> $storia->post_title,
);
	echo get_the_post_thumbnail($storia->ID, 'thumbnail',$img_attr);
	
	?>

                <div class="card-content p-24"> 
                    <h6 class="pb-16"><?php echo $storia->post_title ?></h6>
                    <?php echo $storia->post_excerpt ?>
                    <a class="button button__secondary mt-32" href="<?php echo get_permalink($storia->ID) ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a>
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