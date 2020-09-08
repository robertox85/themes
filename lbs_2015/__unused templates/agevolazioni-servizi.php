<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Template Name: Agevolazioni e Sevizi
 * @file agevolazioni.php
*/
    $shd_ser = get_field('sub_home_description_ser');
	$shp_ser = get_field('sub_home_paragraf_ser');
	$shv_ser = get_field('sub_home_visore_ser');
	
	$colonna_lancio_ser = get_field('colonna_lancio_ser');
	$colonna_lancio_2_ser = get_field('colonna_lancio_2_ser');
	
	$cassetto_lancio_ser = get_field('cassetto_lancio_ser');
	
	$titolo_cassetto_ser = get_field('titolo_cassetto_ser');
	$descrizione_cassetto_ser = get_field('descrizione_cassetto_ser');
	
	$titolo_cassetto_2_ser = get_field('titolo_cassetto_2_ser');
	$descrizione_cassetto_2_ser = get_field('descrizione_cassetto_2_ser');
	
	$titolo_cassetto_3_ser = get_field('titolo_cassetto_3_ser');
	$descrizione_cassetto_3_ser = get_field('descrizione_cassetto_3_ser');
	
	$titolo_cassetto_4_ser = get_field('titolo_cassetto_4_ser');
	$descrizione_cassetto_4_ser = get_field('descrizione_cassetto_4_ser');
	
	
	$overview_ser = get_field('overview_ser');
	
	$data_text_ser = get_field('data_text_ser');
	$data_number_ser	 = get_field('data_number_ser');
	
	$data_text_2_ser = get_field('data_text_2_ser');
	$data_number_2_ser	 = get_field('data_number_2_ser');
	
	$data_text_3_ser = get_field('data_text_3_ser');
	$data_number_3_ser	 = get_field('data_number_3_ser');
	
	
	$data_text_4_ser = get_field('data_text_4_ser');
	$data_number_4_ser	 = get_field('data_number_4_ser');
	
	$data_text_5_ser = get_field('data_text_5_ser');
	$data_number_5_ser	 = get_field('data_number_5_ser');
	
	$data_text_6_ser = get_field('data_text_6_ser');
	$data_number_6_ser	 = get_field('data_number_6_ser');
	
	
	$link_1	 = get_field('link_1');
	$link_2	 = get_field('link_2');
	$link_3	 = get_field('link_3');
	$link_4	 = get_field('link_4');
	
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
            <p class="h1-sub"><?php echo html_entity_decode($shd_ser); ?></p>
            <p><?php echo html_entity_decode($shp_ser); ?></p>
          </div>
        </div>
        <div class="col-md-8 nopadding">
          <div class="sub-home-item-info"> <img  src="<?php echo $shv_ser['url']; ?>" alt="<?php echo $shv_ser['alt']; ?>"  class="img-responsive"/> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="section section-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-5  col-md-push-1">
        <h3><?php echo html_entity_decode($colonna_lancio_ser); ?></h3>
      </div>
      <div  class="col-md-5  col-md-push-1">
        <h3><?php echo html_entity_decode($colonna_lancio_2_ser); ?> </h3>
      </div>
    </div>
  </div>
</div>
<section class="drawers">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-12 space">
          <h2><?php echo html_entity_decode($cassetto_lancio_ser); ?></h2>
        </div>
      </header>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class=" col-lg-3 columns panel">
        <article class="no-img">
          <div class="text">
          <a href="<?php echo html_entity_decode($link_1); ?>"> 
            <h2 class="headline"><?php echo html_entity_decode($titolo_cassetto_ser); ?></h2>
            <div class="description" itemprop="description">
              <p><?php echo html_entity_decode($descrizione_cassetto_ser); ?></p>
            </div>
           </a> 
          </div>
        </article>
      </div>
      <div class=" col-lg-3 columns panel">
        <article class="no-img">
          <div class="text">
           <a href="<?php echo html_entity_decode($link_2); ?>"> 
            <h2 class="headline"><?php echo html_entity_decode($titolo_cassetto_2_ser); ?></h2>
            <div class="description" itemprop="description">
              <p><?php echo html_entity_decode($descrizione_cassetto_2_ser); ?></p>
            </div>
           </a> 
          </div>
        </article>
      </div>
      <div class=" col-lg-3 columns panel">
        <article class="no-img">
          <div class="text">
           <a href="<?php echo html_entity_decode($link_3); ?>"> 
            <h2 class="headline"><?php echo html_entity_decode($titolo_cassetto_3_ser); ?></h2>
            <div class="description" itemprop="description">
              <p><?php echo html_entity_decode($descrizione_cassetto_3_ser); ?></p>
            </div>
            </a>
          </div>
        </article>
      </div>
      <div class=" col-lg-3 columns panel">
        <article class="no-img">
          <div class="text">
           <a href="<?php echo html_entity_decode($link_4); ?>"> 
            <h2 class="headline"><?php echo html_entity_decode($titolo_cassetto_4_ser); ?></h2>
            <div class="description" itemprop="description">
              <p><?php echo html_entity_decode($descrizione_cassetto_4_ser); ?></p>
            </div>
            </a>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
<!--<section class="data-compare numbers">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10 space">
          <h2><?php // echo html_entity_decode($overview_ser); ?></h2>
        </div>
      </header>
    </div>
  </div>
</section> -->
<!--<section class="data-compare numbers container">
  <div class="row">
    <div class="col-lg-4 panel">
      <div class="row data-text">
        <h5><?php // echo html_entity_decode($data_text_ser); ?></h5>
        <div class="col-lg-12 col-md-12">
          <div class="data-luiss"> <span class="data-number"><?php  //echo html_entity_decode($data_number_ser); ?></span> <span class="data-label">LUISS BS</span> </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 panel">
      <div class="row data-text">
        <h5><?php // echo html_entity_decode($data_text_2_ser); ?> </h5>
        <div class="col-lg-12 col-md-12">
          <div class="data-luiss"> <span class="data-number"><?php // echo html_entity_decode($data_number_2_ser); ?></span> <span class="data-label">LUISS BS</span> </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 panel">
      <div class="row data-text">
        <h5><?php // echo html_entity_decode($data_text_3_ser); ?></h5>
        <div class="col-lg-12 col-md-12">
          <div class="data-luiss"> <span class="data-number"><?php // echo html_entity_decode($data_number_3_ser); ?></span> <span class="data-label">LUISS BS</span> </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 panel">
      <div class="row data-text">
        <h5><?php // echo html_entity_decode($data_text_4_ser); ?></h5>
        <div class="col-lg-12 col-md-12">
          <div class="data-luiss"> <span class="data-number"><?php // echo html_entity_decode($data_number_4_ser); ?></span> <span class="data-label">LUISS BS</span> </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 panel">
      <div class="row data-text">
        <h5><?php // echo html_entity_decode($data_text_5_ser); ?></h5>
        <div class="col-lg-12 col-md-12">
          <div class="data-luiss"> <span class="data-number"><?php //echo html_entity_decode($data_number_5_ser); ?></span> <span class="data-label">LUISS BS</span> </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 panel">
      <div class="row data-text">
        <h5><?php //echo html_entity_decode($data_text_6_ser); ?></h5>
        <div class="col-lg-12 col-md-12">
          <div class="data-luiss"> <span class="data-number"><?php //echo html_entity_decode($data_number_6_ser); ?></span> <span class="data-label">LUISS BS</span> </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<?php get_footer(ICL_LANGUAGE_CODE); ?>
