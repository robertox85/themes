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
    
    #page-content h1,
    #page-content h2,
    #page-content h3,
    #page-content h4,
    #page-content h5,
    #page-content h6 {
        text-transform: lowercase;
        margin-top: 32px;
        margin-bottom: 16px;
    }
    
    #page-content h1:first-letter,
    #page-content h2:first-letter,
    #page-content h3:first-letter,
    #page-content h4:first-letter,
    #page-content h5:first-letter,
    #page-content h6:first-letter {
        text-transform: uppercase;
    }
    
    @media screen and (max-width: 991px) {
        
        #page-content {
        border-bottom: 1px solid #e8e8e8;
        border-right: 0;
            }
    }
    
    @media screen and (min-width: 992px) {
        
        #page-content {
        border-bottom: 0;
        border-right: 1px solid #e8e8e8;
            }
    }
    
</style>

<?php 

$executive_cat = has_term( 'executive-program', 'category' );
$corso_cat = has_term( 'corso', 'category' );
$specialistica_ex_cat = has_term( 'specialistica-executive', 'category' );
$postlauream_ex_cat = has_term( 'specialistica-postlauream', 'category' );
$specialistica_cat = has_term( 'specialistici', 'category' );

$accounting = has_term( 'accounting-finance-control', 'tematiche' );
    $lobbying = has_term( 'communication-lobbying', 'tematiche' );
    $governance = has_term( 'tax-legal', 'tematiche' );
    $healthcare = has_term( 'public-sector-healthcare-and-no-profit', 'tematiche' );
    $innovation = has_term( 'management-innovation', 'tematiche' );
    $family = has_term( 'management-family-business', 'tematiche' );
    $marketing = has_term( 'marketing-sales-communication', 'tematiche' );
    $people = has_term( 'people-and-organization-development', 'tematiche' );
    $pm = has_term( 'project_management', 'tematiche' );
    $real = has_term( 'real-estate', 'tematiche' );
    $sport = has_term( 'sport-tourism-leisure-culturel', 'tematiche' );
?>


<div class="container-fluid px-0 box-cover
            <?php if($accounting) : ?>
            accounting-cover
            <?php elseif($lobbying) : ?>
            governance-cover
            <?php elseif($governance) : ?>
            governance-cover
            <?php elseif($healthcare) : ?>
            healtcare-cover
            <?php elseif($innovation) : ?>
            innovation-cover
            <?php elseif($family) : ?>
            family-cover
            <?php elseif($marketing) : ?>
            marketing-cover
            <?php elseif($people) : ?>
            people-cover
            <?php elseif($pm) : ?>
            pm-cover
            <?php elseif($real) : ?>
            real-cover
            <?php elseif($sport) : ?>
            sport-cover
            <?php else : ?>
            bg__blue
            <?php endif; ?>
            ">
	    <div class="container">
	        <div class="row">
                <div class="col-xs-12 col-lg-8 pt-48">
	            <h1 class="color__white"><?php the_title();?></h1>
                </div>
	        </div>
	    </div>
    </div>
    <div class="container-fluid px-0 box-cover
            <?php if($executive_cat) : ?>
            bg__light_blue
            <?php else : ?>
            bg__blue
            <?php endif; ?>
            ">
    <?php get_template_part( 'pco/template-parts/section-keyfacts', get_post_format() ); ?>
    </div>


<div class="container">
    <p><?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
    <div class="row">
        <main id="main" role="main" class="col-xs-12 col-md-8" >
            <div id="page-content" class="pr-md-48 pr-0">
                <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(''); ?>
                <?php endwhile; // end of the loop. ?>
            </div>
        </main>
        <aside class="col-xs-12 col-md-4">
            <div class="block">
                <?php   
     if (get_field('contatti') || get_field('contatti_campo'));
	 echo '<div class="">';
	 echo '<h3>'.get_field('contatti').'</h3><div class="textwidget">';
	 echo get_field('contatti_campo');
     echo '</div></div>';
 ?>
                <div class="textwidget">
                    <?php  
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
					echo '<div class=""><h3>' . get_field( 'titolo_custom' ) . '</h3><div class="textwidget"><p>' . get_field( 'campo_custom_contenuto' ) . '</p></div> </div>';
				}
				?>

                <?php
				if ( get_field( 'titolo_campo_custom_2' ) ) {
					echo '<div class=""><h3>' . get_field( 'titolo_campo_custom_2' ) . '</h3><div class="textwidget"><p>' . get_field( 'campo_custom_2' ) . '</p></div> </div>';
				}
				?>
            </div>
        </aside>
    </div>
</div>
<!--<script src="<?php // echo get_bloginfo('template_url') ?>/js/bootstrap.min.js"></script>-->
<?php 

get_footer(2017);

?>