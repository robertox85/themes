<?php

$fattori=array();
$fattori['it']='I fattori di differenziazione';
$fattori['en']="The differentiation factors";

?>
<section class="py-64">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 section-title">
                <h3>
                    <?php echo $fattori[ICL_LANGUAGE_CODE]; ?>
                </h3>
                <div id="accordion" class="mt-48">
                    <div class="accordion-card my-16">
                        <div class="accordion-card-header p-24">
                            <h6 class="mb-0 color__blue" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                                    <?php echo get_field('box_launch_box_1') ?>
                            </h6>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                            <div class="p-24">
                                <?php echo get_field('box_di_lancio_content_1') ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-card my-16">
                        <div class="accordion-card-header p-24">
                            <h6 class="mb-0 color__blue collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
                                    <?php echo get_field('box_launch_box_2') ?>
                            </h6>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="p-24">
                                <?php echo get_field('box_di_lancio_content_2') ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-card my-16">
                        <div class="accordion-card-header p-24">
                            <h6 class="mb-0 color__blue collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
                                    <?php echo get_field('box_launch_box_3') ?>
                            </h6>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="p-24">
                                <?php echo get_field('box_di_lancio_content_3') ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-card my-16">
                        <div class="accordion-card-header p-24">
                            <h6 class="mb-0 color__blue collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" role="button">
                                    <?php echo get_field('box_launch_box_4') ?>
                            </h6>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="p-24">
                                <?php echo get_field('box_di_lancio_content_4') ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-card my-16">
                        <div class="accordion-card-header p-24">
                            <h6 class="mb-0 color__blue collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" role="button">
                                    <?php echo get_field('box_launch_box_5') ?>
                            </h6>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="p-24">
                                <?php echo get_field('box_di_lancio_content_5') ?>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-lg-5">
                <img src="//businessschool.luiss.it/wp-content/uploads/2018/06/img_perche450x650.png" alt="" class="my-48" style="object-fit:contain;">
            </div>
        </div>
    </div>
</section>