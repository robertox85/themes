<?php
/*
Template Name: Real
*/
get_header(); 
?>
<?php   $intro = array();
		$intro['it'] = 'Prendi il controllo della tua carriera';
		$intro['en'] = 'Take the control on your career';
?>
<?php   $sub_intro = array();
		$sub_intro['it'] = 'Accelera la tua carriera, sviluppa le tue skill di leadership e le tue competenze tecniche e funzionali. I programmi executive sono rivolti a manager, imprenditori e professionisti orientati allo sviluppo di competenze funzionali e di leadership e che desiderano apprendere attraverso metodi basati sul problem-solving e action-learning, sullo sviluppo di competenze non convenzionali, sui laboratori ed il networking.';
		$sub_intro['en'] = 'Foster your career path, improve your leadership skills and your functional and technical competences. The Executive programmes are aimed at managers, entrepreneurs and professionals willing to develop not-conventional skills and to learn through problem-solving and action-learning based methods, labs and the networking.';
?>

<section class="section sub-home" id="sub-home">
  <div class="container">
    <div class="row sub-home-list">
      <div class="sub-home-grid">
        <div class="col-md-4">
          <div class="sub-home-heading">
            <header>
              <h1><?php echo the_title(); ?></h1>
            </header>
           <!-- <p class="h1-sub"><?php // echo $intro[ICL_LANGUAGE_CODE]; ?></p> -->
            <p><?php echo $sub_intro[ICL_LANGUAGE_CODE]; ?></p>
          </div>
        </div>
        <div class="col-md-8 nopadding">
          <div class="sub-home-item-info"> <img  src="<?php echo get_site_url() ?>/wp-content/uploads/2015/04/LUISS_POLA_091001_030.jpg" alt="Prendi-il-controllo-della-tua-carriera"  class="img-responsive"/> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php   $link = array();
		$link['it'] = 'http://businessschool.luiss.it/offerta-formativa/corsi-di-laurea/';
		$link['en'] = 'http://businessschool.luiss.it/en/programs/degree-programmes/';
?>
<?php   $link_1 = array();
		$link_1['it'] = 'http://businessschool.luiss.it/offerta-formativa/mba/';
		$link_1['en'] = 'http://businessschool.luiss.it/en/programs/mba/';
?>
<?php   $link_2 = array();
		$link_2['it'] = 'http://businessschool.luiss.it/offerta-formativa/master/';
		$link_2['en'] = 'http://businessschool.luiss.it/en/programs/master/';
?>
<?php   $link_3 = array();
		$link_3['it'] = 'http://businessschool.luiss.it/offerta-formativa/executive-program/';
		$link_3['en'] = 'http://businessschool.luiss.it/en/programs/executive-program/';
?>
<?php   $link_4 = array();
		$link_4['it'] = 'http://businessschool.luiss.it/offerta-formativa/doctoral/';
		$link_4['en'] = 'http://businessschool.luiss.it/en/programs/doctoral/';
?>
<?php   $link_5 = array();
		$link_5['it'] = 'http://businessschool.luiss.it/offerta-formativa/formazione-specialistica/';
		$link_5['en'] = 'http://businessschool.luiss.it/en/programs/specialised-programme/';
?>
<div class="container">
  <div id="offerta-nav">
    <div class="row">
      <ul>
        <li class="col-md-2"> <a href="<?php echo $link[ICL_LANGUAGE_CODE]; ?>">Bachelor and Master of Science</a> </li>
        <li class="col-md-2"> <a href="<?php echo $link_1[ICL_LANGUAGE_CODE]; ?>">MBA</a> </li>
        <li class="col-md-2"> <a href="<?php echo $link_2[ICL_LANGUAGE_CODE]; ?>">MASTER</a> </li>
        <li class="col-md-2 active"> <a href="<?php echo $link_3[ICL_LANGUAGE_CODE]; ?>" class="active">EXECUTIVE PROGRAMMES</a> </li>
        <li class="col-md-2"> <a href="<?php echo $link_4[ICL_LANGUAGE_CODE]; ?>">PHD</a> </li>
        <li class="col-md-2"> <a href="<?php echo $link_5[ICL_LANGUAGE_CODE]; ?>">SPECIALISATION PROGRAMMES</a></li>
      </ul>
    </div>
  </div>
</div>
<section class="stories stories-cards cards">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10">
          <h2><?php echo the_title(); ?></h2>
        </div>
      </header>
    </div>
  </div>
</section>
<div class="container">
  <div id="sub-offerta-nav">
    <div class="row">
      <?php if ( has_nav_menu( 'tematiche_menu' ) ) {   
    $defaults = array(
        'theme_location'  => 'tematiche_menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'tematiche-desktop',
        'container_id'    => '',
        'menu_class'      => 'col-md-12',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,       
    );

     wp_nav_menu( $defaults );
} ?>
      <?php 
$select_first_choice['it']='Scegli una tematica';
$select_first_choice['en']='Choose an Area'; ?>
      <div class="tematiche-mobile">
        <select id="tematica" name="tematica" class="col-xs-12" >
          <option value=""><?php echo $select_first_choice[ICL_LANGUAGE_CODE]; ?></option>
          <?php 
				  
        $terms = get_terms('tematiche');
		$page_title = trim(html_entity_decode(get_the_title()));

 		if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
     	foreach ( $terms as $term ) { 
		$selected ='';
		if (!(strcmp(strtolower($term->name), strtolower($page_title)))) {	
		$selected =' selected="selected" ';	
		}
		echo '<option value="'.$term->slug.'" '.$selected.'>'.$term->name.'</option>';
     	} // END foreach
		} // END if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
		?>
        </select>
        <script>
$('#tematica').change(function() {


window.location.href = $(this).val();
});
</script> 
      </div>
    </div>
  </div>
</div>

    <?php  




$query_tax_value = 25;
$tax_query = array();
$tax_query[] = array(
            'taxonomy' => 'lunghezza_corsi',
            'field' => 'id',
            'terms' => (int)$query_tax_value
        );
		
		
$query_tax_value = 37;
$tax_query[] = array(
            'taxonomy' => 'tematiche',
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
	'posts_per_page'         => '-1',
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

<section class="stories stories-cards cards">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10">
          <h2>Percorsi</h2>
        </div>
      </header>
    </div>
  </div>
</section>
<div class="container">
  <div class="row">

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
          <?php $terms = get_the_terms( $post->ID , 'lunghezza_corsi' ); 
		foreach ( $terms as $term )
				   { 
				   echo '<span class="course-type">'.$term->name.'</span>';
				   }?>
          <span class="course-start-date"><?php echo get_date(get_field('data_inizio'),"standard"); ?>&nbsp;</span> </a> </div>
      </div>
      <?php
	}	

	wp_reset_postdata();
?>
    </section>
    <?php } else  {?>
    <?php if (ICL_LANGUAGE_CODE =='it') { ?>
    <!-- <div class="info">
      <p>Non ci sono corsi con le caratteristiche selezionate</p>
    </div> -->
    <?php } else  {?>
    <!--<div class="info">
      <p>No courses found with the requested features</p>
    </div> -->
    <?php } ?>
    <?php } 
		
		
		
		?>
  </div>
</div>
<section class="stories stories-cards cards">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10">
          <h2>Corsi</h2>
        </div>
      </header>
    </div>
  </div>
</section>
<div class="container">
  <div class="row">
    <?php  




$query_tax_value = 26;
$tax_query = array();
$tax_query[] = array(
            'taxonomy' => 'lunghezza_corsi',
            'field' => 'id',
            'terms' => (int)$query_tax_value
        );
		
		
$query_tax_value = 37;
$tax_query[] = array(
            'taxonomy' => 'tematiche',
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
	'posts_per_page'         => '-1',
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
          <hr class="grey">
          <?php $terms = get_the_terms( $post->ID , 'lunghezza_corsi' ); foreach ( $terms as $term )
				   { 
				   echo '<span class="course-type">'.$term->name.'</span>';
				   }?>
          <span class="course-start-date"><?php echo get_date(get_field('data_inizio'),"standard"); ?>&nbsp;</span> </a> </div>
      </div>
      <?php
	}	

	wp_reset_postdata();
?>
    </section>
    <?php } else  {?>
    <?php if (ICL_LANGUAGE_CODE =='it') { ?>
    <!--<div class="info">
      <p>Non ci sono corsi con le caratteristiche selezionate</p>
    </div> -->
    <?php } else  {?>
    <!-- <div class="info">
      <p>No courses found with the requested features</p>
    </div> -->
    <?php } ?>
    <?php } 
		
		
		
		?>
  </div>
  <!-- #content --> 
</div>
<!-- #container --> 

    <?php  




$query_tax_value = 25;
$tax_query = array();
$tax_query[] = array(
            'taxonomy' => 'lunghezza_corsi',
            'field' => 'id',
            'terms' => (int)$query_tax_value
        );
		
		
$query_tax_value = 37;
$tax_query[] = array(
            'taxonomy' => 'tematiche',
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
	'posts_per_page'         => '-1',
	'meta_key'			     => 'data_inizio',
	'orderby'			     => 'meta_value_num',
	'meta_query'  => array(
             array(        
             'key'     => 'data_inizio',  // which meta to query
              'value'   => date("Y-m-d"),
              'compare' => '<=',          // method of comparison
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

<section class="stories stories-cards cards">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10">
          <h2>Percorsi Attivi</h2>
        </div>
      </header>
    </div>
  </div>
</section>
<div class="container">
  <div class="row">
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
          <?php $terms = get_the_terms( $post->ID , 'lunghezza_corsi' ); 
		foreach ( $terms as $term )
				   { 
				   echo '<span class="course-type">'.$term->name.'</span>';
				   }?>
          <span class="course-start-date"><?php echo get_date(get_field('data_inizio'),"standard"); ?>&nbsp;</span> </a> </div>
      </div>
      <?php
	}	

	wp_reset_postdata();
?>
    </section>
    <?php } else  {?>
    <?php if (ICL_LANGUAGE_CODE =='it') { ?>
    <div class="info">
     <!-- <p>Non ci sono corsi con le caratteristiche selezionate</p> -->
    </div>
    <?php } else  {?>
    <div class="info">
    <!--  <p>No courses found with the requested features</p> -->
    </div>
    <?php } ?>
    <?php } 
		
		
		
		?>
  </div>
</div>
<!--END .container -->
<?php 

get_footer(ICL_LANGUAGE_CODE);

?>
