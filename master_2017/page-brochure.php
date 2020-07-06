<?php
    /**
     * Template Name: Brochure No image
     * @file page-brochure.php
     */
get_main_site_header();
while ( have_posts() ) : the_post();  ?>
 
 
  <style type="text/css">
.header-master-brochure {
	background: #fff;
    padding: 50px 0 30px 50px;
    color: #2a2a2a; 
 }
	  
	  
	.fsSubmit input.fsSubmitButton {
    padding: 10px;
    margin: 0 auto;
    clear: both;
    width: auto;
}  
	  
	  .fsSubmitButton {
    cursor: pointer;
    width: auto;
}
	  
.fsBody .fsEmbed {
    padding: 0px;;
	margin: 0px;
}
	  
	@media (max-width: 767px) {
.hidden-xs {
	display: none !important;
}
}  
	  
	  @media (min-width: 1200px) {
.hidden-lg {
	display: none !important;
}
}
 </style>
 
 
 
  <div class="container">
	<header id="header-master-brochure" class="row">


    <div class="row">
      <div class="col-md-12">
         <h1 style="color: #2a2a2a; text-transform: uppercase; padding: 0.5rem; margin:1.5rem 0"><?php bloginfo('name'); ?></h1>
  
          <p class="hidden-xs"><?php echo get_field('paragrafo') ?></p>
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
<div class="container hidden-xs">
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
 
        <?php the_content(''); ?>
        
       
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
