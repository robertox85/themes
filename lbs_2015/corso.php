<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Template Name: Corso
 * @file corso.php
 */
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header(2017); 
?>

<style>
    @media (min-width: 1200px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 1440px;
        }
    }

    h1.entry-title {
        font-size: 4rem;
        line-height: 4.2rem;
    }
</style>

<header class="bg__white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-8 mt-48">
                <h1 class="entry-title"><?php echo the_title(); ?></h1>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid">
    <?php get_template_part( 'pco/template-parts/section-keyfacts', get_post_format() ); ?>
</div>

<div class="container">
    <p><?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
    <div class="row">
        <main id="main" role="main" class="col-xs-12 col-md-8" >
            <div id="page-content">
                <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(''); ?>
                <?php endwhile; // end of the loop. ?>
            </div>
        </main>
        <aside class="col-xs-12 col-md-4">
            <div class="block">
                <div class="textwidget">
                    <?php
                       if ( get_field( 'brochure' ) ) {
						echo '<span>' . get_field( 'brochure' ) . '</span>';
						   
					}
						   
					if ( get_field( 'modulo_iscrizione' ) ) {
						echo '<span>' . get_field( 'modulo_iscrizione' ) . '</span>';
					}
					
					
					if ( get_field( 'modulo_recesso' ) ) {
						echo '<span>' . get_field( 'modulo_recesso' ) . '</span>';
					}

					?>
                </div>

                <?php
				if ( get_field( 'titolo_custom' ) ) {
					echo '<div class="block-dark"><h3>' . get_field( 'titolo_custom' ) . '</h3><div class="textwidget"><p>' . get_field( 'campo_custom_contenuto' ) . '</p></div> </div>';
				}
				?>

                <?php
				if ( get_field( 'titolo_campo_custom_2' ) ) {
					echo '<div class="block-dark"><h3>' . get_field( 'titolo_campo_custom_2' ) . '</h3><div class="textwidget"><p>' . get_field( 'campo_custom_2' ) . '</p></div> </div>';
				}
				?>

            </div>

            <?php   
     if (get_field('contatti') || get_field('contatti_campo'));
	 echo '<div class="block-dark">';
	 echo '<h3>'.get_field('contatti').'</h3><div class="textwidget">';
	 echo get_field('contatti_campo');
     echo '</div></div>';
 ?>
        </aside>
    </div>
</div>
<!--<script src="<?php // echo get_bloginfo('template_url') ?>/js/bootstrap.min.js"></script>-->
<?php 

get_footer(2017);

?>