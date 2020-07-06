<?php
/*
Template Name: Roma
*/
get_header(); 
?>

<?php   $intro = array();
		$intro['it'] = 'Roma, una città “in movimento”';
		$intro['en'] = 'Rome is More!';
?>

<?php   $sub_intro = array();
		$sub_intro['it'] = '12 milioni di visitatori da tutto il mondo ogni anno, vitale e stimolante, Roma è un melting-pot culturale ed un centro privilegiato per creare e fare business networking.';
		$sub_intro['en'] = 'There is no place like Rome. The city is a cultural melting pot. Its historic centre is listed by UNESCO as World Heritage Site; welcoming about 12 million visitors per year from all over the world. Rome is the capital of the Country and seat of the Government, and an inspiring city and a business hub open to networking. ';
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
            <p class="h1-sub"><?php echo $intro[ICL_LANGUAGE_CODE]; ?></p>
            <p><?php echo $sub_intro[ICL_LANGUAGE_CODE]; ?></p>
          </div>
        </div>
        <div class="col-md-8 nopadding">
          <div class="sub-home-item-info"> <img  src="/wp-content/uploads/2015/05/roma-colosseo-tramonto.jpg" alt="Roma Colosseo al tramonto"  class="img-responsive"/> </div>
        </div>
      </div>
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

<section class="cards courses-cards">
  <div class="container">
    <div class="row">
      <div class="col-md-3 columns panel"> <a href="<?php echo $link[ICL_LANGUAGE_CODE]; ?>">
        <h2><?php echo $titolo[ICL_LANGUAGE_CODE]; ?>	</h2>
        <hr class="yellow" />
        <p> <?php echo $desc[ICL_LANGUAGE_CODE]; ?></p>
        </a> </div>
      <div class="col-md-3 columns panel"> <a href="<?php echo $link_1[ICL_LANGUAGE_CODE]; ?>">
        <h2><?php echo $titolo_1[ICL_LANGUAGE_CODE]; ?></h2>
        <hr class="yellow" />
        <p> <?php echo $desc_1[ICL_LANGUAGE_CODE]; ?></p>
        </a> </div>
      <div class="col-md-3 columns panel"> <a href="<?php echo $link_2[ICL_LANGUAGE_CODE]; ?>">
        <h2><?php echo $titolo_2[ICL_LANGUAGE_CODE]; ?></h2>
        <hr class="yellow" />
        <p> <?php echo $desc_2[ICL_LANGUAGE_CODE]; ?></p>
        </a> </div>
      <div class="col-md-3 columns panel"> <a href="<?php echo $link_3[ICL_LANGUAGE_CODE]; ?>">
        <h2><?php echo $titolo_3[ICL_LANGUAGE_CODE]; ?></h2>
        <hr class="yellow" />
        <p> <?php echo $desc_3[ICL_LANGUAGE_CODE]; ?></p>
        </a> </div>
    </div>
  </div>
</section>
<div class="featurette-divider"></div>
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
      <h2 class="tagline">Fori Imperiali  </h2>
      <img src="/wp-content/uploads/2015/05/fori-imperiali.jpg" alt="Fori Imperiali di Roma" class="img-responsive"/> </div>
    <div class="col-md-4">
      <h2 class="tagline">  Basilica di San Pietro  </h2>
     <img src="/wp-content/uploads/2015/05/Basilica-di-San-Pietro-in-Vaticano.jpg" alt="La Santa Sede" class="img-responsive"/> </div>
  </div>
</div>

<div class="featurette-divider"></div>

<!-- #container --> 

<!--END .container -->
<?php 

get_footer(ICL_LANGUAGE_CODE);

?>
