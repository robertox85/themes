<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Template Name: Corso
 * @file corso.php
 */
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header(2017); 
?>

<style>
    @media (min-width: 1200px) {
.container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: 1440px;
}
    }
    
    h1.entry-title {
        font-size: 80%;
    }
</style>

<header class="bg__white">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-lg-8">
        <h1 class="entry-title"><?php echo the_title(); ?></h1>
      </div>
    </div>
  </div>
</header>

<div class="container">
  <div class="row">
  <main id="main" class="site-main site-master col-lg-9 col-md-8" role="main">
			  <div id="page-content" class="columns  space">
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(''); ?>
         <p> <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
        <?php endwhile; // end of the loop. ?>
      </div>
    </main>
    <aside class="col-lg-3 col-md-4 col-sm-12 space sidebar-master">
		
		  <h2>Key Facts</h2>
		



					<?php   
  
	  $date = DateTime::createFromFormat('Ymd', get_field('data_inizio'));	
		
	 if(get_field('testo_inizio')) { echo '<div class="block"><h3>' . get_field('testo_inizio') . '</h3>';}
			
	if (get_field('data_inizio')) {  echo '<div class="textwidget"><p>' . $date->format('d/m/Y') . '</p></div> </div>';}
		
		
		
		
		  $date_m = DateTime::createFromFormat('Ymd', get_field('data_fine'));	
		
		 if(get_field('data_inizio_testuale')) { echo '<div class="block"><h3>' . get_field('data_inizio_testuale') . '</h3>';}
			
	if (get_field('data_fine')) {  echo '<div class="textwidget"><p>' . $date_m->format('d/m/Y') . '</p></div> </div>';}
		
		
		
		  $date_v = DateTime::createFromFormat('Ymd', get_field('data_veneto'));	
		
		 if(get_field('veneto')) { echo '<div class="block"><h3>' . get_field('veneto') . '</h3>';}
			
	if (get_field('data_veneto')) {  echo '<div class="textwidget"><p>' . $date_v->format('d/m/Y') . '</p></div> </div>';}
		
			
	//if(get_field('data_inizio_testuale')) { echo'' . get_field('data_inizio_testuale') .'';}
	
			
			
				if(get_field('titolo_costo'))
	{
echo '<div class="block"><h3>'. get_field('titolo_costo').'</h3><div class="textwidget"><p>'. get_field('costo').'</p></div> </div>';
    }
			
			 if(get_field('titolo_durata')) { echo '<div class="block"><h3>'. get_field('titolo_durata').'</h3>' ; }
             if(get_field('durata')) { echo '<div class="textwidget"><p>'. get_field('durata') .'</p></div> </div>'; }
			
			
						if(get_field('codice_corso'))
	{
echo '<div class="block"><h3>'. get_field('testo_codice_corso').'</h3><div class="textwidget"><p>'. get_field('codice_corso').'</p></div> </div>';
    }
		 ?>

			
			<?php
				if ( get_field( 'key_facts' ) ) {
					echo '<div class="block"><h3>' . get_field( 'key_facts' ) . '</h3><div class="textwidget"><p>' . get_field( 'campo_key_facts' ) . '</p></div> </div>';
				}

				?>

			<div class="block">
				<div class="textwidget">
					<?php
                       if ( get_field( 'brochure' ) ) {
						echo '<span>' . get_field( 'brochure' ) . '</span>';
						   
					}
						   
					if ( get_field( 'modulo_iscrizione' ) ) {
						echo '<span>' . get_field( 'modulo_iscrizione' ) . '</span>';
					}
					
					
					if ( get_field( 'modulo_recesso' ) ) {
						echo '<span>' . get_field( 'modulo_recesso' ) . '</span>';
					}

					?>
				</div>
			</div>

			<div class="clearfix sidebar-2">


				<?php
				if ( get_field( 'titolo_custom' ) ) {
					echo '<div class="block-dark"><h3>' . get_field( 'titolo_custom' ) . '</h3><div class="textwidget"><p>' . get_field( 'campo_custom_contenuto' ) . '</p></div> </div>';
				}
				?>

				<?php
				if ( get_field( 'titolo_campo_custom_2' ) ) {
					echo '<div class="block-dark"><h3>' . get_field( 'titolo_campo_custom_2' ) . '</h3><div class="textwidget"><p>' . get_field( 'campo_custom_2' ) . '</p></div> </div>';
				}
				?>

			</div>

			<?php   
     if (get_field('contatti') || get_field('contatti_campo'));
	 echo '<div class="block-dark">';
	 echo '<h3>'.get_field('contatti').'</h3><div class="textwidget">';
	 echo get_field('contatti_campo');
     echo '</div></div>';
 ?>
			<div class="ssba"><div style="text-align:left">
					<?php echo do_shortcode('[ssba]'); ?> </div>
			</div>
		</aside>
  </div>
  <!--END .row --> 
</div>
<!--END .container -->
<!--<script src="<?php // echo get_bloginfo('template_url') ?>/js/bootstrap.min.js"></script>-->
<?php 

get_footer(2017);

?>
