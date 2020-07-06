<?php
/*
Template Name: 3 colonne
*/
get_header(2017); 
?>

<header id="content-title" class="wide-row">
  <div class="container">
    <div class="row">
      <h1 class="col-md-7 col-md-push-2"><?php echo the_title(); ?></h1>
    </div>
    <!--END .row --> 
  </div>
  <!--END .container --> 
</header>
<div class="container">
  <div class="row">
    <main id="main" class="site-main" role="main">
      <div id="page-content" class="col-lg-7 col-lg-push-2 col-sm-12 space">
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(''); ?>
        <?php 
		
		
		
		endwhile; // end of the loop. ?>
        <p>
          <?php if (is_page("attivita-culturali-luiss")) { ?>
          <?php get_template_part('attivitarss'); ?>
          <?php } ?>
            <?php if (is_page("hr-club-meeting")) { ?>
          <?php get_template_part('hr'); ?>
          <?php } ?>
          
            <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?>
        </p>
      </div>
    </main>
    <div id="menu-local" class="col-lg-2 col-sm-12 col-lg-pull-7">
    <span class="menu-local-toggle" data-menu="menu-local-menu"></span>
      <?php $top_level_parent = get_top_level_parent(); 

if (!(empty($top_level_parent))) { ?>
      <h2><a href="<?php echo get_permalink($top_level_parent->ID); ?>"><?php echo $top_level_parent->post_title ?></a></h2>
      <div id="menu-local-menu">
      <?php get_sidebar_menu($top_level_parent->post_title)?>
      </div>
      <?php } // END if (!(empty($top_level_parent))) {?>
    </div>
    <aside id="sidebar" class="col-lg-3 col-sm-12 space">
      <div  class="block">
        <div class="content row"> <?php echo do_shortcode('[ssba]'); ?> </div>
        </div>
        
        
        
        <?php $sidebar_file = array();
		// sidebar Perchè Luiss Business School
		$sidebar_file['it']['587'] = 'perche'; 
		$sidebar_file['en']['16'] = 'perche'; 
		// sidebar Custom Programs
		$sidebar_file['it']['18'] = 'perche'; 
		$sidebar_file['en']['593'] = 'perche'; 
		
		// sidebar Custom Programs
		$sidebar_file['it']['22'] = 'agevolazioni'; 
		$sidebar_file['en']['1248'] = 'agevolazioni'; 
		
		
		get_sidebar($sidebar_file[ICL_LANGUAGE_CODE][$top_level_parent->ID]);
		?>
        
        
      
    </aside>
  </div>
  <!--END .row --> 
</div>
<!--END .container -->
<?php get_footer(2017); ?>
