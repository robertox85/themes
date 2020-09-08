<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
/*
Template Name: News ed Eventi
*/
get_header(); 
?>
<?php   $titolo_news = array();
		$titolo_news['it'] = ' Tutte le news e gli eventi';
		$titolo_news['en'] = 'All the news and events';
?>

<?php   $titolo_eventi = array();
		$titolo_eventi['it'] = 'Eventi';
		$titolo_eventi['en'] = 'EVENTS';
?>

<?php   $tutti_eventi = array();
		$tutti_eventi['it'] = 'Tutti gli eventi';
		$tutti_eventi['en'] = 'ALL EVENTS';
?>

<?php   $link_eventi = array();
		$link_eventi['it'] = '/news-eventi/calendario/';
		$link_eventi['en'] = '/en/news-events/calendar/';
?>


<?php   $tutti_news = array();
		$tutti_news['it'] = 'Tutte le NEWS';
		$tutti_news['en'] = 'ALL NEWS';
?>

<?php   $link_news = array();
		$link_news['it'] = '/news-eventi/news/';
		$link_news['en'] = '/en/news-events/news/';
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
            <p class="h1-sub"><?php echo $titolo_news[ICL_LANGUAGE_CODE]; ?></p>
            <p></p>
          </div>
        </div>
        <div class="col-md-8 nopadding">
          <div class="sub-home-item-info"><img  src="/wp-content/uploads/2017/05/villaBlanc_NEWS_Eventi.jpg" alt="Sede LUISS Business School Viale Pola 12"  class="img-responsive"/></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="events-cards cards">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10 space">
          <h2><?php echo $titolo_eventi[ICL_LANGUAGE_CODE]; ?></h2>
        </div>
        <div class="col-lg-2 space">
        <a href="<?php echo $link_eventi[ICL_LANGUAGE_CODE]; ?>" class="button more"><?php echo $tutti_eventi[ICL_LANGUAGE_CODE]; ?></a>
        </div>
      </header>
    </div><!-- END container -->
  </div><!-- END wide-row -->
   <div class="container">
    <div class="row items"> 
 
 <?php
$eventi_cat=array(); 
$eventi_cat['it']=22;
$eventi_cat['en']=23;
  $args = array(
	'posts_per_page'   => 8,
	'offset'           => 0,
	'cat'              => $eventi_cat[ICL_LANGUAGE_CODE],
	'post_type'        => 'evento',
	'post_status'      => 'publish',
	'meta_query'  => array(
             array(        
              'key'     => 'data_termine',  // which meta to query
              'value'   => date("Y-m-d"),
              'compare' => '>=',          // method of comparison
              'type' => 'DATE'
            ) 
           ) ,
	'meta_key'		   => 'data_termine',
	'orderby'		   => 'meta_value',
	'order' => 'ASC',
	'suppress_filters' => true );
 $eventi =  get_posts($args);
	 
if (!(empty($eventi))) {
 foreach($eventi as $evento )  {

$data_inizio = get_post_meta($evento->ID, 'data_inizio',true);	 
$data_termine = get_post_meta($evento->ID, 'data_termine',true);	 
 ?> 
 
 <div class="col-lg-3 columns panel triangle" >
        <article itemprop="event" itemscope itemtype="http://schema.org/Article"> <a href="<?php echo get_permalink($evento->ID) ?>" title="<?php echo $evento->post_title ?>">
          <div class="text">
              <time datetime="<?php echo $data_inizio ?>"><?php echo get_date($data_inizio,"events",ICL_LANGUAGE_CODE) ?>   <?  if(get_date($data_inizio ,"events")!= get_date($data_termine ,"events")) { echo '- ' .get_date($data_termine,"events",ICL_LANGUAGE_CODE); }?> </time>
           
            <h3 class="headline" itemprop="headline"><?php echo $evento->post_title ?></h3>
       
          </div>
          </a> 
          </article>
      </div>
  
<?php 
} // END foreach

} // END if ?>
 

  </div>
  </div>
</section>


<section class="news-cards cards">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10 space">
          <h2>News</h2>
        </div>
        <div class="col-lg-2 space">
        <a href="<?php echo $link_news[ICL_LANGUAGE_CODE]; ?>" class="button more"><?php echo $tutti_news[ICL_LANGUAGE_CODE]; ?></a>
        </div>
      </header>
    </div><!-- END container -->
  </div><!-- END wide-row -->
  <div class="container">
    <div class="row items">  
 
 <?php
 

 		 
$news_cat=array();	 		
$news_cat['it']=1;
$news_cat['en']=2;
  $args = array(
	'posts_per_page'   => 12,
	'offset'           => 0,
	'cat'              => $news_cat[ICL_LANGUAGE_CODE],
	'post_status'      => 'publish',
	'post_type'        => 'post',
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'suppress_filters' => true );
 $news =  get_posts($args);
	 
if (!(empty($news))) {
 foreach($news as $news )  {
	 
 
 ?> 

 <div class="col-lg-3 columns panel triangle" >
        <article class="img" itemscope itemtype="http://schema.org/Article">
         <a href="<?php echo get_permalink($news->ID) ?>" title="<?php echo $news->post_title ?>">
          <?php 
	$img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $news->post_title,
);
	echo get_the_post_thumbnail($news->ID, 'thumbnail',$img_attr);
	
	?>
          <div class="text">
            <time datetime="<?php echo $news->post_date  ?>"><?php echo get_date($news->post_date,"events",ICL_LANGUAGE_CODE); ?></time>
             <h3 class="headline" itemprop="headline"><?php echo $news->post_title ?></h3>
            <div class="description" itemprop="description">
              <p><?php echo $news->post_excerpt ?></p>
            </div>
          </div>
          </a> </article>
      </div>  
<?php 
} // END foreach

} // END if ?>
 
  </div>
  </div>
  
</section>

<?php get_footer(ICL_LANGUAGE_CODE); ?>
