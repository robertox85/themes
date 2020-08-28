<?php
/*
Template Name: Chi siamo interna
*/
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header(2017);
?>
<?php
$titolo_centro       = array();
$titolo_centro['it'] = 'Perché Luiss Business School';
$titolo_centro['en'] = 'Why Luiss Business School';
$contatti       = array();
$contatti['it'] = 'Contatti';
$contatti['en'] = 'Contact Information';
?>


<div class="item-centre box-cover-subhome" style="background-image:url(
                                                  <?php if(is_page('17586')) : ?>
                                                  <?php echo site_url() ?>/wp-content/uploads/2017/04/ProgettiSpeciali.jpg
                                                  <?php else : ?>
                                                  <?php echo site_url() ?>/wp-content/uploads/2017/06/ChiSiamo_Governance_Certificazioni.jpg
                                                  <?php endif; ?>
                                                  )">
    <div class="container">
        <div class="row centre mt-128 pt-80">
            <div class="col-md-12">
            <h1><?php echo the_title(); ?></h1>
            <h2><span class="bg__gold"><?php echo $titolo_centro[ICL_LANGUAGE_CODE];?></span></h2>
            </div>
        </div>
    </div>
</div>

<?php if(is_page('17586')) : ?>
<?php get_template_part( 'pco/template-parts/section-progetti-speciali', get_post_format() ); ?>
<?php else : ?>

<div class="container">
    <div class="row">
        <main id="main" class="site-main">
            <div id="page-content" class="col-md-8">
<?php
while (have_posts()): the_post();
$post_id = get_the_ID();
?>
<?php the_content(''); ?>

<?php
endwhile; // end of the loop. 
?>

<p><?php if (is_page("attivita-culturali-luiss")) { ?>
<?php get_template_part('attivitarss'); ?>
<?php } ?></p>
<?php endif; ?>

            </div>
            <?php if(is_page('17586')) : ?>
            <?php else : ?>
            <div id="sidebar-menu" class="col-md-3 offset-md-1">
                <?php
$centro       = array();
$centro['it'] = 'Perché Luiss Business School';
$centro['en'] = 'Why Luiss Business School';

$link_centro       = array();
$link_centro['it'] = '/perche-luiss-bs/';
$link_centro['en'] = '/en/why-luiss-bs/';
?>


                <a title="<?php echo $centro[ICL_LANGUAGE_CODE];?>" href="<?php echo $link_centro[ICL_LANGUAGE_CODE]; ?>">
                <h5 class="color__gold mt-48"><?php echo $centro[ICL_LANGUAGE_CODE];?></h5>
                </a>
                <?php
if (ICL_LANGUAGE_CODE == 'it'):
?>

                <?php
    wp_nav_menu(array(
        'menu' => 'Perchè LUISS Business School',
		'depth'           => 0
		
    ));
?>

                <?php
elseif (ICL_LANGUAGE_CODE == 'en'):
?>

                <?php
    wp_nav_menu(array(
        'menu' => 'Why LUISS Business School',
		'depth'           => 0
    ));
?>


                <?php
endif;
?>

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
            <?php endif; ?>
        </main>
    </div>
    <!--END .row -->
    <p><?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
</div>
<!--END .container -->
<?php

get_footer(2017);

?>