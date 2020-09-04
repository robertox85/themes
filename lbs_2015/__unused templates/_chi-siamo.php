<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Template Name: Chi Siamo
 * @file chi-siamo.php
 */
    $shd = get_field('sub_home_description');
	$shp = get_field('sub_home_paragraf');
	$shv = get_field('sub_home_visore');
	
	$ct_1 = get_field('cards_titolo_1');
	$ct_2 = get_field('cards_titolo_2');
	$ct_3 = get_field('cards_titolo_3');
	$ct_4 = get_field('cards_titolo_4');
	
	
	$lct_1 = get_field('link_cards_titolo_1');
	$lct_2 = get_field('link_cards_titolo_2');
	$lct_3 = get_field('link_cards_titolo_3');
	$lct_4 = get_field('link_cards_titolo_4');
	
	
	$cd_1 = get_field('cards_descrizione_1');
	$cd_2 = get_field('cards_descrizione_2');
	$cd_3 = get_field('cards_descrizione_3');
	$cd_4 = get_field('cards_descrizione_4');
	
	$ev_1 = get_field('etichetta_valore_1');
	$ev_2 = get_field('etichetta_valore_2');
	$ev_3 = get_field('etichetta_valore_3');
	

	
	$valori = get_field('valori');
	$tutti_valori = get_field('tutti_valori');
	$link_tutti_valori = get_field('link_tutti_valori');
	
	
	$ts = get_field('titolo_storie');
	$tutte_le_storie = get_field('tutte_le_storie');
	
	
	$link_tutte_le_storie = get_field('link_tutte_le_storie');
	$cr = get_field('certificazioni_riconoscimenti');
	
	
	$cr_1_testo = get_field('cr_1_testo');
	
	
	$cr_2_testo = get_field('cr_2_testo');
	
	$cr_3_testo = get_field('cr_3_testo');
	
	
	$cr_4_testo = get_field('cr_4_testo');
	
	
	$cr_5_testo = get_field('cr_5_testo');
	
	
	$cr_6_testo = get_field('cr_6_testo');
	
	$faq = get_field('faq_frequently_asked_questions');
	$accreditations = get_field('accreditations');
	
	$domanda_1 = get_field('domanda_1');
	$risposta_1 = get_field('risposta_1');
	
	$domanda_2 = get_field('domanda_2');
	$risposta_2 = get_field('risposta_2');
	
	$domanda_3 = get_field('domanda_3');
	$risposta_3 = get_field('risposta_3');
	
	$domanda_4 = get_field('domanda_4');
	$risposta_4 = get_field('risposta_4');
	
	$domanda_5 = get_field('domanda_5');
	$risposta_5 = get_field('risposta_5');
	
	$titolo_form = get_field('titolo_form');
	$campo_form = get_field('campo_form');
	
	
	
 
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
          <div class="sub-home-item-info vid"><iframe width="919" height="474" src="//www.youtube.com/embed/hQttmNWrGbY?wmode=transparent&rel=0&showinfo=0&controls=0" frameborder="0" allowfullscreen wmode="Opaque"></iframe> <?php //echo html_entity_decode($shv); ?> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="cards courses-cards">
  <div class="container">
    <div class="row">
      <div class="col-md-3 columns panel"> <a href="<?php echo html_entity_decode($lct_1); ?>">
        <h2><?php echo html_entity_decode($ct_4); ?></h2>
        <hr class="yellow" />
        <p> <?php echo html_entity_decode($cd_4); ?></p>
        </a> </div>
      <div class="col-md-3 columns panel"> <a href="<?php echo html_entity_decode($lct_2); ?>">
        <h2><?php echo html_entity_decode($ct_1); ?></h2>
        <hr class="yellow" />
        <p><?php echo html_entity_decode($cd_1); ?></p>
        </a> </div>
      <div class="col-md-3 columns panel"> <a href="<?php echo html_entity_decode($lct_3); ?>">
        <h2><?php echo html_entity_decode($ct_2); ?></h2>
        <hr class="yellow" />
        <p> <?php echo html_entity_decode($cd_2); ?></p>
        </a> </div>
      <div class="col-md-3 columns panel"> <a href="<?php echo html_entity_decode($lct_4); ?>">
        <h2><?php echo html_entity_decode($ct_3); ?></h2>
        <hr class="yellow" />
        <p> <?php echo html_entity_decode($cd_3); ?></p>
        </a> </div>
    </div>
  </div>
</section>
<section class="stories stories-cards cards">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10 space">
          <h2><?php echo html_entity_decode($valori); ?></h2>
        </div>
        <div class="col-lg-2 space"> <?php echo html_entity_decode($tutti_valori); ?> </div>
      </header>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2 class="tagline"> <?php echo html_entity_decode($ev_1); ?> </h2>
        <a href="<?php echo html_entity_decode($link_tutti_valori); ?>"> <img src="/wp-content/uploads/2015/03/boutique-service.jpg" alt="" class="img-responsive"/></a> </div>
      <div class="col-md-4">
        <h2 class="tagline"> <?php echo html_entity_decode($ev_2); ?> </h2>
        <a href="<?php echo html_entity_decode($link_tutti_valori); ?>"> <img src="/wp-content/uploads/2015/03/change-makers.jpg" alt="" class="img-responsive"/></a> </div>
      <div class="col-md-4">
        <h2 class="tagline"> <?php echo html_entity_decode($ev_3); ?> </h2>
        <a href="<?php echo html_entity_decode($link_tutti_valori); ?>"> <img src="/wp-content/uploads/2015/04/responsabilita.jpg" alt="" class="img-responsive"/></a> </div>
    </div>
  </div>
</section>
<section class="stories stories-cards cards">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10 space">
          <h2><?php echo html_entity_decode($ts); ?></h2>
        </div>
        <div class="col-lg-2 space"> <a href="<?php echo html_entity_decode($link_tutte_le_storie); ?>" class="button more"> <?php echo html_entity_decode($tutte_le_storie); ?></a> </div>
      </header>
    </div>
    <!-- END wide-row --> 
  </div>
  <!-- END container -->
  
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
          <article> <a href="<?php echo get_permalink($storia->ID) ?>" title="<?php echo readmore(ICL_LANGUAGE_CODE) ?>">
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
            </a> </article>
        </div>
        <?php if (in_array($s, array(2,5,7))) {  ?>
      </div>
      <?php } // END if ?>
      <?php } // END foreach ?>
    </div>
    <!-- END row --> 
  </div>
  <!-- END container -->
  <?php } // END if ?>
</section>
<div class="section section-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="section-grey title"><a href="<?php echo html_entity_decode($accreditations); ?>" class="link-h2"> <?php echo html_entity_decode($cr); ?></a></h2>
      </div>
      <div class="col-md-3">
        <h3><img src="/wp-content/uploads/2015/10/equis.gif" alt="EFMD Quality Improvement System è la prestigiosa certificazione internazionale che attesta l’eccellenza degli standard qualitativi delle business school"  style="text-align:center" /></h3>
        <p class="item-desc"><?php echo html_entity_decode($cr_5_testo); ?></p>
      </div>
      <div class="col-md-3">
        <h3><img src="/wp-content/uploads/2015/05/ins_ISO_9001_COL.gif" alt="Siamo certificati UNI EN ISO 9001 – Settore EA:35 ed EA:37 (attività di consulenza e di formazione)."  style="text-align:center" /></h3>
        <p class="item-desc"><?php echo html_entity_decode($cr_1_testo); ?></p>
      </div>
      <div class="col-md-2">
        <h3><img src="/wp-content/uploads/2015/10/asfor-ordinario-rev.gif" alt="LUISS Business School è socio ASFOR (Associazione per la Formazione alla Direzione Aziendale)." style="text-align:center" /></h3>
        <p class="item-desc"><?php echo html_entity_decode($cr_2_testo); ?></p>
      </div>
      <div class="col-md-2">
        <h3><img src="/wp-content/uploads/2015/10/rep-luiss-rev.gif" alt="LUISS Business School è REP – Registrated Education Provider del PMI, il Project Management Institute." style="text-align:center" /></h3>
        <p class="item-desc"><?php echo html_entity_decode($cr_3_testo); ?></p>
      </div>
      <div class="col-md-2">
        <h3><img src="/wp-content/uploads/2015/10/regione-lazio-rev.gif" alt="UISS Business School è struttura accreditata presso la Regione Lazio per le attività di formazione." style="text-align:center"/></h3>
        <p class="item-desc"><?php echo html_entity_decode($cr_4_testo); ?></p>
      </div>
    </div>
  </div>
</div>
<section> 
  <script src="<?php echo get_bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="featurette-divider"></div>
        <h2><a href="<?php echo html_entity_decode($faq); ?>" class="link-h2">Q&A LUISS BS</a></h2>
        <hr class="yellowhr" />
        <div class='panel-group accordion accordion-bordered' id='accordion'>
          <div class='panel-default'>
            <div class='panel-heading'>
              <h3 class='panel-title'><a class='accordion-toggle collapsed' data-toggle='collapse' href='#accordion-item-1'><?php echo html_entity_decode($domanda_1); ?> </a> </h3>
            </div>
            <div class='panel-collapse collapse' id='accordion-item-1'>
              <div class='panel-body'> <?php echo html_entity_decode($risposta_1); ?> </div>
            </div>
          </div>
          <div class='panel-default'>
            <div class='panel-heading'>
              <h3 class='panel-title'><a class='accordion-toggle collapsed' data-toggle='collapse' href='#accordion-item-2'><?php echo html_entity_decode($domanda_2); ?> </a> </h3>
            </div>
            <div class='panel-collapse collapse' id='accordion-item-2'>
              <div class='panel-body'> <?php echo html_entity_decode($risposta_2); ?> </div>
            </div>
          </div>
          <div class='panel-default'>
            <div class='panel-heading'>
              <h3 class='panel-title'><a class='accordion-toggle collapsed' data-toggle='collapse' href='#accordion-item-3'><?php echo html_entity_decode($domanda_3); ?> </a> </h3>
            </div>
            <div class='panel-collapse collapse' id='accordion-item-3'>
              <div class='panel-body'> <?php echo html_entity_decode($risposta_3); ?> </div>
            </div>
          </div>
          <div class='panel-default'>
            <div class='panel-heading'>
              <h3 class='panel-title'><a class='accordion-toggle collapsed' data-toggle='collapse' href='#accordion-item-4'><?php echo html_entity_decode($domanda_4); ?> </a> </h3>
            </div>
            <div class='panel-collapse collapse' id='accordion-item-4'>
              <div class='panel-body'> <?php echo html_entity_decode($risposta_4); ?> </div>
            </div>
          </div>
          <div class='panel-default'>
            <div class='panel-heading'>
              <h3 class='panel-title'><a class='accordion-toggle collapsed' data-toggle='collapse' href='#accordion-item-5'><?php echo html_entity_decode($domanda_5); ?> </a> </h3>
            </div>
            <div class='panel-collapse collapse' id='accordion-item-5'>
              <div class='panel-body'> <?php echo html_entity_decode($risposta_5); ?> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 faq">
        <h2 class="title"><?php echo html_entity_decode($titolo_form); ?></h2>
        <?php echo html_entity_decode($campo_form); ?> </div>
    </div>
  </div>
</section>
<?php get_footer(ICL_LANGUAGE_CODE); ?>
