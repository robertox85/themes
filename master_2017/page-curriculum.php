<?php
/**
 * Template Name: Curriculum
 * @file page-curriculum.php
 */
//get_main_site_header();
get_header();
while (have_posts()): the_post();?>

<style type="text/css">
.mobileShow {
    display: none;
}

/* Smartphone Portrait and Landscape */
@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
    .mobileShow {
        display: inline;
    }

    .all {
        width: 100%;
        margin-top: 5%;
        text-transform: uppercase
    }

}
</style>




<?php 



// get the home page ID
$home_page_id = get_option('page_on_front');
$image = get_field('images', $home_page_id);

?>
<div class="container-fluid container-header px-0 px-lg-1"
    style="min-height:480px; background-image:url(<?php echo $image['url']; ?>); background-repeat:no-repeat; background-size: cover;background-position:center;">
    <div class="container px-24 px-md-0 py-lg-48">
        <header id="header-master" class="row px-md-0">
            <h1 class="col-md-12 small">
                <?php
                global $blog_id;
                $current_blog_details = get_blog_details(array('blog_id' => $blog_id));
                echo $current_blog_details->blogname;
            ?>
            </h1>
            <p class="col-md-6">
                <?php echo get_field('paragrafo') ?>
            </p>
            <div class="clearfix"></div>
            <!--END .row -->
        </header>
    </div>
</div>

<?php 
// KEY FACTS
set_query_var('site_name', $current_blog_details->blogname);
get_template_part( 'pco/template-parts/content', 'keyfacts' );
 
?>

<!--END .container -->

<div class="container-fluid colonna_main">
    <div class="row">

        <nav class="col-lg-3 col-md-3">

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

                    <h2 class="page-title"><?php echo the_title(); ?></h2>




                <?php the_field('struttura_del_programma_description');?>
                

                    <?php if (get_field('titolo_extra_ind')) {?>


                    <h3><?php the_field('titolo_extra_ind');?></h3>


                    <?php }?>

                    <?php if (get_field('extra_ind')) {?>


                    <p><?php the_field('extra_ind');?></p>

                    <?php }?>

                    
                    <div class="panel-group accordion" id="accordion-curriculum" role="tablist" aria-multiselectable="true">


                        <?php if (get_field('titolo_induction_week')) {?>

                        <div class="panel-accordion">
                            <div class="panel-heading" role="tab" id="heading33">
                                <h6 class="panel-title">
                                    <a class="collapsed accordion-toggle" role="button" data-toggle="collapse"
                                        data-parent="#accordion-curriculum" href="#accordion-content-33"
                                        aria-expanded="false" aria-controls="accordion-content-33"
                                        class="accordion-toggle class-test">
                                        <?php the_field('titolo_induction_week');?>
                                    </a>
                                </h6>
                            </div>
                            <div id="accordion-content-33" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="heading33">
                                <div class="panel-body">
                                    <?php the_field('induction_week');?>
                                </div>
                            </div>
                        </div>

                        <?php }?>





                        <div class="panel-accordion">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h6 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion-curriculum"
                                        href="#accordion-content-1" aria-expanded="true"
                                        aria-controls="accordion-content-1" class="accordion-toggle">
                                        <?php the_field('title_core_courses');?>
                                    </a>
                                </h6>
                            </div>
                            <div id="accordion-content-1" class="panel-collapse collapse show" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body">

                                    <?php the_field('core_courses');?>


                                </div>
                            </div>
                        </div>


                        <div class="panel-accordion">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h6 class="panel-title">
                                    <a class="collapsed accordion-toggle" role="button" data-toggle="collapse"
                                        data-parent="#accordion-curriculum" href="#accordion-content-2"
                                        aria-expanded="false" aria-controls="accordion-content-2">
                                        <?php the_field('title_specialization_courses');?>
                                    </a>
                                </h6>
                            </div>
                            <div id="accordion-content-2" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <?php the_field('specialization_courses');?>
                                </div>
                            </div>
                        </div>


                        <?php if (get_field('title_laboratori')) {?>

                        <div class="panel-accordion">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h6 class="panel-title">
                                    <a class="collapsed accordion-toggle" role="button" data-toggle="collapse"
                                        data-parent="#accordion-curriculum" href="#accordion-content-3"
                                        aria-expanded="false" aria-controls="accordion-content-3"
                                        class="accordion-toggle class-test">
                                        <?php the_field('title_laboratori');?>
                                    </a>
                                </h6>
                            </div>
                            <div id="accordion-content-3" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <?php the_field('laboratori');?>
                                </div>
                            </div>
                        </div>

                        <?php }?>




                        <?php if (get_field('title_extra')) {?>

                        <div class="panel-accordion">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h6 class="panel-title">
                                    <a class="collapsed accordion-toggle" role="button" data-toggle="collapse"
                                        data-parent="#accordion-curriculum" href="#accordion-content-4"
                                        aria-expanded="false" aria-controls="accordion-content-4"
                                        class="accordion-toggle class-test">
                                        <?php the_field('title_extra');?>
                                    </a>
                                </h6>
                            </div>


                            <div id="accordion-content-4" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <?php the_field('extra');?>
                                </div>
                            </div>
                        </div>
                        <?php }?>


                        <?php if (get_field('titolo_extra_1')) {?>

                        <div class="panel-accordion">
                            <div class="panel-heading" role="tab" id="headingThree_1">
                                <h6 class="panel-title">
                                    <a class="collapsed accordion-toggle" role="button" data-toggle="collapse"
                                        data-parent="#accordion-curriculum" href="#accordion-content-5"
                                        aria-expanded="false" aria-controls="accordion-content-5"
                                        class="accordion-toggle class-test">
                                        <?php the_field('titolo_extra_1');?>
                                    </a>
                                </h6>
                            </div>


                            <?php }?>

                            <?php if (get_field('extra_1')) {?>
                            <div id="accordion-content-5" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree_1">
                                <div class="panel-body">
                                    <?php the_field('extra_1');?>
                                </div>
                            </div>
                        </div>
                        <?php }?>


                        <?php if (get_field('titolo_extra_2')) {?>

                        <div class="panel-accordion">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h6 class="panel-title">
                                    <a class="collapsed accordion-toggle" role="button" data-toggle="collapse"
                                        data-parent="#accordion-curriculum" href="#accordion-content-19"
                                        aria-expanded="false" aria-controls="accordion-content-19"
                                        class="accordion-toggle class-test">
                                        <?php the_field('titolo_extra_2');?>
                                    </a>
                                </h6>
                            </div>


                            <?php }?>


                            <?php if (get_field('extra_2')) {?>

                            <div id="accordion-content-19" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <?php the_field('extra_2');?>
                                </div>
                            </div>
                        </div>


                        <?php }?>











                        <?php if (get_field('titolo_extra_3')) {?>

                        <div class="panel-accordion">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h6 class="panel-title">
                                    <a class="collapsed accordion-toggle" role="button" data-toggle="collapse"
                                        data-parent="#accordion-curriculum" href="#accordion-content-6"
                                        aria-expanded="false" aria-controls="accordion-content-6"
                                        class="accordion-toggle class-test">
                                        <?php the_field('titolo_extra_3');?>
                                    </a>
                                </h6>
                            </div>


                            <?php }?>




                            <?php if (get_field('extra_3')) {?>



                            <div id="accordion-content-6" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <?php the_field('extra_3');?>
                                </div>
                            </div>
                        </div>



                        <?php }?>






                        <?php if (get_field('titolo_extra_4')) {?>

                        <div class="panel-accordion">
                            <div class="panel-heading" role="tab" id="headingsix">
                                <h6 class="panel-title">
                                    <a class="collapsed accordion-toggle" role="button" data-toggle="collapse"
                                        data-parent="#accordion-curriculum" href="#accordion-content-7"
                                        aria-expanded="false" aria-controls="accordion-content-7"
                                        class="accordion-toggle class-test">
                                        <?php the_field('titolo_extra_4');?>
                                    </a>
                                </h6>
                            </div>


                            <?php }?>

                            <?php if (get_field('extra_4')) {?>
                            <div id="accordion-content-7" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingsix">
                                <div class="panel-body">
                                    <?php the_field('extra_4');?>
                                </div>
                            </div>
                        </div>
                        <?php }?>





                        <?php if (get_field('titolo_extra_5')) {?>

                        <div class="panel-accordion">
                            <div class="panel-heading" role="tab" id="headingsix">
                                <h6 class="panel-title">
                                    <a class="collapsed accordion-toggle" role="button" data-toggle="collapse"
                                        data-parent="#accordion-curriculum" href="#accordion-content-8"
                                        aria-expanded="false" aria-controls="accordion-content-8"
                                        class="accordion-toggle class-test">
                                        <?php the_field('titolo_extra_5');?>
                                    </a>
                                </h6>
                            </div>



                            <?php }?>

                            <?php if (get_field('extra_5')) {?>
                            <div id="accordion-content-8" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingsix">
                                <div class="panel-body">
                                    <?php the_field('extra_5');?>
                                </div>
                            </div>
                        </div>
                        <?php }?>


                        <?php if (get_field('titolo_extra_6')) {?>

                        <div class="panel-accordion">
                            <div class="panel-heading" role="tab" id="headingsix">
                                <h6 class="panel-title">
                                    <a class="collapsed accordion-toggle" role="button" data-toggle="collapse"
                                        data-parent="#accordion-curriculum" href="#accordion-content-9"
                                        aria-expanded="false" aria-controls="accordion-content-9"
                                        class="accordion-toggle class-test">
                                        <?php the_field('titolo_extra_6');?>
                                    </a>
                                </h6>
                            </div>


                            <?php }?>

                            <?php if (get_field('extra_6')) {?>
                            <div id="accordion-content-9" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingsix">
                                <div class="panel-body">
                                    <?php the_field('extra_6');?>
                                </div>
                            </div>
                        </div>
                        <?php }?>




                        <?php if (get_field('titolo_extra_7')) {?>

                        <div class="panel-accordion">
                            <div class="panel-heading" role="tab" id="headingsix">
                                <h6 class="panel-title">
                                    <a class="collapsed accordion-toggle" role="button" data-toggle="collapse"
                                        data-parent="#accordion-curriculum" href="#accordion-content-10"
                                        aria-expanded="false" aria-controls="accordion-content-10"
                                        class="accordion-toggle class-test">
                                        <?php the_field('titolo_extra_7');?>
                                    </a>
                                </h6>
                            </div>


                            <?php }?>

                            <?php if (get_field('extra_7')) {?>
                            <div id="accordion-content-10" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingsix">
                                <div class="panel-body">
                                    <?php the_field('extra_7');?>
                                </div>
                            </div>
                        </div>
                        <?php }?>




                        <?php if (get_field('titolo_extra_8')) {?>

                        <div class="panel-accordion">
                            <div class="panel-heading" role="tab" id="headingsix">
                                <h6 class="panel-title">
                                    <a class="collapsed accordion-toggle" role="button" data-toggle="collapse"
                                        data-parent="#accordion-curriculum" href="#accordion-content-11"
                                        aria-expanded="false" aria-controls="accordion-content-11"
                                        class="accordion-toggle class-test">
                                        <?php the_field('titolo_extra_8');?>
                                    </a>
                                </h6>
                            </div>


                            <?php }?>

                            <?php if (get_field('extra_8')) {?>
                            <div id="accordion-content-11" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingsix">
                                <div class="panel-body">
                                    <?php the_field('extra_8');?>
                                </div>
                            </div>
                        </div>
                        <?php }?>



                        <?php if (get_field('titolo_extra_9')) {?>

                        <div class="panel-accordion">
                            <div class="panel-heading" role="tab" id="headingsix">
                                <h6 class="panel-title">
                                    <a class="collapsed accordion-toggle" role="button" data-toggle="collapse"
                                        data-parent="#accordion-curriculum" href="#accordion-content-12"
                                        aria-expanded="false" aria-controls="accordion-content-12"
                                        class="accordion-toggle class-test">
                                        <?php the_field('titolo_extra_9');?>
                                    </a>
                                </h6>
                            </div>


                            <?php }?>

                            <?php if (get_field('extra_9')) {?>
                            <div id="accordion-content-12" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingsix">
                                <div class="panel-body">
                                    <?php the_field('extra_9');?>
                                </div>
                            </div>
                        </div>
                        <?php }?>



                        <?php if (get_field('titolo_extra_10')) {?>

                        <div class="panel-accordion">
                            <div class="panel-heading" role="tab" id="headingsix">
                                <h6 class="panel-title">
                                    <a class="collapsed accordion-toggle" role="button" data-toggle="collapse"
                                        data-parent="#accordion-curriculum" href="#accordion-content-13"
                                        aria-expanded="false" aria-controls="accordion-content-13"
                                        class="accordion-toggle class-test">
                                        <?php the_field('titolo_extra_10');?>
                                    </a>
                                </h6>
                            </div>


                            <?php }?>

                            <?php if (get_field('extra_10')) {?>
                            <div id="accordion-content-13" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingsix">
                                <div class="panel-body">
                                    <?php the_field('extra_10');?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>


                    <p><?php edit_post_link('<strong>Modifica Pagina</strong>', '');?></p>

    <!--END .row -->

</div>
<!--END .container -->
</main>
        <aside class="col-lg-3 col-md-3 space sidebar-master">

            <?php get_sidebar();?>

        </aside>
    </div>
</div>
<?php endwhile; // end of the loop. ?>
<?php
//get_main_site_footer();
?>
<?php get_footer() ?>

<!-- MODAL -->
<?php get_template_part('pco/template-parts/content', 'modal'); ?>