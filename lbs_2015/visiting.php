<?php
/*
Template Name: Visiting
*/
get_header(2017); 
?>

<header id="content-title" class="wide-row">
  <div class="container">
    <div class="row">
      <h1 class="col-md-7"><?php echo the_title(); ?></h1>
    </div>
    <!--END .row --> 
  </div>
  <!--END .container --> 
</header>

    <main id="main" class="site-main faculty-cards cards" role="main">
    
    
    
        <?php 
		
$docente = sanitize_GET_param($_GET['docente'])  ? sanitize_GET_param($_GET['docente']) : '';		
		 
$cat=array();	 		
$cat['it']=144;
$cat['en']=146;

$search_results_label=array();	 		
$search_results_label['it']='Risultati ricerca';
$search_results_label['en']='Search Results';

if ($docente=='') {

	 
	 
	 $args = array(
	'posts_per_page'   => -1,
	'offset'           => 0,
	'orderby'          => 'title',
	'order'            => 'ASC',
	'cat'              => $cat[ICL_LANGUAGE_CODE],
	'post_type'        => 'page',
	'post_status'      => 'publish',
	'meta_key'		   => 'cognome',
	'orderby'		   => 'meta_value',
	'order' => 'ASC',
	'suppress_filters' => true );
	 
$docenti =  get_posts($args);
$letters = range('A', 'Z');
$letters_active=array();
$letters_active[]='A';	 
if (!(empty($docenti))) {
$first_letter = 'B'; 

$docenti_list = '<div class="az-chapter wide-row" id="letter-'.substr($first_letter,0,1).'">
		<div class="container">
		<header class="row">
		<h2>'.substr($first_letter,0,1).'</h2>
		</header>
		</div>
	</div>
	<div class="container">
  <div class="row">';

$d = 0;

foreach($docenti as $docente )  {
$d++;	
$docente_cognome = get_post_meta($docente->ID, 'cognome',true);	 

$img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $docente->post_title,
);

if (substr($docente_cognome,0,1) != $first_letter ) {	
$first_letter = substr($docente_cognome,0,1);
$letters_active[]=$first_letter;	 
$docenti_list .= '</div> <!--END .container-->
</div> <!--END .row-->
	<div class="az-chapter wide-row" id="letter-'.substr($first_letter,0,1).'">
		<div class="container">
		<header class="row">
		<h2>'.substr($first_letter,0,1).'</h2>
		</header>
		</div>
	</div>
<div class="container">
  <div class="row">';
 }   
$docenti_list .='<div class="col-lg-4 columns nopadding">
      <div class="medium">
        <article class="docente">
        <a href="'.get_permalink($docente->ID).'" title="'.$docente->post_title.'">'.get_the_post_thumbnail($docente->ID, 'thumbnail',$img_attr).'
		<div class="text">
           
            <h3 class="headline nome">'.$docente->post_title.'</h3>
         
             <ul class="docente-features">
            <li class="classificazione">'.get_post_meta($docente->ID, 'classificazione', true).'</li>
            <li class="email">'.get_post_meta($docente->ID, 'email', true).'</li>
            </ul>
           
          </div>
          </a> 
          </article>
      </div><!--END .medium-->
    </div><!--END .col-lg-4 columns nopadding-->';

 } // END foreach   <li class="insegnamento">'.get_post_meta($docente->ID, 'insegnamento', true).'</li>
 
 
$docenti_list .='</div> <!--END .container-->
</div> <!--END .row-->';
 
 ?>

 <div class="wide-row nav-alphabet">
		<div class="container">
		<nav class="row ">
 <ul>
 <?php foreach($letters as $letter )  { 
 
 if (in_array($letter, $letters_active)) {
	$class ='';
	$link = '#letter-'. $letter;
 } else {
	$class =' class="disabled" ';
	$link = 'javascript:void(0);';	 
 }
 
 ?>
 <li <?php echo $class ?>><a href="<?php echo $link ?>" ><?php echo $letter ?></a></li>
 <?php  } ?>
 </ul>
 </nav> 
 </div> <!--END .container-->
</div> <!--END .wide-row-->


 
<?php  echo  $docenti_list;?>

<?php } // END if ?>
      
   <?php } else {
	   
	   //search results
	  
   $args = array(
	'posts_per_page'   => 500,
	'offset'           => 0,
	'orderby'          => 'title',
	'order'            => 'ASC',
	'cat'              => $cat[ICL_LANGUAGE_CODE],
	'post_type'        => 'page',
	'post_status'      => 'publish',
	'docente_search_query' => $docente,
	'meta_key'		   => 'cognome',
	'orderby'		   => 'meta_value',
	'order' => 'ASC',
	'suppress_filters' =>false );
	
	

add_filter('posts_where', 'title_filter', 10, 2 );	 
$docenti =  get_posts($args);
remove_filter( 'posts_where', 'title_filter', 10, 2 );	 
if (!(empty($docenti))) {


echo '<div class="wide-row" >
		<div class="container">
		<header class="row">
		<h2>'.$search_results_label[ICL_LANGUAGE_CODE].'</h2>
		</header>
		</div>
	</div>
	<div class="container">
  <div class="row">';

$d = 0;

foreach($docenti as $docente )  {
$d++;	
	 
	 ?>
 




     
<div class="col-lg-4 columns nopadding">
      <div class="medium">
        <article class="docente">
        <a href="<?php echo get_permalink($docente->ID) ?>" title="<?php echo $docente->post_title ?>"> 
        <?php 
	$img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $docente->post_title,
);
	echo get_the_post_thumbnail($docente->ID, 'thumbnail',$img_attr);
	
	?>
          <div class="text">
           
            <h3 class="headline"><?php echo $docente->post_title ?></h3>
         
           <ul class="docente-features">
            <li class="insegnamento"><?php echo get_post_meta($docente->ID, 'insegnamento', true); ?></li>
            <li class="classificazione"><?php echo get_post_meta($docente->ID, 'classificazione', true); ?></li>
            <li class="email"><?php echo get_post_meta($docente->ID, 'email', true); ?></li>
            </ul>
           
          </div>
          </a> 
          </article>
      </div><!--END .medium-->
    </div><!--END .col-lg-4 columns nopadding-->

 <?php } // END foreach ?>
</div> <!--END .container-->
</div> <!--END .row-->
<?php } // END if ?> 
 <?php } // END if ($docente=='') {  ?>  

    
    
      
    </main>
    <div id="menu-local" class="col-lg-2 col-sm-12 col-lg-pull-7">
    
    </div>
  </div>
  <!--END .row --> 
</div>
<!--END .container -->
<?php get_footer(2017); ?>
