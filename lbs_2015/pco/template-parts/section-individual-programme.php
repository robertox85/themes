<!-- Includo le variabili comuni -->

<?php include(dirname(__DIR__).'/variables/vars.php'); ?>

<!-- Inizio template -->
<div class="container-fluid px-0 default-style">
    <div class="container mt-64 mb-16">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="color__light_blue"><?php echo $executive_individual_label[ICL_LANGUAGE_CODE] ?></h2>
                <p><?php echo get_field('campo_individual') ?></p>
            </div>
        </div>
    </div>
</div>