<?php
/*
Template Name: AFC
*/
get_header(); 
?>
<?php   $sub_intro = array();
		$sub_intro['it'] = 'I ruoli di chi opera nella funzione Amministrazione, Finanza e Controllo stanno subendo cambiamenti profondi che richiedono l&#8217;integrazione di competenze e capacità ampie e diversificate. I nostri Open Programmes rispondono a questi fabbisogni. Arricchendo e completando le tue conoscenze, potrai affrontare con successo nuove sfide professionali.';
		$sub_intro['en'] = 'The roles of managers and professionals in Accounting, Finance and Control Unit are undergoing deep changes which require the integration of large and different skills and abilities. Our Open Programmes respond to these needs . Developping and integrating your knowledge, you can successfully face new challenges .';
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
            <p><?php echo $sub_intro[ICL_LANGUAGE_CODE]; ?></p>
          </div>
        </div>
        <div class="col-md-8 nopadding">
          <div class="sub-home-item-info"> <img  src="/wp-content/uploads/2015/07/accounting-finance-control.jpg" alt="Prendi-il-controllo-della-tua-carriera"  class="img-responsive"/> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php   $link = array();
		$link['it'] = '/offerta-formativa/corsi-di-laurea/';
		$link['en'] = '/en/programs/degree-programmes/';
?>
<?php   $link_1 = array();
		$link_1['it'] = '/offerta-formativa/mba/';
		$link_1['en'] = '/en/programs/mba/';
?>
<?php   $link_2 = array();
		$link_2['it'] = '/offerta-formativa/master/';
		$link_2['en'] = '/en/programs/master/';
?>
<?php   $link_3 = array();
		$link_3['it'] = '/offerta-formativa/executive-program/';
		$link_3['en'] = '/en/programs/executive-program/';
?>
<?php   $link_4 = array();
		$link_4['it'] = '/offerta-formativa/doctoral/';
		$link_4['en'] = '/en/programs/doctoral/';
?>
<?php   $link_5 = array();
		$link_5['it'] = '/offerta-formativa/formazione-specialistica/';
		$link_5['en'] = '/en/programs/specialised-programme/';
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
    <?php  




$query_tax_value = 25;
$tax_query = array();
$tax_query[] = array(
            'taxonomy' => 'lunghezza_corsi',
            'field' => 'id',
            'terms' => (int)$query_tax_value
        );
		
		
$query_tax_value = 29;
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
    <section class="cards courses-cards">
      <?php  




$query_tax_value = 26;
$tax_query = array();
$tax_query[] = array(
            'taxonomy' => 'lunghezza_corsi',
            'field' => 'id',
            'terms' => (int)$query_tax_value
        );
		
		
$query_tax_value = 29;
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
		
		
$query_tax_value = 29;
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
	'meta_key'			     => 'data_fine',
	'orderby'			     => 'meta_value_num',
	'meta_query'  => array(
             array(        
             'key'     => 'data_fine',  // which meta to query
              'value'   => date("Y-m-d"),
              'compare' => '>=',          // method of comparison
             'type' => 'DATE'
           ) 
           ) ,
	'cache_results'          => false,
	'suppress_filters'       => false,
	'order'                  => 'DESC'	
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
  <!--  <div class="info">
      <p>Non ci sono corsi con le caratteristiche selezionate</p> 
    </div>-->
    <?php } else  {?>
  <!--  <div class="info">
      <p>No courses found with the requested features</p> 
    </div>-->
    <?php } ?>
    <?php } 
		
		
		
		?>
  </div>
</div>


<!--END .container -->
<?php 

get_footer(ICL_LANGUAGE_CODE);

?>
