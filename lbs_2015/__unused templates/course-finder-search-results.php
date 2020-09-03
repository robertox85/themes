<?php
/*
Template Name: Risultati di ricerca Course Finder
*/
get_header(2017)
?>
<header id="content-title" class="wide-row">
  <div class="container">
    <div class="row">
      <div class="sommario col-md-8">
        <h1><?php echo the_title(); ?></h1>
        <?php the_excerpt(); ?>
      </div>
    </div>
    <!--END .row --> 
  </div>
  <!--END .container --> 
</header>
<div class="container">
    <main id="main" class="site-main" role="main">
          <div class="row">
      <div id="page-content" class="col-md-8">
        <?php  

$course_name =($_GET['course_name'])  ? ($_GET['course_name']) : '';
$selected_taxonomies =array('lingue','lunghezza_corsi','tematiche');	  
$custom_taxonomies = corsi_get_taxonomies($selected_taxonomies);

//var_dump($custom_taxonomies);
foreach ($custom_taxonomies as $taxonomy) {  
 
 if(  isset($_GET[$taxonomy[ICL_LANGUAGE_CODE]['name']])  && ($_GET[$taxonomy[ICL_LANGUAGE_CODE]['name']]!='') ) {
	

$query_tax_name = $taxonomy[ICL_LANGUAGE_CODE]['name'];
$query_tax_value = $_GET[$taxonomy[ICL_LANGUAGE_CODE]['name']];
$tax_query[] = array(
            'taxonomy' => $query_tax_name,
            'field' => 'id',
            'terms' => (int)$query_tax_value
        );

}
} // END foreach

//var_dump($tax_query);
$course_cat=array();	 		
$course_cat['it']=15;
$course_cat['en']=16;

$args = array(
	'post_type'              => 'page',
	'post_status'            => 'publish',
	'cat'                    => $course_cat[ICL_LANGUAGE_CODE],
	'pagination'             => true,
	'tax_query' 			 => $tax_query,
	'posts_per_page'         => '10000',
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
          <div class="col-md-12 columns panel panel-search-result">
            <article> <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
              <h2 class="course-name">
                <?php the_title(); ?>
              </h2>
              <hr class="yellow">
              <div class="col-md-6 nopadding">
                <dl>
                  <?php  
		   $t = 0;
	$custom_taxonomies = corsi_get_taxonomies( array('lingue' , 'lunghezza_corsi' , 'tematiche'));
		   foreach ($custom_taxonomies as $taxonomy ) { 
		   
		   $t++;
		     ?>
                  <dt><?php echo $taxonomy[ICL_LANGUAGE_CODE]['label'] ?></dt>
                  <dd><?php echo corso_writetaxonomy($taxonomy[ICL_LANGUAGE_CODE]['name']) ?>&nbsp;</dd>
                  <?php if ($t==3) { ?>
                </dl>
              </div>
              <div class="col-md-6 nopadding">
                <dl>
                  <?php } ?>
                  <?php } ?>
                  <dt><?php echo get_field('testo_inizio'); ?></dt>
                  <dd><?php echo get_date(get_field('data_inizio'),"standard"); ?>&nbsp;</dd>
                  <dt><?php echo get_field('titolo_durata'); ?></dt>
                  <dd><?php echo get_field('durata'); ?>&nbsp;</dd>
                  <dt><?php echo get_field('titolo_costo'); ?></dt>
                  <dd><?php echo get_field('costo'); ?>&nbsp;</dd>
                </dl>
              </div>
              </a> </article>
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

    <aside id="sidebar" class="col-md-3 offset-md-1">
    
    
    <div  class="block">
      <div class="content row"> <?php echo do_shortcode('[ssba]'); ?> </div>
      </div>
    
    
      <?php get_template_part('course-finder-widget-new'); ?>
      
      
    </aside>
  </div>
            </main>
  <!--END .row --> 
</div>
<!--END .container -->
<?php 

get_footer(2017);

?>
