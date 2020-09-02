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

<style>
    :root {
        --current-color: #00968F;
    }
</style>

<!-- Includo le variabili comuni -->

<?php include(dirname(__DIR__).'/lbs_2015/pco/variables/vars.php'); ?>

<?php 
$sub_home['it'] = 'I nostri metodi didattici sono basati sul team work e l’action learning per garantire lo sviluppo delle capacità comportamentali e decisionali necessarie per la tua svolta professionale.';
$sub_home['en'] = 'Based on team working and action learning, our teaching develops your behaviours and decision-making skills to drive your career forward..
';
?>

<!-- Inizio Template -->

	<div class="container-fluid px-0 box-cover-off d-flex flex-column align-items-start justify-content-center 
" style="background-image:url(<?php echo site_url() ?>/wp-content/themes/lbs_2015/pco/images/offerta-formativa/mba.jpg)">
	    <div class="container">
	        <div class="row">
	            <div class="col-xs-12 col-lg-8"><h1 class="color__white"><?php the_title();?></h1></div>
	        </div>
	        <div class="row">
	            <div class="col-md-6 intro">
	                <p class="color__white"><?php echo $sub_home[ICL_LANGUAGE_CODE] ?></p>
	            </div>
	        </div>
	    </div>
	</div>

<div class="container">
<div class="d-flex flex-row flex-wrap justify-content-between align-items-stretch px-0 pt-24">
    
<!-- MBA 1 -->
<div class="card-course-big my-16 p-24 d-flex flex-column justify-content-center align-items-start" style="border-color: var(--current-color);">
    <span class="meta text-uppercase color__grey"><?php echo $mba[ICL_LANGUAGE_CODE] ?></span>
    <h6 class="py-24 mb-0"><?php echo $titolo_mba_1[ICL_LANGUAGE_CODE] ?>
        <br /><?php echo $sottotitolo_mba_1[ICL_LANGUAGE_CODE] ?></h6>
    <div class="w-100 d-flex flex-row justify-content-between flex-wrap flex-md-nowrap align-items-stretch">
        <div class="first-block w-50">
            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_12[ICL_LANGUAGE_CODE] ?></p>
            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
        </div>
        <div class="second-block w-50">
            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_mba_1[ICL_LANGUAGE_CODE] ?></p>
            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
        </div>
    </div>
    <div class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap  ctas">
        <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16" href="<?php echo $link_site_mba_1[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
        <a class="button button__primary my-8 m-md-0" href="<?php echo $link_brochure_mba_1[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
    </div>
</div>
<!-- END MBA 1 -->
    
<!-- MBA 2 -->
<div class="card-course-big my-16 p-24 d-flex flex-column justify-content-center align-items-start" style="border-color: var(--current-color);">
    <span class="meta text-uppercase color__grey"><?php echo $mba[ICL_LANGUAGE_CODE] ?></span>
    <h6 class="py-24 mb-0"><?php echo $titolo_mba_2[ICL_LANGUAGE_CODE] ?>
        <br /><?php echo $sottotitolo_mba_2[ICL_LANGUAGE_CODE] ?></h6>
    <div class="w-100 d-flex flex-row justify-content-between flex-wrap flex-md-nowrap align-items-stretch">
        <div class="first-block w-50">
            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_22[ICL_LANGUAGE_CODE] ?></p>
            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
        </div>
        <div class="second-block w-50">
            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_mba_2[ICL_LANGUAGE_CODE] ?></p>
            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
        </div>
    </div>
    <div class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap  ctas">
        <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16" href="<?php echo $link_site_mba_2[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
        <a class="button button__primary my-8 m-md-0" href="<?php echo $link_brochure_mba_2[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
    </div>
</div>
<!-- END MBA 2 -->
    
<!-- MBA 3 -->
<div class="card-course-big my-16 p-24 d-flex flex-column justify-content-center align-items-start" style="border-color: var(--current-color);">
    <span class="meta text-uppercase color__grey"><?php echo $mba[ICL_LANGUAGE_CODE] ?></span>
    <h6 class="py-24 mb-0"><?php echo $titolo_mba_3[ICL_LANGUAGE_CODE] ?>
        <br /><?php echo $sottotitolo_mba_3[ICL_LANGUAGE_CODE] ?></h6>
    <div class="w-100 d-flex flex-row justify-content-between flex-wrap flex-md-nowrap align-items-stretch">
        <div class="first-block w-50">
            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_16[ICL_LANGUAGE_CODE] ?></p>
            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_mi[ICL_LANGUAGE_CODE] ?></p>
        </div>
        <div class="second-block w-50">
            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_mba_3[ICL_LANGUAGE_CODE] ?></p>
            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
        </div>
    </div>
    <div class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap  ctas">
        <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16" href="<?php echo $link_site_mba_3[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
        <a class="button button__primary my-8 m-md-0" href="<?php echo $link_brochure_mba_3[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
    </div>
</div>
<!-- END MBA 3 -->
    
<!-- MBA 4 -->
<div class="card-course-big my-16 p-24 d-flex flex-column justify-content-center align-items-start" style="border-color: var(--current-color);">
    <span class="meta text-uppercase color__grey"><?php echo $mba[ICL_LANGUAGE_CODE] ?></span>
    <h6 class="py-24 mb-0"><?php echo $titolo_mba_4[ICL_LANGUAGE_CODE] ?>
        <br /><?php echo $sottotitolo_mba_4[ICL_LANGUAGE_CODE] ?></h6>
    <div class="w-100 d-flex flex-row justify-content-between flex-wrap flex-md-nowrap align-items-stretch">
        <div class="first-block w-50">
            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_19[ICL_LANGUAGE_CODE] ?></p>
            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
        </div>
        <div class="second-block w-50">
            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_mba_4[ICL_LANGUAGE_CODE] ?></p>
            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
        </div>
    </div>
    <div class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap  ctas">
        <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16" href="<?php echo $link_site_mba_4[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
        <a class="button button__primary my-8 m-md-0" href="<?php echo $link_brochure_mba_4[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
    </div>
</div>
<!-- END MBA 4 -->
    
<!-- MBA 5 -->
<div class="card-course-big my-16 p-24 d-flex flex-column justify-content-center align-items-start" style="border-color: var(--current-color);">
    <span class="meta text-uppercase color__grey"><?php echo $mba[ICL_LANGUAGE_CODE] ?></span>
    <h6 class="py-24 mb-0"><?php echo $titolo_mba_5[ICL_LANGUAGE_CODE] ?>
        <br /><?php echo $sottotitolo_mba_5[ICL_LANGUAGE_CODE] ?></h6>
    <div class="w-100 d-flex flex-row justify-content-between flex-wrap flex-md-nowrap align-items-stretch">
        <div class="first-block w-50">
            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_17[ICL_LANGUAGE_CODE] ?></p>
            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
        </div>
        <div class="second-block w-50">
            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_mba_5[ICL_LANGUAGE_CODE] ?></p>
            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
        </div>
    </div>
    <div class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap  ctas">
        <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16" href="<?php echo $link_site_mba_5[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
        <a class="button button__primary my-8 m-md-0" href="<?php echo $link_brochure_mba_5[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
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