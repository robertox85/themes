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

<!-- INSERIRE SPIEGAZIONE ID DI MASTER E PROGRAMMI CON LINK AL FILE CON GLI ID -->

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
$specialistici[ 'en' ] = 'Specialised Master';
?>

<?php $executive = array();
$executive[ 'it' ] = 'Executive Master';
$executive[ 'en' ] = 'Executive Master';
?>

<?php $altaformazione = array();
$altaformazione[ 'it' ] = 'Programmi di Alta Formazione';
$altaformazione[ 'en' ] = 'Specialisation Programme';
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

	<?php $durata_full_11 = array();
$durata_full_11[ 'it' ] = '11 mesi Full-time';
$durata_full_11[ 'en' ] = '11 months Full-time study';
?>

	<?php $durata_full_3 = array();
$durata_full_11[ 'it' ] = '3 mesi Full-time';
$durata_full_11[ 'en' ] = '3 months Full-time study';
?>

	<?php $durata_part = array();
$durata_part[ 'it' ] = '12 mesi part-time';
$durata_part[ 'en' ] = '12 months of part-time study';
?>

<?php $durata_part_6 = array();
$durata_part_6[ 'it' ] = '6 mesi part-time';
$durata_part_6[ 'en' ] = '6 months of part-time study';
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



	<!-- Master -->

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
	<?php $sottotitolo_master_2 = array();
$sottotitolo_master_2[ 'it' ] = 'Major del Master in International Management';
$sottotitolo_master_2[ 'en' ] = 'Major of the Master in International Management';
?>
	<!-- Inizio -->
	<?php $inizio_master_2 = array();
$inizio_master_2[ 'it' ] = '21 Set 2020';
$inizio_master_2[ 'en' ] = 'Set 21, 2020';
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
	<!-- Inizio -->
	<?php $inizio_master_3 = array();
$inizio_master_3[ 'it' ] = '21 Set 2020';
$inizio_master_3[ 'en' ] = 'Set 21, 2020';
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
	<?php $sottotitolo_master_4 = array();
$sottotitolo_master_4[ 'it' ] = 'Major del Master in Financial Management';
$sottotitolo_master_4[ 'en' ] = 'Major of the Master in Master in Financial Management';
?>
	<!-- Inizio -->
	<?php $inizio_master_4 = array();
$inizio_master_4[ 'it' ] = '21 Set 2020';
$inizio_master_4[ 'en' ] = 'Set 21, 2020';
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
	<?php $sottotitolo_master_5 = array();
$sottotitolo_master_5[ 'it' ] = 'Major del Master in Financial Management';
$sottotitolo_master_5[ 'en' ] = 'Major of the Master in Master in Financial Management';
?>
	<!-- Inizio -->
	<?php $inizio_master_5 = array();
$inizio_master_5[ 'it' ] = '26 Ott 2020';
$inizio_master_5[ 'en' ] = 'Oct 26, 2020';
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
	<?php $sottotitolo_master_6 = array();
$sottotitolo_master_6[ 'it' ] = 'Major del Master in Financial Management';
$sottotitolo_master_6[ 'en' ] = 'Major of the Master in Master in Financial Management';
?>
	<!-- Inizio -->
	<?php $inizio_master_6 = array();
$inizio_master_6[ 'it' ] = '26 Ott 2020';
$inizio_master_6[ 'en' ] = 'Oct 26, 2020';
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
	<?php $sottotitolo_master_7 = array();
$sottotitolo_master_7[ 'it' ] = 'Major del Master in Financial Management';
$sottotitolo_master_7[ 'en' ] = 'Major of the Master in Master in Financial Management';
?>
	<!-- Inizio -->
	<?php $inizio_master_7 = array();
$inizio_master_7[ 'it' ] = '9 Nov, 2020';
$inizio_master_7[ 'en' ] = 'Nov 9, 2020';
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
	<?php $sottotitolo_master_8 = array();
$sottotitolo_master_8[ 'it' ] = 'Major del Master in Financial Management';
$sottotitolo_master_8[ 'en' ] = 'Major of the Master in Master in Financial Management';
?>
	<!-- Inizio -->
	<?php $inizio_master_8 = array();
$inizio_master_8[ 'it' ] = '26 Oct, 2020';
$inizio_master_8[ 'en' ] = 'Oct 26, 2020';
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
$titolo_master_9[ 'it' ] = 'Business Transformation';
$titolo_master_9[ 'en' ] = 'Business Transformation';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_9 = array();
$sottotitolo_master_9[ 'it' ] = 'Major del Master in Management and Technology';
$sottotitolo_master_9[ 'en' ] = 'Major of the Master in Management and Technology';
?>
	<!-- Inizio -->
	<?php $inizio_master_9 = array();
$inizio_master_9[ 'it' ] = '21 Set 2020';
$inizio_master_9[ 'en' ] = 'Set 21, 2020';
?>
	<!-- Programma -->
	<?php $link_master_9 = array();
$link_master_9[ 'it' ] = 'https://businessschool.luiss.it/management-technology-digital-ecosystem/';
$link_master_9[ 'en' ] = 'https://businessschool.luiss.it/management-technology-digital-ecosystem/';
?>
	<!-- Brochure -->
	<?php $link_brochure_9 = array();
$link_brochure_9[ 'it' ] = 'https://businessschool.luiss.it/management-technology-digital-ecosystem/download-brochure/';
$link_brochure_9[ 'en' ] = 'https://businessschool.luiss.it/management-technology-digital-ecosystem/download-brochure/';
?>

	<!-- Master 10 -->

	<!-- Titolo -->
	<?php $titolo_master_10 = array();
$titolo_master_10[ 'it' ] = 'Global Supply Chain';
$titolo_master_10[ 'en' ] = 'Global Supply Chain';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_10 = array();
$sottotitolo_master_10[ 'it' ] = 'Major del Master in Management and Technology';
$sottotitolo_master_10[ 'en' ] = 'Major of the Master in Management and Technology';
?>
	<!-- Inizio -->
	<?php $inizio_master_10 = array();
$inizio_master_10[ 'it' ] = '21 Set 2020';
$inizio_master_10[ 'en' ] = 'Set 21, 2020';
?>
	<!-- Programma -->
	<?php $link_master_10 = array();
$link_master_10[ 'it' ] = 'https://businessschool.luiss.it/global-supply-chain-management/';
$link_master_10[ 'en' ] = 'https://businessschool.luiss.it/global-supply-chain-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_10 = array();
$link_brochure_10[ 'it' ] = 'https://businessschool.luiss.it/global-supply-chain-management/download-brochure/';
$link_brochure_10[ 'en' ] = 'https://businessschool.luiss.it/global-supply-chain-management/download-brochure/';
?>

<!-- Master 11 -->

	<!-- Titolo -->
	<?php $titolo_master_11 = array();
$titolo_master_11[ 'it' ] = 'Strategy for Disruptive Growth';
$titolo_master_11[ 'en' ] = 'Strategy for Disruptive Growth';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_11 = array();
$sottotitolo_master_11[ 'it' ] = 'Major del Master in Management and Technology';
$sottotitolo_master_11[ 'en' ] = 'Major of the Master in Management and Technology';
?>
	<!-- Inizio -->
	<?php $inizio_master_11 = array();
$inizio_master_11[ 'it' ] = '26 Oct 2020';
$inizio_master_11[ 'en' ] = 'Oct 26, 2020';
?>
	<!-- Programma -->
	<?php $link_master_11 = array();
$link_master_11[ 'it' ] = 'https://businessschool.luiss.it/disruptive-ma/';
$link_master_11[ 'en' ] = 'https://businessschool.luiss.it/disruptive-ma/';
?>
	<!-- Brochure -->
	<?php $link_brochure_11 = array();
$link_brochure_11[ 'it' ] = 'https://businessschool.luiss.it/disruptive-ma/download-brochure/';
$link_brochure_11[ 'en' ] = 'https://businessschool.luiss.it/disruptive-ma/download-brochure/';
?>

	<!-- Master 12 -->

	<!-- Titolo -->
	<?php $titolo_master_12 = array();
$titolo_master_12[ 'it' ] = 'Digital Business Strategy ';
$titolo_master_12[ 'en' ] = 'Digital Business Strategy ';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_12 = array();
$sottotitolo_master_12[ 'it' ] = 'Major del Master in Management and Technology';
$sottotitolo_master_12[ 'en' ] = 'Major of the Master in Management and Technology';
?>
	<!-- Inizio -->
	<?php $inizio_master_12 = array();
$inizio_master_12[ 'it' ] = 'Nov 2020';
$inizio_master_12[ 'en' ] = 'Nov 2020';
?>
	<!-- Programma -->
	<?php $link_master_12 = array();
$link_master_12[ 'it' ] = 'https://businessschool.luiss.it/digital-business-strategy/';
$link_master_12[ 'en' ] = 'https://businessschool.luiss.it/digital-business-strategy/';
?>
	<!-- Brochure -->
	<?php $link_brochure_12 = array();
$link_brochure_12[ 'it' ] = 'https://businessschool.luiss.it/digital-business-strategy/download-brochure/';
$link_brochure_12[ 'en' ] = 'https://businessschool.luiss.it/digital-business-strategy/download-brochure/';
?>

	<!-- Master 13 -->

	<!-- Titolo -->
	<?php $titolo_master_13 = array();
$titolo_master_13[ 'it' ] = 'Digital Business Strategy ';
$titolo_master_13[ 'en' ] = 'Digital Business Strategy ';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_13 = array();
$sottotitolo_master_13[ 'it' ] = 'Major del Master in Management and Technology';
$sottotitolo_master_13[ 'en' ] = 'Major of the Master in Management and Technology';
?>
	<!-- Inizio -->
	<?php $inizio_master_13 = array();
$inizio_master_13[ 'it' ] = '9 Nov 2020';
$inizio_master_13[ 'en' ] = 'Nov 9, 2020';
?>
	<!-- Programma -->
	<?php $link_master_13 = array();
$link_master_13[ 'it' ] = 'https://businessschool.luiss.it/digital-business-strategy-belluno/download-brochure/';
$link_master_13[ 'en' ] = 'https://businessschool.luiss.it/digital-business-strategy-belluno/download-brochure/';
?>
	<!-- Brochure -->
	<?php $link_brochure_13 = array();
$link_brochure_13[ 'it' ] = 'https://businessschool.luiss.it/digital-business-strategy-belluno//';
$link_brochure_13[ 'en' ] = 'https://businessschool.luiss.it/digital-business-strategy-belluno/';
?>

	<!-- Master 14 -->

	<!-- Titolo -->
	<?php $titolo_master_14 = array();
$titolo_master_14[ 'it' ] = 'Fashion Management ';
$titolo_master_14[ 'en' ] = 'Fashion Management ';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_14 = array();
$sottotitolo_master_14[ 'it' ] = 'Major del Master in Fashion, Luxury and Tourism ';
$sottotitolo_master_14[ 'en' ] = 'Major of the Master in Fashion, Luxury and Tourism ';
?>
	<!-- Inizio -->
	<?php $inizio_master_14 = array();
$inizio_master_14[ 'it' ] = '21 Set 2020';
$inizio_master_14[ 'en' ] = 'Set 21, 2020';
?>
	<!-- Programma -->
	<?php $link_master_14 = array();
$link_master_14[ 'it' ] = 'https://businessschool.luiss.it/master-of-fashion/';
$link_master_14[ 'en' ] = 'https://businessschool.luiss.it/master-of-fashion/';
?>
	<!-- Brochure -->
	<?php $link_brochure_14 = array();
$link_brochure_14[ 'it' ] = 'https://businessschool.luiss.it/master-of-fashion/download-brochure/';
$link_brochure_14[ 'en' ] = 'https://businessschool.luiss.it/master-of-fashion/download-brochure/';
?>

	<!-- Master 15 -->

	<!-- Titolo -->
	<?php $titolo_master_15 = array();
$titolo_master_15[ 'it' ] = 'Luxury Management';
$titolo_master_15[ 'en' ] = 'Luxury Management';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_15 = array();
$sottotitolo_master_15[ 'it' ] = 'Major del Master in Fashion, Luxury and Tourism ';
$sottotitolo_master_15[ 'en' ] = 'Major of the Master in Fashion, Luxury and Tourism ';
?>
	<!-- Inizio -->
	<?php $inizio_master_15 = array();
$inizio_master_15[ 'it' ] = '21 Set 2020';
$inizio_master_15[ 'en' ] = 'Set 21, 2020';
?>
	<!-- Programma -->
	<?php $link_master_15 = array();
$link_master_15[ 'it' ] = 'https://businessschool.luiss.it/master-of-luxury/';
$link_master_15[ 'en' ] = 'https://businessschool.luiss.it/master-of-luxury/';
?>
	<!-- Brochure -->
	<?php $link_brochure_15 = array();
$link_brochure_15[ 'it' ] = 'https://businessschool.luiss.it/master-of-luxury/download-brochure/';
$link_brochure_15[ 'en' ] = 'https://businessschool.luiss.it/master-of-luxury/download-brochure/';
?>

	<!-- Master 16 -->

	<!-- Titolo -->
	<?php $titolo_master_16 = array();
$titolo_master_16[ 'it' ] = 'Tourism Management ';
$titolo_master_16[ 'en' ] = 'Tourism Management ';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_16 = array();
$sottotitolo_master_16[ 'it' ] = 'Major del Master in Fashion, Luxury and Tourism ';
$sottotitolo_master_16[ 'en' ] = 'Major of the Master in Fashion, Luxury and Tourism ';
?>
	<!-- Inizio -->
	<?php $inizio_master_16 = array();
$inizio_master_16[ 'it' ] = '21 Set 2020';
$inizio_master_16[ 'en' ] = 'Set 21, 2020';
?>
	<!-- Programma -->
	<?php $link_master_16 = array();
$link_master_16[ 'it' ] = 'https://businessschool.luiss.it/tourism-management/';
$link_master_16[ 'en' ] = 'https://businessschool.luiss.it/tourism-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_16 = array();
$link_brochure_16[ 'it' ] = 'https://businessschool.luiss.it/tourism-management/download-brochure/';
$link_brochure_16[ 'en' ] = 'https://businessschool.luiss.it/tourism-management/download-brochure/';
?>

	<!-- Master 17 -->

	<!-- Titolo -->
	<?php $titolo_master_17 = array();
$titolo_master_17[ 'it' ] = 'Tourism Management ';
$titolo_master_17[ 'en' ] = 'Tourism Management ';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_17 = array();
$sottotitolo_master_17[ 'it' ] = 'Major del Master in Fashion, Luxury and Tourism ';
$sottotitolo_master_17[ 'en' ] = 'Major of the Master in Fashion, Luxury and Tourism ';
?>
	<!-- Inizio -->
	<?php $inizio_master_17 = array();
$inizio_master_17[ 'it' ] = '21 Set 2020';
$inizio_master_17[ 'en' ] = 'Set 21, 2020';
?>
	<!-- Programma -->
	<?php $link_master_17 = array();
$link_master_17[ 'it' ] = 'https://businessschool.luiss.it/tourism-management-belluno/';
$link_master_17[ 'en' ] = 'https://businessschool.luiss.it/tourism-management-belluno/';
?>
	<!-- Brochure -->
	<?php $link_brochure_17 = array();
$link_brochure_17[ 'it' ] = 'https://businessschool.luiss.it/tourism-management-belluno/download-brochure/';
$link_brochure_17[ 'en' ] = 'https://businessschool.luiss.it/tourism-management-belluno/download-brochure/';
?>

	<!-- Master 18 -->

	<!-- Titolo -->
	<?php $titolo_master_18 = array();
$titolo_master_18[ 'it' ] = 'Fashion & Luxury Business';
$titolo_master_18[ 'en' ] = 'Fashion & Luxury Business';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_18 = array();
$sottotitolo_master_18[ 'it' ] = 'Major del Master in Fashion, Luxury and Tourism ';
$sottotitolo_master_18[ 'en' ] = 'Major of the Master in Fashion, Luxury and Tourism ';
?>
	<!-- Inizio -->
	<?php $inizio_master_18 = array();
$inizio_master_18[ 'it' ] = 'TBD';
$inizio_master_18[ 'en' ] = 'TBD';
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
$titolo_master_19[ 'it' ] = 'Project Management';
$titolo_master_19[ 'en' ] = 'Project Management';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_19 = array();
$sottotitolo_master_19[ 'it' ] = 'Major del Master in Project Management';
$sottotitolo_master_19[ 'en' ] = 'Major of the Master in Project Management';
?>
	<!-- Inizio -->
	<?php $inizio_master_19 = array();
$inizio_master_19[ 'it' ] = '26 Ott 2020';
$inizio_master_19[ 'en' ] = 'Oct 26, 2020';
?>
	<!-- Programma -->
	<?php $link_master_19 = array();
$link_master_19[ 'it' ] = 'https://businessschool.luiss.it/project-management/';
$link_master_19[ 'en' ] = 'https://businessschool.luiss.it/project-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_19 = array();
$link_brochure_19[ 'it' ] = 'https://businessschool.luiss.it/project-management/download-brochure/';
$link_brochure_19[ 'en' ] = 'https://businessschool.luiss.it/project-management/download-brochure/';
?>

	<!-- Master 20 -->

	<!-- Titolo -->
	<?php $titolo_master_20 = array();
$titolo_master_20[ 'it' ] = 'Project Management for Development Cooperation';
$titolo_master_20[ 'en' ] = 'Project Management for Development Cooperation';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_20 = array();
$sottotitolo_master_20[ 'it' ] = 'Major del Master in Project Management';
$sottotitolo_master_20[ 'en' ] = 'Major of the Master in Project Management';
?>
	<!-- Inizio -->
	<?php $inizio_master_20 = array();
$inizio_master_20[ 'it' ] = '26 Ott 2020';
$inizio_master_20[ 'en' ] = 'Oct 26, 2020';
?>
	<!-- Programma -->
	<?php $link_master_20 = array();
$link_master_20[ 'it' ] = 'https://businessschool.luiss.it/project-management-cooperazione-internazionale/';
$link_master_20[ 'en' ] = 'https://businessschool.luiss.it/project-management-cooperazione-internazionale/';
?>
	<!-- Brochure -->
	<?php $link_brochure_20 = array();
$link_brochure_20[ 'it' ] = 'https://businessschool.luiss.it/project-management-cooperazione-internazionale/download-brochure/';
$link_brochure_20[ 'en' ] = 'https://businessschool.luiss.it/project-management-cooperazione-internazionale/download-brochure/';
?>

	<!-- Master 21 -->

	<!-- Titolo -->
	<?php $titolo_master_21 = array();
$titolo_master_21[ 'it' ] = 'Master in Entrepreneurship';
$titolo_master_21[ 'en' ] = 'Master in Entrepreneurship';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_21 = array();
$sottotitolo_master_21[ 'it' ] = '';
$sottotitolo_master_21[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_master_21 = array();
$inizio_master_21[ 'it' ] = 'TBD';
$inizio_master_21[ 'en' ] = 'TBD';
?>
	<!-- Programma -->
	<?php $link_master_21 = array();
$link_master_21[ 'it' ] = 'https://businessschool.luiss.it/entrepreneurship/';
$link_master_21[ 'en' ] = 'https://businessschool.luiss.it/entrepreneurship/';
?>
	<!-- Brochure -->
	<?php $link_brochure_21 = array();
$link_brochure_21[ 'it' ] = 'https://businessschool.luiss.it/entrepreneurship/download-brochure/';
$link_brochure_21[ 'en' ] = 'https://businessschool.luiss.it/entrepreneurship/download-brochure/';
?>

	<!-- Master 22 -->

	<!-- Titolo -->
	<?php $titolo_master_22 = array();
$titolo_master_22[ 'it' ] = 'Master in Gestione delle Risorse Umane e Organizzazione';
$titolo_master_22[ 'en' ] = 'Master in Gestione delle Risorse Umane e Organizzazione';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_22 = array();
$sottotitolo_master_22[ 'it' ] = '';
$sottotitolo_master_22[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_master_22 = array();
$inizio_master_22[ 'it' ] = '26 Ott 2020';
$inizio_master_22[ 'en' ] = 'Oct 26, 2020';
?>
	<!-- Programma -->
	<?php $link_master_22 = array();
$link_master_22[ 'it' ] = 'https://businessschool.luiss.it/gruo/';
$link_master_22[ 'en' ] = 'https://businessschool.luiss.it/gruo/';
?>
	<!-- Brochure -->
	<?php $link_brochure_22 = array();
$link_brochure_22[ 'it' ] = 'https://businessschool.luiss.it/gruo/download-brochure/';
$link_brochure_22[ 'en' ] = 'https://businessschool.luiss.it/gruo/download-brochure/';
?>

	<!-- Master 23 MILANO -->

	<!-- Titolo -->
	<?php $titolo_master_23 = array();
$titolo_master_23[ 'it' ] = 'Master in Gestione delle Risorse Umane e Organizzazione';
$titolo_master_23[ 'en' ] = 'Master in Gestione delle Risorse Umane e Organizzazione';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_23 = array();
$sottotitolo_master_23[ 'it' ] = '';
$sottotitolo_master_23[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_master_23 = array();
$inizio_master_23[ 'it' ] = 'Nov 2020';
$inizio_master_23[ 'en' ] = 'Nov 2020';
?>
	<!-- Programma -->
	<?php $link_master_23 = array();
$link_master_23[ 'it' ] = 'https://businessschool.luiss.it/gruo/';
$link_master_23[ 'en' ] = 'https://businessschool.luiss.it/gruo/';
?>
	<!-- Brochure -->
	<?php $link_brochure_23 = array();
$link_brochure_23[ 'it' ] = 'https://businessschool.luiss.it/gruo/download-brochure/';
$link_brochure_23[ 'en' ] = 'https://businessschool.luiss.it/gruo/download-brochure/';
?>

	<!-- Master 24 -->

	<!-- Titolo -->
	<?php $titolo_master_24 = array();
$titolo_master_24[ 'it' ] = 'Master in Diritto Tributario Contabilità e Pianificazione Fiscale';
$titolo_master_24[ 'en' ] = 'Master in Diritto Tributario Contabilità e Pianificazione Fiscale';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_24 = array();
$sottotitolo_master_24[ 'it' ] = '';
$sottotitolo_master_24[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_master_24 = array();
$inizio_master_24[ 'it' ] = '26 Ott 2020';
$inizio_master_24[ 'en' ] = 'Oct 26, 2020';
?>
	<!-- Programma -->
	<?php $link_master_24 = array();
$link_master_24[ 'it' ] = 'https://businessschool.luiss.it/diritto-tributario/';
$link_master_24[ 'en' ] = 'https://businessschool.luiss.it/diritto-tributario/';
?>
	<!-- Brochure -->
	<?php $link_brochure_24 = array();
$link_brochure_24[ 'it' ] = 'https://businessschool.luiss.it/diritto-tributario/download-brochure/';
$link_brochure_24[ 'en' ] = 'https://businessschool.luiss.it/diritto-tributario/download-brochure/';
?>

	<!-- Master 25 -->

	<!-- Titolo -->
	<?php $titolo_master_25 = array();
$titolo_master_25[ 'it' ] = 'Digital Marketing ';
$titolo_master_25[ 'en' ] = 'Digital Marketing ';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_25 = array();
$sottotitolo_master_25[ 'it' ] = 'Major del Master in Marketing Management';
$sottotitolo_master_25[ 'en' ] = 'Major of the Master in Marketing Management';
?>
	<!-- Inizio -->
	<?php $inizio_master_25 = array();
$inizio_master_25[ 'it' ] = '26 Ott 2020';
$inizio_master_25[ 'en' ] = 'Oct 26, 2020';
?>
	<!-- Programma -->
	<?php $link_master_25 = array();
$link_master_25[ 'it' ] = 'https://businessschool.luiss.it/marketing-management-digital-marketing/';
$link_master_25[ 'en' ] = 'https://businessschool.luiss.it/marketing-management-digital-marketing/';
?>
	<!-- Brochure -->
	<?php $link_brochure_25 = array();
$link_brochure_25[ 'it' ] = 'https://businessschool.luiss.it/marketing-management-digital-marketing/download-brochure/';
$link_brochure_25[ 'en' ] = 'https://businessschool.luiss.it/marketing-management-digital-marketing/download-brochure/';
?>

	<!-- Master 26 MILANO -->

	<!-- Titolo -->
	<?php $titolo_master_26 = array();
$titolo_master_26[ 'it' ] = 'Digital Marketing ';
$titolo_master_26[ 'en' ] = 'Digital Marketing ';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_26 = array();
$sottotitolo_master_26[ 'it' ] = 'Major del Master in Marketing Management';
$sottotitolo_master_26[ 'en' ] = 'Major of the Master in Marketing Management';
?>
	<!-- Inizio -->
	<?php $inizio_master_26 = array();
$inizio_master_26[ 'it' ] = 'Nov 2020';
$inizio_master_26[ 'en' ] = 'Nov 2020';
?>
	<!-- Programma -->
	<?php $link_master_26 = array();
$link_master_26[ 'it' ] = 'https://businessschool.luiss.it/marketing-management-digital-marketing/';
$link_master_26[ 'en' ] = 'https://businessschool.luiss.it/marketing-management-digital-marketing/';
?>
	<!-- Brochure -->
	<?php $link_brochure_26 = array();
$link_brochure_26[ 'it' ] = 'https://businessschool.luiss.it/marketing-management-digital-marketing/download-brochure/';
$link_brochure_26[ 'en' ] = 'https://businessschool.luiss.it/marketing-management-digital-marketing/download-brochure/';
?>

	<!-- Master 27 -->

	<!-- Titolo -->
	<?php $titolo_master_27 = array();
$titolo_master_27[ 'it' ] = 'Sales and Account Management';
$titolo_master_27[ 'en' ] = 'Sales and Account Management';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_27 = array();
$sottotitolo_master_27[ 'it' ] = 'Major del Master in Marketing Management';
$sottotitolo_master_27[ 'en' ] = 'Major of the Master in Marketing Management';
?>
	<!-- Inizio -->
	<?php $inizio_master_27 = array();
$inizio_master_27[ 'it' ] = '26 Ott 2020';
$inizio_master_27[ 'en' ] = 'Oct 26, 2020';
?>
	<!-- Programma -->
	<?php $link_master_27 = array();
$link_master_27[ 'it' ] = 'https://businessschool.luiss.it/marketing-management/';
$link_master_27[ 'en' ] = 'https://businessschool.luiss.it/marketing-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_27 = array();
$link_brochure_27[ 'it' ] = 'https://businessschool.luiss.it/marketing-management/downlaod-brochure/';
$link_brochure_27[ 'en' ] = 'https://businessschool.luiss.it/marketing-management/downlaod-brochure/';
?>

	<!-- Master 28 MILANO -->

	<!-- Titolo -->
	<?php $titolo_master_28 = array();
$titolo_master_28[ 'it' ] = 'Sales and Account Management';
$titolo_master_28[ 'en' ] = 'Sales and Account Management';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_28 = array();
$sottotitolo_master_28[ 'it' ] = 'Major del Master in Marketing Management';
$sottotitolo_master_28[ 'en' ] = 'Major of the Master in Marketing Management';
?>
	<!-- Inizio -->
	<?php $inizio_master_28 = array();
$inizio_master_28[ 'it' ] = '9 Nov 2020';
$inizio_master_28[ 'en' ] = 'Nov 9, 2020';
?>
	<!-- Programma -->
	<?php $link_master_28 = array();
$link_master_28[ 'it' ] = 'https://businessschool.luiss.it/marketing-management/';
$link_master_28[ 'en' ] = 'https://businessschool.luiss.it/marketing-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_28 = array();
$link_brochure_28[ 'it' ] = 'https://businessschool.luiss.it/marketing-management/downlaod-brochure/';
$link_brochure_28[ 'en' ] = 'https://businessschool.luiss.it/marketing-management/downlaod-brochure/';
?>

	<!-- Master 29 -->

	<!-- Titolo -->
	<?php $titolo_master_29 = array();
$titolo_master_29[ 'it' ] = 'Retail e-commerce e Gestione Multicanale';
$titolo_master_29[ 'en' ] = 'Retail e-commerce e Gestione Multicanale';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_29 = array();
$sottotitolo_master_29[ 'it' ] = 'Major del Master in Marketing Management';
$sottotitolo_master_29[ 'en' ] = 'Major of the Master in Marketing Management';
?>
	<!-- Inizio -->
	<?php $inizio_master_29 = array();
$inizio_master_29[ 'it' ] = '26 Ott 2020';
$inizio_master_29[ 'en' ] = 'oct 26, 2020';
?>
	<!-- Programma -->
	<?php $link_master_29 = array();
$link_master_29[ 'it' ] = 'https://businessschool.luiss.it/marketing-management-retailing-ecommerce/';
$link_master_29[ 'en' ] = 'https://businessschool.luiss.it/marketing-management-retailing-ecommerce/';
?>
	<!-- Brochure -->
	<?php $link_brochure_29 = array();
$link_brochure_29[ 'it' ] = 'https://businessschool.luiss.it/marketing-management-retailing-ecommerce/download-brochure/';
$link_brochure_29[ 'en' ] = 'https://businessschool.luiss.it/marketing-management-retailing-ecommerce/download-brochure/';
?>

	<!-- Master 30 -->

	<!-- Titolo -->
	<?php $titolo_master_30 = array();
$titolo_master_30[ 'it' ] = 'Trade Management';
$titolo_master_30[ 'en' ] = 'Trade Management';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_30 = array();
$sottotitolo_master_30[ 'it' ] = 'Major del Master in Marketing Management';
$sottotitolo_master_30[ 'en' ] = 'Major of the Master in Marketing Management';
?>
	<!-- Inizio -->
	<?php $inizio_master_30 = array();
$inizio_master_30[ 'it' ] = '26 Ott 2020';
$inizio_master_30[ 'en' ] = 'oct 26, 2020';
?>
	<!-- Programma -->
	<?php $link_master_30 = array();
$link_master_30[ 'it' ] = 'https://businessschool.luiss.it/trade-management/';
$link_master_30[ 'en' ] = 'https://businessschool.luiss.it/trade-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_30 = array();
$link_brochure_30[ 'it' ] = 'https://businessschool.luiss.it/trade-management/download-brochure/';
$link_brochure_30[ 'en' ] = 'https://businessschool.luiss.it/trade-management/download-brochure/';
?>

	<!-- Master 31 -->

	<!-- Titolo -->
	<?php $titolo_master_31 = array();
$titolo_master_31[ 'it' ] = 'Digital Export';
$titolo_master_31[ 'en' ] = 'Digital Export';
?>
	<!-- Sottotitolo -->
<?php $sottotitolo_master_31 = array();
$sottotitolo_master_31[ 'it' ] = 'Major del Master in Marketing Management';
$sottotitolo_master_31[ 'en' ] = 'Major of the Master in Marketing Management';
?>
	<!-- Inizio -->
	<?php $inizio_master_31 = array();
$inizio_master_31[ 'it' ] = '26 Ott 2020';
$inizio_master_31[ 'en' ] = 'oct 26, 2020';
?>
	<!-- Programma -->
	<?php $link_master_31 = array();
$link_master_31[ 'it' ] = 'https://businessschool.luiss.it/master-digital-export/';
$link_master_31[ 'en' ] = 'https://businessschool.luiss.it/master-digital-export/';
?>
	<!-- Brochure -->
	<?php $link_brochure_31 = array();
$link_brochure_31[ 'it' ] = 'https://businessschool.luiss.it/master-digital-export/download-brochure/';
$link_brochure_31[ 'en' ] = 'https://businessschool.luiss.it/master-digital-export/download-brochure/';
?>

	<!-- Master 32 -->

	<!-- Titolo -->
	<?php $titolo_master_32 = array();
$titolo_master_32[ 'it' ] = 'Corporate Event: Management, PR and Communication ';
$titolo_master_32[ 'en' ] = 'Corporate Event: Management, PR and Communication ';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_32 = array();
$sottotitolo_master_32[ 'it' ] = 'Major del Master in Marketing Management';
$sottotitolo_master_32[ 'en' ] = 'Major of the Master in Marketing Management';
?>
	<!-- Inizio -->
	<?php $inizio_master_32 = array();
$inizio_master_32[ 'it' ] = 'Nov 2020';
$inizio_master_32[ 'en' ] = 'Nov 2020';
?>
	<!-- Programma -->
	<?php $link_master_32 = array();
$link_master_32[ 'it' ] = 'https://businessschool.luiss.it/pr-communication-event-management/';
$link_master_32[ 'en' ] = 'https://businessschool.luiss.it/pr-communication-event-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_32 = array();
$link_brochure_32[ 'it' ] = 'https://businessschool.luiss.it/pr-communication-event-management/download-brochure/';
$link_brochure_32[ 'en' ] = 'https://businessschool.luiss.it/pr-communication-event-management/download-brochure/';
?>

	<!-- Master 33 -->

	<!-- Titolo -->
	<?php $titolo_master_33 = array();
$titolo_master_33[ 'it' ] = 'Corporate Event: Management, PR and Communication';
$titolo_master_33[ 'en' ] = 'Corporate Event: Management, PR and Communication';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_33 = array();
$sottotitolo_master_33[ 'it' ] = 'Major del Master in Marketing Management';
$sottotitolo_master_33[ 'en' ] = 'Major of the Master in Marketing Managemen';
?>
	<!-- Inizio -->
	<?php $inizio_master_33 = array();
$sottotitolo_master_33[ 'it' ] = 'Major del Master in Marketing Management';
$sottotitolo_master_33[ 'en' ] = 'Major of the Master in Marketing Management';
?>
	<!-- Programma -->
	<?php $link_master_33 = array();
$link_master_33[ 'it' ] = 'https://businessschool.luiss.it/pr-communication-event-management/';
$link_master_33[ 'en' ] = 'https://businessschool.luiss.it/pr-communication-event-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_33 = array();
$link_brochure_33[ 'it' ] = 'https://businessschool.luiss.it/pr-communication-event-management/download-brochure/';
$link_brochure_33[ 'en' ] = 'https://businessschool.luiss.it/pr-communication-event-management/download-brochure/';
?>

	<!-- Master 34 -->

	<!-- Titolo -->
	<?php $titolo_master_34 = array();
$titolo_master_34[ 'it' ] = 'Master in Big Data and Management ';
$titolo_master_34[ 'en' ] = 'Master in Big Data and Management ';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_34 = array();
$sottotitolo_master_34[ 'it' ] = '';
$sottotitolo_master_34[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_master_34 = array();
$inizio_master_34[ 'it' ] = '21 Set 2020';
$inizio_master_34[ 'en' ] = 'Set 21, 2020';
?>
	<!-- Programma -->
	<?php $link_master_34 = array();
$link_master_34[ 'it' ] = 'https://businessschool.luiss.it/mabda/';
$link_master_34[ 'en' ] = 'https://businessschool.luiss.it/mabda/';
?>
	<!-- Brochure -->
	<?php $link_brochure_34 = array();
$link_brochure_34[ 'it' ] = 'https://businessschool.luiss.it/mabda/download-brochure/';
$link_brochure_34[ 'en' ] = 'https://businessschool.luiss.it/mabda/download-brochure/';
?>

	<!-- Master 35 -->

	<!-- Titolo -->
	<?php $titolo_master_35 = array();
$titolo_master_35[ 'it' ] = 'Consulente Legale d\'Impresa';
$titolo_master_35[ 'en' ] = 'Consulente Legale d\'Impresa';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_35 = array();
$sottotitolo_master_35[ 'it' ] = '';
$sottotitolo_master_35[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_master_9 = array();
$inizio_master_9[ 'it' ] = 'Autunno 2020';
$inizio_master_9[ 'en' ] = 'Fall 2020';
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

	<!-- Master 36 BELLUNO -->

	<!-- Titolo -->
	<?php $titolo_master_36 = array();
$titolo_master_36[ 'it' ] = 'Master in Food and Wine Business';
$titolo_master_36[ 'en' ] = 'Master in Food and Wine Business';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_36 = array();
$sottotitolo_master_36[ 'it' ] = '';
$sottotitolo_master_36[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_master_36 = array();
$inizio_master_36[ 'it' ] = 'Nov 2020';
$inizio_master_36[ 'en' ] = 'Nov 2020';
?>
	<!-- Programma -->
	<?php $link_master_36 = array();
$link_master_36[ 'it' ] = 'https://businessschool.luiss.it/food-and-wine-business-belluno/';
$link_master_36[ 'en' ] = 'https://businessschool.luiss.it/food-and-wine-business-belluno/';
?>
	<!-- Brochure -->
	<?php $link_brochure_36 = array();
$link_brochure_36[ 'it' ] = 'https://businessschool.luiss.it/food-and-wine-business-belluno/download-brochure/';
$link_brochure_36[ 'en' ] = 'https://businessschool.luiss.it/food-and-wine-business-belluno/download-brochure/';
?>

	<!-- Master 37 -->

	<!-- Titolo -->
	<?php $titolo_master_37 = array();
$titolo_master_37[ 'it' ] = 'Master in Food and Wine Business';
$titolo_master_37[ 'en' ] = 'Master in Food and Wine Business';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_37 = array();
$sottotitolo_master_37[ 'it' ] = '';
$sottotitolo_master_37[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_master_37 = array();
$inizio_master_37[ 'it' ] = 'Gen 2021';
$inizio_master_37[ 'en' ] = 'Jan 2021';
?>
	<!-- Programma -->
	<?php $link_master_37 = array();
$link_master_37[ 'it' ] = 'https://businessschool.luiss.it/master-food-wine/';
$link_master_37[ 'en' ] = 'https://businessschool.luiss.it/master-food-wine/';
?>
	<!-- Brochure -->
	<?php $link_brochure_37 = array();
$link_brochure_37[ 'it' ] = 'https://businessschool.luiss.it/master-food-wine/download-brochure/';
$link_brochure_37[ 'en' ] = 'https://businessschool.luiss.it/master-food-wine/download-brochure/';
?>

	<!-- Master 38 -->

	<!-- Titolo -->
	<?php $titolo_master_38 = array();
$titolo_master_38[ 'it' ] = 'Master of Art ';
$titolo_master_38[ 'en' ] = 'Master of Art ';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_38 = array();
$sottotitolo_master_38[ 'it' ] = '';
$sottotitolo_master_38[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_master_38 = array();
$inizio_master_38[ 'it' ] = 'Gen 2021';
$inizio_master_38[ 'en' ] = 'Jan 2021';
?>
	<!-- Programma -->
	<?php $link_master_38= array();
$link_master_38[ 'it' ] = 'https://businessschool.luiss.it/master-of-art/';
$link_master_38[ 'en' ] = 'https://businessschool.luiss.it/master-of-art/';
?>
	<!-- Brochure -->
	<?php $link_brochure_38 = array();
$link_brochure_38[ 'it' ] = 'https://businessschool.luiss.it/master-of-art/download-brochure/';
$link_brochure_38[ 'en' ] = 'https://businessschool.luiss.it/master-of-art/download-brochure/';
?>

	<!-- Master 39 -->

	<!-- Titolo -->
	<?php $titolo_master_39 = array();
$titolo_master_39[ 'it' ] = 'Music';
$titolo_master_39[ 'en' ] = 'Music';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_39 = array();
$sottotitolo_master_39[ 'it' ] = 'Major del Master in Media Entertainment ';
$sottotitolo_master_39[ 'en' ] = 'Major of the Master in Media Entertainment ';
?>
	<!-- Inizio -->
	<?php $inizio_master_39 = array();
$inizio_master_39[ 'it' ] = 'Gen 2021';
$inizio_master_39[ 'en' ] = 'Jan 2021';
?>
	<!-- Programma -->
	<?php $link_master_39 = array();
$link_master_39[ 'it' ] = 'https://businessschool.luiss.it/master-of-music/';
$link_master_39[ 'en' ] = 'https://businessschool.luiss.it/master-of-music/';
?>
	<!-- Brochure -->
	<?php $link_brochure_39 = array();
$link_brochure_39[ 'it' ] = 'https://businessschool.luiss.it/master-of-music/download-brochure/';
$link_brochure_39[ 'en' ] = 'https://businessschool.luiss.it/master-of-music/download-brochure/';
?>

	<!-- Master 40 -->

	<!-- Titolo -->
	<?php $titolo_master_40 = array();
$titolo_master_40[ 'it' ] = 'Sport management';
$titolo_master_40[ 'en' ] = 'Sport management';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_40 = array();
$sottotitolo_master_40[ 'it' ] = 'Major del Master in Media Entertainment ';
$sottotitolo_master_40[ 'en' ] = 'Major of the Master in Media Entertainment ';
?>
	<!-- Inizio -->
	<?php $inizio_master_40 = array();
$inizio_master_40[ 'it' ] = 'Gen 2021';
$inizio_master_40[ 'en' ] = 'Jan 2021';
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
$titolo_master_41[ 'it' ] = 'Gestione della Produzione Cinematografica e Televisiva';
$titolo_master_41[ 'en' ] = 'Gestione della Produzione Cinematografica e Televisiva';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_41 = array();
$sottotitolo_master_41[ 'it' ] = 'Major del Master in Media Entertainment ';
$sottotitolo_master_41[ 'en' ] = 'Major of the Master in Media Entertainment ';
?>
	<!-- Inizio -->
	<?php $inizio_master_41 = array();
$inizio_master_41[ 'it' ] = 'Gen 2021';
$inizio_master_41[ 'en' ] = 'Jan 2021';
?>
	<!-- Programma -->
	<?php $link_master_41 = array();
$link_master_41[ 'it' ] = 'https://businessschool.luiss.it/gestione-produzione-cinematografica/';
$link_master_41[ 'en' ] = 'https://businessschool.luiss.it/gestione-produzione-cinematografica/';
?>
	<!-- Brochure -->
	<?php $link_brochure_41 = array();
$link_brochure_41[ 'it' ] = 'https://businessschool.luiss.it/gestione-produzione-cinematografica/download-brochure/';
$link_brochure_41[ 'en' ] = 'https://businessschool.luiss.it/gestione-produzione-cinematografica/download-brochure/';
?>

	<!-- Master 42 -->

	<!-- Titolo -->
	<?php $titolo_master_42 = array();
$titolo_master_42[ 'it' ] = 'Writing School for Cinema and TV';
$titolo_master_42[ 'en' ] = 'Writing School for Cinema and TV';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_42 = array();
$sottotitolo_master_42[ 'it' ] = 'Major del Master in Media Entertainment ';
$sottotitolo_master_39[ 'en' ] = 'Major of the Master in Media Entertainment ';
?>
	<!-- Inizio -->
	<?php $inizio_master_42 = array();
$inizio_master_42[ 'it' ] = 'Gen 2021';
$inizio_master_42[ 'en' ] = 'Jan 2021';
?>
	<!-- Programma -->
	<?php $link_master_42 = array();
$link_master_42[ 'it' ] = 'https://businessschool.luiss.it/writing-school-for-television/';
$link_master_42[ 'en' ] = 'https://businessschool.luiss.it/writing-school-for-television/';
?>
	<!-- Brochure -->
	<?php $link_brochure_42 = array();
$link_brochure_42[ 'it' ] = 'https://businessschool.luiss.it/writing-school-for-television/download-brochure/';
$link_brochure_42[ 'en' ] = 'https://businessschool.luiss.it/writing-school-for-television/download-brochure/';
?>

	<!-- Master 43 -->

	<!-- Titolo -->
	<?php $titolo_master_43 = array();
$titolo_master_43[ 'it' ] = 'Relazioni istituzionali, Lobby e Comunicazione d\'Impresa';
$titolo_master_43[ 'en' ] = 'Relazioni istituzionali, Lobby e Comunicazione d\'Impresa';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_43 = array();
$sottotitolo_master_43[ 'it' ] = '';
$sottotitolo_master_43[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_master_43 = array();
$inizio_master_43[ 'it' ] = 'TBD';
$inizio_master_43[ 'en' ] = 'TBD';
?>
	<!-- Programma -->
	<?php $link_master_43 = array();
$link_master_43[ 'it' ] = 'https://businessschool.luiss.it/relazioni-istituzionali-lobby-comunicazione-impresa/';
$link_master_43[ 'en' ] = 'https://businessschool.luiss.it/relazioni-istituzionali-lobby-comunicazione-impresa/';
?>
	<!-- Brochure -->
	<?php $link_brochure_43 = array();
$link_brochure_43[ 'it' ] = 'https://businessschool.luiss.it/relazioni-istituzionali-lobby-comunicazione-impresa/download-brochure/';
$link_brochure_43[ 'en' ] = 'https://businessschool.luiss.it/relazioni-istituzionali-lobby-comunicazione-impresa/download-brochure/';
?>

	<!-- Master 44 -->

	<!-- Titolo -->
	<?php $titolo_master_44 = array();
$titolo_master_44[ 'it' ] = 'Open innovation and Intellectual Property';
$titolo_master_44[ 'en' ] = 'Open innovation and Intellectual Property';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_44 = array();
$sottotitolo_master_44[ 'it' ] = '';
$sottotitolo_master_44[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_master_44 = array();
$inizio_master_44[ 'it' ] = '16 Apr 2021';
$inizio_master_44[ 'en' ] = 'Apr 16, 2021';
?>
	<!-- Programma -->
	<?php $link_master_44 = array();
$link_master_44[ 'it' ] = 'https://businessschool.luiss.it/openinnovation-ip/';
$link_master_44[ 'en' ] = 'https://businessschool.luiss.it/openinnovation-ip/';
?>
	<!-- Brochure -->
	<?php $link_brochure_44 = array();
$link_brochure_44[ 'it' ] = 'https://businessschool.luiss.it/openinnovation-ip/brochure/';
$link_brochure_44[ 'en' ] = 'https://businessschool.luiss.it/openinnovation-ip/brochure/';
?>

	<!-- Master 45 Tipo EXECUTIVE MASTER-->

	<!-- Titolo -->
	<?php $titolo_master_45 = array();
$titolo_master_45[ 'it' ] = 'Circular Economy Management';
$titolo_master_45[ 'en' ] = 'Circular Economy Management';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_45 = array();
$sottotitolo_master_45[ 'it' ] = '';
$sottotitolo_master_45[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_master_9 = array();
$inizio_master_45[ 'it' ] = '23 ott 2020';
$inizio_master_45[ 'en' ] = 'Oct 23, 2020';
?>
	<!-- Programma -->
	<?php $link_master_45 = array();
$link_master_45[ 'it' ] = 'https://businessschool.luiss.it/master-circular-economy/';
$link_master_45[ 'en' ] = 'https://businessschool.luiss.it/master-circular-economy/';
?>
	<!-- Brochure -->
	<?php $link_brochure_45 = array();
$link_brochure_45[ 'it' ] = 'https://businessschool.luiss.it/master-circular-economy/download-brochre/';
$link_brochure_45[ 'en' ] = 'https://businessschool.luiss.it/master-circular-economy/download-brochre/';
?>

	<!-- Master 46 -->

	<!-- Titolo -->
	<?php $titolo_master_46 = array();
$titolo_master_46[ 'it' ] = 'Management dei Prodotti Biomedicali PROBIOMED';
$titolo_master_46[ 'en' ] = 'Management dei Prodotti Biomedicali PROBIOMED';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_46 = array();
$sottotitolo_master_46[ 'it' ] = 'Major del Master in Management della filiera della Salute';
$sottotitolo_master_46[ 'en' ] = 'Major of the Master in Management della filiera della Salute';
?>
	<!-- Inizio -->
	<?php $inizio_master_46 = array();
$inizio_master_46[ 'it' ] = '11 Mar 2021';
$inizio_master_46[ 'en' ] = 'Mar 11, 2021';
?>
	<!-- Programma -->
	<?php $link_master_46 = array();
$link_master_46[ 'it' ] = 'https://businessschool.luiss.it/probiomed/';
$link_master_46[ 'en' ] = 'https://businessschool.luiss.it/probiomed/';
?>
	<!-- Brochure -->
	<?php $link_brochure_46 = array();
$link_brochure_46[ 'it' ] = 'https://businessschool.luiss.it/probiomed/brochure/';
$link_brochure_46[ 'en' ] = 'https://businessschool.luiss.it/probiomed/brochure/';
?>

	<!-- Master 47 -->

	<!-- Titolo -->
	<?php $titolo_master_47 = array();
$titolo_master_47[ 'it' ] = 'Management delle Aziende Sanitarie';
$titolo_master_47[ 'en' ] = 'Management delle Aziende Sanitarie';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_47 = array();
$sottotitolo_master_47[ 'it' ] = 'Major del Master in Management della filiera della Salute';
$sottotitolo_master_47[ 'en' ] = 'Major of the Master in Management della filiera della Salute';
?>
	<!-- Inizio -->
	<?php $inizio_master_47 = array();
$inizio_master_47[ 'it' ] = '9 Ott 2020';
$inizio_master_47[ 'en' ] = 'Oct 9, 2020';
?>
	<!-- Programma -->
	<?php $link_master_47 = array();
$link_master_47[ 'it' ] = 'https://businessschool.luiss.it/management-aziende-sanitarie/';
$link_master_47[ 'en' ] = 'https://businessschool.luiss.it/management-aziende-sanitarie/';
?>
	<!-- Brochure -->
	<?php $link_brochure_47 = array();
$link_brochure_47[ 'it' ] = 'https://businessschool.luiss.it/management-aziende-sanitarie/download-brochure/';
$link_brochure_47[ 'en' ] = 'https://businessschool.luiss.it/management-aziende-sanitarie/download-brochure/';
?>

	<!-- Master 48 -->

	<!-- Titolo -->
	<?php $titolo_master_48 = array();
$titolo_master_48[ 'it' ] = 'Pharmaceutical & Healthcare Administration EMPHA';
$titolo_master_48[ 'en' ] = 'Pharmaceutical & Healthcare Administration EMPHA';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_48 = array();
$sottotitolo_master_48[ 'it' ] = 'Major del Master in Management della filiera della Salute';
$sottotitolo_master_48[ 'en' ] = 'Major of the Master in Management della filiera della Salute';
?>
	<!-- Inizio -->
	<?php $inizio_master_48 = array();
$inizio_master_48[ 'it' ] = '9 Ott 2020';
$inizio_master_48[ 'en' ] = 'Oct 9, 2020';
?>
	<!-- Programma -->
	<?php $link_master_48 = array();
$link_master_48[ 'it' ] = 'https://businessschool.luiss.it/executive-master-pharmaceutical-healthcare-administration/';
$link_master_48[ 'en' ] = 'https://businessschool.luiss.it/executive-master-pharmaceutical-healthcare-administration/';
?>
	<!-- Brochure -->
	<?php $link_brochure_48 = array();
$link_brochure_48[ 'it' ] = 'https://businessschool.luiss.it/executive-master-pharmaceutical-healthcare-administration/download-brochure/';
$link_brochure_48[ 'en' ] = 'https://businessschool.luiss.it/executive-master-pharmaceutical-healthcare-administration/download-brochure/';
?>

	<!-- Master 49 -->

	<!-- Titolo -->
	<?php $titolo_master_49 = array();
$titolo_master_49[ 'it' ] = 'Sperimentazione clinica';
$titolo_master_49[ 'en' ] = 'Sperimentazione clinica';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_49 = array();
$sottotitolo_master_49[ 'it' ] = 'Major del Master in Management della filiera della Salute';
$sottotitolo_master_49[ 'en' ] = 'Major of the Master in Management della filiera della Salute';
?>
	<!-- Inizio -->
	<?php $inizio_master_49 = array();
$inizio_master_49[ 'it' ] = '9 Ott 2020';
$inizio_master_49[ 'en' ] = 'Oct 9, 2020';
?>
	<!-- Programma -->
	<?php $link_master_49 = array();
$link_master_49[ 'it' ] = 'https://businessschool.luiss.it/master-sperimentazione-clinica/';
$link_master_49[ 'en' ] = 'https://businessschool.luiss.it/master-sperimentazione-clinica/';
?>
	<!-- Brochure -->
	<?php $link_brochure_49 = array();
$link_brochure_49[ 'it' ] = 'https://businessschool.luiss.it/master-sperimentazione-clinica/download-brochure/';
$link_brochure_49[ 'en' ] = 'https://businessschool.luiss.it/master-sperimentazione-clinica/download-brochure/';
?>

	<!-- Master 50 -->

	<!-- Titolo -->
	<?php $titolo_master_50 = array();
$titolo_master_50[ 'it' ] = 'Master in Comunicazione e Marketing Politico e Istituzionale';
$titolo_master_50[ 'en' ] = 'Master in Comunicazione e Marketing Politico e Istituzionale';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_50 = array();
$sottotitolo_master_50[ 'it' ] = '';
$sottotitolo_master_50[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_master_50 = array();
$inizio_master_50[ 'it' ] = 'TBD';
$inizio_master_50[ 'en' ] = 'TBD';
?>
	<!-- Programma -->
	<?php $link_master_50 = array();
$link_master_50[ 'it' ] = 'https://sog.luiss.it/graduate-programs/comunicazione-e-marketing-politico-ed-istituzionale';
$link_master_50[ 'en' ] = 'https://sog.luiss.it/graduate-programs/comunicazione-e-marketing-politico-ed-istituzionale';
?>
	<!-- Brochure -->
	<?php $link_brochure_50 = array();
$link_brochure_50[ 'it' ] = '';
$link_brochure_50[ 'en' ] = '';
?>

<!-- PROGRAMMI DI ALTA FORMAZIONE -->

<!-- Programma A1 -->

	<!-- Titolo -->
	<?php $titolo_programma_a1 = array();
$titolo_programma_a1[ 'it' ] = 'Consulente legale d\'impresa';
$titolo_programma_a1[ 'en' ] = 'Consulente legale d\'impresa';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_programma_a1 = array();
$sottotitolo_programma_a1[ 'it' ] = '';
$sottotitolo_programma_a1[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_programma_a1 = array();
$inizio_programma_a1[ 'it' ] = '26 Ott 2020';
$inizio_programma_a1[ 'en' ] = 'Oct 26, 2020';
?>
	<!-- Programma -->
	<?php $link_programma_a1 = array();
$link_programma_a1[ 'it' ] = 'https://businessschool.luiss.it/consulente-legale-impresa/';
$link_programma_a1[ 'en' ] = 'https://businessschool.luiss.it/consulente-legale-impresa/';
?>
	<!-- Brochure -->
	<?php $link_programma_a1 = array();
$link_programma_a1[ 'it' ] = 'https://businessschool.luiss.it/consulente-legale-impresa/download-brochure/';
$link_programma_a1[ 'en' ] = 'https://businessschool.luiss.it/consulente-legale-impresa/download-brochure/';
?>

<!-- Programma A2 -->

	<!-- Titolo -->
	<?php $titolo_programma_a2 = array();
$titolo_programma_a2[ 'it' ] = 'Five stars hotel Management';
$titolo_programma_a2[ 'en' ] = 'Five stars hotel Management';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_programma_a2 = array();
$sottotitolo_programma_a2[ 'it' ] = '';
$sottotitolo_programma_a2[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_programma_a2 = array();
$inizio_programma_a2[ 'it' ] = 'Nov 2020';
$inizio_programma_a2[ 'en' ] = 'Nov 2020';
?>
	<!-- Programma -->
	<?php $link_programma_a2 = array();
$link_programma_a2[ 'it' ] = 'https://businessschool.luiss.it/five-stars-hotel-management/';
$link_programma_a2[ 'en' ] = 'https://businessschool.luiss.it/five-stars-hotel-management/';
?>
	<!-- Brochure -->
	<?php $link_programma_a2 = array();
$link_programma_a2[ 'it' ] = '';
$link_programma_a2[ 'en' ] = '';
?>

<!-- Programma A3 -->

	<!-- Titolo -->
	<?php $titolo_programma_a3 = array();
$titolo_programma_a3[ 'it' ] = 'La serie televisiva: dall\'ideal al mercato';
$titolo_programma_a3[ 'en' ] = 'La serie televisiva: dall\'ideal al mercato';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_programma_a3 = array();
$sottotitolo_programma_a3[ 'it' ] = '';
$sottotitolo_programma_a3[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_programma_a3 = array();
$inizio_programma_a3[ 'it' ] = 'TBD';
$inizio_programma_a3[ 'en' ] = 'TBD';
?>
	<!-- Programma -->
	<?php $link_programma_a3 = array();
$link_programma_a3[ 'it' ] = 'https://businessschool.luiss.it/executive-serie-televisiva-idea-mercato/';
$link_programma_a3[ 'en' ] = 'https://businessschool.luiss.it/executive-serie-televisiva-idea-mercato/';
?>
	<!-- Brochure -->
	<?php $link_programma_a3 = array();
$link_programma_a3[ 'it' ] = '';
$link_programma_a3[ 'en' ] = '';
?>

<!-- Programma A4 -->

	<!-- Titolo -->
	<?php $titolo_programma_a4 = array();
$titolo_programma_a4[ 'it' ] = 'SPA, Terme & Weelness Management';
$titolo_programma_a4[ 'en' ] = 'SPA, Terme & Weelness Management';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_programma_a4 = array();
$sottotitolo_programma_a4[ 'it' ] = '';
$sottotitolo_programma_a4[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_programma_a4 = array();
$inizio_programma_a4[ 'it' ] = 'TBD';
$inizio_programma_a4[ 'en' ] = 'TBD';
?>
	<!-- Programma -->
	<?php $link_programma_a4 = array();
$link_programma_a4[ 'it' ] = 'https://businessschool.luiss.it/executive-spa-terme-wellness-management/';
$link_programma_a4[ 'en' ] = 'https://businessschool.luiss.it/executive-spa-terme-wellness-management/';
?>
	<!-- Brochure -->
	<?php $link_programma_a4 = array();
$link_programma_a4[ 'it' ] = 'https://businessschool.luiss.it/executive-spa-terme-wellness-management/download-brochure/';
$link_programma_a4[ 'en' ] = 'https://businessschool.luiss.it/executive-spa-terme-wellness-management/download-brochure/';
?>

<!-- Fine variabili -->

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
	                <p>Come here to be challenged. Leave ready to take on the most important challenges of our time. At LUISS Business School, we create wise leaders who aspire to MAKE the difference in the world of business and beyond. Join us.</p>
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
                        
                        <h3><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></h3>
                        
	                    <!-- MASTER 34 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_34[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_34[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_34[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_34[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 34 -->
                        
                        <!-- MASTER 21 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_21[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_21[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_21[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_21[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 21 -->
                        
                        <!-- MASTER 14 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_14[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_14[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_14[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_14[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 14 -->
                        
                        <!-- MASTER 15 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_15[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_15[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_15[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_15[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 15 -->
                        
                        <!-- MASTER 16 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_16[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_16[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_16[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_16[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 16 -->
                        
                        <!-- MASTER 6 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_6[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_6[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_6[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_6[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 6 -->
                        
                        <!-- MASTER 4 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_4[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_4[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_4[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_4[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 4 -->
                        
                        <!-- MASTER 5 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_5[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_5[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_5[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_5[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 5 -->
                        
                        <!-- MASTER 8 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_8[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_8[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_8[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_8[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 8 -->
                        
                        <!-- MASTER 3 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_3[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_3[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_3[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_3[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 3 -->
                        
                        <!-- MASTER 37 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_37[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_37[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_37[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_37[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 37 -->
                        
                        <!-- MASTER 22 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_22[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_22[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_22[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_22[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 22 -->
                        
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
                        
                        <!-- MASTER 9 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_9[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_9[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_9[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_9[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 9 -->
                        
                        <!-- MASTER 10 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_10[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_10[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_10[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_10[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 10 -->
                        
                        <!-- MASTER 11 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_11[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_11[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_11[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_11[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 11 -->
                        
                        <!-- MASTER 32 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_32[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_32[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_32[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_32[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 32 -->
                        
                        <!-- MASTER 31 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_31[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_31[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_31[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_31[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 31 -->
                        
                        <!-- MASTER 25 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_25[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_25[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_25[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_25[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 25 -->
                        
                        <!-- MASTER 29 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_29[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_29[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_29[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_29[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 29 -->
                        
                        <!-- MASTER 27 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_27[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_27[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_27[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_27[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 27 -->
                        
                        <!-- MASTER 30 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_30[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_30[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_30[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_30[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 30 -->
                        
                        <!-- MASTER 38 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_38[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_38[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_38[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_38[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 38 -->
                        
                        <!-- MASTER 41 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_41[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_41[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_41[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_41[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 41 -->
                        
                        <!-- MASTER 39 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_39[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_39[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_39[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_39[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 39 -->
                        
                        <!-- MASTER 40 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_40[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_40[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_40[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_40[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 40 -->
                        
                        <!-- MASTER 42 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_42[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_42[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_42[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_42[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 42 -->
                        
                        <!-- MASTER 19 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_19[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_19[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_19[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_19[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 19 -->
                        
                        <!-- MASTER 20 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_20[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_20[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_20[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_20[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 20 -->
                        
                    </div>
                    
                    <div class="row">
                        
                        <h3><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></h3>
                        
                        <!-- MASTER 45 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_45[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_45[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_45[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_45[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 45 -->
                        
                        <!-- MASTER 50 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_50[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_50[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_50[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_50[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 50 -->
                        
                        <!-- MASTER 24 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_24[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_24[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_24[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_24[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 24 -->
                        
                        <!-- MASTER 46 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_46[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_46[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_46[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_46[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 46 -->
                        
                        <!-- MASTER 47 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_47[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_47[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_47[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_47[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 47 -->
                        
                        <!-- MASTER 48 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_48[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_48[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_48[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_48[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 48 -->
                        
                        <!-- MASTER 49 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_49[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_49[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_49[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_49[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 49 -->
                        
                        <!-- MASTER 44 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_44[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_44[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_44[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_44[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 44 -->
                        
                        <!-- MASTER 43 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $secondo_livello[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_master_43[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_master_43[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_master_1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_master_43[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_43[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END MASTER 43 -->
                        
                    </div>
                    
                    <div class="row">
                        
                        <h3>Corsi</h3>
                        
                        <!-- MASTER 35 -->
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
	                    <!-- END MASTER 35 -->
                        
	                </div>
                    
                    <div class="row">
                        
                        <h3><?php echo $altaformazione[ICL_LANGUAGE_CODE] ?></h3>
                        
                        <!-- PROGRAMMA A1 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $altaformazione[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_programma_a1[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_programma_a1[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_programma_a1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_programma_a1[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_a1[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END PROGRAMMA A1 -->
                        
                        <!-- PROGRAMMA A2 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $altaformazione[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_programma_a2[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_programma_a2[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full_11[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_programma_a2[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_en[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_programma_a2[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_a2[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END PROGRAMMA A2 -->
                        
                        <!-- PROGRAMMA A3 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $altaformazione[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_programma_a1[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_programma_a3[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_part_6[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_programma_a1[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_programma_a3[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_a3[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END PROGRAMMA A3 -->
                        
                        <!-- PROGRAMMA A4 -->
	                    <div class="col-md-4 col-sm-6">
	                        <span><?php echo $altaformazione[ICL_LANGUAGE_CODE] ?></span>
	                        <h6><?php echo $titolo_programma_a4[ICL_LANGUAGE_CODE] ?>
	                            <br /><?php echo $sottotitolo_programma_a4[ICL_LANGUAGE_CODE] ?></h6>
	                        <p><strong><?php echo $titolo_durata[ICL_LANGUAGE_CODE] ?></strong> <?php echo $durata_full_3[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_sede[ICL_LANGUAGE_CODE] ?></strong> <?php echo $sede_rm[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $titolo_inizio[ICL_LANGUAGE_CODE] ?></strong> <?php echo $inizio_programma_a3[ICL_LANGUAGE_CODE] ?></p>
	                        <p><strong><?php echo $lingua[ICL_LANGUAGE_CODE] ?></strong> <?php echo $lingua_corso_it[ICL_LANGUAGE_CODE] ?></p>
	                        <div class="row">
	                            <a href="<?php echo $link_programma_a4[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_master[ICL_LANGUAGE_CODE] ?></a>
	                            <a href="<?php echo $link_brochure_a4[ICL_LANGUAGE_CODE] ?>"><?php echo $titolo_link_brochure[ICL_LANGUAGE_CODE] ?></a>
	                        </div>
	                    </div>
	                    <!-- END PROGRAMMA A4 -->
                        
                        
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
	                <div class="row">
                    
                        <h3><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></h3>
                        
                        <!-- MASTER 18 -->
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
	                    <!-- END MASTER 18 -->
                        
                        <!-- MASTER 23 -->
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
	                    <!-- END MASTER 23 -->
                        
                        <!-- MASTER 2 -->
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
	                    <!-- END MASTER 2 -->
                        
                        <!-- MASTER 12 -->
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
	                    <!-- END MASTER 12 -->
                        
                        <!-- MASTER 33 -->
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
	                    <!-- END MASTER 33 -->
                        
                        <!-- MASTER 26 -->
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
	                    <!-- END MASTER 26 -->
                    
                    
                    </div>
	            </div>

	            <!-- BELLUNO -->
	            <div class="tab-pane p-4 fade" id="belluno" role="tabpanel" aria-labelledby="belluno-tab">
	                <div class="row">
	                    <div class="col-12 col-lg-8">
	                        <h2><?php echo $sede_be[ICL_LANGUAGE_CODE] ?></h2>
	                        <p>Tutti i Master che si svolgono a <?php echo $sede_be[ICL_LANGUAGE_CODE] ?>.</p>
	                    </div>
	                </div>
	                <div class="row">
                    
                     <h3><?php echo $primo_livello[ICL_LANGUAGE_CODE] ?></h3>
                        
                        <!-- MASTER 17 -->
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
	                    <!-- END MASTER 17 -->
                        
                        <!-- MASTER 7 -->
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
	                    <!-- END MASTER 7 -->
                        
                        <!-- MASTER 36 -->
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
	                    <!-- END MASTER 36 -->
                        
                        <!-- MASTER 13 -->
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
	                    <!-- END MASTER 13 -->
                        
                        <!-- MASTER 28 -->
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
	                    <!-- END MASTER 28 -->
                        
                        
                    </div>
	            </div>
	        </div>
	    </section>
	</div>

	<?php edit_post_link('<p>Modifica Pagina</p>', ''); ?>

	<?php get_footer(2017);?>