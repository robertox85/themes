<?php
/*
Template Name: Archivio Eventi
*/
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header(2017); ?>

<style>
    :root {
        --current-color: #003A70;
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


<?php
   
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;   

$eventi_cat=array(); 
$eventi_cat['it']=22;
$eventi_cat['en']=23;  
  $args = array(
	'posts_per_page'   => 50,
	'offset'           => 0,
	'cat'              => $eventi_cat[ICL_LANGUAGE_CODE],
	'post_status'      => 'publish',
	'post_type'        => 'evento',
	'paged'            => $paged,
	'meta_key'		   => 'data_inizio',
	'orderby'          => 'meta_value',
	'order'            => 'DESC',
	'suppress_filters' => true );
 $events =  get_posts($args);
$year ='';
$month_num = '';	 
if (!(empty($events))) {

foreach($events as $event )  {
$data_inizio = get_post_meta($event->ID, 'data_inizio',true); 
$e++;
 if (substr($data_inizio,5,2) !=$month_num) { 
$month_num = substr($data_inizio,5,2);
$year = substr($data_inizio,0,4); ?>
<?php if ($e>1) { ?>
</div>
<!--END .container events-cards cards-->
</div>
<!--END .row items-->
</section>
<?php } ?>

<section class="py-32 mt-48" style="background-color: #F7F9FA">
    <div class="container" id="month-<?php echo $month_num ?>-<?php echo $year ?>">
        <div class="col-12 section-title px-0">
            <h3 class="color__gold"><?php echo get_date($month_num,"monthname",ICL_LANGUAGE_CODE) ?>
                    <?php echo $year ?></h3>
        </div>
    </div>
</section>
    <div class="container">
		<div class="row my-48">
            <?php } ?>

            <div class="col-12 col-lg-4">
            <article itemscope="" itemtype="http://schema.org/Article">
                    <div class="row d-flex flex-row align-items-center justify-content-between my-16 px-16">
                        <div class="col-xs-4 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
                            <h6 class="my-0"><?php echo get_date($data_inizio,"events",ICL_LANGUAGE_CODE) ?></h6>
                        </div>
                        <div class="col-xs-8 box-event-title">
                            <h6 class="my-0" itemprop="name headline"><a href="<?php echo get_permalink($event->ID) ?>" title="<?php echo $event->post_title ?>" title="<?php echo $event->post_title ?>"><?php echo $event->post_title ?></a></h6>
                            <p>
						<?php echo $event->post_excerpt ?>
                        <?php echo $event->programma?>
                        <?php echo $event->tipo_evento?>
					</p>
                        </div>
                    </div>
                </article>
            </div>

            <?php 
} // END foreach

} // END if ?>
        </div>
        <!--END .row -->

    </div>
</section>
<!--END .container -->
<div class="container ">
    <div class="row ">
        <nav class="pagination-nav">
            <?php

$next_label['it']= 'Eventi più vecchi &raquo;';
$next_label['en']= 'Older Events &raquo;';

$prev_label['it']= '&laquo; Eventi più recenti';
$prev_label['en']= '&laquo; Newer Events';

// next_posts_link() usage with max_num_pages
previous_posts_link($prev_label[ICL_LANGUAGE_CODE]);
next_posts_link($next_label[ICL_LANGUAGE_CODE], $events_list->max_num_pages );

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

get_footer(2017);

?>