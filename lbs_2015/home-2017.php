<?php if ( !defined('ABSPATH')) exit;
/**
 * Template Name: Home 2017
 * @file home.php
 */
$finder_description = get_field('finder_description');
 //wp_enqueue_style('Home_Styles','/wp-content/themes/lbs_2015/css/home-new.css');
 get_header(2017); 
?>

<!-- Facebook Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '203976930981295');
    fbq('track', 'PageView');
</script>
<noscript>
    <img height="1" width="1" src="https://www.facebook.com/tr?id=203976930981295&ev=PageView
&noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->

<script id="myn_pixel" async src="https://white.mynsystems.com/myn_pixel_fp.js?accountId=50"></script>
<!--
Start of Floodlight Tag: Please do not remove
Activity name of this tag: LUISS_HP
URL of the webpage where the tag is expected to be placed: 
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 12/20/2018
-->
<script type="text/javascript">
    var axel = Math.random() + "";
    var a = axel * 10000000000000;
    document.write('<iframe src="https://9105818.fls.doubleclick.net/activityi;src=9105818;type=hp_6h0;cat=luiss0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
</script>
<noscript>
    <iframe src="https://9105818.fls.doubleclick.net/activityi;src=9105818;type=hp_6h0;cat=luiss0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
</noscript>
<!-- End of Floodlight Tag: Please do not remove -->

<!-- Includo le variabili comuni -->

<?php include(dirname(__DIR__).'/lbs_2015/pco/variables/vars.php'); ?>

<!-- Inizio template -->
<!-- CAROUSEL INTRO -->

<?php

$img1 = get_field('visore_img');
$img2 = get_field('visore_2');
$img3 = get_field('visore_3');
	
$desc1 = get_field('descrizione_visore_1');
$desc2 = get_field('descrizione_visore_2');
$desc3 = get_field('descrizione_visore_3');
	
$testo1 = get_field('testo_visore_1');
$testo2 = get_field('testo_visore_2');
$testo3 = get_field('testo_visore_3');

?>

<div id="HomeCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="item active">
            <img src="<?php echo $img1['url']; ?>" alt="<?php echo $img1['alt']; ?>" />
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                    <h1><?php echo $desc1; ?></h1>
                    <h6><?php echo $testo1; ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CAROUSEL BANNER DESKTOP -->

<?php 
$img_link_desk_1 = array();
$img_link_desk_1['it'] = 'pco/images/flex-ita-desk.png';
$img_link_desk_1['en'] = 'pco/images/flex-eng-desk.png';
	
$img_link_desk_2 = array();
$img_link_desk_2['it'] = 'pco/images/meet-us-online-ita-desk.png';
$img_link_desk_2['en'] = 'pco/images/meet-us-online-eng-desk.png';

$img_link_mob_1 = array();
$img_link_mob_1['it'] = 'pco/images/flex-ita-mob.png';
$img_link_mob_1['en'] = 'pco/images/flex-eng-mob.png';
	
$img_link_mob_2 = array();
$img_link_mob_2['it'] = 'pco/images/meet-us-online-ita-mob.png';
$img_link_mob_2['en'] = 'pco/images/meet-us-online-eng-mob.png';
?>

<div class="container ">
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="z-index: 1" data-interval="4000">
            <!-- Content -->
            <div class="carousel-inner">
                <div class="item active"> <a style="" href="https://businessschool.luiss.it/flex"> <img src="<?php echo $img_link_desk_1[ICL_LANGUAGE_CODE]; ?>" alt="Flex Executive Programme" class="img-responsive" style="background-size: cover;background-position: 50% 50%; max-width: 100%; height: auto;" /></a>
                </div>
                <div class="item"> <a style="" href="https://businessschool.luiss.it/meet-us-online/"> <img src="<?php echo $img_link_desk_2[ICL_LANGUAGE_CODE]; ?>" alt="Webinar, Workshop, Masterclass, Open Lesson e Q&A session." class="img-responsive" style="background-size: cover;background-position: 50% 50%; max-width: 100%; height: auto;" /></a>
                </div>
            </div>
            <!-- Indicatori -->
            <ol class="carousel-indicators" style="left:50%; top: 100%">
                <li data-target="#myCarousel" data-slide-to="0" class="active" style="border: 1px solid #feba4d;"></li>
                <li data-target="#myCarousel" data-slide-to="1" style="border: 1px solid #feba4d;"></li>
            </ol>
        </div>
    </div>
</div>

<!-- SEZIONE 1-->

<section id="home-section-1" class="home-section">
    <div class="container">
        <div class="row">
            <!-- Box delle tipologia di corso -->
            <!--
_1 = Lauree Triennali e magistrali  - non utilizzato
_2 = MBA
_3 = Master
_4 = Programmi Executive
_5 = Programmi Custom - N.B. EDITARE IN PAGINA AL POSTO DI PHD
_6 = Programmi di alta formazione - non utilizzato
            <!-- Box MBA -->
            <div class="col-md-6">
                <h2><?php echo get_field('home_launch_box_title_2'); ?></h2>
                <p class="big"><?php echo get_field('home_launch_box_excerpt_2'); ?></p>
                <!-- Pulsanti -->
                <div class="row">
                    <div class="col-xs-12">
                    <a href="<?php echo get_field('home_launch_box_url_2'); ?>">Scopri</a>
                    </div>
                </div>
            </div>

            <!-- Box Master -->
            <div class="col-md-6">
                <h2><?php echo get_field('home_launch_box_title_3'); ?></h2>
                <p class="big"><?php echo get_field('home_launch_box_excerpt_3'); ?></p>
                <!-- Pulsanti -->
                <div class="row">
                    <div class="col-xs-12">
                    <a href="<?php echo get_field('home_launch_box_url_3'); ?>">Scopri</a>
                    </div>
                </div>
            </div>

            <!-- Box Programmi Executive -->
            <div class="col-md-6">
                <h2><?php echo get_field('home_launch_box_title_4'); ?></h2>
                <p class="big"><?php echo get_field('home_launch_box_excerpt_4'); ?></p>
                <!-- Pulsanti -->
                <div class="row">
                    <div class="col-xs-12">
                    <a href="<?php echo get_field('home_launch_box_url_4'); ?>">Scopri</a>
                    </div>
                </div>
            </div>

            <!-- Box Programmi Custom -->
            <div class="col-md-6">
                <h2><?php echo get_field('home_launch_box_title_5'); ?></h2>
                <p class="big"><?php echo get_field('home_launch_box_excerpt_5'); ?></p>
                <!-- Pulsanti -->
                <div class="row">
                    <div class="col-xs-12">
                    <a href="<?php echo get_field('home_launch_box_url_5'); ?>">Scopri</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SEZIONE 2 -->

<section id="home-section-2" class="home-section">
    <div class="container">
        <div class="row">

            <?php  
$news_section_title = array();
$news_section_title['it'] = 'In Primo Piano';
$news_section_title['en'] = 'Featured';


$events_section_title = array();
$events_section_title['it'] = 'Eventi';
$events_section_title['en'] = 'Upcoming events';

?>

            <!-- Ultime News -->

            <div class="col-xs-12 col-md-4">
                <h3><?php echo $news_section_title[ICL_LANGUAGE_CODE]; ?></h3>
                <?php
 
$news_cat=array();	 		
$news_cat['it']=1;
$news_cat['en']=2;
  $args = array(
	'posts_per_page'   => 2,
	'offset'           => 0,
	'cat'              => $news_cat[ICL_LANGUAGE_CODE],
	'post_status'      => 'publish',
	'post_type'        => 'post',
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'post__in'  => get_option( 'sticky_posts' ),
    'ignore_sticky_posts' => 1,
	  
	'suppress_filters' => true );
 $news =  get_posts($args);
	 
if (!(empty($news))) {
 foreach($news as $news )  {
	 
 
 ?>
                <article itemscope itemtype="http://schema.org/Article">
                    <div class="row">
                        <div class="col-xs-4">
                            <span itemscope itemtype='http://schema.org/ImageObject'>
                                <?php 
	$img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $news->post_title,
);
	echo get_the_post_thumbnail($news->ID, 'thumbnail',$img_attr);
	
	?>
                            </span>
                        </div>
                        <div class="col-xs-8">
                            <h6 itemprop="name headline" class="home-news-headline"><a href="<?php echo get_permalink($news->ID) ?>" title="<?php echo $news->post_title ?>"><?php echo $news->post_title ?></a>
                            </h6>
                        </div>
                    </div>
                </article>
                <?php 
} // END foreach

} // END if ?>
            </div>

            <!-- Ultime Eventi -->

            <div class="col-xs-12 col-md-4">
                <h3><?php echo $events_section_title[ICL_LANGUAGE_CODE]; ?></h3>
                <?php
 
$eventi_cat=array(); 
$eventi_cat['it']=22;
$eventi_cat['en']=23;  
  $args = array(
	'posts_per_page'   => 2,
	'offset'           => 0,
	'cat'              => $eventi_cat[ICL_LANGUAGE_CODE],
	'post_status'      => 'publish',
	'post_type'        => 'evento',
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'suppress_filters' => true );
 $events =  get_posts($args);
	 
if (!(empty($events))) {
 foreach($events as $event )  {
	$data_inizio = get_post_meta($event->ID, 'data_inizio',true); 
 
 ?>
                <article itemscope itemtype="http://schema.org/Article">
                    <div class="row">
                        <div class="col-xs-4">
                            <?php echo get_date($data_inizio,"events",ICL_LANGUAGE_CODE) ?></div>
                        <div class="col-xs-8">
                            <h6 itemprop="name headline"><a href="<?php echo get_permalink($event->ID) ?>" title="<?php echo $event->post_title ?>"><?php echo $event->post_title ?></a></h6>
                        </div>
                    </div>
                </article>
                <?php 
} // END foreach

} // END if ?>
            </div>

            <!-- Trova il tuo corso -->
            <div class="col-md-4">
                <h3>Programme Explorer</h3>
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
                <div class="row">
                <div class="col-xs-12">
                    <p class="big"><?php echo $finder_description[ICL_LANGUAGE_CODE]; ?></p>
                    <form id="form-course-finder" action="<?php echo $finder_form_action[ICL_LANGUAGE_CODE] ?>" method="get">
                        <ul>
                            <?php 
			
			$selected_taxonomies =array('lingue','lunghezza_corsi','tematiche');
			$custom_taxonomies = corsi_get_taxonomies($selected_taxonomies);
			$choose_label['it']='Scegli';
			$choose_label['en']='Choose';
 foreach ($custom_taxonomies as $taxonomy) {  ?>
                            <li>
                                <label for="<?php echo $taxonomy[ICL_LANGUAGE_CODE]['name'] ?>"><?php echo $taxonomy[ICL_LANGUAGE_CODE]['label'] ?></label>
                                <select name="<?php echo $taxonomy[ICL_LANGUAGE_CODE]['name'] ?>" id="<?php echo $taxonomy[ICL_LANGUAGE_CODE]['name'] ?>">
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
                        <button class="" type="submit"><?php echo $finder_button_button_send[ICL_LANGUAGE_CODE]; ?></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php edit_post_link('<p>Modifica Pagina</p>', ''); ?>

<?php 

set_query_var( 'current_blog_id', get_current_blog_id(  ) );
get_footer(2017); 

?>