<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Template Name: Offerta
 * @file offerta.php
 */
    $shd = get_field('sub_home_description');
	$shp = get_field('sub_home_paragraf');
	$shv = get_field('sub_home_visore');
	
	$ct_1 = get_field('cards_titolo_1');
	$ct_2 = get_field('cards_titolo_2');
	$ct_3 = get_field('cards_titolo_3');
	$ct_4 = get_field('cards_titolo_4');
	$ct_5 = get_field('cards_titolo_5');
	$ct_6 = get_field('cards_titolo_6');
	
	$link_1 = get_field('link_1');
	$link_2 = get_field('link_2');
	$link_3 = get_field('link_3');
	$link_4 = get_field('link_4');
	$link_5 = get_field('link_5');
	$link_6 = get_field('link_6');
	
	$cd_1 = get_field('cards_descrizione_1');
	$cd_2 = get_field('cards_descrizione_2');
	$cd_3 = get_field('cards_descrizione_3');
	$cd_4 = get_field('cards_descrizione_4');
	$cd_5 = get_field('cards_descrizione_5');
	$cd_6 = get_field('cards_descrizione_6');
	
	$finder_description = get_field('finder_description');
	$finder_button = get_field('finder_button');
	
	
	
 
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
<section class="cards courses-cards">
  <div class="container">
    <div class="row">
      <div class="col-md-6 columns panel"> <a href="<?php echo html_entity_decode($link_1); ?>">
        <div class="text">
          <h2><?php echo html_entity_decode($ct_1); ?></h2>
          <hr class="yellow" />
          <p><?php echo html_entity_decode($cd_1); ?></p>
        </div>
        </a> </div>
      <div class="col-md-6 columns panel"> <a href="<?php echo html_entity_decode($link_2); ?>">
        <div class="text">
          <h2><?php echo html_entity_decode($ct_2); ?></h2>
          <hr class="yellow" />
          <p><?php echo html_entity_decode($cd_2); ?></p>
        </div>
        </a> </div>
      <div class="col-md-6 columns panel"> <a href="<?php echo html_entity_decode($link_3); ?>">
        <div class="text">
          <h2><?php echo html_entity_decode($ct_3); ?></h2>
          <hr class="yellow" />
          <p><?php echo html_entity_decode($cd_3); ?></p>
        </div>
        </a> </div>
      <div class="col-md-6 columns panel"> <a href="<?php echo html_entity_decode($link_4); ?>">
        <div class="text">
          <h2><?php echo html_entity_decode($ct_4); ?></h2>
          <hr class="yellow" />
          <p><?php echo html_entity_decode($cd_4); ?></p>
        </div>
        </a> </div>
      <div class="col-md-6 columns panel"> <a href="<?php echo html_entity_decode($link_5); ?>">
        <div class="text">
          <h2><?php echo html_entity_decode($ct_5); ?></h2>
          <hr class="yellow" />
          <p><?php echo html_entity_decode($cd_5); ?></p>
        </div>
        </a> </div>
      <div class="col-md-6 columns panel"> <a href="<?php echo html_entity_decode($link_6); ?>">
        <div class="text">
          <h2><?php echo html_entity_decode($ct_6); ?></h2>
          <hr class="yellow" />
          <p><?php echo html_entity_decode($cd_6); ?></p>
        </div>
        </a> </div>
      <div class="col-md-6 columns panel"> <a href="/graduate-exchange-programme/">
        <div class="text">
          <h2>GRADUATE EXCHANGE PROGRAMME GOING GLOBAL</h2>
          <hr class="yellow" />
          <p>Learn to travel. Travel to Learn.</p>
        </div>
        </a> </div>
        
   <?php   $link_c = array();
		$link_c['it'] = '/offerta-formativa/custom-programmes/';
		$link_c['en'] = '/en/programs/custom-programmes/';
?>     
        <div class="col-md-6 columns panel"> <a href="<?php echo $link_c[ICL_LANGUAGE_CODE]; ?>">
        <div class="text">
          <h2>CUSTOM PROGRAMME</h2>
          <hr class="yellow" />
          <p><!--Learn to travel. Travel to Learn.--></p>
        </div>
        </a> </div>
        
    </div>
  </div>
</section>
<section class="offerta">
<div class="container">
<div class="row">
  <div class="col-md-6 col-md-offset-3" id="course-finder-wrappe" style="margin-top:20px;">
    <?php get_template_part('course-finder-widget-new'); ?>
  </div>
</div>
</section>
<?php get_footer(ICL_LANGUAGE_CODE); ?>
