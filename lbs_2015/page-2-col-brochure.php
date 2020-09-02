<?php
/*
Template Name: Brochure Tracking
*/
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header(2017); 
?>

<header id="content-title" class="wide-row">
    <div class="container">
        <div class="row">
            <div class="sommario col-md-8">
                <h1><?php echo the_title(); ?></h1>
            </div>
        </div>
        <!--END .row -->
    </div>
    <!--END .container -->
</header>
<div class="container">
    <main id="main" class="site-main" role="main">
        <div class="row">
            <div id="page-content" class="col-md-8 columns  space">
                <?php while ( have_posts() ) : the_post(); 
		$post_id = get_the_ID();?>
                <?php the_content(''); ?>
                <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?>
                <?php endwhile; // end of the loop. ?>
            </div>
            <aside id="sidebar" class="col-md-3 columns col-md-push-1 space col-xs-12">
                <div class="block">
                    <div class="content row"> <?php echo do_shortcode('[ssba]'); ?> </div>
                </div>
            </aside>
        </div>
    </main>
    <!--END .row -->
</div>
<!--END .container -->
<?php 

get_footer(2017);

?>