<?php
/*
Template Name: Custom Programmes Interna
*/
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header(2017);
?>
<?php
$titolo_centro       = array();
$titolo_centro['it'] = 'Informazioni Utili';
$titolo_centro['en'] = 'Useful information';
$contatti       = array();
$contatti['it'] = 'Contatti';
$contatti['en'] = 'Contact Information';
?>

<div class="item-centre box-cover-subhome-custom" style="background-image:url(<?php echo site_url() ?>/wp-content/themes/lbs_2015/pco/images/offerta-formativa/custom.jpg)">
    <div class="container">
        <div class="row centre mt-128 pt-80">
            <div class="col-md-8">
                <h1><?php echo the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <main id="main" class="site-main">
        <div class="row">
            <div id="page-content" class="col-lg-8">
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


<?php
/*
Template Name: Custom Programmes Interna
*/
get_header(2017); 
?>