<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Template Name: Home
 * @file home.php
 */
 
    $img1 = get_field('visore_img');
	$img2 = get_field('visore_2');
	$img3 = get_field('visore_3');
	
	$desc1 = get_field('descrizione_visore_1');
	$desc2 = get_field('descrizione_visore_2');
	$desc3 = get_field('descrizione_visore_3');
	
	$testo1 = get_field('testo_visore_1');
	$testo2 = get_field('testo_visore_2');
	$testo3 = get_field('testo_visore_3');
	
	$testo1_1 = get_field('testo_visore_1_1');
	$testo2_2 = get_field('testo_visore_2_2');
	$testo3_3 = get_field('testo_visore_3_3');
	
	$box_1 = get_field('box_1');
	$box_2 = get_field('box_2');
	$box_3 = get_field('box_3');
	$box_4 = get_field('box_4');
	$box_5 = get_field('box_5');
	$box_6 = get_field('box_6');
	
	
	$link_1 = get_field('link_1');
	$link_2 = get_field('link_2');
	$link_3 = get_field('link_3');
	$link_4 = get_field('link_4');
	$link_5 = get_field('link_5');
	$link_6 = get_field('link_6');
	
	$link_valore = get_field('link_valore');
	$link_valore_2 = get_field('link_valore_2');
	$link_valore_3 = get_field('link_valore_3');
	$link_valore_4 = get_field('link_valore_4');
	
	
	$finder_description = get_field('finder_description');
	
	
	
	$val1 = get_field('etichetta_valore');
	$val1_img = get_field('immagine_valore');
	
	
	$val2 = get_field('etichetta_valore_2');
	$val2_img = get_field('immagine_valore_2');
	
	
	$val3 = get_field('etichetta_valore_3');
	$val3_img = get_field('immagine_valore_3');
	
	$val4 = get_field('etichetta_valore_4');
	$val4_img = get_field('immagine_valore_4');
	
 wp_enqueue_style('Googge_Web_Font_Oswald','https://fonts.googleapis.com/css?family=Oswald:700');
 wp_enqueue_style('Home_Styles',get_bloginfo('template_url').'/css/home.css');
 get_header(); 
?>



<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators" style="left:50%">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active"> <img src="<?php echo $img1['url']; ?>" alt="<?php echo $img1['alt']; ?>" />
      <div class="container">
        <div class="carousel-caption">
         <h2><span><?php  echo html_entity_decode($desc1); ?></span></h2> 
        <!--  <p><span class="slider_paragraf"><strong><?php // echo html_entity_decode($testo1); ?></strong></span></p> -->
        </div>
      </div>
     
    </div>
    <div class="item"> <img  src="<?php echo $img2['url']; ?>" alt="<?php echo $img2['alt']; ?>" />
      <div class="container">
        <div class="carousel-caption">
          <h2><span><?php echo html_entity_decode($desc2); ?></span></h2>
          <!--<p><span class="slider_paragraf"><strong><?php //echo html_entity_decode($testo2); ?></strong></span></p> -->
        </div>
      </div>
    </div>
    <div class="item"><img src="<?php echo $img3['url']; ?>" alt="<?php echo $img3['alt']; ?>" />
      <div class="container">
        <div class="carousel-caption">
          <h2><span><?php echo html_entity_decode($desc3); ?></span></h2>
         <!-- <p><span class="slider_paragraf"><strong><?php // echo html_entity_decode($testo3); ?></strong></span></p> -->
        </div>
      </div>
    </div>
    
    <!-- Controls --> 
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="fa fa-chevron-left fa-2x"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="fa fa-chevron-right fa-2x"></span></a> </div>
  <!-- /.carousel --> 
  
  <a class="left" href="#myCarousel" data-slide="prev"> <span class="icon-prev"></span> </a> <a class="right" href="#myCarousel" data-slide="next"> <span class="icon-next"></span> </a> </div>
<div class="featurette-divider"></div>
<div class="container">
  <div class="row">
    <div class="col-sm-7 col">
      <div class="col-md-4  box-item"> <a href="<?php echo html_entity_decode($link_1); ?>" class="yellow">
        <h2><?php echo html_entity_decode($box_1); ?></h2>
        </a> </div>
      <div class="col-md-4 box-item"> <a href="<?php echo html_entity_decode($link_2); ?>" class="yellow">
        <h2><?php echo html_entity_decode($box_2); ?></h2>
        </a> </div>
      <div class="col-md-4  box-item"> <a href="<?php echo html_entity_decode($link_3); ?>" class="yellow">
        <h2><?php echo html_entity_decode($box_3); ?></h2>
        </a> </div>
      <div class="col-md-4  box-item"> <a href="<?php echo html_entity_decode($link_4); ?>" class="yellow">
        <h2><?php echo html_entity_decode($box_4); ?></h2>
        </a> </div>
      <div class="col-md-4  box-item"> <a href="<?php echo html_entity_decode($link_5); ?>"  class="yellow">
        <h2><?php echo html_entity_decode($box_5); ?></h2>
        </a></div>
      <div class="col-md-4  box-item"> <a href="<?php echo html_entity_decode($link_6); ?>"  class="yellow">
        <h2><?php echo html_entity_decode($box_6); ?></h2>
        </a> </div>
    </div>
    <div class="col-sm-5 col" id="course-finder-wrapper"> 
      
      <!--BEGIN widget course finder -->
      
      <?php 
		$finder_description = array();
		$finder_description['it'] = 'Vuoi scoprire qual è il corso ideale per te? Scoprilo in 3 semplici step!';
		$finder_description['en'] = "Do you want to discover your ideal course? Here are 3 simple steps of our Programme Finder!";
		
		
		
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
      <div class="finder-text">
        <h2 class="finder-title">Programme Explorer</h2>
        <hr class="hide-for-small" style="color:#202020" />
        <p class="finder-description"><?php echo $finder_description[ICL_LANGUAGE_CODE]; ?></p>
        <div class="featurette-divider"></div>
        <form id="form-course-finder" action="<?php echo $finder_form_action[ICL_LANGUAGE_CODE] ?>" method="get">
          <ul>
            <?php 
			
			$selected_taxonomies =array('lingue','lunghezza_corsi','tematiche');
			$custom_taxonomies = corsi_get_taxonomies($selected_taxonomies);
			$choose_label['it']='scegli';
			$choose_label['en']='choose';
 foreach ($custom_taxonomies as $taxonomy) {  ?>
            <li>
              <label><?php echo $taxonomy[ICL_LANGUAGE_CODE]['label'] ?>
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
              </label>
            </li>
            <?php } // END foreach ?>
          </ul>
          <p>
            <button class="finder-send-button" type="submit"><?php echo $finder_button_button_send[ICL_LANGUAGE_CODE]; ?></button>
        </form>
        <p>
          <button class="finder-button" type="button"><?php echo $finder_button_open[ICL_LANGUAGE_CODE]; ?></button>
        </p>
      </div>
      <script>
	$(function() {  
		$( ".finder-button" ).click(function() {
		if ($(this).hasClass('close-finder-form')) {
		$('#form-course-finder').slideUp('fast');
		$(this).removeClass('close-finder-form');
		$(this).text('<?php echo $finder_button_open[ICL_LANGUAGE_CODE] ?>');
		} else {
		$('#form-course-finder').slideDown('fast');
		$(this).addClass('close-finder-form');
		$(this).text('<?php  echo $finder_button_close[ICL_LANGUAGE_CODE] ?>');
		}
		});
	});

	</script> 
      
      <!--END widget course finder --> 
      
    </div>
  </div>
</div>

<!-- end span 4-->



<?php   $evidenza = array();
		$evidenza['it'] = 'IN PRIMO PIANO';
		$evidenza['en'] = 'Upcoming events';
?>
<section class="news-cards">
  <div class="container">
    <div class="row items">
      <div class="col-md-2 columns">
        <div class="text">
          <h2 class="home-headline primopiano"> <?php echo $evidenza[ICL_LANGUAGE_CODE]; ?></h2>
        </div>
      </div>
      <?php
$eventi_cat=array(); 
$eventi_cat['it']=22;
$eventi_cat['en']=23;  
$args = array(
	'posts_per_page'   => 2,
	'offset'           => 0,
	'cat'              => $eventi_cat[ICL_LANGUAGE_CODE],
	'post_type'        => 'evento',
	'post_status'      => 'publish',
	
	'meta_query'  => array(
             array(        
              'key'     => 'data_inizio',  // which meta to query data_inizio
              'value'   => date("Y-m-d"),
              'compare' => '>=',          // method of comparison
              'type' => 'DATE'
            ) 
           ) ,
	'meta_key'		   => 'data_inizio', // data_inizio
	'orderby'		   => 'meta_value',
	'order' => 'ASC',
	
	
	//'meta_key'		   => 'data_inizio',
	//'orderby'		   => 'meta_value',
	//'order' => 'data_inizio',
	'suppress_filters' => true );
 $eventi =  get_posts($args);
	 
if (!(empty($eventi))) {
 foreach($eventi as $evento )  {

$data_inizio = get_post_meta($evento->ID, 'data_inizio',true);	 
 ?>
      <div class="col-md-5 columns">
    
        <article  itemscope itemtype="http://schema.org/Article">
          <div class="text">
            <time datetime="<?php echo $data_inizio ?>"><?php echo get_date($data_inizio,"events",ICL_LANGUAGE_CODE) ?></time>
            <h3 class="home-headline" itemprop="headline"><a href="<?php echo get_permalink($evento->ID) ?>" title="<?php echo $evento->post_title ?>"> <?php echo $evento->post_title ?></a> </h3>
               <p class="desc-home"><?php echo $evento->post_excerpt ?></p>
          </div>
        </article>
      </div>
      <?php 
} // END foreach

} // END if ?>
    </div>
  </div>
</section>

<?php   $tutti_news = array();
		$tutti_news['it'] = 'Tutte le NEWS';
		$tutti_news['en'] = 'ALL NEWS';
?>

<?php   $link_news = array();
		$link_news['it'] = '/news-eventi/news/';
		$link_news['en'] = '/en/news-events/news/';
?>

<section class="news-cards cards">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10 space">
          <h2>News</h2>
        </div>
        <div class="col-lg-2 space">
        <a href="<?php echo $link_news[ICL_LANGUAGE_CODE]; ?>" class="button more"><?php echo $tutti_news[ICL_LANGUAGE_CODE]; ?></a>
        </div>
      </header>
    </div><!-- END container -->
  </div><!-- END wide-row -->
  
  
  
  
  <div class="container">
    <div class="row items">  
    
   
    <div class="col-lg-3 columns panel">
        <article class="img" itemscope itemtype="http://schema.org/Article">
         <a href="http://businessschool.luiss.it/news/bando-generazione-cultura-per-giovani-neolaureati/" title="Bando “Generazione cultura” per giovani neolaureati">
          <img width="450" height="450" src="http://businessschool.luiss.it/wp-content/uploads/2017/12/Lottomatica_Box.jpg" class="img-responsive wp-post-image" alt="Bando “Generazione cultura” per giovani neolaureati" />          <div class="text">
            <time datetime="2017-03-21 15:26:57"><span class="day">21</span> <span class="month">Mar</span> <span class="year">2017</span></time>
             <h3 class="headline" itemprop="headline">Bando “Generazione cultura” per giovani neolaureati</h3>
            <div class="description" itemprop="description">
              <p></p>
            </div>
          </div>
          </a> </article>
      </div>   
    
    
 
 <?php
 

 		 
$news_cat=array();	 		
$news_cat['it']=1;
$news_cat['en']=2;
  $args = array(
	'posts_per_page'   => 3,
	'offset'           => 0,
	'cat'              => $news_cat[ICL_LANGUAGE_CODE],
	'post_status'      => 'publish',
	'post_type'        => 'post',
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	
	//'post__in'  => get_option( 'sticky_posts' ),
	'suppress_filters' => true );
 $news =  get_posts($args);
	 
if (!(empty($news))) {
 foreach($news as $news )  {
	 
 
 ?> 

 <div class="col-lg-3 columns panel">
        <article class="img" itemscope itemtype="http://schema.org/Article">
         <a href="<?php echo get_permalink($news->ID) ?>" title="<?php echo $news->post_title ?>">
          <?php 
	$img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $news->post_title,
);
	echo get_the_post_thumbnail($news->ID, 'thumbnail',$img_attr);
	
	?>
          <div class="text">
            <time datetime="<?php echo $news->post_date  ?>"><?php echo get_date($news->post_date,"events",ICL_LANGUAGE_CODE); ?></time>
             <h3 class="headline" itemprop="headline"><?php echo $news->post_title ?></h3>
            <div class="description" itemprop="description">
              <p><?php echo $news->post_excerpt ?></p>
            </div>
          </div>
          </a> </article>
      </div>  
<?php 
} // END foreach

} // END if ?>
 
 
 
 
 
  </div>
  </div>
  
</section>


<section class="news-cards cards">
  <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10 space">
          <h2>LUISS BS Experience</h2>
        </div>
      </header>
    </div><!-- END container -->
  </div><!-- END wide-row -->


<div class="container">
  <div class="row">
    <div class="col-md-3 section-launch" >
      <h2 class="tagline"><?php echo html_entity_decode($val1); ?></h2>
      <a href="<?php echo html_entity_decode($link_valore); ?>"><img src="<?php echo $val1_img['url']; ?>" alt="<?php echo $val1_img['alt']; ?>" class="img-responsive"/></a> </div>
    <div class="col-md-3 section-launch">
      <h2 class="tagline"><?php echo html_entity_decode($val2); ?></h2>
      <a href="<?php echo html_entity_decode($link_valore_2); ?>"><img src="<?php echo $val2_img['url']; ?>" alt="<?php echo $val2_img['alt']; ?>" class="img-responsive"/></a> </div>
    <div class="col-md-3 section-launch">
      <h2 class="tagline"><?php echo html_entity_decode($val3); ?></h2>
      <a href="<?php echo html_entity_decode($link_valore_3); ?>"><img src="<?php echo $val3_img['url']; ?>" alt="<?php echo $val3_img['alt']; ?>" class="img-responsive"/></a> </div>
      
      <div class="col-md-3 section-launch">
      <h2 class="tagline"><?php echo html_entity_decode($val4); ?></h2>
      <a href="<?php echo html_entity_decode($link_valore_4); ?>"><img src="<?php echo $val4_img['url']; ?>" alt="<?php echo $val4_img['alt']; ?>" class="img-responsive"/></a> </div>

  </div>
</div>

</section>

<div class="featurette-divider"></div>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script> 
<script>
    $('.carousel').carousel({
        interval: 8000 //changes the speed
    })
</script>
<?php 

get_footer(ICL_LANGUAGE_CODE);

?>
