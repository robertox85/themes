<?php
/*
Template Name: Webinar 2020
*/
get_header( 2019 );
?>
<style type="text/css">
.triangle_tax_1::after {
    content: '';
    height: 0;
    width: 0;
    position: absolute;
    right: 15px;
    bottom: 0;
    border-left: 18px solid transparent;
    border-top: 18px solid transparent;
    border-right: 18px solid #032d42;
    border-bottom: 18px solid #032d42;
}
.card {
    margin-top: 10px;
    box-sizing: border-box;
    border-radius: 2px;
    background-clip: padding-box;
    /* background-color: #3c3c3c; */
    min-height: 310px;
}
@media (max-width: 767px) {
.hidden-xs {
	display: none !important;
}
	.top	{
	margin-top: 4%;
	
}	
}	
</style>
---
<div class="container-fluid photo-page">
  <div class="titolo">
    <div class="container">
      <div class="row ">
        <h1 class="" style="color:#2a2a2a">
          <?php
          the_title();
          ?>
        </h1>
        <div class="row pipe_tax" style="padding-top: 2%;" >
          <div class="col-md-12 hidden-xs">
            <p class="hidden-xs"> <?php echo get_field('intro_webinar') ?> </p>
          </div>
        </div>
        <?php edit_post_link('<p><b>Modifica Pagina</b></p>', ''); ?>
      </div>
    </div>
  </div>
</div>
</div>
<section class="events-cards cards">
  <div class="archive-month wide-row" id="month-05-2020">
    <div class="container">
      <div class="row">
        <h2 class="block-title h2"> <?php echo get_field('mese') ?></h2>
      </div>
    </div>
  </div>
  <!--END .wide-row-->
  
  <section class="events-cards cards hidden-xs">
    <div class="container" >
      <div class="row items">
        <div class="col-md-1 columns  space">
          <h3>Data</h3>
        </div>
        <div class="col-md-3 columns  space programma">
          <h3>Guest</h3>
        </div>
        <div class="col-md-3 columns  space">
          <h3>Titolo</h3>
        </div>
        <div class="col-md-3 columns  space">
          <h3>Programmi executive </h3>
        </div>
        <div class="col-md-2 columns  space">
          <h3>Registrati</h3>
        </div>
      </div>
      <!--END .row --> 
      
    </div>
  </section>
	
	
	
	
  <div class="container">
	  
	   <?php if ( get_field( 'giorno_1' ) ): ?>
	  
    <div class="row top">
      <div class="col-md-1 col-xs-3">
        <div class="event-date"><span class="day"><?php echo get_field('giorno_1') ?></span> <span class="month"><?php echo get_field('mese_1') ?></span> <span class="year"><?php echo get_field('anno_1') ?></span></div>
      </div>
      <div class="col-md-3 col-xs-9 programma" style="min-height:125px">
        <h3 itemprop="name headline" class="home-news-headline"> <?php echo get_field('guest_1') ?> </h3>
      </div>
      <div class="col-md-3 col-xs-6">
        <p> <strong><?php echo get_field('titolo_1') ?></strong></p>
      </div>
    
      <div class="col-md-3 col-xs-12">
        <p class="programma"><?php echo get_field('programmi_executive_1') ?>  </p>
      </div>
      <div class="col-md-2 col-xs-6">
        <p class="programma"><a  href="<?php echo get_field('registrati_1') ?>" title="" class="button">Registrati</a> </p>
      </div>
    </div>
    <hr>
  <?php  endif;?>
	
	    <?php if ( get_field( 'giorno_2' ) ): ?>
	  
    <div class="row top">
      <div class="col-md-1 col-xs-3">
        <div class="event-date"><span class="day"><?php echo get_field('giorno_2') ?></span> <span class="month"><?php echo get_field('mese_2') ?></span> <span class="year"><?php echo get_field('anno_2') ?></span></div>
      </div>
      <div class="col-md-3 col-xs-9 programma" style="min-height:125px">
        <h3 itemprop="name headline" class="home-news-headline"> <?php echo get_field('guest_2') ?> </h3>
      </div>
      <div class="col-md-3 col-xs-6">
        <p> <strong><?php echo get_field('titolo_2') ?></strong></p>
      </div>
    
      <div class="col-md-3 col-xs-12">
        <p class="programma"><?php echo get_field('programmi_executive_2') ?>  </p>
      </div>
      <div class="col-md-2 col-xs-6">
        <p class="programma"><a  href="<?php echo get_field('registrati_2') ?>" title="" class="button">Registrati</a> </p>
      </div>
    </div>
   
    <hr>
  
	   <?php  endif;?>
	  
	  
	   <?php if ( get_field( 'giorno_3' ) ): ?>
	  
    <div class="row top">
      <div class="col-md-1 col-xs-3">
        <div class="event-date"><span class="day"><?php echo get_field('giorno_3') ?></span> <span class="month"><?php echo get_field('mese_3') ?></span> <span class="year"><?php echo get_field('anno_3') ?></span></div>
      </div>
      <div class="col-md-3 col-xs-9 programma" style="min-height:125px">
        <h3 itemprop="name headline" class="home-news-headline"> <?php echo get_field('guest_3') ?> </h3>
      </div>
      <div class="col-md-3 col-xs-6">
        <p> <strong><?php echo get_field('titolo_3') ?></strong></p>
      </div>
    
      <div class="col-md-3 col-xs-12">
        <p class="programma"><?php echo get_field('programmi_executive_3') ?>  </p>
      </div>
      <div class="col-md-2 col-xs-6">
        <p class="programma"><a  href="<?php echo get_field('registrati_3') ?>" title="" class="button">Registrati</a> </p>
      </div>
    </div>
   <hr>
	  
<?php  endif;?>

	  
 <?php if ( get_field( 'giorno_4' ) ): ?>
	  
    <div class="row top">
      <div class="col-md-1 col-xs-3">
        <div class="event-date"><span class="day"><?php echo get_field('giorno_4') ?></span> <span class="month"><?php echo get_field('mese_4') ?></span> <span class="year"><?php echo get_field('anno_4') ?></span></div>
      </div>
      <div class="col-md-3 col-xs-9 programma" style="min-height:125px">
        <h3 itemprop="name headline" class="home-news-headline"> <?php echo get_field('guest_4') ?> </h3>
      </div>
      <div class="col-md-3 col-xs-6">
        <p> <strong><?php echo get_field('titolo_4') ?></strong></p>
      </div>
    
      <div class="col-md-3 col-xs-12">
        <p class="programma"><?php echo get_field('programmi_executive_4') ?>  </p>
      </div>
      <div class="col-md-2 col-xs-6">
        <p class="programma"><a  href="<?php echo get_field('registrati_4') ?>" title="" class="button">Registrati</a> </p>
      </div>
    </div>
   <hr>
	  
	  <?php  endif;?>
	  
	  
 <?php if ( get_field( 'giorno_5' ) ): ?>
	  
    <div class="row top">
      <div class="col-md-1 col-xs-3">
        <div class="event-date"><span class="day"><?php echo get_field('giorno_5') ?></span> <span class="month"><?php echo get_field('mese_5') ?></span> <span class="year"><?php echo get_field('anno_5') ?></span></div>
      </div>
      <div class="col-md-3 col-xs-9 programma" style="min-height:125px">
        <h3 itemprop="name headline" class="home-news-headline"> <?php echo get_field('guest_5') ?> </h3>
      </div>
      <div class="col-md-3 col-xs-6">
        <p> <strong><?php echo get_field('titolo_5') ?></strong></p>
      </div>
    
      <div class="col-md-3 col-xs-12">
        <p class="programma"><?php echo get_field('programmi_executive_5') ?>  </p>
      </div>
      <div class="col-md-2 col-xs-6">
        <p class="programma"><a  href="<?php echo get_field('registrati_5') ?>" title="" class="button">Registrati</a> </p>
      </div>
    </div>
   <hr>
<?php  endif;?> 

  </div>
	
	
  <!--END .container events-cards cards-->
  </div>
  <!--END .row items--> 
</section>

   <?php if ( get_field( 'mese_02' ) ): ?>

<section class="events-cards cards">
  <div class="archive-month wide-row" id="month-05-2020">
    <div class="container">
      <div class="row">
        <h2 class="block-title h2"> <?php echo get_field('mese_02') ?></h2>
      </div>
    </div>
  </div>
  <!--END .wide-row-->
  
  <section class="events-cards cards hidden-xs">
    <div class="container" >
      <div class="row items">
        <div class="col-md-1 columns  space">
          <h3>Data</h3>
        </div>
        <div class="col-md-3 columns  space programma">
          <h3>Guest</h3>
        </div>
        <div class="col-md-3 columns  space">
          <h3>Titolo</h3>
        </div>
        <div class="col-md-3 columns  space">
          <h3>Programmi executive </h3>
        </div>
        <div class="col-md-2 columns  space">
          <h3>Registrati</h3>
        </div>
      </div>
      <!--END .row --> 
      
    </div>
  </section>
	
	  <?php  endif;?>
	
	
  <div class="container">
	  
	   <?php if ( get_field( 'giorno_6' ) ): ?>
	  
    <div class="row top">
      <div class="col-md-1 col-xs-3">
        <div class="event-date"><span class="day"><?php echo get_field('giorno_6') ?></span> <span class="month"><?php echo get_field('mese_6') ?></span> <span class="year"><?php echo get_field('anno_6') ?></span></div>
      </div>
      <div class="col-md-3 col-xs-9 programma" style="min-height:125px">
        <h3 itemprop="name headline" class="home-news-headline"> <?php echo get_field('guest_6') ?> </h3>
      </div>
      <div class="col-md-3 col-xs-6">
        <p> <strong><?php echo get_field('titolo_6') ?></strong></p>
      </div>
    
      <div class="col-md-3 col-xs-12">
        <p class="programma"><?php echo get_field('programmi_executive_6') ?>  </p>
      </div>
      <div class="col-md-2 col-xs-6">
        <p class="programma"><a  href="<?php echo get_field('registrati_6') ?>" title="" class="button">Registrati</a> </p>
      </div>
    </div>
    <hr>
  <?php  endif;?>
	
	    <?php if ( get_field( 'giorno_7' ) ): ?>
	  
    <div class="row top">
      <div class="col-md-1 col-xs-3">
        <div class="event-date"><span class="day"><?php echo get_field('giorno_2') ?></span> <span class="month"><?php echo get_field('mese_7') ?></span> <span class="year"><?php echo get_field('anno_7') ?></span></div>
      </div>
      <div class="col-md-3 col-xs-9 programma" style="min-height:125px">
        <h3 itemprop="name headline" class="home-news-headline"> <?php echo get_field('guest_7') ?> </h3>
      </div>
      <div class="col-md-3 col-xs-6">
        <p> <strong><?php echo get_field('titolo_7') ?></strong></p>
      </div>
    
      <div class="col-md-3 col-xs-12">
        <p class="programma"><?php echo get_field('programmi_executive_7') ?>  </p>
      </div>
      <div class="col-md-2 col-xs-6">
        <p class="programma"><a  href="<?php echo get_field('registrati_7') ?>" title="" class="button">Registrati</a> </p>
      </div>
    </div>
   
    <hr>
  
	   <?php  endif;?>
	  
	  
	   <?php if ( get_field( 'giorno_8' ) ): ?>
	  
    <div class="row top">
      <div class="col-md-1 col-xs-3">
        <div class="event-date"><span class="day"><?php echo get_field('giorno_8') ?></span> <span class="month"><?php echo get_field('mese_8') ?></span> <span class="year"><?php echo get_field('anno_8') ?></span></div>
      </div>
      <div class="col-md-3 col-xs-9 programma" style="min-height:125px">
        <h3 itemprop="name headline" class="home-news-headline"> <?php echo get_field('guest_8') ?> </h3>
      </div>
      <div class="col-md-3 col-xs-6">
        <p> <strong><?php echo get_field('titolo_8') ?></strong></p>
      </div>
    
      <div class="col-md-3 col-xs-12">
        <p class="programma"><?php echo get_field('programmi_executive_8') ?>  </p>
      </div>
      <div class="col-md-2 col-xs-6">
        <p class="programma"><a  href="<?php echo get_field('registrati_8') ?>" title="" class="button">Registrati</a> </p>
      </div>
    </div>
   <hr>
	  
<?php  endif;?>

	  
 
	  
	  
 

  </div>
	
	
  <!--END .container events-cards cards-->
  </div>
  <!--END .row items--> 
</section>




<div class="featurette-divider"></div>
<div class="container">
  <div class="row top">
    <main id="main" class="site-main" role="main">
      <div id="page-content" class="col-md-12 columns  space">
        <?php
        while ( have_posts() ): the_post();
        $post_id = get_the_ID();
        ?>
        <?php the_content(''); ?>
        <?php endwhile; // end of the loop. ?>
      </div>
    </main>
  </div>
  <!--END .row --> 
</div>
</div>
</div>
<div class="featurette-divider"></div>
<?php
get_footer( 2017 );
?>
