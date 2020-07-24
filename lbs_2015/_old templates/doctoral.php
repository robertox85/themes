<?php

// Exit if accessed directly

if (!defined('ABSPATH')) exit;
/**
 * Template Name: Doctoral 2017
 * @file master.php
 */
get_header(2017);
?>


<?php   $titolo_dottorato = array();
		$titolo_dottorato['it'] = 'Dipartimento di Impresa e Management <br> Dottorati';
		$titolo_dottorato['en'] = 'Department of Business and Management <br> PhD Programs';
?>
<?php   $titolo_corso_dottorato = array();
		$titolo_corso_dottorato['it'] = 'Dottorato in Management';
		$titolo_corso_dottorato['en'] = 'PhD Program in Management';
?>
<?php   $link_corso_dottorato = array();
		$link_corso_dottorato['it'] = 'http://www.luiss.it/ammissione/offerta-formativa/dottorato-in-management';
		$link_corso_dottorato['en'] = 'http://www.luiss.edu/admissions/programs-offered/phd-program-in-management';
?>


<?php   $lingua_corso_en = array();
		$lingua_corso_en['it'] = 'ENGLISH';
		$lingua_corso_en['en'] = 'ENGLISH';
?>


<?php
$sub_home = array();
$sub_home['it'] = 'I PhD Programme intendono formare professionisti di livello internazionale in grado di contribuire all’avanzamento delle frontiere della ricerca per essere parte di una comunità attiva nell’evoluzione della conoscenza. Permettono di intraprendere carriere accademiche o professionali nell’ambito di topic specifici per aziende leader di settore, società di consulenza, istituzioni finanziarie e autorità di politica economica e/o regolamentare.';
$sub_home['en'] = 'The PhD Programmes aim to trainee professionals of International standing who are able to boost the knowledge and the boundaries of the research on the specific topics, in order to start an academic or professional career in large companies, consulting firms, financial and International Institutions, and Authorities of economic policy.
';
?>

<?php   $titolo_dottorato = array();
		$titolo_dottorato['it'] = 'Dipartimento di Impresa e Management <br> Dottorati';
		$titolo_dottorato['en'] = 'Department of Business and Management <br> PhD Programs';
?>
<?php   $titolo_corso_dottorato = array();
		$titolo_corso_dottorato['it'] = 'Dottorato in Management';
		$titolo_corso_dottorato['en'] = 'PhD Program in Management';
?>
<?php   $link_corso_dottorato = array();
		$link_corso_dottorato['it'] = 'http://www.luiss.it/ammissione/offerta-formativa/dottorato-in-management';
		$link_corso_dottorato['en'] = 'http://www.luiss.edu/admissions/programs-offered/phd-program-in-management';
?>



<?php
$img_m1 = array();
$img_m1['it'] = '/wp-content/uploads/2017/06/PHD_IT-1.jpg';
$img_m1['en'] = '/wp-content/uploads/2017/06/PHD_EN-1.jpg';
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
					<img src="<?php echo site_url() ?>/wp-content/uploads/2015/05/Mettere-a-sistema-universit%C3%A0-e-impresa.jpg" alt="PHD - Mettere a sistema università e impresa" class="img-responsive">
				</div>
			</div>
			<div class="col-md-4 grid-row-quotes grid-col">
				<p>
					<?php
echo $sub_home[ICL_LANGUAGE_CODE]; ?>
				</p>
			</div>
		</div>
	
		
  <h2 class="section-h2 h2">PHD PROGRAMMES </h2>

		<div class="row">
			<div class="col-md-12">
				<!--BEGIN MASTER -->
				<a href="<?php echo $link_corso_dottorato[ICL_LANGUAGE_CODE]; ?>" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php
echo $img_m1[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php
echo $img_m1[ICL_LANGUAGE_CODE]; ?>" class="img-responsive ">
								<div class="master-image">
									<h3><span>PHD PROGRAMMES</span></h3>
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
				</div>
			</div>
		</div>
</section>
<div class="featurette-divider"></div>

</section> <?php
get_footer(2017); ?>
