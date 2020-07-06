<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Template Name: Executive Program
 * @file executive-program.php
 */
    $shd = get_field('sub_home_description');
	$shp = get_field('sub_home_paragraf');

	
	$no_1 = get_field('navigazione_offerta_1');
	$no_2 = get_field('navigazione_offerta_2');
	$no_3 = get_field('navigazione_offerta_3');
	$no_4 = get_field('navigazione_offerta_4');
	$no_5 = get_field('navigazione_offerta_5');
	$no_6 = get_field('navigazione_offerta_6');
	
	$tema = get_field('tematiche');
	
get_header(); 
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
            <p class="h1-sub"><?php echo html_entity_decode($shd); ?></p>
            <p><?php echo html_entity_decode($shp); ?></p>
          </div>
        </div>
        <div class="col-md-8 nopadding">
          <div class="sub-home-item-info vid">
            <iframe width="919" height="474" src="//www.youtube.com/embed/hQttmNWrGbY?wmode=transparent&rel=0&showinfo=0&controls=0" frameborder="0" allowfullscreen wmode="Opaque"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div id="offerta-nav">
    <div class="row">
      <ul>
        <li class="col-md-2"> <?php echo html_entity_decode($no_1); ?> </li>
        <li class="col-md-2"> <?php echo html_entity_decode($no_2); ?> </li>
        <li class="col-md-2"> <?php echo html_entity_decode($no_3); ?> </li>
        <li class="col-md-2 active"> <?php echo html_entity_decode($no_4); ?> </li>
        <li class="col-md-2"> <?php echo html_entity_decode($no_5); ?> </li>
        <li class="col-md-2"> <?php echo html_entity_decode($no_6); ?></li>
      </ul>
    </div>
  </div>
</div>
<?php   $link_custom = array();
		$link_custom['it'] = '/offerta-formativa/executive-program/custom-programmes/';
		$link_custom['en'] = '/en/programs/executive-program/custom-programmes/';
?>
<?php   $link_labs = array();
		$link_labs['it'] = '/offerta-formativa/executive-program/executive-labs/';
		$link_labs['en'] = '/en/programs/executive-program/executive-labs/';
?>
<?php   $testo_custom = array();
		$testo_custom['it'] = 'La formazione per le imprese: un modello in divenire';
		$testo_custom['en'] = 'Education for businesses: A model in constant transformation';
?>
<?php   $testo_custom_labor = array();
		$testo_custom_labor['it'] = 'Le dinamiche del sistema bancario italiano';
		$testo_custom_labor['en'] = 'Organisation Management and Italian banking system dynamics';
?>
<?php   $testo_labs = array();
		$testo_labs['it'] = 'Strategie per affinare abilità manageriali e relazionali';
		$testo_labs['en'] = 'Strategies to refine managerial and relationship skills';
?>
<section class="cards courses-cards">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 columns panel" style="min-height:240px;"> <a href="<?php echo $link_custom[ICL_LANGUAGE_CODE]; ?>">
        <div class="text">
          <h2>Custom Programmes </h2>
          <hr class="yellow" />
          <p><?php echo $testo_custom[ICL_LANGUAGE_CODE]; ?></p>
        </div>
        </a> </div>
      <div class="col-lg-3 columns panel" style="min-height:240px;"> <a href="/offerta-formativa/executive-program/custom-programmes/ieppm-international-executive-program-in-project-management/">
        <div class="text">
          <h2>IEPPM </h2>
          <hr class="yellow" />
          <p>International Executive Program in Project Management</p>
        </div>
        </a> </div>
      <div class="col-lg-3 columns panel" style="min-height:240px;"> <a href="/laborbank/">
        <div class="text">
          <h2>Laborbank </h2>
          <hr class="yellow" />
          <p><?php echo $testo_custom_labor[ICL_LANGUAGE_CODE]; ?></p>
        </div>
        </a> </div>
      <div class="col-lg-3 columns panel" style="min-height:240px;"> <a href="<?php echo $link_labs[ICL_LANGUAGE_CODE]; ?>">
        <div class="text">
          <h2>Executive LABS </h2>
          <hr class="yellow" />
          <p><?php echo $testo_labs[ICL_LANGUAGE_CODE]; ?></p>
        </div>
        </a> </div>
    </div>
  </div>
  </div>
</section>
<?php   $tematica = array();
		$tematica['it'] = 'L&#8217;offerta completa suddivisa per tematica';
		$tematica['en'] = '';
?>
<?php if(ICL_LANGUAGE_CODE=='it'): ?>
<section class="stories stories-cards cards">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10">
          <h2><?php echo $tematica[ICL_LANGUAGE_CODE]; ?></h2>
        </div>
      </header>
    </div>
  </div>
</section>
<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
<?php endif;?>
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
		if (!(strcmp($term->name, $page_title))) {	
		$selected =' selected="selected" ';	
		}
		echo '<option value="'.$term->term_id.'" '.$selected.' href="'.$term->slug.'">'.$term->name.'</option>';
     	} // END foreach
		} // END if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
		?>
        </select>
        <script>
document.getElementById('tematica').onchange = function() {
window.location.href = this.children[this.selectedIndex].getAttribute('href');
}
</script> 
      </div>
    </div>
  </div>
</div>
<?php   $titolo_programmi = array();
		$titolo_programmi['it'] = 'I Prossimi Programmi';
		$titolo_programmi['en'] = 'Next programmes';
?>
<section class="stories stories-cards cards">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10">
          <h2><?php echo $titolo_programmi[ICL_LANGUAGE_CODE]; ?></h2>
        </div>
      </header>
    </div>
  </div>
</section>
<div class="container">
  <div id="content">
    <div id="sub-offerta-nav">
      <div class="row">
        <?php  

$course_name =($_GET['course_name'])  ? ($_GET['course_name']) : '';	  

$query_tax_value = 25;
$tax_query = array();
$tax_query[] = array(
          'taxonomy' => 'lunghezza_corsi',
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
	'posts_per_page'         => '28',
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
            <?php $terms = get_the_terms( $post->ID , 'lunghezza_corsi' ); foreach ( $terms as $term )
				   { 
				   echo '<hr class="'.$term->slug.'">';
				   }?>
            <?php $terms = get_the_terms( $post->ID , 'lunghezza_corsi' ); foreach ( $terms as $term )
				   { 
				   echo '<span class="course-type">'.$term->name.'</span>';
				   }?>
            <?php   if(get_field('tip_corso')) { echo '<span class="course-type">'. get_field('tip_corso') . '</span>'; } ?>
            <span class="course-start-date"><?php echo get_date(get_field('data_inizio'),"standard"); ?>&nbsp;</span> </div>
          </a> </div>
        <?php
	}	

	wp_reset_postdata();
?>
        <?php } else  {?>
        <?php if (ICL_LANGUAGE_CODE =='it') { ?>
        <!-- <div class="info">
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
    </div>
  </div>
</div>
<?php get_footer(2017); ?>
