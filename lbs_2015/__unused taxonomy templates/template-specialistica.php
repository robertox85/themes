<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Template Name: Formazione Specialistica
 * @file formazione-specialistica.php
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
          <div class="sub-home-item-info"> <img  src="/wp-content/uploads/2015/05/Rafforza-il-tuo-background-specialistico.jpg" alt="Rafforza il tuo background specialistico"  class="img-responsive"/> </div>
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
        <li class="col-md-2 active"> <?php echo html_entity_decode($no_6); ?></li>
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
		$post['it'] = 'Post Lauream';
		$post['en'] = 'Postgraduate Programmes';
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
		$link_corso_corso_2 ['it'] = '/offerta-formativa/master/event-management/';
		$link_corso_corso_2 ['en'] = '/en/programs/master/event-management/';
?>
<?php   $titolo_perf_1 = array();
		$titolo_perf_1['it'] = 'Gestione della Farmacia Ospedaliera';
		$titolo_perf_1['en'] = 'Hospital Pharmacy Management';
?>
<?php   $link_perf_0 = array();
		$link_perf_0['it'] = '/offerta-formativa/executive-program/epeim/';
		$link_perf_0['en'] = '/en/programs/executive-program/epeim/';
?>
<?php   $link_perf_1 = array();
		$link_perf_1['it'] = '/offerta-formativa/executive-program/gestione-farmacia-ospedaliera/';
		$link_perf_1['en'] = '/en/programs/executive-program/hospital-pharmacy-management/';
?>
<?php   $link_perf_2 = array();
		$link_perf_2['it'] = '/offerta-formativa/executive-program/risk-management-sanita/';
		$link_perf_2['en'] = '/en/programs/executive-program/risk-management-sanita/';
?>
<?php   $titolo_perf_2 = array();
		$titolo_perf_2['it'] = 'Executive Program in Risk Management in Sanità';
		$titolo_perf_2['en'] = 'Executive Program in Healthcare Risk Management';
?>
<?php   $link_perf_3 = array();
		$link_perf_3['it'] = 'offerta-formativa/executive-program/social-economics-and-innovation/';
		$link_perf_3['en'] = '/en/programs/executive-program/social-economics-and-innovation/';
?>
<?php   $titolo_perf_4 = array();
		$titolo_perf_4['it'] = 'Gestione degli Acquisti nel Settore Pubblico (GASP)';
		$titolo_perf_4['en'] = 'Procurement Management in the Public Sector';
?>
<?php   $link_perf_4 = array();
		$link_perf_4['it'] = '/offerta-formativa/formazione-specialistica/gestione-degli-acquisti-nel-settore-pubblico/';
		$link_perf_4['en'] = '/en/programs/specialised-programme/procurement-management-in-the-public-sector/';
?>
<?php   $titolo_perf_5 = array();
		$titolo_perf_5['it'] = 'Organizzazione e Management del welfare integrativo: Fondi Pensione e Fondi Sanitari ';
		$titolo_perf_5['en'] = 'Organization and management of integrative welfare: Pension Funds and Health Funds';
?>
<?php   $link_perf_5 = array();
		$link_perf_5['it'] = '/offerta-formativa/formazione-specialistica/mawi/';
		$link_perf_5['en'] = '/en/programs/specialised-programme/mawi/';
?>
<?php   $titolo_perf_6 = array();
		$titolo_perf_6['it'] = 'Economia e Gestione delle Organizzazioni Sanitarie';
		$titolo_perf_6['en'] = 'Economics and Management of Healthcare Organizations';
?>
<?php   $link_perf_6 = array();
		$link_perf_6['it'] = '/offerta-formativa/formazione-specialistica/egos/';
		$link_perf_6['en'] = '/en/programs/specialised-programme/egos/';
?>
<?php   $titolo_perf_8 = array();
		$titolo_perf_8['it'] = 'Master in Diritto Tributario, Contabilità e Pianificazione Fiscale';
		$titolo_perf_8['en'] = 'Master in Tax Law, Accounting and Tax Planning';
?>
<?php   $link_perf_8 = array();
		$link_perf_8['it'] = '/offerta-formativa/formazione-specialistica/master-diritto-tributario/';
		$link_perf_8['en'] = '/en/programs/specialised-programme/tax-law-accounting-planning/';
?>
<?php   $link_perf_9 = array();
		$link_perf_9['it'] = '/offerta-formativa/formazione-specialistica/5star/';
		$link_perf_9['en'] = '/en/programs/specialised-programme/5star/';
?>
<?php   $titolo_perf_10 = array();
		$titolo_perf_10['it'] = 'Master in Consulente Legale d’Impresa - Prospettive Nazionali e Internazionali';
		$titolo_perf_10['en'] = 'Master in Corporate Legal Affairs';
?>
<?php   $link_perf_10 = array();
		$link_perf_10['it'] = '/offerta-formativa/formazione-specialistica/consulente-legale-dimpresa/';
		$link_perf_10['en'] = '/en/programs/specialised-programme/corporate-legal-affairs/';
?>
<?php   $titolo_perf_11 = array();
		$titolo_perf_11['it'] = 'Management e Controllo dei Fondi Comunitari Euro-progettazione 2014/2020 ';
		$titolo_perf_11['en'] = 'EU Funds Management & Control 2014-2020';
?>
<?php   $link_perf_11 = array();
		$link_perf_11['it'] = '/offerta-formativa/formazione-specialistica/corso-in-eu-funding-euro-2014-2020/';
		$link_perf_11['en'] = '/en/programs/specialised-programme/course-in-eu-funding-euro-2014-2020/';
?>
<?php   $link_perf_12 = array();
		$link_perf_12['it'] = '/offerta-formativa/formazione-specialistica/management-made-in-italy/';
		$link_perf_12['en'] = '/en/programs/specialised-programme/management-made-in-italy/';
?>
<?php   $titolo_perf_13 = array();
		$titolo_perf_13['it'] = 'Executive Master in Finanza e Mercati';
		$titolo_perf_13['en'] = 'Executive Master in Financial Markets';
?>
<?php   $link_perf_13 = array();
		$link_perf_13['it'] = '/offerta-formativa/executive-program/executive-master-in-financial-markets/';
		$link_perf_13['en'] = '/en/programs/executive-program/executive-master-in-financial-markets/';
?>
<?php   $link_master_12 = array();
		$link_master_12['it'] = '/offerta-formativa/master/employability/';
		$link_master_12['en'] = '/en/programs/master/employability/';
?>
<?php   $primo_livello = array();
		$primo_livello['it'] = 'MASTER DI PRIMO LIVELLO';
		$primo_livello['en'] = 'FIRST-LEVEL Master Degree';
?>
<?php   $titolo_master_11 = array();
		$titolo_master_11['it'] = 'Executive Program in Management dell’Assistenza territoriale';
		$titolo_master_11['en'] = 'Executive Program on the Management of Primary Care Organizations';
?>
<?php   $link_master_23 = array();
		$link_master_23['it'] = '/offerta-formativa/formazione-specialistica/masp/';
		$link_master_23['en'] = '/en/programs/specialised-programme/masp/';
?>
<?php   $link_master_24 = array();
		$link_master_24['it'] = '/offerta-formativa/formazione-specialistica/summer-school-in-art-cultural-heritage-in-italy/';
		$link_master_24['en'] = '/en/programs/specialised-programme/summer-school-in-art-cultural-heritage-in-italy/';
?>
<?php   $link_master_25 = array();
		$link_master_25['it'] = '/offerta-formativa/formazione-specialistica/luiss-game-design-management/';
		$link_master_25['en'] = '/en/';
?>
<?php   $link_master_27 = array();
		$link_master_27['it'] = '/offerta-formativa/formazione-specialistica/healthcare-pharmaceutical-administration/';
		$link_master_27['en'] = '/en/programs/specialised-programme/healthcare-pharmaceutical-administration/';
?>
<?php   $link_master_28 = array();
		$link_master_28['it'] = '/offerta-formativa/formazione-specialistica/management-aziende-sanitarie/';
		$link_master_28['en'] = '/en/programs/specialised-programme/management-aziende-sanitarie/';
?>
<?php   $titolo_master_28 = array();
		$titolo_master_28['en'] = 'Executive Master in Management of Health Services (MAS)';
		$titolo_master_28['it'] = 'Executive Master in Management delle Aziende Sanitarie';
?>
<?php   $link_master_30 = array();
		$link_master_30['it'] = '/offerta-formativa/formazione-specialistica/advertising-3-0-creative-communication/';
		$link_master_30['en'] = '/en/';
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
      <div class="col-lg-3 columns panel"> <a href="<?php echo $link_master_12[ICL_LANGUAGE_CODE]; ?>">
        <div class="text">
          <h2 class="titolo-corso">Master in Leadership and Personal Development Programme </h2>
          <hr class="yellow" />
          <p class="course-type"><?php echo $primo_livello[ICL_LANGUAGE_CODE]; ?></p>
        </div>
        </a> </div>
      <div class="col-lg-3 columns panel"> <a href="<?php echo $link_perf_8[ICL_LANGUAGE_CODE]; ?>">
        <div class="text">
          <h2 class="titolo-corso"> <?php echo $titolo_perf_8[ICL_LANGUAGE_CODE]; ?> </h2>
          <hr class="yellow" />
          <span class="course-type"><?php echo $secondo_livello[ICL_LANGUAGE_CODE]; ?></span> </div>
        </a> </div>
        
        
      <div class="col-lg-3 columns panel"> <a href="<?php echo $link_perf_10[ICL_LANGUAGE_CODE]; ?>">
        <div class="text">
          <h2 class="titolo-corso"><?php echo $titolo_perf_10[ICL_LANGUAGE_CODE]; ?> </h2>
          <hr class="yellow" />
          <span class="course-type"><?php echo $avanzata[ICL_LANGUAGE_CODE]; ?></span> </div>
        </a> </div>
        
        
        
        
      <div class="col-lg-3 columns panel"> <a href="<?php echo $link_corso_corso[ICL_LANGUAGE_CODE]; ?>">
        <div class="text">
          <h2 class="titolo-corso"><?php echo $titolo_corso[ICL_LANGUAGE_CODE]; ?></h2>
          <hr class="yellow" />
          <span class="course-type"><?php echo $avanzata[ICL_LANGUAGE_CODE]; ?></span> </div>
        </a> </div>
    </div>
    <div class="row">
      <div class="col-lg-3 columns panel"> <a href="<?php echo $link_perf_11[ICL_LANGUAGE_CODE]; ?>">
        <div class="text">
          <h2 class="titolo-corso"><?php echo $titolo_perf_11[ICL_LANGUAGE_CODE]; ?></h2>
          <hr class="yellow" />
          <span class="course-type"><?php echo $avanzata[ICL_LANGUAGE_CODE]; ?></span> </div>
        </a> </div>
      <div class="col-lg-3 columns panel"> <a href="<?php echo $link_perf_9[ICL_LANGUAGE_CODE]; ?>">
        <div class="text">
          <h2 class="titolo-corso"> Five Stars Hotel Management</h2>
          <hr class="yellow" />
          <span class="course-type"><?php echo $avanzata[ICL_LANGUAGE_CODE]; ?></span> </div>
        </a> </div>
      <!--<div class="col-lg-3 columns panel"> <a href="<?php // echo $link_perf_6[ICL_LANGUAGE_CODE]; ?>">
        <div class="text">
          <h2 class="titolo-corso"><?php //echo $titolo_perf_6[ICL_LANGUAGE_CODE]; ?></h2>
          <hr class="yellow" />
          <span class="course-type"><?php //echo  $perfezionamento[ICL_LANGUAGE_CODE]; ?></span> </div>
        </a> </div> -->
      <div class="col-lg-3 columns panel"> <a href="<?php echo $link_master_24[ICL_LANGUAGE_CODE]; ?>">
        <div class="text">
          <h2 class="titolo-corso">Summer School in Art & Cultural Heritage in Italy</h2>
          <hr class="yellow" />
          <span class="course-type"><?php echo $avanzata[ICL_LANGUAGE_CODE]; ?></span> </div>
        </a> </div>
      
      <div class="col-lg-3 columns panel"> <a href="<?php echo $link_master_30[ICL_LANGUAGE_CODE]; ?>">
        <div class="text">
          <h2 class="titolo-corso">Advertising 3.0 & Creative Communication</h2>
          <hr class="yellow" />
          <span class="course-type"><?php echo $avanzata[ICL_LANGUAGE_CODE]; ?></span> </div>
        </a> </div>
    </div>
    
    
    <div class="row">
      <div class="col-lg-3 columns panel"> <a href="/ip-management-valuation/">
        <div class="text">
          <h2 class="titolo-corso">Specialised Course in Ip Management and Valuation</h2>
          <hr class="yellow" />
          <span class="course-type"><?php echo $avanzata[ICL_LANGUAGE_CODE]; ?></span> </div>
        </a> </div>
    
    </div>
    
    
  </div>
</section>
<!--<section class="stories stories-cards cards">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10">
          <h2>CRASH PROGRAMME</h2>
        </div>
      </header>
    </div>
  </div>
</section>-->
<!--<section class="cards courses-cards">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 columns panel"> <a href="/offerta-formativa/formazione-specialistica/crash-programme-in-big-data-analytics/">
        <div class="text">
          <h2 class="titolo-corso">Big Data Analytics</h2>
          <hr class="yellow" />
          <span class="course-type"><?php // echo $avanzata[ICL_LANGUAGE_CODE]; ?></span> </div>
        </a> </div>
      
    </div>
    
  </div>
</section>-->
<section class="stories stories-cards cards">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10">
          <h2><?php echo $executive[ICL_LANGUAGE_CODE]; ?> </h2>
        </div>
      </header>
    </div>
  </div>
</section>
<section class="cards courses-cards">
  <div class="container">
  <div class="row">
    <div class="col-lg-3 columns panel"> <a href="<?php echo $link_master_28[ICL_LANGUAGE_CODE]; ?>">
      <div class="text">
        <h2 class="titolo-corso"><?php echo $titolo_master_28[ICL_LANGUAGE_CODE]; ?></h2>
        <hr class="yellow" />
        <p class="course-type"><?php echo $secondo_livello[ICL_LANGUAGE_CODE]; ?></p>
      </div>
      </a> </div>
    <div class="col-lg-3 columns panel"> <a href="<?php echo $link_master_27[ICL_LANGUAGE_CODE]; ?>">
      <div class="text">
        <h2 class="titolo-corso">Executive Master in	Healthcare & Pharmaceutical Administration</h2>
        <hr class="yellow" />
        <p class="course-type"><?php echo $secondo_livello[ICL_LANGUAGE_CODE]; ?></p>
      </div>
      </a> </div>
    <!--<div class="col-lg-3 columns panel"> <a href="<?php // echo $link_master_23[ICL_LANGUAGE_CODE]; ?>">
        <div class="text">
          <h2 class="titolo-corso"><?php //echo $titolo_master_11[ICL_LANGUAGE_CODE]; ?></h2>
          <hr class="yellow" />
          <p class="course-type"><?php // echo $avanzata[ICL_LANGUAGE_CODE]; ?></p>
        </div>
        </a> </div> -->
    
    <div class="col-lg-3 columns panel"> <a href="<?php echo $link_perf_1[ICL_LANGUAGE_CODE]; ?>">
    <div class="text">
      <h2 class="titolo-corso"><?php echo $titolo_perf_1[ICL_LANGUAGE_CODE]; ?></h2>
      <hr class="yellow" />
      <span class="course-type"><?php echo $perfezionamento[ICL_LANGUAGE_CODE]; ?></span> </div>
    </a> </div>
    
    
    <div class="col-lg-3 columns panel"><a href="<?php echo $link_perf_2[ICL_LANGUAGE_CODE]; ?>">
      <div class="text">
        <h2 class="titolo-corso"><?php echo $titolo_perf_2[ICL_LANGUAGE_CODE]; ?></h2>
        <hr class="yellow" />
        <span class="course-type"><?php echo $perfezionamento[ICL_LANGUAGE_CODE]; ?></span> </div>
      </a> </div>
  </div>
  <div class="row">
  
  
  
  <div class="col-lg-3 columns panel"> <a href="/offerta-formativa/executive-program/executive-hotel-management/">
    <div class="text">
      <h2 class="titolo-corso">Executive Hotel Management </h2>
      <hr class="yellow" />
      <span class="course-type"><?php echo $avanzata[ICL_LANGUAGE_CODE]; ?></span> </div>
    </a> </div>
  <!--<div class="col-lg-3 columns panel course-part-time"> <a title="Management dei Fondi Sanitari Integrativi" href="/offerta-formativa/executive-program/fondi-sanitari/">
        <div class="text">
          <h2 class="titolo-corso"> Management dei Fondi Sanitari Integrativi </h2>
          <hr class="part_time">
          <span class="course-type"><?php echo $avanzata[ICL_LANGUAGE_CODE]; ?></span> </div>
        </a> </div> --> 
  <!--<div class="col-lg-3 columns panel course-part-time"> <a title="Economia e Management della Previdenza Complementare" href="/offerta-formativa/executive-program/economia-e-management-della-previdenza-complementare/">
        <div class="text">
          <h2 class="titolo-corso"> Economia e Management della Previdenza Complementare </h2>
          <hr class="part_time">
          <span class="course-type"><?php echo $avanzata[ICL_LANGUAGE_CODE]; ?></span> </div>
        </a> </div> -->
  
  <div class="row">
    <div class="col-lg-3 columns panel course-part-time"> <a title="Economia e Management della Previdenza Complementare" href="/offerta-formativa/formazione-specialistica/hospitality-tourism-revenue-management/">
      <div class="text">
        <h2 class="titolo-corso"> Hospitality & Tourism Revenue Management </h2>
        <hr class="part_time">
        <span class="course-type"><?php echo $avanzata[ICL_LANGUAGE_CODE]; ?></span> </div>
      </a> </div>
    <div class="col-lg-3 columns panel course-part-time"> <a title="Cultural Insight: Italy" href="/offerta-formativa/executive-program/cultural-insight-italy/">
      <div class="text">
        <h2 class="titolo-corso"> Cultural Insight: Italy </h2>
        <hr class="part_time">
        <span class="course-type"><?php echo $avanzata[ICL_LANGUAGE_CODE]; ?></span> <span class="course-english">IN ENGLISH</span> </div>
      </a> </div>
  </div>
</section>
<?php get_footer(2017); ?>
