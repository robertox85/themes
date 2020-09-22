<!-- Includo le variabili comuni -->

<?php include(dirname(__DIR__).'/variables/vars.php'); ?>

<?php
$connect_desc = array();
$connect_desc['it'] = 'Accedi a Luiss Business Connect, la piattaforma per gli Alumni che ti consente di sviluppare il tuo network ed accedere alla community Luiss Business School';
$connect_desc['en'] = 'Join now Luiss Business Connect, the platform for Luiss Business School Alumni that allows you to develop your network and become part of the Luiss Business School Community';
?>

<?php $connect_link = array();
$connect_link[ 'it' ] = 'https://luissbusinessconnect.com/';
$connect_link[ 'en' ] = 'https://luissbusinessconnect.com/';
?>

<?php $connect_link_label = array();
$connect_link_label[ 'it' ] = 'Accedi';
$connect_link_label[ 'en' ] = 'Join now';
?>

<?php $connect_title = array();
$connect_title[ 'it' ] = 'Luiss Business Connect';
$connect_title[ 'en' ] = 'Luiss Business Connect';
?>


<!-- Inizio template -->

<div class="container-fluid px-0 py-80 box-cover-page connect-cover">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-6">
                <h2 class="color__white m-0 p-0"><?php echo $connect_title[ICL_LANGUAGE_CODE] ?></h2>
                <p class="big color__white my-24"><?php echo $connect_desc[ICL_LANGUAGE_CODE] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12"><a class="hp button button__primary bg__white color__blue" href="<?php echo $connect_link[ICL_LANGUAGE_CODE] ?>"><?php echo $connect_link_label[ICL_LANGUAGE_CODE] ?></a>
            </div>
        </div>
    </div>
</div>