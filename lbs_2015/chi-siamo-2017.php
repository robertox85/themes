<?php
// Exit if accessed directly 
if ( !defined(
'ABSPATH' ) )exit;
/** * Template Name: Chi Siamo 2017 
* @file chi-siamo.php */
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header(2017); ?>

<?php
$img_chisiamo=array();
$img_chisiamo['it']='/wp-content/uploads/2017/04/perche-lbs-palazzina-blanc.jpg';
$img_chisiamo['en']='/wp-content/uploads/2017/04/perche-lbs-palazzina-blanc.jpg';
?>
<div class="item-centre box-cover-subhome" style="background-image:url(<?php echo $img_chisiamo[ICL_LANGUAGE_CODE]; ?>)">
    <div class="container">
        <div class="row centre mt-128 pt-80">
            <div class="col-md-12">
            <h1><?php echo the_title(); ?></h1>
            <h2><span class="bg__gold"><?php echo get_field('sub_home_description') ?></span></h2>
            </div>
        </div>
    </div>
</div>

<?php get_template_part( 'pco/template-parts/section-mission-valori', get_post_format() ); ?>

<?php get_template_part( 'pco/template-parts/section-governance-jumbotron', get_post_format() ); ?>

<?php get_template_part( 'pco/template-parts/section-fattori-differenziazione', get_post_format() ); ?>

<!-- Osservatori etc. -->
<?php
    
$centri=array();
$centri['it']='Centri di Competenza';
$centri['en']='Competence Centres';

$centri_r=array();
$centri_r ['it']='Centri di Ricerca';
$centri_r [ 'en']='Research Centres'; 

$osservatori=array();
$osservatori['it']='Osservatori';
$osservatori['en']='Observatories'; 
                                    
$link_lab_1=array();
$link_lab_1['it']='/perche-luiss-bs/competence-center-big-data/';
$link_lab_1['en']="/en/why-luiss-bs/competence-center-big-data/";
                                    
$link_lab_2=array();
$link_lab_2 ['it']='/ershub/';
$link_lab_2 ['en']='/ershub/en/'; 
                                    
$link_lab_4=array();
$link_lab_4['it']='/perche-luiss-bs/competence-center-public-administration-healthcare-and-no-profit/'; $link_lab_4['en']='/en/'; 
    
$link_lab_6=array();
$link_lab_6['it']='/perche-luiss-bs/project-organising-competence-centre/';
$link_lab_6['en']='/en/'; 

$link_lab_7=array();
$link_lab_7['it']='/perche-luiss-bs/people-management-competence-center-lab/';
$link_lab_7['en']='/en/';
    
$link_lab_8=array();
$link_lab_8['it']='/perche-luiss-bs/creative-industry/';
$link_lab_8['en']='/en/';
    
$link_lab_9=array();
$link_lab_9['it']='/perche-luiss-bs/ceriis/';
$link_lab_9['en']='/en/why-luiss-bs/ceriis/'; 
    
$link_osservatorio_1=array();
$link_osservatorio_1['it']='/perche-luiss-bs/osservatorio-executive-compensation-e-governance/';
$link_osservatorio_1['en']='/en/'; 
                                    
$link_osservatorio_2=array();
$link_osservatorio_2['it']='/osservatorio-ethos/';
$link_osservatorio_2['en']='/en/'; 
                                    
$link_osservatorio_3=array();
$link_osservatorio_3['it']='/perche-luiss-bs/osservatorio-sulla-gestione-del-rischio-in-sanita/';
$link_osservatorio_3['en']='/en/'; 
    
?>
<a name="centri"></a>
<section>
<div class="bg__gold container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-4 py-48 py-md-64">
                <h5 class="color__white"><?php echo $osservatori[ICL_LANGUAGE_CODE]; ?></h5>
                <a href="<?php echo $link_osservatorio_1[ICL_LANGUAGE_CODE]; ?>" class="link-scale"><h6 class="color__white py-16" style="border-bottom: 1px solid #fff;">Executive compensation</h6></a>
                <a href="<?php echo $link_osservatorio_2[ICL_LANGUAGE_CODE]; ?>" class="link-scale"><h6 class="color__white py-16" style="border-bottom: 1px solid #fff;">Ethos</h6></a>
                <a href="<?php echo $link_osservatorio_3[ICL_LANGUAGE_CODE]; ?>" class="link-scale"><h6 class="color__white py-16" style="border-bottom: 1px solid #fff;">Gestione del Rischio in Sanità</h6></a>
            </div>
            <div class="col-md-4 py-48 py-md-64">
                <h5 class="color__white"><?php echo $centri_r[ICL_LANGUAGE_CODE]; ?></h5>
                <a href="/en/why-luiss-bs/business-transformation-reboot/" class="link-scale"><h6 class="color__white py-16" style="border-bottom: 1px solid #fff;">Reboot</h6></a>
            </div>
            <div class="col-md-4 py-48 py-md-64">
                <h5 class="color__white"><?php echo $centri[ICL_LANGUAGE_CODE]; ?></h5>
                <a href="<?php echo $link_lab_9[ICL_LANGUAGE_CODE]; ?>" class="link-scale"><h6 class="color__white py-16" style="border-bottom: 1px solid #fff;">CERIIS</h6></a>
                <a href="<?php echo $link_lab_2[ICL_LANGUAGE_CODE]; ?>" class="link-scale"><h6 class="color__white py-16" style="border-bottom: 1px solid #fff;">ERShub</h6></a>
                <!--
                <a href="<?php echo $link_lab_7[ICL_LANGUAGE_CODE]; ?>" class="link-scale"><h6 class="color__white py-16" style="border-bottom: 1px solid #fff;">People Management</h6></a>
                -->
                <a href="<?php echo $link_lab_8[ICL_LANGUAGE_CODE]; ?>" class="link-scale"><h6 class="color__white py-16" style="border-bottom: 1px solid #fff;">Creative Industry</h6></a>
            </div>
        </div>
    </div>
</div>
</section>
<p><?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>

<?php get_footer(2017); ?>