<?php
    /**
     * Template Name: Corporate Partner
     * @file page-corporate-partner.php
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
      <div class="col-md-10">
      <h2><?php echo the_title(); ?></h2>
  <?php the_field('partners'); ?>
       
        <h2>Corporate Advisory Board</h2>
         <?php the_field('corporate_advisory_board'); ?>
      </div>
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
<?php $slides_tot = 3;
$slides = array();
 for ($s = 1; $s <= $slides_tot; $s++) {
if( get_field('slide_'.$s.'_immagine') ){	
$image = get_field('slide_'.$s.'_immagine'); 
$slides[$s]['image'] = $image['url'];
$slides[$s]['image_alt'] = $image['alt'];
$slides[$s]['title'] = get_field('slide_'.$s.'_titolo');
$slides[$s]['testo'] = get_field('slide_'.$s.'_testo');
  }

 }?>

<?php if (!empty($slides)) {?>
<div class="container-fluid">
<div class="row">
<div id="corporate-partner-carousel" class="carousel slide carousel-master" data-ride="carousel">
    <div class="col-md-offset-8">
  <ol class="carousel-indicators">
<?php 
$i =0; 
$slide_class = 'active';
foreach ($slides as $key => $value) { ?>
    <li data-target="#corporate-partner-carousel" data-slide-to="<?php echo $i ?>" class="<?php echo $slide_class  ?>"></li>
    <?php  $i++;
	$slide_class ='';
	
	 }?>
  </ol>  
  </div>
  <div class="carousel-inner" role="listbox">
  <?php 
  $slide_class = 'active';
  foreach ($slides as $key => $value) { ?>

    <div class="item <?php echo $slide_class  ?>">
    <div class="col-md-8">
      <img class="img-responsive" src="<?php echo $value['image'] ?>" alt="<?php echo $value['image_alt'] ?>">
    </div>
    <div class="col-md-4 slide-text">
   <h3 class="text-center"><?php echo $value['title'] ?></h3>
   <?php echo $value['testo'] ?>
    </div>  
    </div>
   <?php  	$slide_class ='';  } ?>
  </div>
    
     
 
</div>
</div>  <!--END .row --> 
</div>
<!--END .container --> 
<?php   }?>
<?php endwhile; // end of the loop. ?>
<?php 
get_main_site_footer();
?>
