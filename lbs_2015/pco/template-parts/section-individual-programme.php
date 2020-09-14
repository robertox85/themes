<!-- Includo le variabili comuni -->

<?php include(dirname(__DIR__).'/variables/vars.php');
    
$button_label = array();
$button_label['it'] = 'Scopri';
$button_label['en'] = 'Find out more'; 

?>

<!-- Inizio template -->
<div class="container-fluid px-0 default-style" style="border-bottom: 1px solid #e8e8e8;">
    <div class="container mt-64 mb-16">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="color__light_blue"><?php echo $executive_individual_label[ICL_LANGUAGE_CODE] ?></h2>
                <p><?php echo get_field('campo_individual') ?></p>
                <a class="mt-16 mb-48 button button__primary" href="https://businessschool.luiss.it/individual-executive-programme/executive-labs/"><?php echo $button_label[ICL_LANGUAGE_CODE]; ?></a>
            </div>
        </div>
    </div>
</div>