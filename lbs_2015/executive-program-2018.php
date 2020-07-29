<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )
  exit;

/**
 * Template Name: Executive Program 2018
 * @file executive-program-2018.php
 */
get_header( 2017 );?>

<?php 
$sub_home['it'] = 'L’Executive Education della Luiss Business School mira a supportare i partecipanti a massimizzare il loro business impact, sostenendo la loro crescita personale e professionale, attraverso un percorso di apprendimento iper-personalizzato e una metodologia didattica innovativa.';
$sub_home['en'] = 'Foster your career path, improve your leadership skills and your functional and technical competences. the executive programmes are aimed at managers, entrepreneurs and professionals willing to develop not-conventional skills and to learn through problem-solving and action-learning based methods, labs and the networking.';
$sub_home_2a['it'] = 'L’offerta formativa è progettata e sviluppata in collaborazione con i Corporate Partner Luiss Business School,  fra i quali si distinguono le maggiori istituzioni, aziende, organizzazioni e imprese multinazionali in Italia.
I programmi sono disegnati per accelerare la carriera, consolidare i punti di forza e agire sulle aree di miglioramento, ma si indirizzando anche a chi desidera reinventarsi  (ovvero cambiare ruolo, settore o funzione sviluppando';
$sub_home_2a['en'] = '';
$sub_home_2b['it'] = 'le competenze  e il network necessario) o riprendere in mano il proprio percorso professionale ottenendo le competenze e gli strumenti utili per ripartire con la propria carriera. I fattori chiave che rendono unica e all’avanguardia l’esperienza Executive Luiss Business School sono l’uso di una metodologia didattica esperienziale, l’attenzione al networking e i servizi EduCare che completano il percorso formativo scelto.';
$sub_home_2b['en'] = '';
?>

<!-- Inizio Template -->

<div class="container-fluid px-0 box-cover-off d-flex flex-column align-items-start justify-content-center <?php if (has_post_thumbnail( $post->ID ) ): ?>
                   header-pic" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');
                   <?php else : ?>
                   header-nopic
                   <?php endif; ?>
">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="color__white"><?php the_title();?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 intro">
                <p class="color__white"><?php echo $sub_home[ICL_LANGUAGE_CODE] ?></p>
            </div>
            <div class="col-md-6 intro">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <p><?php echo $sub_home_2a[ICL_LANGUAGE_CODE] ?></p>
        </div>
        <div class="col-xs-12 col-md-6">
            <p><?php echo $sub_home_2b[ICL_LANGUAGE_CODE] ?></p>
        </div>
    </div>
    <?php get_template_part( 'pco/template-parts/section-executive-by-tematica', get_post_format() ); ?>
</div>

<?php get_template_part( 'pco/template-parts/section-flex-executive-jumbotron', get_post_format() ); ?>

<?php get_template_part( 'pco/template-parts/section-educare', get_post_format() ); ?>

<?php get_template_part( 'pco/template-parts/section-experiental-learning', get_post_format() ); ?>

<?php get_template_part( 'pco/template-parts/section-networking', get_post_format() ); ?>

<?php edit_post_link('<p>Modifica Pagina</p>', ''); ?>

<?php
get_footer( 2017 );
?>