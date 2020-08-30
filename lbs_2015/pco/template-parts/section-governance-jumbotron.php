<!-- Includo le variabili comuni -->

<?php include(dirname(__DIR__).'/variables/vars.php'); ?>

<?php

$label_governance=array();
$label_governance['it']='Scopri la Governance';
$label_governance['en']='Find out more';

$link_governance=array();
$link_governance['it']='/perche-luiss-bs/governance/';
$link_governance['en']='/en/perche-luiss-bs/governance/';

$link_governance_1=array();
$link_governance_1['it']='/perche-luiss-bs/governance/steering-committee/';
$link_governance_1['en']='/en/why-luiss-bs/governance/steering-committee/';

$link_governance_2=array();
$link_governance_2['it']='/perche-luiss-bs/governance/corporate-advisory-board/';
$link_governance_2['en']='/en/why-luiss-bs/governance/corporate-advisory-board/';

$link_governance_3=array();
$link_governance_3['it']='/perche-luiss-bs/governance/international-advisory-board/';
$link_governance_3['en']='/en/why-luiss-bs/governance/international-advisory-board/';

$link_regolamento=array();
$link_regolamento['it']='https://www.luiss.it/sites/www.luiss.it/files/Regolamento-LBS-Comitato-Esecutivo-10-dicembre-2014.pdf';
$link_regolamento['en']='https://www.luiss.it/sites/www.luiss.it/files/Regolamento-LBS-Comitato-Esecutivo-10-dicembre-2014.pdf';

$label_regolamento=array();
$label_regolamento['it']='Regolamento della Luiss Business School (pdf)';
$label_regolamento['en']='Luiss Business School Regulation (pdf)';

$img_governance=array();
$img_governance['it']='/wp-content/uploads/2017/06/ChiSiamo_Governance_Certificazioni.jpg';
$img_governance['en']='/wp-content/uploads/2017/06/ChiSiamo_Governance_Certificazioni.jpg';
?>

<!-- Inizio template -->

<div class="container-fluid px-0 py-80 box-cover-page" style="background-image:url(<?php echo $img_governance[ICL_LANGUAGE_CODE]; ?>)">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-6 section-title">
                <h3 class="color__white m-0 p-0">Governance</h3>
                <p class="big color__white my-24"><?php echo get_field('governance_intro')?></p>
                        <h6><a href="<?php echo $link_governance_1[ICL_LANGUAGE_CODE]; ?>" class="color__white">Steering Committee</a></h6>
                        <h6><a href="<?php echo $link_governance_2[ICL_LANGUAGE_CODE]; ?>" class="color__white">Corporate Advisory Board</a></h6>
                        <h6><a href="<?php echo $link_governance_3[ICL_LANGUAGE_CODE]; ?>" class="color__white">International Advisory Board</a></h6>
            </div>
        </div>
        <div class="row mt-24">
            <div class="col-xs-12 d-flex flex-row flex-wrap align-items-center justify-content-start">
                <a class="button bg__white color__blue" href="<?php echo $link_governance[ICL_LANGUAGE_CODE]; ?>"><?php echo $label_governance[ICL_LANGUAGE_CODE] ?></a>
                <a class="button bg__white color__blue ml-0 ml-lg-24" href="<?php echo $link_regolamento[ICL_LANGUAGE_CODE]; ?>"><?php echo $label_regolamento[ICL_LANGUAGE_CODE] ?></a>
            </div>
        </div>
    </div>
</div>



        