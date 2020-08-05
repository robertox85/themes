<?php
/*
Template Name: Info Utili interna
*/
get_header(2017);
?>
<?php
$titolo_centro       = array();
$titolo_centro['it'] = ' Informazioni Utili';
$titolo_centro['en'] = 'Useful information';
?>

<div class="item-centre"><img src="<?php echo site_url() ?>/wp-content/uploads/2017/06/Campus_etc.jpg" alt="<?php
the_title();
?>" >
  <div class="container">
    <div class="centre-caption-info centre">
      <h1><?php
echo the_title();
?></h1>
      <h2> <?php
echo $titolo_centro[ICL_LANGUAGE_CODE];
?> </h2>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <main id="main" class="site-main centre">
      <div id="page-content" class="col-md-9 columns  space">
        <?php
while (have_posts()):
    the_post();
    $post_id = get_the_ID();
?>
       <?php
    the_content('');
?>
       
       
      
        <?php
endwhile; // end of the loop. 
?>
    
    <p> <?php if (is_page("attivita-culturali-luiss")) { ?>
          <?php get_template_part('attivitarss'); ?>
          <?php } ?></p>
    
     <p> <?php
    edit_post_link('<strong>Modifica Pagina</strong>', '');
?></p>
     </div>
    </main>
    <div id="sidebar-menu-centro" class="col-md-3 columns  space col-xs-12">
      
      
      <?php
$centro       = array();
$centro['it'] = 'INFORMAZIONI UTILI';
$centro['en'] = 'USEFUL INFORMATION';
?>
 
 
       <?php
$link_centro       = array();
$link_centro['it'] = '/agevolazioni-e-servizi/';
$link_centro['en'] = '/en/service-facilities/';
?>
 
 
 <h2 ><a  class=" white-style" title="<?php
echo $centro[ICL_LANGUAGE_CODE];
 ?>" href="<?php
echo $link_centro[ICL_LANGUAGE_CODE];
?>" ><?php
echo $centro[ICL_LANGUAGE_CODE];
 ?> </a></h2>
     
      <?php
if (ICL_LANGUAGE_CODE == 'it'):
?> 
     
<?php
    wp_nav_menu(array(
        'menu' => 'Informazioni Utili'
    ));
?>

<?php
elseif (ICL_LANGUAGE_CODE == 'en'):
?>
  
 <?php
    wp_nav_menu(array(
        'menu' => 'Useful information'
    ));
?>
 
 
<?php
endif;
?> 
   
    
    </div>
    
     <?php 
		$contatti = array();
		$contatti['it'] = 'Contatti';
		$contatti['en'] = "Contact Information";
?>
    
    
    <aside id="sidebar" class="col-lg-3 col-sm-12 space">
     
      <div  class="block">
        <div class="content row"> 
         <h2><?php echo $contatti[ICL_LANGUAGE_CODE]; ?></h2>
         
			<p class="title"><strong>LUISS Business School</strong></p>
         
        <p> Villa Blanc,
          Via Nomentana, 216 - 00162 Roma <br />
          Roma, Italia <br />
          Tel. +39 06 852251 <br />

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

