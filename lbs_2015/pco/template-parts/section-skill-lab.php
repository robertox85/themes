<!-- Includo le variabili comuni -->

<?php include(dirname(__DIR__).'/variables/vars.php'); ?>

<!-- Inizio template -->

<div class="row">
    <div class="col-12 col-lg-8">
        <p><?php echo get_field('campo_executive_skill_lab') ?></p>
    </div>
</div>
<div class="d-flex flex-row flex-wrap justify-content-start align-items-stretch px-0 pt-24">
    <?php

			//var_dump($tax_query);
			$course_cat = array();
			$course_cat[ 'it' ] = 163;
			$course_cat[ 'en' ] = 164;
			
			$pos = get_posts(
				array(
					'post_type' => 'page',
					'post_status' => 'publish',
					'cat'		=> $course_cat[ ICL_LANGUAGE_CODE ],
					'meta_key' => 'data_inizio',
					'orderby' => 'meta_value_num',
					)
			);
			// print_r($pos);
			$args = array(
				'post_type' => 'page',
				'post_status' => 'publish',
				'cat' => $course_cat[ ICL_LANGUAGE_CODE ],
				'pagination' => true,
				'posts_per_page' => '-1',
				'meta_key' => 'data_inizio',
				'orderby' => 'meta_value_num',
				'cache_results' => false,
				'suppress_filters' => false,
				'order' => 'ASC'
			);

			//echo '<pre>';
			//var_dump($args);
			//echo '</pre>';
			// wp_cache_flush();
			$query = new WP_Query( $args );
			
			if ( $query->have_posts() )  : while ( $query->have_posts() ) : $query->the_post(); ?>


    <?php get_template_part( 'pco/template-parts/card', 'course' ); ?>

    <?php wp_reset_postdata(); ?>

    <?php endwhile; else : ?>
    <?php if (ICL_LANGUAGE_CODE=='it') : ?><div class="col-12">Non ci sono ancora programmi.</div>
    <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?><div class="col-12">
        <div class="col-12">There are no programmes yet.</div>
    </div>
    <?php else : ?>
    <?php endif; ?>

    <?php endif; ?>

</div>