<?php
// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

/**
 * Template Name: Executive Program 2017
 * @file executive-program.php
 */
$shd  = get_field('sub_home_description');
$shp  = get_field('sub_home_paragraf');
$tema = get_field('tematiche');

get_header(2017);
?>

<style>
.finder-text {
    background-color: rgba(10, 10, 10, 0.10);
}
</style>

<?php
$sub_home       = array();
$sub_home['it'] = 'ACCELERA LA TUA CARRIERA, SVILUPPA LE TUE SKILL DI LEADERSHIP E LE TUE COMPETENZE TECNICHE E FUNZIONALI. I PROGRAMMI EXECUTIVE SONO RIVOLTI A MANAGER, IMPRENDITORI E PROFESSIONISTI ORIENTATI ALLO SVILUPPO DI COMPETENZE FUNZIONALI E DI LEADERSHIP E CHE DESIDERANO APPRENDERE ATTRAVERSO METODI BASATI SUL PROBLEM-SOLVING E ACTION-LEARNING, SULLO SVILUPPO DI COMPETENZE NON CONVENZIONALI, SUI LABORATORI ED IL NETWORKING.';
$sub_home['en'] = 'FOSTER YOUR CAREER PATH, IMPROVE YOUR LEADERSHIP SKILLS AND YOUR FUNCTIONAL AND TECHNICAL COMPETENCES. THE EXECUTIVE PROGRAMMES ARE AIMED AT MANAGERS, ENTREPRENEURS AND PROFESSIONALS WILLING TO DEVELOP NOT-CONVENTIONAL SKILLS AND TO LEARN THROUGH PROBLEM-SOLVING AND ACTION-LEARNING BASED METHODS, LABS AND THE NETWORKING.
';
?>



<div class="section sub-home sub-home-executive-programme" id="sub-home">
  <div class="container">
    <div class="row sub-home-list">
      <div class="sub-home-grid">
        <div class="col-md-12">
          <div class="sub-home-heading">
            <header>
              <h1><?php
echo the_title();
?></h1>
            </header>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="featurette-divider"></div>
<section class="cards courses-cards" >
  <div class="container">
    <div class="row">
      <div class="col-md-8 sx">
        <div class="item active">
         <img src="<?php echo site_url() ?>/wp-content/uploads/2017/07/Offerta_Formativa_Executive.jpg" alt="Offerta_Formativa_Executive">
        </div>
      </div>
      <div class="col-md-4 grid-row-quotes grid-col">
        <p><?php
echo $sub_home[ICL_LANGUAGE_CODE];
?></p>
      </div>
    </div>
  </div>

<?php
$titolo_programmi       = array();
$titolo_programmi['it'] = 'I Prossimi Programmi';
$titolo_programmi['en'] = 'Next programmes';
?>
<?php
$tematica       = array();
$tematica['it'] = 'L&#8217;offerta completa suddivisa per tematica';
$tematica['en'] = '';
?>
</section>
<section  class="body-section bg_2_perche">
<div class="container">
<div class="row">
 <h2 class="block-title  white-style col-md-10 col-md-push-2"><?php
echo $tematica[ICL_LANGUAGE_CODE];
?></h2>
   <div class="featurette-divider"></div>

   <div class="col-md-10 col-md-push-2 duecolonne hidden-sm hidden-xs">
   
   
    <?php

//    $terms = get_terms('tematiche');


$terms = get_terms(tematiche, array(
    'orderby' => 'name',
    'order' => 'ASC',
    'exclude' => array(
        81,
        101,
        348,
        103,
        96,
        34
    )
));

$page_title = trim(html_entity_decode(get_the_title()));

if (!empty($terms) && !is_wp_error($terms)) {
    foreach ($terms as $term) {
?>

      <div class="feature">
        <h3 class="white-style block-title"> <a href="<?php
        echo $term->slug;
?>"><?php
        echo $term->name;
?></a> </h3>
      </div>
    
    <?php
        
    } // END foreach
} // END if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
?>
</div>
  
  
  
  
  
   <?php
$select_first_choice['it'] = 'Scegli una tematica';
$select_first_choice['en'] = 'Choose an Area';
?>
   <div class="tematiche-mobile">
      <select id="tematica" name="tematica" class="col-xs-12" >
        <option value=""><?php
echo $select_first_choice[ICL_LANGUAGE_CODE];
?></option>
        <?php

$terms      = get_terms('tematiche');
$page_title = trim(html_entity_decode(get_the_title()));

if (!empty($terms) && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        $selected = '';
        if (!(strcmp($term->name, $page_title))) {
            $selected = ' selected="selected" ';
        }
        echo '<option value="' . $term->term_id . '" ' . $selected . ' data-url="' . $term->slug . '">' . $term->name . '</option>';
    } // END foreach
} // END if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
?>
     </select>
      <script>
document.getElementById('tematica').onchange = function() {
window.location.href = this.children[this.selectedIndex].getAttribute('data-url');
}
</script> 
    </div>
  </div>
</div>
</section>



<section  class="body-section" style="background-color:#3c3c3c">
<div class="container" >
  <div class="col-md-6" id="course-finder-wrapper">
      <div  class="block">  <div class="content row">

        <h2 class="block-title h2 white-style">Programme Explorer</h2>
        <?php 
		$finder_description = array();
		$finder_description['it'] = 'Vuoi scoprire qual è il corso ideale per te?<br>Scoprilo in 3 semplici step!';
		$finder_description['en'] = "Do you want to discover your ideal course?<br>Here are 3 simple steps of our Programme Finder!";

		
		
		$finder_button_open = array();
		$finder_button_open['it'] = 'Inizia da qui';
		$finder_button_open['en'] = 'Find your Course';
		
		$finder_button_close = array();
		$finder_button_close['it'] = 'Chiudi';
		$finder_button_close['en'] = 'Close';
		
		$finder_button_button_send = array();
		$finder_button_button_send['it'] = 'Trova il tuo corso';
		$finder_button_button_send['en'] = 'Find your Course';
		
		$finder_form_action = array();
		$finder_form_action['it'] = '/offerta-formativa/course-finder/';
		$finder_form_action['en'] = '/en/programs/course-finder/';
		
	
		
		?>
        <div class="finder-text" style="background-color:#ebebeb ">
          <p class="finder-description"><?php echo $finder_description[ICL_LANGUAGE_CODE]; ?></p>
          <form id="form-course-finder" action="<?php echo $finder_form_action[ICL_LANGUAGE_CODE] ?>" method="get">
            <ul>
              <?php 
			
			$selected_taxonomies =array('lingue','lunghezza_corsi','tematiche');
			$custom_taxonomies = corsi_get_taxonomies($selected_taxonomies);
			$choose_label['it']='scegli';
			$choose_label['en']='choose';
 foreach ($custom_taxonomies as $taxonomy) {  ?>
              <li>
                <label for="<?php echo $taxonomy[ICL_LANGUAGE_CODE]['name'] ?>"><?php echo $taxonomy[ICL_LANGUAGE_CODE]['label'] ?></label>
                <select name="<?php echo $taxonomy[ICL_LANGUAGE_CODE]['name'] ?>" id="<?php echo $taxonomy[ICL_LANGUAGE_CODE]['name'] ?>" >
                  <option value=""><?php echo $choose_label[ICL_LANGUAGE_CODE]; ?></option>
                  <?php 
        $terms = get_terms($taxonomy[ICL_LANGUAGE_CODE]['name']);


 		if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
     	foreach ( $terms as $term ) { 
		$selected ='';
		if(  isset($_GET[$taxonomy[ICL_LANGUAGE_CODE]['name']])  && ($taxonomy[ICL_LANGUAGE_CODE]['name']==$term->term_id) ) {
		$selected =' selected="selected" ';	
		}
		echo '<option value="'.$term->term_id.'" '.$selected.'>'.$term->name.'</option>';
     	} // END foreach
		} // END if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
		?>
                </select>
              </li>
              <?php } // END foreach ?>
            </ul>
            <p>
              <button class="finder-send-button" type="submit"><?php echo $finder_button_button_send[ICL_LANGUAGE_CODE]; ?></button>
          </form>
        </div>
      </div>
  
  
  
  
  
  
  
</div>
</section>
<?php
get_footer(2017);
?>