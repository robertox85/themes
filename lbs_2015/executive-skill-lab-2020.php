<?php
// Exit if accessed directly
if (!defined('ABSPATH') ) {
    exit;
}

/**
 * Template Name: Executive Skill Lab 2020
 *
 * @file executive-skill-lab-2020.php
 */
get_header(2017);?>

<?php require dirname(__DIR__).'/lbs_2015/pco/variables/vars.php'; ?>


<!-- Inizio Template -->

<div class="container-fluid px-0 box-cover-page d-flex flex-column align-items-start  justify-content-center flex-cover bg__light_blue">
    <div class="container my-48">
        <div class="row">
            <div class="col-xs-12 col-lg-8"><h1 class="color__white"><?php the_title();?></h1></div>
        </div>
        <div class="row">
            <div class="col-lg-9 intro-exarea">
                <p class="color__white">
                Gli Executive Skill Lab forniscono strumenti immediatamente applicabili volti a migliorare tutte quelle
                competenze e capacità trasversali rispetto al proprio background accademico e professionale, stimolando una
                visione complessiva dello scenario in cui l’azienda opera e potenziando le abilità utili al raggiungimento di una
                posizione di leadership al suo interno.
                Per natura trasversali all’offerta formativa, gli Executive Skill Lab appartengono a due categorie
                principali: Megatrend e Life Skill.
                </p>
            </div>
            <div class="col-lg-9 intro-exarea">
                <p><?php echo get_field('intro_right') ?></p>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <!-- TAB -->
    <section>
        
        <!-- CONTENUTO -->
        <div class="tab-content my-0 my-md-48" id="ProgramType">
        
            <div class="col-12">
                <h3>Megatrend</h3>
            </div>
            <?php 
                set_query_var('tag', 'megatrend');
            ?>
            <!-- LABS -->
            <?php get_template_part('pco/template-parts/section-skill-lab-by-tag', get_post_format()); ?>
            
          

            <div class="col-12 mt-5">
                <h3>Flex Courses</h3>
            </div>
                <?php 
                set_query_var('tag', 'life-skills');
                ?>
            <?php get_template_part('pco/template-parts/section-skill-lab-by-tag', get_post_format()); ?>

        </div>
    </section>
</div>



<?php edit_post_link('<p>Modifica Pagina</p>', ''); ?>

<?php
get_footer(2017);
?>
