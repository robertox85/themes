<?php
    /**
     * Template Name: Pagina generica (All Traking)
     * @file page-default.php
     */
get_header();
while ( have_posts() ) : the_post();
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
<div class="container-fluid container-header px-0">
	<div class="container">
	<header id="header-master" class="row px-0">

		<div class="row">
			<div class="col-md-4">
				<span class="master-name">
					<?php bloginfo('name'); ?>
				</span>
				<h1>
					<?php the_title () ?>
				</h1>
				<p>
					<?php echo get_field('paragrafo') ?>
				</p>
			</div>
			<div class="col-md-8">
				<?php 
   					$image = get_field('images');
   
					if( !empty($image) ): ?>

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive"/>

				<?php endif; ?>
			</div>


		</div>
		<div class="clearfix"></div>
		<!--END .row -->

		<div class="menu-master-toggle-container">
			<span class="navbar-toggle" data-toggle="collapse" data-target="#menu-master-container" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
		
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</span>
		</div>
		<?php dynamic_sidebar( 'Area-Header' ); ?>
	</header>	
	</div>
	
</div>
<!--END .container --> 


<div class="container-fluid colonna_key_facts">
	<div class="container">
		<div class="row">
			<div class="col-md-12 py-32">
				<h5>Key Facts</h5>
				<div class="position-absolute share_links">
						<?php echo do_shortcode('[ssba]'); ?>   
					</div>
				<div class="colonna_key_facts-container">
					
					<?php if ( function_exists('dynamic_sidebar')  ) : ?>
						<?php  dynamic_sidebar('Custom') ?>
					<?php endif; ?>
				</div>	
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">

	
	

		<nav class="col-lg-3 col-md-3 pl-0">

				<?php 
				
				wp_nav_menu(array(
					'menu' => 'Master',
					'container_id'    => '',
					'container_class'    => 'bg__white',
					'container' => 'div',
					'menu_class' => 'list-unstyled sidebar_navigation ',
				));           
				
				?>
		</nav>
		
		<main id="main" class="site-main site-master col-lg-6 col-md-6" role="main">
			<div id="page-content" class="columns  space">

				<?php    
				if ( is_front_page() ) { ?>
				<?php  } else { ?>
				<h2>
					<?php echo the_title(); ?>
				</h2>
				<?php  } ?>


				<?php the_content(''); ?>

			</div>
			<p>
				<?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?>
			</p>
		</main>
		<aside class="col-lg-3 col-md-3 col-sm-12 space sidebar-master">

			<?php get_sidebar(); ?>

		</aside>

<div class="col-md-1 col-sm-1 nopadding"></div>
<div class="col-md-12 col-sm-12">
	<?php the_field('javascript'); ?>
</div>

		<div class="clearfix"></div>



	</div>
	<!--END .row -->
</div>
<!--END .container --> 
<?php endwhile; // end of the loop. ?>
<?php get_main_site_footer(); ?>