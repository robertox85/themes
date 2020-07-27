<?php
    /**
     * Template Name: Curriculum
     * @file page-curriculum.php
     */
//get_main_site_header();
get_header();
while ( have_posts() ) : the_post();  ?>
 
  <style type="text/css"> 
  .mobileShow {display: none;} 

  /* Smartphone Portrait and Landscape */ 
  @media only screen 
    and (min-device-width : 320px) 
    and (max-device-width : 480px){ 
      .mobileShow {display: inline;}
	  .all {width: 100%; margin-top: 5%; text-transform: uppercase}	
	
  }
</style>

   
    
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

<?php dynamic_sidebar( 'Area-Header' ); ?>

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
 
       
    
        
 <?php //if ( get_field( 'struttura_programma_titolo' ) ): ?>

<!--<h3><?php //the_field('struttura_programma_titolo'); ?></h3>-->

<?php//  else:?>

<!-- <h3>Struttura del programma</h3>-->

<?php // endif;?>
        
         
                   
                   
                   
                   
         
         
         
<!--       <div class="col-md-3 col-sm-3 nopadding">-->
       <?php // $image = get_field('struttura_del_programma_picture');
	  // if( !empty($image) ): ?>

<!--	<img src="<?php  // echo $image['url']; ?>" alt="<?php // echo $image['alt']; ?>" class="img-responsive" />-->

<?php // endif; ?> 
       
<!--
       </div>
        <div class="col-md-1 col-sm-1 nopadding"></div>
-->
       <div class="col-md-12 col-sm-12"><?php the_field('struttura_del_programma_description'); ?></div>
		<div class="clearfix"></div>
     
     


     <div class="row">
     
      <?php  if(get_field('titolo_extra_ind')) { ?>
 
  
      <h3><?php the_field('titolo_extra_ind'); ?></h3>
      
     
   
 
 
<?php } ?>

<?php  if(get_field('extra_ind')) { ?>

    
<p><?php the_field('extra_ind'); ?></p>
  
<?php } ?>
	
		  </div>



 
  <div class="row">
  
   <!--<h3 class="h3-master">Curriculum</h3>  -->
  


  
  <div class="panel-group accordion" id="accordion-curriculum" role="tablist" aria-multiselectable="true"> 
  
  
    <?php  if(get_field('titolo_induction_week')) { ?>
  
        <div class="panel-accordion">
          <div class="panel-heading" role="tab" id="heading33">
            <h4 class="panel-title">
              <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-33" aria-expanded="false" aria-controls="accordion-content-33" class="accordion-toggle class-test">
            <?php the_field('titolo_induction_week'); ?>
              </a>
            </h4>
          </div>
          <div id="accordion-content-33" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading33">
            <div class="panel-body">
                <?php the_field('induction_week'); ?>
            </div>
          </div>
        </div> 
        
    <?php } ?>
  
  
  
  
  
      <div class="panel-accordion">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-1" aria-expanded="true" aria-controls="accordion-content-1" class="accordion-toggle">
              <?php the_field('title_core_courses'); ?>
            </a>
          </h4>
        </div>
        <div id="accordion-content-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            
            <?php the_field('core_courses'); ?>
            
            
          </div>
        </div>
      </div>
  
  
      <div class="panel-accordion">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-2" aria-expanded="false" aria-controls="accordion-content-2" >
          <?php the_field('title_specialization_courses'); ?>
            </a>
          </h4>
        </div>
        <div id="accordion-content-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
              <?php the_field('specialization_courses'); ?>
          </div>
        </div>
      </div>
  
  
      <?php  if(get_field('title_laboratori')) { ?>
    
        <div class="panel-accordion">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-3" aria-expanded="false" aria-controls="accordion-content-3" class="accordion-toggle class-test">
            <?php the_field('title_laboratori'); ?>
              </a>
            </h4>
          </div>
          <div id="accordion-content-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                <?php the_field('laboratori'); ?>
            </div>
          </div>
        </div> 
  
      <?php } ?>
  
   
  
  
 <?php  if(get_field('title_extra')) { ?>
 
  <div class="panel-accordion">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
          <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-4" aria-expanded="false" aria-controls="accordion-content-4" class="accordion-toggle class-test">
        <?php the_field('title_extra'); ?>
          </a>
        </h4>
      </div>
 
 
      <div id="accordion-content-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
      <?php the_field('extra'); ?>
            </div>
          </div></div> 
      <?php } ?>
  

    <?php  if(get_field('titolo_extra_1')) { ?>
 
      <div class="panel-accordion">
        <div class="panel-heading" role="tab" id="headingThree_1">
          <h4 class="panel-title">
            <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-5" aria-expanded="false" aria-controls="accordion-content-5" class="accordion-toggle class-test">
          <?php  the_field('titolo_extra_1'); ?>
            </a>
          </h4>
        </div>
 
 
    <?php   } ?>

    <?php  if(get_field('extra_1')) { ?>
          <div id="accordion-content-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1">
                <div class="panel-body">
                  <?php the_field('extra_1'); ?>
                </div>
            </div>
          </div>
    <?php   } ?>


  <?php  if(get_field('titolo_extra_2')) { ?>
 
        <div class="panel-accordion">
          <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
              <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-19" aria-expanded="false" aria-controls="accordion-content-19" class="accordion-toggle class-test">
            <?php the_field('titolo_extra_2'); ?>
              </a>
            </h4>
          </div>
 
 
    <?php } ?>

  
<?php  if(get_field('extra_2')) { ?>
        
      <div id="accordion-content-19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
          <div class="panel-body">
              <?php the_field('extra_2'); ?>
          </div>
        </div> 
      </div>


  <?php } ?>
  

 
  
  
  
  
  
  
  
  
   <?php  if(get_field('titolo_extra_3')) { ?>
 
        <div class="panel-accordion">
          <div class="panel-heading" role="tab" id="headingFive">
            <h4 class="panel-title">
              <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-6" aria-expanded="false" aria-controls="accordion-content-6" class="accordion-toggle class-test">
            <?php the_field('titolo_extra_3'); ?>
              </a>
            </h4>
        </div>
 
 
  <?php } ?>




<?php  if(get_field('extra_3')) { ?>
    
  
  
    <div id="accordion-content-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
        <?php the_field('extra_3'); ?>
      </div>
      </div>
    </div>



<?php } ?>

  




 <?php  if(get_field('titolo_extra_4')) { ?>
 
      <div class="panel-accordion">
        <div class="panel-heading" role="tab" id="headingsix">
          <h4 class="panel-title">
            <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-7" aria-expanded="false" aria-controls="accordion-content-7" class="accordion-toggle class-test">
          <?php the_field('titolo_extra_4'); ?>
            </a>
          </h4>
        </div>
 
 
<?php } ?>

<?php  if(get_field('extra_4')) { ?>
      <div id="accordion-content-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
          <div class="panel-body">
              <?php the_field('extra_4'); ?>
          </div>
    </div></div>
<?php } ?>





<?php  if(get_field('titolo_extra_5')) { ?>
 
  <div class="panel-accordion">
    <div class="panel-heading" role="tab" id="headingsix">
      <h4 class="panel-title">
        <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-8" aria-expanded="false" aria-controls="accordion-content-8" class="accordion-toggle class-test">
      <?php the_field('titolo_extra_5'); ?>
        </a>
      </h4>
    </div>
 
 

<?php } ?>

<?php  if(get_field('extra_5')) { ?>
    <div id="accordion-content-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
      <div class="panel-body">
          <?php the_field('extra_5'); ?>
      </div>
    </div></div>
<?php } ?>

  
<?php  if(get_field('titolo_extra_6')) { ?>
 
   <div class="panel-accordion">
    <div class="panel-heading" role="tab" id="headingsix">
      <h4 class="panel-title">
        <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-9" aria-expanded="false" aria-controls="accordion-content-9" class="accordion-toggle class-test">
      <?php the_field('titolo_extra_6'); ?>
        </a>
      </h4>
    </div>
 
 
<?php } ?>

<?php  if(get_field('extra_6')) { ?>
    <div id="accordion-content-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
      <div class="panel-body">
        <?php the_field('extra_6'); ?>
      </div>
    </div></div>
<?php } ?>    
  
 
 
 
<?php  if(get_field('titolo_extra_7')) { ?>
 
  <div class="panel-accordion">
    <div class="panel-heading" role="tab" id="headingsix">
      <h4 class="panel-title">
        <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-10" aria-expanded="false" aria-controls="accordion-content-10" class="accordion-toggle class-test">
      <?php the_field('titolo_extra_7'); ?>
        </a>
      </h4>
    </div>
 
 
<?php } ?>

<?php  if(get_field('extra_7')) { ?>
    <div id="accordion-content-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
      <div class="panel-body">
        <?php the_field('extra_7'); ?>
      </div>
    </div></div>
<?php } ?> 
 
 
 
 
<?php  if(get_field('titolo_extra_8')) { ?>
 
  <div class="panel-accordion">
    <div class="panel-heading" role="tab" id="headingsix">
      <h4 class="panel-title">
        <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-11" aria-expanded="false" aria-controls="accordion-content-11" class="accordion-toggle class-test">
      <?php the_field('titolo_extra_8'); ?>
        </a>
      </h4>
    </div>
 
 
<?php } ?>

<?php  if(get_field('extra_8')) { ?>
    <div id="accordion-content-11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
      <div class="panel-body">
        <?php the_field('extra_8'); ?>
      </div>
    </div></div>
<?php } ?> 
 
  
  
<?php  if(get_field('titolo_extra_9')) { ?>
 
  <div class="panel-accordion">
    <div class="panel-heading" role="tab" id="headingsix">
      <h4 class="panel-title">
        <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-12" aria-expanded="false" aria-controls="accordion-content-12" class="accordion-toggle class-test">
      <?php the_field('titolo_extra_9'); ?>
        </a>
      </h4>
    </div>
 
 
<?php } ?>

<?php  if(get_field('extra_9')) { ?>
    <div id="accordion-content-12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
      <div class="panel-body">
        <?php the_field('extra_9'); ?>
      </div>
    </div></div>
<?php } ?> 
 
  

<?php  if(get_field('titolo_extra_10')) { ?>
 
  <div class="panel-accordion">
    <div class="panel-heading" role="tab" id="headingsix">
      <h4 class="panel-title">
        <a class="collapsed accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-13" aria-expanded="false" aria-controls="accordion-content-13" class="accordion-toggle class-test">
          <?php the_field('titolo_extra_10'); ?>
        </a>
      </h4>
    </div>
 
 
<?php } ?>

<?php  if(get_field('extra_10')) { ?>
    <div id="accordion-content-13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
      <div class="panel-body">
          <?php the_field('extra_10'); ?>
      </div>
    </div></div>  </div>
<?php } ?> 
       
       
      
     <p><?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
     
</main>
    <aside  class="col-lg-3 col-md-4 col-sm-12 space sidebar-master">
     
        <?php get_sidebar(); ?>
        
     
    
    </aside>
      <div class="col-md-1 col-sm-1 nopadding"></div>
       <div class="col-md-12 col-sm-12"><?php the_field('javascript'); ?></div>
		<div class="clearfix"></div>
  </div>
  <!--END .row --> 
  
  </div>
<!--END .container --> 
</main>
<?php endwhile; // end of the loop. ?>
<?php 
get_main_site_footer();
?>
