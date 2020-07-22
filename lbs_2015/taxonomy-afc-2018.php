<?php
/*
Template Name: AFC 2018
*/
get_header( 2017 );?>

<!-- Query per le pagine 

Pagine con categoria Tematiche x
Pagine con categoria lunghezza corsi y
Ordinate in ordine alfabetico a partire dal titolo

Tematiche
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

Lunghezza corsi
Executive Program - 25
Executive Master - 131
Executive Course - 26
Flex - 154
Full time - 24

-->

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <h1><?php the_title();?></h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p><?php echo get_field('intro_left') ?></p>
            </div>
            <div class="col-md-6">
                <p><?php echo get_field('intro_right') ?></p>
            </div>
        </div>
    </div>
</div>

<!-- TAB -->
<section>
    <!-- NAVIGAZIONE -->
    <ul class="nav nav-tabs auto" id="program-type" role="tablist">
        <!-- MASTER -->
        <li class="nav-item"><a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#exmasters" role="tab" aria-controls="tab1" aria-selected="true">Executive Masters</a></li>

        <!-- PROGRAMME -->
        <li class="nav-item"><a class="nav-link" id="tab2-tab" data-toggle="tab" href="#exprogrammes" role="tab" aria-controls="tab2" aria-selected="false">Executive Programmes</a></li>

        <!-- FLEX -->
        <li class="nav-item"><a class="nav-link" id="tab2-tab" data-toggle="tab" href="#exflexprogrammes" role="tab" aria-controls="tab2" aria-selected="false">Flex Executive Programmes</a></li>

        <!-- COURSES -->
        <li class="nav-item"><a class="nav-link" id="tab3-tab" data-toggle="tab" href="#excourses" role="tab" aria-controls="tab3" aria-selected="false">Executive Courses</a></li>

        <!-- LABS -->
        <li class="nav-item"><a class="nav-link" id="tab4-tab" data-toggle="tab" href="#exlabs" role="tab" aria-controls="tab4" aria-selected="false" aria-disabled="true" tabindex="-1">Executive Labs</a></li>
    </ul>

    <!-- CONTENUTO -->
    <div class="tab-content" id="ProgramType">
        <!-- MASTER -->
        <div class="tab-pane p-4 fade active in" id="exmasters" role="tabpanel" aria-labelledby="exmasters-tab">
            <h2><?php echo get_field('etichetta_executive_master') ?></h2>
            <p><?php echo get_field('campo_executive_master') ?></p>

            <div class="row">
                <?php
			$query_tax_value = 131;
			$tax_query = array();
			$tax_query[] = array(
				'taxonomy' => 'lunghezza_corsi',
				'field' => 'id',
				'terms' => ( int )$query_tax_value
			);

			$query_tax_value = 29;
			$tax_query[] = array(
				'taxonomy' => 'tematiche',
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

                <div class="col-md-4 col-sm-6">
                    <span><?php the_terms($post->ID, 'lunghezza_corsi', $before = '', $sep = ', ', $after = '' ); ?></span>
                    <h6><?php the_title(); ?></h6>
                    <?php if( get_field('durata') ): ?>
                    <p><strong>
                            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Durata
                            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Duration
                            <?php else : ?>
                            <?php endif; ?></strong> <?php the_field('durata'); ?></p>
                    <?php endif; ?>
                    <!-- Sede/Inizio Roma -->
                    <?php if( get_field('testo_inizio') ): ?>
                    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
                            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Location
                            <?php else : ?>
                            <?php endif; ?></strong> <?php the_field('testo_inizio'); ?></p>
                    <?php 
// Load field value.
$date_string = get_field('data_inizio');
// Create DateTime object from value (formats must match).
$date = DateTime::createFromFormat('Ymd', $date_string);
// Output current date in custom format.
?>
                    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
                            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Start
                            <?php else : ?>
                            <?php endif; ?> </strong> <?php echo $date->format('j M Y'); ?></p>
                    <?php endif; ?>

                    <!-- Sede/Inizio Milano -->
                    <?php if( get_field('data_inizio_testuale') ): ?>
                    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
                            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Location
                            <?php else : ?>
                            <?php endif; ?></strong> <?php the_field('data_inizio_testuale'); ?></p>
                    <?php 
// Load field value.
$date_string = get_field('data_fine');
// Create DateTime object from value (formats must match).
$date = DateTime::createFromFormat('Ymd', $date_string);
// Output current date in custom format.
?>
                    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
                            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Start
                            <?php else : ?>
                            <?php endif; ?> </strong> <?php echo $date->format('j M Y'); ?></p>
                    <?php endif; ?>
                    <!-- Sede/Inizio Belluno -->
                    <?php if( get_field('veneto') ): ?>
                    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
                            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Location
                            <?php else : ?>
                            <?php endif; ?></strong> <?php the_field('veneto'); ?></p>
                    <?php 
// Load field value.
$date_string = get_field('data_veneto');
// Create DateTime object from value (formats must match).
$date = DateTime::createFromFormat('Ymd', $date_string);
// Output current date in custom format.
?>
                    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
                            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Start
                            <?php else : ?>
                            <?php endif; ?> </strong> <?php echo $date->format('j M Y'); ?></p>
                    <?php endif; ?>

                    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Lingua
                            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Language
                            <?php else : ?>
                            <?php endif; ?></strong><?php $terms = get_the_terms( $post->ID, 'lingue' );
                foreach ( $terms as $term ) {
  echo '<span class="text-capitalize">' . strip_tags(term_description( $term->term_id, 'lingue')) . '</span>';
                } ?></p>
                    <div class="row">
                        <a href="<?php $link_master_ ?>">Scopri</a>
                        <a href="<?php $link_brochure_ ?>">Download Brochure</a>
                    </div>
                </div>
                
                <?php wp_reset_postdata(); ?>

                <?php endwhile; else : ?>
<?php if (ICL_LANGUAGE_CODE=='it') : ?>Non ci sono ancora post.
                <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>There are no posts yet.
                <?php else : ?>
                <?php endif; ?>

        <?php endif; ?>

            </div>
        </div>

        <!-- PROGRAMME -->
        <div class="tab-pane p-4 fade" id="exprogrammes" role="tabpanel" aria-labelledby="exprogrammes-tab">
        <h2><?php echo get_field('etichetta_executive_master') ?></h2>
            <p><?php echo get_field('campo_executive_master') ?></p>

            <div class="row">
                <?php
			$query_tax_value = 25;
			$tax_query = array();
			$tax_query[] = array(
				'taxonomy' => 'lunghezza_corsi',
				'field' => 'id',
				'terms' => ( int )$query_tax_value
			);

			$query_tax_value = 29;
			$tax_query[] = array(
				'taxonomy' => 'tematiche',
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

                <div class="col-md-4 col-sm-6">
                    <span><?php the_terms($post->ID, 'lunghezza_corsi', $before = '', $sep = ', ', $after = '' ); ?></span>
                    <h6><?php the_title(); ?></h6>
                    <?php if( get_field('durata') ): ?>
                    <p><strong>
                            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Durata
                            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Duration
                            <?php else : ?>
                            <?php endif; ?></strong> <?php the_field('durata'); ?></p>
                    <?php endif; ?>
                    <!-- Sede/Inizio Roma -->
                    <?php if( get_field('testo_inizio') ): ?>
                    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
                            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Location
                            <?php else : ?>
                            <?php endif; ?></strong> <?php the_field('testo_inizio'); ?></p>
                    <?php 
// Load field value.
$date_string = get_field('data_inizio');
// Create DateTime object from value (formats must match).
$date = DateTime::createFromFormat('Ymd', $date_string);
// Output current date in custom format.
?>
                    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
                            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Start
                            <?php else : ?>
                            <?php endif; ?> </strong> <?php echo $date->format('j M Y'); ?></p>
                    <?php endif; ?>

                    <!-- Sede/Inizio Milano -->
                    <?php if( get_field('data_inizio_testuale') ): ?>
                    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
                            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Location
                            <?php else : ?>
                            <?php endif; ?></strong> <?php the_field('data_inizio_testuale'); ?></p>
                    <?php 
// Load field value.
$date_string = get_field('data_fine');
// Create DateTime object from value (formats must match).
$date = DateTime::createFromFormat('Ymd', $date_string);
// Output current date in custom format.
?>
                    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
                            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Start
                            <?php else : ?>
                            <?php endif; ?> </strong> <?php echo $date->format('j M Y'); ?></p>
                    <?php endif; ?>
                    <!-- Sede/Inizio Belluno -->
                    <?php if( get_field('veneto') ): ?>
                    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
                            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Location
                            <?php else : ?>
                            <?php endif; ?></strong> <?php the_field('veneto'); ?></p>
                    <?php 
// Load field value.
$date_string = get_field('data_veneto');
// Create DateTime object from value (formats must match).
$date = DateTime::createFromFormat('Ymd', $date_string);
// Output current date in custom format.
?>
                    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
                            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Start
                            <?php else : ?>
                            <?php endif; ?> </strong> <?php echo $date->format('j M Y'); ?></p>
                    <?php endif; ?>

                    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Lingua
                            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Language
                            <?php else : ?>
                            <?php endif; ?></strong><?php $terms = get_the_terms( $post->ID, 'lingue' );
                foreach ( $terms as $term ) {
  echo '<span class="text-capitalize">' . strip_tags(term_description( $term->term_id, 'lingue')) . '</span>';
                } ?></p>
                    <div class="row">
                        <a href="<?php $link_master_ ?>">Scopri</a>
                        <a href="<?php $link_brochure_ ?>">Download Brochure</a>
                    </div>
                </div>
                
                <?php wp_reset_postdata(); ?>

                <?php endwhile; else : ?>
<?php if (ICL_LANGUAGE_CODE=='it') : ?>Non ci sono ancora post.
                <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>There are no posts yet.
                <?php else : ?>
                <?php endif; ?>

        <?php endif; ?>
        
        
        
        </div>

        <!-- FLEX -->
        <div class="tab-pane p-4 fade" id="exflexprogrammes" role="tabpanel" aria-labelledby="exflexprogrammes-tab">Contenuto 3</div>

        <!-- COURSES -->
        <div class="tab-pane p-4 fade" id="excourses" role="tabpanel" aria-labelledby="excourses-tab">Contenuto 4 </div>

        <!-- LABS -->
        <div class="tab-pane p-4 fade" id="exlabs" role="tabpanel" aria-labelledby="exlabs-tab">Contenuto 5 </div>
    </div>
</section>


<?php edit_post_link('<p class="button arr featured-links">Modifica Pagina</p>', ''); ?>


<?php
get_footer( 2017 );
?>