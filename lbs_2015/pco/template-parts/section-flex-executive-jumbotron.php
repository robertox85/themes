<!-- Includo le variabili comuni -->

<?php include(dirname(__DIR__).'/variables/vars.php'); ?>

<?php 
$executive_flex_desc['it'] = 'Un’ esperienza formativa di eccellenza e allo stesso tempo flessibile e adattabile sia alle esigenze personali che agli impegni professionali. Una modalità di erogazione digitale che prevede il 90% delle lezioni in distance learning e attività di networking in presenza.';
$executive_flex_desc['en'] = '';
?>

<?php $executive_flex_img_link = array();
$executive_flex_img_link[ 'it' ] = '../images/offerta-formativa/flex-jumbotron.jpg';
$executive_flex_img_link[ 'en' ] = '../images/offerta-formativa/flex-jumbotron.jpg';
?>

<?php $executive_flex_link = array();
$executive_flex_link[ 'it' ] = '/flex/';
$executive_flex_link[ 'en' ] = '/flex/';
?>

<?php $titolo_executive_flex_link = array();
$titolo_executive_flex_link[ 'it' ] = 'Scopri tutti i Programmi Flex Executive';
$titolo_executive_flex_link[ 'en' ] = 'Find More About Our Flex Executive Programme';
?>

<!-- Inizio template -->

<div class="container-fluid px-0 py-80 box-cover-page flex-cover">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-6">
                <h2 class="color__white m-0 p-0"><?php echo $executive_flex_label[ICL_LANGUAGE_CODE] ?></h2>
                <p class="big color__white my-24"><?php echo $executive_flex_desc[ICL_LANGUAGE_CODE] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12"><a class="hp button button__primary bg__white color__blue" href="<?php echo $executive_flex_link[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_executive_flex_link[ICL_LANGUAGE_CODE] ?></a>
            </div>
        </div>
    </div>
</div>