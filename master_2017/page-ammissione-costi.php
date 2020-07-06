<?php
    /**
     * Template Name: Ammissione e Costi
     * @file page-ammissione-costi.php
     */
get_main_site_header();
while ( have_posts() ) : the_post();  ?>
  <div class="container">
	<header id="header-master" class="row">

    <div class="row">
      <div class="col-md-4">
         <span class="master-name"><?php bloginfo('name'); ?></span>
         <h1><?php the_title () ?></h1>
          <p><?php echo get_field('paragrafo') ?></p>
      </div>
       <div class="col-md-8">
   <?php 
   $image = get_field('images');
   
if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />

<?php endif; ?> 
      </div>
    </div>
    <div class="clearfix"></div>
    <!--END .row --> 

 <div class="menu-master-toggle-container">
<span class="navbar-toggle"  data-toggle="collapse" data-target="#menu-master-container" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</span>
</div>
</header>
  </div>
  <!--END .container --> 
<div class="container">
<div class="row">
<nav class="navbar navbar-default navbar-master">

<?php wp_nav_menu(array(
'menu' => 'Master',
'container_id'    => 'menu-master-container',
'container_class'    => 'menu-master-container navbar-collapse collapse',
'container' => 'div',
'menu_class' => 'menu-master nav navbar-nav',
));           ?>
</nav>
</div>
</div>

<div class="container">
  <div class="row">
    <main id="main" class="site-main site-master col-lg-9 col-md-8" role="main">
      <div id="page-content" class="columns  space">
      
      <h2><?php echo the_title(); ?></h2>
 
 <h3><?php the_field('titolo_processo_di_selezione'); ?></h3>
   <p> <?php the_field('processo_di_selezione'); ?>   </p>
   


   
   
   
   
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
 <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
     
     
 <?php  if(get_field('titolo_test_di_selezione')) { ?>
 
  <div class="panel-accordion">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-5" aria-expanded="false" aria-controls="accordion-content-5" class="accordion-toggle class-test">
      <?php the_field('titolo_test_di_selezione'); ?>
        </a>
      </h4>
    </div>
 
 
<?php } ?>

<?php  if(get_field('test_di_selezione')) { ?>
<div id="accordion-content-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
<?php the_field('test_di_selezione'); ?>
      </div>
    </div>
<?php } ?>
     
     
     
     
     
 <?php  if(get_field('titolo_accordion')) { ?>
 
  <div class="panel-accordion">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-3" aria-expanded="false" aria-controls="accordion-content-3" class="accordion-toggle class-test">
      <?php the_field('titolo_accordion'); ?>
        </a>
      </h4>
    </div>
 
 
<?php } ?>

<?php  if(get_field('accordion')) { ?>
<div id="accordion-content-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
<?php the_field('accordion'); ?>
      </div>
    </div>
<?php } ?>
  
  
  
  

    
     
 <?php  if(get_field('titolo_accordion_2')) { ?>
 
  <div class="panel-accordion">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-4" aria-expanded="false" aria-controls="accordion-content-4" class="accordion-toggle class-test">
      <?php the_field('titolo_accordion_2'); ?>
        </a>
      </h4>
    </div>
 
 
<?php } ?>

<?php  if(get_field('accordion_2')) { ?>
<div id="accordion-content-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
<?php the_field('accordion_2'); ?>
      </div>
    </div>
<?php } ?>
  
  
  
  
  
   <?php  if(get_field('titolo_accordion_3')) { ?>
 
  <div class="panel-accordion">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-6" aria-expanded="false" aria-controls="accordion-content-6" class="accordion-toggle class-test">
      <?php the_field('titolo_accordion_3'); ?>
        </a>
      </h4>
    </div>
 
 
<?php } ?>

<?php  if(get_field('accordion_3')) { ?>
<div id="accordion-content-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
<?php the_field('accordion_3'); ?>
      </div>
    </div>
<?php } ?>
  
  
</div>
  </div>
  
  
      </div>
     <p><?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
</main>
    <aside  class="col-lg-3 col-md-4 col-sm-12 space sidebar-master">
     
        <?php get_sidebar(); ?>
        
     
    
    </aside>
  </div>
  <!--END .row --> 
</div>
<!--END .container --> 
<?php endwhile; // end of the loop. ?>
<?php 
get_main_site_footer();
?>
