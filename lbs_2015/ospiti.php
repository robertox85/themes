<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;
/**
 * Template Name: Ospiti LCBC
 * @file ospiti.php
 */
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header( 2017 );
?>

<div class="item-centre box-cover-subhome" style="background-image:url(<?php echo site_url() ?>/wp-content/uploads/2017/09/proposta_Ospiti_2.jpg)">
    <div class="container">
        <div class="row centre mt-128 pt-80">
            <div class="col-md-12">
                <h1><?php echo the_title(); ?></h1>
                <h2><span class="bg__gold">Luiss Creative Business Center</span></h2>
            </div>
        </div>
    </div>
</div>

<section class="py-64" style="background-color: #F7F9FA">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section-title pb-48">
                <h3 class="color__blue">
                    Video
                </h3>
            </div>
            <?php  if(get_field('title_video_1')) { ?>
            <div class="col-md-6 py-24">
                <h3 class="color__gold"><?php the_field('title_video_1'); ?></h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_1') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>

            <?php  if(get_field('title_video_2')) { ?>
            <div class="col-md-6 py-24">
                <h3 class="color__gold"><?php the_field('title_video_2'); ?></h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_2') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>
            <?php if(get_field('title_video_3')) { ?>
            <div class="col-md-6 py-24">
                <h3 class="color__gold"><?php the_field('title_video_3'); ?></h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_3') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>
            <?php if(get_field('title_video_4')) { ?>
            <div class="col-md-6 py-24">
                <h3 class="color__gold"><?php the_field('title_video_4'); ?></h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_4') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>
            <?php  if(get_field('title_video_5')) { ?>
            <div class=" col-md-6 py-24">
                <h3 class="color__gold"><?php the_field('title_video_5'); ?></h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_5') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>
            <?php  if(get_field('title_video_6')) { ?>
            <div class=" col-md-6 py-24">
                <h3 class="color__gold"><?php the_field('title_video_6'); ?></h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_6') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>
            <?php  if(get_field('title_video_7')) { ?>
            <div class=" col-md-6 py-24">
                <h3 class="color__gold"><?php the_field('title_video_7'); ?></h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_7') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>
            <?php  if(get_field('title_video_8')) { ?>
            <div class=" col-md-6 py-24">
                <h3 class="color__gold"><?php the_field('title_video_8'); ?></h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_8') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<p><?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
<?php get_footer(2017); ?>


