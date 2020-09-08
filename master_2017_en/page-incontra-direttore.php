<?php
    /**
     * Template Name: Incontra il Direttore
     * @file page-incontra-direttore.php
     */
get_main_site_header();
while ( have_posts() ) : the_post();  ?>
  <div class="container">
	<header id="header-master" class="row">

    <div class="row">
      <div class="col-md-4">
         <span class="master-name"><?php bloginfo('name'); ?></span>
         <h1><?php the_title () ?></h1>
          <p><?php echo get_field('paragrafo') ?></p>
      </div>
       <div class="col-md-8">
   <?php 
   $image = get_field('images');
   
if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />

<?php endif; ?> 
      </div>
    </div>
    <div class="clearfix"></div>
    <!--END .row --> 

 <div class="menu-master-toggle-container">
<span class="navbar-toggle"  data-toggle="collapse" data-target="#menu-master-container" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</span>
</div>
</header>
  </div>
  <!--END .container --> 
<div class="container">
<div class="row">
<nav class="navbar navbar-default navbar-master">

<?php wp_nav_menu(array(
'menu' => 'Master',
'container_id'    => 'menu-master-container',
'container_class'    => 'menu-master-container navbar-collapse collapse',
'container' => 'div',
'menu_class' => 'menu-master nav navbar-nav',
));           ?>
</nav>
</div>
</div>

<div class="container">
  <div class="row">
    <main id="main" class="site-main site-master col-lg-9 col-md-8" role="main">
      <div id="page-content" class="columns  space">
      
      <h2><?php echo the_title(); ?></h2>
 
       
        
       
      </div>
     <p><?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
</main>
    <aside  class="col-lg-3 col-md-4 col-sm-12 space sidebar-master">
     
        <?php get_sidebar(); ?>
        
     
    
    </aside>
  </div>
  <!--END .row --> 
</div>
<!--END .container --> 
<?php endwhile; // end of the loop. ?>
<?php 
get_main_site_footer();
?>
