	<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Template Name: Master 2017
 * @file master.php
 */
$shd = get_field('sub_home_description');
$shp = get_field('sub_home_paragraf');
get_header(2017);
?>

	<!-- Includo le variabili comuni -->

	<?php include(dirname(__DIR__).'/lbs_2015/pco/variables/vars.php'); ?>

	<?php
$text_svolgono = array();
$text_svolgono[ 'it' ] = 'Tutti i Master che si svolgono a ';
$text_svolgono[ 'en' ] = 'All Masters taking place in ';
?>

	<!-- Inizio Template -->

	<style>
:root {
    --current-color: #D50032;
}
	</style>

	<div class="container-fluid px-0 box-cover-off d-flex flex-column align-items-start  justify-content-center"
	    style="background-image:url(<?php echo site_url() ?>/wp-content/themes/lbs_2015/pco/images/offerta-formativa/master.jpg)">
	    <div class="container">
	        <div class="row">
	            <div class="col-xs-12">
	                <h1 class="color__white"><?php the_title();?></h1>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-6 intro">
	                <p class="color__white">Come here to be challenged. Leave ready to take on the most important
	                    challenges of our time. At Luiss Business School, we create wise leaders who aspire to MAKE the
	                    difference in the world of business and beyond. Join us.</p>

	                <!-- MODAL VIDEO 
                    
                    <button class="button button__primary my-8 mr-md-16 my-8 mr-md-16" data-toggle="modal" data-target="#videoModal">Watch the video</button>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7VuI-HXka6s" allowfullscreen></iframe>
</div>
      </div>
    </div>
  </div>
</div>
                    
        -->

	                <a class="button button__primary my-8 mr-md-16 my-8 mr-md-16"
	                    href="https://www.youtube.com/watch?v=7VuI-HXka6s&feature=emb_title" target="_blank">Watch the
	                    video</a>
	            </div>
	            <div class="col-md-6 intro">
	            </div>
	        </div>
	    </div>
	</div>

	<div class="container">
	    <!-- TAB -->
	    <section>
	        <!-- NAVIGAZIONE -->
	        <ul class="nav nav-tabs auto mx-0 px-0 d-flex flex-row flex-wrap flex-lg-nowrap flex-xl-nowrap"
	            id="program-type" role="tablist">
	            <!-- ROMA -->
	            <li class="nav-item active"><a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#roma"
	                    role="tab" aria-controls="tab1" aria-selected="true"><?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></a>
	            </li>

	            <!-- MILANO -->
	            <li class="nav-item"><a class="nav-link" id="tab2-tab" data-toggle="tab" href="#milano" role="tab"
	                    aria-controls="tab2" aria-selected="false"><?php echo $sede_mi[ICL_LANGUAGE_CODE] ?></a></li>

	            <!-- BELLUNO -->
	            <li class="nav-item"><a class="nav-link" id="tab3-tab" data-toggle="tab" href="#belluno" role="tab"
	                    aria-controls="tab3" aria-selected="false"><?php echo $sede_be[ICL_LANGUAGE_CODE] ?></a></li>
	        </ul>

	        <!-- CONTENUTO -->
	        <div class="tab-content my-0 my-md-48" id="ProgramType">
	            <!-- ROMA -->
	            <div class="tab-pane fade active in show" id="roma" role="tabpanel" aria-labelledby="roma-tab">
	                <div class="row">
	                    <div class="col-xs-12 col-lg-8">
	                        <p><?php echo $text_svolgono[ICL_LANGUAGE_CODE] ?><?php echo $sede_rm[ICL_LANGUAGE_CODE] ?>.
	                        </p>
	                        <ul>
	                            <li><a
	                                    href="#primolivello-roma"><strong><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></strong></a>
	                            </li>
	                            <li><a
	                                    href="#secondolivello-roma"><strong><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></strong></a>
	                            </li>
	                            <li><a
	                                    href="#altaformazione"><strong><?php echo $altaformazione[ICL_LANGUAGE_CODE] ?></strong></a>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	                <a name="primolivello-roma"></a>
	                <div class="mt-80 pt-16 mt-lg-128 pt-lg-24"></div>
	                <div class="row">
	                    <div class="col-xs-12 mb-0">
	                        <h3><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></h3>
	                    </div>
	                </div>
	                <div class="d-flex flex-row px-0 pt-24 align-items-stretch justify-content-start  flex-wrap">
	                    <!-- MASTER 34 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_34[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_34[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_34[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_34[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_34[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 34 -->

	                    <!-- 24? -->

	                    <!-- MASTER 21 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_21[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_21[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_21[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_21[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_21[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 21 -->

	                    <!-- 18? -->

	                    <!-- MASTER 14 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_14[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_14[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_14[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_14[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_14[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 14 -->

	                    <!-- MASTER 15 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_15[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_15[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_15[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_15[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_15[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 15 -->

	                    <!-- MASTER 16 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_16[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_16[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_16[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_16[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_16[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 16 -->

	                    <!-- 17? -->

	                    <!-- MASTER 6 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_6[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_6[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_6[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_6[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_6[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 6 -->

	                    <!-- 7? -->

	                    <!-- MASTER 4 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_4[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_4[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_4[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_4[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_4[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 4 -->

	                    <!-- MASTER 5 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_5[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_5[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_5[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_5[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_5[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 5 -->

	                    <!-- MASTER 8 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_8[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_8[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_8[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_8[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_8[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 8 -->
	                    <!--
	                        MASTER 3
	                        <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start" style="border-color: var(--current-color);">
	                            <div class="first-block"><span class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_3[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_3[ICL_LANGUAGE_CODE] ?></h6></div><div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_3[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                            <div class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16" href="<?php echo $link_site_master_3[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0" href="<?php echo $link_brochure_master_3[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a></div>
	                            </div>
	                        </div>
	                        END MASTER 3
-->

	                    <!-- MASTER 37 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_37[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_37[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_37[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_37[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_37[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 37 -->

	                    <!-- MASTER 22 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_22[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_22[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_22[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_22[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_22[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 22 -->

	                    <!-- 23 -->

	                    <!-- 2 -->

	                    <!-- MASTER 1 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_1[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_1[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_1[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_1[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 1 -->

	                    <!-- MASTER 9 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_9[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_9[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_9b[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_9[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_9[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 9 -->

	                    <!-- 12 -->

	                    <!-- 13 -->

	                    <!-- MASTER 10 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_10[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_10[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_10[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_10[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_10[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 10 -->

	                    <!-- MASTER 11 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_11[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_11[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_11[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_11[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_11[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 11 -->

	                    <!-- MASTER 32 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_32[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_32[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_32[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_32[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_32[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 32 -->

	                    <!-- 33 -->

	                    <!-- MASTER 31 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_31[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_31[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_31[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_31[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_31[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 31 -->

	                    <!-- MASTER 25 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_25[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_25[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_25[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_25[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_25[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 25 -->

	                    <!-- 26 -->

	                    <!-- MASTER 29 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_29[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_29[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_29[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_29[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_29[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 29 -->

	                    <!-- MASTER 27 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_27[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_27[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_27[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_27[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_27[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 27 -->

	                    <!-- 28 -->

	                    <!-- MASTER 30 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_30[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_30[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_30[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_30[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_30[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 30 -->

	                    <!-- MASTER 38 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_38[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_38[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_38[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_38[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_38[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 38 -->

	                    <!-- MASTER 41 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_41[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_41[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_41[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_41[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_41[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 41 -->

	                    <!-- MASTER 39 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_39[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_39[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_39[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_39[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_39[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 39 -->

	                    <!-- MASTER 40 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_40[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_40[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_40[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_40[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_40[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 40 -->

	                    <!-- MASTER 42 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_42[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_42[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_42[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_42[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_42[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 42 -->

	                    <!-- MASTER 19 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_19[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_19[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_19[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_19[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_19[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 19 -->

	                    <!-- MASTER 20 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_20[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_20[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_20[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_20[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_20[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 20 -->

	                </div>

	                <a name="secondolivello-roma"></a>
	                <div class="mt-80 pt-16 mt-lg-128 pt-lg-24"></div>
	                <div class="row">
	                    <div class="col-xs-12 mb-0">
	                        <h3><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></h3>
	                    </div>
	                </div>


	                <div class="d-flex flex-row px-0 pt-24 align-items-stretch justify-content-start  flex-wrap">
	                    <!-- MASTER 45 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start  card__blue "
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_45[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_45[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_45[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary button__blue my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_45[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary button__blue my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_45[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 45 -->

	                    <!-- MASTER 50 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start  card__blue"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_50[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_50[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_part[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_50[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary button__blue my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_50[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary button__blue my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_50[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 50 -->

	                    <!-- MASTER 24 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start  card__blue"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_24[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_24[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_24[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary button__blue my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_24[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary button__blue my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_24[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 24 -->

	                    <!-- MASTER 46 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start  card__blue"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_46[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_46[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_46[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary button__blue my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_46[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary button__blue my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_46[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 46 -->

	                    <!-- MASTER 47 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start  card__blue"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_47[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_47[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_part[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_47[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary button__blue my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_47[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary button__blue my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_47[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 47 -->

	                    <!-- MASTER 48 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start  card__blue"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_48[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_48[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_part[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_48[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary button__blue my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_48[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary button__blue my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_48[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 48 -->

	                    <!-- MASTER 49 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start  card__blue"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_49[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_49[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_part[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_49[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary button__blue my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_49[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary button__blue my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_49[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 49 -->

	                    <!-- MASTER 44 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start  card__blue"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_44[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_44[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_44[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary button__blue my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_44[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary button__blue my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_44[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 44 -->

	                    <!-- MASTER 43 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start  card__blue"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_43[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_43[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_43[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary button__blue my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_43[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary button__blue my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_43[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 43 -->

	                </div>

	                <a name="altaformazione"></a>
	                <div class="mt-80 pt-16 mt-lg-128 pt-lg-24"></div>
	                <div class="row">
	                    <div class="col-xs-12 mb-0">
	                        <h3><?php echo $altaformazione[ICL_LANGUAGE_CODE] ?></h3>
	                    </div>
	                </div>
	                <div class="d-flex flex-row px-0 pt-24 align-items-stretch justify-content-start  flex-wrap">
	                    <!-- PROGRAMMA A1 -->
	                    <div
	                        class="card-course-small card__blue p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $altaformazione[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_programma_a1[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_programma_a1[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_programma_a1[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary button__blue my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_programma_a1[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary button__blue my-8 m-md-0"
	                                    href="<?php echo $link_brochure_programma_a1[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END PROGRAMMA A1 -->

	                    <!-- PROGRAMMA A2 -->
	                    <div
	                        class="card-course-small card__blue p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $altaformazione[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_programma_a2[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_programma_a2[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full_11[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_programma_a2[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary button__blue my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_programma_a2[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <!--
	                                <a class="button button__primary button__blue my-8 m-md-0" href="<//?php echo $link_brochure_programma_a2[ICL_LANGUAGE_CODE] ?>"><//?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
-->
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END PROGRAMMA A2 -->

	                    <!-- PROGRAMMA A3 -->
	                    <div
	                        class="card-course-small card__blue p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $altaformazione[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_programma_a3[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_programma_a3[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_part_6[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_programma_a3[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary button__blue my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_programma_a3[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <!--
	                                <a class="button button__primary button__blue my-8 m-md-0" href="<//?php echo $link_brochure_programma_a3[ICL_LANGUAGE_CODE] ?>"><//?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
-->
	                            </div>

	                        </div>
	                    </div>
	                    <!-- END PROGRAMMA A3 -->

	                    <!-- PROGRAMMA A4 
	                <div class="card-course-small card__blue p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start">
	                    <div class="first-block"><span class="meta text-uppercase color__grey"><?php echo $altaformazione[ICL_LANGUAGE_CODE] ?></span>
	                        <h6 class="py-24 mb-0"><?php echo $titolo_programma_a4[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_programma_a4[ICL_LANGUAGE_CODE] ?></h6>
	                    </div>
	                    <div class="second-block">
	                        <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full_3[ICL_LANGUAGE_CODE] ?></p>
	                        <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_programma_a4[ICL_LANGUAGE_CODE] ?></p>
	                        <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                            <a class="button button__secondary button__blue my-8 mr-sm-16 mr-md-0 mr-lg-16" href="<?php echo $link_site_programma_a4[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                            <a class="button button__primary button__blue my-8 m-md-0" href="<?php echo $link_brochure_programma_a4[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a></div>
	                    </div>
	                </div>
	             END PROGRAMMA A4 -->


	                </div>

	            </div>

	            <!-- MILANO -->
	            <div class="tab-pane fade" id="milano" role="tabpanel" aria-labelledby="milano-tab">
	                <div class="row">
	                    <div class="col-xs-12 col-lg-8 mb-48 mb-md-64">
	                        <p><?php echo $text_svolgono[ICL_LANGUAGE_CODE] ?><?php echo $sede_mi[ICL_LANGUAGE_CODE] ?>.
	                        </p>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-xs-12 mb-0">
	                        <h3><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></h3>
	                    </div>
	                </div>
	                <div class="d-flex flex-row px-0 pt-24 align-items-stretch justify-content-between  flex-wrap">
	                    <!-- MASTER 18 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_18[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_18[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_am_mi[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_18[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_18[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_18[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 18 -->

	                    <!-- MASTER 23 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_23[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_23[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_mi[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_23[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_23[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_23[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 23 -->

	                    <!-- MASTER 2 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_2[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_2[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_mi[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_2[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_2[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_2[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 2 -->


	                    <!-- MASTER 51 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_51[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_51[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_am_mi[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_51[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_51[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_51[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 51 -->


	                    <!-- MASTER 12 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_12[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_12[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_mi[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_12[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_12[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_12[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 12 -->

	                    <!-- MASTER 33 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_33[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_33[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_mi[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_33[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_33[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_33[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 33 -->

	                    <!-- MASTER 26 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_26[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_26[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_mi[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_26[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_26[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_26[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 26 -->


	                </div>
	            </div>

	            <!-- BELLUNO -->
	            <div class="tab-pane fade" id="belluno" role="tabpanel" aria-labelledby="belluno-tab">
	                <div class="row">
	                    <div class="col-xs-12 col-lg-8 mb-48 mb-md-64">
	                        <p><?php echo $text_svolgono[ICL_LANGUAGE_CODE] ?><?php echo $sede_be[ICL_LANGUAGE_CODE] ?>.
	                        </p>
	                    </div>
	                </div>
	                <div class="row">

	                    <div class="col-xs-12 mb-0">
	                        <h3><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></h3>
	                    </div>
	                </div>
	                <div class="d-flex flex-row px-0 pt-24 align-items-stretch justify-content-start flex-wrap">
	                    <!-- MASTER 17 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_17[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_17[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_be[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_17[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_17[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_17[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 17 -->

	                    <!-- MASTER 7 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_7[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_7[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_be[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_7[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_7[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_7[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 7 -->

	                    <!-- MASTER 36 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_36[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_36[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_be[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_36[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_36[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_36[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 36 -->

	                    <!-- MASTER 13 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_13[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_13[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_be[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_13[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_13[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_13[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 13 -->

	                    <!-- MASTER 28 -->
	                    <div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start"
	                        style="border-color: var(--current-color);">
	                        <div class="first-block"><span
	                                class="meta text-uppercase color__grey"><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                            <h6 class="py-24 mb-0"><?php echo $titolo_master_28[ICL_LANGUAGE_CODE] ?>
	                                <br /><?php echo $sottotitolo_master_28[ICL_LANGUAGE_CODE] ?>
	                            </h6>
	                        </div>
	                        <div class="second-block">
	                            <p class="big mb-8"><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $sede_be[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $inizio_master_28[ICL_LANGUAGE_CODE] ?></p>
	                            <p class="big mb-8"><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong>
	                                <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                            <div
	                                class="mt-24 d-flex flex-row justify-content-between align-items-center flex-wrap flex-lg-nowrap ctas">
	                                <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16"
	                                    href="<?php echo $link_site_master_28[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_site[ICL_LANGUAGE_CODE] ?></a>
	                                <a class="button button__primary my-8 m-md-0"
	                                    href="<?php echo $link_brochure_master_28[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END MASTER 28 -->


	                </div>
	            </div>

	        </div>
	    </section>
	</div>

	<?php edit_post_link('<p>Modifica Pagina</p>', ''); ?>

	<?php get_footer(2017);?>