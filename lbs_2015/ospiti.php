<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;
/**
 * Template Name: Ospiti LCBC
 * @file ospiti.php
 */
get_header( 2017 );
?>
<div id="HomeCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="item active"><img src="/wp-content/uploads/2017/09/proposta_Ospiti_2.jpg" alt="<?php the_title()?>" height="600">
			<div class="container">
				<div class="carousel-caption">
					<h1>
						<?php the_title()?>
					</h1>
					<p><span class="slider_paragraf"><strong>LUISS CREATIVE BUSINESS CENTER</strong></span>
				</div>
			</div>
		</div>
	</div>\
</div>
<section class="cards courses-cards">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2"> 
			 <?php  if(get_field('title_video_1')) { ?>
				<div class=" col-md-6 embed-container space">
				<p><strong><?php the_field('title_video_1'); ?></strong></p>
					<iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_1') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				 <?php } ?>		
		  <?php  if(get_field('title_video_2')) { ?>			
				<div class=" col-md-6 embed-container space">
					<p><strong><?php the_field('title_video_2'); ?></strong></p>
					<iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_2') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
			<?php } ?>	
			</div>
			<div class="col-lg-8 col-lg-offset-2">
				  <?php  if(get_field('title_video_3')) { ?>			
				<div class=" col-md-6 embed-container space">
					<p><strong><?php the_field('title_video_3'); ?></strong></p>
					<iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_3') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
			<?php } ?>	
				 <?php  if(get_field('title_video_4')) { ?>			
				<div class=" col-md-6 embed-container space">
					<p><strong><?php the_field('title_video_4'); ?></strong></p>
					<iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_4') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				<?php } ?>
				</div>
			<div class="col-lg-8 col-lg-offset-2">
				  <?php  if(get_field('title_video_5')) { ?>			
				<div class=" col-md-6 embed-container space">
					<p><strong><?php the_field('title_video_5'); ?></strong></p>
					<iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_5') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
			<?php } ?>	
				 <?php  if(get_field('title_video_6')) { ?>			
				<div class=" col-md-6 embed-container space">
					<p><strong><?php the_field('title_video_6'); ?></strong></p>
					<iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_6') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				<?php } ?>
				</div>
				<div class="col-lg-8 col-lg-offset-2">
				  <?php  if(get_field('title_video_7')) { ?>			
				<div class=" col-md-6 embed-container space">
					<p><strong><?php the_field('title_video_7'); ?></strong></p>
					<iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_7') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
			<?php } ?>	
				 <?php  if(get_field('title_video_8')) { ?>			
				<div class=" col-md-6 embed-container space">
					<p><strong><?php the_field('title_video_8'); ?></strong></p>
					<iframe width="450" height="265" src="https://www.youtube.com/embed/<?php echo get_field('video_link_8') ?>?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				<?php } ?>
				</div>
			</div>
	<?php edit_post_link('<p><strong>Modifica Pagina</strong></p>'); ?>
	</div>
	</section>
<?php get_footer(2017); ?>