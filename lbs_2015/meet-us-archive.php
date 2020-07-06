<?php
/*
Template Name: Meet us online
*/

get_header( 2017 );
?>
<header id="content-title" class="wide-row">
  <div class="container">
    <div class="row">
      <div class="sommario col-md-8">
        <h1><?php echo the_title(); ?></h1>
      </div>
    </div>
    <!--END .row --> 
  </div>
  <!--END .container -->
  
  <style type="text/css" media="all">
	

	
.programma a	{
    color: #feba4d;
    text-transform: uppercase;
	font-weight: 600
	
	}	
	  
	@media (max-width: 767px) {
.hidden-xs {
	display: none !important;
	
}
.top	{
	margin-top: 4%;
	
}	
		
		
.btn-warning-mob {
    margin: 20px auto;
    margin-top: 20px;
    max-width: 100%;
    color: #fff !important;
    background-image: linear-gradient(to top, #eaaa00, #fdcf54);
    border-radius: 0px;
    border: 0;
    box-shadow: 0 0 1.25rem 0 rgba(0, 0, 0, 0.3);
    margin-top: 1.125rem;
	padding: 7px;
	text-align: center
}		
}  
</style>
</header>
<div class="container">
  <div class="row">
    <main id="main" class="site-main" role="main">
      <div id="page-content" class="col-md-12 columns  space">
        <?php
        while ( have_posts() ): the_post();
        $post_id = get_the_ID();
        ?>
        <?php the_content(''); ?>
        <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?>
        <?php endwhile; // end of the loop. ?>
      </div>
    </main>
  </div>
</div>
<?php

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$eventi_cat = array();
$eventi_cat[ 'it' ] = 155;
$eventi_cat[ 'en' ] = 156;
$args = array(
  'posts_per_page' => 50,
  'offset' => 0,
  'cat' => $eventi_cat[ ICL_LANGUAGE_CODE ],
  'post_status' => 'publish',
  'post_type' => 'evento',
  'paged' => $paged,
  'meta_key' => 'data_inizio',
  'orderby' => 'meta_value',
  'order' => 'ASC',
  'suppress_filters' => true );
$events = get_posts( $args );
$year = '';
$month_num = '';
if ( !( empty( $events ) ) ) {

  foreach ( $events as $event ) {
    $data_inizio = get_post_meta( $event->ID, 'data_inizio', true );
    $e++;
    if ( substr( $data_inizio, 5, 2 ) != $month_num ) {
      $month_num = substr( $data_inizio, 5, 2 );
      $year = substr( $data_inizio, 0, 4 );
      ?>
<?php if ($e>1) { ?>
</div>
<!--END .container events-cards cards-->
</div>
<!--END .row items-->
</section>
<?php } ?>
<section class="events-cards cards">
  <div class="archive-month wide-row" id="month-<?php echo $month_num ?>-<?php echo $year ?>">
    <div class="container">
      <div class="row">
        <h2 class="block-title h2"> <?php echo get_date($month_num,"monthname",ICL_LANGUAGE_CODE) ?> <?php echo $year ?></h2>
      </div>
    </div>
  </div>
  <!--END .wide-row-->
  
  <?php
  $compila_form = array();
  $compila_form[ 'it' ] = 'Compila il form';
  $compila_form[ 'en' ] = 'Fill out the Form';
  ?>
  <?php
  $label_evento = array();
  $label_evento[ 'it' ] = 'Tipo evento';
  $label_evento[ 'en' ] = 'Event';
  ?>
  <?php
  $label_registrati = array();
  $label_registrati[ 'it' ] = 'Registrati';
  $label_registrati[ 'en' ] = 'Register';
  ?>
	
  <?php
  $label_dettagli = array();
  $label_dettagli[ 'it' ] = 'Dettagli';
  $label_dettagli[ 'en' ] = 'Details';
  ?>
	
  <?php
  $label_lingua = array();
  $label_lingua[ 'it' ] = 'Lingua';
  $label_lingua[ 'en' ] = 'Language';
  ?>
	
 <?php
  $label_dettagli_2 = array();
  $label_dettagli_2[ 'it' ] = 'Leggi di più';
  $label_dettagli_2[ 'en' ] = 'Read More';
  ?>	

  <section class="events-cards cards hidden-xs">
    <div class="container" >
      <div class="row items">
        <div class="col-md-1 columns  space">
          <h3>Data</h3>
        </div>
        <div class="col-md-4 columns  space programma">
          <h3>Evento</h3>
        </div>
        <div class="col-md-2 columns  space">
          <h3><?php echo $label_evento[ICL_LANGUAGE_CODE]; ?></h3>
        </div>
		  
		 <div class="col-md-1 columns  space">
          <h3><?php echo $label_lingua[ICL_LANGUAGE_CODE]; ?></h3>
        </div>   
		  
		 <div class="col-md-2 columns  space">
          <h3><?php echo $label_dettagli[ICL_LANGUAGE_CODE]; ?></h3>
        </div>  
		  
        <div class="col-md-2 columns  space">
          <h3><?php echo $label_registrati[ICL_LANGUAGE_CODE]; ?></h3>
        </div>
      </div>
      <!--END .row --> 
      
    </div>
  </section>
  <div class="container">
    <?php } ?>
    <div class="row top">
      <div class="col-md-1 col-xs-3">
        <div class="event-date"><?php echo get_date($data_inizio,"events",ICL_LANGUAGE_CODE) ?></div>
      </div>
      <div class="col-md-4 col-xs-9 programma" style="min-height:125px">
        <h3 itemprop="name headline" class="home-news-headline"> <?php echo $event->post_title ?> </h3>
      </div>
		
	
		
		
      <div class="col-md-2 col-xs-6">
        <p> <strong><?php echo $event->tipo_evento?></strong></p>
      </div>
		
		<div class="col-md-1 col-xs-6">
        <p> <strong><?php echo $event->lingua?></strong></p>
      </div>	
	 
	  <div class="col-md-2 col-xs-12">

      <p class="programma"><a  href="<?php echo $event->dettagli?>" title="<?php echo $event->post_title ?>" class="btn-warning-mob"> <?php echo $label_dettagli_2[ICL_LANGUAGE_CODE]; ?> </a> </p>
      </div>	
	 	
      <div class="col-md-2 col-xs-6">
        <p class="programma"><a  href="<?php echo $event->registrati?>" title="<?php echo $event->post_title ?>" class="btn-warning-mob"> <?php echo $compila_form[ICL_LANGUAGE_CODE]; ?> </a> </p>
      </div>
    </div>
    
    <!--END .row -->
    <hr>
    <?php
    } // END foreach?>
  </div>
  <?php  } // END if ?>
</section>
<!--END .container -->
<div class="container ">
  <div class="row ">
    <nav class="pagination-nav">
      <?php

      $next_label[ 'it' ] = 'Eventi più vecchi &raquo;';
      $next_label[ 'en' ] = 'Older Events &raquo;';

      $prev_label[ 'it' ] = '&laquo; Eventi più recenti';
      $prev_label[ 'en' ] = '&laquo; Newer Events';

      // next_posts_link() usage with max_num_pages
      previous_posts_link( $prev_label[ ICL_LANGUAGE_CODE ] );
      next_posts_link( $next_label[ ICL_LANGUAGE_CODE ], $events_list->max_num_pages );

      ?>
    </nav>
  </div>
  <!--END .row --> 
  
</div>
<!--END .container -->
<?php
// clean up after the query and pagination
wp_reset_postdata();
?>
<?php

get_footer( 2017 );

?>
