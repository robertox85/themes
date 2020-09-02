<?php
/*
Template Name: Pagina - Executive Program
*/
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header(2017);
?>
<?php
$titolo_centro       = array();
$titolo_centro['it'] = 'Real Estate & Infrastructure';
$titolo_centro['en'] = 'Real Estate & Infrastructure';
$contatti['it'] = 'Contatti';
$contatti['en'] = 'Contact Information';
?>

<div class="item-centre box-cover-subhome" style="background-image:url(<?php echo site_url() ?>/wp-content/uploads/2015/12/Real-Estate-Infrastructure.jpg)">
    <div class="container">
        <div class="row centre mt-128 pt-80">
            <div class="col-md-12">
                <h1><?php echo the_title(); ?></h1>
                <h2><span class="bg__gold"><?php echo $titolo_centro[ICL_LANGUAGE_CODE];?></span></h2>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <main id="main" class="site-main">
        <div class="row">
            <div id="page-content" class="col-md-8">
                <?php
while (have_posts()): the_post();
$post_id = get_the_ID();
?>
                <?php the_content(''); ?>

                <?php
endwhile; // end of the loop. 
?>

            </div>
            <div id="sidebar-menu" class="col-md-3 offset-md-1">
                <?php
$centro       = array();
$centro['it'] = 'Real Estate & Infrastructure';
$centro['en'] = 'Real Estate & Infrastructure';

$link_centro       = array();
$link_centro['it'] = '/offerta-formativa/executive-program/real-estate/';
$link_centro['en'] = '/en/programs/executive-program/real-estate/';
?>

                <a title="<?php echo $centro[ICL_LANGUAGE_CODE];?>" href="<?php echo $link_centro[ICL_LANGUAGE_CODE]; ?>">
                    <h5 class="color__gold mt-48"><?php echo $centro[ICL_LANGUAGE_CODE];?></h5>
                </a>
                <?php
if (ICL_LANGUAGE_CODE == 'it'):
?>

                <?php
    wp_nav_menu(array(
        'menu' => 'Offerta Formativa'
    ));
?>

                <?php
elseif (ICL_LANGUAGE_CODE == 'en'):
?>

                <?php
    wp_nav_menu(array(
        'menu' => 'Educational Portfolio'
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
        </div>
    </main>
    <!--END .row -->
    <p><?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
</div>
<!--END .container -->
<?php
get_footer(2017);
?>