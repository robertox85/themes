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
$img_m1[ 'it' ] = '/wp-content/uploads/2017/06/Immagini_MASTER_PrimoLivello_ITA.jpg';
$img_m1[ 'en' ] = '/wp-content/uploads/2017/06/Immagini_MASTER_PrimoLivello_EN.jpg';
?>

<?php $img_m2 = array();
$img_m2[ 'it' ] = '/wp-content/uploads/2017/06/Immagini_MASTER_SecondoLivello_ITA.jpg';
$img_m2[ 'en' ] = '/wp-content/uploads/2017/06/Immagini_MASTER_SecondoLivello_EN.jpg';
?>

<?php $img_m3 = array();
$img_m3[ 'it' ] = '/wp-content/uploads/2019/11/MASTER_BELLUNO_PrimoLivello_ITA.jpg';
$img_m3[ 'en' ] = '/wp-content/uploads/2019/11/MASTER_BELLUNO_PrimoLivello_ITA.jpg';
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
				<p>Come here to be challenged. Leave ready to take on the most important challenges of our time. At LUISS Business School, we create wise leaders who aspire to MAKE  the difference in the world of business and beyond. Join us.</p>
			</div>
		</div>
		<div class="featurette-divider"></div>


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

		<?php $link_master_12 = array();
$link_master_12[ 'it' ] = '/offerta-formativa/master/employability/';
$link_master_12[ 'en' ] = '/en/programs/master/employability/';
?>
	
	
		<?php $link_master_15 = array();
$link_master_15[ 'it' ] = '/offerta-formativa/master/open-innovation-intellectual-property/';
$link_master_15[ 'en' ] = '/en/programs/master/open-innovation-intellectual-property/';
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

		<?php $testo_master_20 = array();
$testo_master_20[ 'it' ] = 'Master in Management dei Prodotti Biomedicali';
$testo_master_20[ 'en' ] = 'Master in Management of Biomedical Products';
?>


	
<?php $titolo_master_24 = array();
$titolo_master_24[ 'it' ] = 'Master in Gestione della Produzione Cinematografica e Televisiva';
$titolo_master_24[ 'en' ] = 'Master in Television & Film Management';
?>
		

<?php $diritto_tributario = array();
$diritto_tributario[ 'it' ] = ' Diritto Tributario, Contabilità e Pianificazione Fiscale';
$diritto_tributario[ 'en' ] = ' Tax Law, Accounting and Tax Planning';
?>

		<div class="row">
			<div class="col-md-12">
			
			
				<!--BEGIN MASTER -->
				<a href="/mabda/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Big Data and Management</span></h3>
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
									<h3><span>  Tourism Management <br>Major of the Master in Fashion, Luxury & Tourism Management</span></h3>
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
				<a href="/tourism-management-belluno/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m3[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m3[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>  Tourism Management<br>Major del Master in Fashion, Luxury & Tourism Management</span></h3>
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
				<a href="/master-of-fashion/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span> Fashion Management  <br>Major of the Master in Fashion, Luxury & Tourism Management</span></h3>
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
				<a href="/master-of-luxury/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span> Luxury Management  <br>Major of the Master in Fashion, Luxury & Tourism Management</span></h3>
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
				<a href="/project-management/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Project Management</span></h3>
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
				<a href="/project-management-cooperazione-internazionale/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span> Project Management for Development Cooperation  <br> Major del Master in Project Management</span></h3>
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
				<a href="/international-management/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>International Management<br>Major of the Master in International Management</span></h3>
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
							<img src="/wp-content/uploads/2018/05/Immagine_BOX_Milano.jpg" data-at2x="/wp-content/uploads/2018/05/Immagine_BOX_Milano.jpg" class="img-responsive">
								<div class="master-image">
									<h3><span>Global Energy Management  <br>Major of the Master in International Management</span></h3>
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
				<a href="/entrepreneurship/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Entrepreneurship</span></h3>
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
									<h3><span> HoReCa Trade Management<br>Major del Master in Marketing Management </span></h3>
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
								<img src="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span> Relazioni Istituzionali, Lobby e Comunicazione d’impresa
</span></h3>
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
				<a href="/gruo/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Gestione delle Risorse Umane e Organizzazione</span></h3>
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
				<a href="/gruo/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="/wp-content/uploads/2018/05/Immagine_BOX_Milano.jpg" data-at2x="/wp-content/uploads/2018/05/Immagine_BOX_Milano.jpg" class="img-responsive ">
								<div class="master-image">
									<h3><span>Gestione delle Risorse Umane e Organizzazione</span></h3>
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
				<a href="/diritto-tributario/" class="col-md-4  col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span><?php echo $diritto_tributario[ICL_LANGUAGE_CODE]; ?></span></h3>
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
				<a href="/macofin/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Corporate Finance <br> Major of the Master in Financial Management</span></h3>
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
				<a href="/corporate-finance-banking-major-banking/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span> Corporate  Investment Banking  <br> Major del  Master in Financial Management </span></h3>
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
				<a href="/corporare-finance-banking-major-finanza-aziendale/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span> Amministrazione, Finanza e Controllo <br> Major del Master in Financial Management</span></h3>
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
				<a href="/corporare-finance-banking-major-finanza-aziendale/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m3[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m3[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span> Amministrazione, Finanza e Controllo <br> Major del Master in Financial Management</span></h3>
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
				<a href="http://www.maref.luiss.it/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Real Estate & Finance  <br> Major del Master in Financial Management</span></h3>
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
				<a href="/management-technology-risk-management-insurance/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Risk and Insurance Management  <br>Major of the Master in Financial Management</span></h3>
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
				<!--<a href="/corporate-finance-banking-major-in-insurance-management/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Insurance Management – Major del Master in Corporate Finance & Banking</span></h3>
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
				</a>-->
				<!--END MASTER -->
				
				
				
				
				
			
				
				
				
				
				<!--BEGIN MASTER -->
				<a href="/digital-business-strategy-belluno/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
							<img src="<?php echo $img_m3[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m3[ICL_LANGUAGE_CODE]; ?>" class="img-responsive">
								<div class="master-image">
									<h3><span>Digital Business Strategy  <br>Major del Master in Management and Technology</span></h3>
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
				<a href="/digital-business-strategy/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
							<img src="//businessschool.luiss.it/wp-content/uploads/2018/05/Immagine_BOX_Milano.jpg" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive">
								<div class="master-image">
									<h3><span>Digital Business Strategy  <br>Major del Master in Management and Technology</span></h3>
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
		<!--		<a href="/management-energy-industry-milano-hub/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
							<img src="//businessschool.luiss.it/wp-content/uploads/2018/05/Immagine_BOX_Milano.jpg" data-at2x="<?php //echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive">
								<div class="master-image">
									<h3><span>Energy Industry <br>Major del Master in Management and Technology </span></h3>
									<p>
										<?php //echo $lingua_corso_it[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php // echo $titolo_durata[ICL_LANGUAGE_CODE]; ?> 
<span style="font-size: 14px; font-weight: lighter"> <?php // echo $durata[ICL_LANGUAGE_CODE]; ?></span> </h3>
						</div>
					</div>
				</a>-->
				<!--END MASTER -->
				
				
				
				
				<!--BEGIN MASTER -->
				<a href="/management-technology-digital-ecosystem/" class="col-md-4  col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Business Transformation <br>Major of the Master in Management and Technology</span></h3>
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
				<a href="/disruptive-ma/" class="col-md-4  col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Strategy For Disruptive Growth <br>Major of the Master in Management and Technology</span></h3>
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
				<a href="/global-supply-chain-management/" class="col-md-4  col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Global Supply Chain Management  <br>Major of the Master in Management and Technology</span></h3>
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
				<a href="/marketing-management-digital-marketing/" class="col-md-4  col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Digital Marketing <br> Major del Master in Marketing Management </span></h3>
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
				<a href="/marketing-management-digital-marketing/" class="col-md-4  col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="/wp-content/uploads/2018/05/Immagine_BOX_Milano.jpg" data-at2x="/wp-content/uploads/2018/05/Immagine_BOX_Milano.jpg" class="img-responsive ">
								<div class="master-image">
									<h3><span>Digital Marketing <br> Major del Master in Marketing Management </span></h3>
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
									<h3><span> Sales & Account Management <br> Major del Master in Marketing Management</span></h3>
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
								<img src="<?php echo $img_m3[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m3[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span> Sales & Account Management <br> Major del Master in Marketing Management</span></h3>
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
				<a href="/marketing-management-retailing-ecommerce/" class="col-md-4  col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span> Retailing, E-Commerce e Gestione Multicanale <br> Major del Master in Marketing Management </span></h3>
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
				<a href="/master-digital-export/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
							<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive">
								<div class="master-image">
									<h3><span>Digital Export  <br>Major of the Master in Marketing Management</span></h3>
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
				<a href="/pr-communication-event-management/" class="col-md-4  col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span> Corporate Event: Management, PR and Communication - Major del Master in Marketing Management </span></h3>
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
				<a href="/pr-communication-event-management/" class="col-md-4  col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="/wp-content/uploads/2018/05/Immagine_BOX_Milano.jpg" data-at2x="/wp-content/uploads/2018/05/Immagine_BOX_Milano.jpg" class="img-responsive ">
								<div class="master-image">
									<h3><span> Corporate Event: Management, PR and Communication - Major del Master in Marketing Management </span></h3>
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
				<a href="/master-of-art/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span> Master of Art</span></h3>
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
				<a href="/master-food-wine/" class="col-md-4  col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Food & Wine Business</span></h3>
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
				<a href="/food-and-wine-business-belluno/" class="col-md-4  col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m3[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m3[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Food & Wine Business</span></h3>
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
				<a href="/master-of-music/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Music  <br> Major del Master in Media Entertainment</span></h3>
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
				<a href="/gestione-produzione-cinematografica/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span> Gestione della Produzione Cinematografica e Televisiva<br>  Major del Master in Media Entertainment</span></h3>
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
				<a href="/writing-school-for-television/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span> Writing School for Cinema & Television <br> Major del Master in Media Entertainment</span></h3>
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
				<a href="/openinnovation-ip/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Open Innovation & Intellectual Property</span></h3>
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
				<a href="/master-circular-economy/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span> Executive Master in Circular Economy Management</span></h3>
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
				<a href="/probiomed/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Management della Filiera della Salute <br>
 Major In Management dei Prodotti Biomedicali
</span></h3>
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
				<a href="/management-aziende-sanitarie/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span> Management della Filiera della Salute – Major in Management delle Aziende Sanitarie</span></h3>
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
				<a href="/empha/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>  Management della Filiera della Salute- Major in Pharmaceutical &Healthcare Administration  (EMPHA)</span></h3>
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
				<a href="/executive-master-pharmaceutical-healthcare-administration/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>  Management della Filiera della Salute- Major in Pharmaceutical &Healthcare Administration  (EMPHA) ed. Autunno</span></h3>
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
				<a href="/master-sperimentazione-clinica/" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>  Management della Filiera della Salute – Major in Sperimentazione Clinica</span></h3>
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
				<a href="https://sog.luiss.it/graduate-programs/comunicazione-e-marketing-politico-ed-istituzionale " class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m2[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>  Master in Comunicazione e Marketing Politico ed Istituzionale</span></h3>
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
		
		<!--END ROW -->
	</div>
	</div>
	</div>
</section>
<div class="featurette-divider"></div>

</section> <?php get_footer( 2017 );?>