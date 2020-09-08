<div class="container">
		<div class="row">

			<h2 class="block-title h2 white-style">Faculty</h2>

			<?php 
$docenti_ids = array();
$docenti_ids['it']=array('136', '458');
$docenti_ids['en']=array('138', '2304'); // cambiare 2304
 
 $args = array(
 	'post__in'	       => $docenti_ids[ICL_LANGUAGE_CODE],
	'posts_per_page'   => 2,
	'offset'           => 0,
	'orderby'          => 'ID',
	'order'            => 'ASC',
	'post_type'        => 'page',
	'post_status'      => 'publish',
	'suppress_filters' => true );
	

$docenti=  get_posts($args);
if (!(empty( $docenti))) { 
 

$d = 0;

foreach($docenti as $docente )  {
$d++	

?>
			<div class="col-lg-4 nopadding
<?php if($d==2){
print " right ";	
$d = 0;
}
?>">
				<div class="medium">
					<article class="docente">
						<a href="<?php echo get_permalink($docente->ID) ?>" title="<?php echo $docente->post_title ?>">
							<?php 
	$img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $docente->post_title,
);
	echo get_the_post_thumbnail($docente->ID, 'thumbnail',$img_attr);
	
	?>
							<div class="text">
								<h3 class="headline nome">
									<?php echo $docente->post_title ?>
								</h3>
								<ul class="docente-features">
									<li>
										<?php echo get_post_meta($docente->ID, 'classificazione', true); ?>
									</li>
									<li>
										<?php echo get_post_meta($docente->ID, 'insegnamento', true); ?>
									</li>
									<li>
										<?php echo get_post_meta($docente->ID, 'carica', true); ?>
									</li>
									<li>
										<?php echo get_post_meta($docente->ID, 'email', true); ?>
									</li>
								</ul>
							</div>
						</a>
					</article>
				</div>
			</div>
			<?php } // END foreach ?>
			<?php } // END if ?>
		</div>
		<p style="margin-top:20px;"><a href="<?php echo html_entity_decode(get_field('link_tuti_i_docenti')); ?>" class="button col-md-12"><span class="white-style"><?php echo html_entity_decode(get_field('etichetta_tutti_i_docenti')); ?></span></a>
		</p>
		<div class="row">

			<h2 class="block-title h2 white-style">Adjunct Faculty</h2>

			<?php 
$docenti_ids = array();
$docenti_ids['it']=array('136', '458');
$docenti_ids['en']=array('138', '2304'); // cambiare 2304
 
 $args = array(
 	'post__in'	       => $docenti_ids[ICL_LANGUAGE_CODE],
	'posts_per_page'   => 4,
	'offset'           => 0,
	'orderby'          => 'ID',
	'order'            => 'ASC',
	'post_type'        => 'page',
	'post_status'      => 'publish',
	'suppress_filters' => true );
	

$docenti=  get_posts($args);
if (!(empty( $docenti))) { 
 

$d = 0;

foreach($docenti as $docente )  {
$d++	

?>
			<div class="col-lg-4 nopadding
<?php if($d==2){
print " right ";	
$d = 0;
}
?>">
				<div class="medium">
					<article class="docente">
						<a href="<?php echo get_permalink($docente->ID) ?>" title="<?php echo $docente->post_title ?>">
							<?php 
	$img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $docente->post_title,
);
	echo get_the_post_thumbnail($docente->ID, 'thumbnail',$img_attr);
	
	?>
							<div class="text">
								<h3 class="headline nome">
									<?php echo $docente->post_title ?>
								</h3>
								<ul class="docente-features">
									<li>
										<?php echo get_post_meta($docente->ID, 'classificazione', true); ?>
									</li>
									<li>
										<?php echo get_post_meta($docente->ID, 'insegnamento', true); ?>
									</li>
									<li>
										<?php echo get_post_meta($docente->ID, 'carica', true); ?>
									</li>
									<li>
										<?php echo get_post_meta($docente->ID, 'email', true); ?>
									</li>
								</ul>
							</div>
						</a>
					</article>
				</div>
			</div>
			<?php } // END foreach ?>
			<?php } // END if ?>
		</div>
		<div class="row">
			<?php 
$docenti_ids = array();
$docenti_ids['it']=array('136', '458');
$docenti_ids['en']=array('138', '2304'); // cambiare 2304
 
 $args = array(
 	'post__in'	       => $docenti_ids[ICL_LANGUAGE_CODE],
	'posts_per_page'   => 4,
	'offset'           => 0,
	'orderby'          => 'ID',
	'order'            => 'ASC',
	'post_type'        => 'page',
	'post_status'      => 'publish',
	'suppress_filters' => true );
	

$docenti=  get_posts($args);
if (!(empty( $docenti))) { 
 

$d = 0;

foreach($docenti as $docente )  {
$d++	

?>
			<div class="col-lg-4 nopadding
<?php if($d==2){
print " right ";	
$d = 0;
}
?>">
				<div class="medium">
					<article class="docente">
						<a href="<?php echo get_permalink($docente->ID) ?>" title="<?php echo $docente->post_title ?>">
							<?php 
	$img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $docente->post_title,
);
	echo get_the_post_thumbnail($docente->ID, 'thumbnail',$img_attr);
	
	?>
							<div class="text">
								<h3 class="headline nome">
									<?php echo $docente->post_title ?>
								</h3>
								<ul class="docente-features">
									<li>
										<?php echo get_post_meta($docente->ID, 'classificazione', true); ?>
									</li>
									<li>
										<?php echo get_post_meta($docente->ID, 'insegnamento', true); ?>
									</li>
									<li>
										<?php echo get_post_meta($docente->ID, 'carica', true); ?>
									</li>
									<li>
										<?php echo get_post_meta($docente->ID, 'email', true); ?>
									</li>
								</ul>
							</div>
						</a>
					</article>
				</div>
			</div>
			<?php } // END foreach ?>
			<?php } // END if ?>
		</div>

		<div class="row">
			<p style="margin-top:20px;"> <a href="<?php echo html_entity_decode(get_field('link_tuti_i_docenti_adjunt')); ?>" class="button col-md-12"><span class="white-style"> <?php echo html_entity_decode(get_field('etichetta_tutti_i_docenti_adjunt')); ?></span></a>
			</p>
		</div>


		<!-- END container -->
	</div>