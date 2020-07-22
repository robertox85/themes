<?php
/*
Template Name: AFC 2018
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

-->

<div class="container-fluid <?php if (has_post_thumbnail( $post->ID ) ): ?>
                   header-pic" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');
                   <?php else : ?>
                   jeader-nopic
                   <?php endif; ?>
">
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

<div class="container">
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
        <div class="tab-pane fade active in" id="exmasters" role="tabpanel" aria-labelledby="exmasters-tab">
            <div class="row"></div>
            <div class="col-12 col-lg-8">
            <h2><?php echo get_field('etichetta_executive_master') ?></h2>
            <p><?php echo get_field('campo_executive_master') ?></p>
            </div>
            </div>

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

                <?php get_template_part( 'template-parts/card-course', get_post_format() ); ?>
                
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
        <h2><?php echo get_field('etichetta_executive_program') ?></h2>
            <p><?php echo get_field('campo_executive_program') ?></p>
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

                 <?php get_template_part( 'template-parts/card-course', get_post_format() ); ?>
                
                <?php wp_reset_postdata(); ?>

                <?php endwhile; else : ?>
<?php if (ICL_LANGUAGE_CODE=='it') : ?>Non ci sono ancora post.
                <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>There are no posts yet.
                <?php else : ?>
                <?php endif; ?>

        <?php endif; ?>
        
        </div>
        </div>

        <!-- FLEX -->
        <div class="tab-pane p-4 fade" id="exflexprogrammes" role="tabpanel" aria-labelledby="exflexprogrammes-tab">
        <h2>Flex Executive Programmes</h2>
            <p>Lorem ipsum dolor</p>
            <div class="row">
                <?php
			$query_tax_value = 154;
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

               <?php get_template_part( 'template-parts/card-course', get_post_format() ); ?>
                
                <?php wp_reset_postdata(); ?>

                <?php endwhile; else : ?>
<?php if (ICL_LANGUAGE_CODE=='it') : ?>Non ci sono ancora post.
                <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>There are no posts yet.
                <?php else : ?>
                <?php endif; ?>

        <?php endif; ?>
        
           </div>
        </div>
            

        <!-- COURSES -->
        <div class="tab-pane p-4 fade" id="excourses" role="tabpanel" aria-labelledby="excourses-tab">
            <h2><?php echo get_field('etichetta_short_course') ?></h2>
            <p><?php echo get_field('campo_short_course') ?></p>
            <div class="row">
                <?php
			$query_tax_value = 26;
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

               <?php get_template_part( 'template-parts/card-course', get_post_format() ); ?>
                
                <?php wp_reset_postdata(); ?>

                <?php endwhile; else : ?>
<?php if (ICL_LANGUAGE_CODE=='it') : ?>Non ci sono ancora post.
                <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>There are no posts yet.
                <?php else : ?>
                <?php endif; ?>

        <?php endif; ?>
            
               </div>
        </div>

        <!-- LABS -->
        <div class="tab-pane p-4 fade" id="exlabs" role="tabpanel" aria-labelledby="exlabs-tab">
            <h2>Executive Labs</h2>
            <p>Lorem ipsum dolor</p>
            <div class="row">
                <?php
			$query_tax_value = 26;
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

                <?php get_template_part( 'template-parts/card-course', get_post_format() ); ?>
                
                <?php wp_reset_postdata(); ?>

                <?php endwhile; else : ?>
<?php if (ICL_LANGUAGE_CODE=='it') : ?>Non ci sono ancora post.
                <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>There are no posts yet.
                <?php else : ?>
                <?php endif; ?>

        <?php endif; ?>
            
    </div>
            </div>
    </div>
</section>
</div>

<?php edit_post_link('<p>Modifica Pagina</p>', ''); ?>


<?php
get_footer( 2017 );
?>