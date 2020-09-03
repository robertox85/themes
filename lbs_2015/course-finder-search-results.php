<?php
/*
Template Name: Risultati di ricerca Course Finder
*/
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
wp_enqueue_style('Main', site_url().'/wp-content/themes/lbs_2015/pco/main.css');
get_header(2017)
?>

<style>
    :root {
        --current-color: #003A70;
    }
</style>

<!-- Includo le variabili comuni -->

<?php require dirname(__DIR__).'/lbs_2015/pco/variables/vars.php'; ?>

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

$label_button=array();	 		
$label_button['it']='Scopri';
$label_button['en']='Find out more';
?>
        <section class="py-48">
            <div class="d-flex flex-row flex-wrap justify-content-start align-items-stretch px-0 pt-24">
          <?php while ( $query->have_posts() ) {
$query->the_post();

 ?>
          <?php get_template_part( 'pco/template-parts/card-course', get_post_format() ); ?>
                
          <?php
	}	

	wp_reset_postdata();
?>
                </div>
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
  <!--END .row --> 
<!--END .container -->

<section class="offerta">
	<div class="container">

		<div id="course-finder-wrapper">
			<?php get_template_part('course-finder-widget-new'); ?>
		</div>
	</div>
</section>
<?php 

get_footer(2017);

?>
