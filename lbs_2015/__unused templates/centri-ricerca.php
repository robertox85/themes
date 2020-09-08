<?php
/*
Template Name: Centri - People Management
*/
get_header(2017); 
?>
<?php  $titolo_centro = array();
$titolo_centro['it'] = ' Centri di Competenza e Lab';
$titolo_centro['en'] = 'Knowledge Centre & Lab';
?>

<div class="item-centre"><img src="<?php echo site_url() ?>/wp-content/uploads/2017/06/Campus_etc.jpg" alt="<?php the_title()?>" >
  <div class="container">
    <div class="centre-caption centre">
      <h1><?php echo the_title(); ?></h1>
      <h2> <?php echo $titolo_centro[ICL_LANGUAGE_CODE]; ?> </h2>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <main id="main" class="site-main centre">
      <div id="page-content" class="col-md-9 columns  space">
        <?php while ( have_posts() ) : the_post(); 
		$post_id = get_the_ID();?>
        <?php the_content(''); ?>
        
        <p> <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
      
        <?php endwhile; // end of the loop. ?>
      </div>
    </main>
    <div id="sidebar-menu-lab" class="col-md-3 columns  space col-xs-12">
      <?php  $centro = array();
	    $centro['it'] = '#';
		$centro['en'] = '#';
?>
 
     
<?php 
  //if ( is_page(array(4828,4831, 3666, 3726)) ) {
  	      wp_nav_menu(
  		      array(
  		
  			'menu' => 'Centri'
  		      )
  	     );
?>
<?php 

// }  elseif (is_page(array(3729,3669))) { 
  // wp_nav_menu(array(
  	//	'menu' => 'Roma'
  		//      )
  	    // );
  
  
  ?>
      <?php //} ?>
      <?php // wp_nav_menu( array( 'menu' => 'Centri' )); ?>
    </div>
    <aside id="sidebar" class="col-lg-3 col-sm-12 space">
     
      <div  class="block">
        <div class="content row"> 
         <h2><?php echo $contatti[ICL_LANGUAGE_CODE]; ?></h2>
         
			<p class="title"><strong>LUISS Business School</strong></p>
         
        <p> Villa Blanc,
          Via Nomentana, 216 - 00162 Roma <br />
          Roma, Italia <br />
          Tel. +39 06 852251 <br />
          Fax +39 06 85222400 <br />
          Email: <a href="mailto:luissbs@luiss.it" class="">luissbs@luiss.it </a></p>
          
           
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
