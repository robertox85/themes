<?php
$titolo_valori= array();
$titolo_valori['it']='I nostri valori';
$titolo_valori['en']='Our values';
?>
<div class="container-fluid" style="border-bottom: 2px solid #e8e8e8;">
    <div class="container mt-64 mb-48">
        <div class="row">
            <div class="col-xs-12 col-lg-4 section-title">
                <h3 class="color__gold pb-24 mb-0">Mission</h3>
            </div>
            <div class="col-xs-12 col-md-8">
                <p class="big pb-16 mb-0"><?php echo get_field('content_mission') ?></p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="border-bottom: 2px solid #e8e8e8;">
    <div class="container mt-64 mb-48">
        <div class="row">
            <div class="col-xs-12 col-lg-4 section-title">
                <h3 class="color__gold pb-24 mb-0"><?php echo $titolo_valori[ICL_LANGUAGE_CODE]; ?></h3>
            </div>
            <div class="col-xs-12 col-md-8">
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <h6 class="pb-24 mb-0"><?php echo get_field('valori_lancio_titolo_1') ?></h6>
                        <p class="pb-24 mb-0"><?php echo get_field(
                            'valori_lancio_contenuto_1') ?></p>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <h6 class="pb-24 mb-0"><?php echo get_field('valori_lancio_titolo_2') ?></h6>
                        <p class="pb-24 mb-0">V<?php echo get_field(
                            'valori_lancio_contenuto_2') ?></p>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <h6 class="pb-24 mb-0"><?php echo get_field('valori_lancio_titolo_3') ?></h6>
                        <p class="pb-24 mb-0"><?php echo get_field(
                            'valori_lancio_contenuto_3') ?></p>
                    </div>
                     <div class="col-xs-12 col-lg-6">
                        <h6 class="pb-24 mb-0"><?php echo get_field('valori_lancio_titolo_4') ?></h6>
                        <p class="pb-24 mb-0"><?php echo get_field(
                            'valori_lancio_contenuto_4') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>