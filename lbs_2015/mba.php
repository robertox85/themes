<?php

// Exit if accessed directly

if (!defined('ABSPATH'))
    exit;
/**
 * Template Name: MBA 2017
 * @file mba.php
 */
get_header(2017);
?>


<!-- Includo le variabili comuni -->

<?php include(dirname(__DIR__).'/lbs_2015/pco/variables/vars.php'); ?>

<?php 
$sub_home['it'] = 'I nostri metodi didattici sono basati sul team work e l’action learning per garantire lo sviluppo delle capacità comportamentali e decisionali necessarie per la tua svolta professionale.';
$sub_home['en'] = 'Based on team working and action learning, our teaching develops your behaviours and decision-making skills to drive your career forward..
';
?>

<!-- Inizio Template -->

	<div class="container-fluid px-0 box-cover-off d-flex flex-column align-items-start  justify-content-center <?php if (has_post_thumbnail( $post->ID ) ): ?>
                   header-pic" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');
                   <?php else : ?>
                   header-nopic
                   <?php endif; ?>
">
	    <div class="container">
	        <div class="row">
                <div class="col-xs-12 color__white">
	            <div class="col-xs-12 col-lg-8"><h1 class="color__white"><?php the_title();?></h1></div>
                </div>
	        </div>
	        <div class="row">
	            <div class="col-md-6 intro">
	                <p class="color__white"><?php echo $sub_home[ICL_LANGUAGE_CODE] ?></p>
	            </div>
	            <div class="col-md-6 intro">
	            </div>
	        </div>
	    </div>
	</div>

<div class="container">
<div class="row d-flex flex-row flex-wrap justify-content-start align-items-stretch px-0 pt-48">
    
    <style>
.card-course-small {
    width: 30%;
    min-height: 410px;
    border: 1px solid;
  }
        
        @media screen and (max-width: 1199px) {
          .card-course-small {
    width: 47%;
  }  
                       
        }
</style>
    
<!-- MBA 1 -->
	                    <div class="card-course-small p-24 m-16">
	                        <span><?php echo $mba[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_mba_1[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_mba_1[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_12[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_mba_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <div class="col-xs-12"><a href="<?php echo $link_site_mba_1[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_mba_1[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a></div>
	                        </div>
	                    </div>
	                    <!-- END MBA 1 -->
    
    <!-- MBA 2 -->
	                    <div class="card-course-small p-24 m-16">
	                        <span><?php echo $mba[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_mba_2[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_mba_2[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_22[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_mba_2[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <div class="col-xs-12"><a href="<?php echo $link_site_mba_2[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_mba_2[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a></div>
	                        </div>
	                    </div>
	                    <!-- END MBA 2 -->
    
    <!-- MBA 3 -->
	                    <div class="card-course-small p-24 m-16">
	                        <span><?php echo $mba[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_mba_3[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_mba_3[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_16[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_mi[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_mba_3[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <div class="col-xs-12"><a href="<?php echo $link_site_mba_3[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_mba_3[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a></div>
	                        </div>
	                    </div>
	                    <!-- END MBA 3 -->
    
    <!-- MBA 4 -->
	                    <div class="card-course-small p-24 m-16">
	                        <span><?php echo $mba[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_mba_4[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_mba_4[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_17[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_mba_4[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <div class="col-xs-12"><a href="<?php echo $link_site_mba_4[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_mba_4[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a></div>
	                        </div>
	                    </div>
	                    <!-- END MBA 4 -->
    
    <!-- MBA 5 -->
	                    <div class="card-course-small p-24 m-16">
	                        <span><?php echo $mba[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_mba_5[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_mba_5[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_17[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_mba_5[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <div class="col-xs-12"><a href="<?php echo $link_site_mba_5[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_mba_5[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a></div>
	                        </div>
	                    </div>
	                    <!-- END MBA 5 -->
</div>
</div>

<?php edit_post_link('<p>Modifica Pagina</p>', ''); ?>

<script src='https://cdn1.pdmntn.com/a/EkyiaDgQr.js'></script>  
 
<!--<script src='https://cdn1.pdmntn.com/a/NyUBj8ZQH.js'></script>-->
<script src="<?php
bloginfo('template_directory');
?>/js/bootstrap.min.js"></script>
<script>
    $( '.carousel' ).carousel( {
        interval: 5000 //changes the speed
    } )
</script>
 <?php
get_footer(2017);
?>