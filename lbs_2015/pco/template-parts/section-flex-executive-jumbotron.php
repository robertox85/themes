<!-- Includo le variabili comuni -->

<?php include(dirname(__DIR__).'/variables/vars.php'); ?>

<?php 
$executive_flex_desc['it'] = 'Un’ esperienza formativa di eccellenza e allo stesso tempo flessibile e adattabile sia alle esigenze personali che agli impegni professionali. Una modalità di erogazione digitale che prevede il 90% delle lezioni in distance learning e attività di networking in presenza.';
$executive_flex_desc['en'] = '';
?>

<?php $executive_flex_img_link = array();
$executive_flex_img_link[ 'it' ] = '';
$executive_flex_img_link[ 'en' ] = '';
?>

<!-- Inizio template -->

<div class="container-fluid px-0" style="background-image: url('<?php echo $executive_flex_img_link[ICL_LANGUAGE_CODE]; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2><?php echo $executive_flex_label[ICL_LANGUAGE_CODE] ?></h2>
                <p><?php echo $executive_flex_desc[ICL_LANGUAGE_CODE] ?></p>
            </div>
        </div>
    </div>
</div>