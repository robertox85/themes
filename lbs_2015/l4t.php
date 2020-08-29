<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;
/**
 * Template Name: Leader for Talent
 * @file l4t.php
 */
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header( 2017 );
?>

<div class="item-centre box-cover-subhome" style="background-image:url(<?php echo site_url() ?>/wp-content/uploads/2018/02/Immagine_LforT.png)">
    <div class="container">
        <div class="row centre mt-128 pt-80">
            <div class="col-md-12">
                <h1><?php echo the_title(); ?></h1>
                <h2><span class="bg__gold">#L4T</span></h2>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 py-48 py-lg-64">
                <p><?php echo get_field('home_launch_box_l4t') ?> </p>
                <div class="vid mt-48">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Dsn1BsBP3uw?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg_1_info bg_3_perche py-64">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section-title pb-48">
                <h3 class="color__white">
                    Video
                </h3>
            </div>
            <?php  if(get_field('title_video_1')) { ?>
            <div class="col-md-6 py-24">
                <h3 class="color__white"><?php the_field('title_video_1'); ?></h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_1') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>

            <?php  if(get_field('title_video_2')) { ?>
            <div class="col-md-6 py-24">
                <h3 class="color__white"><?php the_field('title_video_2'); ?></h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_2') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>
            <?php if(get_field('title_video_3')) { ?>
            <div class="col-md-6 py-24">
                <h3 class="color__white"><?php the_field('title_video_3'); ?></h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_3') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>
            <?php if(get_field('title_video_4')) { ?>
            <div class="col-md-6 py-24">
                <h3 class="color__white"><?php the_field('title_video_4'); ?></h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_4') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>
            <?php  if(get_field('title_video_5')) { ?>
            <div class=" col-md-6 py-24">
                <h3 class="color__white"><?php the_field('title_video_5'); ?></h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_5') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>
            <?php  if(get_field('title_video_6')) { ?>
            <div class=" col-md-6 py-24">
                <h3 class="color__white"><?php the_field('title_video_6'); ?></h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_6') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>
            <?php  if(get_field('title_video_7')) { ?>
            <div class=" col-md-6 py-24">
                <h3 class="color__white"><?php the_field('title_video_7'); ?></h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_7') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>
            <?php  if(get_field('title_video_8')) { ?>
            <div class=" col-md-6 py-24">
                <h3 class="color__white"><?php the_field('title_video_8'); ?></h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_8') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section-title py-48">
                <h3 class="color__blue text-center">News</h3>
            </div>
        </div>
        <div class="row items">
            <div class="col-lg-8 col-lg-offset-2">
                <?php
			$news_cat = array();
			$news_cat[ 'it' ] = 106;
			$news_cat[ 'en' ] = 107;
			$args = array(
				'posts_per_page' => 12,
				'offset' => 0,
				'cat' => $news_cat[ ICL_LANGUAGE_CODE ],
				'post_status' => 'publish',
				'post_type' => 'post',
				'orderby' => 'post_date',
				'order' => 'DESC',
				'suppress_filters' => true );
			$news = get_posts( $args );

			if ( !( empty( $news ) ) ) {
			foreach ( $news as $news ) {
?>
                <a href="<?php echo get_permalink($news->ID) ?>" title="<?php  echo $news->post_title ?>">
                    <article itemscope itemtype="http://schema.org/Article" class="col-md-4 py-16">
                        <div class="col-md-12 nopadding">
                            <span itemscope itemtype='http://schema.org/ImageObject'>
                                <?php 
	$img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $news->post_title,
);
	echo get_the_post_thumbnail($news->ID, 'thumbnail',$img_attr);
	
	?>
                            </span>
                        </div>
                        <!--<div class="col-md-2">
					<h3 itemprop="name headline" class="home-news-headline"><a href="<?php //echo get_permalink($news->ID) ?>" title="<?php // echo $news->post_title ?>"><?php //echo $news->post_title ?></a></h3>
				</div>-->
                    </article>
                </a>
                <?php 
} // END foreach
} // END if ?>
            </div>
        </div>
        <?php edit_post_link('<p><strong>Modifica Pagina</strong></p>'); ?>
    </div>
</section>
<p><?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
<?php get_footer(2017); ?>