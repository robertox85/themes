<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
/*
Template Name: accordi
*/
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header(2017); 
?>

<?php
$titolo_centro       = array();
$titolo_centro['it'] = 'Informazioni Utili';
$titolo_centro['en'] = 'Useful information';
?>


<style>
:root {
  --current-color: #cc8a00;
}  
</style>

<div class="item-centre box-cover-subhome" style="background-image:url(<?php echo site_url() ?>/wp-content/uploads/2017/06/Campus_etc.jpg)">
    <div class="container">
        <div class="row centre mt-128 pt-80">
            <div class="col-md-12">
            <h1><?php echo the_title(); ?></h1>
            <h2><span class="bg__gold"><?php echo $titolo_centro[ICL_LANGUAGE_CODE];?></span></h2>
            </div>
        </div>
    </div>
</div>


<?php 
$label_button=array();
$label_button['it']='Scopri';
$label_button['en']='Find out more';
?>

<div class="container">
    <div class="row">
        <main class="site-main">
            <div id="page-content" class="col-md-8">
            <div class="row">
            <?php $my_query = new WP_Query('posts_per_page=-1&&post_type=accordo');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate = $post->ID; ?>
                
        <div class="col-md-6 accordion-card px-24 pt-48 pb-24 my-24 my-md-48">
                <h6 class="pb-16"><?php the_title(); ?></h6>
                <?php the_excerpt(); ?>
                <a class="mt-32 button button__secondary" href="<?php the_permalink(); ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a>
                <p class="small"><?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
			</div>
        
<?php endwhile;  wp_reset_query(); ?>
            
            </div>
            </div>
                        <div id="sidebar-menu" class="col-md-3 offset-md-1">
                <?php
$centro       = array();
$centro['it'] = 'Informazioni utili';
$centro['en'] = 'Useful Information';

$link_centro       = array();
$link_centro['it'] = '/agevolazioni-e-servizi/';
$link_centro['en'] = '/en/service-facilities/';
?>

                <a title="<?php echo $centro[ICL_LANGUAGE_CODE];?>" href="<?php echo $link_centro[ICL_LANGUAGE_CODE]; ?>">
                <h5 class="color__gold mt-48"><?php echo $centro[ICL_LANGUAGE_CODE];?></h5>
                </a>
                <?php
if (ICL_LANGUAGE_CODE == 'it'):
?> 
     
<?php
    wp_nav_menu(array(
        'menu' => 'Informazioni Utili'
    ));
?>

<?php
elseif (ICL_LANGUAGE_CODE == 'en'):
?>
  
 <?php
    wp_nav_menu(array(
        'menu' => 'Useful information'
    ));
?>
 
 
<?php endif; ?> 

                <div class="">
                    <h5 class="color__gold mt-48"><?php echo $contatti[ICL_LANGUAGE_CODE]; ?></h5>
                    <p class="title"><strong>Luiss Business School</strong></p>
                    <p> Villa Blanc,
                        <br />Via Nomentana, 216 - 00162 Roma
                        <br />Italia
                        <br />Tel. +39 06 852251
                        <br />Email: <a href="mailto:luissbs@luiss.it" class="">luissbs@luiss.it</a></p>
                </div>
            </div>
            
        </main>
    </div>
    <p><?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
</div>
<!--END .container -->
<?php

get_footer(2017);

?>  