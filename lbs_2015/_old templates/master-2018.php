<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )exit;

/**
 * Template Name: Master 2018
 * @file master-2018.php
 */
get_header( 2017 );
?>




<div class="section sub-home sub-home-master" id="sub-home">
	<div class="container">
		<div class="row sub-home-list">
			<div class="sub-home-grid">
				<div class="col-md-12">
					<div class="sub-home-heading">
						<header>
							<h1>
								<?php echo the_title(); ?>
							</h1>
						</header>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="featurette-divider"></div>
<section class="cards courses-cards">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="vid">
					<iframe width="" height="" src="//www.youtube.com/embed/7VuI-HXka6s?wmode=transparent&rel=0&showinfo=0&controls=0" frameborder="0" allowfullscreen wmode="Opaque"></iframe>
				</div>
			</div>
			<div class="col-md-4 grid-row-quotes grid-col">
				<p><?php echo get_field('intro') ?></p>
			</div>
		</div>
		<div class="featurette-divider"></div>
		
			

<?php  if(get_field('master_1_title')) { ?>
		<div class="row">
			<div class="col-md-12">	

			<!--BEGIN MASTER -->
				<a href="<?php echo get_field('master_1_link') ?>" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo get_field('master_1_img') ?>" data-at2x="<?php echo get_field('master_1_img') ?>" class="img-responsive " alt="<?php echo get_field('master_1_title') ?>">
								<div class="master-image">
									<h3><span><?php echo get_field('master_1_title') ?></span></h3>
									<p><?php echo get_field('lingua_master_1') ?></p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo get_field('durata_master') ?> 
<span style="font-size: 14px; font-weight: lighter">  <?php echo get_field('mesi_master_1') ?> </span> </h3>
						</div>
					</div>
				</a>
<?php } ?>	
<!--END MASTER -->
			
	<?php  if(get_field('master_2_title')) { ?>
			<!--BEGIN MASTER -->
				<a href="<?php echo get_field('master_2_link') ?>" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo get_field('master_2_img') ?>" data-at2x="<?php echo get_field('master_2_img') ?>" class="img-responsive " alt="<?php echo get_field('master_2_title') ?>">
								<div class="master-image">
									<h3><span><?php echo get_field('master_2_title') ?></span></h3>
									<p><?php echo get_field('lingua_master_2') ?></p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo get_field('durata_master_2') ?> 
<span style="font-size: 14px; font-weight: lighter">  <?php echo get_field('mesi_master_2') ?> </span> </h3>
						</div>
					</div>
				</a>
<?php } ?>	
<!--END MASTER -->		
			
				
				
<!--END MASTER -->
			
	<?php  if(get_field('master_3_title')) { ?>
			<!--BEGIN MASTER -->
				<a href="<?php echo get_field('master_3_link') ?>" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo get_field('master_3_img') ?>" data-at2x="<?php echo get_field('master_3_img') ?>" class="img-responsive " alt="<?php echo get_field('master_3_title') ?>">
								<div class="master-image">
									<h3><span><?php echo get_field('master_3_title') ?></span></h3>
									<p><?php echo get_field('lingua_master_3') ?></p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo get_field('durata_master_3') ?> 
<span style="font-size: 14px; font-weight: lighter">  <?php echo get_field('mesi_master_3') ?> </span> </h3>
						</div>
					</div>
				</a>
<?php } ?>	
<!--END MASTER -->					
				
				

</div> <!--END col-md-12 -->
	</div> <!--END row -->
     
     
     
     <?php  if(get_field('master_4_title')) { ?>
     
     <div class="row">
			<div class="col-md-12">	

			<!--BEGIN MASTER -->
				<a href="<?php echo get_field('master_4_link') ?>" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo get_field('master_4_img') ?>" data-at2x="<?php echo get_field('master_4_img') ?>" class="img-responsive " alt="<?php echo get_field('master_4_title') ?>">
								<div class="master-image">
									<h3><span><?php echo get_field('master_4_title') ?></span></h3>
									<p><?php echo get_field('lingua_master_4') ?></p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo get_field('durata_master_4') ?> 
<span style="font-size: 14px; font-weight: lighter">  <?php echo get_field('mesi_master_4') ?> </span> </h3>
						</div>
					</div>
				</a>
<?php } ?>	
<!--END MASTER -->
			
	<?php  if(get_field('master_5_title')) { ?>
			<!--BEGIN MASTER -->
				<a href="<?php echo get_field('master_5_link') ?>" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo get_field('master_5_img') ?>" data-at2x="<?php echo get_field('master_5_img') ?>" class="img-responsive " alt="<?php echo get_field('master_5_title') ?>">
								<div class="master-image">
									<h3><span><?php echo get_field('master_5_title') ?></span></h3>
									<p><?php echo get_field('lingua_master_5') ?></p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo get_field('durata_master_5') ?> 
<span style="font-size: 14px; font-weight: lighter">  <?php echo get_field('mesi_master_5') ?> </span> </h3>
						</div>
					</div>
				</a>
<?php } ?>	
<!--END MASTER -->		
			
				
				
<!--END MASTER -->
			
	<?php  if(get_field('master_6_title')) { ?>
			<!--BEGIN MASTER -->
				<a href="<?php echo get_field('master_6_link') ?>" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo get_field('master_6_img') ?>" data-at2x="<?php echo get_field('master_6_img') ?>" class="img-responsive " alt="<?php echo get_field('master_6_title') ?>">
								<div class="master-image">
									<h3><span><?php echo get_field('master_6_title') ?></span></h3>
									<p><?php echo get_field('lingua_master_6') ?></p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo get_field('durata_master_6') ?> 
<span style="font-size: 14px; font-weight: lighter">  <?php echo get_field('mesi_master_6') ?> </span> </h3>
						</div>
					</div>
				</a>
<?php } ?>	
<!--END MASTER -->					
				
				
				
	 <?php  if(get_field('master_7_title')) { ?>
     
     <div class="row">
			<div class="col-md-12">	

			<!--BEGIN MASTER -->
				<a href="<?php echo get_field('master_7_link') ?>" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo get_field('master_7_img') ?>" data-at2x="<?php echo get_field('master_7_img') ?>" class="img-responsive " alt="<?php echo get_field('master_7_title') ?>">
								<div class="master-image">
									<h3><span><?php echo get_field('master_7_title') ?></span></h3>
									<p><?php echo get_field('lingua_master_7') ?></p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo get_field('durata_master_7') ?> 
<span style="font-size: 14px; font-weight: lighter">  <?php echo get_field('mesi_master_7') ?> </span> </h3>
						</div>
					</div>
				</a>
<?php } ?>	
<!--END MASTER -->
			
	<?php  if(get_field('master_8_title')) { ?>
			<!--BEGIN MASTER -->
				<a href="<?php echo get_field('master_8_link') ?>" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo get_field('master_5_img') ?>" data-at2x="<?php echo get_field('master_8_img') ?>" class="img-responsive " alt="<?php echo get_field('master_8_title') ?>">
								<div class="master-image">
									<h3><span><?php echo get_field('master_8_title') ?></span></h3>
									<p><?php echo get_field('lingua_master_8') ?></p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo get_field('durata_master_8') ?> 
<span style="font-size: 14px; font-weight: lighter">  <?php echo get_field('mesi_master_8') ?> </span> </h3>
						</div>
					</div>
				</a>
<?php } ?>	
<!--END MASTER -->		
			
				
				
<!--END MASTER -->
			
	<?php  if(get_field('master_9_title')) { ?>
			<!--BEGIN MASTER -->
				<a href="<?php echo get_field('master_9_link') ?>" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo get_field('master_9_img') ?>" data-at2x="<?php echo get_field('master_9_img') ?>" class="img-responsive " alt="<?php echo get_field('master_9_title') ?>">
								<div class="master-image">
									<h3><span><?php echo get_field('master_9_title') ?></span></h3>
									<p><?php echo get_field('lingua_master_9') ?></p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo get_field('durata_master_9') ?> 
<span style="font-size: 14px; font-weight: lighter">  <?php echo get_field('mesi_master_9') ?> </span> </h3>
						</div>
					</div>
				</a>
<?php } ?>	
<!--END MASTER -->								
				
				
		<?php  if(get_field('master_10_2')) { ?>
			<!--BEGIN MASTER -->
				<a href="<?php echo get_field('master_10_link_2') ?>" class="col-md-4 col-sm-6 master-preview">
					<div class="course-item master-thumb">
						<div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo get_field('master_10_img_2') ?>" data-at2x="<?php echo get_field('master_10_img_2') ?>" class="img-responsive " alt="<?php echo get_field('master_10_2') ?>">
								<div class="master-image">
									<h3><span><?php echo get_field('master_10_2') ?></span></h3>
									<p><?php echo get_field('lingua_master_10_2') ?></p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
						<div class="course-date bg-color-1 clear-fix">
							<h3 class="master-info"><span class="glyphicon glyphicon-calendar"></span> <?php echo get_field('durata_master_10_2') ?> 
<span style="font-size: 14px; font-weight: lighter">  <?php echo get_field('mesi_master_10_2') ?> </span> </h3>
						</div>
					</div>
				</a>
<?php } ?>	
				

</div> <!--END col-md-12 -->
	</div>
     
     
     
      <?php edit_post_link('<p>Modifica Pagina</p>', ''); ?>
     </div>
   </div>
</div>
</section>
<div class="featurette-divider"></div>
</section> <?php get_footer( 2017 );?>