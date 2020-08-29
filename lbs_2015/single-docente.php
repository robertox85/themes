<?php
/**
 * Sample template for displaying single docente posts.
 * Save this file as as single-docente.php in your current theme.
 *
 * This sample code was based off of the Starkers Baseline theme: http://starkerstheme.com/
 */
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header(2017); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	

	<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		
		   <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?>
		
		<?php the_post_thumbnail(); ?>
		<?php the_excerpt(); ?>

		<h2>Custom Fields</h2>	
		
		<strong>Cognome</strong> <?php print_custom_field('cognome'); ?><br />
		<strong>Nome</strong> <?php print_custom_field('nome'); ?><br />
		<strong>Insegnamento</strong> <?php print_custom_field('insegnamento'); ?><br />
		<strong>Classificazione</strong> <?php print_custom_field('classificazione'); ?><br />
		<strong>Email:</strong> <?php print_custom_field('email:email'); ?><br />




<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
<p><?php edit_post_link('<strong>Modifica eDocent</strong>', ''); ?></p>
<?php get_footer(2017); ?>