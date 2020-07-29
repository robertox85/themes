<!-- Variabili Categorie Corsi e Immagini Executive -->

<?php

$executive_cat = has_term( 'executive-program', 'category' );
$corso_cat = has_term( 'corso', 'category' );
$specialistica_ex_cat = has_term( 'specialistica-executive', 'category' );
$postlauream_ex_cat = has_term( 'specialistica-postlauream', 'category' );
$specialistica_cat = has_term( 'specialistici', 'category' );

$accounting = has_term( 'accounting-finance-control', 'tematiche' );
$lobbying = has_term( 'communication-lobbying', 'tematiche' );
$governance = has_term( 'tax-legal', 'tematiche' );
$healthcare = has_term( 'public-sector-healthcare-and-no-profit', 'tematiche' );
$innovation = has_term( 'management-innovation', 'tematiche' );
$family = has_term( 'management-family-business', 'tematiche' );
$marketing = has_term( 'marketing-sales-communication', 'tematiche' );
$people = has_term( 'people-and-organization-development', 'tematiche' );
$pm = has_term( 'project_management', 'tematiche' );
$real = has_term( 'real-estate', 'tematiche' );
$sport = has_term( 'sport-tourism-leisure-culturel', 'tematiche' );

?>

<!-- Variabili Pagina Master e Programmi di alta formazione -->

<!-- INSERIRE SPIEGAZIONE ID DI MASTER E PROGRAMMI CON LINK AL FILE CON GLI ID -->

	<!-- TIPOLOGIA -->

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

<?php $mba = array();
$mba[ 'it' ] = 'MBA';
$mba[ 'en' ] = 'MBA';
?>

<!-- Queste variabili sono usate nei layout di tassonomia dei Programmi Executive per tipi di sezione e tab-->

<?php $executive_master_label = array();
$executive_master_label[ 'it' ] = 'Executive Master';
$executive_master_label[ 'en' ] = 'Executive Masters';
?>

<?php $executive_programme_label = array();
$executive_programme_label[ 'it' ] = 'Executive Programme';
$executive_programme_label[ 'en' ] = 'Executive Programmes';
?>

<?php $executive_flex_label = array();
$executive_flex_label[ 'it' ] = 'Executive Flex Programme';
$executive_flex_label[ 'en' ] = 'Executive Flex Programmes';
?>

<?php $executive_course_label = array();
$executive_course_label[ 'it' ] = 'Executive Course';
$executive_course_label[ 'en' ] = 'Executive Courses';
?>

<?php $executive_skill_label = array();
$executive_skill_label[ 'it' ] = 'Executive Skill Lab';
$executive_skill_label[ 'en' ] = 'Executive Skill Labs';
?>

<?php $executive_individual_label = array();
$executive_individual_label[ 'it' ] = 'Individual Executive Programme';
$executive_individual_label[ 'en' ] = 'Individual Executive Programme';
?>

	<!-- LINGUA -->

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

	<!-- DURATA -->

	<!-- Label -->
	<?php $titolo_durata = array();
$titolo_durata[ 'it' ] = 'Durata';
$titolo_durata[ 'en' ] = 'Duration';
?>

	<!-- Dato -->

<?php $durata_12 = array();
$durata_12[ 'it' ] = '12 mesi';
$durata_12[ 'en' ] = '12 months';
?>


<?php $durata_16 = array();
$durata_16[ 'it' ] = '16 mesi';
$durata_16[ 'en' ] = '16 months';
?>

<?php $durata_17 = array();
$durata_16[ 'it' ] = '17 mesi';
$durata_16[ 'en' ] = '17 months';
?>

<?php $durata_22 = array();
$durata_16[ 'it' ] = '17 mesi';
$durata_16[ 'en' ] = '17 months';
?>

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

	<!-- INIZIO -->

	<!-- Label -->
	<?php $titolo_inizio = array();
$titolo_inizio[ 'it' ] = 'Inizio';
$titolo_inizio[ 'en' ] = 'Start';
?>


	<!-- SEDE -->

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

	<!-- PULSANTI -->

	<!-- Label link site -->
	<?php $titolo_link_site = array();
$titolo_link_site[ 'it' ] = 'Scopri';
$titolo_link_site[ 'en' ] = 'Find our more';
?>

	<!-- Label link download brochure -->
	<?php $titolo_link_brochure = array();
$titolo_link_brochure[ 'it' ] = 'Scarica la brochure';
$titolo_link_brochure[ 'en' ] = 'Download Brochure';
?>

<!-- MBA-->

<!-- MBA 1 -->

<!-- Titolo -->
	<?php $titolo_mba_1 = array();
$titolo_mba_1[ 'it' ] = 'Full-time MBA';
$titolo_mba_1[ 'en' ] = 'Full-time MBA';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_mba_1 = array();
$sottotitolo_mba_1[ 'it' ] = '';
$sottotitolo_mba_1[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_mba_1 = array();
$inizio_mba_1[ 'it' ] = '19 Ott 2020';
$inizio_mba_1[ 'en' ] = 'Oct 19, 2020';
?>
	<!-- Programma -->
	<?php $link_site_mbar_1 = array();
$link_site_mba_1[ 'it' ] = 'https://businessschool.luiss.it/mba/';
$link_site_mba_1[ 'en' ] = 'https://businessschool.luiss.it/mba/';
?>
	<!-- Brochure -->
	<?php $link_brochure_mba_1 = array();
$link_brochure_mba_1[ 'it' ] = 'https://businessschool.luiss.it/mba/download-brochure/';
$link_brochure_mba_1[ 'en' ] = 'https://businessschool.luiss.it/mba/download-brochure/';
?>

<!-- MBA 2 -->

<!-- Titolo -->
	<?php $titolo_mba_2 = array();
$titolo_mba_2[ 'it' ] = 'Part-time MBA';
$titolo_mba_2[ 'en' ] = 'Part-time MBA';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_mba_2 = array();
$sottotitolo_mba_2[ 'it' ] = '';
$sottotitolo_mba_2[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_mba_2 = array();
$inizio_mba_2[ 'it' ] = 'Mar 2021';
$inizio_mba_2[ 'en' ] = 'Mar 2021';
?>
	<!-- Programma -->
	<?php $link_site_mbar_2 = array();
$link_site_mba_2[ 'it' ] = 'https://businessschool.luiss.it/mba-part-time/';
$link_site_mba_2[ 'en' ] = 'https://businessschool.luiss.it/mba-part-time/';
?>
	<!-- Brochure -->
	<?php $link_brochure_mba_2 = array();
$link_brochure_mba_2[ 'it' ] = 'https://businessschool.luiss.it/mba-part-time/download-brochure/';
$link_brochure_mba_2[ 'en' ] = 'https://businessschool.luiss.it/mba-part-time/download-brochure/';
?>


<!-- MBA 3 -->

<!-- Titolo -->
	<?php $titolo_mba_3 = array();
$titolo_mba_3[ 'it' ] = 'Part-time MBA Milan';
$titolo_mba_3[ 'en' ] = 'Part-time MBA Milan';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_mba_3 = array();
$sottotitolo_mba_3[ 'it' ] = '';
$sottotitolo_mba_3[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_mba_3 = array();
$inizio_mba_3[ 'it' ] = '13 Nov 2020';
$inizio_mba_3[ 'en' ] = 'Nov 13, 2020';
?>
	<!-- Programma -->
	<?php $link_site_mbar_3 = array();
$link_site_mba_3[ 'it' ] = 'https://businessschool.luiss.it/mba-milan/';
$link_site_mba_3[ 'en' ] = 'https://businessschool.luiss.it/mba-milan/';
?>
	<!-- Brochure -->
	<?php $link_brochure_mba_3 = array();
$link_brochure_mba_3[ 'it' ] = 'https://businessschool.luiss.it/mba-milan/download-brochure/';
$link_brochure_mba_3[ 'en' ] = 'https://businessschool.luiss.it/mba-milan/download-brochure/';
?>


<!-- MBA 4 -->

<!-- Titolo -->
	<?php $titolo_mba_4 = array();
$titolo_mba_4[ 'it' ] = 'Executive MBA';
$titolo_mba_4[ 'en' ] = 'Executive MBA';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_mba_4 = array();
$sottotitolo_mba_4[ 'it' ] = '';
$sottotitolo_mba_4[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_mba_4 = array();
$inizio_mba_4[ 'it' ] = '26 Giu 2020';
$inizio_mba_4[ 'en' ] = 'Jun 26, 2020';
?>
	<!-- Programma -->
	<?php $link_site_mbar_4 = array();
$link_site_mba_4[ 'it' ] = 'https://businessschool.luiss.it/emba/';
$link_site_mba_4[ 'en' ] = 'https://businessschool.luiss.it/emba/';
?>
	<!-- Brochure -->
	<?php $link_brochure_mba_4 = array();
$link_brochure_mba_4[ 'it' ] = 'https://businessschool.luiss.it/emba/brochure/';
$link_brochure_mba_4[ 'en' ] = 'https://businessschool.luiss.it/emba/brochure/';
?>


<!-- MBA 5 -->

<!-- Titolo -->
	<?php $titolo_mba_5 = array();
$titolo_mba_5[ 'it' ] = 'Flex Executive MBA';
$titolo_mba_5[ 'en' ] = 'Flex Executive MBA';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_mba_5 = array();
$sottotitolo_mba_5[ 'it' ] = '';
$sottotitolo_mba_5[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_mba_5 = array();
$inizio_mba_5[ 'it' ] = 'Feb 2021';
$inizio_mba_5[ 'en' ] = 'Feb 2021';
?>
	<!-- Programma -->
	<?php $link_site_mbar_5 = array();
$link_site_mba_5[ 'it' ] = 'https://businessschool.luiss.it/flex-emba/';
$link_site_mba_5[ 'en' ] = 'https://businessschool.luiss.it/flex-emba/';
?>
	<!-- Brochure -->
	<?php $link_brochure_mba_5 = array();
$link_brochure_mba_5[ 'it' ] = 'https://businessschool.luiss.it/flex-emba/download-brochure/';
$link_brochure_mba_5[ 'en' ] = 'https://businessschool.luiss.it/flex-emba/download-brochure/';
?>


	<!-- MASTER -->

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
	<?php $link_site_master_1 = array();
$link_site_master_1[ 'it' ] = 'https://businessschool.luiss.it/international-management/';
$link_site_master_1[ 'en' ] = 'https://businessschool.luiss.it/international-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_1 = array();
$link_brochure_master_1[ 'it' ] = 'https://businessschool.luiss.it/international-management/download-brochure/';
$link_brochure_master_1[ 'en' ] = 'https://businessschool.luiss.it/international-management/download-brochure/';
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
	<?php $link_site_master_2 = array();
$link_site_master_2[ 'it' ] = 'https://businessschool.luiss.it/management-energy-industry/download-brochure/';
$link_site_master_2[ 'en' ] = 'https://businessschool.luiss.it/management-energy-industry/download-brochure/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_2 = array();
$link_brochure_master_2[ 'it' ] = 'https://businessschool.luiss.it/management-energy-industry/download-brochure/';
$link_brochure_master_2[ 'en' ] = 'https://businessschool.luiss.it/management-energy-industry/download-brochure/';
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
	<?php $link_site_master_3 = array();
$link_site_master_3[ 'it' ] = 'https://businessschool.luiss.it/management-technology-risk-management-insurance/';
$link_site_master_3[ 'en' ] = 'https://businessschool.luiss.it/management-technology-risk-management-insurance/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_3 = array();
$link_brochure_master_3[ 'it' ] = 'https://businessschool.luiss.it/management-technology-risk-management-insurance/download-brochure/';
$link_brochure_master_3[ 'en' ] = 'https://businessschool.luiss.it/management-technology-risk-management-insurance/download-brochure/';
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
	<?php $link_site_master_4 = array();
$link_site_master_4[ 'it' ] = 'https://businessschool.luiss.it/macofin/';
$link_site_master_4[ 'en' ] = 'https://businessschool.luiss.it/macofin/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_4 = array();
$link_brochure_master_4[ 'it' ] = 'https://businessschool.luiss.it/macofin/download-brochure-master-macofin/';
$link_brochure_master_4[ 'en' ] = 'https://businessschool.luiss.it/macofin/download-brochure-master-macofin/';
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
	<?php $link_site_master_5 = array();
$link_site_master_5[ 'it' ] = 'https://businessschool.luiss.it/corporate-finance-banking-major-banking/';
$link_site_master_5[ 'en' ] = 'https://businessschool.luiss.it/corporate-finance-banking-major-banking/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_5 = array();
$link_brochure_master_5[ 'it' ] = 'https://businessschool.luiss.it/corporate-finance-banking-major-banking/download-brochure/';
$link_brochure_master_5[ 'en' ] = 'https://businessschool.luiss.it/corporate-finance-banking-major-banking/download-brochure/';
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
	<?php $link_site_master_6 = array();
$link_site_master_6[ 'it' ] = 'https://businessschool.luiss.it/corporare-finance-banking-major-finanza-aziendale/';
$link_site_master_6[ 'en' ] = 'https://businessschool.luiss.it/corporare-finance-banking-major-finanza-aziendale/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_6 = array();
$link_brochure_master_6[ 'it' ] = 'https://businessschool.luiss.it/corporare-finance-banking-major-finanza-aziendale/download-brochure/';
$link_brochure_master_6[ 'en' ] = 'https://businessschool.luiss.it/corporare-finance-banking-major-finanza-aziendale/download-brochure/';
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
	<?php $link_site_master_7 = array();
$link_site_master_7[ 'it' ] = 'https://businessschool.luiss.it/corporare-finance-banking-major-finanza-aziendale/';
$link_site_master_7[ 'en' ] = 'https://businessschool.luiss.it/corporare-finance-banking-major-finanza-aziendale/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_7 = array();
$link_brochure_master_7[ 'it' ] = 'https://businessschool.luiss.it/corporare-finance-banking-major-finanza-aziendale/download-brochure/';
$link_brochure_master_7[ 'en' ] = 'https://businessschool.luiss.it/corporare-finance-banking-major-finanza-aziendale/download-brochure/';
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
	<?php $link_site_master_8 = array();
$link_site_master_8[ 'it' ] = 'https://www.maref.luiss.it/';
$link_site_master_8[ 'en' ] = 'https://www.maref.luiss.it/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_8 = array();
$link_brochure_master_8[ 'it' ] = 'https://www.maref.luiss.it/scarica-la-brochure/';
$link_brochure_master_8[ 'en' ] = 'https://www.maref.luiss.it/scarica-la-brochure/';
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
	<?php $link_site_master_9 = array();
$link_site_master_9[ 'it' ] = 'https://businessschool.luiss.it/management-technology-digital-ecosystem/';
$link_site_master_9[ 'en' ] = 'https://businessschool.luiss.it/management-technology-digital-ecosystem/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_9 = array();
$link_brochure_master_9[ 'it' ] = 'https://businessschool.luiss.it/management-technology-digital-ecosystem/download-brochure/';
$link_brochure_master_9[ 'en' ] = 'https://businessschool.luiss.it/management-technology-digital-ecosystem/download-brochure/';
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
	<?php $link_site_master_10 = array();
$link_site_master_10[ 'it' ] = 'https://businessschool.luiss.it/global-supply-chain-management/';
$link_site_master_10[ 'en' ] = 'https://businessschool.luiss.it/global-supply-chain-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_10 = array();
$link_brochure_master_10[ 'it' ] = 'https://businessschool.luiss.it/global-supply-chain-management/download-brochure/';
$link_brochure_master_10[ 'en' ] = 'https://businessschool.luiss.it/global-supply-chain-management/download-brochure/';
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
	<?php $link_site_master_11 = array();
$link_site_master_11[ 'it' ] = 'https://businessschool.luiss.it/disruptive-ma/';
$link_site_master_11[ 'en' ] = 'https://businessschool.luiss.it/disruptive-ma/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_11 = array();
$link_brochure_master_11[ 'it' ] = 'https://businessschool.luiss.it/disruptive-ma/download-brochure/';
$link_brochure_master_11[ 'en' ] = 'https://businessschool.luiss.it/disruptive-ma/download-brochure/';
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
	<?php $link_site_master_12 = array();
$link_site_master_12[ 'it' ] = 'https://businessschool.luiss.it/digital-business-strategy/';
$link_site_master_12[ 'en' ] = 'https://businessschool.luiss.it/digital-business-strategy/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_12 = array();
$link_brochure_master_12[ 'it' ] = 'https://businessschool.luiss.it/digital-business-strategy/download-brochure/';
$link_brochure_master_12[ 'en' ] = 'https://businessschool.luiss.it/digital-business-strategy/download-brochure/';
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
	<?php $link_site_master_13 = array();
$link_site_master_13[ 'it' ] = 'https://businessschool.luiss.it/digital-business-strategy-belluno/download-brochure/';
$link_site_master_13[ 'en' ] = 'https://businessschool.luiss.it/digital-business-strategy-belluno/download-brochure/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_13 = array();
$link_brochure_master_13[ 'it' ] = 'https://businessschool.luiss.it/digital-business-strategy-belluno//';
$link_brochure_master_13[ 'en' ] = 'https://businessschool.luiss.it/digital-business-strategy-belluno/';
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
	<?php $link_site_master_14 = array();
$link_site_master_14[ 'it' ] = 'https://businessschool.luiss.it/master-of-fashion/';
$link_site_master_14[ 'en' ] = 'https://businessschool.luiss.it/master-of-fashion/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_14 = array();
$link_brochure_master_14[ 'it' ] = 'https://businessschool.luiss.it/master-of-fashion/download-brochure/';
$link_brochure_master_14[ 'en' ] = 'https://businessschool.luiss.it/master-of-fashion/download-brochure/';
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
	<?php $link_site_master_15 = array();
$link_site_master_15[ 'it' ] = 'https://businessschool.luiss.it/master-of-luxury/';
$link_site_master_15[ 'en' ] = 'https://businessschool.luiss.it/master-of-luxury/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_15 = array();
$link_brochure_master_15[ 'it' ] = 'https://businessschool.luiss.it/master-of-luxury/download-brochure/';
$link_brochure_master_15[ 'en' ] = 'https://businessschool.luiss.it/master-of-luxury/download-brochure/';
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
	<?php $link_site_master_16 = array();
$link_site_master_16[ 'it' ] = 'https://businessschool.luiss.it/tourism-management/';
$link_site_master_16[ 'en' ] = 'https://businessschool.luiss.it/tourism-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_16 = array();
$link_brochure_master_16[ 'it' ] = 'https://businessschool.luiss.it/tourism-management/download-brochure/';
$link_brochure_master_16[ 'en' ] = 'https://businessschool.luiss.it/tourism-management/download-brochure/';
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
	<?php $link_site_master_17 = array();
$link_site_master_17[ 'it' ] = 'https://businessschool.luiss.it/tourism-management-belluno/';
$link_site_master_17[ 'en' ] = 'https://businessschool.luiss.it/tourism-management-belluno/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_17 = array();
$link_brochure_master_17[ 'it' ] = 'https://businessschool.luiss.it/tourism-management-belluno/download-brochure/';
$link_brochure_master_17[ 'en' ] = 'https://businessschool.luiss.it/tourism-management-belluno/download-brochure/';
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
	<?php $link_site_master_18 = array();
$link_site_master_18[ 'it' ] = '';
$link_site_master_18[ 'en' ] = '';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_18 = array();
$link_brochure_master_18[ 'it' ] = '';
$link_brochure_master_18[ 'en' ] = '';
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
	<?php $link_site_master_19 = array();
$link_site_master_19[ 'it' ] = 'https://businessschool.luiss.it/project-management/';
$link_site_master_19[ 'en' ] = 'https://businessschool.luiss.it/project-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_19 = array();
$link_brochure_master_19[ 'it' ] = 'https://businessschool.luiss.it/project-management/download-brochure/';
$link_brochure_master_19[ 'en' ] = 'https://businessschool.luiss.it/project-management/download-brochure/';
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
	<?php $link_site_master_20 = array();
$link_site_master_20[ 'it' ] = 'https://businessschool.luiss.it/project-management-cooperazione-internazionale/';
$link_site_master_20[ 'en' ] = 'https://businessschool.luiss.it/project-management-cooperazione-internazionale/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_20 = array();
$link_brochure_master_20[ 'it' ] = 'https://businessschool.luiss.it/project-management-cooperazione-internazionale/download-brochure/';
$link_brochure_master_20[ 'en' ] = 'https://businessschool.luiss.it/project-management-cooperazione-internazionale/download-brochure/';
?>

	<!-- Master 21 -->

	<!-- Titolo -->
	<?php $titolo_master_21 = array();
$titolo_master_21[ 'it' ] = 'Entrepreneurship';
$titolo_master_21[ 'en' ] = 'Entrepreneurship';
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
	<?php $link_site_master_21 = array();
$link_site_master_21[ 'it' ] = 'https://businessschool.luiss.it/entrepreneurship/';
$link_site_master_21[ 'en' ] = 'https://businessschool.luiss.it/entrepreneurship/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_21 = array();
$link_brochure_master_21[ 'it' ] = 'https://businessschool.luiss.it/entrepreneurship/download-brochure/';
$link_brochure_master_21[ 'en' ] = 'https://businessschool.luiss.it/entrepreneurship/download-brochure/';
?>

	<!-- Master 22 -->

	<!-- Titolo -->
	<?php $titolo_master_22 = array();
$titolo_master_22[ 'it' ] = 'Gestione delle Risorse Umane e Organizzazione';
$titolo_master_22[ 'en' ] = 'Gestione delle Risorse Umane e Organizzazione';
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
	<?php $link_site_master_22 = array();
$link_site_master_22[ 'it' ] = 'https://businessschool.luiss.it/gruo/';
$link_site_master_22[ 'en' ] = 'https://businessschool.luiss.it/gruo/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_22 = array();
$link_brochure_master_22[ 'it' ] = 'https://businessschool.luiss.it/gruo/download-brochure/';
$link_brochure_master_22[ 'en' ] = 'https://businessschool.luiss.it/gruo/download-brochure/';
?>

	<!-- Master 23 MILANO -->

	<!-- Titolo -->
	<?php $titolo_master_23 = array();
$titolo_master_23[ 'it' ] = 'Gestione delle Risorse Umane e Organizzazione';
$titolo_master_23[ 'en' ] = 'Gestione delle Risorse Umane e Organizzazione';
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
	<?php $link_site_master_23 = array();
$link_site_master_23[ 'it' ] = 'https://businessschool.luiss.it/gruo/';
$link_site_master_23[ 'en' ] = 'https://businessschool.luiss.it/gruo/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_23 = array();
$link_brochure_master_23[ 'it' ] = 'https://businessschool.luiss.it/gruo/download-brochure/';
$link_brochure_master_23[ 'en' ] = 'https://businessschool.luiss.it/gruo/download-brochure/';
?>

	<!-- Master 24 -->

	<!-- Titolo -->
	<?php $titolo_master_24 = array();
$titolo_master_24[ 'it' ] = 'Diritto Tributario Contabilità e Pianificazione Fiscale';
$titolo_master_24[ 'en' ] = 'Diritto Tributario Contabilità e Pianificazione Fiscale';
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
	<?php $link_site_master_24 = array();
$link_site_master_24[ 'it' ] = 'https://businessschool.luiss.it/diritto-tributario/';
$link_site_master_24[ 'en' ] = 'https://businessschool.luiss.it/diritto-tributario/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_24 = array();
$link_brochure_master_24[ 'it' ] = 'https://businessschool.luiss.it/diritto-tributario/download-brochure/';
$link_brochure_master_24[ 'en' ] = 'https://businessschool.luiss.it/diritto-tributario/download-brochure/';
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
	<?php $link_site_master_25 = array();
$link_site_master_25[ 'it' ] = 'https://businessschool.luiss.it/marketing-management-digital-marketing/';
$link_site_master_25[ 'en' ] = 'https://businessschool.luiss.it/marketing-management-digital-marketing/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_25 = array();
$link_brochure_master_25[ 'it' ] = 'https://businessschool.luiss.it/marketing-management-digital-marketing/download-brochure/';
$link_brochure_master_25[ 'en' ] = 'https://businessschool.luiss.it/marketing-management-digital-marketing/download-brochure/';
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
	<?php $link_site_master_26 = array();
$link_site_master_26[ 'it' ] = 'https://businessschool.luiss.it/marketing-management-digital-marketing/';
$link_site_master_26[ 'en' ] = 'https://businessschool.luiss.it/marketing-management-digital-marketing/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_26 = array();
$link_brochure_master_26[ 'it' ] = 'https://businessschool.luiss.it/marketing-management-digital-marketing/download-brochure/';
$link_brochure_master_26[ 'en' ] = 'https://businessschool.luiss.it/marketing-management-digital-marketing/download-brochure/';
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
	<?php $link_site_master_27 = array();
$link_site_master_27[ 'it' ] = 'https://businessschool.luiss.it/marketing-management/';
$link_site_master_27[ 'en' ] = 'https://businessschool.luiss.it/marketing-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_27 = array();
$link_brochure_master_27[ 'it' ] = 'https://businessschool.luiss.it/marketing-management/downlaod-brochure/';
$link_brochure_master_27[ 'en' ] = 'https://businessschool.luiss.it/marketing-management/downlaod-brochure/';
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
	<?php $link_site_master_28 = array();
$link_site_master_28[ 'it' ] = 'https://businessschool.luiss.it/marketing-management/';
$link_site_master_28[ 'en' ] = 'https://businessschool.luiss.it/marketing-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_28 = array();
$link_brochure_master_28[ 'it' ] = 'https://businessschool.luiss.it/marketing-management/downlaod-brochure/';
$link_brochure_master_28[ 'en' ] = 'https://businessschool.luiss.it/marketing-management/downlaod-brochure/';
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
	<?php $link_site_master_29 = array();
$link_site_master_29[ 'it' ] = 'https://businessschool.luiss.it/marketing-management-retailing-ecommerce/';
$link_site_master_29[ 'en' ] = 'https://businessschool.luiss.it/marketing-management-retailing-ecommerce/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_29 = array();
$link_brochure_master_29[ 'it' ] = 'https://businessschool.luiss.it/marketing-management-retailing-ecommerce/download-brochure/';
$link_brochure_master_29[ 'en' ] = 'https://businessschool.luiss.it/marketing-management-retailing-ecommerce/download-brochure/';
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
	<?php $link_site_master_30 = array();
$link_site_master_30[ 'it' ] = 'https://businessschool.luiss.it/trade-management/';
$link_site_master_30[ 'en' ] = 'https://businessschool.luiss.it/trade-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_30 = array();
$link_brochure_master_30[ 'it' ] = 'https://businessschool.luiss.it/trade-management/download-brochure/';
$link_brochure_master_30[ 'en' ] = 'https://businessschool.luiss.it/trade-management/download-brochure/';
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
	<?php $link_site_master_31 = array();
$link_site_master_31[ 'it' ] = 'https://businessschool.luiss.it/master-digital-export/';
$link_site_master_31[ 'en' ] = 'https://businessschool.luiss.it/master-digital-export/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_31 = array();
$link_brochure_master_31[ 'it' ] = 'https://businessschool.luiss.it/master-digital-export/download-brochure/';
$link_brochure_master_31[ 'en' ] = 'https://businessschool.luiss.it/master-digital-export/download-brochure/';
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
	<?php $link_site_master_32 = array();
$link_site_master_32[ 'it' ] = 'https://businessschool.luiss.it/pr-communication-event-management/';
$link_site_master_32[ 'en' ] = 'https://businessschool.luiss.it/pr-communication-event-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_32 = array();
$link_brochure_master_32[ 'it' ] = 'https://businessschool.luiss.it/pr-communication-event-management/download-brochure/';
$link_brochure_master_32[ 'en' ] = 'https://businessschool.luiss.it/pr-communication-event-management/download-brochure/';
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
	<?php $link_site_master_33 = array();
$link_site_master_33[ 'it' ] = 'https://businessschool.luiss.it/pr-communication-event-management/';
$link_site_master_33[ 'en' ] = 'https://businessschool.luiss.it/pr-communication-event-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_33 = array();
$link_brochure_master_33[ 'it' ] = 'https://businessschool.luiss.it/pr-communication-event-management/download-brochure/';
$link_brochure_master_33[ 'en' ] = 'https://businessschool.luiss.it/pr-communication-event-management/download-brochure/';
?>

	<!-- Master 34 -->

	<!-- Titolo -->
	<?php $titolo_master_34 = array();
$titolo_master_34[ 'it' ] = 'Big Data and Management ';
$titolo_master_34[ 'en' ] = 'Big Data and Management ';
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
	<?php $link_site_master_34 = array();
$link_site_master_34[ 'it' ] = 'https://businessschool.luiss.it/mabda/';
$link_site_master_34[ 'en' ] = 'https://businessschool.luiss.it/mabda/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_34 = array();
$link_brochure_master_34[ 'it' ] = 'https://businessschool.luiss.it/mabda/download-brochure/';
$link_brochure_master_34[ 'en' ] = 'https://businessschool.luiss.it/mabda/download-brochure/';
?>

	<!-- Master 35 -->

	<!-- Titolo -->
	<?php $titolo_master_35 = array();
$titolo_master_35[ 'it' ] = '';
$titolo_master_35[ 'en' ] = '';
?>
	<!-- Sottotitolo -->
	<?php $sottotitolo_master_35 = array();
$sottotitolo_master_35[ 'it' ] = '';
$sottotitolo_master_35[ 'en' ] = '';
?>
	<!-- Inizio -->
	<?php $inizio_master_35 = array();
$inizio_master_9[ 'it' ] = '';
$inizio_master_9[ 'en' ] = '';
?>
	<!-- Programma -->
	<?php $link_site_master_35 = array();
$link_site_master_35[ 'it' ] = '';
$link_site_master_35[ 'en' ] = '';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_35 = array();
$link_brochure_master_35[ 'it' ] = '';
$link_brochure_master_35[ 'en' ] = '';
?>

	<!-- Master 36 BELLUNO -->

	<!-- Titolo -->
	<?php $titolo_master_36 = array();
$titolo_master_36[ 'it' ] = 'Food and Wine Business';
$titolo_master_36[ 'en' ] = 'Food and Wine Business';
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
	<?php $link_site_master_36 = array();
$link_site_master_36[ 'it' ] = 'https://businessschool.luiss.it/food-and-wine-business-belluno/';
$link_site_master_36[ 'en' ] = 'https://businessschool.luiss.it/food-and-wine-business-belluno/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_36 = array();
$link_brochure_master_36[ 'it' ] = 'https://businessschool.luiss.it/food-and-wine-business-belluno/download-brochure/';
$link_brochure_master_36[ 'en' ] = 'https://businessschool.luiss.it/food-and-wine-business-belluno/download-brochure/';
?>

	<!-- Master 37 -->

	<!-- Titolo -->
	<?php $titolo_master_37 = array();
$titolo_master_37[ 'it' ] = 'Food and Wine Business';
$titolo_master_37[ 'en' ] = 'in Food and Wine Business';
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
	<?php $link_site_master_37 = array();
$link_site_master_37[ 'it' ] = 'https://businessschool.luiss.it/master-food-wine/';
$link_site_master_37[ 'en' ] = 'https://businessschool.luiss.it/master-food-wine/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_37 = array();
$link_brochure_master_37[ 'it' ] = 'https://businessschool.luiss.it/master-food-wine/download-brochure/';
$link_brochure_master_37[ 'en' ] = 'https://businessschool.luiss.it/master-food-wine/download-brochure/';
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
	<?php $link_site_master_38= array();
$link_site_master_38[ 'it' ] = 'https://businessschool.luiss.it/master-of-art/';
$link_site_master_38[ 'en' ] = 'https://businessschool.luiss.it/master-of-art/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_38 = array();
$link_brochure_master_38[ 'it' ] = 'https://businessschool.luiss.it/master-of-art/download-brochure/';
$link_brochure_master_38[ 'en' ] = 'https://businessschool.luiss.it/master-of-art/download-brochure/';
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
	<?php $link_site_master_39 = array();
$link_site_master_39[ 'it' ] = 'https://businessschool.luiss.it/master-of-music/';
$link_site_master_39[ 'en' ] = 'https://businessschool.luiss.it/master-of-music/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_39 = array();
$link_brochure_master_39[ 'it' ] = 'https://businessschool.luiss.it/master-of-music/download-brochure/';
$link_brochure_master_39[ 'en' ] = 'https://businessschool.luiss.it/master-of-music/download-brochure/';
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
	<?php $link_site_master_40 = array();
$link_site_master_40[ 'it' ] = '';
$link_site_master_40[ 'en' ] = '';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_40 = array();
$link_brochure_master_40[ 'it' ] = '';
$link_brochure_master_40[ 'en' ] = '';
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
	<?php $link_site_master_41 = array();
$link_site_master_41[ 'it' ] = 'https://businessschool.luiss.it/gestione-produzione-cinematografica/';
$link_site_master_41[ 'en' ] = 'https://businessschool.luiss.it/gestione-produzione-cinematografica/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_41 = array();
$link_brochure_master_41[ 'it' ] = 'https://businessschool.luiss.it/gestione-produzione-cinematografica/download-brochure/';
$link_brochure_master_41[ 'en' ] = 'https://businessschool.luiss.it/gestione-produzione-cinematografica/download-brochure/';
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
	<?php $link_site_master_42 = array();
$link_site_master_42[ 'it' ] = 'https://businessschool.luiss.it/writing-school-for-television/';
$link_site_master_42[ 'en' ] = 'https://businessschool.luiss.it/writing-school-for-television/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_42 = array();
$link_brochure_master_42[ 'it' ] = 'https://businessschool.luiss.it/writing-school-for-television/download-brochure/';
$link_brochure_master_42[ 'en' ] = 'https://businessschool.luiss.it/writing-school-for-television/download-brochure/';
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
	<?php $link_site_master_43 = array();
$link_site_master_43[ 'it' ] = 'https://businessschool.luiss.it/relazioni-istituzionali-lobby-comunicazione-impresa/';
$link_site_master_43[ 'en' ] = 'https://businessschool.luiss.it/relazioni-istituzionali-lobby-comunicazione-impresa/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_43 = array();
$link_brochure_master_43[ 'it' ] = 'https://businessschool.luiss.it/relazioni-istituzionali-lobby-comunicazione-impresa/download-brochure/';
$link_brochure_master_43[ 'en' ] = 'https://businessschool.luiss.it/relazioni-istituzionali-lobby-comunicazione-impresa/download-brochure/';
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
	<?php $link_site_master_44 = array();
$link_site_master_44[ 'it' ] = 'https://businessschool.luiss.it/openinnovation-ip/';
$link_site_master_44[ 'en' ] = 'https://businessschool.luiss.it/openinnovation-ip/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_44 = array();
$link_brochure_master_44[ 'it' ] = 'https://businessschool.luiss.it/openinnovation-ip/brochure/';
$link_brochure_master_44[ 'en' ] = 'https://businessschool.luiss.it/openinnovation-ip/brochure/';
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
	<?php $link_site_master_45 = array();
$link_site_master_45[ 'it' ] = 'https://businessschool.luiss.it/master-circular-economy/';
$link_site_master_45[ 'en' ] = 'https://businessschool.luiss.it/master-circular-economy/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_45 = array();
$link_brochure_master_45[ 'it' ] = 'https://businessschool.luiss.it/master-circular-economy/download-brochre/';
$link_brochure_master_45[ 'en' ] = 'https://businessschool.luiss.it/master-circular-economy/download-brochre/';
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
	<?php $link_site_master_46 = array();
$link_site_master_46[ 'it' ] = 'https://businessschool.luiss.it/probiomed/';
$link_site_master_46[ 'en' ] = 'https://businessschool.luiss.it/probiomed/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_46 = array();
$link_brochure_master_46[ 'it' ] = 'https://businessschool.luiss.it/probiomed/brochure/';
$link_brochure_master_46[ 'en' ] = 'https://businessschool.luiss.it/probiomed/brochure/';
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
	<?php $link_site_master_47 = array();
$link_site_master_47[ 'it' ] = 'https://businessschool.luiss.it/management-aziende-sanitarie/';
$link_site_master_47[ 'en' ] = 'https://businessschool.luiss.it/management-aziende-sanitarie/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_47 = array();
$link_brochure_master_47[ 'it' ] = 'https://businessschool.luiss.it/management-aziende-sanitarie/download-brochure/';
$link_brochure_master_47[ 'en' ] = 'https://businessschool.luiss.it/management-aziende-sanitarie/download-brochure/';
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
	<?php $link_site_master_48 = array();
$link_site_master_48[ 'it' ] = 'https://businessschool.luiss.it/executive-master-pharmaceutical-healthcare-administration/';
$link_site_master_48[ 'en' ] = 'https://businessschool.luiss.it/executive-master-pharmaceutical-healthcare-administration/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_48 = array();
$link_brochure_master_48[ 'it' ] = 'https://businessschool.luiss.it/executive-master-pharmaceutical-healthcare-administration/download-brochure/';
$link_brochure_master_48[ 'en' ] = 'https://businessschool.luiss.it/executive-master-pharmaceutical-healthcare-administration/download-brochure/';
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
	<?php $link_site_master_49 = array();
$link_site_master_49[ 'it' ] = 'https://businessschool.luiss.it/master-sperimentazione-clinica/';
$link_site_master_49[ 'en' ] = 'https://businessschool.luiss.it/master-sperimentazione-clinica/';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_49 = array();
$link_brochure_master_49[ 'it' ] = 'https://businessschool.luiss.it/master-sperimentazione-clinica/download-brochure/';
$link_brochure_master_49[ 'en' ] = 'https://businessschool.luiss.it/master-sperimentazione-clinica/download-brochure/';
?>

	<!-- Master 50 -->

	<!-- Titolo -->
	<?php $titolo_master_50 = array();
$titolo_master_50[ 'it' ] = 'Comunicazione e Marketing Politico e Istituzionale';
$titolo_master_50[ 'en' ] = 'Comunicazione e Marketing Politico e Istituzionale';
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
	<?php $link_site_master_50 = array();
$link_site_master_50[ 'it' ] = 'https://sog.luiss.it/graduate-programs/comunicazione-e-marketing-politico-ed-istituzionale';
$link_site_master_50[ 'en' ] = 'https://sog.luiss.it/graduate-programs/comunicazione-e-marketing-politico-ed-istituzionale';
?>
	<!-- Brochure -->
	<?php $link_brochure_master_50 = array();
$link_brochure_master_50[ 'it' ] = '';
$link_brochure_master_50[ 'en' ] = '';
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
	<?php $link_site_programma_a1 = array();
$link_site_programma_a1[ 'it' ] = 'https://businessschool.luiss.it/consulente-legale-impresa/';
$link_site_programma_a1[ 'en' ] = 'https://businessschool.luiss.it/consulente-legale-impresa/';
?>
	<!-- Brochure -->
	<?php $link__brochure_programma_a1 = array();
$link_brochure_programma_a1[ 'it' ] = 'https://businessschool.luiss.it/consulente-legale-impresa/download-brochure/';
$link_brochure_programma_a1[ 'en' ] = 'https://businessschool.luiss.it/consulente-legale-impresa/download-brochure/';
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
	<?php $link_site_programma_a2 = array();
$link_site_programma_a2[ 'it' ] = 'https://businessschool.luiss.it/five-stars-hotel-management/';
$link_site_programma_a2[ 'en' ] = 'https://businessschool.luiss.it/five-stars-hotel-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_programma_a2 = array();
$link_brochure_programma_a2[ 'it' ] = '';
$link_brochure_programma_a2[ 'en' ] = '';
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
	<?php $link_site_programma_a3 = array();
$link_site_programma_a3[ 'it' ] = 'https://businessschool.luiss.it/executive-serie-televisiva-idea-mercato/';
$link_site_programma_a3[ 'en' ] = 'https://businessschool.luiss.it/executive-serie-televisiva-idea-mercato/';
?>
	<!-- Brochure -->
	<?php $link_brochure_programma_a3 = array();
$link_brochure_programma_a3[ 'it' ] = '';
$link_brochure_programma_a3[ 'en' ] = '';
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
	<?php $link_site_programma_a4 = array();
$link_site_programma_a4[ 'it' ] = 'https://businessschool.luiss.it/executive-spa-terme-wellness-management/';
$link_site_programma_a4[ 'en' ] = 'https://businessschool.luiss.it/executive-spa-terme-wellness-management/';
?>
	<!-- Brochure -->
	<?php $link_brochure_programma_a4 = array();
$link_brochure_programma_a4[ 'it' ] = 'https://businessschool.luiss.it/executive-spa-terme-wellness-management/download-brochure/';
$link_brochure_programma_a4[ 'en' ] = 'https://businessschool.luiss.it/executive-spa-terme-wellness-management/download-brochure/';
?>

<!-- Fine variabili -->

