<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;

/**
 * Template Name: Master 2017
 * @file master.php
 */
$shd = get_field( 'sub_home_description' );
$shp = get_field( 'sub_home_paragraf' );
get_header( 2017 );
?>

<!-- Facebook -->
<script id="myn_pixel" async src="https://white.mynsystems.com/myn_pixel_fp.js?accountId=50"></script>
<!--
Start of Floodlight Tag: Please do not remove
Activity name of this tag: LUISS_Master
URL of the webpage where the tag is expected to be placed: 
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 12/20/2018
-->
<script type=""text/javascript"">
var axel = Math.random() + """";
var a = axel * 10000000000000;
document.write('<iframe src=""https://9105818.fls.doubleclick.net/activityi;src=9105818;type=secti0;cat=luiss00;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=' + a + '?"" width=""1"" height=""1"" frameborder=""0"" style=""display:none""></iframe>');
</script>
<noscript>
<iframe src=""https://9105818.fls.doubleclick.net/activityi;src=9105818;type=secti0;cat=luiss00;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=1?"" width=""1"" height=""1"" frameborder=""0"" style=""display:none""></iframe>
</noscript>
<!-- End of Floodlight Tag: Please do not remove -->
<?php $primo_livello = array();
$primo_livello[ 'it' ] = 'MASTER DI PRIMO LIVELLO';
$primo_livello[ 'en' ] = 'FIRST-LEVEL Master Degree';
?> <?php $secondo_livello = array();
$secondo_livello[ 'it' ] = 'MASTER DI SECONDO LIVELLO';
$secondo_livello[ 'en' ] = 'SECOND-LEVEL Master Degree';
?> <?php $specialistici = array();
$specialistici[ 'it' ] = 'Master Specialistici ';
$specialistici[ 'en' ] = 'Specialised Master&#8217;s';
?> <?php $lingua_corso_it = array();
$lingua_corso_it[ 'it' ] = 'ITALIANO';
$lingua_corso_it[ 'en' ] = 'ITALIAN';
?> <?php $lingua_corso_en = array();
$lingua_corso_en[ 'it' ] = 'INGLESE';
$lingua_corso_en[ 'en' ] = 'ENGLISH';
?> <?php $titolo_durata = array();
$titolo_durata[ 'it' ] = 'DURATA';
$titolo_durata[ 'en' ] = 'DURATION';
?> <?php $lingua = array();
$lingua[ 'it' ] = 'LINGUA';
$lingua[ 'en' ] = 'LANGUAGE';
?> <?php $durata = array();
$durata[ 'it' ] = '12 MESI FULL TIME';
$durata[ 'en' ] = '12 MONTHS OF FULL-TIME STUDY';
?> <?php $durata_part = array();
$durata_part[ 'en' ] = '12 MONTHS OF PART-TIME STUDY';
$durata_part[ 'it' ] = '12 MESI PART-TIME';
?> <?php $img_m1 = array();
$img_m1[ 'it' ] = '/wp-content/uploads/2017/06/Immagini_MASTER_ITA_PrimoLivello.jpg';
$img_m1[ 'en' ] = '/wp-content/uploads/2017/06/Immagini_MASTER_EN_PrimoLivello.jpg';
?>

<?php $img_m2 = array();
$img_m2[ 'it' ] = '/wp-content/uploads/2017/06/Immagini_MASTER_ITA_SecondoLivello.jpg';
$img_m2[ 'en' ] = '/wp-content/uploads/2017/06/Immagini_MASTER_EN_SecondoLivello.jpg';
?>

<div class="section sub-home sub-home-master" id="sub-home">
	<div class="container">
		<div class="row sub-home-list">
			<div class="sub-home-grid">
				<div class="col-md-12">
					<div class="sub-home-heading">
						<header>
							<h1>
								<?php echo the_title(); ?>
							</h1>
						</header>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="featurette-divider"></div>
<section class="cards courses-cards">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="vid">
					<iframe width="" height="" src="//www.youtube.com/embed/7VuI-HXka6s?wmode=transparent&rel=0&showinfo=0&controls=0" frameborder="0" allowfullscreen wmode="Opaque"></iframe>
				</div>
			</div>
			<div class="col-md-4 grid-row-quotes grid-col">
				<p>Come here to be challenged. Leave ready to take on the most important challenges of our time. At LUISS Business School, we create wise leaders who aspire to become the difference in the world of business and beyond. Join us.</p>
			</div>
		</div>
		<div class="featurette-divider"></div>
		<?php $link_master_1 = array();
$link_master_1[ 'it' ] = '/offerta-formativa/master/projectmanagement/';
$link_master_1[ 'en' ] = '/en/programs/master/projectmanagement/';
?>
		<?php $link_master_2 = array();
$link_master_2[ 'it' ] = '/offerta-formativa/master/master-marketing-management/';
$link_master_2[ 'en' ] = '/en/programs/master//master-marketing-management/';
?>
		<?php $link_master_3 = array();
$link_master_3[ 'it' ] = '/offerta-formativa/master/gestione-risorse-umana-organizzazzione/';
$link_master_3[ 'en' ] = '/en/programs/master/gestione-risorse-umana-organizzazzione/';
?>
		<?php $link_master_4 = array();
$link_master_4[ 'it' ] = '/offerta-formativa/master/master-in-management-in-the-energy-industry/';
$linkmaster_4[ 'en' ] = '/en/programs/master/master-in-management-in-the-energy-industry/';
?>
		<?php $link_master_5 = array();
$link_master_5[ 'it' ] = '/offerta-formativa/master/management-turismo/';
$link_master_5[ 'en' ] = '/en/programs/master/management-turismo/';
?>
		<?php $link_master_6 = array();
$link_master_6[ 'it' ] = '/offerta-formativa/master/master-of-art/';
$link_master_6[ 'en' ] = '/en/programs/master/master-of-art/';
?>
		<?php $link_master_7 = array();
$link_master_7[ 'it' ] = '/offerta-formativa/master/luiss-master-of-music/';
$link_master_7[ 'en' ] = '/en/programs/master/luiss-master-of-music/';
?>
		<?php $link_master_7 = array();
$link_master_7[ 'it' ] = '/offerta-formativa/master/luiss-master-of-music/';
$link_master_7[ 'en' ] = '/en/programs/master/luiss-master-of-music/';
?>
		<?php $link_master_8 = array();
$link_master_8[ 'it' ] = '/offerta-formativa/master/luiss-writing-school-for-cinema-television/';
$link_master_8[ 'en' ] = '/en/programs/master/luiss-writing-school-for-cinema-television/';
?>
		<?php $link_master_9 = array();
$link_master_9[ 'it' ] = '/offerta-formativa/master/luiss-writing-school-for-cinema/';
$link_master_9[ 'en' ] = '/en/programs/master/luiss-writing-school-for-cinema/';
?>
		<?php $link_master_10 = array();
$link_master_10[ 'it' ] = '/offerta-formativa/master/master-trade-management/';
$link_master_10[ 'en' ] = '/en/programs/master/master-trade-management/';
?>
		<?php $titolo_master_10 = array();
$titolo_master_10[ 'it' ] = 'Master in Trade Management';
$titolo_master_10[ 'en' ] = 'Trade Management Master';
?>
		<?php $titolo_master_11 = array();
$titolo_master_11[ 'it' ] = 'Management delle Strutture di Prossimità e delle Forme Associative nell’Assistenza Territoriale';
$titolo_master_11[ 'en' ] = 'Master Program on the Management of Primary Care Organizations';
?>
		<?php $titolo_master_20 = array();
$titolo_master_20[ 'it' ] = 'Master in Management dei Prodotti Biomedicali';
$titolo_master_20[ 'en' ] = 'Master in Management of Biomedical Products';
?>
		<?php $link_master_11 = array();
$link_master_11[ 'it' ] = '/offerta-formativa/master/luiss-master-of-fashion/';
$link_master_11[ 'en' ] = '/en/programs/master/luiss-master-of-fashion/';
?>
		<?php $link_master_12 = array();
$link_master_12[ 'it' ] = '/offerta-formativa/master/employability/';
$link_master_12[ 'en' ] = '/en/programs/master/employability/';
?>
		<?php $link_master_13 = array();
$link_master_13[ 'it' ] = '/offerta-formativa/master/master-in-big-data-management/';
$link_master_13[ 'en' ] = '/en/programs/master/master-in-big-data-management/';
?>
		<?php $link_master_14 = array();
$link_master_14[ 'it' ] = '/offerta-formativa/master/master-in-corporate-finance/';
$link_master_14[ 'en' ] = '/en/programs/master/master-in-corporate-finance/';
?>
		<?php $link_master_15 = array();
$link_master_15[ 'it' ] = '/offerta-formativa/master/open-innovation-intellectual-property/';
$link_master_15[ 'en' ] = '/en/programs/master/open-innovation-intellectual-property/';
?>
		<?php $link_master_16 = array();
$link_master_16[ 'it' ] = '/offerta-formativa/master/real-estate-finance/';
$link_master_16[ 'en' ] = '/en/programs/master/real-estate-finance/';
?>
		<?php $link_master_17 = array();
$link_master_17[ 'it' ] = '/offerta-formativa/master/healthcare-pharmaceutical-administration/';
$link_master_17[ 'en' ] = '/en/programs/master/healthcare-pharmaceutical-administration/';
?>
		<?php $titolo_master_19 = array();
$titolo_master_19[ 'it' ] = 'Master in Management delle Aziende Sanitarie';
$titolo_master_19[ 'en' ] = 'Master in Management of Health Services';
?>
		<?php $link_master_19 = array();
$link_master_19[ 'it' ] = '/offerta-formativa/master/management-aziende-sanitarie/';
$link_master_19[ 'en' ] = '/en/programs/master/management-aziende-sanitarie/';
?>
		<?php $link_master_20 = array();
$link_master_20[ 'it' ] = '/offerta-formativa/master/probiomed/';
$link_master_20[ 'en' ] = '/en/programs/master/probiomed/';
?>
		<?php $testo_master_20 = array();
$testo_master_20[ 'it' ] = 'Master in Management dei Prodotti Biomedicali';
$testo_master_20[ 'en' ] = 'Master in Management of Biomedical Products';
?>
		<?php $link_master_21 = array();
$link_master_21[ 'it' ] = '/offerta-formativa/master/mphilmares/';
$link_master_21[ 'en' ] = '/en/programs/master/mphilmares/';
?>
		<?php $link_master_22 = array();
$link_master_22[ 'it' ] = '/offerta-formativa/master/food-wine/';
$link_master_22[ 'en' ] = '/en/programs/master/food-wine/';
?>
		<?php $link_master_23 = array();
$link_master_23[ 'it' ] = '/offerta-formativa/master/master-relazioni-istituzionali-lobby-comunicazione-impresa/';
$link_master_23[ 'en' ] = '/en/programs/master/relazioni-istituzionali-lobby-comunicazione-dimpresa/';
?>
		<?php $link_master_26 = array();
$link_master_26[ 'it' ] = '/offerta-formativa/master/master-in-international-management/';
$link_master_26[ 'en' ] = '/en/programs/master/mim-master-in-international-management/';
?>
		<?php $link_master_27 = array();
$link_master_27[ 'it' ] = '/offerta-formativa/master/master-of-fashion-en/';
$link_master_27[ 'en' ] = '/en/programs/master/master-of-fashion-en/';
?>
		<?php $titolo_master_24 = array();
$titolo_master_24[ 'it' ] = 'Master in Gestione della Produzione Cinematografica e Televisiva';
$titolo_master_24[ 'en' ] = 'Master in Television & Film Management';
?>
		<?php $link_master_24 = array();
$link_master_24[ 'it' ] = '/offerta-formativa/master/gestione-produzione-cinematografica/';
$link_master_24[ 'en' ] = '/en/programs/master/gestione-produzione-cinematografica/';
?>
		<?php $link_master_25 = array();
$link_master_25[ 'it' ] = '/offerta-formativa/master/master-in-management-and-technology-with-a-major-in-digital-ecosystem/';
$link_master_25[ 'en' ] = '/en/programs/master/master-in-management-and-technology-with-a-major-in-digital-ecosystem/';
?>

		<?php $link_master_28 = array();
$link_master_28[ 'it' ] = '/offerta-formativa/master/master-in-master-in-management-and-technology-risk-management-and-insurance/';
$link_master_28[ 'en' ] = '/en/programs/master/master-in-master-in-management-and-technology-risk-management-and-insurance/';
?>



		<div class="row">
			<div class="col-md-12">
				<!--BEGIN MASTER -->
				<a href="/project-management/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>
 Project Management</span></h3>
									<p>
										<?php echo $lingua_corso_it[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->

				<!--BEGIN MASTER -->
				<a href="/marketing-management/" class="col-md-4  col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Sales & Account Management <br>– Major Del Master In M³ Marketing Management</span></h3>
									<p>
										<?php echo $lingua_corso_it[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>

						</div>
					</div>
				</a>
				<!--END MASTER -->

				<!--BEGIN MASTER -->
				<a href="/marketing-management/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>RETAILING, E-COMMERCE E GESTIONE MULTICANALE – MAJOR DEL MASTER IN M³ MARKETING MANAGEMENT</span></h3>
									<p>
										<?php echo $lingua_corso_it[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->



				<!--BEGIN MASTER -->
				<a href="/mabda/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Master in
Big Data Management</span></h3>
									<p>
										<?php echo $lingua_corso_en[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->


				<!--BEGIN MASTER -->
				<a href="/international-management/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Master in International Management</span></h3>
									<p>
										<?php echo $lingua_corso_en[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->


				<!--BEGIN MASTER -->
				<a href="/management-technology-digital-ecosystem/" class="col-md-4  col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Master in Management and Technology <br>Major in Digital Ecosystem</span></h3>
									<p>
										<?php echo $lingua_corso_en[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->



				<!--BEGIN MASTER -->
				<a href="/management-energy-industry/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
							<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive">
								<div class="master-image">
									<h3><span>Master in Management and Technology <br>Major in Energy Industry</span></h3>
									<p>
										<?php echo $lingua_corso_en[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->


				<!--BEGIN MASTER -->
				<a href="/management-technology-risk-management-insurance/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Master in Management and Technology <br>Major in Risk Management and Insurance</span></h3>
									<p>
										<?php echo $lingua_corso_en[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->



				<!--BEGIN MASTER -->
				<a href="http://creative.luiss.it/luiss-master-of-art/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Master of Art</span></h3>
									<p>
										<?php echo $lingua_corso_it[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->



				<!--BEGIN MASTER -->
				<a href="http://creative.luiss.it/luiss-master-of-music/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>LUISS </span>
<span>Master of Music</span></h3>
									<p>
										<?php echo $lingua_corso_it[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->


				<!--BEGIN MASTER -->
				<a href="/trade-management/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Master in </span>
<span>Trade Management</span></h3>
									<p>
										<?php echo $lingua_corso_it[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->


				<!--BEGIN MASTER -->
				<a href="http://creative.luiss.it/luiss-gestione-produzione-cinematografica/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Master in </span>
<span> Gestione della Produzione Cinematografica e Televisiva</span></h3>
									<p>
										<?php echo $lingua_corso_it[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->



				<!--BEGIN MASTER -->
				<a href="http://creative.luiss.it/luiss-master-of-fashion/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>LUISS </span>
<span> Master of Fashion</span></h3>
									<p>
										<?php echo $lingua_corso_it[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->


				<!--BEGIN MASTER -->
				<a href="http://creative.luiss.it/luiss-master-of-fashion-en/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>LUISS </span>
<span> Master of Fashion</span></h3>
									<p>
										<?php echo $lingua_corso_en[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->

				<!--BEGIN MASTER -->
				<a href="/macofin/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Master in  </span>
<span> Corporate Finance</span></h3>
									<p>
										<?php echo $lingua_corso_en[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->


				<a href="http://creative.luiss.it/luiss-master-food-wine/" class="col-md-4  col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Master in  </span>
<span> Food & Wine Business</span></h3>
									<p>
										<?php echo $lingua_corso_en[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->





				<!--BEGIN MASTER -->
				<a href="/tourism-management/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Master in  </span>
<span>Tourism Management</span></h3>
									<p>
										<?php echo $lingua_corso_en[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->


				<!--BEGIN MASTER -->
				<a href="http://www.maref.luiss.it/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Master in  </span>
<span> Real Estate Finance</span></h3>
									<p>
										<?php echo $lingua_corso_it[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->


				<!--BEGIN MASTER -->
				<a href="http://creative.luiss.it/luiss-writing-school-for-television/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>LUISS  </span>
<span> Writing school for Cinema & Television</span></h3>
									<p>
										<?php echo $lingua_corso_it[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->


				<!--BEGIN MASTER -->
				<a href="/relazioni-istituzionali-lobby-comunicazione-impresa/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Master in  </span>
<span> Relazioni Istituzionali Lobby e Comunicazione d’impresa</span></h3>
									<p>
										<?php echo $lingua_corso_it[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata_part[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->


				<!--BEGIN MASTER -->
				<a href="/probiomed/" class="col-md-4  col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Management dei Prodotti Biomedicali – Major del Master in Management della Filiera della Salute</span></h3>
									<p>
										<?php echo $lingua_corso_it[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php echo $durata_part[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>
				<!--END MASTER -->












			</div>
		</div>
	</div>
	</div>
	</div>
</section>
<div class="featurette-divider"></div>

</section> <?php get_footer( 2017 );?>