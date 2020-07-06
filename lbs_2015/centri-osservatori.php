<?php
/*
Template Name: Osservatori - Executive Compensation
*/
get_header(2017); 
?>


<?php  $titolo_centro = array();
$titolo_centro['it'] = ' OSSERVATORI';
$titolo_centro['en'] = 'OBSERVATORIES';
?>

<div class="item-centre"><img src="<?php echo site_url() ?>/wp-content/uploads/2017/04/AgevolazioniServizi.jpg" alt="<?php the_title()?>" >
  <div class="container">
    <div class="centre-caption centre">
      <h1>Executive Compensation</h1>
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
        
          <?php if (is_page('19810')) { ?>
          <?php get_template_part('hr'); ?>
           <?php } ?>
        
      </div>
    </main>
    <div id="sidebar-menu-lab" class="col-md-3 columns  space col-xs-12">
     
 
     
<?php 
  
  	      wp_nav_menu(
  		      array(
  		
  			'menu' => 'Executive Compensation'
  		      )
  	     );
?>
    </div>
    <aside id="sidebar" class="col-lg-3 col-sm-12 space">
     
      <div  class="block">
        <div class="content row"> 
         <h2><?php echo $contatti[ICL_LANGUAGE_CODE]; ?></h2>
         
			<p class="title"><strong>LUISS Business School</strong></p>
         
        <p> Villa Blanc,
          Via Nomentana, 216 - 00162  <br />
          Roma, Italia <br />
          Tel. +39 06 852251 <br />
        </p>
          
           
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
