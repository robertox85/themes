<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Template Name: Alumni
 * @file alumni.php
*/
    $shd = get_field('sub_home_description');
	$shp = get_field('sub_home_paragraf');
	$shv = get_field('sub_home_visore');
	
	$colonna_lancio = get_field('colonna_lancio');
	$colonna_lancio_2 = get_field('colonna_lancio_2');
	
	$cassetto_lancio = get_field('cassetto_lancio');
	
	$titolo_cassetto = get_field('titolo_cassetto');
	$descrizione_cassetto = get_field('descrizione_cassetto');
	
	$titolo_cassetto_2 = get_field('titolo_cassetto_2');
	$descrizione_cassetto_2 = get_field('descrizione_cassetto_2');
	
	$titolo_cassetto_3 = get_field('titolo_cassetto_3');
	$descrizione_cassetto_3 = get_field('descrizione_cassetto_3');
	
	$titolo_cassetto_4 = get_field('titolo_cassetto_4');
	$descrizione_cassetto_4 = get_field('descrizione_cassetto_4');
	
	$titolo_lancio_storia = get_field('titolo_lancio_storia');
	$tutte_le_storie = get_field('tutte_le_storie');
	
	
	
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
          <div class="sub-home-item-info"> <img  src="<?php echo $shv['url']; ?>" alt="<?php echo $shv['alt']; ?>"  class="img-responsive"/> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="drawers">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-12 space">
          <h2><?php echo html_entity_decode($cassetto_lancio); ?></h2>
        </div>
      </header>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class=" col-lg-3 columns panel">
        <article class="no-img">
          <div class="text">
            <h2 class="headline"><?php echo html_entity_decode($titolo_cassetto); ?></h2>
            <div class="description" itemprop="description">
              <p><?php echo html_entity_decode($descrizione_cassetto); ?></p>
            </div>
          </div>
        </article>
      </div>
      <div class=" col-lg-3 columns panel">
        <article class="no-img">
          <div class="text">
            <h2 class="headline"><?php echo html_entity_decode($titolo_cassetto_2); ?></h2>
            <div class="description" itemprop="description">
              <p><?php echo html_entity_decode($descrizione_cassetto_2); ?></p>
            </div>
          </div>
        </article>
      </div>
      <div class=" col-lg-3 columns panel">
        <article class="no-img">
          <div class="text">
            <h2 class="headline"><?php echo html_entity_decode($titolo_cassetto_3); ?></h2>
            <div class="description" itemprop="description">
              <p><?php echo html_entity_decode($descrizione_cassetto_3); ?></p>
            </div>
          </div>
        </article>
      </div>
      <div class=" col-lg-3 columns panel">
        <article class="no-img">
        <div class="text">
          <h2 class="headline"><?php echo html_entity_decode($titolo_cassetto_4); ?></h2>
          <div class="description" itemprop="description">
            <p><?php echo html_entity_decode($descrizione_cassetto_4); ?></p>
          </div>
        </div>
      </div>
      </article>
    </div>
  </div>
</section>
<section class="stories stories-cards cards">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10 space">
          <h2><?php echo html_entity_decode($titolo_lancio_storia); ?></h2>
        </div>
        <div class="col-lg-2 space"> <?php echo html_entity_decode($tutte_le_storie); ?> </div>
      </header>
    </div>
  </div>

  
 <?php  
 
 $post_parent['it']=125;
 $post_parent['en']=1558;
 
 $args = array(
	'posts_per_page'   => 7,
	'offset'           => 0,
	'orderby'          => 'ID',
	'order'            => 'DESC',
	'post_type'        => 'page',
	'post_status'      => 'publish',
	'post_parent'      => $post_parent[ICL_LANGUAGE_CODE],
	'suppress_filters' => true );
	 
$storie =  get_posts($args);
if (!(empty( $storie))) { ?> 
<div class="row">
    <div class="container">

<?php 
$s = 0;

$storia_class = array();
$storia_class[1] = 'big with-img';
$storia_class[2] = 'small black';
$storia_class[3] = 'medium with-img';
$storia_class[4] = 'small yellow';
$storia_class[5] = 'medium with-img';
$storia_class[6] = 'small black';
$storia_class[7] = 'big with-img';



foreach(  $storie as $storia )  {
$s++	

?>
<?php if (in_array($s, array(1,3,6))) {  ?>
 <div class="col-lg-4 col-md-8 nopadding">
 <?php } // END if ?>    
     
<div class="<?php echo $storia_class[$s] ?>">
    <article>
    <a href="<?php echo get_permalink($storia->ID) ?>" title="<?php echo readmore(ICL_LANGUAGE_CODE) ?>">
    <?php if (in_array($s, array(1,3,5,7))) { 
	$img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $storia->post_title,
);
	echo get_the_post_thumbnail($storia->ID, 'thumbnail',$img_attr);
	
	}?>
	<div class="text">
    <h3 class="headline"><?php echo $storia->post_title ?></h3>
    <?php if (in_array($s, array(1,7))) {  ?>
    <p><?php echo $storia->post_excerpt ?></p>
     <?php } // END if ?> 
    </div>
    </a>
    </article>
</div>
<?php if (in_array($s, array(2,5,7))) {  ?>
</div>
 <?php } // END if ?>    

<?php } // END foreach ?>
    </div><!-- END row -->
  </div><!-- END container -->
<?php } // END if ?>


  
</section>



<?php get_footer(ICL_LANGUAGE_CODE); ?>