<?php
/*
Template Name: Flex 2018
*/
get_header( 2019 );?> 

<style type="text/css">

.triangle_tax_1::after {
    content: '';
    height: 0;
    width: 0;
    position: absolute;
    right: 15px;
    bottom: 0;
    border-left: 18px solid transparent;
    border-top: 18px solid transparent;
    border-right: 18px solid #032d42;
    border-bottom: 18px solid #032d42;
}

.card {
    margin-top: 10px;
    box-sizing: border-box;
    border-radius: 2px;
    background-clip: padding-box;
    /* background-color: #3c3c3c; */
    min-height: 310px;
}	
	
</style>

<div class="container-fluid photo-page">
	<div class="titolo">
		<div class="container ">
			<div class="row ">
				<h1 class="titolazione_h1">
					<?php
					the_title();
					?>
				</h1>
				<div class="row pipe_tax" style="padding-top: 2%; border-left: 5px solid #032d42;" >
					<div class="col-md-6 hidden-xs">
						<p class="hidden-xs">
							<?php echo get_field('intro_left') ?> </p>
					</div>
					<div class="col-md-6 hidden-xs">
						<p class="hidden-xs">
							<?php echo get_field('intro_right') ?> </p>
					</div>
				</div>


<?php edit_post_link('<p class="button arr featured-links">Modifica Pagina</p>', ''); ?>
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

<?php  if($executive_master_label[ICL_LANGUAGE_CODE]) { ?>

	<div class="container">
		<header class="row">
			<div class="col-lg-10">
				<h2><?php echo $executive_master_label[ICL_LANGUAGE_CODE] ?></h2>
				<p><?php echo get_field('campo_executive_master') ?></p>
			</div>
		</header>
	</div>
	
	 <?php } ?>
	
	<div class="container">
		<div class="row" style="margin-bottom: 2rem; margin-bottom: 2rem">
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

			//$corsi = $wpdb->get_results($query, OBJECT); 

			//echo '<h2>WP_Query SQL Query</h2><p>'.$query->request.'</p>';
			//echo '<h2>Last query</h2><p>'.$wpdb->last_query.'</p>';

			if ( $query->have_posts() ) {

				?>

			<?php
			while ( $query->have_posts() ) {
				$query->the_post();
				?>



<div class="col-md-4 col-xs12 triangle_tax_1">
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
		</div>
	</div>
</section>



		</div> <?php edit_post_link('<p class="button arr featured-links">Modifica Pagina</p>', ''); ?>
	</div>
</section>




<section class="stories stories-cards cards">


<?php  if($executive_programme_label[ICL_LANGUAGE_CODE]) { ?>

	<div class="container">
		<header class="row">
			<div class="col-lg-10">
				<h2><?php echo $executive_programme_label[ICL_LANGUAGE_CODE] ?></h2>
				<p><?php echo get_field('campo_executive_program') ?></p>
			</div>
		</header>
	</div>
	
	 <?php } ?>
</section>
<section class="stories stories-cards cards">
<?php  if($executive_course_label[ICL_LANGUAGE_CODE]) { ?>

	<div class="container">
		<header class="row">
			<div class="col-lg-10">
				<h2><?php echo $executive_course_label[ICL_LANGUAGE_CODE] ?></h2>
				<p><?php echo get_field('campo_short_course') ?></p>
			</div>
		</header>
	</div>
	
	 <?php } ?>
	
</section>



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