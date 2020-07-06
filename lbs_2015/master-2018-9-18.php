<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;

/**
 * Template Name: Master 2018 2° parte
 * @file master-2018-9-18.php
 */
get_header( 2017 );
?>

<section class="cards courses-cards">
	<div class="container">
			
	<?php  if(get_field('master_10_1_title')) { ?>
			<!--BEGIN MASTER -->
				<a href="<?php echo get_field('master_10_1_title') ?>" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo get_field('master_10_1_title') ?>" data-at2x="<?php echo get_field('master_10_1_title') ?>" class="img-responsive " alt="<?php echo get_field('master_10_1_title') ?>">
								<div class="master-image">
									<h3><span><?php echo get_field('master_10_1_title') ?></span></h3>
									<p><?php echo get_field('master_10_1_title') ?></p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo get_field('master_10_1_title') ?> 
<span style="font-size: 14px; font-weight: lighter">  <?php echo get_field('master_10_1_title') ?> </span> </h3>
						</div>
					</div>
				</a>
<?php } ?>	</div>
</section>
<!--END MASTER -->	
     
     
    
     
     
     