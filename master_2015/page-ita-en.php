<?php

/*
 * Template Name: ITA/EN
 */
$images = get_field('images');
 $p = get_field('paragrafo');
 $gallery = get_field('gallery');

get_header(ita); ?>

<section class="section sub-home" id="sub-home">
  <div class="container">
    <div class="row sub-home-list">
      <div class="sub-home-grid">
        <div class="col-md-4">
          <div class="sub-home-heading">
            <header>
              <h1>
                <?php bloginfo('name'); ?>
              </h1>
            </header>
            <p class="h1-sub"><?php echo html_entity_decode($p); ?></p>
          </div>
        </div>
        <div class="col-md-8 nopadding">
          <div class="sub-home-item-info"> <img src="<?php echo $images['url']; ?>" alt="<?php echo $images['alt']; ?>"  class="img-responsive"/> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="row">
    <main id="main" class="site-main" role="main">
      <div id="page-content" class="col-md-8 columns  space">
        <h2><?php echo the_title(); ?></h2>
        <hr />
        <?php while ( have_posts() ) : the_post(); 
		$post_id = get_the_ID();?>
        <?php the_content(''); ?>
        <p>
          <?php echo html_entity_decode($gallery); ?>
          <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?>
        </p>
        <?php endwhile; // end of the loop. ?>
      </div>
    </main>
    <aside id="sidebar" class="col-md-3 columns col-md-push-1 space col-xs-12" style="margin-top:20px;">
      <?php get_sidebar('Custom'); ?>
      <div  class="block">
        <div class="content row"> <?php echo do_shortcode('[ssba]'); ?> </div>
      </div>
    </aside>
  </div>
  <!--END .row --> 
</div>
<!--END .container -->
<?php 
get_footer('it');
?>
