<?php
/*
Template Name: Centri -  Gestione del Rischio in Sanità
*/
get_header(2017); 
?>

<?php  $titolo_centro = array();
$titolo_centro['it'] = 'OSSERVATORI';
$titolo_centro['en'] = 'COMPETENCE CENTRES';
?>

<div class="item-centre"><img src="<?php echo site_url() ?>/wp-content/uploads/2017/06/HealthCare.jpg" alt="<?php the_title()?>"  height="800">
  <div class="container">
    <div class="centre-caption centre">
 
       <h1> Osservatorio sulla Gestione del Rischio in Sanità
</h1>
        <h2><?php echo $titolo_centro[ICL_LANGUAGE_CODE]; ?></h2>
     
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <main id="main" class="site-main centre">
      <div id="page-content" class="col-md-9 columns  space">
       
         <h3> <?php echo the_title(); ?> </h3>
     
        <?php while ( have_posts() ) : the_post(); 
		$post_id = get_the_ID();?>
        <?php the_content(''); ?>
        
        <p> <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
      
        <?php endwhile; // end of the loop. ?>
      </div>
    </main>
    <div id="sidebar-menu-lab" class="col-md-3 columns  space col-xs-12">
     
 
     
<?php 
  
  	      wp_nav_menu(
  		      array(
  		
  			'menu' => 'Public Administration'
  		      )
  	     );
?>
    </div>
    <aside id="sidebar" class="col-lg-3 col-sm-12 space">
     
      <div  class="block">
        <div class="content row"> 
         <h2><?php echo $contatti[ICL_LANGUAGE_CODE]; ?></h2>
         
			<h2 class="title"><strong>Competence Center Public Administration, Healthcare and No-Profit
</strong></h2>
         
        <p>LUISS Business School<br>
          Via Nomentana 216 – 00162 Roma<br>
          +39 06 85222394/241/220<br>
          <a href="mailto:sanita@luiss.it">sanita@luiss.it</a><br>
          <a href="mailto:pa@luiss.it">pa@luiss.it</a></p>
          
           
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
