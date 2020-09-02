<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
/*
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
            <div id="page-content" class="col-md-8">
                <?php while ( have_posts() ) : the_post(); 
		$post_id = get_the_ID();?>
                <?php the_content(''); ?>
                <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?>
                <?php endwhile; // end of the loop. ?>
            </div>
            <aside id="sidebar" class="col-md-3 offset-md-1">
                <div class="block">
                    <div class="content row">
                        <div class="col-12">

                            <?php   $titolo_accordo = array();
		$titolo_accordo['it'] = 'Tutti le convenzioni';
		$titolo_accordo['en'] = 'All Conventions';
?>
                            <h2 class="pb-24"><?php echo $titolo_accordo[ICL_LANGUAGE_CODE]; ?></h2>
                            <?php $my_query = new WP_Query('posts_per_page=-1&&post_type=accordo');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate = $post->ID; ?>
                            <a href="<?php the_permalink(); ?>">
                                <p class="big py-8 color__white"><strong><?php the_title(); ?></strong></p>
                            </a>
                            <?php the_excerpt(); ?>
                            <?php endwhile;  wp_reset_query(); ?>
                        </div>
                    </div>
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