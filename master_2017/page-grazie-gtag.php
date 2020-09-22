<?php
/**
 * 
 * * Template Name: Thank You Altura
 *
 * @file page-grazie.php 
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
<?php 

// get the home page ID
$home_page_id = get_option('page_on_front');
$image = get_field('images', $home_page_id);

?>
<div class="container-fluid container-header py-24 py-md-48 px-0 px-lg-1"
    style="height:100%; background-image:url(<?php echo $image['url']; ?>); background-repeat:no-repeat; background-size: cover;background-position:center;">
    <div class="container px-16 py-lg-48">
        <header id="header-master" class="row px-md-0">
            <h1 class="col-md-12 small">
                <?php
                global $blog_id;
                $current_blog_details = get_blog_details(array('blog_id' => $blog_id));
                echo $current_blog_details->blogname;
            ?>
            </h1>
            <div class="clearfix"></div>
            <!--END .row -->
        </header>
    </div>
</div>
<!--END .container -->

<div class="container-fluid colonna_main">


    <div class="row">
        <nav class="col-md-3 pl-md-0">


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

        <main id="main" class="site-main site-master col-md-6" role="main">
            <div id="page-content" class="columns  space">
                
                <?php the_content('');?>

                <p>
                    <?php edit_post_link('<strong>Modifica Pagina</strong>', '');?>
                </p>
            </div>
        </main>

        <aside class="col-md-3 space sidebar-master">

            <?php get_sidebar();?>

        </aside>

    </div>


</div>
<!--END .container -->
<?php endwhile; // end of the loop. ?>
<!-- MODAL -->
<?php get_template_part('pco/template-parts/content', 'modal')?>


<?php //get_main_site_footer();?>
<?php get_footer() ?>

