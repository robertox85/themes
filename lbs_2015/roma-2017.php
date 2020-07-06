<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;
/**
 * Template Name: Roma 2017
 * @file roma-2017.php
 */
get_header(2017);
?>
<?php   $intro = array();
		$intro['it'] = 'Roma, una città “in movimento”';
		$intro['en'] = 'Rome is More!';
?>
<?php   $sub_intro = array();
		$sub_intro['it'] = '12 milioni di visitatori da tutto il mondo ogni anno, vitale e stimolante, Roma è un melting-pot culturale ed un centro privilegiato per creare e fare business networking.';
		$sub_intro['en'] = 'There is no place like Rome. The city is a cultural melting pot. Its historic centre is listed by UNESCO as World Heritage Site; welcoming about 12 million visitors per year from all over the world. Rome is the capital of the Country and seat of the Government, and an inspiring city and a business hub open to networking. ';
?>


<div id="Carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="item active"><img src="/wp-content/uploads/2017/04/Roma_filtro.jpg" alt="<?php the_title()?>" >
      <div class="container">
        <div class="carousel-caption">
          <h1><?php the_title()?></h1>
 <p><span class="slider_paragraf"><strong><?php echo $intro[ICL_LANGUAGE_CODE]; ?></strong></span>
        </div>
      </div>
    </div>
  </div>
</div>


<section class="drawers">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-12 space">
          <h2><?php echo $sub_intro[ICL_LANGUAGE_CODE]; ?></h2>
        </div>
      </header>
    </div>
  </div>
</section>

<?php   $link = array();
		$link['it'] = '/roma/roma-experience/';
		$link['en'] = '/en/rome/rome-experience/';
?>
<?php   $link_1 = array();
		$link_1['it'] = '/roma/in-corso-a-roma/';
		$link_1['en'] = '/en/rome/whats-app-in-rome/';
?>
<?php   $link_2 = array();
		$link_2['it'] = '/roma/informazioni-pratiche/';
		$link_2['en'] = '/en/rome/practical-information/';
?>
<?php   $link_3 = array();
		$link_3['it'] = '/roma/informazioni-pratiche-per-studenti-internazionali/';
		$link_3['en'] = '/en/rome/practical-information-for-foreign-students/';
?>

<?php   $titolo = array();
		$titolo['it'] = 'Rome experience';
		$titolo['en'] = 'Roma experience';
?>
<?php   $titolo_1 = array();
		$titolo_1['it'] = 'In corso a Roma';
		$titolo_1['en'] = 'What’s app in Rome';
?>
<?php   $titolo_2 = array();
		$titolo_2['it'] = 'Informazioni pratiche';
		$titolo_2['en'] = 'Practical information  ';
?>
<?php   $titolo_3 = array();
		$titolo_3['it'] = 'Informazioni pratiche per studenti internazionali';
		$titolo_3['en'] = 'Practical information for foreign students  ';
?>
<?php   $desc = array();
		$desc['it'] = 'Vivi la tua esperienza nella Capitale';
		$desc['en'] = 'Your experience in a beautiful city';
?>
<?php   $desc_1 = array();
		$desc_1['it'] = 'Tieniti aggiornato su eventi, mostre, itinerari e molto altro';
		$desc_1['en'] = 'Keep updated about events, exhibitions, itineraries and more in town ';
?>
<?php   $desc_2 = array();
		$desc_2['it'] = 'Come muoversi a Roma';
		$desc_2['en'] = 'Information about public transport in Rome ';
?>
<?php   $desc_3 = array();
		$desc_3['it'] = 'Servizi, campus, attività';
		$desc_3['en'] = 'Visa, housing, services';
?>
<section class="body-section">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="feature">
          <h3 class="block-title h2"><a href="<?php echo $link[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo[ICL_LANGUAGE_CODE]; ?></a></h3>
          <p><?php echo $desc[ICL_LANGUAGE_CODE]; ?> </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature">
          <h3 class="block-title h2"><a href="<?php echo $link_1[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_1[ICL_LANGUAGE_CODE]; ?></a></h3>
          <p><?php echo $desc_1[ICL_LANGUAGE_CODE]; ?> </p>
        </div>
      </div>
      
       <div class="col-md-3">
        <div class="feature">
          <h3 class="block-title h2"><a href="<?php echo $link_2[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_2[ICL_LANGUAGE_CODE]; ?></a></h3>
          <p><?php echo $desc_2[ICL_LANGUAGE_CODE]; ?> </p>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="feature">
          <h3 class="block-title h2"><a href="<?php echo $link_3[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_3[ICL_LANGUAGE_CODE]; ?></a></h3>
          <p><?php echo $desc_3[ICL_LANGUAGE_CODE]; ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg_roma body-section">
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h2 class="tagline"> Pantheon</h2>
      <img src="/wp-content/uploads/2015/05/pantheon.jpg" alt="Pantheon - Basilica Santa Maria ad Martyres" class="img-responsive"/> </div>
    <div class="col-md-4">
      <h2 class="tagline"> Fontana di Trevi </h2>
      <img src="/wp-content/uploads/2015/05/fontana-trevi.jpg" alt="Fontana di Trevi" class="img-responsive"/> </div>
    <div class="col-md-4">
      <h2 class="tagline">Piazza di Spagna</h2>
      <img src="/wp-content/uploads/2015/05/piazza-spagna.jpg" alt="Piazza di Spagna" class="img-responsive"/></div>
  </div>
  <div class="featurette-divider"></div>
  <div class="row">
    <div class="col-md-4">
      <h2 class="tagline"> Piazza del Popolo </h2>
      <img src="/wp-content/uploads/2015/05/pizza-del-popolo.jpg" alt="Piazza del Popolo" class="img-responsive"/> </div>
    <div class="col-md-4">
      <h2 class="tagline">Fori Imperiali </h2>
      <img src="/wp-content/uploads/2015/05/fori-imperiali.jpg" alt="Fori Imperiali di Roma" class="img-responsive"/> </div>
    <div class="col-md-4">
      <h2 class="tagline"> Basilica di San Pietro </h2>
      <img src="/wp-content/uploads/2015/05/Basilica-di-San-Pietro-in-Vaticano.jpg" alt="La Santa Sede" class="img-responsive"/> </div>
  </div>
</div>
</section>

<?php get_footer(2017); ?>