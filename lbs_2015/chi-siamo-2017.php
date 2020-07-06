<?php
// Exit if accessed directly 
if ( !defined(
'ABSPATH' ) )exit;
/** * Template Name: Chi Siamo 2017 
* @file chi-siamo.php */ 
get_header(2017); ?>
<div id="HomeCarousel" class="carousel slide"
data-ride="carousel">
    <div class="carousel-inner">
        <div class="item active"><img src="<?php echo site_url() ?>/wp-content/uploads/2017/04/perche-lbs-palazzina-blanc.jpg"
            alt="Luiss via Pola">
            <div class="container">
                <div class="carousel-caption">
                    <h1>
						<?php the_title()?>
					</h1>
                    <p><span class="slider_paragraf"><strong><?php echo get_field('sub_home_description') ?></strong></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $vision_desc=array(); $vision_desc[
'it']='Sii pronto al cambiamento' ; $vision_desc[
'en']='Be ready for change' ; ?>
<?php $mission_desc=array(); $mission_desc[
'it']='Crea il tuo domani' ; $mission_desc[
'en']="Create tomorrow" ; ?>
<?php $fattori=array(); $fattori [ 'it']='I fattori di differenziazione'
; $fattori [ 'en']="The differentiation factors"
; ?>
<section class="body-section">
    <div class="container">
       
       
       
        <div class="featurette-divider"></div>
        <div class="row">
            <div class="col-md-3">
                <div class="feature">
   <h2 class="block-title pipe">MISSION</h2>
                   
                </div>
            </div>
            <div class="col-md-9">
                <div class="feature">
                    <p>
                        <?php echo get_field('content_mission') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="body-section" style="background-color: #ebebeb">
    <div class="container">
        <div class="row">


            <div class="col-md-4">
                <div class="feature">
                    <img src="//businessschool.luiss.it/wp-content/uploads/2018/06/img_perche450x650.png"
                    alt="" class="img-responsive">
                </div>
            </div>
             <div class="col-md-5">
 
            <h3 class="pipe-2">
					<?php echo $fattori[ICL_LANGUAGE_CODE]; ?>
				</h3>
            
               <div class="featurette-divider-perche"></div>
            
     <div class="nav nav-tabs nav-stacked">
  <div class="feature botton"><h4 class="block-title"><a href="#tab1" data-toggle="tab"><?php echo get_field('box_launch_box_1') ?></a></h4> </div>
     <div class="feature botton"><h4 class="block-title"><a href="#tab2" data-toggle="tab"><?php echo get_field('box_launch_box_2') ?></a></h4> </div>
   <div class="feature botton"><h4 class="block-title"><a href="#tab3" data-toggle="tab"><?php  echo get_field('box_launch_box_3') ?></a></h4> </div>
      <div class="feature botton"><h4 class="block-title"><a href="#tab4" data-toggle="tab"><?php  echo get_field('box_launch_box_4') ?></a></h4> </div>
    <div class="feature botton"><h4 class="block-title"><a href="#tab5" data-toggle="tab"><?php  echo get_field('box_launch_box_5') ?></a></h4> </div>
    </div>
			</div>

            <div class="featurette-divider-perche"></div>


            <div class="col-md-3">
              
              
              <div class="tab-content">
              
        <div class="tab-pane fade" id="tab1">
          <?php echo get_field('box_di_lancio_content_1') ?> 
        </div>
     


        <div class="tab-pane fade" id="tab2">
         <?php  echo get_field('box_di_lancio_content_2') ?>      
        </div>
	
				

        <div class="tab-pane fade" id="tab3">
       <?php echo get_field('box_di_lancio_content_3') ?>
        </div>
        
      
        <div class="tab-pane fade" id="tab4">
           <?php  echo get_field('box_di_lancio_content_4') ?>
        </div>

             
           <div class="tab-pane fade" id="tab5">
           <?php  echo get_field('box_di_lancio_content_5') ?>
        </div>   
             
             </div>
              
               
                
                
                
            </div>

        </div>

        
    </div>
</section>
<?php $centri=array(); $centri [ 'it']='Centri di competenza'
; $centri [ 'en']="COMPETENCE CENTRES" ;
?>

<?php $centri_r=array(); $centri_r [
'it']='CENTRI DI RICERCA' ; $centri_r [ 'en']="RESEARCH CENTRES"
; ?>

<?php $osservatori=array(); $osservatori
[ 'it']='OSSERVATORI' ; $osservatori [
'en']="OBSERVATORIES" ; ?>

<?php $link_lab_1=array(); $link_lab_1 [
'it']='/perche-luiss-bs/competence-center-big-data/'
; $link_lab_1 [ 'en']="/en/why-luiss-bs/competence-center-big-data/"
; ?>

<?php $link_lab_2=array(); $link_lab_2 [
'it']='/ershub/' ; $link_lab_2 [ 'en']='/ershub/en/'
; ?>
<?php $link_lab_4=array(); $link_lab_4 [
'it']='/perche-luiss-bs/competence-center-public-administration-healthcare-and-no-profit/'
; $link_lab_4 [ 'en']='/en/' ; ?>
<?php $link_lab_6=array(); $link_lab_6 [
'it']='/perche-luiss-bs/project-organising-competence-centre/'
; $link_lab_6 [ 'en']='/en/' ; ?>
<?php $link_lab_7=array(); $link_lab_7 [
'it']='/perche-luiss-bs/people-management-competence-center-lab/'
; $link_lab_7 [ 'en']='/en/' ; ?>
<?php $link_lab_8=array(); $link_lab_8 [
'it']='/perche-luiss-bs/creative-industry/'
; $link_lab_8 [ 'en']='/en/' ; ?>

<?php $link_lab_9=array(); $link_lab_9 [
'it']='/perche-luiss-bs/ceriis/' ; $link_lab_9
[ 'en']='/en/why-luiss-bs/ceriis/' ; ?>

<?php $link_osservatorio=array(); $link_osservatorio
[ 'it']='/perche-luiss-bs/osservatorio-executive-compensation-e-governance/'
; $link_osservatorio [ 'en']='/en/' ; ?>

<?php $link_governance=array(); $link_governance
[ 'it']='/perche-luiss-bs/governance/' ;
$link_governance [ 'en']='/en/why-luiss-bs/the-governance/'
; ?>

<a name="centri"></a>



<section class="body-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h3 class="pipe-2">
					<?php echo $osservatori[ICL_LANGUAGE_CODE]; ?>
				</h3>

                <div class="featurette-divider"></div>
                <h4 class="block-title">
				<span>
					<a href="<?php echo $link_osservatorio[ICL_LANGUAGE_CODE]; ?>">Executive compensation</a> 
							</span></h4>
           
           
              <h4 class="block-title">
				<span>
					<a href="/osservatorio-ethos/">Ethos </a> 
							</span></h4>
				
				
				
				     <h4 class="block-title">
				<span>
					<a href="./osservatorio-sulla-gestione-del-rischio-in-sanita/">Gestione del Rischio in Sanità </a> 
							</span></h4>
				
            </div>

            <div class="col-lg-4">
                <h3 class="pipe-2">
					<?php echo $centri_r[ICL_LANGUAGE_CODE]; ?>
				</h3>
                <div class="featurette-divider"></div>
                <h4 class="block-title">
				<span>
					<a href="//businessschool.luiss.it/en/why-luiss-bs/business-transformation-reboot/">Reboot</a> 
							</span></h4>
            </div>

            <div class="col-lg-4">
                <h3 class="pipe-2">
					<?php echo $centri[ICL_LANGUAGE_CODE]; ?>
				</h3>

                <div class="featurette-divider"></div>
                <h4 class="block-title">
				<span>
					<a href="<?php echo $link_lab_9[ICL_LANGUAGE_CODE]; ?>">	CERIIS</a> 
				</span></h4>
            
                <div class="featurette-divider"></div>
                <h4 class="block-title">
				<span>
					<a href="<?php echo $link_lab_2[ICL_LANGUAGE_CODE]; ?>">	ERShub</a> 
				</span></h4>
            
            
               
<!-- <div class="featurette-divider"></div>
                <h4 class="block-title">
				<span>
					<a href="<?php echo $link_lab_7[ICL_LANGUAGE_CODE]; ?>">	People Management </a> 
				</span></h4>
-->
            
            
            <div class="featurette-divider"></div>
                <h4 class="block-title">
				<span>
					<a href="<?php echo $link_lab_8[ICL_LANGUAGE_CODE]; ?>">	Creative Industry </a> 
				</span></h4>

            </div>
            
            

</section>

<section class="body-section bg_3_perche">
    <div class="container">
        <div class="row">

            <?php $link_governance_1=array(); $link_governance_1
            [ 'it']='/perche-luiss-bs/governance/steering-committee/'
            ; $link_governance_1 [ 'en']='/en/why-luiss-bs/governance/steering-committee/'
            ; ?>
            <?php $link_governance_2=array(); $link_governance_2
            [ 'it']='/perche-luiss-bs/governance/corporate-advisory-board/'
            ; $link_governance_2 [ 'en']='/en/why-luiss-bs/governance/corporate-advisory-board/'
            ; ?>
            <?php $link_governance_3=array(); $link_governance_3
            [ 'it']='/perche-luiss-bs/governance/international-advisory-board/'
            ; $link_governance_3 [ 'en']='/en/why-luiss-bs/governance/international-advisory-board/'
            ; ?>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 class="white-style"><a href="<?php echo $link_governance[ICL_LANGUAGE_CODE]; ?>">GOVERNANCE</a></h2>
                    </div>
                </div>
                <div class="featurette-divider"></div>
                <div class="col-lg-9">
                    <?php echo get_field( 'governance_intro')
                    ?>
                    <div class="featurette-divider"></div>
                    <h3 class="block-title h4 white-style"><a href="<?php echo $link_governance_1[ICL_LANGUAGE_CODE]; ?>">STEERING COMMITTEE</a></h3>
                    <h3 class="block-title h4 white-style"><a href="<?php echo $link_governance_2[ICL_LANGUAGE_CODE]; ?>">CORPORATE ADVISORY BOARD</a></h3>
                    <h3 class="block-title h4 white-style"><a href="<?php echo $link_governance_3[ICL_LANGUAGE_CODE]; ?>">INTERNATIONAL ADVISORY BOARD</a></h3>
                </div>
            </div>
            <?php $titolo_sidebar_destra= array(); $titolo_sidebar_destra
            [ 'it']='I nostri valori' ; $titolo_sidebar_destra
            [ 'en']='Our values' ; ?>
            <div class="col-md-6">
                <div class="col-lg-12 pull-right">
                    <h2 class="white-style  pull-right">
						<?php echo get_field('titolo_sidebar_destra') ?>
					</h2>
                </div>
                <div class="col-lg-11 pull-right">
                    <div class="col-lg-12">
                        <h3 class="block-title h3 pull-right white-style">
							<?php echo get_field('valori_lancio_titolo_1') ?>
						</h3>
                    </div>
                    <div class="col-lg-12">
                        <p class=" pull-right text-right white-style">
                            <?php echo get_field(
                            'valori_lancio_contenuto_1') ?> </p>
                    </div>
                    <div class="col-lg-12">
                        <h3 class="block-title h3 pull-right white-style">
							<?php echo get_field('valori_lancio_titolo_2') ?>
						</h3>
                    </div>
                    <div class="col-lg-12">
                        <p class=" pull-right text-right white-style">
                            <?php echo get_field(
                            'valori_lancio_contenuto_2') ?> </p>
                    </div>
                    <div class="col-lg-12">
                        <h3 class="block-title h3 pull-right white-style">
							<?php echo get_field('valori_lancio_titolo_3') ?>
						</h3>
                    </div>
                    <div class="col-lg-12">
                        <p class=" pull-right text-right white-style">
                            <?php echo get_field(
                            'valori_lancio_contenuto_3') ?> </p>
                    </div>
                    <div class="col-lg-12">
                        <h3 class="block-title h3 pull-right white-style">
							<?php echo get_field('valori_lancio_titolo_4') ?>
						</h3>
                    </div>
                    <div class="col-lg-12">
                        <p class="pull-right text-right white-style">
                            <?php echo get_field(
                            'valori_lancio_contenuto_4') ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


   <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?>

<?php get_footer(2017); ?>