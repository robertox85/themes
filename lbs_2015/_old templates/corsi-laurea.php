<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Template Name: Corsi di Laurea
 * @file corsi-laurea.php
 */
 get_header(2017);
?>


<?php
$titolo_dipartimento = array();
$titolo_dipartimento['it'] = 'Dipartimento di Impresa e Management';
$titolo_dipartimento['en'] = 'Department of Business and Management';
?>

<?php
$titolo_magistrale = array();
$titolo_magistrale['it'] = 'Corsi di Laurea Magistrale';
$titolo_magistrale['en'] = 'Master&#8217;s degree PROGRAMMES';
?>

<?php
$link_corso_magistrale = array();
$link_corso_magistrale['it'] = 'https://www.luiss.it/ammissione/offerta-formativa/laurea-magistrale/corporate-finance';
$link_corso_magistrale['en'] = 'https://www.luiss.it/ammissione/offerta-formativa/laurea-magistrale/corporate-finance';
?>

<?php
$link_corso_magistrale_2 = array();
$link_corso_magistrale_2['it'] = 'https://www.luiss.it/ammissione/offerta-formativa/laurea-magistrale/amministrazione-finanza-controllo';
$link_corso_magistrale_2['en'] = 'https://www.luiss.edu/course/040c1bc7-8718-4dc5-b2b2-02d70b0fe6e1';
?>

<?php
$link_corso_magistrale_4 = array();
$link_corso_magistrale_4['it'] = 'https://www.luiss.it/ammissione/offerta-formativa/laurea-magistrale/marketing';
$link_corso_magistrale_4['en'] = 'https://www.luiss.edu/course/6103eea0-5fab-460c-b817-999e51ef6e99';
?>

<?php
$link_corso_magistrale_5 = array();
$link_corso_magistrale_5['it'] = 'https://www.luiss.it/ammissione/offerta-formativa/laurea-magistrale/management';
$link_corso_magistrale_5['en'] = 'https://www.luiss.edu/course/0c05a36f-d6f4-4561-8850-6774adfea59e';
?>

<?php
$titolo_corso_magistrale = array();
$titolo_corso_magistrale['it'] = 'Corporate Finance';
$titolo_corso_magistrale['en'] = 'Corporate Finance';
?>
<?php
$titolo_corso_magistrale_2 = array();
$titolo_corso_magistrale_2['it'] = 'Amministrazione, Finanza e Controllo';
$titolo_corso_magistrale_2['en'] = 'Accounting, Control and Finance';
?>

<?php
$titolo_corso_magistrale_3 = array();
$titolo_corso_magistrale_3['it'] = 'Global Management and Politics
';
$titolo_corso_magistrale_3['en'] = 'Global Management and Politics
';
?>

<?php   $link_corso_magistrale_3 = array();
		$link_corso_magistrale_3['it'] = 'https://www.luiss.it/ammissione/offerta-formativa/laurea-magistrale/global-management-and-politics';
		$link_corso_magistrale_3['en'] = 'https://www.luiss.it/ammissione/offerta-formativa/laurea-magistrale/global-management-and-politics';
?>

<?php
$sub_home = array();
$sub_home['it'] = 'I nostri studenti approfondiscono le dinamiche aziendali con metodologie di insegnamento innovative che usano anche il supporto di strumenti giuridico-economici e quantitativi al fine di sollecitare una leadership manageriale ampia, solida e completa che crei valore e capacità competitiva globale per le imprese.';
$sub_home['en'] = 'Our students deepen the business environment through innovative learning and teaching methods, even supported by legal-economic and quantitative tools, aimed to foster a broad, solid and complete managerial leadership which is able to create value and competitive capability for the companies.
';
?>


<?php $lingua_corso_it = array();
$lingua_corso_it[ 'it' ] = 'ITALIANO';
$lingua_corso_it[ 'en' ] = 'ITALIAN';
?> <?php $lingua_corso_en = array();
$lingua_corso_en[ 'it' ] = 'INGLESE';
$lingua_corso_en[ 'en' ] = 'ENGLISH';
?>



<?php
$img_m1 = array();
$img_m1['it'] = '/wp-content/uploads/2017/06/LaureeMagistrali_IT-1.jpg';
$img_m1['en'] = '/wp-content/uploads/2017/06/LaureeMagistrali_EN-1.jpg';
?>



<?php   $titolo_triennale = array();
		$titolo_triennale['it'] = 'Corsi di Laurea Triennale';
		$titolo_triennale['en'] = 'Bachelor&#8217;s degree PROGRAMMES';
?>
<?php   $titolo_corso_triennale = array();
		$titolo_corso_triennale['it'] = 'Economia e Management';
		$titolo_corso_triennale['en'] = 'Economics and Management';
?>
<?php   $link_corso_triennale = array();
		$link_corso_triennale['it'] = 'http://www.luiss.it/ammissione/offerta-formativa/economia-e-management';
		$link_corso_triennale['en'] = 'http://www.luiss.edu/admissions/programs-offered/economics-and-management';
?>

<?php   $link_corso_triennale_2 = array();
		$link_corso_triennale_2['it'] = 'http://www.luiss.it/ammissione/offerta-formativa/amministrazione-finanza-controllo';
		$link_corso_triennale_2['en'] = 'http://www.luiss.edu/admissions/programs-offered/administration-control-and-finance';
?>


<div class="section sub-home sub-home-master" id="sub-home">
	<div class="container">
		<div class="row sub-home-list">
			<div class="sub-home-grid">
				<div class="col-md-12">
					<div class="sub-home-heading">
						<header>
							<h1>
								<?php
echo the_title(); ?>
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
					<img src="<?php echo site_url() ?>/wp-content/uploads/2015/03/I-primi-step-di-un-percorso-manageriale-globale.jpg" alt="Bachelor and Master of Science" class="img-responsive">
				</div>
			</div>
			<div class="col-md-4 grid-row-quotes grid-col">
				<p>
					<?php
echo $sub_home[ICL_LANGUAGE_CODE]; ?>
				</p>
			</div>
		</div>
	
		
   <h2 class="section-h2 h2"><?php echo $titolo_magistrale[ICL_LANGUAGE_CODE]; ?></h2>

		<div class="row">
			<div class="col-md-12">
				<!--BEGIN MASTER -->
				<a href="<?php echo $link_corso_magistrale[ICL_LANGUAGE_CODE]; ?>" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php
echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php
echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span><?php echo $titolo_corso_magistrale[ICL_LANGUAGE_CODE]; ?></span></h3>
									<p>
										<?php
echo $lingua_corso_en[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							
						</div>
					</div>
				</a>
				<!--END MASTER -->

				<!--BEGIN MASTER -->
				<a href="<?php echo $link_corso_magistrale_2[ICL_LANGUAGE_CODE]; ?>" class="col-md-4  col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php
echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php
echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
								<h3><span><?php echo $titolo_corso_magistrale_2[ICL_LANGUAGE_CODE]; ?></span></h3>
									<p>
										<?php
echo $lingua_corso_it[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							

						</div>
					</div>
				</a>
				<!--END MASTER -->
				
					<!--BEGIN MASTER -->
				<a href="<?php echo $link_corso_magistrale_3[ICL_LANGUAGE_CODE]; ?>" class="col-md-4  col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php
echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php
echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
								<h3><span><?php echo $titolo_corso_magistrale_3[ICL_LANGUAGE_CODE]; ?></span></h3>
									<p>
										<?php
echo $lingua_corso_en[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							

						</div>
					</div>
				</a>
				<!--END MASTER -->
				

				<!--BEGIN MASTER -->
				<a href="<?php echo $link_corso_magistrale_5[ICL_LANGUAGE_CODE]; ?>" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php
echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php
echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
								<h3><span>Management</span></h3>
									<p>
										<?php
echo $lingua_corso_en[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							
						</div>
					</div>
				</a>
				<!--END MASTER -->



				<!--BEGIN MASTER -->
				<a href="http://www.luiss.it/ammissione/offerta-formativa/marketing" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php
echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php
echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Marketing</span></h3>
									<p>
										<?php
echo $lingua_corso_en[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							
						</div>
					</div>
				</a>
				<!--END MASTER -->
				
				
				
				
				
				
			</div>
		</div>
			
	 <h2 class="section-h2 h2"><?php echo $titolo_triennale[ICL_LANGUAGE_CODE]; ?></h2>
			
		<div class="row">
			<div class="col-md-12">	
				<!--BEGIN MASTER -->
				<a href="https://www.luiss.it/ammissione/offerta-formativa/laurea-triennale/economia-e-management" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php
echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php
echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span><?php echo $titolo_corso_triennale [ICL_LANGUAGE_CODE]; ?></span></h3>
									<p>
										<?php
echo $lingua_corso_it[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							
						</div>
					</div>
				</a>
				<!--END MASTER -->



  		<!--BEGIN MASTER -->
				<a href="https://www.luiss.it/ammissione/offerta-formativa/laurea-triennale/management-computer-science" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php
echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php
echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>Management and Computer Science</span></h3>
									<p>
										<?php
echo $lingua_corso_en[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							
						</div>
					</div>
				</a>
				<!--END MASTER -->


		
			<!--BEGIN MASTER -->
<!--
				<a href="<?php // echo $link_corso_triennale_2 [ICL_LANGUAGE_CODE]; ?>" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php
// echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php
//echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>
Management and Computer Science
</span></h3>
									<p>
										<?php
// echo $lingua_corso_en[ICL_LANGUAGE_CODE]; ?>
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							
						</div>
					</div>
				</a>
-->
				<!--END MASTER -->
		
		
		
		
		
		
		
			</div>
		</div>
	</div>
	</div>
	</div>
</section>
<div class="featurette-divider"></div>

</section> <?php
get_footer(2017); ?>