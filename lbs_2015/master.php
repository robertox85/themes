	<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Template Name: Master 2017
 * @file master.php
 */
$shd = get_field('sub_home_description');
$shp = get_field('sub_home_paragraf');
get_header(2017);
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

<!-- Includo le variabili comuni -->

<?php include(dirname(__DIR__).'/lbs_2015/pco/variables/vars.php'); ?>

<!-- Inizio Template -->

	<div class="container-fluid <?php if (has_post_thumbnail( $post->ID ) ): ?>
                   header-pic" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');
                   <?php else : ?>
                   header-nopic
                   <?php endif; ?>
">
	    <div class="container">
	        <div class="row">
	            <h1><?php the_title();?></h1>
	        </div>
	        <div class="row">
	            <div class="col-md-6">
	                <p>Come here to be challenged. Leave ready to take on the most important challenges of our time. At LUISS Business School, we create wise leaders who aspire to MAKE the difference in the world of business and beyond. Join us.</p>
	                <a href="https://www.youtube.com/watch?v=7VuI-HXka6s&feature=emb_title">Watch the video</a>
	            </div>
	            <div class="col-md-6">
	            </div>
	        </div>
	    </div>
	</div>

<?php edit_post_link('<p>Modifica Pagina</p>', ''); ?>

	<?php get_footer(2017);?>