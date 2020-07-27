<!-- Includo le variabili comuni -->

<?php include '../pco/variables/variabili-programmi-executive.php'; ?>

<!-- Inizio template -->

<div class="row">
    <div class="col-12 col-lg-8">
        <h2><?php echo $executive_individual_label[ICL_LANGUAGE_CODE] ?></h2>
        <p><?php echo get_field('campo_individual') ?></p>
    </div>
</div>