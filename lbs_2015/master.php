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
<script id="myn_pixel" async src="https://white.mynsystems.com/myn_pixel_fp.js?accountId=50"></script>

<!--
Start of Floodlight Tag: Please do not remove
Activity name of this tag: LUISS_Master
URL of the webpage where the tag is expected to be placed:
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 12/20/2018
-->
<script type="text/javascript">
var axel = Math.random() + "";
var a = axel * 10000000000000;
document.write('<iframe src="https://9105818.fls.doubleclick.net/activityi;src=9105818;type=secti0;cat=luiss00;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
</script>
<noscript>
<iframe src="https://9105818.fls.doubleclick.net/activityi;src=9105818;type=secti0;cat=luiss00;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
</noscript>
<!-- End of Floodlight Tag: Please do not remove -->

<!-- Variabili -->

<!-- Tipologia -->
<?php $primo_livello = array();
$primo_livello[ 'it' ] = 'Master di primo livello';
$primo_livello[ 'en' ] = 'First-level Master Degree';
?>

<?php $secondo_livello = array();
$secondo_livello[ 'it' ] = 'Master di secondo livello';
$secondo_livello[ 'en' ] = 'Second-level Master Degree';
?>

<?php $specialistici = array();
$specialistici[ 'it' ] = 'Master Specialistici ';
$specialistici[ 'en' ] = 'Specialised Master&#8217;s';
?>

<!-- Lingua -->
<!-- Label -->
<?php $lingua = array();
$lingua[ 'it' ] = 'Lingua';
$lingua[ 'en' ] = 'Language';
?>

<!-- Dato -->
<?php $lingua_corso_it = array();
$lingua_corso_it[ 'it' ] = 'Italiano';
$lingua_corso_it[ 'en' ] = 'Italian';
?>

<?php $lingua_corso_en = array();
$lingua_corso_en[ 'it' ] = 'Inglese';
$lingua_corso_en[ 'en' ] = 'English';
?>

<!-- Durata -->

<!-- Label -->
<?php $titolo_durata = array();
$titolo_durata[ 'it' ] = 'Durata';
$titolo_durata[ 'en' ] = 'Duration';
?>

<!-- Dato -->
<?php $durata_full = array();
$durata_full[ 'it' ] = '12 mesi Full-time';
$durata_full[ 'en' ] = '12 months Full-time study';
?>

<?php $durata_part = array();
$durata_part[ 'it' ] = '12 mesi part-time';
$durata_part[ 'en' ] = '12 months of part-time study';
?>

<!-- Inizio -->

<!-- Label -->
<?php $titolo_inizio = array();
$titolo_inizio[ 'it' ] = 'Inizio';
$titolo_inizio[ 'en' ] = 'Start';
?>


<!-- Sede -->

<!-- Label -->
<?php $titolo_sede = array();
$titolo_sede[ 'it' ] = 'Sede';
$titolo_sede[ 'en' ] = 'Location';
?>

<!-- Dato -->
<?php $sede_rm = array();
$sede_rm[ 'it' ] = 'Roma';
$sede_rm[ 'en' ] = 'Rome';
?>

<?php $sede_mi = array();
$sede_mi[ 'it' ] = 'Milano';
$sede_mi[ 'en' ] = 'Milan';
?>

<?php $sede_be = array();
$sede_be[ 'it' ] = 'Belluno';
$sede_be[ 'en' ] = 'Belluno';
?>

<!-- Etichette pulsanti -->

<!-- Label link master -->
<?php $titolo_link_master = array();
$titolo_link_master[ 'it' ] = 'Scopri';
$titolo_link_master[ 'en' ] = 'Find our more';
?>

<!-- Label link master -->
<?php $titolo_link_brochure = array();
$titolo_link_brochure[ 'it' ] = 'Scarica la brochure';
$titolo_link_brochure[ 'en' ] = 'Download Brochure';
?>



<!-- Info master -->

<!-- Master 1 -->

<!-- Titolo -->
<?php $titolo_master_1 = array();
$titolo_master_1[ 'it' ] = 'International Management';
$titolo_master_1[ 'en' ] = 'International Management';
?>

<!-- Sottotitolo -->
<?php $sottotitolo_master_1 = array();
$sottotitolo_master_1[ 'it' ] = 'Major del Master in International Management';
$sottotitolo_master_1[ 'en' ] = 'Major of the Master in International Management';
?>

<!-- Inizio -->
<?php $inizio_master_1 = array();
$inizio_master_1[ 'it' ] = '21 Set 2020';
$inizio_master_1[ 'en' ] = 'Set 21, 2020';
?>

<!-- Programma -->
<?php $link_master_1 = array();
$link_master_1[ 'it' ] = 'https://businessschool.luiss.it/international-management/';
$link_master_1[ 'en' ] = 'https://businessschool.luiss.it/international-management/';
?>
<!-- Brochure -->
<?php $link_brochure_1 = array();
$link_brochure_1[ 'it' ] = 'https://businessschool.luiss.it/international-management/download-brochure/';
$link_brochure_1[ 'en' ] = 'https://businessschool.luiss.it/international-management/download-brochure/';
?>

<!-- Master 2 -->

<!-- Titolo -->
<?php $titolo_master_2 = array();
$titolo_master_2[ 'it' ] = 'Global Energy Management';
$titolo_master_2[ 'en' ] = 'Global Energy Management';
?>

<!-- Sottotitolo -->
<?php $sottotitolo_master_1 = array();
$sottotitolo_master_2[ 'it' ] = 'Major del Master in International Management';
$sottotitolo_master_2[ 'en' ] = 'Major of the Master in International Management';
?>

<!-- Programma -->
<?php $link_master_2 = array();
$link_master_2[ 'it' ] = 'https://businessschool.luiss.it/management-energy-industry/download-brochure/';
$link_master_2[ 'en' ] = 'https://businessschool.luiss.it/management-energy-industry/download-brochure/';
?>
<!-- Brochure -->
<?php $link_brochure_2 = array();
$link_brochure_2[ 'it' ] = 'https://businessschool.luiss.it/management-energy-industry/download-brochure/';
$link_brochure_2[ 'en' ] = 'https://businessschool.luiss.it/management-energy-industry/download-brochure/';
?>

<!-- Master 3 -->

<!-- Titolo -->
<?php $titolo_master_3 = array();
$titolo_master_3[ 'it' ] = 'Risk and Insurance Management';
$titolo_master_3[ 'en' ] = 'Risk and Insurance Management';
?>
<!-- Sottotitolo -->
<?php $sottotitolo_master_3 = array();
$sottotitolo_master_3[ 'it' ] = 'Major del Master in Financial Management';
$sottotitolo_master_3[ 'en' ] = 'Major of the Master in Master in Financial Management';
?>
<!-- Programma -->
<?php $link_master_3 = array();
$link_master_3[ 'it' ] = 'https://businessschool.luiss.it/management-technology-risk-management-insurance/';
$link_master_3[ 'en' ] = 'https://businessschool.luiss.it/management-technology-risk-management-insurance/';
?>
<!-- Brochure -->
<?php $link_brochure_3 = array();
$link_brochure_3[ 'it' ] = 'https://businessschool.luiss.it/management-technology-risk-management-insurance/download-brochure/';
$link_brochure_3[ 'en' ] = 'https://businessschool.luiss.it/management-technology-risk-management-insurance/download-brochure/';
?>

<!-- Master 4 -->

<!-- Titolo -->
<?php $titolo_master_4 = array();
$titolo_master_4[ 'it' ] = 'Corporate Finance ';
$titolo_master_4[ 'en' ] = 'Corporate Finance ';
?>
<!-- Sottotitolo -->
<?php $sottotitolo_master_3 = array();
$sottotitolo_master_3[ 'it' ] = 'Major del Master in Financial Management';
$sottotitolo_master_3[ 'en' ] = 'Major of the Master in Master in Financial Management';
?>
<!-- Programma -->
<?php $link_master_4 = array();
$link_master_4[ 'it' ] = 'https://businessschool.luiss.it/macofin/';
$link_master_4[ 'en' ] = 'https://businessschool.luiss.it/macofin/';
?>
<!-- Brochure -->
<?php $link_brochure_4 = array();
$link_brochure_4[ 'it' ] = 'https://businessschool.luiss.it/macofin/download-brochure-master-macofin/';
$link_brochure_4[ 'en' ] = 'https://businessschool.luiss.it/macofin/download-brochure-master-macofin/';
?>

<!-- Master 5 -->

<!-- Titolo -->
<?php $titolo_master_5 = array();
$titolo_master_5[ 'it' ] = 'Corporate Investment Banking ';
$titolo_master_5[ 'en' ] = 'Corporate Investment Banking ';
?>
<!-- Sottotitolo -->
<?php $sottotitolo_master_3 = array();
$sottotitolo_master_3[ 'it' ] = 'Major del Master in Financial Management';
$sottotitolo_master_3[ 'en' ] = 'Major of the Master in Master in Financial Management';
?>
<!-- Programma -->
<?php $link_master_5 = array();
$link_master_5[ 'it' ] = 'https://businessschool.luiss.it/corporate-finance-banking-major-banking/';
$link_master_5[ 'en' ] = 'https://businessschool.luiss.it/corporate-finance-banking-major-banking/';
?>
<!-- Brochure -->
<?php $link_brochure_5 = array();
$link_brochure_5[ 'it' ] = 'https://businessschool.luiss.it/corporate-finance-banking-major-banking/download-brochure/';
$link_brochure_5[ 'en' ] = 'https://businessschool.luiss.it/corporate-finance-banking-major-banking/download-brochure/';
?>

<!-- Master 6 -->

<!-- Titolo -->
<?php $titolo_master_6 = array();
$titolo_master_6[ 'it' ] = 'Amministrazione Finanza e Controllo';
$titolo_master_6[ 'en' ] = 'Amministrazione Finanza e Controllo';
?>
<!-- Sottotitolo -->
<?php $sottotitolo_master_3 = array();
$sottotitolo_master_3[ 'it' ] = 'Major del Master in Financial Management';
$sottotitolo_master_3[ 'en' ] = 'Major of the Master in Master in Financial Management';
?>
<!-- Programma -->
<?php $link_master_6 = array();
$link_master_6[ 'it' ] = 'https://businessschool.luiss.it/corporare-finance-banking-major-finanza-aziendale/';
$link_master_6[ 'en' ] = 'https://businessschool.luiss.it/corporare-finance-banking-major-finanza-aziendale/';
?>
<!-- Brochure -->
<?php $link_brochure_6 = array();
$link_brochure_6[ 'it' ] = 'https://businessschool.luiss.it/corporare-finance-banking-major-finanza-aziendale/download-brochure/';
$link_brochure_6[ 'en' ] = 'https://businessschool.luiss.it/corporare-finance-banking-major-finanza-aziendale/download-brochure/';
?>

<!-- Master 7 -->

<!-- Titolo -->
<?php $titolo_master_7 = array();
$titolo_master_7[ 'it' ] = 'Amministrazione Finanza e Controllo';
$titolo_master_7[ 'en' ] = 'Amministrazione Finanza e Controllo';
?>
<!-- Sottotitolo -->
<?php $sottotitolo_master_3 = array();
$sottotitolo_master_3[ 'it' ] = 'Major del Master in Financial Management';
$sottotitolo_master_3[ 'en' ] = 'Major of the Master in Master in Financial Management';
?>
<!-- Programma -->
<?php $link_master_7 = array();
$link_master_7[ 'it' ] = 'https://businessschool.luiss.it/corporare-finance-banking-major-finanza-aziendale/';
$link_master_7[ 'en' ] = 'https://businessschool.luiss.it/corporare-finance-banking-major-finanza-aziendale/';
?>
<!-- Brochure -->
<?php $link_brochure_7 = array();
$link_brochure_7[ 'it' ] = 'https://businessschool.luiss.it/corporare-finance-banking-major-finanza-aziendale/download-brochure/';
$link_brochure_7[ 'en' ] = 'https://businessschool.luiss.it/corporare-finance-banking-major-finanza-aziendale/download-brochure/';
?>

<!-- Master 8 -->

<!-- Titolo -->
<?php $titolo_master_8 = array();
$titolo_master_8[ 'it' ] = 'Real Estate Finance';
$titolo_master_8[ 'en' ] = 'Real Estate Finance';
?>
<!-- Sottotitolo -->
<?php $sottotitolo_master_3 = array();
$sottotitolo_master_3[ 'it' ] = 'Major del Master in Financial Management';
$sottotitolo_master_3[ 'en' ] = 'Major of the Master in Master in Financial Management';
?>
<!-- Programma -->
<?php $link_master_8 = array();
$link_master_8[ 'it' ] = 'https://www.maref.luiss.it/';
$link_master_8[ 'en' ] = 'https://www.maref.luiss.it/';
?>
<!-- Brochure -->
<?php $link_brochure_8 = array();
$link_brochure_8[ 'it' ] = 'https://www.maref.luiss.it/scarica-la-brochure/';
$link_brochure_8[ 'en' ] = 'https://www.maref.luiss.it/scarica-la-brochure/';
?>

<!-- Master 9 -->

<!-- Titolo -->
<?php $titolo_master_9 = array();
$titolo_master_9[ 'it' ] = '';
$titolo_master_9[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_9 = array();
$link_master_9[ 'it' ] = '';
$link_master_9[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_9 = array();
$link_brochure_9[ 'it' ] = '';
$link_brochure_9[ 'en' ] = '';
?>

<!-- Master 10 -->

<!-- Titolo -->
<?php $titolo_master_10 = array();
$titolo_master_10[ 'it' ] = '';
$titolo_master_10[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_10 = array();
$link_master_10[ 'it' ] = '';
$link_master_10[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_10 = array();
$link_brochure_10[ 'it' ] = '';
$link_brochure_10[ 'en' ] = '';
?>

<!-- Master 11 -->

<!-- Titolo -->
<?php $titolo_master_11 = array();
$titolo_master_11[ 'it' ] = '';
$titolo_master_11[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_11 = array();
$link_master_11[ 'it' ] = '';
$link_master_11[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_11 = array();
$link_brochure_11[ 'it' ] = '';
$link_brochure_11[ 'en' ] = '';
?>

<!-- Master 12 -->

<!-- Titolo -->
<?php $titolo_master_12 = array();
$titolo_master_12[ 'it' ] = '';
$titolo_master_12[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_12 = array();
$link_master_12[ 'it' ] = '';
$link_master_12[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_12 = array();
$link_brochure_12[ 'it' ] = '';
$link_brochure_12[ 'en' ] = '';
?>

<!-- Master 13 -->

<!-- Titolo -->
<?php $titolo_master_13 = array();
$titolo_master_13[ 'it' ] = '';
$titolo_master_13[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_13 = array();
$link_master_13[ 'it' ] = '';
$link_master_13[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_13 = array();
$link_brochure_13[ 'it' ] = '';
$link_brochure_13[ 'en' ] = '';
?>

<!-- Master 14 -->

<!-- Titolo -->
<?php $titolo_master_14 = array();
$titolo_master_14[ 'it' ] = '';
$titolo_master_14[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_14 = array();
$link_master_14[ 'it' ] = '';
$link_master_14[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_14 = array();
$link_brochure_14[ 'it' ] = '';
$link_brochure_14[ 'en' ] = '';
?>

<!-- Master 15 -->

<!-- Titolo -->
<?php $titolo_master_15 = array();
$titolo_master_15[ 'it' ] = '';
$titolo_master_15[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_15 = array();
$link_master_15[ 'it' ] = '';
$link_master_15[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_15 = array();
$link_brochure_15[ 'it' ] = '';
$link_brochure_15[ 'en' ] = '';
?>

<!-- Master 16 -->

<!-- Titolo -->
<?php $titolo_master_16 = array();
$titolo_master_16[ 'it' ] = '';
$titolo_master_16[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_16 = array();
$link_master_16[ 'it' ] = '';
$link_master_16[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_16 = array();
$link_brochure_16[ 'it' ] = '';
$link_brochure_16[ 'en' ] = '';
?>

<!-- Master 17 -->

<!-- Titolo -->
<?php $titolo_master_17 = array();
$titolo_master_17[ 'it' ] = '';
$titolo_master_17[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_17 = array();
$link_master_17[ 'it' ] = '';
$link_master_17[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_17 = array();
$link_brochure_17[ 'it' ] = '';
$link_brochure_17[ 'en' ] = '';
?>

<!-- Master 18 -->

<!-- Titolo -->
<?php $titolo_master_18 = array();
$titolo_master_18[ 'it' ] = '';
$titolo_master_18[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_18 = array();
$link_master_18[ 'it' ] = '';
$link_master_18[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_18 = array();
$link_brochure_18[ 'it' ] = '';
$link_brochure_18[ 'en' ] = '';
?>

<!-- Master 19 -->

<!-- Titolo -->
<?php $titolo_master_19 = array();
$titolo_master_19[ 'it' ] = '';
$titolo_master_19[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_19 = array();
$link_master_19[ 'it' ] = '';
$link_master_19[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_19 = array();
$link_brochure_19[ 'it' ] = '';
$link_brochure_19[ 'en' ] = '';
?>

<!-- Master 20 -->

<!-- Titolo -->
<?php $titolo_master_20 = array();
$titolo_master_20[ 'it' ] = '';
$titolo_master_20[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_20 = array();
$link_master_20[ 'it' ] = '';
$link_master_20[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_20 = array();
$link_brochure_20[ 'it' ] = '';
$link_brochure_20[ 'en' ] = '';
?>

<!-- Master 21 -->

<!-- Titolo -->
<?php $titolo_master_21 = array();
$titolo_master_21[ 'it' ] = '';
$titolo_master_21[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_21 = array();
$link_master_21[ 'it' ] = '';
$link_master_21[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_21 = array();
$link_brochure_21[ 'it' ] = '';
$link_brochure_21[ 'en' ] = '';
?>

<!-- Master 22 -->

<!-- Titolo -->
<?php $titolo_master_22 = array();
$titolo_master_22[ 'it' ] = '';
$titolo_master_22[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_22 = array();
$link_master_22[ 'it' ] = '';
$link_master_22[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_22 = array();
$link_brochure_22[ 'it' ] = '';
$link_brochure_22[ 'en' ] = '';
?>

<!-- Master 23 -->

<!-- Titolo -->
<?php $titolo_master_23 = array();
$titolo_master_23[ 'it' ] = '';
$titolo_master_23[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_23 = array();
$link_master_23[ 'it' ] = '';
$link_master_23[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_23 = array();
$link_brochure_23[ 'it' ] = '';
$link_brochure_23[ 'en' ] = '';
?>

<!-- Master 24 -->

<!-- Titolo -->
<?php $titolo_master_24 = array();
$titolo_master_24[ 'it' ] = '';
$titolo_master_24[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_24 = array();
$link_master_24[ 'it' ] = '';
$link_master_24[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_24 = array();
$link_brochure_24[ 'it' ] = '';
$link_brochure_24[ 'en' ] = '';
?>

<!-- Master 25 -->

<!-- Titolo -->
<?php $titolo_master_25 = array();
$titolo_master_25[ 'it' ] = '';
$titolo_master_25[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_25 = array();
$link_master_25[ 'it' ] = '';
$link_master_25[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_25 = array();
$link_brochure_25[ 'it' ] = '';
$link_brochure_25[ 'en' ] = '';
?>

<!-- Master 26 -->

<!-- Titolo -->
<?php $titolo_master_26 = array();
$titolo_master_26[ 'it' ] = '';
$titolo_master_26[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_26 = array();
$link_master_26[ 'it' ] = '';
$link_master_26[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_26 = array();
$link_brochure_26[ 'it' ] = '';
$link_brochure_26[ 'en' ] = '';
?>

<!-- Master 27 -->

<!-- Titolo -->
<?php $titolo_master_27 = array();
$titolo_master_27[ 'it' ] = '';
$titolo_master_27[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_27 = array();
$link_master_27[ 'it' ] = '';
$link_master_27[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_27 = array();
$link_brochure_27[ 'it' ] = '';
$link_brochure_27[ 'en' ] = '';
?>

<!-- Master 28 -->

<!-- Titolo -->
<?php $titolo_master_28 = array();
$titolo_master_28[ 'it' ] = '';
$titolo_master_28[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_28 = array();
$link_master_28[ 'it' ] = '';
$link_master_28[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_28 = array();
$link_brochure_28[ 'it' ] = '';
$link_brochure_28[ 'en' ] = '';
?>

<!-- Master 29 -->

<!-- Titolo -->
<?php $titolo_master_29 = array();
$titolo_master_29[ 'it' ] = '';
$titolo_master_29[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_29 = array();
$link_master_29[ 'it' ] = '';
$link_master_29[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_29 = array();
$link_brochure_29[ 'it' ] = '';
$link_brochure_29[ 'en' ] = '';
?>

<!-- Master 30 -->

<!-- Titolo -->
<?php $titolo_master_30 = array();
$titolo_master_30[ 'it' ] = '';
$titolo_master_30[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_30 = array();
$link_master_30[ 'it' ] = '';
$link_master_30[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_30 = array();
$link_brochure_30[ 'it' ] = '';
$link_brochure_30[ 'en' ] = '';
?>

<!-- Master 31 -->

<!-- Titolo -->
<?php $titolo_master_31 = array();
$titolo_master_31[ 'it' ] = '';
$titolo_master_31[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_31 = array();
$link_master_31[ 'it' ] = '';
$link_master_31[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_31 = array();
$link_brochure_31[ 'it' ] = '';
$link_brochure_31[ 'en' ] = '';
?>

<!-- Master 32 -->

<!-- Titolo -->
<?php $titolo_master_32 = array();
$titolo_master_32[ 'it' ] = '';
$titolo_master_32[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_32 = array();
$link_master_32[ 'it' ] = '';
$link_master_32[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_32 = array();
$link_brochure_32[ 'it' ] = '';
$link_brochure_32[ 'en' ] = '';
?>

<!-- Master 33 -->

<!-- Titolo -->
<?php $titolo_master_33 = array();
$titolo_master_33[ 'it' ] = '';
$titolo_master_33[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_33 = array();
$link_master_33[ 'it' ] = '';
$link_master_33[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_33 = array();
$link_brochure_33[ 'it' ] = '';
$link_brochure_33[ 'en' ] = '';
?>

<!-- Master 34 -->

<!-- Titolo -->
<?php $titolo_master_34 = array();
$titolo_master_34[ 'it' ] = '';
$titolo_master_34[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_34 = array();
$link_master_34[ 'it' ] = '';
$link_master_34[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_34 = array();
$link_brochure_34[ 'it' ] = '';
$link_brochure_34[ 'en' ] = '';
?>

<!-- Master 35 -->

<!-- Titolo -->
<?php $titolo_master_35 = array();
$titolo_master_35[ 'it' ] = '';
$titolo_master_35[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_35 = array();
$link_master_35[ 'it' ] = '';
$link_master_35[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_35 = array();
$link_brochure_35[ 'it' ] = '';
$link_brochure_35[ 'en' ] = '';
?>

<!-- Master 36 -->

<!-- Titolo -->
<?php $titolo_master_36 = array();
$titolo_master_36[ 'it' ] = '';
$titolo_master_36[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_36 = array();
$link_master_36[ 'it' ] = '';
$link_master_36[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_36 = array();
$link_brochure_36[ 'it' ] = '';
$link_brochure_36[ 'en' ] = '';
?>

<!-- Master 37 -->

<!-- Titolo -->
<?php $titolo_master_37 = array();
$titolo_master_37[ 'it' ] = '';
$titolo_master_37[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_37 = array();
$link_master_37[ 'it' ] = '';
$link_master_37[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_37 = array();
$link_brochure_37[ 'it' ] = '';
$link_brochure_37[ 'en' ] = '';
?>

<!-- Master 38 -->

<!-- Titolo -->
<?php $titolo_master_38 = array();
$titolo_master_38[ 'it' ] = '';
$titolo_master_38[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_38= array();
$link_master_38[ 'it' ] = '';
$link_master_38[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_38 = array();
$link_brochure_38[ 'it' ] = '';
$link_brochure_38[ 'en' ] = '';
?>

<!-- Master 39 -->

<!-- Titolo -->
<?php $titolo_master_39 = array();
$titolo_master_39[ 'it' ] = '';
$titolo_master_39[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_39 = array();
$link_master_39[ 'it' ] = '';
$link_master_39[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_39 = array();
$link_brochure_39[ 'it' ] = '';
$link_brochure_39[ 'en' ] = '';
?>

<!-- Master 40 -->

<!-- Titolo -->
<?php $titolo_master_40 = array();
$titolo_master_40[ 'it' ] = '';
$titolo_master_40[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_40 = array();
$link_master_40[ 'it' ] = '';
$link_master_40[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_40 = array();
$link_brochure_40[ 'it' ] = '';
$link_brochure_40[ 'en' ] = '';
?>

<!-- Master 41 -->

<!-- Titolo -->
<?php $titolo_master_41 = array();
$titolo_master_41[ 'it' ] = '';
$titolo_master_41[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_41 = array();
$link_master_41[ 'it' ] = '';
$link_master_41[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_41 = array();
$link_brochure_41[ 'it' ] = '';
$link_brochure_41[ 'en' ] = '';
?>

<!-- Master 42 -->

<!-- Titolo -->
<?php $titolo_master_42 = array();
$titolo_master_42[ 'it' ] = '';
$titolo_master_42[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_42 = array();
$link_master_42[ 'it' ] = '';
$link_master_42[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_42 = array();
$link_brochure_42[ 'it' ] = '';
$link_brochure_42[ 'en' ] = '';
?>

<!-- Master 43 -->

<!-- Titolo -->
<?php $titolo_master_43 = array();
$titolo_master_43[ 'it' ] = '';
$titolo_master_43[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_43 = array();
$link_master_43[ 'it' ] = '';
$link_master_43[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_43 = array();
$link_brochure_43[ 'it' ] = '';
$link_brochure_43[ 'en' ] = '';
?>

<!-- Master 44 -->

<!-- Titolo -->
<?php $titolo_master_44 = array();
$titolo_master_44[ 'it' ] = '';
$titolo_master_44[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_44 = array();
$link_master_44[ 'it' ] = '';
$link_master_44[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_44 = array();
$link_brochure_44[ 'it' ] = '';
$link_brochure_44[ 'en' ] = '';
?>

<!-- Master 45 -->

<!-- Titolo -->
<?php $titolo_master_45 = array();
$titolo_master_45[ 'it' ] = '';
$titolo_master_45[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_45 = array();
$link_master_45[ 'it' ] = '';
$link_master_45[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_45 = array();
$link_brochure_45[ 'it' ] = '';
$link_brochure_45[ 'en' ] = '';
?>

<!-- Master 46 -->

<!-- Titolo -->
<?php $titolo_master_46 = array();
$titolo_master_46[ 'it' ] = '';
$titolo_master_46[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_46 = array();
$link_master_46[ 'it' ] = '';
$link_master_46[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_46 = array();
$link_brochure_46[ 'it' ] = '';
$link_brochure_46[ 'en' ] = '';
?>

<!-- Master 47 -->

<!-- Titolo -->
<?php $titolo_master_47 = array();
$titolo_master_47[ 'it' ] = '';
$titolo_master_47[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_47 = array();
$link_master_47[ 'it' ] = '';
$link_master_47[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_47 = array();
$link_brochure_47[ 'it' ] = '';
$link_brochure_47[ 'en' ] = '';
?>

<!-- Master 48 -->

<!-- Titolo -->
<?php $titolo_master_48 = array();
$titolo_master_48[ 'it' ] = '';
$titolo_master_48[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_48 = array();
$link_master_48[ 'it' ] = '';
$link_master_48[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_48 = array();
$link_brochure_48[ 'it' ] = '';
$link_brochure_48[ 'en' ] = '';
?>

<!-- Master 49 -->

<!-- Titolo -->
<?php $titolo_master_49 = array();
$titolo_master_49[ 'it' ] = '';
$titolo_master_49[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_49 = array();
$link_master_49[ 'it' ] = '';
$link_master_49[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_49 = array();
$link_brochure_49[ 'it' ] = '';
$link_brochure_49[ 'en' ] = '';
?>

<!-- Master 50 -->

<!-- Titolo -->
<?php $titolo_master_50 = array();
$titolo_master_50[ 'it' ] = '';
$titolo_master_50[ 'en' ] = '';
?>
<!-- Programma -->
<?php $link_master_50 = array();
$link_master_50[ 'it' ] = '';
$link_master_50[ 'en' ] = '';
?>
<!-- Brochure -->
<?php $link_brochure_50 = array();
$link_brochure_50[ 'it' ] = '';
$link_brochure_50[ 'en' ] = '';
?>



<div class="container-fluid <?php if (has_post_thumbnail( $post->ID ) ): ?>
                   header-pic" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');
                   <?php else : ?>
                   header-nopic
                   <?php endif; ?>
">
    <div class="container">
        <div class="row">
            <h1><?php the_title();?></h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>Come here to be challenged. Leave ready to take on the most important challenges of our time. At LUISS Business School, we create wise leaders who aspire to MAKE  the difference in the world of business and beyond. Join us.</p>
                <a href="https://www.youtube.com/watch?v=7VuI-HXka6s&feature=emb_title">Watch the video</a>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- TAB -->
    <section>
        <!-- NAVIGAZIONE -->
        <ul class="nav nav-tabs auto" id="program-type" role="tablist">
            <!-- ROMA -->
            <li class="nav-item"><a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#roma" role="tab" aria-controls="tab1" aria-selected="true"><?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></a></li>

            <!-- MILANO -->
            <li class="nav-item"><a class="nav-link" id="tab2-tab" data-toggle="tab" href="#milano" role="tab" aria-controls="tab2" aria-selected="false"><?php echo $sede_mi[ICL_LANGUAGE_CODE] ?></a></li>

            <!-- BELLUNO -->
            <li class="nav-item"><a class="nav-link" id="tab3-tab" data-toggle="tab" href="#belluno" role="tab" aria-controls="tab3" aria-selected="false"><?php echo $sede_be[ICL_LANGUAGE_CODE] ?></a></li>
        </ul>

        <!-- CONTENUTO -->
        <div class="tab-content" id="ProgramType">
            <!-- ROMA -->
            <div class="tab-pane fade active in" id="roma" role="tabpanel" aria-labelledby="roma-tab">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <h2><?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></h2>
                        <p>Tutti i Master che si svolgono a <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?>.</p>
                    </div>
                </div>
<div class="row">
                <!-- MASTER 1 -->
                <div class="col-md-4 col-sm-6">
                    <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
                    <h6><?php echo $titolo_master_1[ICL_LANGUAGE_CODE] ?>
                    <br /><?php echo $sottotitolo_master_1[ICL_LANGUAGE_CODE] ?></h6>
                    <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
<p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
                    <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
                    <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
                    <div class="row">
                        <a href="<?php echo $link_master_1[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
                        <a href="<?php echo $link_brochure_1[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
                    </div>
                </div>
                <!-- END MASTER 1 -->
                </div>               
            </div>

            <!-- MILANO -->
            <div class="tab-pane p-4 fade" id="milano" role="tabpanel" aria-labelledby="milano-tab">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <h2><?php echo $sede_mi[ICL_LANGUAGE_CODE] ?></h2>
                        <p>Tutti i Master che si svolgono a <?php echo $sede_mi[ICL_LANGUAGE_CODE] ?>.</p>
                    </div>
                </div>
<div class="row"></div>
            </div>

            <!-- BELLUNO -->
            <div class="tab-pane p-4 fade" id="belluno" role="tabpanel" aria-labelledby="belluno-tab">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <h2><?php echo $sede_be[ICL_LANGUAGE_CODE] ?></h2>
                        <p>Tutti i Master che si svolgono a <?php echo $sede_be[ICL_LANGUAGE_CODE] ?>.</p>
                    </div>
                </div>
      <div class="row"></div>         
            </div>
        </div>
    </section>
</div>

<?php edit_post_link('<p>Modifica Pagina</p>', ''); ?>

 <?php get_footer(2017);?>