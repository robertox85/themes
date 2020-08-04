<?php
/**
 * The template for displaying pages
 */
get_header();
while (have_posts()): the_post();
    ?>
<style type="text/css">
.mobileShow {
    display: none;
}

/* Smartphone Portrait and Landscape */

@media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
    .mobileShow {
        display: inline;
    }

    .all {
        width: 100%;
        padding-top: 2%;
        text-transform: uppercase
    }
}
</style>
<?php $image = get_field('images');?>
<div class="container-fluid container-header px-0 py-40"
    style="min-height:480px; background-image:url(<?php echo $image['url']; ?>); background-repeat:no-repeat; background-size: cover;background-position:center;">
    <div class="container">
        <header id="header-master" class="row px-0">
            <div class="col-12">
                <h1 class="small p-0">
                    <?php
								global $blog_id;
								$current_blog_details = get_blog_details(array('blog_id' => $blog_id));
								echo $current_blog_details->blogname;
								?>
                </h1>
                <p>
                    <?php echo get_field('paragrafo') ?>
                </p>
            </div>
            <div class="clearfix"></div>
            <!--END .row -->
        </header>
    </div>
</div>
<!--END .container -->

<?php 
// KEY FACTS
set_query_var('site_name', $current_blog_details->blogname);
get_template_part( 'pco/template-parts/content', 'keyfacts' );
 
?>

<div class="container-fluid colonna_main">


    <div class="row">
        <nav class="col-lg-3 col-md-3 pl-0">

            <?php

                wp_nav_menu(array(
                    'menu' => 'Master',
                    'container_class' => 'd-block d-lg-none text-center pt-32',
                    'walker'         => new Walker_Nav_Menu_Dropdown(),
                    'items_wrap'     => '<select class="select w-100"><option disabled selected>Menu</option>%3$s</select>',
                ));

                wp_nav_menu(array(
                    'menu' => 'Master',
                    'container_id' => '',
                    'container_class' => 'bg__white d-none d-lg-block',
                    'container' => 'div',
                    'menu_class' => 'list-unstyled sidebar_navigation ',
                ));

			?>
        </nav>

        <main id="main" class="site-main site-master col-lg-6 col-md-6" role="main">
            <div id="page-content" class="columns  space">

                <?php
				if (!is_front_page()) {?>
                    <h2 class="page-title"><?php echo the_title(); ?></h2>
                <?php }?>


                <?php the_content('');?>

            </div>
            <p>
                <?php edit_post_link('<strong>Modifica Pagina</strong>', '');?>
            </p>
        </main>

        <aside class="col-lg-3 col-md-3 col-sm-12 space sidebar-master">

            <?php get_sidebar();?>

        </aside>

        <div class="col-md-1 col-sm-1 nopadding"></div>

    </div>



    <div class="clearfix"></div>
</div>
<!--END .container -->
<?php endwhile; // end of the loop. ?>

<?php //get_main_site_footer();?>

<?php get_footer() ?>

<!-- MODAL -->
<?php get_template_part('pco/template-parts/content', 'modal')?>