<?php
/**
 * Template Name: Pagina generica (All Traking)
 * @file page-default.php
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
	<div class="container-fluid container-header px-0 py-40" style="min-height:480px; background-image:url(<?php echo $image['url']; ?>); background-repeat:no-repeat; background-size: cover;background-position:center;">
		<div class="container">
			<header id="header-master" class="row px-0">
				<div class="col-12">
						<h1 class="small p-0">
							<?php the_title()?>
						</h1>
						<p>
							<?php echo get_field('paragrafo') ?>
						</p>
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
				<?php dynamic_sidebar('Area-Header');?>
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

						<?php if (function_exists('dynamic_sidebar')): ?>
							<?php dynamic_sidebar('Custom')?>
						<?php endif;?>
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
    'container_id' => '',
    'container_class' => 'bg__white',
    'container' => 'div',
    'menu_class' => 'list-unstyled sidebar_navigation ',
));

?>
		</nav>

		<main id="main" class="site-main site-master col-lg-6 col-md-6" role="main">
			<div id="page-content" class="columns  space">

				<?php
if (is_front_page()) {?>
				<?php } else {?>
				<h2>
					<?php echo the_title(); ?>
				</h2>
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
		<div class="col-md-12 col-sm-12">
			<?php the_field('javascript');?>
		</div>

		<div class="clearfix"></div>



	</div>
	<!--END .row -->
</div>
<!--END .container -->
<?php endwhile; // end of the loop. ?>



<!-- Modal -->
<?php

$pages = array('download-brochure', 'brochure', 'download-brochure-master-macofin', 'scarica-la-brochure', 'downlaod-brochure', 'download-brochre', 'compila-il-form', 'richiedi-informazioni', 'download-brchure', 'download-drochure');
foreach ($pages as $page) {
    $post = get_page_by_path($page);
    if ($post) {
        break;
    }
}

?>
<?php if ($post): ?>
<div class="modal fade" id="downloadBrochure" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5>Download Brochure</h5>
				<button class="button" type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="fal fa-times" aria-hidden="true"></i>
				</button>
			</div>
			<div class="modal-body">
				<?php
echo $post->post_content;
?>
			</div>
			<div class="modal-footer">
				<button type="button" class="button button--negative button--primary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<?php endif;?>

<?php get_main_site_footer();?>



<script>
	jQuery(document).ready(function($) {

		document.getElementById("field34350286-first").setAttribute("placeholder", "Nome");
		document.getElementById("field34350286-last").setAttribute("placeholder", "Cognome");
		document.getElementById("field34350287").setAttribute("placeholder", "Inserisci il tuo numero di telefono");
		document.getElementById("field34350288").setAttribute("placeholder", "Inserisci il tuo indirizzo email");

		$('.colonna_key_facts-container .featured-links').on('click', function(e) {
			e.preventDefault();
			$('#downloadBrochure').show();
			$('#downloadBrochure').addClass('in');



		});
		$('.modal-header .button').on('click', function(e) {
			e.preventDefault();
			$('#downloadBrochure').hide();
			$('#downloadBrochure').removeClass('in');
		});

	});
</script>
