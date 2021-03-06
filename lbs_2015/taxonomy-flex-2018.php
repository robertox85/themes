<?php
/*
Template Name: Flex 2018
*/
get_header( 2017 );?>

<!-- Query per le pagine 

Tematiche (ID)
Accounting, Finance & Control - 29
-Banking, Insurance and other Financial Institutions - 35
-Big Data e Business Analytics - 101
Communication & Lobbying - 97
-Corporate Education Programs - 34
Governance, Risk & Compliance - 45
Healthcare, Public Sector & No Profit - 36
Innovation, Big Data & Digital Transformation - 10
Management & Family Business - 58
Marketing & Sales - 30
People, Organization Development & Leadership - 32
-Pharma and Medical Device - 96
Project Management - 31
Real Estate & Infrastructure - 37
Sport, Tourism, Leisure & Culture - 33

Lunghezza corsi (ID)
Executive Program - 25
Executive Master - 131
Executive Course - 26
Flex - 154
Full time - 24

Categorie (ID ita/eng)

Corso/Percorso/Master - 15/16
Executive Programmes - 61/62
Skill - 163/164
Specialistica Executive - 136/138
Specialistica Post Lauream - 140/142
Summer School (specialistici) - 133/134

-->

<!-- Includo le variabili comuni -->

<?php include(dirname(__DIR__).'/lbs_2015/pco/variables/vars.php'); ?>

<!-- Inizio template -->

<div
    class="container-fluid px-0 box-cover-page d-flex flex-column align-items-start  justify-content-center flex-cover bg__light_blue">
    <div class="container my-48">
        <div class="row">
            <div class="col-xs-12 col-lg-8">
                <h1 class="color__white"><?php the_title();?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 intro-exarea">
                <p class="color__white"><?php echo get_field('intro_left') ?></p>
            </div>
            <div class="col-lg-9 intro-exarea">
                <p><?php echo get_field('intro_right') ?></p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <section>
        <!-- CONTENUTO -->
        <!-- FLEX -->
        <div class="d-flex flex-row flex-wrap justify-content-start align-items-stretch px-0 py-24">
            <?php
			$query_tax_value = 154;
			$tax_query = array();
			$tax_query[] = array(
				'taxonomy' => 'lunghezza_corsi',
				'field' => 'id',
				'terms' => ( int )$query_tax_value
			);
                    
                    //var_dump($tax_query);
			$course_cat = array();
			$course_cat[ 'it' ] = 61;
			$course_cat[ 'en' ] = 62;
                
                $args = array(
				'post_type' => 'page',
				'post_status' => 'publish',
				'cat' => $course_cat[ ICL_LANGUAGE_CODE ],
				'pagination' => true,
				'tax_query' => $tax_query,
				'posts_per_page' => '-1',
				'meta_key' => 'data_inizio',
				'orderby' => 'meta_value_num',
				'meta_query' => array(
				//	array(
				//		'key' => 'data_inizio', // which meta to query
				//		'value' => date( "Y-m-d" ),
				//		'compare' => '>=', // method of comparison
				//		'type' <= 'DATE'
				//	)
				),
				'cache_results' => false,
				'suppress_filters' => false,
				'order' => 'ASC'
			);
			//echo '<pre>';
			//var_dump($args);
			//echo '</pre>';
			wp_cache_flush();
			$query = new WP_Query( $args );

			if ( $query->have_posts() )  : while ( $query->have_posts() ) : $query->the_post(); ?>

            <?php get_template_part( 'pco/template-parts/card-course', get_post_format() ); ?>

            <?php wp_reset_postdata(); ?>

            <?php endwhile; else : ?>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?><div class="col-12">Non ci sono ancora programmi.</div>
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?><div class="col-12">There are no programmes yet.</div>
            <?php else : ?>
            <?php endif; ?>

            <?php endif; ?>

        </div>
    </section>
</div>


<!-- MODULI DEI FLEX -->
<div class="container my-24">
    <div class="row">
        <div class="col-12">
            <h3><?php echo get_field('etichetta_short_course') ?></h3>
        </div>
    </div>
    <div class="short-course d-flex flex-row px-0 py-24 align-items-stretch justify-content-start  flex-wrap">
        <?php echo get_field('campo_short_course') ?>
    </div>
</div>


<!-- OFFERTA COMPLETA -->
<?php get_template_part( 'pco/template-parts/section-executive-by-tematica', get_post_format() ); ?>

<?php edit_post_link('<p>Modifica Pagina</p>', ''); ?>


<?php
get_footer( 2017 );
?>