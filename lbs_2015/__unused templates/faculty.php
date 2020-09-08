<?php
/**
 * Template Name: Faculty
 * @file faculty.php
*/
// Exit if accessed directly

if ( !defined('ABSPATH')) exit;

    $shd = get_field('sub_home_description');
	$shp = get_field('sub_home_paragraf');
	$shv = get_field('sub_home_visore');
	
	//$shd_2 = get_field('sub_home_description_2');
	//$shp_2 = get_field('sub_home_paragraf_2');
	//$shv_2 = get_field('sub_home_visore_2');
	
   //$shd_3 = get_field('sub_home_description_3');
	//$shp_3 = get_field('sub_home_paragraf_3');
	//$shv_3 = get_field('sub_home_visore_3');
	
	$ct = get_field('cards_titolo');
	$ct_2 = get_field('cards_titolo_2');
	
	$cd = get_field('cards_descrizione');
	$cd_2 = get_field('cards_descrizione_2');
	
get_header(); 
?>



<section class="section sub-home" id="sub-home">
  <div class="container">
    <div class="row sub-home-list">
      <div class="sub-home-grid">
          <div class="item active">
              <div class="col-sm-4">
                <div class="sub-home-item-info carousel-caption-faculty">
                   	<div class="sub-home-heading">
          			<header>
            		<h1><?php echo the_title(); ?></h1>
         			</header>
            		<p class="h1-sub"><?php echo html_entity_decode($shd); ?></p>
           			<p><?php echo html_entity_decode($shp); ?></p>
          			</div>
                </div>
              </div>
              <div class="col-sm-8 nopadding">
                <div class="sub-home-item-info"> <img src="<?php echo $shv['url']; ?>" alt="<?php echo $shv['alt']; ?>" class="img-responsive" /> </div>
              </div>
            </div>
      </div><!--END .sub-home-grid -->    
    </div><!--END .row -->
  </div><!--END .container -->
  
  
  <?php $link_1 = array();
		$link_1['it'] = '/faculty-research/aree-di-ricerca/';
		$link_1['en'] = '/en/faculty-research/research-area/';
?>

<?php   $link_2 = array();
		$link_2['it'] = '/faculty-research/docenti/';
		$link_2['en'] = '/en/faculty-research/teachers/';
?>
 
<?php   $link_3 = array();
		$link_3['it'] = '/faculty-research/adjunct-faculty/';
		$link_3['en'] = '/en/faculty-research/adjunct-faculty/';
?> 

</section>
<section class="cards courses-cards">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 columns panel">
        <a href="<?php echo $link_1[ICL_LANGUAGE_CODE]; ?>" title="">
          <div class="text">
            <h2><?php echo html_entity_decode($ct); ?></h2>
            <hr class="yellow" />
            <p><?php echo html_entity_decode($cd); ?></p></div>
          </a>
      </div>
      

      
      <div class="col-lg-4 columns panel">
        <a href="<?php echo $link_2[ICL_LANGUAGE_CODE]; ?>" title="">
          <div class="text">
            <h2><?php echo html_entity_decode($ct_2); ?></h2>
            <hr class="yellow" />
            <p><?php echo html_entity_decode($cd_2); ?></p></div>
          </a>
      </div>
      
      <div class="col-lg-4 columns panel">
        <a href="<?php echo $link_3[ICL_LANGUAGE_CODE]; ?>" title="">
          <div class="text">
            <h2>Adjunct Faculty</h2>
            <hr class="yellow" />
            <!--<p><?php //echo html_entity_decode($cd); ?></p>--></div>
          </a>
      </div>
      
    </div>
  </div>
</section>


<?php   $link_f = array();
		$link_f['it'] = '/faculty-research/docenti/';
		$link_f['en'] = '/en/faculty-research/teachers/';
?>
<?php   $faculty = array();
		$faculty['it'] = ' Tutti i Docenti (A-Z)';
		$faculty['en'] = 'Faculty (A-Z)';
?>


   <section class="faculty-cards cards">
      <div class="wide-row">
        <div class="container">
          <header class="row">
            <div class="col-lg-8 space">
              <h2>Faculty</h2>
            </div>
            <div class="col-lg-4 space"> <a href="<?php echo $link_2[ICL_LANGUAGE_CODE]; ?>" class="button more"><?php echo $faculty[ICL_LANGUAGE_CODE]; ?></a></div>
          </header>
        </div>
      </div>
  
  <!-- END wide-row -->
  
  <div class="container">
    <div class="row">
  
      

      <?php 
$docenti_ids = array();
$docenti_ids['it']=array('136', '458', );
$docenti_ids['en']=array('138', '2304', ); // cambiare 2304
 
 $args = array(
 	'post__in'	       => $docenti_ids[ICL_LANGUAGE_CODE],
	'posts_per_page'   => 3,
	'offset'           => 0,
	'orderby'          => 'ID',
	'order'            => 'ASC',
	'post_type'        => 'page',
	'post_status'      => 'publish',
	'suppress_filters' => true );
	

$docenti=  get_posts($args);
if (!(empty( $docenti))) { 
 

$d = 0;

foreach($docenti as $docente )  {
$d++	

?>
      <div class="col-lg-4 nopadding
<?php if($d==2){
print "right";	
$d = 0;
}
?>">
        <div class="medium">
          <article class="docente"> <a href="<?php echo get_permalink($docente->ID) ?>" title="<?php echo $docente->post_title ?>">
            <?php 
	$img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $docente->post_title,
);
	echo get_the_post_thumbnail($docente->ID, 'thumbnail',$img_attr);
	
	?>
            <div class="text">
              <h3 class="headline nome"><?php echo $docente->post_title ?></h3>
              <ul class="docente-features">
                <li><?php echo get_post_meta($docente->ID, 'classificazione', true); ?></li>
                <li><?php echo get_post_meta($docente->ID, 'insegnamento', true); ?></li>
                <li><?php echo get_post_meta($docente->ID, 'carica', true); ?></li>
                <li><?php echo get_post_meta($docente->ID, 'email', true); ?></li>
              </ul>
            </div>
            </a> </article>
        </div>
      </div>
      <?php } // END foreach ?>
      <?php } // END if ?>
    </div>
   <!-- <p style="margin-top:20px;"><a href="<?php //echo html_entity_decode(get_field('link_tuti_i_docenti')); ?>" class="button col-md-12"><span class="white-style"><?php //echo html_entity_decode(get_field('etichetta_tutti_i_docenti')); ?></span></a></p>-->
    
    
    
   
    
  
    <!-- END container --> 
  </div>
  <!-- END row -->
  
  <?php $search = array();
		$Search['it'] = 'Cerca per insegnamento o per docente:';
		$Search['en'] = 'Search by course or professor: ';
		
		$search_button_text = array();
		$search_button_text['it'] = 'Cerca';
		$search_button_text['en'] = 'Search';
?>
  <div class="ricerca-col">
    <div class="row">
      <div class="col-lg-1 space"> </div>
      <div class="col-lg-10 space">
        <h2>Faculty Directory</h2>
        <label><?php echo $Search[ICL_LANGUAGE_CODE]; ?> </label>
        <form action="/faculty-research/docenti/" method="get">
          <input type="text" class="live-search col-md-10" name="docente" id="search-query" value="" />
          <button type="submit" class="button white col-md-2"><?php echo $search_button_text[ICL_LANGUAGE_CODE]  ?></button>
          <div id="live-search-output"></div>
        </form>
      </div>
    </div>
  </div>
</section>
<script src="<?php echo get_bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_bloginfo('template_url') ?>/js/jquery.auto-complete.min.js"></script>
<script>
var listato = "";
				function hideList(){
				$(listato).hide();
				}


   // $('.carousel').carousel({
     //   interval: 5000 //changes the speed
   // })
	
	$(function() {
	$( "#search-query" ).autoComplete({
			source: function( term, response ) {
				$.ajax({
					url: '<?php echo get_bloginfo('template_url') ?>/json/docenti-<?php echo ICL_LANGUAGE_CODE  ?>.json',
					cache: true,
					dataType: "json",
					 cache: false,
					//context: $(this.element[0]).parent().next(),
					data: {
						name_startsWith: term
					},
					success: function( data ) {
						var listing = "";
						var maxResults = 0;
						for (var i=0; i<data.list.length; i++) {
							if(data.list[i].docente_searchstring.toLowerCase().indexOf(term.toLowerCase()) > -1){
								if(maxResults > 30) {break;}
								listing += '<li><a href="'+data.list[i].docente_permalink+'" class="item">'+data.list[i].docente_cognome+' ';
								listing += data.list[i].docente_nome+'<br><span class="insegnamento">'+data.list[i].docente_insegnamenti+'</span></a></li>';
								maxResults++;
							}
						}
						if(maxResults===0){
							$('#live-search-output').html('');
						} else {
							$('#live-search-output').html('<div class="live-search-results"><ul>'+listing+'</ul></div>').show();;
						}

					}, error: function( data ) {
					console.log("err",data);
					}
				});
			},
			minLength: 5
		});
		$( "#live_search").blur(function() {
			listato = $('#live-search-output');
				setTimeout(hideList,500);
		}).focus(function(){
			if($("#live-search-output .searchResult").length>0) {
				$('#live-search-output').show();
			}
    });
			});	
	
</script>
<?php get_footer(ICL_LANGUAGE_CODE); ?>