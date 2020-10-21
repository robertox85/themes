<?php
/*
Template Name: Webinar MISE
*/
wp_enqueue_style( 'Bootstrap_Styles', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' );
get_header( 2017 );
?>
<style>
:root {
--current-color: #cc8a00;
}
</style>
<header id="content-title" class="wide-row">

	
	
<div class="container">
  <div class="row">
    <main id="main" class="site-main" role="main">
		
		 <h1><?php echo the_title(); ?></h1>
		
      <div id="page-content" class="col-12">
        <?php
        while ( have_posts() ): the_post();
        $post_id = get_the_ID();
        ?>
        <?php the_content(''); ?>
        <?php endwhile; // end of the loop. ?>
        <p>
          <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?>
        </p>
      </div>
    </main>
  </div>
  <!--END .row --> 
</div>	
	
	
<!--END .container -->
</header>
<section class="d-none d-lg-block pb-16 mb-24" style="border-bottom: 1px solid #e8e8e8;">
  <div class="container">
    <div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap p-16">
      <div class="w-10">
        <h3 class="p-16">Data</h3>
      </div>
      <div class="w-30">
        <h3 class="p-16">Titolo </h3>
      </div>
      <div class="w-20">
        <h3 class="p-16">Registrati </h3>
      </div>
      <div class="w-20">
        <h3 class="p-16">Rivedi l’evento </h3>
      </div>
      <div class="w-20">
        <h3 class="p-16">Scarica la ricerca</h3>
      </div>
    </div>
    <!--END .row --> 
  </div>
</section>
<div class="container">

<?php if ( get_field( 'titolo_2_mise' ) ): ?>
<div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
  <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
    <h6 class="my-0" style="color:var(--current-color);"> <span class="day">20</span> <span class="month">OTT</span> <span class="year">2020</span> </h6>
  </div>
  <div class="w-30">
    <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('titolo_2_mise') ?></h6>
  </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('registrati_2_mise') ?>" title="<?php echo $event->post_title ?>">Registrati</a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('rivedi_evento_2_mise') ?>" title="<?php echo $event->post_title ?>">Rivedi l’evento </a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('scarica_ricerca_2_mise') ?>" title="<?php echo $event->post_title ?>">Scarica la ricerca</a> </div>
</div>
<!--END .row -->
<?php  endif;?>
<?php if ( get_field( 'titolo_3_mise' ) ): ?>
<div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
  <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
    <h6 class="my-0" style="color:var(--current-color);"> <span class="day">22</span> <span class="month">OTT</span> <span class="year">2020</span> </h6>
  </div>
  <div class="w-30">
    <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('titolo_3_mise') ?></h6>
  </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('registrati_3_mise') ?>" title="<?php echo $event->post_title ?>">Registrati</a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('rivedi_evento_3_mise') ?>" title="<?php echo $event->post_title ?>">Rivedi l’evento </a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('scarica_ricerca_3_mise') ?>" title="<?php echo $event->post_title ?>">Scarica la ricerca</a> </div>
</div>
<!--END .row -->
<?php  endif;?>
	
<?php if ( get_field( 'titolo_1_mise' ) ): ?>
<div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
  <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
    <h6 class="my-0" style="color:var(--current-color);"> <span class="day">23</span> <span class="month">OTT</span> <span class="year">2020</span> </h6>
  </div>
  <div class="w-30">
    <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('titolo_1_mise') ?></h6>
  </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('registrati_1_mise') ?>" title="<?php echo $event->post_title ?>">Registrati</a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('rivedi_evento_1_mise') ?>" title="<?php echo $event->post_title ?>">Rivedi l’evento </a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('scarica_ricerca_1_mise') ?>" title="<?php echo $event->post_title ?>">Scarica la ricerca</a> </div>
</div>
<!--END .row -->
<?php  endif;?>	
	
<?php if ( get_field( 'titolo_4_mise' ) ): ?>
<div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
  <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
    <h6 class="my-0" style="color:var(--current-color);"> <span class="day">26</span> <span class="month">OTT</span> <span class="year">2020</span> </h6>
  </div>
  <div class="w-30">
    <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('titolo_4_mise') ?></h6>
  </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('registrati_4_mise') ?>" title="<?php echo $event->post_title ?>">Registrati</a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('rivedi_evento_4_mise') ?>" title="<?php echo $event->post_title ?>">Rivedi l’evento </a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('scarica_ricerca_4_mise') ?>" title="<?php echo $event->post_title ?>">Scarica la ricerca</a> </div>
</div>
<!--END .row -->
<?php  endif;?>
<?php if ( get_field( 'titolo_5_mise' ) ): ?>
<div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
  <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
    <h6 class="my-0" style="color:var(--current-color);"> <span class="day">27</span> <span class="month">OTT</span> <span class="year">2020</span> </h6>
  </div>
  <div class="w-30">
    <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('titolo_5_mise') ?></h6>
  </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('registrati_5_mise') ?>" title="<?php echo $event->post_title ?>">Registrati</a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('rivedi_evento_5_mise') ?>" title="<?php echo $event->post_title ?>">Rivedi l’evento </a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('scarica_ricerca_5_mise') ?>" title="<?php echo $event->post_title ?>">Scarica la ricerca</a> </div>
</div>
	
<?php if ( get_field( 'titolo_6_mise' ) ): ?>
<div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
  <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
    <h6 class="my-0" style="color:var(--current-color);"> <span class="day">30</span> <span class="month">OTT</span> <span class="year">2020</span> </h6>
  </div>
  <div class="w-30">
    <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('titolo_6_mise') ?></h6>
  </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('registrati_6_mise') ?>" title="<?php echo $event->post_title ?>">Registrati</a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('rivedi_evento_6_mise') ?>" title="<?php echo $event->post_title ?>">Rivedi l’evento </a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('scarica_ricerca_6_mise') ?>" title="<?php echo $event->post_title ?>">Scarica la ricerca</a> </div>
</div>
<!--END .row -->
<?php  endif;?>		
	
	

<?php if ( get_field( 'titolo_7_mise' ) ): ?>
<div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
  <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
    <h6 class="my-0" style="color:var(--current-color);"> <span class="day">3</span> <span class="month">NOV</span> <span class="year">2020</span> </h6>
  </div>
  <div class="w-30">
    <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('titolo_7_mise') ?></h6>
  </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('registrati_7_mise') ?>" title="<?php echo $event->post_title ?>">Registrati</a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('rivedi_evento_7_mise') ?>" title="<?php echo $event->post_title ?>">Rivedi l’evento </a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('scarica_ricerca_7_mise') ?>" title="<?php echo $event->post_title ?>">Scarica la ricerca</a> </div>
</div>
<!--END .row -->
<?php  endif;?>		
		
	
<?php // if ( get_field( 'titolo_8_mise' ) ): ?>
<!--
<div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
  <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
    <h6 class="my-0" style="color:var(--current-color);"> <span class="day">5</span> <span class="month">NOV</span> <span class="year">2020</span> </h6>
  </div>
  <div class="w-30">
    <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('titolo_8_mise') ?></h6>
  </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('registrati_8_mise') ?>" title="<?php echo $event->post_title ?>">Registrati</a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('rivedi_evento_8_mise') ?>" title="<?php echo $event->post_title ?>">Rivedi l’evento </a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('scarica_ricerca_8_mise') ?>" title="<?php echo $event->post_title ?>">Scarica la ricerca</a> </div>
</div>
-->
<!--END .row -->
<?php //  endif;?>		
	
	
	
<?php if ( get_field( 'titolo_9_mise' ) ): ?>
<div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
  <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
    <h6 class="my-0" style="color:var(--current-color);"> <span class="day">10</span> <span class="month">NOV</span> <span class="year">2020</span> </h6>
  </div>
  <div class="w-30">
    <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('titolo_9_mise') ?></h6>
  </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('registrati_9_mise') ?>" title="<?php echo $event->post_title ?>">Registrati</a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('rivedi_evento_9_mise') ?>" title="<?php echo $event->post_title ?>">Rivedi l’evento </a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('scarica_ricerca_9_mise') ?>" title="<?php echo $event->post_title ?>">Scarica la ricerca</a> </div>
</div>
<!--END .row -->
<?php  endif;?>			
	
	
<?php if ( get_field( 'titolo_10_mise' ) ): ?>
<div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
  <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
    <h6 class="my-0" style="color:var(--current-color);"> <span class="day">13</span> <span class="month">NOV</span> <span class="year">2020</span> </h6>
  </div>
  <div class="w-30">
    <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('titolo_10_mise') ?></h6>
  </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('registrati_10_mise') ?>" title="<?php echo $event->post_title ?>">Registrati</a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('rivedi_evento_10_mise') ?>" title="<?php echo $event->post_title ?>">Rivedi l’evento </a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('scarica_ricerca_10_mise') ?>" title="<?php echo $event->post_title ?>">Scarica la ricerca</a> </div>
</div>
<!--END .row -->
<?php  endif;?>	
	
	
<?php if ( get_field( 'titolo_11_mise' ) ): ?>
<div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
  <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
    <h6 class="my-0" style="color:var(--current-color);"> <span class="day">23</span> <span class="month">NOV</span> <span class="year">2020</span> </h6>
  </div>
  <div class="w-30">
    <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('titolo_11_mise') ?></h6>
  </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('registrati_11_mise') ?>" title="<?php echo $event->post_title ?>">Registrati</a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('rivedi_evento_11_mise') ?>" title="<?php echo $event->post_title ?>">Rivedi l’evento </a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('scarica_ricerca_11_mise') ?>" title="<?php echo $event->post_title ?>">Scarica la ricerca</a> </div>
</div>
<!--END .row -->
<?php  endif;?>	
	
	
	<?php if ( get_field( 'titolo_12_mise' ) ): ?>
<div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
  <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
    <h6 class="my-0" style="color:var(--current-color);"> <span class="day">24</span> <span class="month">NOV</span> <span class="year">2020</span> </h6>
  </div>
  <div class="w-30">
    <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('titolo_12_mise') ?></h6>
  </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('registrati_12_mise') ?>" title="<?php echo $event->post_title ?>">Registrati</a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('rivedi_evento_12_mise') ?>" title="<?php echo $event->post_title ?>">Rivedi l’evento </a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('scarica_ricerca_12_mise') ?>" title="<?php echo $event->post_title ?>">Scarica la ricerca</a> </div>
</div>
<!--END .row -->
<?php  endif;?>		
	
	
		<?php if ( get_field( 'titolo_13_mise' ) ): ?>
<div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
  <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
    <h6 class="my-0" style="color:var(--current-color);"> <span class="day">26</span> <span class="month">NOV</span> <span class="year">2020</span> </h6>
  </div>
  <div class="w-30">
    <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('titolo_13_mise') ?></h6>
  </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('registrati_13_mise') ?>" title="<?php echo $event->post_title ?>">Registrati</a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('rivedi_evento_13_mise') ?>" title="<?php echo $event->post_title ?>">Rivedi l’evento </a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('scarica_ricerca_13_mise') ?>" title="<?php echo $event->post_title ?>">Scarica la ricerca</a> </div>
</div>
<!--END .row -->
<?php  endif;?>	
	
	
	
	
	<?php if ( get_field( 'titolo_14_mise' ) ): ?>
<div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
  <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
    <h6 class="my-0" style="color:var(--current-color);"> <span class="day">27</span> <span class="month">NOV</span> <span class="year">2020</span> </h6>
  </div>
  <div class="w-30">
    <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('titolo_14_mise') ?></h6>
  </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('registrati_14_mise') ?>" title="<?php echo $event->post_title ?>">Registrati</a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('rivedi_evento_14_mise') ?>" title="<?php echo $event->post_title ?>">Rivedi l’evento </a> </div>
  <div class="w-20"> <a class="button button__secondary m-16" href="<?php echo get_field('scarica_ricerca_14_mise') ?>" title="<?php echo $event->post_title ?>">Scarica la ricerca</a> </div>
</div>
<!--END .row -->
<?php  endif;?>	
	
	
	
	<?php  endif;?> 

<?php get_footer( 2017 ); ?>
