<?php
/*
Template Name: Meet us online
*/
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header( 2017 );
?>

<style>
    :root {
        --current-color: #cc8a00;
    }
</style>

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
</header>
<div class="container">
    <div class="row">
        <main id="main" class="site-main" role="main">
            <div id="page-content" class="col-12 col-md-8">
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

<section class="py-32 my-48" style="background-color: #F7F9FA">
    <div class="container" id="month-<?php echo $month_num ?>-<?php echo $year ?>">
        <div class="col-12 section-title px-0">
            <h3 class="color__gold"><?php echo get_date($month_num,"monthname",ICL_LANGUAGE_CODE) ?> <?php echo $year ?></h3>
        </div>
    </div>
</section>

<?php
  $compila_form = array();
  $compila_form[ 'it' ] = 'Compila il form';
  $compila_form[ 'en' ] = 'Fill out the Form';

  $label_evento = array();
  $label_evento[ 'it' ] = 'Tipo evento';
  $label_evento[ 'en' ] = 'Event type';

  $label_registrati = array();
  $label_registrati[ 'it' ] = 'Registrati';
  $label_registrati[ 'en' ] = 'Register';

  $label_dettagli = array();
  $label_dettagli[ 'it' ] = 'Dettagli';
  $label_dettagli[ 'en' ] = 'Details';

  $label_lingua = array();
  $label_lingua[ 'it' ] = 'Lingua';
  $label_lingua[ 'en' ] = 'Language';

  $label_dettagli_2 = array();
  $label_dettagli_2[ 'it' ] = 'Leggi di più';
  $label_dettagli_2[ 'en' ] = 'Read More';
  ?>

<section class="d-none d-lg-block pb-16 mb-24" style="border-bottom: 1px solid #e8e8e8;">
    <div class="container">
        <div class="d-flex flex-row align-items-center justify-content-between flex-wrap flex-lg-nowrap p-16">
            <h3 class="w-10 p-8">Data</h3>
            <h3 class="w-30 p-8">Evento</h3>
            <h3 class="w-20 p-8"><?php echo $label_evento[ICL_LANGUAGE_CODE]; ?></h3>
            <h3 class="w-10 p-8"><?php echo $label_lingua[ICL_LANGUAGE_CODE]; ?></h3>
            <h3 class="w-15 p-8"><?php echo $label_dettagli[ICL_LANGUAGE_CODE]; ?></h3>
            <h3 class="w-15 p-8"><?php echo $label_registrati[ICL_LANGUAGE_CODE]; ?></h3>
        </div>
        <!--END .row -->
    </div>
</section>

<div class="container">
    <?php } ?>
    <div class="d-flex flex-row align-items-center justify-content-between flex-wrap flex-lg-nowrap card-meet p-16">
        <div class="w-10 p-md-16 m-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
            <h6 class="my-0" style="color:var(--current-color);"><?php echo get_date($data_inizio,"events",ICL_LANGUAGE_CODE) ?></h6>
        </div>
        <h6 class="color__blue m-0 w-30 p-8" itemprop="name headline"><?php echo $event->post_title ?> </h6>
        <p class="m-0 w-20 p-8"><?php echo $event->tipo_evento?></p>
        <p class="w-10 p-8"><?php echo $event->lingua?></p>
        <a class="button button__secondary w-15 m-8" href="<?php echo $event->dettagli?>" title="<?php echo $event->post_title ?>"><?php echo $label_dettagli_2[ICL_LANGUAGE_CODE]; ?></a>
        <a class="button button__primary w-15 m-8" href="<?php echo $event->registrati?>" title="<?php echo $event->post_title ?>"><?php echo $compila_form[ICL_LANGUAGE_CODE]; ?></a>
    </div>
    <!--END .row -->
    <?php
    } // END foreach?>
</div>
<?php  } // END if ?>

<!--END .container -->
<div class="container mb-64">
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