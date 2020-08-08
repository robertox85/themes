<?php
/*
Template Name: Corporate Immagini
*/

 	$no_1 = get_field('immagine_1');
	$no_2 = get_field('immagine_2');
	$no_3 = get_field('immagine_3');
	$no_4 = get_field('immagine_4');
	$no_5 = get_field('immagine_5');
	$no_6 = get_field('immagine_6');
    $no_7 = get_field('immagine_7');
	$no_8 = get_field('immagine_8');
	$no_9 = get_field('immagine_9');
	$no_10 = get_field('immagine_10');
	$no_11 = get_field('immagine_11');
	$no_12 = get_field('immagine_12');
	$no_13 = get_field('immagine_13'); 
	$no_14 = get_field('immagine_14'); 
	$no_15 = get_field('immagine_15'); 
	$no_16 = get_field('immagine_16'); 

get_header(2017); 
?>

<header id="content-title" class="wide-row">
  <div class="container">
    <div class="row">
      <div class="sommario col-md-8">
        <h1><?php echo the_title(); ?></h1>
      </div>
    </div>
    <!--END .row --> 
  </div>
  <!--END .container --> 
</header>
<div class="container">
  <div class="row">
    <main id="main" class="site-main w-100" role="main">
      <div id="page-content" class="col-md-12 columns  space">
       
       <div class="row">
<div class="col-md-3 col-xs-6"><img class="img-responsive" src="<?php echo html_entity_decode($no_1); ?>" alt="Corporate Partner" /></div>
<div class="col-md-3 col-xs-6"><img class="img-responsive" src="<?php echo html_entity_decode($no_2); ?>" alt="Corporate Partner" /></div>
<div class="col-md-3 col-xs-6"><img class="img-responsive" src="<?php echo html_entity_decode($no_3); ?>" alt="Corporate Partner" /></div>
<div class="col-md-3 col-xs-6"><img class="img-responsive" src="<?php echo html_entity_decode($no_4); ?>" alt="Corporate Partner" /></div>
</div>
<div class="row">
<div class="col-md-3 col-xs-6"><img class="img-responsive" src="<?php echo html_entity_decode($no_5); ?>" alt="Corporate Partner" /></div>
<div class="col-md-3 col-xs-6"><img class="img-responsive" src="<?php echo html_entity_decode($no_6); ?>" alt="Corporate Partner" /></div>
<div class="col-md-3 col-xs-6"><img class="img-responsive" src="<?php echo html_entity_decode($no_7); ?>" alt="Corporate Partner" /></div>
<div class="col-md-3 col-xs-6"><img class="img-responsive" src="<?php echo html_entity_decode($no_8); ?>" alt="Corporate Partner" /></div>
</div>
       
<div class="row">
<div class="col-md-3 col-xs-6"><img class="img-responsive" src="<?php echo html_entity_decode($no_9); ?>" alt="Corporate Partner" /></div>
<div class="col-md-3 col-xs-6"><img class="img-responsive" src="<?php echo html_entity_decode($no_10); ?>" alt="Corporate Partner" /></div>
<div class="col-md-3 col-xs-6"><img class="img-responsive" src="<?php echo html_entity_decode($no_11); ?>" alt="Corporate Partner" /></div>
<div class="col-md-3 col-xs-6"><img class="img-responsive" src="<?php echo html_entity_decode($no_12); ?>" alt="Corporate Partner" /></div>
</div>
      
<div class="row">
<div class="col-md-3 col-xs-6"><img class="img-responsive" src="<?php echo html_entity_decode($no_13); ?>" alt="Corporate Partner" /></div>
<div class="col-md-3 col-xs-6"><img class="img-responsive" src="<?php echo html_entity_decode($no_14); ?>" alt="Corporate Partner" /></div>
<div class="col-md-3 col-xs-6"><img class="img-responsive" src="<?php echo html_entity_decode($no_15); ?>" alt="Corporate Partner" /></div>
<div class="col-md-3 col-xs-6"><img class="img-responsive" src="<?php echo html_entity_decode($no_16); ?>" alt="Corporate Partner" /></div>
</div>           
       
      <p> <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
      </div>
      
         
      
    </main>
  </div>
  <!--END .row --> 
</div>
<!--END .container -->
<?php get_footer(2017); ?>