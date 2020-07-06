<?php   $titolo_programmi = array();
		$titolo_programmi['it'] = 'I Prossimi Programmi';
		$titolo_programmi['en'] = 'Next programmes';
?>

<?php   $titolo_tematica = array();
		$titolo_tematica['it'] = 'Ricerca per Tematica';
		$titolo_tematica['en'] = 'Search by Topics';
?>

<?php   $titolo_funzione = array();
		$titolo_funzione['it'] = 'Ricerca per Funzione';
		$titolo_funzione['en'] = 'Search by function';
?>


<div class="container">
  <div id="content">
    <div id="sub-offerta-nav">
      <div class="row">
        <ul class="col-md-12 nav-tabs">
          <li class="col-md-4 active"><a href="#1" data-toggle="tab"><?php echo $titolo_programmi[ICL_LANGUAGE_CODE]; ?></a></li>
          <li class="col-md-4"><a href="#2" data-toggle="tab"><?php echo $titolo_tematica[ICL_LANGUAGE_CODE]; ?></a></li>
          <li class="col-md-4"><a href="#3" data-toggle="tab"><?php echo $titolo_funzione[ICL_LANGUAGE_CODE]; ?></a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
          <div class="tab-pane active" id="1">
          
       
          
            <?php  

$course_name =($_GET['course_name'])  ? ($_GET['course_name']) : '';	  

$query_tax_value = 25;
$tax_query = array();
$tax_query[] = array(
            'taxonomy' => 'lunghezza_corsi',
            'field' => 'id',
            'terms' => (int)$query_tax_value
        );

//var_dump($tax_query);
$course_cat=array();	 		
$course_cat['it']=61;
$course_cat['en']=62;

$args = array(
	'post_type'              => 'page',
	'post_status'            => 'publish',
	'cat'                    => $course_cat[ICL_LANGUAGE_CODE],
	'pagination'             => true,
	'tax_query' 			 => $tax_query,
	'posts_per_page'         => '4',
	'meta_key'			     => 'data_inizio',
	'orderby'			     => 'meta_value_num',
	'meta_query'  => array(
             array(        
              'key'     => 'data_inizio',  // which meta to query
              'value'   => date("Y-m-d"),
              'compare' => '>=',          // method of comparison
              'type' => 'DATE'
            ) 
           ) ,
	'cache_results'          => false,
	'suppress_filters'       => false,
	'order'                  => 'ASC'	
);
//echo '<pre>';
//var_dump($args);
//echo '</pre>';
wp_cache_flush();
$query = new WP_Query($args);

//$corsi = $wpdb->get_results($query, OBJECT); 

//echo '<h2>WP_Query SQL Query</h2><p>'.$query->request.'</p>';
//echo '<h2>Last query</h2><p>'.$wpdb->last_query.'</p>';

if ( $query->have_posts() ) {
	
?>
            <section class="cards courses-cards">
              <?php while ( $query->have_posts() ) {
$query->the_post();
 ?>
              <div class="col-lg-3 columns panel course-part-time">
                <div class="text"> <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                  <h2 class="titolo-corso">
                    <?php the_title(); ?>
                  </h2>
                  <hr class="yellow">
                  <?php $terms = get_the_terms( $post->ID , 'lunghezza_corsi' ); foreach ( $terms as $term )
				   { 
				   echo '<span class="course-type">'.$term->name.'</span>';
				   }?>
                  <span class="course-start-date"><?php echo get_date(get_field('data_inizio'),"standard"); ?>&nbsp;</span> </div>
                </a> </div>
              <?php
	}	

	wp_reset_postdata();
?>
           
            <?php } else  {?>
            <?php if (ICL_LANGUAGE_CODE =='it') { ?>
            <div class="info">
              <p>Non ci sono corsi con le caratteristiche selezionate</p>
            </div>
            <?php } else  {?>
            <div class="info">
              <p>No courses found with the requested features</p>
            </div>
            <?php } ?>
            <?php } 
		
		
		
		?>
        
        
        

        
        
          <?php  

$course_name =($_GET['course_name'])  ? ($_GET['course_name']) : '';	  

$query_tax_value = 26;
$tax_query = array();
$tax_query[] = array(
            'taxonomy' => 'lunghezza_corsi',
            'field' => 'id',
            'terms' => (int)$query_tax_value
        );

//var_dump($tax_query);
$course_cat=array();	 		
$course_cat['it']=61;
$course_cat['en']=62;

$args = array(
	'post_type'              => 'page',
	'post_status'            => 'publish',
	'cat'                    => $course_cat[ICL_LANGUAGE_CODE],
	'pagination'             => true,
	'tax_query' 			 => $tax_query,
	'posts_per_page'         => '8',
	'meta_key'			     => 'data_inizio',
	'orderby'			     => 'meta_value_num',
	'meta_query'  => array(
             array(        
              'key'     => 'data_inizio',  // which meta to query
              'value'   => date("Y-m-d"),
              'compare' => '>=',          // method of comparison
              'type' => 'DATE'
            ) 
           ) ,
	'cache_results'          => false,
	'suppress_filters'       => false,
	'order'                  => 'ASC'	
);
//echo '<pre>';
//var_dump($args);
//echo '</pre>';
wp_cache_flush();
$query = new WP_Query($args);

//$corsi = $wpdb->get_results($query, OBJECT); 

//echo '<h2>WP_Query SQL Query</h2><p>'.$query->request.'</p>';
//echo '<h2>Last query</h2><p>'.$wpdb->last_query.'</p>';

if ( $query->have_posts() ) {
	
?>
              <?php while ( $query->have_posts() ) {
$query->the_post();
 ?>
              <div class="col-lg-3 columns panel course-part-time">
                <div class="text"> <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                  <h2 class="titolo-corso">
                    <?php the_title(); ?>
                  </h2>
                  <hr class="grey">
                  <?php $terms = get_the_terms( $post->ID , 'lunghezza_corsi' ); foreach ( $terms as $term )
				   { 
				   echo '<span class="course-type">'.$term->name.'</span>';
				   }?>
                  <span class="course-start-date"><?php echo get_date(get_field('data_inizio'),"standard"); ?>&nbsp;</span> </div>
                </a> </div>
              <?php
	}	

	wp_reset_postdata();
?>
            </section>
            <?php } else  {?>
            <?php if (ICL_LANGUAGE_CODE =='it') { ?>
            <div class="info">
              <p>Non ci sono corsi con le caratteristiche selezionate</p>
            </div>
            <?php } else  {?>
            <div class="info">
              <p>No courses found with the requested features</p>
            </div>
            <?php } ?>
            <?php } 
		
		
		
		?> 
        
        
        
          </div>
          <div class="tab-pane" id="2">
            <h1>Orange</h1>
            <p>orange orange orange orange orange</p>
          </div>
          <div class="tab-pane" id="3">
            <h1>Yellow</h1>
            <p>yellow yellow yellow yellow yellow</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>