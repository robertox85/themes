<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;
/**
 * Template Name: Roma 2017
 * @file roma-2017.php
 */
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
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

<style>
:root {
  --current-color: #cc8a00;
}
</style>

<div class="item-centre box-cover-subhome" style="background-image:url(<?php echo site_url() ?>/wp-content/uploads/2017/04/Roma_filtro.jpg)">
    <div class="container">
        <div class="row centre mt-128 pt-80">
            <div class="col-md-12">
            <h1><?php echo the_title(); ?></h1>
            <h2><span class="bg__gold"><?php echo $intro[ICL_LANGUAGE_CODE]; ?></span></h2>
            </div>
        </div>
    </div>
</div>


<section class="bg__gold py-64">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h3 class="color__white">
					<?php echo $sub_intro[ICL_LANGUAGE_CODE]; ?>
				</h3>
			</div>
		</div>
	</div>
</section>

<?php
$link_1 = array();
$link_1['it'] = '/roma/roma-experience/';
$link_1['en'] = '/en/rome/rome-experience/';

$link_2 = array();
$link_2['it'] = '/roma/in-corso-a-roma/';
$link_2['en'] = '/en/rome/whats-app-in-rome/';

$link_3 = array();
$link_3['it'] = '/roma/informazioni-pratiche/';
$link_3['en'] = '/en/rome/practical-information/';

$link_4 = array();
$link_4['it'] = '/roma/informazioni-pratiche-per-studenti-internazionali/';
$link_4['en'] = '/en/rome/practical-information-for-foreign-students/';

$titolo_1 = array();
$titolo_1['it'] = 'Rome experience';
$titolo_1['en'] = 'Roma experience';

$titolo_2 = array();
$titolo_2['it'] = 'In corso a Roma';
$titolo_2['en'] = 'What’s app in Rome';

$titolo_3 = array();
$titolo_3['it'] = 'Informazioni pratiche';
$titolo_3['en'] = 'Practical information  ';

$titolo_4 = array();
$titolo_4['it'] = 'Informazioni pratiche per studenti internazionali';
$titolo_4['en'] = 'Practical information for foreign students  ';

$desc_1 = array();
$desc_1['it'] = 'Vivi la tua esperienza nella Capitale';
$desc_1['en'] = 'Your experience in a beautiful city';

$desc_2 = array();
$desc_2['it'] = 'Tieniti aggiornato su eventi, mostre, itinerari e molto altro';
$desc_2['en'] = 'Keep updated about events, exhibitions, itineraries and more in town ';

$desc_3 = array();
$desc_3['it'] = 'Come muoversi a Roma';
$desc_3['en'] = 'Information about public transport in Rome ';

$desc_4 = array();
$desc_4['it'] = 'Servizi, campus, attività';
$desc_4['en'] = 'Visa, housing, services';

$label_button=array();
$label_button['it']='Scopri';
$label_button['en']='Find out more';
?>
<section style="background-color: #F7F9FA">
	<div class="container">
		<div class="row">
			<div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48">
                <h6 class="pb-16"><?php echo $titolo_1[ICL_LANGUAGE_CODE]; ?></h6>
                <p class="pb-32"><?php echo $desc_1[ICL_LANGUAGE_CODE]; ?></p>
                <a class="button button__secondary" href="<?php echo $link_1[ICL_LANGUAGE_CODE] ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a>
			</div>
            
            <div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48">
                <h6 class="pb-16"><?php echo $titolo_2[ICL_LANGUAGE_CODE]; ?></h6>
                <p class="pb-32"><?php echo $desc_2[ICL_LANGUAGE_CODE]; ?></p>
                <a class="button button__secondary" href="<?php echo $link_2[ICL_LANGUAGE_CODE] ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a>
			</div>
            
            <div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48">
                <h6 class="pb-16"><?php echo $titolo_3[ICL_LANGUAGE_CODE]; ?></h6>
                <p class="pb-32"><?php echo $desc_3[ICL_LANGUAGE_CODE]; ?></p>
                <a class="button button__secondary" href="<?php echo $link_3[ICL_LANGUAGE_CODE] ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a>
			</div>
            
            <div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48">
                <h6 class="pb-16"><?php echo $titolo_4[ICL_LANGUAGE_CODE]; ?></h6>
                <p class="pb-32"><?php echo $desc_4[ICL_LANGUAGE_CODE]; ?></p>
                <a class="button button__secondary" href="<?php echo $link_4[ICL_LANGUAGE_CODE] ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a>
			</div> 
		</div>
	</div>
</section>



<section class="bg_roma body-section">
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h2 class="tagline"> Pantheon</h2>
      <img src="<?php echo site_url() ?>/wp-content/uploads/2015/05/pantheon.jpg" alt="Pantheon - Basilica Santa Maria ad Martyres" class="img-responsive"/> </div>
    <div class="col-md-4">
      <h2 class="tagline"> Fontana di Trevi </h2>
      <img src="<?php echo site_url() ?>/wp-content/uploads/2015/05/fontana-trevi.jpg" alt="Fontana di Trevi" class="img-responsive"/> </div>
    <div class="col-md-4">
      <h2 class="tagline">Piazza di Spagna</h2>
      <img src="<?php echo site_url() ?>/wp-content/uploads/2015/05/piazza-spagna.jpg" alt="Piazza di Spagna" class="img-responsive"/></div>
  </div>
  <div class="featurette-divider"></div>
  <div class="row">
    <div class="col-md-4">
      <h2 class="tagline"> Piazza del Popolo </h2>
      <img src="<?php echo site_url() ?>/wp-content/uploads/2015/05/pizza-del-popolo.jpg" alt="Piazza del Popolo" class="img-responsive"/> </div>
    <div class="col-md-4">
      <h2 class="tagline">Fori Imperiali </h2>
      <img src="<?php echo site_url() ?>/wp-content/uploads/2015/05/fori-imperiali.jpg" alt="Fori Imperiali di Roma" class="img-responsive"/> </div>
    <div class="col-md-4">
      <h2 class="tagline"> Basilica di San Pietro </h2>
      <img src="<?php echo site_url() ?>/wp-content/uploads/2015/05/Basilica-di-San-Pietro-in-Vaticano.jpg" alt="La Santa Sede" class="img-responsive"/> </div>
  </div>
</div>
</section>
<p><?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
<?php get_footer(2017); ?>