<?php
/*
Template Name: Webinar 2020
*/
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
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
            <div class="sommario col-md-8">
                <h1><?php echo the_title(); ?></h1>
                <p class="big py-16"><?php echo get_field('intro_webinar') ?></p>
            </div>
        </div>
        <!--END .row -->
    </div>
    <!--END .container -->
</header>

<section class="py-32 my-48" style="background-color: #F7F9FA">
    <div class="container">
        <div class="col-12 section-title px-0">
            <h3 class="color__gold"><?php echo get_field('mese') ?></h3>
        </div>
    </div>
</section>


<section class="d-none d-lg-block pb-16 mb-24" style="border-bottom: 1px solid #e8e8e8;">
    <div class="container">
        <div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap p-16">
            <div class="w-10"><h3 class="p-16">Data</h3></div>
            <div class="w-20"><h3 class="p-16">Guest</h3></div>
            <div class="w-30"><h3 class="p-16">Titolo</h3></div>
            <div class="w-20"><h3 class="p-16">Programmi executive</h3></div>
            <div class="w-20"><h3 class="p-16">Registrati</h3></div>
        </div>
        <!--END .row -->
    </div>
</section>


<div class="container">
    
    <?php if ( get_field( 'giorno_1' ) ): ?>
    <div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
        <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
            <h6 class="my-0" style="color:var(--current-color);">
            <span class="day"><?php echo get_field('giorno_2') ?></span>
            <span class="month"><?php echo get_field('mese_2') ?></span>
            <span class="year"><?php echo get_field('anno_2') ?></span>
            </h6>
        </div>
        <div class="w-20">
            <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('guest_2') ?></h6>
        </div>
        <div class="w-30">
            <p class="m-0 p-16"><?php echo get_field('titolo_2') ?></p>
        </div>
        <div class="w-20 p-16">
            <?php echo get_field('programmi_executive_2') ?>
        </div>
        <div class="w-20">
            <a class="button button__secondary m-16" href="<?php echo get_field('registrati_2') ?>" title="<?php echo $event->post_title ?>">Registrati</a>
        </div>
        
        
    </div>
    <!--END .row -->
    <?php  endif;?>
    
        <?php if ( get_field( 'giorno_2' ) ): ?>
    <div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
        <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
            <h6 class="my-0" style="color:var(--current-color);">
            <span class="day"><?php echo get_field('giorno_2') ?></span>
            <span class="month"><?php echo get_field('mese_2') ?></span>
            <span class="year"><?php echo get_field('anno_2') ?></span>
            </h6>
        </div>
        <div class="w-20">
            <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('guest_2') ?></h6>
        </div>
        <div class="w-30">
            <p class="m-0 p-16"><?php echo get_field('titolo_2') ?></p>
        </div>
        <div class="w-20 p-16">
            <?php echo get_field('programmi_executive_2') ?>
        </div>
        <div class="w-20">
            <a class="button button__secondary m-16" href="<?php echo get_field('registrati_2') ?>" title="<?php echo $event->post_title ?>">Registrati</a>
        </div>
        
        
    </div>
    <!--END .row -->
    <?php  endif;?>
    
        <?php if ( get_field( 'giorno_3' ) ): ?>
    <div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
        <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
            <h6 class="my-0" style="color:var(--current-color);">
            <span class="day"><?php echo get_field('giorno_3') ?></span>
            <span class="month"><?php echo get_field('mese_3') ?></span>
            <span class="year"><?php echo get_field('anno_3') ?></span>
            </h6>
        </div>
        <div class="w-20">
            <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('guest_3') ?></h6>
        </div>
        <div class="w-30">
            <p class="m-0 p-16"><?php echo get_field('titolo_3') ?></p>
        </div>
        <div class="w-20 p-16">
            <?php echo get_field('programmi_executive_3') ?>
        </div>
        <div class="w-20">
            <a class="button button__secondary m-16" href="<?php echo get_field('registrati_3') ?>" title="<?php echo $event->post_title ?>">Registrati</a>
        </div>
        
        
    </div>
    <!--END .row -->
    <?php  endif;?>
    
        <?php if ( get_field( 'giorno_4' ) ): ?>
    <div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
        <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
            <h6 class="my-0" style="color:var(--current-color);">
            <span class="day"><?php echo get_field('giorno_4') ?></span>
            <span class="month"><?php echo get_field('mese_4') ?></span>
            <span class="year"><?php echo get_field('anno_4') ?></span>
            </h6>
        </div>
        <div class="w-20">
            <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('guest_4') ?></h6>
        </div>
        <div class="w-30">
            <p class="m-0 p-16"><?php echo get_field('titolo_4') ?></p>
        </div>
        <div class="w-20 p-16">
            <?php echo get_field('programmi_executive_4') ?>
        </div>
        <div class="w-20">
            <a class="button button__secondary m-16" href="<?php echo get_field('registrati_4') ?>" title="<?php echo $event->post_title ?>">Registrati</a>
        </div>
        
        
    </div>
    <!--END .row -->
    <?php  endif;?>
    
        <?php if ( get_field( 'giorno_5' ) ): ?>
    <div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
        <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
            <h6 class="my-0" style="color:var(--current-color);">
            <span class="day"><?php echo get_field('giorno_5') ?></span>
            <span class="month"><?php echo get_field('mese_5') ?></span>
            <span class="year"><?php echo get_field('anno_5') ?></span>
            </h6>
        </div>
        <div class="w-20">
            <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('guest_5') ?></h6>
        </div>
        <div class="w-30">
            <p class="m-0 p-16"><?php echo get_field('titolo_5') ?></p>
        </div>
        <div class="w-20 p-16">
            <?php echo get_field('programmi_executive_5') ?>
        </div>
        <div class="w-20">
            <a class="button button__secondary m-16" href="<?php echo get_field('registrati_5') ?>" title="<?php echo $event->post_title ?>">Registrati</a>
        </div>
        
        
    </div>
    <!--END .row -->
    <?php  endif;?>   
</div>


<?php if ( get_field( 'mese_02' ) ): ?>

<section class="py-32 my-48" style="background-color: #F7F9FA">
    <div class="container">
        <div class="col-12 section-title px-0">
            <h3 class="color__gold"><?php echo get_field('mese_02') ?></h3>
        </div>
    </div>
</section>


<section class="d-none d-lg-block pb-16 mb-24" style="border-bottom: 1px solid #e8e8e8;">
    <div class="container">
        <div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap p-16">
            <div class="w-10"><h3 class="p-16">Data</h3></div>
            <div class="w-20"><h3 class="p-16">Guest</h3></div>
            <div class="w-30"><h3 class="p-16">Titolo</h3></div>
            <div class="w-20"><h3 class="p-16">Programmi executive</h3></div>
            <div class="w-20"><h3 class="p-16">Registrati</h3></div>
        </div>
        <!--END .row -->
    </div>
</section>


<div class="container">
    
    <?php if ( get_field( 'giorno_6' ) ): ?>
    <div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
        <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
            <h6 class="my-0" style="color:var(--current-color);">
            <span class="day"><?php echo get_field('giorno_6') ?></span>
            <span class="month"><?php echo get_field('mese_6') ?></span>
            <span class="year"><?php echo get_field('anno_6') ?></span>
            </h6>
        </div>
        <div class="w-20">
            <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('guest_6') ?></h6>
        </div>
        <div class="w-30">
            <p class="m-0 p-16"><?php echo get_field('titolo_6') ?></p>
        </div>
        <div class="w-20 p-16">
            <?php echo get_field('programmi_executive_6') ?>
        </div>
        <div class="w-20">
            <a class="button button__secondary m-16" href="<?php echo get_field('registrati_6') ?>" title="<?php echo $event->post_title ?>">Registrati</a>
        </div>
        
        
    </div>
    <!--END .row -->
    <?php  endif;?>
    
    <?php if ( get_field( 'giorno_7' ) ): ?>
    <div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
        <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
            <h6 class="my-0" style="color:var(--current-color);">
            <span class="day"><?php echo get_field('giorno_7') ?></span>
            <span class="month"><?php echo get_field('mese_7') ?></span>
            <span class="year"><?php echo get_field('anno_7') ?></span>
            </h6>
        </div>
        <div class="w-20">
            <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('guest_7') ?></h6>
        </div>
        <div class="w-30">
            <p class="m-0 p-16"><?php echo get_field('titolo_7') ?></p>
        </div>
        <div class="w-20 p-16">
            <?php echo get_field('programmi_executive_7') ?>
        </div>
        <div class="w-20">
            <a class="button button__secondary m-16" href="<?php echo get_field('registrati_7') ?>" title="<?php echo $event->post_title ?>">Registrati</a>
        </div>
        
        
    </div>
    <!--END .row -->
    <?php  endif;?>
    
    <?php if ( get_field( 'giorno_8' ) ): ?>
    <div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
        <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
            <h6 class="my-0" style="color:var(--current-color);">
            <span class="day"><?php echo get_field('giorno_8') ?></span>
            <span class="month"><?php echo get_field('mese_8') ?></span>
            <span class="year"><?php echo get_field('anno_8') ?></span>
            </h6>
        </div>
        <div class="w-20">
            <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('guest_8') ?></h6>
        </div>
        <div class="w-30">
            <p class="m-0 p-16"><?php echo get_field('titolo_8') ?></p>
        </div>
        <div class="w-20 p-16">
            <?php echo get_field('programmi_executive_8') ?>
        </div>
        <div class="w-20">
            <a class="button button__secondary m-16" href="<?php echo get_field('registrati_8') ?>" title="<?php echo $event->post_title ?>">Registrati</a>
        </div>
          
    </div>
    <!--END .row -->
    <?php  endif;?>
    
    <?php if ( get_field( 'giorno_9' ) ): ?>
    <div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
        <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
            <h6 class="my-0" style="color:var(--current-color);">
            <span class="day"><?php echo get_field('giorno_9') ?></span>
            <span class="month"><?php echo get_field('mese_9') ?></span>
            <span class="year"><?php echo get_field('anno_9') ?></span>
            </h6>
        </div>
        <div class="w-20">
            <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('guest_9') ?></h6>
        </div>
        <div class="w-30">
            <p class="m-0 p-16"><?php echo get_field('titolo_9') ?></p>
        </div>
        <div class="w-20 p-16">
            <?php echo get_field('programmi_executive_9') ?>
        </div>
        <div class="w-20">
            <a class="button button__secondary m-16" href="<?php echo get_field('registrati_9') ?>" title="<?php echo $event->post_title ?>">Registrati</a>
        </div>
          
    </div>
    <!--END .row -->
    <?php  endif;?>
    
    <?php if ( get_field( 'giorno_10' ) ): ?>
    <div class="d-flex flex-row align-items-center justify-content-start flex-wrap flex-lg-nowrap card-meet p-16">
        <div class="w-10 p-md-16 bg__white box-event-date d-flex flex-row align-items-center justify-content-center">
            <h6 class="my-0" style="color:var(--current-color);">
            <span class="day"><?php echo get_field('giorno_10') ?></span>
            <span class="month"><?php echo get_field('mese_10') ?></span>
            <span class="year"><?php echo get_field('anno_10') ?></span>
            </h6>
        </div>
        <div class="w-20">
            <h6 class="color__blue m-0 p-16" itemprop="name headline"><?php echo get_field('guest_10') ?></h6>
        </div>
        <div class="w-30">
            <p class="m-0 p-16"><?php echo get_field('titolo_10') ?></p>
        </div>
        <div class="w-20 p-16">
            <?php echo get_field('programmi_executive_10') ?>
        </div>
        <div class="w-20">
            <a class="button button__secondary m-16" href="<?php echo get_field('registrati_10') ?>" title="<?php echo $event->post_title ?>">Registrati</a>
        </div>

    </div>
    <!--END .row -->
    <?php  endif;?>

</div>

<?php  endif;?> 

<div class="container">
  <div class="row">
    <main id="main" class="site-main" role="main">
      <div id="page-content" class="col-12">
        <?php
        while ( have_posts() ): the_post();
        $post_id = get_the_ID();
        ?>
        <?php the_content(''); ?>
        <?php endwhile; // end of the loop. ?>
        <p><?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
      </div>
    </main>
  </div>
  <!--END .row --> 
</div>

<?php
get_footer( 2017 );
?>
