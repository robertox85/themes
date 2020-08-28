<?php
/*
Template Name: Docente
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
    <div class="row">
        <main id="main" class="site-main" role="main">
            <div id="page-content" class="col-md-8 columns  space">
                <?php while ( have_posts() ) : the_post(); 
		$post_id = get_the_ID();?>
                <?php the_content(''); ?>
                <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?>
                <?php endwhile; // end of the loop. ?>

                <?php

 // $custom_fields = get_post_custom($post_id);
 // $my_custom_field = $custom_fields['classificazione'];
 // foreach ( $my_custom_field as $key => $value ) {
   // echo $key . " => " . $value . "<br />";
 // }

?>

            </div>
            <aside id="sidebar" class="col-md-3 offset-md-1">
                <div class="block">
                    <div class="content row">
                        <div class="col-xs-12">
                        <h2><?php echo the_title(); ?></h2>
                        <p><?php echo get_post_meta($post->ID, 'classificazione', true); ?> <br /> <?php echo get_post_meta($post->ID, 'insegnamento', true); ?> <br /> <a href="mailto: . <?php echo get_post_meta($post->ID, 'email', true); ?>  . " /> <?php echo get_post_meta($post->ID, 'email', true); ?></p>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="content row"> <?php echo do_shortcode('[ssba]'); ?> </div>
                </div>
            </aside>
        </main>


    </div>
    <!--END .row -->
</div>
<!--END .container -->
<?php 

get_footer(2017);

?>