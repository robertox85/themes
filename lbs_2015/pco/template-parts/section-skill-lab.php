<!-- Includo le variabili comuni -->

<?php include(dirname(__DIR__).'/variables/vars.php'); ?>

<!-- Inizio template -->

<div class="row">
    <?php

			//var_dump($tax_query);
			$course_cat = array();
			$course_cat[ 'it' ] = 163;
			$course_cat[ 'en' ] = 164;

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

    <?php get_template_part( 'card-course', get_post_format() ); ?>

    <?php wp_reset_postdata(); ?>

    <?php endwhile; else : ?>
    <?php if (ICL_LANGUAGE_CODE=='it') : ?><div class="col-12">Non ci sono ancora programmi.</div>
    <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?><div class="col-12"><div class="col-12">There are no programmes yet.</div></div>
    <?php else : ?>
    <?php endif; ?>

    <?php endif; ?>

</div>