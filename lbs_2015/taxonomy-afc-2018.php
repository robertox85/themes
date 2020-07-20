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



<!-- FINE MODIFICHE -->

<div class="container-fluid photo-page">
	<div class="titolo">
		<div class="container ">
			<div class="row ">
				<h1 class="titolazione_h1">
					<?php
					the_title();
					?>
				</h1>
				<div class="row pipe_afc" style="padding-top: 2%">
					<div class="col-md-6 hidden-xs">
						<p class="hidden-xs">
							<?php echo get_field('intro_left') ?> </p>
					</div>
					<div class="col-md-6 hidden-xs">
						<p class="hidden-xs">
							<?php echo get_field('intro_right') ?> </p>
					</div>
				</div>



			</div>
		</div>
	</div>
</div> </div>


<p>&nbsp;</p>



<?php $tematica = array();
$tematica[ 'it' ] = 'L’OFFERTA COMPLETA SUDDIVISA PER TEMATICA';
$tematica[ 'en' ] = '';
?>

<div class="featurette-divider"></div>

<section class="stories stories-cards cards">

<?php  if(get_field('etichetta_executive_master')) { ?>

	<div class="container">
		<header class="row">
			<div class="col-lg-10">
				<h2><?php echo get_field('etichetta_executive_master') ?></h2>
				<p><?php echo get_field('campo_executive_master') ?></p>
			</div>
		</header>
	</div>
	
	 <?php } ?>
	
	<div class="container">
		<div class="row" style="margin-bottom: 2rem; margin-bottom: 2rem">
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

			//$corsi = $wpdb->get_results($query, OBJECT); 

			//echo '<h2>WP_Query SQL Query</h2><p>'.$query->request.'</p>';
			//echo '<h2>Last query</h2><p>'.$wpdb->last_query.'</p>';

			if ( $query->have_posts() ) {

				?>
            
            <!-- Variabili -->

<!-- Lingua -->
<!-- Label -->
<?php $lingua = array();
$lingua[ 'it' ] = 'Lingua';
$lingua[ 'en' ] = 'Language';
?>

<!-- Dato -->
<?php $lingua_corso_it = array();
$lingua_corso_it[ 'it' ] = 'Italiano';
$lingua_corso_it[ 'en' ] = 'Italian';
?>

<?php $lingua_corso_en = array();
$lingua_corso_en[ 'it' ] = 'Inglese';
$lingua_corso_en[ 'en' ] = 'English';
?>

<!-- Durata -->

<!-- Label -->
<?php $titolo_durata = array();
$titolo_durata[ 'it' ] = 'Durata';
$titolo_durata[ 'en' ] = 'Duration';
?>

<!-- Dato -->
<?php $durata = array();
$durata[ 'it' ] = '12 mesi Full-time';
$durata[ 'en' ] = '12 months Full-time study';
?>

<?php $durata_part = array();
$durata_part[ 'it' ] = '12 mesi part-time';
$durata_part[ 'en' ] = '12 monts of part-time study';
?>

<!-- Inizio -->

<!-- Label -->
<?php $titolo_inizio = array();
$titolo_inizio[ 'it' ] = 'Inizio';
$titolo_inizio[ 'en' ] = 'Start';
?>

<!-- Sede -->

<!-- Label -->
<?php $titolo_sede = array();
$titolo_sede[ 'it' ] = 'Sede';
$titolo_sede[ 'en' ] = 'Location';
?>

			<?php
			while ( $query->have_posts() ) {
				$query->the_post();
				?>

            <div class="col-md-4 col-sm-6">
    <span><?php the_terms($post->ID, 'lunghezza_corsi', $before = '', $sep = ', ', $after = '' ); ?></span>
    <h6><?php the_title(); ?></h6>
    <p><strong>
        <?php if (ICL_LANGUAGE_CODE=='it') : ?>Durata
                        <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Duration
                        <?php else : ?>
                        <?php endif; ?></strong> <?php $durata ?></p>
    <!-- Sede/Inizio Roma -->
    <?php if( get_field('testo_inizio') ): ?>
    <p><strong>Sede</strong> <?php the_field('testo_inizio'); ?></p>
    <?php if( get_field('data_inizio') ): ?>
    <p><strong>Inizio</strong> <?php the_field('data_inizio'); ?></p>
    <?php endif; ?>
    <?php endif; ?>
    <!-- Sede/Inizio Milano -->
    <?php if( get_field('data_inizio_testuale') ): ?>
    <p><strong>Sede</strong> <?php the_field('data_inizio_testuale'); ?></p>
    <?php if( get_field('data_fine') ): ?>
    <p><strong>Inizio</strong> <?php the_field('data_fine'); ?></p>
    <?php endif; ?>
    <?php endif; ?>
    <!-- Sede/Inizio Belluno -->
    <?php if( get_field('veneto') ): ?>
    <p><strong>Sede</strong> <?php the_field('veneto'); ?></p>
    <?php if( get_field('data_veneto') ): ?>
    <p><strong>Inizio</strong> <?php the_field('data_veneto'); ?></p>
    <?php endif; ?>
    <?php endif; ?>
    <p><strong><?php $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php $lingua_corso_ ?></p>
    <div class="row">
        <a href="<?php $link_master_ ?>">Scopri</a>
        <a href="<?php $link_brochure_ ?>">Download Brochure</a>
    </div>
</div>

			<?php
			}

			wp_reset_postdata();
			?>




			<?php
			} else {
				?>
			<?php
			if ( ICL_LANGUAGE_CODE == 'it' ) {
				?>
<!--
			<div class="info">
				<p>Non ci sono corsi con le caratteristiche selezionate</p>
			</div>
-->
			<?php
			} else {
				?>
<!--
			<div class="info">
				<p>No courses found with the requested features</p>
			</div>
-->
			<?php
			}
			?>
			<?php
			}
			?>
		</div>
	</div>
</section>


<div class="featurette-divider"></div>
<div class="container">
	<div class="row">
		<hr>
	</div>
</div>
<section class="stories stories-cards cards">


<?php  if(get_field('etichetta_executive_program')) { ?>

	<div class="container">
		<header class="row">
			<div class="col-lg-10">
				<h2><?php echo get_field('etichetta_executive_program') ?></h2>
				<p><?php echo get_field('campo_executive_program') ?></p>
			</div>
		</header>
	</div>
	
	 <?php } ?>

	<div class="container">
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

			//$corsi = $wpdb->get_results($query, OBJECT); 

			//echo '<h2>WP_Query SQL Query</h2><p>'.$query->request.'</p>';
			//echo '<h2>Last query</h2><p>'.$wpdb->last_query.'</p>';

			if ( $query->have_posts() ) {

				?>

			<?php

			while ( $query->have_posts() ) {
				$query->the_post();
				?>





			<div class="col-md-4 col-xs12 triangle_afc" >
				<div class="card card-content" style="min-height: 305px">
					<h3 class="card-title"> <a title="<?php the_title();?>" href="<?php the_permalink();
?>" class=""> <span class="a-card" > <?php    the_title(); ?></span></a> </h3>
					<div class="card-action">
						<div class="col-md-5 col-xs12" style="border-right: 1px solid #ebebeb">


							<p style="color:#2a2a2a; text-align: center">
								<?php
								echo get_field( 'titolo_durata' );
								?><br>
								<span class="glyphicon  glyphicon-calendar fa-3x icon-tab"/></span><br>
								<?php
								echo get_field( 'durata' );
								?>
							</p>



						</div>
						<div class="col-md-7 col-xs12">

							<?php   
  
	  $date = DateTime::createFromFormat('Ymd', get_field('data_inizio'));	
		
	 if(get_field('testo_inizio')) { echo '<p class="blue">' . get_field('testo_inizio'). ': ';}
			
	if (get_field('data_inizio')) {  echo   $date->format('d/m/Y') . '</p>';}
		
		
		
		  $date_m = DateTime::createFromFormat('Ymd', get_field('data_fine'));	
	
	 	 if(get_field('data_inizio_testuale')) { echo '<p class="blue">' . get_field('data_inizio_testuale'). ': ';}
	if (get_field('data_fine')) {  echo   $date_m->format('d/m/Y') . '</p>';}

	
					 $date_v = DateTime::createFromFormat('Ymd', get_field('data_veneto'));	
	
	 	 if(get_field('veneto')) { echo '<p class="blue">' . get_field('veneto'). ': ';}
	if (get_field('data_veneto')) {  echo   $date_v->format('d/m/Y') . '</p>';}	
						?>

							<hr>

							<div class="blue">
								<?php
								echo get_field( 'brochure' );
								?>
							</div>
						</div>

					</div>
				</div>
			</div>


			<?php
			}

			wp_reset_postdata();
			?>




			<?php
			} else {
				?>
			<?php
			if ( ICL_LANGUAGE_CODE == 'it' ) {
				?>
<!--
			<div class="info">
				<p>Non ci sono corsi con le caratteristiche selezionate</p>
			</div>
-->
			<?php
			} else {
				?>
<!--
			<div class="info">
				<p>No courses found with the requested features</p>
			</div>
-->
			<?php
			}
			?>
			<?php
			}
			?>
		</div>
	</div>
</section>


<div class="featurette-divider"></div>
<div class="container">
	<div class="row">
		<hr>
	</div>
</div>








<section class="stories stories-cards cards">
<?php  if(get_field('etichetta_short_course')) { ?>

	<div class="container">
		<header class="row">
			<div class="col-lg-10">
				<h2><?php echo get_field('etichetta_short_course') ?></h2>
				<p><?php echo get_field('campo_short_course') ?></p>
			</div>
		</header>
	</div>
	
	 <?php } ?>
	<div class="container">
		<div class="row" style="margin-bottom: 2rem; margin-bottom: 2rem">
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

			//$corsi = $wpdb->get_results($query, OBJECT); 

			//echo '<h2>WP_Query SQL Query</h2><p>'.$query->request.'</p>';
			//echo '<h2>Last query</h2><p>'.$wpdb->last_query.'</p>';

			if ( $query->have_posts() ) {

				?>

			<?php
			while ( $query->have_posts() ) {
				$query->the_post();
				?>




			<div class="col-md-4 col-xs12 triangle_afc">
				<div class="card card-content ">
					<h3 class="card-title"> <a title="<?php the_title();?>" href="<?php the_permalink();
?>" class=""> <span class="a-card" > <?php    the_title(); ?></span></a> </h3>
					<div class="card-action">
						<div class="col-md-5 col-xs12" style="border-right: 1px solid #ebebeb">


							<p style="color:#2a2a2a; text-align: center">
								<?php
								echo get_field( 'titolo_durata' );
								?><br>
								<span class="glyphicon  glyphicon-calendar fa-3x icon-tab"/></span><br>
								<?php
								echo get_field( 'durata' );
								?>
							</p>



						</div>
						<div class="col-md-7 col-xs12">

							<?php   
  
	  $date = DateTime::createFromFormat('Ymd', get_field('data_inizio'));	
		
	 if(get_field('testo_inizio')) { echo '<p class="blue">' . get_field('testo_inizio'). ': ';}
			
	if (get_field('data_inizio')) {  echo   $date->format('d/m/Y') . '</p>';}
		
		
		
		  $date_m = DateTime::createFromFormat('Ymd', get_field('data_fine'));	
	 
	 
	 	 if(get_field('data_inizio_testuale')) { echo '<p class="blue">' . get_field('data_inizio_testuale'). ': ';}
			
	if (get_field('data_fine')) {  echo   $date_m->format('d/m/Y') . '</p>';}
				
				
				
				
				
	 $date_v = DateTime::createFromFormat('Ymd', get_field('data_veneto'));	
	
	 	 if(get_field('veneto')) { echo '<p class="blue">' . get_field('veneto'). ': ';}
	if (get_field('data_veneto')) {  echo   $date_v->format('d/m/Y') . '</p>';}	
		
	
						?>


							<hr>

							<div class="blue">
								<?php
								echo get_field( 'brochure' );
								?>
							</div>
						</div>

					</div>
				</div>
			</div>










			<?php
			}

			wp_reset_postdata();
			?>




			<?php
			} else {
				?>
			<?php
			if ( ICL_LANGUAGE_CODE == 'it' ) {
				?>
<!--
			<div class="info">
				<p>Non ci sono corsi con le caratteristiche selezionate</p>
			</div>
-->
			<?php
			} else {
				?>
<!--
			<div class="info">
				<p>No courses found with the requested features</p>
			</div>
-->
			<?php
			}
			?>
			<?php
			}
			?>
		</div> <?php edit_post_link('<p class="button arr featured-links">Modifica Pagina</p>', ''); ?>
	</div>
</section>


<section class="stories stories-cards cards">
<?php  if(get_field('etichetta_individual')) { ?>


	<div class="container">
		<header class="row">
			<div class="col-lg-10">
				<h2><?php echo get_field('etichetta_individual') ?></h2>
				<p><?php echo get_field('campo_individual') ?></p>
				<!--<a href="<?php// echo  get_field('link_indivisual') ?>" class="button arr featured-links">Vai alla pgina</a></p>-->
			</div>
		</header>
	</div>
</section>	

<?php
			}
			?>


<div class="featurette-divider"></div>



<section class="body-section" style="background-color:#2a2a2a;">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<h2 class="block-title white-style">
					<?php
					echo $tematica[ ICL_LANGUAGE_CODE ];
					?>
				</h2>
			</div>
			<?php
			$terms = get_terms( tematiche, array(
				'orderby' => 'name',
				'order' => 'ASC',
				'exclude' => array(
					81,
					101,
					348,
					103,
					96,
					34
				)
			) );


			$page_title = trim( html_entity_decode( get_the_title() ) );

			if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
				foreach ( $terms as $term ) {
					?>
			<div class="col-md-4 hidden-xs">
				<div class="feature">
					<h3 class="white-style block-title"> <a href="<?php
                     echo $term->slug;
                     ?>"><?php
                     echo $term->name;
                     ?></a> </h3>
				</div>
			</div>
			<?php
			} // END foreach
			} // END if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
			?>
			<?php
			$select_first_choice[ 'it' ] = 'Scegli una tematica';
			$select_first_choice[ 'en' ] = 'Choose an Area';
			?>
			<div class="tematiche-mobile">
				<select id="tematica" name="tematica" class="col-xs-12">
					<option value="">
						<?php
						echo $select_first_choice[ ICL_LANGUAGE_CODE ];
						?>
					</option>
					<?php
					$terms = get_terms( 'tematiche' );
					$page_title = trim( html_entity_decode( get_the_title() ) );

					if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
						foreach ( $terms as $term ) {
							$selected = '';
							if ( !( strcmp( $term->name, $page_title ) ) ) {
								$selected = ' selected="selected" ';
							}
							echo '<option value="' . $term->term_id . '" ' . $selected . ' data-url="' . $term->slug . '">' . $term->name . '</option>';
						} // END foreach
					} // END if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
					?>
				</select>
				<script>
					document.getElementById( 'tematica' ).onchange = function () {
						window.location.href = this.children[ this.selectedIndex ].getAttribute( 'data-url' );
					}
				</script>
			</div>
		</div>
	</div>
</section>



<?php
get_footer( 2017 );
?>