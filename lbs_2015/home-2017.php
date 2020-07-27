<?php if ( !defined('ABSPATH')) exit;
/**
 * Template Name: Home 2017
 * @file home.php
 */
$finder_description = get_field('finder_description');
 wp_enqueue_style('Home_Styles','/wp-content/themes/lbs_2015/css/home-new.css');
 get_header(2017); 


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

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '203976930981295'); 
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" 
src="https://www.facebook.com/tr?id=203976930981295&ev=PageView
&noscript=1"/>
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



<div id="HomeCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="item active"><img src="<?php echo $img1['url']; ?>" alt="<?php echo $img1['alt']; ?>"/>
			<div class="container">
				<div class="carousel-caption">
					<h2><span><?php  echo html_entity_decode($desc1); ?></span></h2>
					 <p><span class="slider_paragraf"><strong><?php  echo html_entity_decode($testo1); ?></strong></span></p> 
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<p></p>













<div class="container">
<div class="row">


      <?php 
		$img_link = array();
		$img_link['it'] = 'https://businessschool.luiss.it/wp-content/uploads/2020/04/banner-flex.jpg';
		$img_link['en'] = 'https://businessschool.luiss.it/wp-content/uploads/2020/04/banner-flex-2.jpg';
	
	   	$img_link_2 = array();
		$img_link_2['it'] = 'https://businessschool.luiss.it/wp-content/uploads/2020/04/banner-meet.jpg';
		$img_link_2['en'] = 'https://businessschool.luiss.it/wp-content/uploads/2020/04/banner-meet-2.jpg';
	?>
	

<div id="myCarousel" class="carousel slide" data-ride="carousel" style="z-index: 1" data-interval="4000">

	<ol class="carousel-indicators" style="left:50%; top: 100%">
		<li data-target="#myCarousel" data-slide-to="0" class="active" style="border: 1px solid #feba4d;"></li>
		<li data-target="#myCarousel" data-slide-to="1" style="border: 1px solid #feba4d;"></li>

	</ol>

	<div class="carousel-inner">
		<div class="item active">  <a style="" href="https://businessschool.luiss.it/flex"> <img src="<?php echo $img_link[ICL_LANGUAGE_CODE]; ?>" alt="Flex Executive Programme" class="img-responsive" style="background-size: cover;background-position: 50% 50%; max-width: 100%; height: auto;"/></a>


		</div>
		<div class="item"> <a style="" href="https://businessschool.luiss.it/meet-us-online/"> <img src="<?php echo $img_link_2[ICL_LANGUAGE_CODE]; ?>" alt="Webinar, Workshop, Masterclass, Open Lesson e Q&A session." class="img-responsive" style="background-size: cover;background-position: 50% 50%; max-width: 100%; height: auto;"/></a>

		</div>

</div></div>

	</div>
	</div>




<section id="home-section-1" class="home-section">
	<div class="container">



		<?php edit_post_link('<p class="button arr featured-links">Modifica Pagina</p>', ''); ?>



		<div class="row">
			<?php // for ($i = 1; $i <= 6; $i++) { 
   
  // if ($i==4) { echo '</div><div class="row">'; }
   
   ?>
			<!--<div class="col-md-4">
				<div class="feature titolo-ls">
					<a style="" href="<?php // echo get_field('home_launch_box_url_1'); ?>">

						<h2 class="block-title">
							<?php // echo get_field('home_launch_box_title_1'); ?>
						</h2>
						<p class="paragrafo-ls">
							<?php // echo get_field('home_launch_box_excerpt_1'); ?>
						</p>
					</a>
				</div>
			</div>-->


			<div class="col-md-6">
				<div class="feature titolo-mba">
					<a style="" href="<?php echo get_field('home_launch_box_url_2'); ?>">
						<h2 class="block-title">
							<?php echo get_field('home_launch_box_title_2'); ?>
						</h2>
						<p class="paragrafo-mba">
							<?php echo get_field('home_launch_box_excerpt_2'); ?>
						</p>
					</a>
				</div>
			</div>


			<div class="col-md-6">
				<div class="feature titolo-master">
					<a style="" href="<?php echo get_field('home_launch_box_url_3'); ?>">
						<h2 class="block-title ">
							<?php echo get_field('home_launch_box_title_3'); ?>
						</h2>


						<p class="paragrafo-master">
							<?php echo get_field('home_launch_box_excerpt_3'); ?>
						</p>
					</a>
				</div>
			</div>


			<div class="col-md-6">
				<div class="feature titolo-pe">
					<a style="" href="<?php echo get_field('home_launch_box_url_4'); ?>">
						<h2 class="block-title">

							<?php echo get_field('home_launch_box_title_4'); ?>

						</h2>




						<p class="paragrafo-pe">
							<?php echo get_field('home_launch_box_excerpt_4'); ?>
						</p>
					</a>
				</div>
			</div>

			<!--<div class="col-md-4">
				<div class="feature titolo-phd">
					<a style="" href="<?php // echo // get_field('home_launch_box_url_5'); ?>">
						<h2 class="block-title ">
							<?php // echo get_field('home_launch_box_title_5'); ?>

						</h2>


						<p class="paragrafo-phd">
							<?php // echo get_field('home_launch_box_excerpt_5'); ?>
						</p>
					</a>
				</div>
			</div>-->



			<div class="col-md-6">
				<div class="feature titolo-cs">
					<a style="" href="<?php echo get_field('home_launch_box_url_6'); ?>">
						<h2 class="block-title ">
							<?php echo get_field('home_launch_box_title_6'); ?>

						</h2>


						<p class="paragrafo-cs effect-shine">
							<?php echo get_field('home_launch_box_excerpt_6'); ?>
						</p>
					</a>
				</div>
			</div>
		</div>

		<?php // } ?>
	</div>
	<!-- END .row  -->
	</div>
	<!-- END .container -->
</section>
<?php  
$news_section_title = array();
$news_section_title['it'] = 'In Primo Piano';
$news_section_title['en'] = 'Featured';


$events_section_title = array();
$events_section_title['it'] = 'Eventi';
$events_section_title['en'] = 'Upcoming events';


?>
<section id="home-section-2" class="home-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2 class="block-title h2 white-style"><?php echo $news_section_title[ICL_LANGUAGE_CODE]; ?></h2>
        <div class="spacer-20"></div>
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
          <div class="col-md-4 nopadding"> <span itemscope itemtype='http://schema.org/ImageObject'>
            <?php 
	$img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $news->post_title,
);
	echo get_the_post_thumbnail($news->ID, 'thumbnail',$img_attr);
	
	?>
            </span> </div>
          <div class="col-md-8">
            <h3 itemprop="name headline" class="home-news-headline"><a href="<?php echo get_permalink($news->ID) ?>" title="<?php echo $news->post_title ?>"><?php echo $news->post_title ?></a></h3>
            <p><?php echo $news->post_excerpt ?></p>
          </div>
          <div class="clearfix"></div>
        </article>
        <?php 
} // END foreach

} // END if ?>
      </div>
      <div class="col-md-4">
        <h2 class="block-title h2 white-style"><?php echo $events_section_title[ICL_LANGUAGE_CODE]; ?></h2>
        <div class="spacer-20"></div>
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
          <div class="event-date"><?php echo get_date($data_inizio,"events",ICL_LANGUAGE_CODE) ?></div>
          <div class="pull-left pull-left event-preview">
            <h3 itemprop="name headline" class="home-news-headline"><a href="<?php echo get_permalink($event->ID) ?>" title="<?php echo $event->post_title ?>"><?php echo $event->post_title ?></a></h3>
            <p><?php echo $event->post_excerpt ?></p>
          </div>
          <div class="clearfix"></div>
        </article>
        <?php 
} // END foreach

} // END if ?>
      </div>
      <div class="col-md-4">
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
        <div class="finder-text">
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
      
      <div class="row">
       
          <h2 class="block-title h2 white-style">Social Wall</h2>
       
    		<div class="col-md-12">

				<script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
				<link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
				<ul class="juicer-feed" data-feed-id="luissbusiness-9274faa2-d37a-4a26-bd24-d134adebd1bb" data-per="6" data-gutter="10"></ul>
		   </div>
	  </div>
      
    </div>
    <!-- END .row --> 
  </div>
  <!-- END  .container --> 
</section>

<?php 

set_query_var( 'current_blog_id', get_current_blog_id(  ) );
get_footer(2017); 

?>