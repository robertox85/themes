<?php
/*
Template Name: Centri - Big Data
*/
get_header(2017); 
?>

<?php  $titolo_centro = array();
$titolo_centro['it'] = ' Centri di Competenza';
$titolo_centro['en'] = 'COMPETENCE CENTRES';
?>

<div class="item-centre"><img src="<?php echo site_url() ?>/wp-content/uploads/2017/06/BigData.jpg" alt="<?php the_title()?>" >
  <div class="container">
    <div class="centre-caption centre">
    <h1>Big Data</h1>
       <h2><?php echo $titolo_centro[ICL_LANGUAGE_CODE]; ?></h2>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <main id="main" class="site-main centre">
      <div id="page-content" class="col-md-9 columns  space">
       
          <h3><?php echo the_title(); ?></h3>

       
       
        <?php while ( have_posts() ) : the_post(); 
		$post_id = get_the_ID();?>
        <?php the_content(''); ?>
        
        <p> <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
      
        <?php endwhile; // end of the loop. ?>
      </div>
    </main>
    <div id="sidebar-menu-lab" class="col-md-3 columns  space col-xs-12">
     
 
     
  <?php
if (ICL_LANGUAGE_CODE == 'it'):
?> 
     
<?php
    wp_nav_menu(array(
        'menu' => 'Big data CITA'
    ));
?>

<?php
elseif (ICL_LANGUAGE_CODE == 'en'):
?>
  
 <?php
    wp_nav_menu(array(
        'menu' => 'Big data CIEN'
    ));
?>
 
 
<?php
endif;
?> 
    </div>
    <aside id="sidebar" class="col-lg-3 col-sm-12 space">
     
      <div  class="block">
        <div class="content row"> 
         <h2><?php echo $contatti[ICL_LANGUAGE_CODE]; ?></h2>
         
			<p class="title"><strong>LUISS Business School</strong></p>
         
        <p> Villa Blanc,
          Via Nomentana, 216 - 00162 Roma <br />
          Roma, Italia </p>
          
           
             </div>
      </div>
 
    </aside>
  </div>
  <!--END .row --> 
</div>
<!--END .container -->
<?php 
get_footer(2017);
?>
