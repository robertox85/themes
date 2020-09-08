<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Template Name: Progetti Speciali
 * @file progetti-speciali.php
 */
    $shd = get_field('sub_home_description');
	$shp = get_field('sub_home_paragraf');
	$shv = get_field('sub_home_visore');
	
	$no_1 = get_field('navigazione_offerta_1');
	$no_2 = get_field('navigazione_offerta_2');
	$no_3 = get_field('navigazione_offerta_3');
	$no_4 = get_field('navigazione_offerta_4');
	$no_5 = get_field('navigazione_offerta_5');
	$no_6 = get_field('navigazione_offerta_6');
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
          <div class="sub-home-item-info"> <img  src="<?php echo ($shv); ?>" alt="Rafforza il tuo background specialistico"  class="img-responsive"/> </div>
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
        <li class="col-md-2"> <?php echo html_entity_decode($no_4); ?> </li>
        <li class="col-md-2"> <?php echo html_entity_decode($no_5); ?> </li>
        <li class="col-md-2"> <?php echo html_entity_decode($no_6); ?></li>
      </ul>
    </div>
  </div>
</div>
<?php   $secondo_livello = array();
		$secondo_livello['it'] = 'MASTER DI SECONDO LIVELLO';
		$secondo_livello['en'] = 'SECOND-LEVEL Master Degree';
?>
<?php   $perfezionamento = array();
		$perfezionamento['it'] = 'CORSI DI PERFEZIONAMENTO';
		$perfezionamento['en'] = 'Postgraduate programs';
?>
<?php   $avanzata = array();
		$avanzata['it'] = 'CORSo di formazione avanzata';
		$avanzata['en'] = 'Advance Training Courses';
?>
<?php   $post = array();
		$post['it'] = 'Progetti Speciali';
		$post['en'] = 'SPECIAL PROJECTS';
?>
<?php   $executive = array();
		$executive['it'] = 'Formazione Manageriale';
		$executive['en'] = 'Managerial  Education';
?>
<?php   $lingua_corso = array();
		$lingua_corso['it'] = 'IN ENGLISH';
		$lingua_corso['en'] = 'IN ENGLISH';
?>
<?php   $titolo_corso = array();
		$titolo_corso['it'] = 'Event Management';
		$titolo_corso['en'] = 'Event Management';
?>
<?php   $link_corso_corso = array();
		$link_corso_corso ['it'] = '/offerta-formativa/formazione-specialistica/event-management/';
		$link_corso_corso ['en'] = '/en/programs/specialised-programme/event-management/';
?>
<?php   $titolo_corso_2 = array();
		$titolo_corso_2['it'] = 'Management e controllo dei fondi comunitari';
		$titolo_corso_2['en'] = ' Management e controllo dei fondi comunitari en';
?>
<?php   $link_corso_corso_2 = array();
		$link_corso_corso_2 ['it'] = 'http://businessschool.luiss.it/offerta-formativa/master/event-management/';
		$link_corso_corso_2 ['en'] = 'http://businessschool.luiss.it/en/programs/master/event-management/';
?>



<section class="stories stories-cards cards">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10">
          <h2><?php echo $post[ICL_LANGUAGE_CODE]; ?> </h2>
        </div>
      </header>
    </div>
  </div>
</section>
<section class="cards courses-cards">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 columns panel"> <a href="http://businessschool.luiss.it/grow/">
        <div class="text">
          <h2 class="titolo-corso">GROW GENERATING REAL OPPORTUNITIES FOR WOMEN </h2>
          <hr class="yellow" />
          <p class="course-type"></p>
        </div>
        </a> </div>
      <div class="col-lg-3 columns panel"> <a href="http://businessschool.luiss.it/mba-international-week/">
        <div class="text">
          <h2 class="titolo-corso"> MBA INTERNATIONAL WEEK </h2>
          <hr class="yellow" />
          <span class="course-type"></span> </div>
        </a> </div>
    </div>   
  </div>
</section>
<div class="featurette-divider" style="min-height: 30px;"></div>
<?php get_footer(ICL_LANGUAGE_CODE); ?>
